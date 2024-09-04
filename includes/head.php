<?php
session_start();
$current_page = basename($_SERVER['SCRIPT_NAME']);
$servicesPages = [
  'ecu-remaping.php',
  'ecu-remaping-solutions.php',
  'light-commercial-tuning.php',
  'motorcycle-dyno-tuning.php',
  'tractor-ecu-remaping.php',
  'dsg-tuning.php',
  'pops-and-bangs.php',
  'launch-control.php',
  'unbrick-ecu-recovery.php'
];
$isServicesActive = in_array($current_page, $servicesPages);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?> - GLOBAL TUNING SOLUTIONS</title>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/splide.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <?php
  if ($isServicesActive) {
    echo '<link rel="stylesheet" href="assets/css/services.css">';
  }
  ?>
  <link rel="stylesheet" href="assets/css/responsive.css">
  <!-- Alertify JS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />

</head>