<?php
include('config/dbconn.php');

$generation_id = $_POST['generation_id'];
$enginesQuery = "SELECT id, engine_name FROM engines WHERE generation_id = $generation_id AND status = 1";
$enginesResult = mysqli_query($con, $enginesQuery);

echo '<option disabled selected>Choose an Engine</option>';
while ($row = mysqli_fetch_assoc($enginesResult)) {
    echo '<option value="'.$row['id'].'">'.$row['engine_name'].'</option>';
}

mysqli_close($conn);
?>
