<?php
ob_start();
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../config/dbconn.php';
include '../functions/myfunctions.php';

// Add new brand
if (isset($_POST['add_brand'])) {
  $brand = $_POST['brand'];

  // Insert new brand into the database
  $brand_query = "INSERT INTO brands (name) VALUES ('$brand')";
  $brand_query_run = mysqli_query($con, $brand_query);

  if ($brand_query_run) {
    redirect('add-a-car', 'New brand added successfully!', 'success');
  } else {
    redirect('add-a-car', 'Failed to add new brand!', 'danger');
  }
}

// Add new model
if (isset($_POST['add_model'])) {
  $brand_id = $_POST['brand_id'];
  $model = $_POST['model'];

  // Insert model into the database
  $model_query = "INSERT INTO models (brand_id, model_name) VALUES ('$brand_id', '$model')";
  $model_query_run = mysqli_query($con, $model_query);

  if ($model_query_run) {
    // Retrieve the brand name for the success message
    $brand_query = "SELECT name FROM brands WHERE id = '$brand_id'";
    $brand_result = mysqli_fetch_assoc(mysqli_query($con, $brand_query));
    $brand_name = $brand_result['name'];

    redirect('add-a-car', "New model '$model' added to brand '$brand_name' successfully!", 'success');
  } else {
    redirect('add-a-car', 'Failed to add new model!', 'danger');
  }
}

// Add new generation
if (isset($_POST['add_generation'])) {
  $model_id = $_POST['model_id'];
  $generation = $_POST['generation'];

  // Insert generation into the database
  $generation_query = "INSERT INTO generations (model_id, generation_name) VALUES ('$model_id', '$generation')";
  $generation_query_run = mysqli_query($con, $generation_query);

  if ($generation_query_run) {
    // Retrieve the model name for the success message
    $model_query = "SELECT model_name FROM models WHERE id = '$model_id'";
    $model_result = mysqli_fetch_assoc(mysqli_query($con, $model_query));
    $model_name = $model_result['model_name'];

    redirect('add-a-car', "Generation '$generation' added to model '$model_name' successfully!", 'success');
  } else {
    redirect('add-a-car', 'Failed to add new generation!', 'danger');
  }
}

if (isset($_POST['add_engine'])) {
  $generation_id = $_POST['generation_id'];
  $engine_name = $_POST['engine_name'];

  // Insert engine name and generation ID into database
  $eng_query = "INSERT INTO engines (generation_id, engine_name) VALUES ('$generation_id', '$engine_name')";
  $eng_query_run = mysqli_query($con, $eng_query);

  if ($eng_query_run) {
    $generation_query = "SELECT generation_name FROM generations WHERE id = '$generation_id'";
    $generation_result = mysqli_fetch_assoc(mysqli_query($con, $generation_query));
    $generation_name = $generation_result['generation_name'];

    redirect('add-a-car', "Engine '$engine_name' added to generation '$generation_name' successfully!", 'success');
  } else {
    redirect('add-a-car', 'Failed to add new engine!', 'danger');
  }
}

if (isset($_POST['add_ecu'])) {
  $engine_id = $_POST['engine_id'];
  $ecu_name = $_POST['ecu_name'];

  // Insert ecu name and ecu ID into database
  $ecu_query = "INSERT INTO ecu (ecu_id, ecu_name) VALUES ('$ecu_id', '$ecu_name')";
  $ecu_query_run = mysqli_query($con, $ecu_query);

  if ($ecu_query_run) {
    $engine_query = "SELECT engine_name FROM engine WHERE id = '$engine_id'";
    $engine_result = mysqli_fetch_assoc(mysqli_query($con, $engine_query));
    $engine_name = $engine_result['engine_name'];

    redirect('add-a-car', "ecu '$ecu_name' added to engine '$engine_name' successfully!", 'success');
  } else {
    redirect('add-a-car', 'Failed to add new ECU!', 'danger');
  }
}

if (isset($_POST['add_method'])) {
  $method_name = $_POST['method_name'];

  // Insert ecu name and ecu ID into database
  $method_query = "INSERT INTO read_method (method_name) VALUES ('$method_name')";
  $method_query_run = mysqli_query($con, $method_query);

  if ($method_query_run) {
    redirect('add-a-car.php', "New Method added successfully!", 'success');
  } else {
    redirect('add-a-car.php', 'Failed to add new Method!', 'danger');
  }
}


ob_end_flush();
