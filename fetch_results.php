<?php
include('config/dbconn.php');

$brand = $_POST['brand'];
$model = $_POST['model'];
$generation = $_POST['generation'];
$engine = $_POST['engine'];

$query = "SELECT * FROM ecu WHERE engine_id = $engine";

if (!empty($searchText)) {
    $query .= " AND (ecu LIKE '%$searchText%' OR hw_no LIKE '%$searchText%' OR sw_no LIKE '%$searchText%')";
}

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>'.$row['name'].' '.$row['model_name'].', '.$row['generation_name'].'</td>';
        echo '<td>'.$row['engine_name'].'</td>';
        echo '<td>'.$row['ecu'].'</td>';
        echo '<td>'.$row['hw_no'].'</td>';
        echo '<td>'.$row['sw_no'].'</td>';
        echo '<td>'.$row['read_method'].'</td>';
        echo '<td>'.$row['ecu_prod'].'</td>';
        echo '<td>'.$row['price'].'</td>';
        echo '<td class="btn_tr"><a class="tb_btn btn btn-danger ms-2" href="#">view</a></td>';
        echo '<td class="btn_tr"><a class="tb_btn btn btn-success" href="#">Purchase</a></td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="10" class="text-center">No results found.</td></tr>';
}

mysqli_close($conn);
?>
