<?php
include('config/dbconn.php');

$model_id = $_POST['model_id'];
$generationsQuery = "SELECT generation_id, generation_name FROM generations WHERE model_id = $model_id AND status = 1";
$generationsResult = mysqli_query($con, $generationsQuery);

echo '<option disabled selected>Select Generation</option>';
while ($row = mysqli_fetch_assoc($generationsResult)) {
    echo '<option value="'.$row['generation_id'].'">'.$row['generation_name'].'</option>';
}

mysqli_close($conn);
?>
