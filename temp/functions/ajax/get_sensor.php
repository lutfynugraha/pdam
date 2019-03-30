<?php
include_once '../../base/db.php';

if(isset($_GET['last'])){
	$id_pelanggan =$_GET['id_p'];
    //$query = "SELECT value FROM penggunaan_air ORDER BY ID DESC LIMIT 1;";
    $start = date("Y-m-d 00:00:00");
    $end = date("Y-m-d 23:59:59");
    
    // GET MIN VALUE, DATE
    $query = "SELECT value FROM penggunaan_air WHERE date BETWEEN '{$start}' AND '{$end}' && id_pelanggan='{$id_pelanggan}' ORDER BY ID DESC LIMIT 1";
    $result = mysqli_query($con, $query);  
    $result = mysqli_fetch_assoc($result);
    $result = $result['value'];
    echo $result;
}


?>