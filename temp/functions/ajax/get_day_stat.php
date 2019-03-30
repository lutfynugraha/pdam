<?php
include_once '../../base/db.php';
$start = date("Y-m-d 00:00:00");
$end = date("Y-m-d 23:59:59");
$id_pelanggan =$_GET['id_p'];

// #################### GET MIN VALUE, DATE
$query = "SELECT value, date FROM penggunaan_air WHERE date BETWEEN '{$start}' AND '{$end}' && id_pelanggan='{$id_pelanggan}' ORDER BY ID DESC";
$result = mysqli_query($con, $query);

$min = 1000;
$min_date = '';

while($get = mysqli_fetch_assoc($result)):
    if($get['value'] < $min){
        $min = $get['value'];
        $min_date = $get['date'];
    }
endwhile;

$min_date = date("H:i:s",strtotime($min_date));
// #################### GET MIN VALUE, DATE


// #################### GET MAX VALUE, DATE
$query = "SELECT value, date FROM penggunaan_air WHERE date BETWEEN '{$start}' AND '{$end}' && id_pelanggan='{$id_pelanggan}' ORDER BY ID DESC";
$result = mysqli_query($con, $query);
$max = -1000;
$max_date = '';

while($get = mysqli_fetch_assoc($result)):
    if($get['value'] > $max){
        $max = $get['value'];
        $max_date = $get['date'];
    }
endwhile;

$max_date = date("H:i:s", strtotime($max_date));
// #################### GET MAX VALUE, DATE


// #################### GET TOTAL BY ID
$query = "SELECT SUM(value) AS total FROM penggunaan_air WHERE date BETWEEN '{$start}' AND '{$end}' && id_pelanggan='{$id_pelanggan}' ORDER BY ID DESC";
$result = mysqli_query($con, $query);
$gettotal = mysqli_fetch_assoc($result);
$total = $gettotal['total'];
if($total >= 1000)
{
    $hasil = $total/1000;
    $hasil = number_format($hasil,2)." M<sup>3</sup>";
}
else
{
    $hasil = $total;
    $hasil = number_format($hasil,2)." L";
}

// #################### GET TOTAL BY ID


// #################### GET AVERAGE
$query = "SELECT AVG(value) AS ave FROM penggunaan_air WHERE date BETWEEN '{$start}' AND '{$end}' && id_pelanggan='{$id_pelanggan}' ORDER BY ID DESC";
$result = mysqli_query($con, $query);
$get = mysqli_fetch_assoc($result);
$ave = $get['ave'];
$ave = number_format($ave,2);

if($min == 1000){
    $min = '';
}
if($max == -1000){
    $max = '';
}
// #################### GET AVERAGE

// #################### SEND DATA DENGAN PEMISAH TANDA KOMA
echo $min.','.$min_date.','.$max.','.$max_date.','.$ave.','.$hasil;
// #################### SEND DATA DENGAN PEMISAH TANDA KOMA

?>