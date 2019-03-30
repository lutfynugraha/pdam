<!-- Page Content -->
<?php
$tahun_sekarang = date("Y");
$tahun_sebelumnya = $tahun_sekarang - 1;
$bulanya = date("m");

if ($bulanya == 1) {
    $tampilbulanya = array(1,12,11,10,9,8,7,6,5,4,3,2);
    $tampiltahunya = array($tahun_sekarang,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya);
    $namabulanya = array('Januari','Desember','November','Oktober','September','Agutus','Juli','Juni','Mei','April','Maret','Februari');
}
else if ($bulanya == 2) {
    $tampilbulanya = array(2,1,12,11,10,9,8,7,6,5,4,3);
    $tampiltahunya = array($tahun_sekarang,$tahun_sekarang,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya);
    $namabulanya = array('Februari','Januari','Desember','November','Oktober','September','Agutus','Juli','Juni','Mei','April','Maret');
}
else if ($bulanya == 3) {
    $tampilbulanya = array(3,2,1,12,11,10,9,8,7,6,5,4);
    $tampiltahunya = array($tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya);
    $namabulanya = array('Maret','Februari','Januari','Desember','November','Oktober','September','Agutus','Juli','Juni','Mei','April');
}
else if ($bulanya == 4) {
    $tampilbulanya = array(4,3,2,1,12,11,10,9,8,7,6,5);
    $tampiltahunya = array($tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya);
    $namabulanya = array('April','Maret','Februari','Januari','Desember','November','Oktober','September','Agutus','Juli','Juni','Mei');
}
else if ($bulanya == 5) {
    $tampilbulanya = array(5,4,3,2,1,12,11,10,9,8,7,6);
    $tampiltahunya = array($tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya);
    $namabulanya = array('Mei','April','Maret','Februari','Januari','Desember','November','Oktober','September','Agutus','Juli','Juni');
}
else if ($bulanya == 6) {
    $tampilbulanya = array(6,5,4,3,2,1,12,11,10,9,8,7);
    $tampiltahunya = array($tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya);
    $namabulanya = array('Juni','Mei','April','Maret','Februari','Januari','Desember','November','Oktober','September','Agutus','Juli');
}
else if ($bulanya == 7) {
    $tampilbulanya = array(7,6,5,4,3,2,1,12,11,10,9,8);
    $tampiltahunya = array($tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya);
    $namabulanya = array('Juli','Juni','Mei','April','Maret','Februari','Januari','Desember','November','Oktober','September','Agutus');
}
else if ($bulanya == 8) {
    $tampilbulanya = array(8,7,6,5,4,3,2,1,12,11,10,9);
    $tampiltahunya = array($tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya);
    $namabulanya = array('Agutus','Juli','Juni','Mei','April','Maret','Februari','Januari','Desember','November','Oktober','September');
}
else if ($bulanya == 9) {
    $tampilbulanya = array(9,8,7,6,5,4,3,2,1,12,11,10);
    $tampiltahunya = array($tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sebelumnya,$tahun_sebelumnya,$tahun_sebelumnya);
    $namabulanya = array('September','Agutus','Juli','Juni','Mei','April','Maret','Februari','Januari','Desember','November','Oktober');
}
else if ($bulanya == 10) {
    $tampilbulanya = array(10,9,8,7,6,5,4,3,2,1,12,11);
    $tampiltahunya = array($tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sebelumnya,$tahun_sebelumnya);
    $namabulanya = array('Oktober','September','Agutus','Juli','Juni','Mei','April','Maret','Februari','Januari','Desember','November');
}
else if ($bulanya == 11) {
    $tampilbulanya = array(11,10,9,8,7,6,5,4,3,2,1,12);
    $tampiltahunya = array($tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sebelumnya);
    $namabulanya = array('November','Oktober','September','Agutus','Juli','Juni','Mei','April','Maret','Februari','Januari','Desember');
}
else if ($bulanya == 12) {
    $tampilbulanya = array(12,11,10,9,8,7,6,5,4,3,2,1);
    $tampiltahunya = array($tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang,$tahun_sekarang);
    $namabulanya = array('Desember','November','Oktober','September','Agutus','Juli','Juni','Mei','April','Maret','Februari','Januari');
}

$query1 = "SELECT SUM(`value`) AS januari FROM penggunaan_air WHERE month(`date`)=$tampilbulanya[0] and year(`date`) = $tampiltahunya[0]";
$result1 = mysqli_query($con, $query1);
$get1 = mysqli_fetch_assoc($result1);
$databulan1 = $get1['januari'];

$query2 = "SELECT SUM(`value`) AS februari FROM penggunaan_air WHERE month(`date`)=$tampilbulanya[1] and year(`date`) = $tampiltahunya[1]";
$result2 = mysqli_query($con, $query2);
$get2 = mysqli_fetch_assoc($result2);
$databulan2 = $get2['februari'];

$query3 = "SELECT SUM(`value`) AS maret FROM penggunaan_air WHERE month(`date`)=$tampilbulanya[2] and year(`date`) = $tampiltahunya[2]";
$result3 = mysqli_query($con, $query3);
$get3 = mysqli_fetch_assoc($result3);
$databulan3 = $get3['maret'];

$query4 = "SELECT SUM(`value`) AS april FROM penggunaan_air WHERE month(`date`)=$tampilbulanya[3] and year(`date`) = $tampiltahunya[3]";
$result4 = mysqli_query($con, $query4);
$get4 = mysqli_fetch_assoc($result4);
$databulan4 = $get4['april'];

$query5 = "SELECT SUM(`value`) AS mei FROM penggunaan_air WHERE month(`date`)=$tampilbulanya[4] and year(`date`) = $tampiltahunya[4]";
$result5 = mysqli_query($con, $query5); 
$get5 = mysqli_fetch_assoc($result5);
$databulan5 = $get5['mei'];

$query6 = "SELECT SUM(`value`) AS juni FROM penggunaan_air WHERE month(`date`)=$tampilbulanya[5] and year(`date`) = $tampiltahunya[5]";
$result6 = mysqli_query($con, $query6);
$get6 = mysqli_fetch_assoc($result6);
$databulan6 = $get6['juni'];

$query7 = "SELECT SUM(`value`) AS juli FROM penggunaan_air WHERE month(`date`)=$tampilbulanya[6] and year(`date`) = $tampiltahunya[6]";
$result7 = mysqli_query($con, $query7);
$get7 = mysqli_fetch_assoc($result7);
$databulan7 = $get7['juli'];

$query8 = "SELECT SUM(`value`) AS agustus FROM penggunaan_air WHERE month(`date`)=$tampilbulanya[7] and year(`date`) = $tampiltahunya[7]";
$result8 = mysqli_query($con, $query8);
$get8 = mysqli_fetch_assoc($result8);
$databulan8 = $get8['agustus'];

$query9 = "SELECT SUM(`value`) AS september FROM penggunaan_air WHERE month(`date`)=$tampilbulanya[8] and year(`date`) = $tampiltahunya[8]";
$result9 = mysqli_query($con, $query9);
$get9 = mysqli_fetch_assoc($result9);
$databulan9 = $get9['september'];

$query10 = "SELECT SUM(`value`) AS oktober FROM penggunaan_air WHERE month(`date`)=$tampilbulanya[9] and year(`date`) = $tampiltahunya[9]";
$result10 = mysqli_query($con, $query10);
$get10 = mysqli_fetch_assoc($result10);
$databulan10 = $get10['oktober'];

$query11 = "SELECT SUM(`value`) AS november FROM penggunaan_air WHERE month(`date`)=$tampilbulanya[10] and year(`date`) = $tampiltahunya[10]";
$result11 = mysqli_query($con, $query11);
$get11 = mysqli_fetch_assoc($result11);
$databulan11 = $get11['november'];

$query12 = "SELECT SUM(`value`) AS desember FROM penggunaan_air WHERE month(`date`)=$tampilbulanya[11] and year(`date`) = $tampiltahunya[11]";
$result12 = mysqli_query($con, $query12);
$get12 = mysqli_fetch_assoc($result12);
$databulan12 = $get12['desember'];

// $query13 = "SELECT SUM(`value`) AS total FROM penggunaan_air WHERE year(`date`) = $tahun_sekarang";
// $result13 = mysqli_query($con, $query13);
// $get13 = mysqli_fetch_assoc($result13);
// $total = $get13['total'];
$total = $databulan1 + $databulan2 + $databulan3 + $databulan4 + $databulan5 + $databulan6 + $databulan7 + $databulan8 + $databulan9 + $databulan10 + $databulan12;

if ($databulan1 ==0){ $databulan1=0; }
if ($databulan2 ==0){ $databulan2=0; }
if ($databulan3 ==0){ $databulan3=0; }
if ($databulan4 ==0){ $databulan4=0; }
if ($databulan5 ==0){ $databulan5=0; }
if ($databulan6 ==0){ $databulan6=0; }
if ($databulan7 ==0){ $databulan7=0; }
if ($databulan8 ==0){ $databulan8=0; }
if ($databulan9 ==0){ $databulan9=0; }
if ($databulan10 ==0){ $databulan10=0; }
if ($databulan11 ==0){ $databulan11=0; }
if ($databulan12 ==0){ $databulan12=0; }


