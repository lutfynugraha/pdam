<?php
include_once '../../base/db.php';
$tahun_sekarang = date("Y");

$query1 = "SELECT SUM(`value`) AS januari FROM penggunaan_air WHERE month(`date`)='01' and year(`date`) = $tahun_sekarang";
$result1 = mysqli_query($con, $query1);
$get1 = mysqli_fetch_assoc($result1);
$januari = $get1['januari'];
echo $januari;

$query2 = "SELECT SUM(`value`) AS februari FROM penggunaan_air WHERE month(`date`)='02' and year(`date`) = $tahun_sekarang";
$result2 = mysqli_query($con, $query2);
$get2 = mysqli_fetch_assoc($result2);
$februari = $get2['februari'];

$query3 = "SELECT SUM(`value`) AS maret FROM penggunaan_air WHERE month(`date`)='03' and year(`date`) = $tahun_sekarang";
$result3 = mysqli_query($con, $query3);
$get3 = mysqli_fetch_assoc($result3);
$maret = $get3['maret'];

$query4 = "SELECT SUM(`value`) AS april FROM penggunaan_air WHERE month(`date`)='04' and year(`date`) = $tahun_sekarang";
$result4 = mysqli_query($con, $query4);
$get4 = mysqli_fetch_assoc($result4);
$april = $get4['april'];

$query5 = "SELECT SUM(`value`) AS mei FROM penggunaan_air WHERE month(`date`)='05' and year(`date`) = $tahun_sekarang";
$result5 = mysqli_query($con, $query5);
$get5 = mysqli_fetch_assoc($result5);
$mei = $get5['mei'];

$query6 = "SELECT SUM(`value`) AS juni FROM penggunaan_air WHERE month(`date`)='06' and year(`date`) = $tahun_sekarang";
$result6 = mysqli_query($con, $query6);
$get6 = mysqli_fetch_assoc($result6);
$juni = $get6['juni'];

$query7 = "SELECT SUM(`value`) AS juli FROM penggunaan_air WHERE month(`date`)='07' and year(`date`) = $tahun_sekarang";
$result7 = mysqli_query($con, $query7);
$get7 = mysqli_fetch_assoc($result7);
$juli = $get7['juli'];

$query8 = "SELECT SUM(`value`) AS agustus FROM penggunaan_air WHERE month(`date`)='08' and year(`date`) = $tahun_sekarang";
$result8 = mysqli_query($con, $query8);
$get8 = mysqli_fetch_assoc($result8);
$agustus = $get8['agustus'];

$query9 = "SELECT SUM(`value`) AS september FROM penggunaan_air WHERE month(`date`)='09' and year(`date`) = $tahun_sekarang";
$result9 = mysqli_query($con, $query9);
$get9 = mysqli_fetch_assoc($result9);
$september = $get9['september'];

$query10 = "SELECT SUM(`value`) AS oktober FROM penggunaan_air WHERE month(`date`)='10' and year(`date`) = $tahun_sekarang";
$result10 = mysqli_query($con, $query10);
$get10 = mysqli_fetch_assoc($result10);
$oktober = $get10['oktober'];

$query11 = "SELECT SUM(`value`) AS november FROM penggunaan_air WHERE month(`date`)='11' and year(`date`) = $tahun_sekarang";
$result11 = mysqli_query($con, $query11);
$get11 = mysqli_fetch_assoc($result11);
$november = $get11['november'];

$query12 = "SELECT SUM(`value`) AS desember FROM penggunaan_air WHERE month(`date`)='12' and year(`date`) = $tahun_sekarang";
$result12 = mysqli_query($con, $query12);
$get12 = mysqli_fetch_assoc($result12);
$desember = $get12['desember'];

$query13 = "SELECT SUM(`value`) AS total FROM penggunaan_air WHERE year(`date`) = $tahun_sekarang";
$result13 = mysqli_query($con, $query13);
$get13 = mysqli_fetch_assoc($result13);
$total = $get13['total'];

echo $januari.','.$februari.','.$maret.','.$april.','.$mei.','.$juni.','.$juli.','.$agustus.','.$september.','.$oktober.','.$november.','.$desember.','.$total;

?>