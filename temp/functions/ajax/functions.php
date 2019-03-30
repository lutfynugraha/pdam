<?php
include_once '../../base/db.php';

if(isset($_GET['id_p']))
{
	$id_pelanggan = $_GET['id_p'];
	//$id_pelanggan = 12345;
	$start = date("Y-m-d 00:00:00");
	$end = date("Y-m-d 23:59:59");

	$query = "SELECT * FROM penggunaan_air WHERE date BETWEEN '{$start}' AND '{$end}'  && id_pelanggan='{$id_pelanggan}' ORDER BY id desc LIMIT 10";
	//$query = "SELECT id, id_pelanggan, value, SUM(value) AS total_air, date FROM penggunaan_air WHERE id_pelanggan='{$id_pelanggan}' ORDER BY id desc LIMIT 10";

	$result = mysqli_query($con, $query);  
	$number = 1;
	while($row = mysqli_fetch_assoc($result)):
	    echo "<tr>";
	    echo "<td>{$number}</td>";
	    echo "<td>{$row['id_pelanggan']}</td>";
	    echo "<td>{$row['value']} L</td>";
	    echo "<td>{$row['total_air']} L</td>";
	    echo "<td>{$row['date']}</td>";
	    echo "</tr>";
	    $number+=1;
	endwhile;
}

else if(!isset($_GET['id_p']))
{
	$start = date("Y-m-d 00:00:00");
	$end = date("Y-m-d 23:59:59");
	$day = date('d');
	$month = date('m');
	$year = date('Y');


	//$query = "SELECT * FROM penggunaan_air WHERE date BETWEEN '{$start}' AND '{$end}' ORDER BY id DESC Limit 10";
	//$query = "SELECT id, id_pelanggan, value, date, sum(if(month(`date`) = 12 && year(`date`) = 2018 && day(`date`) = 01, `value`,0)) as total_air FROM penggunaan_air LEFT JOIN pelanggan USING(id_pelanggan) WHERE date BETWEEN '{$start}' AND '{$end}' GROUP BY id_pelanggan ORDER BY id";

	$query = "SELECT id, id_pelanggan, value, date, sum(if(month(`date`) = $month && year(`date`) = $year && day(`date`) = $day, `value`,0)) as total_air FROM penggunaan_air LEFT JOIN pelanggan USING(id_pelanggan)GROUP BY id_pelanggan DESC LIMIT 10";

	//$query = "SELECT id, id_pelanggan, value, SUM(value) AS total_air, date FROM penggunaan_air WHERE id_pelanggan='{$id_pelanggan}' ORDER BY id desc LIMIT 10";
	$result = mysqli_query($con, $query);  

	$number = 1;
	while($row = mysqli_fetch_assoc($result)):
	    echo "<tr>";
	    echo "<td>{$number}</td>";
	    echo "<td><a href='?menu=pa_pelanggan&id_p={$row['id_pelanggan']}' class='btn btn-primary'>{$row['id_pelanggan']}</a></td>";
	    echo "<td>{$row['value']} L</td>";
	    echo "<td>{$row['total_air']} L</td>";
	    echo "<td>{$row['date']}</td>";
	    echo "</tr>";
	    $number+=1;
	endwhile;
}

