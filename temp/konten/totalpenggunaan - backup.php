<!-- Page Content -->
<?php
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

if ($januari ==0){ $januari=0; }
if ($februari ==0){ $februari=0; }
if ($maret ==0){ $maret=0; }
if ($april ==0){ $april=0; }
if ($mei ==0){ $mei=0; }
if ($juni ==0){ $juni=0; }
if ($juli ==0){ $juli=0; }
if ($agustus ==0){ $agustus=0; }
if ($september ==0){ $september=0; }
if ($oktober ==0){ $oktober=0; }
if ($november ==0){ $november=0; }
if ($desember ==0){ $desember=0; }


?>
<div id="page-content-wrapper">
    <div class="container-fluid">    
        <div class="row">
            <div class="col-lg-6">
                <section class="content-header"><h4>Total Penggunaan Tahun <?php echo $tahun_sekarang;?></h4></section>
                
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
                                labels : ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agutus","September","Oktober","November","Desember"],
                                datasets : [
                                    {
                                        label: "My Second dataset",
                                        fillColor : "rgba(151,187,205,0.2)",
                                        strokeColor : "rgba(151,187,205,1)",
                                        pointColor : "rgba(151,187,205,1)",
                                        pointStrokeColor : "#fff",
                                        pointHighlightFill : "#fff",
                                        pointHighlightStroke : "rgba(151,187,205,1)",
                                        data : [<?php echo $januari; ?>,
                                                <?php echo $februari; ?>,
                                                <?php echo $maret; ?>,
                                                <?php echo $april; ?>,
                                                <?php echo $mei; ?>,
                                                <?php echo $juni; ?>,
                                                <?php echo $juli; ?>,
                                                <?php echo $agustus; ?>,
                                                <?php echo $september; ?>,
                                                <?php echo $oktober; ?>,
                                                <?php echo $november; ?>,
                                                <?php echo $desember; ?>,]
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
                                <th>Januari</th>
                                <th>Februari</th>
                                <th>Maret</th>
                                <th>April</th>
                                <th>Mei</th>
                                <th>Juni</th>
                                <th>Juli</th>
                                <th>Agustus</th>
                                <th>September</th>
                                <th>Oktober</th>
                                <th>November</th>
                                <th>Desember</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody class="searchable">
                            <tr>
                                <td>
                                <?php
                                if ($januari == null) {echo "-";}
                                else if($januari >= 1000){$hasil = $januari/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $januari; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($februari == null) {echo "-";}
                                else if($februari >= 1000){$hasil = $februari/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $februari; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($maret == null) {echo "-";}
                                else if($maret >= 1000){$hasil = $maret/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $maret; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($april == null) {echo "-";}
                                else if($april >= 1000){$hasil = $april/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $april; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($mei == null) {echo "-";}
                                else if($mei >= 1000){$hasil = $mei/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $mei; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($juni == null) {echo "-";}
                                else if($juni >= 1000){$hasil = $juni/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $juni; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($juli == null) {echo "-";}
                                else if($juli >= 1000){$hasil = $juli/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $juli; echo " L";}
                                ?>
                                </td>
                                 <td>
                                <?php
                                if ($agustus == null) {echo "-";}
                                else if($agustus >= 1000){$hasil = $agustus/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $agustus; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($september == null) {echo "-";}
                                else if($september >= 1000){$hasil = $september/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $september; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($oktober == null) {echo "-";}
                                else if($oktober >= 1000){$hasil = $oktober/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $oktober; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($november == null) {echo "-";}
                                else if($november >= 1000){$hasil = $november/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $november; echo " L";}
                                ?>
                                </td>
                                <td>
                                <?php
                                if ($desember == null) {echo "-";}
                                else if($desember >= 1000){$hasil = $desember/1000; echo $hasil; echo " M<sup>3</sup>";}
                                else {echo $desember; echo " L";}
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

            <div class="row">
                <div class="col-xs-3">
                <section class="content-header"><h4>Bulan 1</h4></section>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Mean</th>
                                <th>St.Deviasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="searchable">
                        <?php
                        $querybulan1ke1 = "SELECT AVG(total) AS Mean1,
                                        STDDEV_POP(total) AS STD_Rendah1
                                        FROM limabulanan WHERE statusnya='Rendah' && bulan = 6";
                        $resultbulan1ke1 = mysqli_query($con, $querybulan1ke1);
                        $rowbulan1ke1 = mysqli_fetch_assoc($resultbulan1ke1); 
                        $meanke1 = $rowbulan1ke1['Mean1'];
                        $formatmeant1 = number_format($meanke1,8);
                        $stdke1 = $rowbulan1ke1['STD_Rendah1'];
                        $formatstd1 = number_format($stdke1,8);

                        $querybulan1ke2 = "SELECT AVG(total) AS Mean2,
                                        STDDEV_POP(total) AS STD_Sedang2
                                        FROM limabulanan WHERE statusnya='Sedang' && bulan = 6";
                        $resultbulan1ke2 = mysqli_query($con, $querybulan1ke2);
                        $rowbulan1ke2 = mysqli_fetch_assoc($resultbulan1ke2); 
                        $meanke2 = $rowbulan1ke2['Mean2'];
                        $formatmeant2 = number_format($meanke2,8);
                        $stdke2 = $rowbulan1ke2['STD_Sedang2'];
                        $formatstd2 = number_format($stdke2,8);

                        $querybulan1ke3 = "SELECT AVG(total) AS Mean3,
                                        STDDEV_POP(total) AS STD_Tinggi3
                                        FROM limabulanan WHERE statusnya='Tinggi' && bulan = 6";
                        $resultbulan1ke3 = mysqli_query($con, $querybulan1ke3);
                        $rowbulan1ke3 = mysqli_fetch_assoc($resultbulan1ke3); 
                        $meanke3 = $rowbulan1ke3['Mean3'];
                        $formatmeant3 = number_format($meanke3,8);
                        $stdke3 = $rowbulan1ke3['STD_Tinggi3'];
                        $formatstd3 = number_format($stdke3,8);

                        echo "<tr><td>$formatmeant1</td><td>$formatstd1</td><td>Rendah</td></tr>";
                        echo "<tr><td>$formatmeant2</td><td>$formatstd2</td><td>Sedang</td></tr>";
                        echo "<tr><td>$formatmeant3</td><td>$formatstd3</td><td>Tinggi</td></tr>";
                        ?>
                       </tbody>
                    </table>
                </div>
                <div class="col-xs-3">
                <section class="content-header"><h4>Bulan 2</h4></section>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Mean</th>
                                <th>St.Deviasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="searchable">
                        <?php
                        $querybulan1ke1 = "SELECT AVG(total) AS Mean1,
                                        STDDEV_POP(total) AS STD_Rendah1
                                        FROM limabulanan WHERE statusnya='Rendah' && bulan = 7";
                        $resultbulan1ke1 = mysqli_query($con, $querybulan1ke1);
                        $rowbulan1ke1 = mysqli_fetch_assoc($resultbulan1ke1); 
                        $meanke1 = $rowbulan1ke1['Mean1'];
                        $formatmeant1 = number_format($meanke1,8);
                        $stdke1 = $rowbulan1ke1['STD_Rendah1'];
                        $formatstd1 = number_format($stdke1,8);

                        $querybulan1ke2 = "SELECT AVG(total) AS Mean2,
                                        STDDEV_POP(total) AS STD_Sedang2
                                        FROM limabulanan WHERE statusnya='Sedang' && bulan = 7";
                        $resultbulan1ke2 = mysqli_query($con, $querybulan1ke2);
                        $rowbulan1ke2 = mysqli_fetch_assoc($resultbulan1ke2); 
                        $meanke2 = $rowbulan1ke2['Mean2'];
                        $formatmeant2 = number_format($meanke2,8);
                        $stdke2 = $rowbulan1ke2['STD_Sedang2'];
                        $formatstd2 = number_format($stdke2,8);

                        $querybulan1ke3 = "SELECT AVG(total) AS Mean3,
                                        STDDEV_POP(total) AS STD_Tinggi3
                                        FROM limabulanan WHERE statusnya='Tinggi' && bulan = 7";
                        $resultbulan1ke3 = mysqli_query($con, $querybulan1ke3);
                        $rowbulan1ke3 = mysqli_fetch_assoc($resultbulan1ke3); 
                        $meanke3 = $rowbulan1ke3['Mean3'];
                        $formatmeant3 = number_format($meanke3,8);
                        $stdke3 = $rowbulan1ke3['STD_Tinggi3'];
                        $formatstd3 = number_format($stdke3,8);

                        echo "<tr><td>$formatmeant1</td><td>$formatstd1</td><td>Rendah</td></tr>";
                        echo "<tr><td>$formatmeant2</td><td>$formatstd2</td><td>Sedang</td></tr>";
                        echo "<tr><td>$formatmeant3</td><td>$formatstd3</td><td>Tinggi</td></tr>";
                        ?>
                       </tbody>
                    </table>
                </div>
                <div class="col-xs-3">
                <section class="content-header"><h4>Bulan 3</h4></section>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Mean</th>
                                <th>St.Deviasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="searchable">
                        <?php
                        $querybulan1ke1 = "SELECT AVG(total) AS Mean1,
                                        STDDEV_POP(total) AS STD_Rendah1
                                        FROM limabulanan WHERE statusnya='Rendah' && bulan = 8";
                        $resultbulan1ke1 = mysqli_query($con, $querybulan1ke1);
                        $rowbulan1ke1 = mysqli_fetch_assoc($resultbulan1ke1); 
                        $meanke1 = $rowbulan1ke1['Mean1'];
                        $formatmeant1 = number_format($meanke1,8);
                        $stdke1 = $rowbulan1ke1['STD_Rendah1'];
                        $formatstd1 = number_format($stdke1,8);

                        $querybulan1ke2 = "SELECT AVG(total) AS Mean2,
                                        STDDEV_POP(total) AS STD_Sedang2
                                        FROM limabulanan WHERE statusnya='Sedang' && bulan = 8";
                        $resultbulan1ke2 = mysqli_query($con, $querybulan1ke2);
                        $rowbulan1ke2 = mysqli_fetch_assoc($resultbulan1ke2); 
                        $meanke2 = $rowbulan1ke2['Mean2'];
                        $formatmeant2 = number_format($meanke2,8);
                        $stdke2 = $rowbulan1ke2['STD_Sedang2'];
                        $formatstd2 = number_format($stdke2,8);

                        $querybulan1ke3 = "SELECT AVG(total) AS Mean3,
                                        STDDEV_POP(total) AS STD_Tinggi3
                                        FROM limabulanan WHERE statusnya='Tinggi' && bulan = 8";
                        $resultbulan1ke3 = mysqli_query($con, $querybulan1ke3);
                        $rowbulan1ke3 = mysqli_fetch_assoc($resultbulan1ke3); 
                        $meanke3 = $rowbulan1ke3['Mean3'];
                        $formatmeant3 = number_format($meanke3,8);
                        $stdke3 = $rowbulan1ke3['STD_Tinggi3'];
                        $formatstd3 = number_format($stdke3,8);

                        echo "<tr><td>$formatmeant1</td><td>$formatstd1</td><td>Rendah</td></tr>";
                        echo "<tr><td>$formatmeant2</td><td>$formatstd2</td><td>Sedang</td></tr>";
                        echo "<tr><td>$formatmeant3</td><td>$formatstd3</td><td>Tinggi</td></tr>";
                        ?>
                       </tbody>
                    </table>
                </div>
                <div class="col-xs-3">
                <section class="content-header"><h4>Bulan 4</h4></section>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Mean</th>
                                <th>St.Deviasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="searchable">
                        <?php
                        $querybulan1ke1 = "SELECT AVG(total) AS Mean1,
                                        STDDEV_POP(total) AS STD_Rendah1
                                        FROM limabulanan WHERE statusnya='Rendah' && bulan = 9";
                        $resultbulan1ke1 = mysqli_query($con, $querybulan1ke1);
                        $rowbulan1ke1 = mysqli_fetch_assoc($resultbulan1ke1); 
                        $meanke1 = $rowbulan1ke1['Mean1'];
                        $formatmeant1 = number_format($meanke1,8);
                        $stdke1 = $rowbulan1ke1['STD_Rendah1'];
                        $formatstd1 = number_format($stdke1,8);

                        $querybulan1ke2 = "SELECT AVG(total) AS Mean2,
                                        STDDEV_POP(total) AS STD_Sedang2
                                        FROM limabulanan WHERE statusnya='Sedang' && bulan = 9";
                        $resultbulan1ke2 = mysqli_query($con, $querybulan1ke2);
                        $rowbulan1ke2 = mysqli_fetch_assoc($resultbulan1ke2); 
                        $meanke2 = $rowbulan1ke2['Mean2'];
                        $formatmeant2 = number_format($meanke2,8);
                        $stdke2 = $rowbulan1ke2['STD_Sedang2'];
                        $formatstd2 = number_format($stdke2,8);

                        $querybulan1ke3 = "SELECT AVG(total) AS Mean3,
                                        STDDEV_POP(total) AS STD_Tinggi3
                                        FROM limabulanan WHERE statusnya='Tinggi' && bulan = 9";
                        $resultbulan1ke3 = mysqli_query($con, $querybulan1ke3);
                        $rowbulan1ke3 = mysqli_fetch_assoc($resultbulan1ke3); 
                        $meanke3 = $rowbulan1ke3['Mean3'];
                        $formatmeant3 = number_format($meanke3,8);
                        $stdke3 = $rowbulan1ke3['STD_Tinggi3'];
                        $formatstd3 = number_format($stdke3,8);

                        echo "<tr><td>$formatmeant1</td><td>$formatstd1</td><td>Rendah</td></tr>";
                        echo "<tr><td>$formatmeant2</td><td>$formatstd2</td><td>Sedang</td></tr>";
                        echo "<tr><td>$formatmeant3</td><td>$formatstd3</td><td>Tinggi</td></tr>";
                        ?>
                       </tbody>
                    </table>
                </div>
                <div class="col-xs-3">
                <section class="content-header"><h4>Bulan 5</h4></section>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Mean</th>
                                <th>St.Deviasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="searchable">
                        <?php
                        $querybulan1ke1 = "SELECT AVG(total) AS Mean1,
                                        STDDEV_POP(total) AS STD_Rendah1
                                        FROM limabulanan WHERE statusnya='Rendah' && bulan = 10";
                        $resultbulan1ke1 = mysqli_query($con, $querybulan1ke1);
                        $rowbulan1ke1 = mysqli_fetch_assoc($resultbulan1ke1); 
                        $meanke1 = $rowbulan1ke1['Mean1'];
                        $formatmeant1 = number_format($meanke1,8);
                        $stdke1 = $rowbulan1ke1['STD_Rendah1'];
                        $formatstd1 = number_format($stdke1,8);

                        $querybulan1ke2 = "SELECT AVG(total) AS Mean2,
                                        STDDEV_POP(total) AS STD_Sedang2
                                        FROM limabulanan WHERE statusnya='Sedang' && bulan = 10";
                        $resultbulan1ke2 = mysqli_query($con, $querybulan1ke2);
                        $rowbulan1ke2 = mysqli_fetch_assoc($resultbulan1ke2); 
                        $meanke2 = $rowbulan1ke2['Mean2'];
                        $formatmeant2 = number_format($meanke2,8);
                        $stdke2 = $rowbulan1ke2['STD_Sedang2'];
                        $formatstd2 = number_format($stdke2,8);

                        $querybulan1ke3 = "SELECT AVG(total) AS Mean3,
                                        STDDEV_POP(total) AS STD_Tinggi3
                                        FROM limabulanan WHERE statusnya='Tinggi' && bulan = 10";
                        $resultbulan1ke3 = mysqli_query($con, $querybulan1ke3);
                        $rowbulan1ke3 = mysqli_fetch_assoc($resultbulan1ke3); 
                        $meanke3 = $rowbulan1ke3['Mean3'];
                        $formatmeant3 = number_format($meanke3,8);
                        $stdke3 = $rowbulan1ke3['STD_Tinggi3'];
                        $formatstd3 = number_format($stdke3,8);

                        echo "<tr><td>$formatmeant1</td><td>$formatstd1</td><td>Rendah</td></tr>";
                        echo "<tr><td>$formatmeant2</td><td>$formatstd2</td><td>Sedang</td></tr>";
                        echo "<tr><td>$formatmeant3</td><td>$formatstd3</td><td>Tinggi</td></tr>";
                        ?>
                       </tbody>
                    </table>
                </div>
            </div


            <div class="row">
            <div class="col-lg-6">
                <section class="content-header"><h4>Klasifikasi</h4></section>
                
                </div>
                <div class="col-lg-3 pull-right">
                    <div class="input-group pull-right"> 
                        <!--<a href="?menu=custompelanggan" type="button" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-plus"></span>
                        Filter
                        </a>-->
                    </div>
                </div>
            </div>
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
                                <th>Bulan1</th>
                                <th>Bulan2</th>
                                <th>Bulan3</th>
                                <th>Bulan4</th>
                                <th>Bulan5</th>
                                <th>Total</th>
                                <th>Rata-rata</th>
                                <th>Status</th>
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
                echo "<br>ini array<br>";
                echo "Ke 1 :".$bulanke[1]."<br>";
                echo "Ke 2 :".$bulanke[2]."<br>";
                echo "Ke 3 :".$bulanke[3]."<br>";
                echo "Ke 4 :".$bulanke[4]."<br>";
                echo "Ke 5 :".$bulanke[5]."<br>";


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
                echo "<br>".$bulanke[5];
                echo "<br>".$bulanke[4];
                echo "<br>".$bulanke[3];
                echo "<br>".$bulanke[2];
                echo "<br>".$bulanke[1];

                echo "<br> Tahun Lalu :".$tahunya[2];
                echo "<br> Tahun Sekarang :".$tahunya[1];

                if ($bulankex[5] == 12) {
                    echo "<br>bulan ".$bulanke[5]." tahun ".$tahunya[2];
                    echo "<br>bulan ".$bulanke[4]." tahun ".$tahunya[2];
                    echo "<br>bulan ".$bulanke[3]." tahun ".$tahunya[2];
                    echo "<br>bulan ".$bulanke[2]." tahun ".$tahunya[2];
                    echo "<br>bulan ".$bulanke[1]." tahun ".$tahunya[2]."<br>";
                    $query = "SELECT id_pelanggan, nama, jk, tipe,
                                sum(if(month(`date`) = $bulanke[1] && year(`date`) = $tahunya[2], `value`,0)) as bulan1,
                                sum(if(month(`date`) = $bulanke[2] && year(`date`) = $tahunya[2], `value`,0)) as bulan2,
                                sum(if(month(`date`) = $bulanke[3] && year(`date`) = $tahunya[2], `value`,0)) as bulan3,
                                sum(if(month(`date`) = $bulanke[4] && year(`date`) = $tahunya[2], `value`,0)) as bulan4,
                                sum(if(month(`date`) = $bulanke[5] && year(`date`) = $tahunya[2], `value`,0)) as bulan5
                            FROM penggunaan_air LEFT JOIN pelanggan USING(id_pelanggan) GROUP BY id_pelanggan asc";
                }
                else if ($bulankex[4] == 12) {
                    echo "<br>bulan ".$bulanke[5]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[4]." tahun ".$tahunya[2];
                    echo "<br>bulan ".$bulanke[3]." tahun ".$tahunya[2];
                    echo "<br>bulan ".$bulanke[2]." tahun ".$tahunya[2];
                    echo "<br>bulan ".$bulanke[1]." tahun ".$tahunya[2]."<br>";
                    $query = "SELECT id_pelanggan, nama, jk, tipe,
                                sum(if(month(`date`) = $bulanke[1] && year(`date`) = $tahunya[2], `value`,0)) as bulan1,
                                sum(if(month(`date`) = $bulanke[2] && year(`date`) = $tahunya[2], `value`,0)) as bulan2,
                                sum(if(month(`date`) = $bulanke[3] && year(`date`) = $tahunya[2], `value`,0)) as bulan3,
                                sum(if(month(`date`) = $bulanke[4] && year(`date`) = $tahunya[2], `value`,0)) as bulan4,
                                sum(if(month(`date`) = $bulanke[5] && year(`date`) = $tahunya[1], `value`,0)) as bulan5
                            FROM penggunaan_air LEFT JOIN pelanggan USING(id_pelanggan) GROUP BY id_pelanggan asc";
                    
                }
                else if ($bulankex[3] == 12) {
                    echo "<br>bulan ".$bulanke[5]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[4]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[3]." tahun ".$tahunya[2];
                    echo "<br>bulan ".$bulanke[2]." tahun ".$tahunya[2];
                    echo "<br>bulan ".$bulanke[1]." tahun ".$tahunya[2]."<br>";
                    $query = "SELECT id_pelanggan, nama, jk, tipe,
                                sum(if(month(`date`) = $bulanke[1] && year(`date`) = $tahunya[2], `value`,0)) as bulan1,
                                sum(if(month(`date`) = $bulanke[2] && year(`date`) = $tahunya[2], `value`,0)) as bulan2,
                                sum(if(month(`date`) = $bulanke[3] && year(`date`) = $tahunya[2], `value`,0)) as bulan3,
                                sum(if(month(`date`) = $bulanke[4] && year(`date`) = $tahunya[1], `value`,0)) as bulan4,
                                sum(if(month(`date`) = $bulanke[5] && year(`date`) = $tahunya[1], `value`,0)) as bulan5
                            FROM penggunaan_air LEFT JOIN pelanggan USING(id_pelanggan) GROUP BY id_pelanggan asc";
                    
                }
                else if ($bulankex[2] == 12) {
                    echo "<br>bulan ".$bulanke[5]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[4]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[3]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[2]." tahun ".$tahunya[2];
                    echo "<br>bulan ".$bulanke[1]." tahun ".$tahunya[2]."<br>";
                    $query = "SELECT id_pelanggan, nama, jk, tipe,
                                sum(if(month(`date`) = $bulanke[1] && year(`date`) = $tahunya[2], `value`,0)) as bulan1,
                                sum(if(month(`date`) = $bulanke[2] && year(`date`) = $tahunya[2], `value`,0)) as bulan2,
                                sum(if(month(`date`) = $bulanke[3] && year(`date`) = $tahunya[1], `value`,0)) as bulan3,
                                sum(if(month(`date`) = $bulanke[4] && year(`date`) = $tahunya[1], `value`,0)) as bulan4,
                                sum(if(month(`date`) = $bulanke[5] && year(`date`) = $tahunya[1], `value`,0)) as bulan5
                            FROM penggunaan_air LEFT JOIN pelanggan USING(id_pelanggan) GROUP BY id_pelanggan asc";
                    
                }
                else if ($bulankex[1] == 12) {
                    echo "<br>bulan ".$bulanke[5]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[4]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[3]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[2]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[1]." tahun ".$tahunya[2]."<br>";
                    $query = "SELECT id_pelanggan, nama, jk, tipe,
                                sum(if(month(`date`) = $bulanke[1] && year(`date`) = $tahunya[2], `value`,0)) as bulan1,
                                sum(if(month(`date`) = $bulanke[2] && year(`date`) = $tahunya[1], `value`,0)) as bulan2,
                                sum(if(month(`date`) = $bulanke[3] && year(`date`) = $tahunya[1], `value`,0)) as bulan3,
                                sum(if(month(`date`) = $bulanke[4] && year(`date`) = $tahunya[1], `value`,0)) as bulan4,
                                sum(if(month(`date`) = $bulanke[5] && year(`date`) = $tahunya[1], `value`,0)) as bulan5
                            FROM penggunaan_air LEFT JOIN pelanggan USING(id_pelanggan) GROUP BY id_pelanggan asc";
                    
                }
                else
                {
                  echo "<br>bulan ".$bulanke[5]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[4]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[3]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[2]." tahun ".$tahunya[1];
                    echo "<br>bulan ".$bulanke[1]." tahun ".$tahunya[1]."<br>";  
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
                            $total_air_pelanggan = $hasil1x + $hasil2x + $hasil3x + $hasil4x + $hasil5x;
                            $rata_rata = $total_air_pelanggan / 5;
                            $tipe = $row['tipe'];
                            
                            if ($tipe == "A" && $rata_rata < 10) {
                                 $status = "<span style='color:green'>Rendah</span>";
                            }
                            if ($tipe == "B" && $rata_rata < 15) {
                                 $status = "<span style='color:green'>Rendah</span>";
                            }
                            if ($tipe == "C" && $rata_rata < 20) {
                                 $status = "<span style='color:green'>Rendah</span>";
                            }
                            if ($tipe == "A" && ($rata_rata >= 10 & $rata_rata <= 15)) {
                                 $status = "<span style='color:orange'>Sedang</span>";
                            }
                            if ($tipe == "B" && ($rata_rata >= 15 & $rata_rata <= 20)) {
                                 $status = "<span style='color:orange'>Sedang</span>";
                            }
                            if ($tipe == "C" && ($rata_rata >= 20 & $rata_rata <= 25)) {
                                 $status = "<span style='color:orange'>Sedang</span>";
                            }
                            if ($tipe == "A" && $rata_rata > 15) {
                                 $status = "<span style='color:red'>Tinggi</span>";
                            }
                            if ($tipe == "B" && $rata_rata > 20) {
                                 $status = "<span style='color:red'>Tinggi</span>";
                            }
                            if ($tipe == "C" && $rata_rata > 25) {
                                 $status = "<span style='color:red'>Tinggi</span>";
                            }
                            

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
                                <td><b>$total_air_pelanggan M<sup>3</sup></b></td>
                                <td>$rata_rata M<sup>3</sup></td>
                                <td>$status</td>
                                <td>
                                <a href='?menu=vproses&id_pelanggan={$row['id_pelanggan']}&tp_rumah=$rumah&jml_ak=$jml_ak&jml_ken=$jml_ken&bulan1=$hasil1x&bulan2=$hasil2x&bulan3=$hasil3x&bulan4=$hasil4x&bulan5=$hasil5x' type='button' class='btn btn-primary btn-sm'>
                                Lihat
                                </a>
                                </td>
                            </tr>
                        ";
                        $number+=1;

            $inputdatahasil1 = $datahasil1x[$number]=$hasil1x;
            $inputdatahasil2 = $datahasil2x[$number]=$hasil2x;
            $inputdatahasil3 = $datahasil3x[$number]=$hasil3x;
            $inputdatahasil4 = $datahasil4x[$number]=$hasil4x;
            $inputdatahasil5 = $datahasil5x[$number]=$hasil5x;
            echo $inputdatahasil1;
            echo $inputdatahasil2;
            echo $inputdatahasil3;
            echo $inputdatahasil4;
            echo $inputdatahasil5;
            echo $number;

            //bulan1
            if ($tipe == "A" && $inputdatahasil1 < 10) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "B" && $inputdatahasil1 < 15) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "C" && $inputdatahasil1 < 20) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "A" && ($inputdatahasil1 >= 10 & $inputdatahasil1 <= 15)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "B" && ($inputdatahasil1 >= 15 & $inputdatahasil1 <= 20)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "C" && ($inputdatahasil1 >= 20 & $inputdatahasil1 <= 25)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "A" && $inputdatahasil1 > 15) {
                $statusnya[$number] = "Tinggi";
            }
            if ($tipe == "B" && $inputdatahasil1 > 20) {
                $statusnya[$number] = "Tinggi";
            }
            if ($tipe == "C" && $inputdatahasil1 > 25) {
                $statusnya[$number] = "Tinggi";
            }

            $querycek1 = "SELECT * from limabulanan WHERE siklus= '5bulan1' && id_pelanggan = {$row['id_pelanggan']}";
            $resultcek1 = mysqli_query($con, $querycek1);

            if (mysqli_num_rows($resultcek1) > 0) {
                echo " Bulan 1 sudah ada <br>";
            }
            else {
                echo " Bulan 1 belum ada <br>";
                $query = "INSERT INTO limabulanan (`id_pelanggan`,`bulan`,`tahun`,`total`,`siklus`,`statusnya`)
                            VALUES ('{$row['id_pelanggan']}','{$bulanke[1]}','{$tahun_sekarang}','$inputdatahasil1}','5bulan1','{$statusnya[$number]}')";
                mysqli_query($con, $query);//*/
            }
            //endbulan1

            //bulan2
            if ($tipe == "A" && $inputdatahasil2 < 10) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "B" && $inputdatahasil2 < 15) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "C" && $inputdatahasil2 < 20) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "A" && ($inputdatahasil2 >= 10 & $inputdatahasil2 <= 15)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "B" && ($inputdatahasil2 >= 15 & $inputdatahasil2 <= 20)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "C" && ($inputdatahasil2 >= 20 & $inputdatahasil2 <= 25)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "A" && $inputdatahasil2 > 15) {
                $statusnya[$number] = "Tinggi";
            }
            if ($tipe == "B" && $inputdatahasil2 > 20) {
                $statusnya[$number] = "Tinggi";
            }
            if ($tipe == "C" && $inputdatahasil2 > 25) {
                $statusnya[$number] = "Tinggi";
            }

            $querycek2 = "SELECT * from limabulanan WHERE siklus= '5bulan2' && id_pelanggan = {$row['id_pelanggan']}";
            $resultcek2 = mysqli_query($con, $querycek2);

            if (mysqli_num_rows($resultcek2) > 0) {
                echo " Bulan 2 sudah ada <br>";
            }
            else {
                echo " Bulan 2 belum ada <br>";
                $query = "INSERT INTO limabulanan (`id_pelanggan`,`bulan`,`tahun`,`total`,`siklus`,`statusnya`)
                            VALUES ('{$row['id_pelanggan']}','{$bulanke[2]}','{$tahun_sekarang}','$inputdatahasil2}','5bulan2','{$statusnya[$number]}')";
                mysqli_query($con, $query);//*/
            }
            //endbulan2

            //bulan3
            if ($tipe == "A" && $inputdatahasil3 < 10) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "B" && $inputdatahasil3 < 15) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "C" && $inputdatahasil3 < 20) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "A" && ($inputdatahasil3 >= 10 & $inputdatahasil3 <= 15)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "B" && ($inputdatahasil3 >= 15 & $inputdatahasil3 <= 20)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "C" && ($inputdatahasil3 >= 20 & $inputdatahasil3 <= 25)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "A" && $inputdatahasil3 > 15) {
                $statusnya[$number] = "Tinggi";
            }
            if ($tipe == "B" && $inputdatahasil3 > 20) {
                $statusnya[$number] = "Tinggi";
            }
            if ($tipe == "C" && $inputdatahasil3 > 25) {
                $statusnya[$number] = "Tinggi";
            }

            $querycek3 = "SELECT * from limabulanan WHERE siklus= '5bulan3' && id_pelanggan = {$row['id_pelanggan']}";
            $resultcek3 = mysqli_query($con, $querycek3);

            if (mysqli_num_rows($resultcek3) > 0) {
                echo " Bulan 3 sudah ada <br>";
            }
            else {
                echo " Bulan 3 belum ada <br>";
                $query = "INSERT INTO limabulanan (`id_pelanggan`,`bulan`,`tahun`,`total`,`siklus`,`statusnya`)
                            VALUES ('{$row['id_pelanggan']}','{$bulanke[3]}','{$tahun_sekarang}','$inputdatahasil3}','5bulan3','{$statusnya[$number]}')";
                mysqli_query($con, $query);//*/
            }
            //endbulan3

            //bulan4
            if ($tipe == "A" && $inputdatahasil4 < 10) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "B" && $inputdatahasil4 < 15) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "C" && $inputdatahasil4 < 20) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "A" && ($inputdatahasil4 >= 10 & $inputdatahasil4 <= 15)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "B" && ($inputdatahasil4 >= 15 & $inputdatahasil4 <= 20)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "C" && ($inputdatahasil4 >= 20 & $inputdatahasil4 <= 25)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "A" && $inputdatahasil4 > 15) {
                $statusnya[$number] = "Tinggi";
            }
            if ($tipe == "B" && $inputdatahasil4 > 20) {
                $statusnya[$number] = "Tinggi";
            }
            if ($tipe == "C" && $inputdatahasil4 > 25) {
                $statusnya[$number] = "Tinggi";
            }

            $querycek4 = "SELECT * from limabulanan WHERE siklus= '5bulan4' && id_pelanggan = {$row['id_pelanggan']}";
            $resultcek4 = mysqli_query($con, $querycek4);

            if (mysqli_num_rows($resultcek4) > 0) {
                echo " Bulan 4 sudah ada <br>";
            }
            else {
                echo " Bulan 4 belum ada <br>";
                $query = "INSERT INTO limabulanan (`id_pelanggan`,`bulan`,`tahun`,`total`,`siklus`,`statusnya`)
                            VALUES ('{$row['id_pelanggan']}','{$bulanke[4]}','{$tahun_sekarang}','$inputdatahasil4}','5bulan4','{$statusnya[$number]}')";
                mysqli_query($con, $query);//*/
            }
            //endbulan4

            //bulan5
            if ($tipe == "A" && $inputdatahasil5 < 10) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "B" && $inputdatahasil5 < 15) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "C" && $inputdatahasil5 < 20) {
                $statusnya[$number] = "Rendah";
            }
            if ($tipe == "A" && ($inputdatahasil5 >= 10 & $inputdatahasil5 <= 15)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "B" && ($inputdatahasil5 >= 15 & $inputdatahasil5 <= 20)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "C" && ($inputdatahasil5 >= 20 & $inputdatahasil5 <= 25)) {
                $statusnya[$number] = "Sedang";
            }
            if ($tipe == "A" && $inputdatahasil5 > 15) {
                $statusnya[$number] = "Tinggi";
            }
            if ($tipe == "B" && $inputdatahasil5 > 20) {
                $statusnya[$number] = "Tinggi";
            }
            if ($tipe == "C" && $inputdatahasil5 > 25) {
                $statusnya[$number] = "Tinggi";
            }

            $querycek5 = "SELECT * from limabulanan WHERE siklus= '5bulan5' && id_pelanggan = {$row['id_pelanggan']}";
            $resultcek5 = mysqli_query($con, $querycek5);

            if (mysqli_num_rows($resultcek5) > 0) {
                echo " Bulan 5 sudah ada <br>";
            }
            else {
                echo " Bulan 5 belum ada <br>";
                $query = "INSERT INTO limabulanan (`id_pelanggan`,`bulan`,`tahun`,`total`,`siklus`,`statusnya`)
                            VALUES ('{$row['id_pelanggan']}','{$bulanke[5]}','{$tahun_sekarang}','$inputdatahasil5}','5bulan5','{$statusnya[$number]}')";
                mysqli_query($con, $query);//*/
            }
            //endbulan5
                        endwhile;
                        echo"
                       </tbody>
                    </table>
                </div>
            </div>";

?>
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