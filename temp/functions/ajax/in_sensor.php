<?php
include_once '../../base/db.php';
$temp = '';
$id_pelanggan = '';
if(isset($_GET['temp'])){
    $temp = $_GET['temp'];  
    $data = $temp ;
}
if(isset($_GET['id_pelanggan'])){
    $id_pelanggan = $_GET['id_pelanggan'];
}

$query = "INSERT INTO penggunaan_air (value, id_pelanggan, date) VALUES ({$data}, '{$id_pelanggan}', now());";
$result = mysqli_query($con, $query);  
echo $query;
?>