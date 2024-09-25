<?php
include '../config/dbconn.php';

// Fetch models based on brand
if (isset($_POST['brand_id'])) {
  $brand_id = $_POST['brand_id'];

  $model_query = "SELECT * FROM models WHERE brand_id = '$brand_id'";
  $model_query_run = mysqli_query($con, $model_query);

  $models = [];

  if (mysqli_num_rows($model_query_run) > 0) {
    while ($row = mysqli_fetch_assoc($model_query_run)) {
      $models[] = ['model_id' => $row['model_id'], 'model_name' => $row['model_name']];
    }
  }

  echo json_encode($models); // Output the models in JSON format

} elseif (isset($_POST['model_id'])) {
  $model_id = $_POST['model_id'];

  $gen_query = "SELECT * FROM generations WHERE model_id = '$model_id'";
  $gen_query_run = mysqli_query($con, $gen_query);

  $generations = [];

  if (mysqli_num_rows($gen_query_run) > 0) {
    while ($row = mysqli_fetch_assoc($gen_query_run)) {
      $generations[] = ['generation_id' => $row['generation_id'], 'generation_name' => $row['generation_name']];
    }
  }

  echo json_encode($generations); // Output the generations in JSON format

} elseif (isset($_POST['generation_id'])) {
  $generation_id = $_POST['generation_id'];

  $eng_query = "SELECT * FROM engines WHERE generation_id = '$generation_id'";
  $eng_query_run = mysqli_query($con, $eng_query);

  $engines = [];

  if (mysqli_num_rows($eng_query_run) > 0) {
    while ($row = mysqli_fetch_assoc($eng_query_run)) {
      $engines[] = ['engine_id' => $row['engine_id'], 'engine_name' => $row['engine_name']];
    }
  }

  echo json_encode($engines); // Output the engines in JSON format

} elseif (isset($_POST['engine_id'])) {
  $engine_id = $_POST['engine_id'];

  $ecu_query = "SELECT * FROM ecu WHERE engine_id = '$engine_id'";
  $ecu_query_run = mysqli_query($con, $ecu_query);

  $ECUs = [];

  if (mysqli_num_rows($ecu_query_run) > 0) {
    while ($row = mysqli_fetch_assoc($ecu_query_run)) {
      $ECUs[] = ['ecu_id' => $row['ecu_id'], 'ecu_name' => $row['ecu_name']];
    }
  }

  echo json_encode($ECUs); // Output the ECUs in JSON format
}