?>
<div id="page-content-wrapper">
    <div class="container-fluid">    
        <div class="row">
            <div class="col-lg-6">
                <section class="content-header"><h4>Penggunaan Air</h4></section>
                
                </div>
                <div class="col-lg-3 pull-right">
                    <div class="input-group pull-right"> 
                        <a href="?menu=datatraining" type="button" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-plus"></span>
                        Lihat Data
                        </a>
                    </div>
                </div>
            </div>
            <hr class="style-four">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div style="width:100%; padding-left: 20px; padding-right: 20px;">
                            <div>
                                <canvas id="canvas-line" height="75px"></canvas>
                            </div>
                        </div>

                        <script>
                            var lineChartData = {
                                labels : ["<?php echo $namabulanya[11]." ".$tampiltahunya[11]; ?>",
                                          "<?php echo $namabulanya[10]." ".$tampiltahunya[10]; ?>",
                                          "<?php echo $namabulanya[9]." ".$tampiltahunya[9]; ?>",
                                          "<?php echo $namabulanya[8]." ".$tampiltahunya[8]; ?>",
                                          "<?php echo $namabulanya[7]." ".$tampiltahunya[7]; ?>",
                                          "<?php echo $namabulanya[6]." ".$tampiltahunya[6]; ?>",
                                          "<?php echo $namabulanya[5]." ".$tampiltahunya[5]; ?>",
                                          "<?php echo $namabulanya[4]." ".$tampiltahunya[4]; ?>",
                                          "<?php echo $namabulanya[3]." ".$tampiltahunya[3]; ?>",
                                          "<?php echo $namabulanya[2]." ".$tampiltahunya[2]; ?>",
                                          "<?php echo $namabulanya[1]." ".$tampiltahunya[1]; ?>",
                                          "<?php echo $namabulanya[0]." ".$tampiltahunya[0]; ?>"],
                                datasets : [
                                    {
                                        label: "My Second dataset",
                                        fillColor : "rgba(151,187,205,0.2)",
                                        strokeColor : "rgba(151,187,205,1)",
                                        pointColor : "rgba(151,187,205,1)",
                                        pointStrokeColor : "#fff",
                                        pointHighlightFill : "#fff",
                                        pointHighlightStroke : "rgba(151,187,205,1)",
                                        data : [<?php echo $databulan12; ?>,
                                                <?php echo $databulan11; ?>,
                                                <?php echo $databulan10; ?>,
                                                <?php echo $databulan9; ?>,
                                                <?php echo $databulan8; ?>,
                                                <?php echo $databulan7; ?>,
                                                <?php echo $databulan6; ?>,
                                                <?php echo $databulan5; ?>,
                                                <?php echo $databulan4; ?>,
                                                <?php echo $databulan3; ?>,
                                                <?php echo $databulan2; ?>,
                                                <?php echo $databulan1; ?>,]
                                    },
                                ]
                    
                            }
                            window.onload = function(){
                                                             
                                var ctx = document.getElementById("canvas-line").getContext("2d");
                                window.myLine = new Chart(ctx).Line(lineChartData, {
                                    responsive: true
                                });
                            }
                        </script>
                    </div>
                </div>
            </div>
            <hr class="style-four">
            
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th><?php echo $namabulanya[11]." ".$tampiltahunya[11]; ?></th>
                                <th><?php echo $namabulanya[10]." ".$tampiltahunya[10]; ?></th>
                                <th><?php echo $namabulanya[9]." ".$tampiltahunya[9]; ?></th>
                                <th><?php echo $namabulanya[8]." ".$tampiltahunya[8]; ?></th>
                                <th><?php echo $namabulanya[7]." ".$tampiltahunya[7]; ?></th>
                                <th><?php echo $namabulanya[6]." ".$tampiltahunya[6]; ?></th>
                                <th><?php echo $namabulanya[5]." ".$tampiltahunya[5]; ?></th>
                                <th><?php echo $namabulanya[4]." ".$tampiltahunya[4]; ?></th>
                                <th><?php echo $namabulanya[3]." ".$tampiltahunya[3]; ?></th>
                                <th><?php echo $namabulanya[2]." ".$tampiltahunya[2]; ?></th>
                                <th><?php echo $namabulanya[1]." ".$tampiltahunya[1]; ?></th>
                                <th><?php echo $namabulanya[0]." ".$tampiltahunya[0]; ?></th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody class="searchable">
                            <tr>
                                <td>
                                <?php
                                if ($databulan12 == null) {echo "-";}
                                else if($databulan12 >= 1000){$hasil = $databulan12/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $databulan12; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($databulan11 == null) {echo "-";}
                                else if($databulan11 >= 1000){$hasil = $databulan11/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $databulan11; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($databulan10 == null) {echo "-";}
                                else if($databulan10 >= 1000){$hasil = $databulan10/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $databulan10; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($databulan9 == null) {echo "-";}
                                else if($databulan9 >= 1000){$hasil = $databulan9/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $databulan9; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($databulan8 == null) {echo "-";}
                                else if($databulan8 >= 1000){$hasil = $databulan8/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $databulan8; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($databulan7 == null) {echo "-";}
                                else if($databulan7 >= 1000){$hasil = $databulan7/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $databulan7; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($databulan6 == null) {echo "-";}
                                else if($databulan6 >= 1000){$hasil = $databulan6/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $databulan6; echo " L";}
                                ?>
                                </td>
                                 <td>
                                <?php
                                if ($databulan5 == null) {echo "-";}
                                else if($databulan5 >= 1000){$hasil = $databulan5/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $databulan5; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($databulan4 == null) {echo "-";}
                                else if($databulan4 >= 1000){$hasil = $databulan4/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $databulan4; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($databulan3 == null) {echo "-";}
                                else if($databulan3 >= 1000){$hasil = $databulan3/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $databulan3; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($databulan2 == null) {echo "-";}
                                else if($databulan2 >= 1000){$hasil = $databulan2/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $databulan2; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($databulan1 == null) {echo "-";}
                                else if($databulan1 >= 1000){$hasil = $databulan1/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $databulan1; echo " L";}
                                ?>
                                </td>
                                <td><b>
                                <?php
                                if ($total == null) {echo "-";}
                                else if($total >= 1000){$hasil = $total/1000; echo $hasil; echo " M<sup>3</sup> / "; echo $total; echo " L";}
                                else {echo $total; echo " L";}
                                ?>
                                </b></td>
                            </tr>
                       </tbody>
                    </table>
                </div>
            </div>
            <hr class="style-four">

            <hr class="style-four">
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Pelanggan</th>
                                <th>Nama</th>
                                <th>JK</th>
                                <th>Tipe Rumah</th>
                                <th>Jumlah Anggota Keluarga</th>
                                <th>Jumlah Kendaraan</th>
                                <th>Bulan1 <?php echo $namabulanya[5] ?></th>
                                <th>Bulan2 <?php echo $namabulanya[4] ?></th>
                                <th>Bulan3 <?php echo $namabulanya[3] ?></th>
                                <th>Bulan4 <?php echo $namabulanya[2] ?></th>
                                <th>Bulan5 <?php echo $namabulanya[1] ?></th>
                                <th>Status Penggunaan</th>
                                <th>Debit/M3</th>
                                <th>Proses</th>
                            </tr>
                        </thead>
                        <tbody class="searchable">
                        <?php
                        
                 $hitung_5bulan_end =  date("m") + 5;
                 $selisih_bulan =  date("m") - 5;


                 $no_ke = 1;
                 for ($i=$selisih_bulan; $i < date("m") ; $i++) { 

                     $bulanke[$no_ke++] = $i;
                 }
                $tahunya[1] = $tahun_sekarang;
                $tahunya[2] = $tahunya[1] - 1;
                // echo "<br>ini array<br>";
                // echo "Ke 1 :".$bulanke[1]."<br>";
                // echo "Ke 2 :".$bulanke[2]."<br>";
                // echo "Ke 3 :".$bulanke[3]."<br>";
                // echo "Ke 4 :".$bulanke[4]."<br>";
                // echo "Ke 5 :".$bulanke[5]."<br>";


                //januari tahun baru
                if ($bulanke[5] == 0) { $bulanke[5] ="12"; $bulankex[5]="12";}
                if ($bulanke[4] == -1) { $bulanke[4] ="11";}
                if ($bulanke[3] == -2) { $bulanke[3] ="10";}
                if ($bulanke[2] == -3) { $bulanke[2] ="9";}
                if ($bulanke[1] == -4) { $bulanke[1] ="8";}
                //end januari tahun baru

                //februari tahun baru
                if ($bulanke[4] == 0) { $bulanke[4] ="12"; $bulankex[4]="12";}
                if ($bulanke[3] == -1) { $bulanke[3] ="11";}
                if ($bulanke[2] == -2) { $bulanke[2] ="10";}
                if ($bulanke[1] == -3) { $bulanke[1] ="9";}
                //end februari tahun baru

                //maret tahun baru
                if ($bulanke[3] == 0) { $bulanke[3] ="12"; $bulankex[3]="12";}
                if ($bulanke[2] == -1) { $bulanke[2] ="11";}
                if ($bulanke[1] == -2) { $bulanke[1] ="10";}
                //end maret tahun baru

                //april tahun baru
                if ($bulanke[2] == 0) { $bulanke[2] ="12"; $bulankex[2]="12";}
                if ($bulanke[1] == -1) { $bulanke[1] ="11";}
                //end april tahun baru

                //mei tahun baru
                if ($bulanke[1] == 0) { $bulanke[1] ="12"; $bulankex[1]="12";}
                //end mei tahun baru
                // echo "<br>".$bulanke[5];
                // echo "<br>".$bulanke[4];
                // echo "<br>".$bulanke[3];
                // echo "<br>".$bulanke[2];
                // echo "<br>".$bulanke[1];

                // echo "<br> Tahun Lalu :".$tahunya[2];
                // echo "<br> Tahun Sekarang :".$tahunya[1];

                if ($bulankex[5] == 12) {
                    // echo "<br>bulan ".$bulanke[5]." tahun ".$tahunya[2];
                    // echo "<br>bulan ".$bulanke[4]." tahun ".$tahunya[2];
                    // echo "<br>bulan ".$bulanke[3]." tahun ".$tahunya[2];
                    // echo "<br>bulan ".$bulanke[2]." tahun ".$tahunya[2];
                    // echo "<br>bulan ".$bulanke[1]." tahun ".$tahunya[2]."<br>";
                    $query = "SELECT id_pelanggan, nama, jk, tipe, jumlah_anggota_keluarga, jumlah_kendaraan,
                                sum(if(month(`date`) = $bulanke[1] && year(`date`) = $tahunya[2], `value`,0)) as bulan1,
                                sum(if(month(`date`) = $bulanke[2] && year(`date`) = $tahunya[2], `value`,0)) as bulan2,
                                sum(if(month(`date`) = $bulanke[3] && year(`date`) = $tahunya[2], `value`,0)) as bulan3,
                                sum(if(month(`date`) = $bulanke[4] && year(`date`) = $tahunya[2], `value`,0)) as bulan4,
                                sum(if(month(`date`) = $bulanke[5] && year(`date`) = $tahunya[2], `value`,0)) as bulan5
                            FROM penggunaan_air LEFT JOIN pelanggan USING(id_pelanggan) GROUP BY id_pelanggan asc";
                }
                else if ($bulankex[4] == 12) {
                    // echo "<br>bulan ".$bulanke[5]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[4]." tahun ".$tahunya[2];
                    // echo "<br>bulan ".$bulanke[3]." tahun ".$tahunya[2];
                    // echo "<br>bulan ".$bulanke[2]." tahun ".$tahunya[2];
                    // echo "<br>bulan ".$bulanke[1]." tahun ".$tahunya[2]."<br>";
                    $query = "SELECT id_pelanggan, nama, jk, tipe, jumlah_anggota_keluarga, jumlah_kendaraan,
                                sum(if(month(`date`) = $bulanke[1] && year(`date`) = $tahunya[2], `value`,0)) as bulan1,
                                sum(if(month(`date`) = $bulanke[2] && year(`date`) = $tahunya[2], `value`,0)) as bulan2,
                                sum(if(month(`date`) = $bulanke[3] && year(`date`) = $tahunya[2], `value`,0)) as bulan3,
                                sum(if(month(`date`) = $bulanke[4] && year(`date`) = $tahunya[2], `value`,0)) as bulan4,
                                sum(if(month(`date`) = $bulanke[5] && year(`date`) = $tahunya[1], `value`,0)) as bulan5
                            FROM penggunaan_air LEFT JOIN pelanggan USING(id_pelanggan) GROUP BY id_pelanggan asc";
                    
                }
                else if ($bulankex[3] == 12) {
                    // echo "<br>bulan ".$bulanke[5]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[4]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[3]." tahun ".$tahunya[2];
                    // echo "<br>bulan ".$bulanke[2]." tahun ".$tahunya[2];
                    // echo "<br>bulan ".$bulanke[1]." tahun ".$tahunya[2]."<br>";
                    $query = "SELECT id_pelanggan, nama, jk, tipe, jumlah_anggota_keluarga, jumlah_kendaraan,
                                sum(if(month(`date`) = $bulanke[1] && year(`date`) = $tahunya[2], `value`,0)) as bulan1,
                                sum(if(month(`date`) = $bulanke[2] && year(`date`) = $tahunya[2], `value`,0)) as bulan2,
                                sum(if(month(`date`) = $bulanke[3] && year(`date`) = $tahunya[2], `value`,0)) as bulan3,
                                sum(if(month(`date`) = $bulanke[4] && year(`date`) = $tahunya[1], `value`,0)) as bulan4,
                                sum(if(month(`date`) = $bulanke[5] && year(`date`) = $tahunya[1], `value`,0)) as bulan5
                            FROM penggunaan_air LEFT JOIN pelanggan USING(id_pelanggan) GROUP BY id_pelanggan asc";
                    
                }
                else if ($bulankex[2] == 12) {
                    // echo "<br>bulan ".$bulanke[5]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[4]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[3]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[2]." tahun ".$tahunya[2];
                    // echo "<br>bulan ".$bulanke[1]." tahun ".$tahunya[2]."<br>";
                    $query = "SELECT id_pelanggan, nama, jk, tipe, jumlah_anggota_keluarga, jumlah_kendaraan,
                                sum(if(month(`date`) = $bulanke[1] && year(`date`) = $tahunya[2], `value`,0)) as bulan1,
                                sum(if(month(`date`) = $bulanke[2] && year(`date`) = $tahunya[2], `value`,0)) as bulan2,
                                sum(if(month(`date`) = $bulanke[3] && year(`date`) = $tahunya[1], `value`,0)) as bulan3,
                                sum(if(month(`date`) = $bulanke[4] && year(`date`) = $tahunya[1], `value`,0)) as bulan4,
                                sum(if(month(`date`) = $bulanke[5] && year(`date`) = $tahunya[1], `value`,0)) as bulan5
                            FROM penggunaan_air LEFT JOIN pelanggan USING(id_pelanggan) GROUP BY id_pelanggan asc";
                    
                }
                else if ($bulankex[1] == 12) {
                    // echo "<br>bulan ".$bulanke[5]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[4]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[3]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[2]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[1]." tahun ".$tahunya[2]."<br>";
                    $query = "SELECT id_pelanggan, nama, jk, tipe, jumlah_anggota_keluarga, jumlah_kendaraan,
                                sum(if(month(`date`) = $bulanke[1] && year(`date`) = $tahunya[2], `value`,0)) as bulan1,
                                sum(if(month(`date`) = $bulanke[2] && year(`date`) = $tahunya[1], `value`,0)) as bulan2,
                                sum(if(month(`date`) = $bulanke[3] && year(`date`) = $tahunya[1], `value`,0)) as bulan3,
                                sum(if(month(`date`) = $bulanke[4] && year(`date`) = $tahunya[1], `value`,0)) as bulan4,
                                sum(if(month(`date`) = $bulanke[5] && year(`date`) = $tahunya[1], `value`,0)) as bulan5
                            FROM penggunaan_air LEFT JOIN pelanggan USING(id_pelanggan) GROUP BY id_pelanggan asc";
                    
                }
                else
                {
                    // echo "<br>bulan ".$bulanke[5]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[4]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[3]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[2]." tahun ".$tahunya[1];
                    // echo "<br>bulan ".$bulanke[1]." tahun ".$tahunya[1]."<br>";  
                    $query = "SELECT id_pelanggan, nama, jk, tipe, jumlah_anggota_keluarga, jumlah_kendaraan,
                                sum(if(month(`date`) = $bulanke[1] && year(`date`) = $tahunya[1], `value`,0)) as bulan1,
                                sum(if(month(`date`) = $bulanke[2] && year(`date`) = $tahunya[1], `value`,0)) as bulan2,
                                sum(if(month(`date`) = $bulanke[3] && year(`date`) = $tahunya[1], `value`,0)) as bulan3,
                                sum(if(month(`date`) = $bulanke[4] && year(`date`) = $tahunya[1], `value`,0)) as bulan4,
                                sum(if(month(`date`) = $bulanke[5] && year(`date`) = $tahunya[1], `value`,0)) as bulan5
                            FROM penggunaan_air LEFT JOIN pelanggan USING(id_pelanggan) GROUP BY id_pelanggan asc";

                }
                
                
                        $result = mysqli_query($con, $query);
                        $number = 1;
                        while($row = mysqli_fetch_assoc($result)):

                        if ($row['tipe'] == 'A') {
                           $rumah = 'Kecil';
                        }
                        elseif ($row['tipe'] == 'B') {
                            $rumah = 'Standar';
                        }
                        elseif ($row['tipe'] == 'C') {
                            $rumah = 'Besar';
                        }

                        if ($row['jumlah_anggota_keluarga'] < 3) {
                           $jml_ak = 'Sedikit';
                        }
                        elseif ($row['jumlah_anggota_keluarga'] >= 3 && $row['jumlah_anggota_keluarga'] <= 6) {
                            $jml_ak = 'Sedang';
                        }
                        elseif ($row['jumlah_anggota_keluarga'] > 6) {
                            $jml_ak = 'Banyak';
                        }

                        if ($row['jumlah_kendaraan'] < 2) {
                           $jml_ken = 'Sedikit';
                        }
                        elseif ($row['jumlah_kendaraan'] >= 2 && $row['jumlah_kendaraan'] <= 4) {
                            $jml_ken = 'Sedang';
                        }
                        elseif ($row['jumlah_kendaraan'] > 4) {
                            $jml_ken = 'Banyak';
                        }

                            $bulan1x = $row['bulan1'];  $hasil1x = $bulan1x /1000;
                            $bulan2x = $row['bulan2'];  $hasil2x = $bulan2x /1000;
                            $bulan3x = $row['bulan3'];  $hasil3x = $bulan3x /1000;
                            $bulan4x = $row['bulan4'];  $hasil4x = $bulan4x /1000;
                            $bulan5x = $row['bulan5'];  $hasil5x = $bulan5x /1000;

// Start Implementasi Naive Bayesnya
$tp_rumah= $rumah;
$nilaibulan1= $hasil1x;
$nilaibulan2= $hasil2x;
$nilaibulan3= $hasil3x;
$nilaibulan4= $hasil4x;
$nilaibulan5= $hasil5x;

$stts_pemakain1 = "Rendah"; 
$stts_pemakain2 = "Sedang"; 
$stts_pemakain3 = "Tinggi";

                    $querybulan1rendah = "SELECT AVG(bulan1) AS meanbulan1rendah, STDDEV_SAMP(bulan1) AS stdbulan1rendah FROM `data_training` where status_penggunaan = 'Rendah'";
                    $resultbulan1rendah = mysqli_query($con, $querybulan1rendah);

                    $rowbulan1rendah = mysqli_fetch_assoc($resultbulan1rendah);
                    $meanbulan1rendah = number_format($rowbulan1rendah['meanbulan1rendah'],3);
                    $stdbulan1rendah = number_format($rowbulan1rendah['stdbulan1rendah'],3);

                    $querybulan1sedang = "SELECT AVG(bulan1) AS meanbulan1sedang, STDDEV_SAMP(bulan1) AS stdbulan1sedang FROM `data_training` where status_penggunaan = 'Sedang'";
                    $resultbulan1sedang = mysqli_query($con, $querybulan1sedang);

                    $rowbulan1sedang = mysqli_fetch_assoc($resultbulan1sedang);
                    $meanbulan1sedang = number_format($rowbulan1sedang['meanbulan1sedang'],3);
                    $stdbulan1sedang = number_format($rowbulan1sedang['stdbulan1sedang'],3);

                    $querybulan1tinggi = "SELECT AVG(bulan1) AS meanbulan1tinggi, STDDEV_SAMP(bulan1) AS stdbulan1tinggi FROM `data_training` where status_penggunaan = 'Tinggi'";
                    $resultbulan1tinggi = mysqli_query($con, $querybulan1tinggi);

                    $rowbulan1tinggi = mysqli_fetch_assoc($resultbulan1tinggi);
                    $meanbulan1tinggi = number_format($rowbulan1tinggi['meanbulan1tinggi'],3);
                    $stdbulan1tinggi = number_format($rowbulan1tinggi['stdbulan1tinggi'],3);

                                        $querybulan2rendah = "SELECT AVG(bulan2) AS meanbulan2rendah, STDDEV_SAMP(bulan2) AS stdbulan2rendah FROM `data_training` where status_penggunaan = 'Rendah'";
                    $resultbulan2rendah = mysqli_query($con, $querybulan2rendah);

                    $rowbulan2rendah = mysqli_fetch_assoc($resultbulan2rendah);
                    $meanbulan2rendah = number_format($rowbulan2rendah['meanbulan2rendah'],3);
                    $stdbulan2rendah = number_format($rowbulan2rendah['stdbulan2rendah'],3);

                    $querybulan2sedang = "SELECT AVG(bulan2) AS meanbulan2sedang, STDDEV_SAMP(bulan2) AS stdbulan2sedang FROM `data_training` where status_penggunaan = 'Sedang'";
                    $resultbulan2sedang = mysqli_query($con, $querybulan2sedang);

                    $rowbulan2sedang = mysqli_fetch_assoc($resultbulan2sedang);
                    $meanbulan2sedang = number_format($rowbulan2sedang['meanbulan2sedang'],3);
                    $stdbulan2sedang = number_format($rowbulan2sedang['stdbulan2sedang'],3);

                    $querybulan2tinggi = "SELECT AVG(bulan2) AS meanbulan2tinggi, STDDEV_SAMP(bulan2) AS stdbulan2tinggi FROM `data_training` where status_penggunaan = 'Tinggi'";
                    $resultbulan2tinggi = mysqli_query($con, $querybulan2tinggi);

                    $rowbulan2tinggi = mysqli_fetch_assoc($resultbulan2tinggi);
                    $meanbulan2tinggi = number_format($rowbulan2tinggi['meanbulan2tinggi'],3);
                    $stdbulan2tinggi = number_format($rowbulan2tinggi['stdbulan2tinggi'],3);

                    $querybulan3rendah = "SELECT AVG(bulan3) AS meanbulan3rendah, STDDEV_SAMP(bulan3) AS stdbulan3rendah FROM `data_training` where status_penggunaan = 'Rendah'";
                    $resultbulan3rendah = mysqli_query($con, $querybulan3rendah);

                    $rowbulan3rendah = mysqli_fetch_assoc($resultbulan3rendah);
                    $meanbulan3rendah = number_format($rowbulan3rendah['meanbulan3rendah'],3);
                    $stdbulan3rendah = number_format($rowbulan3rendah['stdbulan3rendah'],3);

                    $querybulan3sedang = "SELECT AVG(bulan3) AS meanbulan3sedang, STDDEV_SAMP(bulan3) AS stdbulan3sedang FROM `data_training` where status_penggunaan = 'Sedang'";
                    $resultbulan3sedang = mysqli_query($con, $querybulan3sedang);

                    $rowbulan3sedang = mysqli_fetch_assoc($resultbulan3sedang);
                    $meanbulan3sedang = number_format($rowbulan3sedang['meanbulan3sedang'],3);
                    $stdbulan3sedang = number_format($rowbulan3sedang['stdbulan3sedang'],3);

                    $querybulan3tinggi = "SELECT AVG(bulan3) AS meanbulan3tinggi, STDDEV_SAMP(bulan3) AS stdbulan3tinggi FROM `data_training` where status_penggunaan = 'Tinggi'";
                    $resultbulan3tinggi = mysqli_query($con, $querybulan3tinggi);

                    $rowbulan3tinggi = mysqli_fetch_assoc($resultbulan3tinggi);
                    $meanbulan3tinggi = number_format($rowbulan3tinggi['meanbulan3tinggi'],3);
                    $stdbulan3tinggi = number_format($rowbulan3tinggi['stdbulan3tinggi'],3);

                    $querybulan4rendah = "SELECT AVG(bulan4) AS meanbulan4rendah, STDDEV_SAMP(bulan4) AS stdbulan4rendah FROM `data_training` where status_penggunaan = 'Rendah'";
                    $resultbulan4rendah = mysqli_query($con, $querybulan4rendah);

                    $rowbulan4rendah = mysqli_fetch_assoc($resultbulan4rendah);
                    $meanbulan4rendah = number_format($rowbulan4rendah['meanbulan4rendah'],3);
                    $stdbulan4rendah = number_format($rowbulan4rendah['stdbulan4rendah'],3);

                    $querybulan4sedang = "SELECT AVG(bulan4) AS meanbulan4sedang, STDDEV_SAMP(bulan4) AS stdbulan4sedang FROM `data_training` where status_penggunaan = 'Sedang'";
                    $resultbulan4sedang = mysqli_query($con, $querybulan4sedang);

                    $rowbulan4sedang = mysqli_fetch_assoc($resultbulan4sedang);
                    $meanbulan4sedang = number_format($rowbulan4sedang['meanbulan4sedang'],3);
                    $stdbulan4sedang = number_format($rowbulan4sedang['stdbulan4sedang'],3);

                    $querybulan4tinggi = "SELECT AVG(bulan4) AS meanbulan4tinggi, STDDEV_SAMP(bulan4) AS stdbulan4tinggi FROM `data_training` where status_penggunaan = 'Tinggi'";
                    $resultbulan4tinggi = mysqli_query($con, $querybulan4tinggi);

                    $rowbulan4tinggi = mysqli_fetch_assoc($resultbulan4tinggi);
                    $meanbulan4tinggi = number_format($rowbulan4tinggi['meanbulan4tinggi'],3);
                    $stdbulan4tinggi = number_format($rowbulan4tinggi['stdbulan4tinggi'],3);

                    $querybulan5rendah = "SELECT AVG(bulan5) AS meanbulan5rendah, STDDEV_SAMP(bulan5) AS stdbulan5rendah FROM `data_training` where status_penggunaan = 'Rendah'";
                    $resultbulan5rendah = mysqli_query($con, $querybulan5rendah);

                    $rowbulan5rendah = mysqli_fetch_assoc($resultbulan5rendah);
                    $meanbulan5rendah = number_format($rowbulan5rendah['meanbulan5rendah'],3);
                    $stdbulan5rendah = number_format($rowbulan5rendah['stdbulan5rendah'],3);

                    $querybulan5sedang = "SELECT AVG(bulan5) AS meanbulan5sedang, STDDEV_SAMP(bulan5) AS stdbulan5sedang FROM `data_training` where status_penggunaan = 'Sedang'";
                    $resultbulan5sedang = mysqli_query($con, $querybulan5sedang);

                    $rowbulan5sedang = mysqli_fetch_assoc($resultbulan5sedang);
                    $meanbulan5sedang = number_format($rowbulan5sedang['meanbulan5sedang'],3);
                    $stdbulan5sedang = number_format($rowbulan5sedang['stdbulan5sedang'],3);

                    $querybulan5tinggi = "SELECT AVG(bulan5) AS meanbulan5tinggi, STDDEV_SAMP(bulan5) AS stdbulan5tinggi FROM `data_training` where status_penggunaan = 'Tinggi'";
                    $resultbulan5tinggi = mysqli_query($con, $querybulan5tinggi);

                    $rowbulan5tinggi = mysqli_fetch_assoc($resultbulan5tinggi);
                    $meanbulan5tinggi = number_format($rowbulan5tinggi['meanbulan5tinggi'],3);
                    $stdbulan5tinggi = number_format($rowbulan5tinggi['stdbulan5tinggi'],3);

                    //rendah
            $queryjmlkendaraansedikit = "SELECT COUNT(jml_kendaraan) as jmlkendaraansedikit FROM data_training WHERE jml_kendaraan = 'Sedikit' && status_penggunaan = 'Rendah'";
            $resultjmlkendaraansedikit = mysqli_query($con, $queryjmlkendaraansedikit);
            $rowjmlkendaraansedikit = mysqli_fetch_assoc($resultjmlkendaraansedikit);
            $jmlkendaraansedikit_rendah = $rowjmlkendaraansedikit['jmlkendaraansedikit'];

            $queryjmlkendaraansedang = "SELECT COUNT(jml_kendaraan) as jmlkendaraansedang FROM data_training WHERE jml_kendaraan = 'sedang' && status_penggunaan = 'Rendah'";
            $resultjmlkendaraansedang = mysqli_query($con, $queryjmlkendaraansedang);
            $rowjmlkendaraansedang = mysqli_fetch_assoc($resultjmlkendaraansedang);
            $jmlkendaraansedang_rendah = $rowjmlkendaraansedang['jmlkendaraansedang'];

            $queryjmlkendaraanbanyak = "SELECT COUNT(jml_kendaraan) as jmlkendaraanbanyak FROM data_training WHERE jml_kendaraan = 'banyak' && status_penggunaan = 'Rendah'";
            $resultjmlkendaraanbanyak = mysqli_query($con, $queryjmlkendaraanbanyak);
            $rowjmlkendaraanbanyak = mysqli_fetch_assoc($resultjmlkendaraanbanyak);
            $jmlkendaraanbanyak_rendah = $rowjmlkendaraanbanyak['jmlkendaraanbanyak'];

            $jmlprobabilitaskendaraan_rendah = $jmlkendaraansedikit_rendah + $jmlkendaraansedang_rendah + $jmlkendaraanbanyak_rendah;

            //sedang
            $queryjmlkendaraansedikit = "SELECT COUNT(jml_kendaraan) as jmlkendaraansedikit FROM data_training WHERE jml_kendaraan = 'Sedikit' && status_penggunaan = 'sedang'";
            $resultjmlkendaraansedikit = mysqli_query($con, $queryjmlkendaraansedikit);
            $rowjmlkendaraansedikit = mysqli_fetch_assoc($resultjmlkendaraansedikit);
            $jmlkendaraansedikit_sedang = $rowjmlkendaraansedikit['jmlkendaraansedikit'];

            $queryjmlkendaraansedang = "SELECT COUNT(jml_kendaraan) as jmlkendaraansedang FROM data_training WHERE jml_kendaraan = 'sedang' && status_penggunaan = 'sedang'";
            $resultjmlkendaraansedang = mysqli_query($con, $queryjmlkendaraansedang);
            $rowjmlkendaraansedang = mysqli_fetch_assoc($resultjmlkendaraansedang);
            $jmlkendaraansedang_sedang = $rowjmlkendaraansedang['jmlkendaraansedang'];

            $queryjmlkendaraanbanyak = "SELECT COUNT(jml_kendaraan) as jmlkendaraanbanyak FROM data_training WHERE jml_kendaraan = 'banyak' && status_penggunaan = 'sedang'";
            $resultjmlkendaraanbanyak = mysqli_query($con, $queryjmlkendaraanbanyak);
            $rowjmlkendaraanbanyak = mysqli_fetch_assoc($resultjmlkendaraanbanyak);
            $jmlkendaraanbanyak_sedang = $rowjmlkendaraanbanyak['jmlkendaraanbanyak'];

            $jmlprobabilitaskendaraan_sedang = $jmlkendaraansedikit_sedang + $jmlkendaraansedang_sedang + $jmlkendaraanbanyak_sedang;

            //tinggi
            $queryjmlkendaraansedikit = "SELECT COUNT(jml_kendaraan) as jmlkendaraansedikit FROM data_training WHERE jml_kendaraan = 'Sedikit' && status_penggunaan = 'tinggi'";
            $resultjmlkendaraansedikit = mysqli_query($con, $queryjmlkendaraansedikit);
            $rowjmlkendaraansedikit = mysqli_fetch_assoc($resultjmlkendaraansedikit);
            $jmlkendaraansedikit_tinggi = $rowjmlkendaraansedikit['jmlkendaraansedikit'];

            $queryjmlkendaraansedang = "SELECT COUNT(jml_kendaraan) as jmlkendaraansedang FROM data_training WHERE jml_kendaraan = 'sedang' && status_penggunaan = 'tinggi'";
            $resultjmlkendaraansedang = mysqli_query($con, $queryjmlkendaraansedang);
            $rowjmlkendaraansedang = mysqli_fetch_assoc($resultjmlkendaraansedang);
            $jmlkendaraansedang_tinggi = $rowjmlkendaraansedang['jmlkendaraansedang'];

            $queryjmlkendaraanbanyak = "SELECT COUNT(jml_kendaraan) as jmlkendaraanbanyak FROM data_training WHERE jml_kendaraan = 'banyak' && status_penggunaan = 'tinggi'";
            $resultjmlkendaraanbanyak = mysqli_query($con, $queryjmlkendaraanbanyak);
            $rowjmlkendaraanbanyak = mysqli_fetch_assoc($resultjmlkendaraanbanyak);
            $jmlkendaraanbanyak_tinggi = $rowjmlkendaraanbanyak['jmlkendaraanbanyak'];

            $jmlprobabilitaskendaraan_tinggi = $jmlkendaraansedikit_tinggi + $jmlkendaraansedang_tinggi + $jmlkendaraanbanyak_tinggi;

            //probabilitas
            $probabilitasrendahsedikit = $jmlkendaraansedikit_rendah / $jmlprobabilitaskendaraan_rendah;
            $probabilitasrendahsedang = $jmlkendaraansedikit_sedang / $jmlprobabilitaskendaraan_sedang;
            $probabilitasrendahbanyak = $jmlkendaraansedikit_tinggi / $jmlprobabilitaskendaraan_tinggi;

            $probabilitassedangsedikit = $jmlkendaraansedang_rendah / $jmlprobabilitaskendaraan_rendah;
            $probabilitassedangsedang = $jmlkendaraansedang_sedang / $jmlprobabilitaskendaraan_sedang;
            $probabilitassedangbanyak = $jmlkendaraansedang_tinggi / $jmlprobabilitaskendaraan_tinggi;

            $probabilitastinggisedikit = $jmlkendaraanbanyak_rendah / $jmlprobabilitaskendaraan_rendah;
            $probabilitastinggisedang = $jmlkendaraanbanyak_sedang / $jmlprobabilitaskendaraan_sedang;
            $probabilitastinggibanyak = $jmlkendaraanbanyak_tinggi / $jmlprobabilitaskendaraan_tinggi;

            //rendah
            $queryjmlrumahkecil = "SELECT COUNT(tipe_rumah) as jmlrumahkecil FROM data_training WHERE tipe_rumah = 'Kecil' && status_penggunaan = 'Rendah'";
            $resultjmlrumahkecil = mysqli_query($con, $queryjmlrumahkecil);
            $rowjmlrumahkecil = mysqli_fetch_assoc($resultjmlrumahkecil);
            $jmlrumahkecil_rendah = $rowjmlrumahkecil['jmlrumahkecil'];

            $queryjmlrumahstandar = "SELECT COUNT(tipe_rumah) as jmlrumahstandar FROM data_training WHERE tipe_rumah = 'Standar' && status_penggunaan = 'Rendah'";
            $resultjmlrumahstandar = mysqli_query($con, $queryjmlrumahstandar);
            $rowjmlrumahstandar = mysqli_fetch_assoc($resultjmlrumahstandar);
            $jmlrumahstandar_rendah = $rowjmlrumahstandar['jmlrumahstandar'];

            $queryjmlrumahbesar = "SELECT COUNT(tipe_rumah) as jmlrumahbesar FROM data_training WHERE tipe_rumah = 'Besar' && status_penggunaan = 'Rendah'";
            $resultjmlrumahbesar = mysqli_query($con, $queryjmlrumahbesar);
            $rowjmlrumahbesar = mysqli_fetch_assoc($resultjmlrumahbesar);
            $jmlrumahbesar_rendah = $rowjmlrumahbesar['jmlrumahbesar'];

            $jmlprobabilitasrumah_rendah = $jmlrumahkecil_rendah + $jmlrumahstandar_rendah + $jmlrumahbesar_rendah;

            //sedang
            $queryjmlrumahkecil = "SELECT COUNT(tipe_rumah) as jmlrumahkecil FROM data_training WHERE tipe_rumah = 'Kecil' && status_penggunaan = 'Sedang'";
            $resultjmlrumahkecil = mysqli_query($con, $queryjmlrumahkecil);
            $rowjmlrumahkecil = mysqli_fetch_assoc($resultjmlrumahkecil);
            $jmlrumahkecil_Sedang = $rowjmlrumahkecil['jmlrumahkecil'];

            $queryjmlrumahstandar = "SELECT COUNT(tipe_rumah) as jmlrumahstandar FROM data_training WHERE tipe_rumah = 'Standar' && status_penggunaan = 'Sedang'";
            $resultjmlrumahstandar = mysqli_query($con, $queryjmlrumahstandar);
            $rowjmlrumahstandar = mysqli_fetch_assoc($resultjmlrumahstandar);
            $jmlrumahstandar_Sedang = $rowjmlrumahstandar['jmlrumahstandar'];

            $queryjmlrumahbesar = "SELECT COUNT(tipe_rumah) as jmlrumahbesar FROM data_training WHERE tipe_rumah = 'Besar' && status_penggunaan = 'Sedang'";
            $resultjmlrumahbesar = mysqli_query($con, $queryjmlrumahbesar);
            $rowjmlrumahbesar = mysqli_fetch_assoc($resultjmlrumahbesar);
            $jmlrumahbesar_sedang = $rowjmlrumahbesar['jmlrumahbesar'];

            $jmlprobabilitasrumah_Sedang = $jmlrumahkecil_Sedang + $jmlrumahstandar_Sedang + $jmlrumahbesar_sedang;

            //tinggi
            $queryjmlrumahkecil = "SELECT COUNT(tipe_rumah) as jmlrumahkecil FROM data_training WHERE tipe_rumah = 'Kecil' && status_penggunaan = 'tinggi'";
            $resultjmlrumahkecil = mysqli_query($con, $queryjmlrumahkecil);
            $rowjmlrumahkecil = mysqli_fetch_assoc($resultjmlrumahkecil);
            $jmlrumahkecil_tinggi = $rowjmlrumahkecil['jmlrumahkecil'];

            $queryjmlrumahstandar = "SELECT COUNT(tipe_rumah) as jmlrumahstandar FROM data_training WHERE tipe_rumah = 'Standar' && status_penggunaan = 'tinggi'";
            $resultjmlrumahstandar = mysqli_query($con, $queryjmlrumahstandar);
            $rowjmlrumahstandar = mysqli_fetch_assoc($resultjmlrumahstandar);
            $jmlrumahstandar_tinggi = $rowjmlrumahstandar['jmlrumahstandar'];

            $queryjmlrumahbesar = "SELECT COUNT(tipe_rumah) as jmlrumahbesar FROM data_training WHERE tipe_rumah = 'Besar' && status_penggunaan = 'tinggi'";
            $resultjmlrumahbesar = mysqli_query($con, $queryjmlrumahbesar);
            $rowjmlrumahbesar = mysqli_fetch_assoc($resultjmlrumahbesar);
            $jmlrumahbesar_tinggi = $rowjmlrumahbesar['jmlrumahbesar'];

            $jmlprobabilitasrumah_tinggi = $jmlrumahkecil_tinggi + $jmlrumahstandar_tinggi + $jmlrumahbesar_tinggi;

            //probabilitas
            $probabilitasrendahKecil = $jmlrumahkecil_rendah / $jmlprobabilitasrumah_rendah;
            $probabilitasrendahStandar = $jmlrumahkecil_Sedang / $jmlprobabilitasrumah_Sedang;
            $probabilitasrendahBesar = $jmlrumahkecil_tinggi / $jmlprobabilitasrumah_tinggi;

            $probabilitasSedangKecil = $jmlrumahstandar_rendah / $jmlprobabilitasrumah_rendah;
            $probabilitasSedangStandar = $jmlrumahstandar_Sedang / $jmlprobabilitasrumah_Sedang;
            $probabilitasSedangBesar = $jmlrumahstandar_tinggi / $jmlprobabilitasrumah_tinggi;

            $probabilitastinggiKecil = $jmlrumahbesar_rendah / $jmlprobabilitasrumah_rendah;
            $probabilitastinggiStandar = $jmlrumahbesar_sedang / $jmlprobabilitasrumah_Sedang;
            $probabilitastinggiBesar = $jmlrumahbesar_tinggi / $jmlprobabilitasrumah_tinggi;
            
            //totaldatatraining
            $queryjmltotaldata = "SELECT COUNT(status_penggunaan) as jmltotaldata FROM data_training";
            $resultjmltotaldata = mysqli_query($con, $queryjmltotaldata);
            $rowjmltotaldata = mysqli_fetch_assoc($resultjmltotaldata);
            $jmltotaldata = $rowjmltotaldata['jmltotaldata'];

            //rendah
            $queryjmlrendah = "SELECT COUNT(status_penggunaan) as jmlrendah FROM data_training WHERE status_penggunaan = 'Rendah'";
            $resultjmlrendah = mysqli_query($con, $queryjmlrendah);
            $rowjmlrendah = mysqli_fetch_assoc($resultjmlrendah);
            $jmlrendah = $rowjmlrendah['jmlrendah'];


            //sedang
            $queryjmlsedang = "SELECT COUNT(status_penggunaan) as jmlsedang FROM data_training WHERE status_penggunaan = 'sedang'";
            $resultjmlsedang = mysqli_query($con, $queryjmlsedang);
            $rowjmlsedang = mysqli_fetch_assoc($resultjmlsedang);
            $jmlsedang = $rowjmlsedang['jmlsedang'];

            //tinggi
            $queryjmltinggi = "SELECT COUNT(status_penggunaan) as jmltinggi FROM data_training WHERE status_penggunaan = 'tinggi'";
            $resultjmltinggi = mysqli_query($con, $queryjmltinggi);
            $rowjmltinggi = mysqli_fetch_assoc($resultjmltinggi);
            $jmltinggi = $rowjmltinggi['jmltinggi'];

            //probabilitas
            $probabilitasrendah = $jmlrendah / $jmltotaldata;
            $probabilitasSedang = $jmlsedang / $jmltotaldata;
            $probabilitastingg = $jmltinggi / $jmltotaldata;

            //rendah
            $queryjmlkeluargasedikit = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargasedikit FROM data_training WHERE jml_anggota_keluarga = 'Sedikit' && status_penggunaan = 'Rendah'";
            $resultjmlkeluargasedikit = mysqli_query($con, $queryjmlkeluargasedikit);
            $rowjmlkeluargasedikit = mysqli_fetch_assoc($resultjmlkeluargasedikit);
            $jmlkeluargasedikit_rendah = $rowjmlkeluargasedikit['jmlkeluargasedikit'];

            $queryjmlkeluargasedang = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargasedang FROM data_training WHERE jml_anggota_keluarga = 'Sedang' && status_penggunaan = 'Rendah'";
            $resultjmlkeluargasedang = mysqli_query($con, $queryjmlkeluargasedang);
            $rowjmlkeluargasedang = mysqli_fetch_assoc($resultjmlkeluargasedang);
            $jmlkeluargasedang_rendah = $rowjmlkeluargasedang['jmlkeluargasedang'];

            $queryjmlkeluargabanyak = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargabanyak FROM data_training WHERE jml_anggota_keluarga = 'Banyak' && status_penggunaan = 'Rendah'";
            $resultjmlkeluargabanyak = mysqli_query($con, $queryjmlkeluargabanyak);
            $rowjmlkeluargabanyak = mysqli_fetch_assoc($resultjmlkeluargabanyak);
            $jmlkeluargabanyak_rendah = $rowjmlkeluargabanyak['jmlkeluargabanyak'];

            $jmlprobabilitaskeluarga_rendah = $jmlkeluargasedikit_rendah + $jmlkeluargasedang_rendah + $jmlkeluargabanyak_rendah;

            //sedang
            $queryjmlkeluargasedikit = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargasedikit FROM data_training WHERE jml_anggota_keluarga = 'Sedikit' && status_penggunaan = 'Sedang'";
            $resultjmlkeluargasedikit = mysqli_query($con, $queryjmlkeluargasedikit);
            $rowjmlkeluargasedikit = mysqli_fetch_assoc($resultjmlkeluargasedikit);
            $jmlkeluargasedikit_Sedang = $rowjmlkeluargasedikit['jmlkeluargasedikit'];

            $queryjmlkeluargasedang = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargasedang FROM data_training WHERE jml_anggota_keluarga = 'Sedang' && status_penggunaan = 'Sedang'";
            $resultjmlkeluargasedang = mysqli_query($con, $queryjmlkeluargasedang);
            $rowjmlkeluargasedang = mysqli_fetch_assoc($resultjmlkeluargasedang);
            $jmlkeluargasedang_Sedang = $rowjmlkeluargasedang['jmlkeluargasedang'];

            $queryjmlkeluargabanyak = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargabanyak FROM data_training WHERE jml_anggota_keluarga = 'Banyak' && status_penggunaan = 'Sedang'";
            $resultjmlkeluargabanyak = mysqli_query($con, $queryjmlkeluargabanyak);
            $rowjmlkeluargabanyak = mysqli_fetch_assoc($resultjmlkeluargabanyak);
            $jmlkeluargabanyak_sedang = $rowjmlkeluargabanyak['jmlkeluargabanyak'];

            $jmlprobabilitaskeluarga_Sedang = $jmlkeluargasedikit_Sedang + $jmlkeluargasedang_Sedang + $jmlkeluargabanyak_sedang;

            //tinggi
            $queryjmlkeluargasedikit = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargasedikit FROM data_training WHERE jml_anggota_keluarga = 'Sedikit' && status_penggunaan = 'tinggi'";
            $resultjmlkeluargasedikit = mysqli_query($con, $queryjmlkeluargasedikit);
            $rowjmlkeluargasedikit = mysqli_fetch_assoc($resultjmlkeluargasedikit);
            $jmlkeluargasedikit_tinggi = $rowjmlkeluargasedikit['jmlkeluargasedikit'];

            $queryjmlkeluargasedang = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargasedang FROM data_training WHERE jml_anggota_keluarga = 'Sedang' && status_penggunaan = 'tinggi'";
            $resultjmlkeluargasedang = mysqli_query($con, $queryjmlkeluargasedang);
            $rowjmlkeluargasedang = mysqli_fetch_assoc($resultjmlkeluargasedang);
            $jmlkeluargasedang_tinggi = $rowjmlkeluargasedang['jmlkeluargasedang'];

            $queryjmlkeluargabanyak = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargabanyak FROM data_training WHERE jml_anggota_keluarga = 'Banyak' && status_penggunaan = 'tinggi'";
            $resultjmlkeluargabanyak = mysqli_query($con, $queryjmlkeluargabanyak);
            $rowjmlkeluargabanyak = mysqli_fetch_assoc($resultjmlkeluargabanyak);
            $jmlkeluargabanyak_tinggi = $rowjmlkeluargabanyak['jmlkeluargabanyak'];

            $jmlprobabilitaskeluarga_tinggi = $jmlkeluargasedikit_tinggi + $jmlkeluargasedang_tinggi + $jmlkeluargabanyak_tinggi;

            //probabilitas
            $probabilitasrendahSedikit = $jmlkeluargasedikit_rendah / $jmlprobabilitaskeluarga_rendah;
            $probabilitasrendahSedang = $jmlkeluargasedikit_Sedang / $jmlprobabilitaskeluarga_Sedang;
            $probabilitasrendahBanyak = $jmlkeluargasedikit_tinggi / $jmlprobabilitaskeluarga_tinggi;

            $probabilitasSedangSedikit = $jmlkeluargasedang_rendah / $jmlprobabilitaskeluarga_rendah;
            $probabilitasSedangSedang = $jmlkeluargasedang_Sedang / $jmlprobabilitaskeluarga_Sedang;
            $probabilitasSedangBanyak = $jmlkeluargasedang_tinggi / $jmlprobabilitaskeluarga_tinggi;

            $probabilitastinggiSedikit = $jmlkeluargabanyak_rendah / $jmlprobabilitaskeluarga_rendah;
            $probabilitastinggiSedang = $jmlkeluargabanyak_sedang / $jmlprobabilitaskeluarga_Sedang;
            $probabilitastinggiBanyak = $jmlkeluargabanyak_tinggi / $jmlprobabilitaskeluarga_tinggi;

            //rendah
            $queryjmlkeluargasedikit = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargasedikit FROM data_training WHERE jml_anggota_keluarga = 'Sedikit' && status_penggunaan = 'Rendah'";
            $resultjmlkeluargasedikit = mysqli_query($con, $queryjmlkeluargasedikit);
            $rowjmlkeluargasedikit = mysqli_fetch_assoc($resultjmlkeluargasedikit);
            $jmlkeluargasedikit_rendah = $rowjmlkeluargasedikit['jmlkeluargasedikit'];

            $queryjmlkeluargasedang = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargasedang FROM data_training WHERE jml_anggota_keluarga = 'Sedang' && status_penggunaan = 'Rendah'";
            $resultjmlkeluargasedang = mysqli_query($con, $queryjmlkeluargasedang);
            $rowjmlkeluargasedang = mysqli_fetch_assoc($resultjmlkeluargasedang);
            $jmlkeluargasedang_rendah = $rowjmlkeluargasedang['jmlkeluargasedang'];

            $queryjmlkeluargabanyak = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargabanyak FROM data_training WHERE jml_anggota_keluarga = 'Banyak' && status_penggunaan = 'Rendah'";
            $resultjmlkeluargabanyak = mysqli_query($con, $queryjmlkeluargabanyak);
            $rowjmlkeluargabanyak = mysqli_fetch_assoc($resultjmlkeluargabanyak);
            $jmlkeluargabanyak_rendah = $rowjmlkeluargabanyak['jmlkeluargabanyak'];

            $jmlprobabilitaskeluarga_rendah = $jmlkeluargasedikit_rendah + $jmlkeluargasedang_rendah + $jmlkeluargabanyak_rendah;

            //sedang
            $queryjmlkeluargasedikit = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargasedikit FROM data_training WHERE jml_anggota_keluarga = 'Sedikit' && status_penggunaan = 'Sedang'";
            $resultjmlkeluargasedikit = mysqli_query($con, $queryjmlkeluargasedikit);
            $rowjmlkeluargasedikit = mysqli_fetch_assoc($resultjmlkeluargasedikit);
            $jmlkeluargasedikit_Sedang = $rowjmlkeluargasedikit['jmlkeluargasedikit'];

            $queryjmlkeluargasedang = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargasedang FROM data_training WHERE jml_anggota_keluarga = 'Sedang' && status_penggunaan = 'Sedang'";
            $resultjmlkeluargasedang = mysqli_query($con, $queryjmlkeluargasedang);
            $rowjmlkeluargasedang = mysqli_fetch_assoc($resultjmlkeluargasedang);
            $jmlkeluargasedang_Sedang = $rowjmlkeluargasedang['jmlkeluargasedang'];

            $queryjmlkeluargabanyak = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargabanyak FROM data_training WHERE jml_anggota_keluarga = 'Banyak' && status_penggunaan = 'Sedang'";
            $resultjmlkeluargabanyak = mysqli_query($con, $queryjmlkeluargabanyak);
            $rowjmlkeluargabanyak = mysqli_fetch_assoc($resultjmlkeluargabanyak);
            $jmlkeluargabanyak_sedang = $rowjmlkeluargabanyak['jmlkeluargabanyak'];

            $jmlprobabilitaskeluarga_Sedang = $jmlkeluargasedikit_Sedang + $jmlkeluargasedang_Sedang + $jmlkeluargabanyak_sedang;

            //tinggi
            $queryjmlkeluargasedikit = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargasedikit FROM data_training WHERE jml_anggota_keluarga = 'Sedikit' && status_penggunaan = 'tinggi'";
            $resultjmlkeluargasedikit = mysqli_query($con, $queryjmlkeluargasedikit);
            $rowjmlkeluargasedikit = mysqli_fetch_assoc($resultjmlkeluargasedikit);
            $jmlkeluargasedikit_tinggi = $rowjmlkeluargasedikit['jmlkeluargasedikit'];

            $queryjmlkeluargasedang = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargasedang FROM data_training WHERE jml_anggota_keluarga = 'Sedang' && status_penggunaan = 'tinggi'";
            $resultjmlkeluargasedang = mysqli_query($con, $queryjmlkeluargasedang);
            $rowjmlkeluargasedang = mysqli_fetch_assoc($resultjmlkeluargasedang);
            $jmlkeluargasedang_tinggi = $rowjmlkeluargasedang['jmlkeluargasedang'];

            $queryjmlkeluargabanyak = "SELECT COUNT(jml_anggota_keluarga) as jmlkeluargabanyak FROM data_training WHERE jml_anggota_keluarga = 'Banyak' && status_penggunaan = 'tinggi'";
            $resultjmlkeluargabanyak = mysqli_query($con, $queryjmlkeluargabanyak);
            $rowjmlkeluargabanyak = mysqli_fetch_assoc($resultjmlkeluargabanyak);
            $jmlkeluargabanyak_tinggi = $rowjmlkeluargabanyak['jmlkeluargabanyak'];

            $jmlprobabilitaskeluarga_tinggi = $jmlkeluargasedikit_tinggi + $jmlkeluargasedang_tinggi + $jmlkeluargabanyak_tinggi;

            //probabilitas
            $probabilitasrendahSedikit = $jmlkeluargasedikit_rendah / $jmlprobabilitaskeluarga_rendah;
            $probabilitasrendahSedang = $jmlkeluargasedikit_Sedang / $jmlprobabilitaskeluarga_Sedang;
            $probabilitasrendahBanyak = $jmlkeluargasedikit_tinggi / $jmlprobabilitaskeluarga_tinggi;

            $probabilitasSedangSedikit = $jmlkeluargasedang_rendah / $jmlprobabilitaskeluarga_rendah;
            $probabilitasSedangSedang = $jmlkeluargasedang_Sedang / $jmlprobabilitaskeluarga_Sedang;
            $probabilitasSedangBanyak = $jmlkeluargasedang_tinggi / $jmlprobabilitaskeluarga_tinggi;

            $probabilitastinggiSedikit = $jmlkeluargabanyak_rendah / $jmlprobabilitaskeluarga_rendah;
            $probabilitastinggiSedang = $jmlkeluargabanyak_sedang / $jmlprobabilitaskeluarga_Sedang;
            $probabilitastinggiBanyak = $jmlkeluargabanyak_tinggi / $jmlprobabilitaskeluarga_tinggi;

$nilaibulan1; 
$meanbulan1rendah; 
$stdbulan1rendah; 
$phinilai2rendahbulan1 = 2.505*$stdbulan1rendah; 
$satuphinilairendahbulan1 = 1/$phinilai2rendahbulan1; 
$pangkateatasrendahbulan1 = $nilaibulan1 - $meanbulan1rendah;  pow($pangkateatasrendahbulan1,2); 
$pangkatebawahrendahbulan1 = 2*pow($stdbulan1rendah,2);  $pangkatebawahrendahbulan1; 
$hasilbagieabrendahbulan1 = pow($pangkateatasrendahbulan1,2) / $pangkatebawahrendahbulan1 ;  $hasilbagieabrendahbulan1; 
$satuepangkatrendahbulan1 = 1/(exp($hasilbagieabrendahbulan1));  $satuepangkatrendahbulan1; 
$hasilrendahbulan1 = $satuphinilairendahbulan1*$satuepangkatrendahbulan1;  $hasilrendahbulan1; 

                                                                         
$nilaibulan1; 
$meanbulan1sedang; 
$stdbulan1sedang;
$phinilai2sedangbulan1 = 2.505*$stdbulan1sedang; 
$satuphinilaisedangbulan1 = 1/$phinilai2sedangbulan1; 
$pangkateatassedangbulan1 = $nilaibulan1 - $meanbulan1sedang;  pow($pangkateatassedangbulan1,2); 
$pangkatebawahsedangbulan1 = 2*pow($stdbulan1sedang,2);  $pangkatebawahsedangbulan1; 
$hasilbagieabsedangbulan1 = pow($pangkateatassedangbulan1,2) / $pangkatebawahsedangbulan1 ;  $hasilbagieabsedangbulan1; 
$satuepangkatsedangbulan1 = 1/(exp($hasilbagieabsedangbulan1));  $satuepangkatsedangbulan1; 
$hasilsedangbulan1 = $satuphinilaisedangbulan1*$satuepangkatsedangbulan1;  $hasilsedangbulan1; 

                                                                             
$nilaibulan1; 
$meanbulan1tinggi; 
$stdbulan1tinggi; 
$phinilai2tinggibulan1 = 2.505*$stdbulan1tinggi; 
$satuphinilaitinggibulan1 = 1/$phinilai2tinggibulan1; 
$pangkateatastinggibulan1 = $nilaibulan1 - $meanbulan1tinggi;  pow($pangkateatastinggibulan1,2); 
$pangkatebawahtinggibulan1 = 2*pow($stdbulan1tinggi,2);  $pangkatebawahtinggibulan1; 
$hasilbagieabtinggibulan1 = pow($pangkateatastinggibulan1,2) / $pangkatebawahtinggibulan1 ;  $hasilbagieabtinggibulan1; 
$satuepangkattinggibulan1 = 1/(exp($hasilbagieabtinggibulan1));  $satuepangkattinggibulan1; 
$hasiltinggibulan1 = $satuphinilaitinggibulan1*$satuepangkattinggibulan1;  $hasiltinggibulan1; 

$nilaibulan2; 
$meanbulan2rendah; 
$stdbulan2rendah; 
$phinilai2rendahbulan2 = 2.505*$stdbulan2rendah; 
$satuphinilairendahbulan2 = 1/$phinilai2rendahbulan2; 
$pangkateatasrendahbulan2 = $nilaibulan2 - $meanbulan2rendah;  pow($pangkateatasrendahbulan2,2); 
$pangkatebawahrendahbulan2 = 2*pow($stdbulan2rendah,2);  $pangkatebawahrendahbulan2; 
$hasilbagieabrendahbulan2 = pow($pangkateatasrendahbulan2,2) / $pangkatebawahrendahbulan2 ;  $hasilbagieabrendahbulan2; 
$satuepangkatrendahbulan2 = 1/(exp($hasilbagieabrendahbulan2));  $satuepangkatrendahbulan2; 
$hasilrendahbulan2 = $satuphinilairendahbulan2*$satuepangkatrendahbulan2;  $hasilrendahbulan2; 
                        
                        
$nilaibulan2; 
$meanbulan2sedang; 
$stdbulan2sedang; 
$phinilai2sedangbulan2 = 2.505*$stdbulan2sedang; 
$satuphinilaisedangbulan2 = 1/$phinilai2sedangbulan2; 
$pangkateatassedangbulan2 = $nilaibulan2 - $meanbulan2sedang;  pow($pangkateatassedangbulan2,2); 
$pangkatebawahsedangbulan2 = 2*pow($stdbulan2sedang,2);  $pangkatebawahsedangbulan2; 
$hasilbagieabsedangbulan2 = pow($pangkateatassedangbulan2,2) / $pangkatebawahsedangbulan2 ;  $hasilbagieabsedangbulan2; 
$satuepangkatsedangbulan2 = 1/(exp($hasilbagieabsedangbulan2));  $satuepangkatsedangbulan2; 
$hasilsedangbulan2 = $satuphinilaisedangbulan2*$satuepangkatsedangbulan2;  $hasilsedangbulan2; 
                        
                        
$nilaibulan2; 
$meanbulan2tinggi; 
$stdbulan2tinggi; 
$phinilai2tinggibulan2 = 2.505*$stdbulan2tinggi; 
$satuphinilaitinggibulan2 = 1/$phinilai2tinggibulan2; 
$pangkateatastinggibulan2 = $nilaibulan2 - $meanbulan2tinggi;  pow($pangkateatastinggibulan2,2); 
$pangkatebawahtinggibulan2 = 2*pow($stdbulan2tinggi,2);  $pangkatebawahtinggibulan2; 
$hasilbagieabtinggibulan2 = pow($pangkateatastinggibulan2,2) / $pangkatebawahtinggibulan2 ;  $hasilbagieabtinggibulan2; 
$satuepangkattinggibulan2 = 1/(exp($hasilbagieabtinggibulan2));  $satuepangkattinggibulan2; 
$hasiltinggibulan2 = $satuphinilaitinggibulan2*$satuepangkattinggibulan2;  $hasiltinggibulan2; 

$nilaibulan3; 
$meanbulan3rendah; 
$stdbulan3rendah; 
$phinilai2rendahbulan3 = 2.505*$stdbulan3rendah; 
$satuphinilairendahbulan3 = 1/$phinilai2rendahbulan3; 
$pangkateatasrendahbulan3 = $nilaibulan3 - $meanbulan3rendah;  pow($pangkateatasrendahbulan3,2); 
$pangkatebawahrendahbulan3 = 2*pow($stdbulan3rendah,2);  $pangkatebawahrendahbulan3; 
$hasilbagieabrendahbulan3 = pow($pangkateatasrendahbulan3,2) / $pangkatebawahrendahbulan3 ;  $hasilbagieabrendahbulan3; 
$satuepangkatrendahbulan3 = 1/(exp($hasilbagieabrendahbulan3));  $satuepangkatrendahbulan3; 
$hasilrendahbulan3 = $satuphinilairendahbulan3*$satuepangkatrendahbulan3;  $hasilrendahbulan3; 
                        
                        
$nilaibulan3; 
$meanbulan3sedang; 
$stdbulan3sedang; 
$phinilai2sedangbulan3 = 2.505*$stdbulan3sedang; 
$satuphinilaisedangbulan3 = 1/$phinilai2sedangbulan3; 
$pangkateatassedangbulan3 = $nilaibulan3 - $meanbulan3sedang;  pow($pangkateatassedangbulan3,2); 
$pangkatebawahsedangbulan3 = 2*pow($stdbulan3sedang,2);  $pangkatebawahsedangbulan3; 
$hasilbagieabsedangbulan3 = pow($pangkateatassedangbulan3,2) / $pangkatebawahsedangbulan3 ;  $hasilbagieabsedangbulan3; 
$satuepangkatsedangbulan3 = 1/(exp($hasilbagieabsedangbulan3));  $satuepangkatsedangbulan3; 
$hasilsedangbulan3 = $satuphinilaisedangbulan3*$satuepangkatsedangbulan3;  $hasilsedangbulan3; 
                        
                        
$nilaibulan3; 
$meanbulan3tinggi; 
$stdbulan3tinggi; 
$phinilai2tinggibulan3 = 2.505*$stdbulan3tinggi; 
$satuphinilaitinggibulan3 = 1/$phinilai2tinggibulan3; 
$pangkateatastinggibulan3 = $nilaibulan3 - $meanbulan3tinggi;  pow($pangkateatastinggibulan3,2); 
$pangkatebawahtinggibulan3 = 2*pow($stdbulan3tinggi,2);  $pangkatebawahtinggibulan3; 
$hasilbagieabtinggibulan3 = pow($pangkateatastinggibulan3,2) / $pangkatebawahtinggibulan3 ;  $hasilbagieabtinggibulan3; 
$satuepangkattinggibulan3 = 1/(exp($hasilbagieabtinggibulan3));  $satuepangkattinggibulan3; 
$hasiltinggibulan3 = $satuphinilaitinggibulan3*$satuepangkattinggibulan3;  $hasiltinggibulan3; 

$nilaibulan4;
$meanbulan4rendah;
$stdbulan4rendah;
$phinilai2rendahbulan4 = 2.505*$stdbulan4rendah;
$satuphinilairendahbulan4 = 1/$phinilai2rendahbulan4;
$pangkateatasrendahbulan4 = $nilaibulan4 - $meanbulan4rendah;  pow($pangkateatasrendahbulan4,2);
$pangkatebawahrendahbulan4 = 2*pow($stdbulan4rendah,2);  $pangkatebawahrendahbulan4;
$hasilbagieabrendahbulan4 = pow($pangkateatasrendahbulan4,2) / $pangkatebawahrendahbulan4 ;  $hasilbagieabrendahbulan4;
$satuepangkatrendahbulan4 = 1/(exp($hasilbagieabrendahbulan4));  $satuepangkatrendahbulan4;
$hasilrendahbulan4 = $satuphinilairendahbulan4*$satuepangkatrendahbulan4;  $hasilrendahbulan4;
                        
                        
$nilaibulan4;
$meanbulan4sedang;
$stdbulan4sedang;
$phinilai2sedangbulan4 = 2.505*$stdbulan4sedang;
$satuphinilaisedangbulan4 = 1/$phinilai2sedangbulan4;
$pangkateatassedangbulan4 = $nilaibulan4 - $meanbulan4sedang;  pow($pangkateatassedangbulan4,2);
$pangkatebawahsedangbulan4 = 2*pow($stdbulan4sedang,2);  $pangkatebawahsedangbulan4;
$hasilbagieabsedangbulan4 = pow($pangkateatassedangbulan4,2) / $pangkatebawahsedangbulan4;  $hasilbagieabsedangbulan4;
$satuepangkatsedangbulan4 = 1/(exp($hasilbagieabsedangbulan4));  $satuepangkatsedangbulan4;
$hasilsedangbulan4 = $satuphinilaisedangbulan4*$satuepangkatsedangbulan4;  $hasilsedangbulan4;
                        

$nilaibulan4;
$meanbulan4tinggi;
$stdbulan4tinggi;
$phinilai2tinggibulan4 = 2.505*$stdbulan4tinggi;
$satuphinilaitinggibulan4 = 1/$phinilai2tinggibulan4;
$pangkateatastinggibulan4 = $nilaibulan4 - $meanbulan4tinggi;  pow($pangkateatastinggibulan4,2);
$pangkatebawahtinggibulan4 = 2*pow($stdbulan4tinggi,2);  $pangkatebawahtinggibulan4;
$hasilbagieabtinggibulan4 = pow($pangkateatastinggibulan4,2) / $pangkatebawahtinggibulan4 ;  $hasilbagieabtinggibulan4;
$satuepangkattinggibulan4 = 1/(exp($hasilbagieabtinggibulan4));  $satuepangkattinggibulan4;
$hasiltinggibulan4 = $satuphinilaitinggibulan4*$satuepangkattinggibulan4;  $hasiltinggibulan4;

$nilaibulan5;
$meanbulan5rendah;
$stdbulan5rendah;
$phinilai2rendahbulan5 = 2.505*$stdbulan5rendah;
$satuphinilairendahbulan5 = 1/$phinilai2rendahbulan5;
$pangkateatasrendahbulan5 = $nilaibulan5 - $meanbulan5rendah;  pow($pangkateatasrendahbulan5,2);
$pangkatebawahrendahbulan5 = 2*pow($stdbulan5rendah,2);  $pangkatebawahrendahbulan5;
$hasilbagieabrendahbulan5 = pow($pangkateatasrendahbulan5,2) / $pangkatebawahrendahbulan5 ;  $hasilbagieabrendahbulan5;
$satuepangkatrendahbulan5 = 1/(exp($hasilbagieabrendahbulan5));  $satuepangkatrendahbulan5;
$hasilrendahbulan5 = $satuphinilairendahbulan5*$satuepangkatrendahbulan5;  $hasilrendahbulan5;
                        
                        
$nilaibulan5;
$meanbulan5sedang;
$stdbulan5sedang;
$phinilai2sedangbulan5 = 2.505*$stdbulan5sedang;
$satuphinilaisedangbulan5 = 1/$phinilai2sedangbulan5;
$pangkateatassedangbulan5 = $nilaibulan5 - $meanbulan5sedang;  pow($pangkateatassedangbulan5,2);
$pangkatebawahsedangbulan5 = 2*pow($stdbulan5sedang,2);  $pangkatebawahsedangbulan5;
$hasilbagieabsedangbulan5 = pow($pangkateatassedangbulan5,2) / $pangkatebawahsedangbulan5 ;  $hasilbagieabsedangbulan5;
$satuepangkatsedangbulan5 = 1/(exp($hasilbagieabsedangbulan5));  $satuepangkatsedangbulan5;
$hasilsedangbulan5 = $satuphinilaisedangbulan5*$satuepangkatsedangbulan5;  $hasilsedangbulan5;
                        

$nilaibulan5;
$meanbulan5tinggi;
$stdbulan5tinggi;
$phinilai2tinggibulan5 = 2.505*$stdbulan5tinggi;
$satuphinilaitinggibulan5 = 1/$phinilai2tinggibulan5;
$pangkateatastinggibulan5 = $nilaibulan5 - $meanbulan5tinggi;  pow($pangkateatastinggibulan5,2);
$pangkatebawahtinggibulan5 = 2*pow($stdbulan5tinggi,2);  $pangkatebawahtinggibulan5;
$hasilbagieabtinggibulan5 = pow($pangkateatastinggibulan5,2) / $pangkatebawahtinggibulan5 ;  $hasilbagieabtinggibulan5;
$satuepangkattinggibulan5 = 1/(exp($hasilbagieabtinggibulan5));  $satuepangkattinggibulan5;
$hasiltinggibulan5 = $satuphinilaitinggibulan5*$satuepangkattinggibulan5;  $hasiltinggibulan5;

//1
if ($jml_ak == "Sedikit" && $stts_pemakain1 == "Rendah") {
    $jml_anggota_kel1 = $probabilitasrendahSedikit;
}
elseif ($jml_ak == "Sedang" && $stts_pemakain1 == "Rendah") {
    $jml_anggota_kel1 = $probabilitasSedangSedikit;
}
elseif ($jml_ak == "Banyak" && $stts_pemakain1 == "Rendah") {
    $jml_anggota_kel1 = $probabilitastinggiSedikit;
}

if ($jml_ken == "Sedikit" && $stts_pemakain1 == "Rendah") {
    $jml_kendaraan1 = $probabilitasrendahsedikit;
}
elseif ($jml_ken == "Sedang" && $stts_pemakain1 == "Rendah") {
    $jml_kendaraan1 = $probabilitassedangsedikit;
}
elseif ($jml_ken == "Banyak" && $stts_pemakain1 == "Rendah") {
    $jml_kendaraan1 = $probabilitastinggisedikit;
}

if ($tp_rumah == "Kecil" && $stts_pemakain1 == "Rendah") {
    $jml_tp_rumah1 = $probabilitasrendahKecil;
}
elseif ($tp_rumah == "Standar" && $stts_pemakain1 == "Rendah") {
    $jml_tp_rumah1 = $probabilitasSedangKecil;
}
elseif ($tp_rumah == "Besar" && $stts_pemakain1 == "Rendah") {
    $jml_tp_rumah1 = $probabilitastinggiKecil;
}

//2
if ($jml_ak == "Sedikit" && $stts_pemakain2 == "Sedang") {
    $jml_anggota_kel2 = $probabilitasrendahSedang;
}
elseif ($jml_ak == "Sedang" && $stts_pemakain2 == "Sedang") {
    $jml_anggota_kel2 = $probabilitasSedangSedang;
}
elseif ($jml_ak == "Banyak" && $stts_pemakain2 == "Sedang") {
    $jml_anggota_kel2 = $probabilitastinggiSedang;
}

if ($jml_ken == "Sedikit" && $stts_pemakain2 == "Sedang") {
    $jml_kendaraan2 = $probabilitasrendahsedang;
}
elseif ($jml_ken == "Sedang" && $stts_pemakain2 == "Sedang") {
    $jml_kendaraan2 = $probabilitassedangsedang;
}
elseif ($jml_ken == "Banyak" && $stts_pemakain2 == "Sedang") {
    $jml_kendaraan2 = $probabilitastinggisedang;
}

if ($tp_rumah == "Kecil" && $stts_pemakain2 == "Sedang") {
    $jml_tp_rumah2 = $probabilitasrendahStandar;
}
elseif ($tp_rumah == "Standar" && $stts_pemakain2 == "Sedang") {
    $jml_tp_rumah2 = $probabilitasSedangStandar;
}
elseif ($tp_rumah == "Besar" && $stts_pemakain2 == "Sedang") {
    $jml_tp_rumah2 = $probabilitastinggiStandar;
}

//3
if ($jml_ak == "Sedikit" && $stts_pemakain3 == "Tinggi") {
    $jml_anggota_kel3 = $probabilitasrendahBanyak;
}
elseif ($jml_ak == "Sedang" && $stts_pemakain3 == "Tinggi") {
    $jml_anggota_kel3 = $probabilitasSedangBanyak;
}
elseif ($jml_ak == "Banyak" && $stts_pemakain3 == "Tinggi") {
    $jml_anggota_kel3 = $probabilitastinggiBanyak;
}

if ($jml_ken == "Sedikit" && $stts_pemakain3 == "Tinggi") {
    $jml_kendaraan3 = $probabilitasrendahbanyak;
}
elseif ($jml_ken == "Sedang" && $stts_pemakain3 == "Tinggi") {
    $jml_kendaraan3 = $probabilitassedangbanyak;
}
elseif ($jml_ken == "Banyak" && $stts_pemakain3 == "Tinggi") {
    $jml_kendaraan3 = $probabilitastinggibanyak;
}

if ($tp_rumah == "Kecil" && $stts_pemakain3 == "Tinggi") {
    $jml_tp_rumah3 = $probabilitasrendahBesar;
}
elseif ($tp_rumah == "Standar" && $stts_pemakain3 == "Tinggi") {
    $jml_tp_rumah3 = $probabilitasSedangBesar;
}
elseif ($tp_rumah == "Besar" && $stts_pemakain3 == "Tinggi") {
    $jml_tp_rumah3 = $probabilitastinggiBesar;
}

$jumlah1 = $hasilrendahbulan1*$hasilrendahbulan2*$hasilrendahbulan3*$hasilrendahbulan4*$hasilrendahbulan5*$jml_anggota_kel1 * $jml_kendaraan1 * $jml_tp_rumah1 * $probabilitasrendah;

$jumlah2 = $hasilsedangbulan1*$hasilsedangbulan2*$hasilsedangbulan3*$hasilsedangbulan4*$hasilsedangbulan5*$jml_anggota_kel2 * $jml_kendaraan2 * $jml_tp_rumah2 * $probabilitasSedang;

$jumlah3 = $hasiltinggibulan1*$hasiltinggibulan2*$hasiltinggibulan3*$hasiltinggibulan4*$hasiltinggibulan5*$jml_anggota_kel3 * $jml_kendaraan3 * $jml_tp_rumah3 * $probabilitastingg;
                        
                        
$jumlah4 = $jumlah1 + $jumlah2 + $jumlah3;
                        
                   
$jumlah5[1] = $jumlah1 / $jumlah4 ;
$jumlah5[2] = $jumlah2 / $jumlah4 ;
$jumlah5[3] = $jumlah3 / $jumlah4 ;


$kondisinya = $hasil1x*$hasil2x*$hasil3x*$hasil4x*$hasil5x;

if ($kondisinya == 0) 
{
    $status_penggunaan_nya = '<center>-</center>';
    $status_button = 'disabled';
} 
else if ($kondisinya != 0) {
    $keputusan = array($jumlah5[1],$jumlah5[2],$jumlah5[3]);
    if (max($keputusan) == $jumlah5[1])
    {
        $status_penggunaan_nya = "<b><span style=color:green>Rendah</span></b>";
    }
    elseif (max($keputusan) == $jumlah5[2])
    {
        $status_penggunaan_nya = "<b><span style=color:yellow>Sedang</span></b>";
    }
    elseif (max($keputusan) == $jumlah5[3])
    {
        $status_penggunaan_nya = "<b><span style=color:red>Tinggi</span></b>";
    }
}
// Finish Implementasi Naive Bayesnya

$debit = ($hasil1x + $hasil2x + $hasil3x + $hasil4x + $hasil5x) / 5;



                        echo "
                        <tr>
                                <td>{$number}</td>
                                <td>{$row['id_pelanggan']}</td>
                                <td>{$row['nama']}</td>
                                <td>{$row['jk']}</td>
                                <td>$rumah</td>
                                <td>$jml_ak</td>
                                <td>$jml_ken</td>
                                <td>$hasil1x M<sup>3</sup></td>
                                <td>$hasil2x M<sup>3</sup></td>
                                <td>$hasil3x M<sup>3</sup></td>
                                <td>$hasil4x M<sup>3</sup></td>
                                <td>$hasil5x M<sup>3</sup></td>
                                <td>$status_penggunaan_nya</td>
                                <td>$debit</td>
                                <td>
                                <a href='?menu=vproses&id_pelanggan={$row['id_pelanggan']}&tp_rumah=$rumah&jml_ak=$jml_ak&jml_ken=$jml_ken&bulan1=$hasil1x&bulan2=$hasil2x&bulan3=$hasil3x&bulan4=$hasil4x&bulan5=$hasil5x' type='button' class='btn btn-primary btn-sm' $status_button>
                                Lihat
                                </a>
                                </td>
                            </tr>
                        ";
                        $number+=1;
                        endwhile;
                        ?>
                       </tbody>
                    </table>
                </div>
            </div>


<script>
    $(document).ready(function () 
    {
        (function ($)
        {
            $('#filter').keyup(function ()
            {
                var rex = new RegExp($(this).val(), 'i');
                $('.searchable tr').hide();
                $('.searchable tr').filter(function ()
                {
                return rex.test($(this).text());
                }).show();
            })
        }(jQuery));
    });
</script>