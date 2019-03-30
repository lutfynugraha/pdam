<?php
include_once '../../base/db.php';

$start = date("Y-m-d 00:00:00");
$end = date("Y-m-d 23:59:59");

$query = "SELECT * FROM penggunaan_air WHERE date BETWEEN '{$start}' AND '{$end}' ORDER BY id DESC Limit 10";
$result = mysqli_query($con, $query);  

$number = 1;
while($row = mysqli_fetch_assoc($result)):
    echo "<tr>";
    echo "<td>{$number}</td>";
    echo "<td><a href='?menu=pa_pelanggan&id_p={$row['id_pelanggan']}' class='btn btn-primary'>{$row['id_pelanggan']}</a></td>";
    echo "<td>{$row['value']} L</td>";
    echo "<td>{$row['date']}</td>";
    echo "</tr>";
    $number+=1;
endwhile;

?>