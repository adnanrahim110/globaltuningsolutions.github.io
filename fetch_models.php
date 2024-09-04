<?php
include('config/dbconn.php');

$brand_id = $_POST['brand_id'];
$modelsQuery = "SELECT id, model_name FROM models WHERE brand_id = $brand_id AND status = 1";
$modelsResult = mysqli_query($con, $modelsQuery);

echo '<option disabled selected>Choose a Model</option>';
while ($row = mysqli_fetch_assoc($modelsResult)) {
    echo '<option value="'.$row['id'].'">'.$row['model_name'].'</option>';
}

?>
