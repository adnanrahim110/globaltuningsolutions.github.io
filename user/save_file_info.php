<?php
session_start();
include '../config/dbconn.php';
include '../functions/myfunctions.php';

if (isset($_POST['upload_file_btn'])) {
  // Gather the form data only if not empty
  $user_id = $_POST['user_id'];
  $brand_name = $_POST['brand_name'];
  $model_name = $_POST['model_name'];
  $generation_name = $_POST['generation_name'];
  $engine_name = $_POST['engine_name'];
  $ecu_name = $_POST['ecu_name'];
  $power = $_POST['power'];
  $power_metric = $_POST['power_metric'];
  $year = $_POST['year'];
  $gearbox = $_POST['gearbox'];
  $hardware_no = $_POST['hardware_no'];
  $software_no = $_POST['software_no'];
  $method_name = $_POST['method_name'];
  $original_file = $_FILES['original_file']['name'];
  $tuning_type = $_POST['tuning_type'];
  $direct_email = $_POST['email'];
  $time_frame = $_POST['time_frame'];
  $is_on_dyno = $_POST['is_on_dyno'];
  $comment = $_POST['comment'];
  if (empty($user_id) || empty($brand_name) || empty($model_name) || empty($generation_name) || empty($engine_name) || empty($ecu_name) || empty($power) || empty($power_metric) || empty($year) || empty($gearbox) || empty($hardware_no) || empty($software_no) || empty($method_name)) {

    redirect("upload-files", "Please fill all the fields", "warning");
  } elseif (empty($original_file) || empty($tuning_type) || empty($direct_email) || empty($time_frame) || empty($is_on_dyno) || empty($comment)) {

    redirect("upload_file-next_step", "Please fill all the fields", "warning");
  } else {

    if ($original_file) {
      // File upload path
      $target_dir = "uploads/service_files/";
      $target_file = $target_dir . basename($original_file);

      // Move uploaded file to the target directory
      if (move_uploaded_file($_FILES["original_file"]["tmp_name"], $target_file)) {
        // Prepare the SQL statement to insert data into the `file_service` table
        $query = "INSERT INTO file_service (user_id, brand_name, model_name, generation_name, engine_name, ecu_name, power, power_metric, year, gearbox, hardware_no, software_no, method_name, original_file, tuning_type, direct_email, time_frame, is_on_dyno, comment)
                      VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        // Prepare the statement
        if ($stmt = $con->prepare($query)) {
          // Bind the parameters
          $stmt->bind_param('isssssisisiisssssss', $user_id, $brand_name, $model_name, $generation_name, $engine_name, $ecu_name, $power, $power_metric, $year, $gearbox, $hardware_no, $software_no, $method_name, $original_file, $tuning_type, $direct_email, $time_frame, $is_on_dyno, $comment);

          // Execute the statement
          if ($stmt->execute()) {

            redirect("upload-files", "File Uploaded successfully. We will get back to you via email.", "success");
          } else {
            redirect("upload-files", "Failed to add file service data.", "danger");
          }
        } else {
          redirect("upload-files", "Database error: failed to prepare statement.", "danger");
        }
      } else {
        redirect("upload-files", "File upload failed.", "danger");
      }
    } else {
      redirect("upload-files", "No file selected for upload.", "warning");
    }
  }
}
