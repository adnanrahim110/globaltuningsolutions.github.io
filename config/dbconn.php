<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "tunning";



// $host = "127.0.0.1:3306";
// $username = "u694204903_globaltuning";
// $password = "@Tuning1";
// $database = "u694204903_globaltuning";

// Creating database connection
$con = mysqli_connect($host, $username, $password, $database);

// Checking Database connection
if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}


?>

