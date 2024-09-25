<?php
// Database connection
include '../config/dbconn.php';

// Fetch data from the RestCountries API
$api_url = 'https://restcountries.com/v3.1/all';
$response = file_get_contents($api_url);
$countries = json_decode($response, true);

// Array to store country data with proper numcodes
$country_data = [];

foreach ($countries as $country) {
  // Short name and country codes
  $short_name = $con->real_escape_string($country['name']['common']);
  $iso2 = $con->real_escape_string($country['cca2']);
  $iso3 = $con->real_escape_string($country['cca3']);

  // Handle country calling code (numcode)
  if (isset($country['idd']['root']) && isset($country['idd']['suffixes'][0])) {
    $numcode = $con->real_escape_string($country['idd']['root'] . $country['idd']['suffixes'][0]); // Full country code
  } else {
    $numcode = ''; // If no calling code, leave it empty
  }

  // Flag image
  $flag_img = $con->real_escape_string($country['flags']['png']);

  // Add the country data to an array for sorting later
  $country_data[] = [
    'short_name' => $short_name,
    'iso2' => $iso2,
    'iso3' => $iso3,
    'numcode' => $numcode,
    'flag_img' => $flag_img
  ];
}

// Sort the country data by numcode (ascending)
usort($country_data, function ($a, $b) {
  return strcmp($a['numcode'], $b['numcode']);
});

// Insert the sorted country data into the database
foreach ($country_data as $country) {
  // SQL query to insert country data
  $query = "INSERT INTO tblcountries (short_name, iso2, iso3, numcode, flag_img)
              VALUES ('{$country['short_name']}', '{$country['iso2']}', '{$country['iso3']}', '{$country['numcode']}', '{$country['flag_img']}')";

  if ($con->query($query) === TRUE) {
    echo "Inserted country: {$country['short_name']} with code: {$country['numcode']} <br>";
  } else {
    echo "Error: " . $con->error . "<br>";
  }
}
