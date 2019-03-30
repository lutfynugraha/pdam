<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">    
        <div class="row">
            <div class="col-lg-12">
                <section class="content-header"><center><h4></h4></center></section>
                </div>
            </div>
            <hr class="style-four">
        <div class="row">
            <div class="col-xs-12">
            <center>Data Training</center>
                <table class="table" border="1" style="border-color: #ccc">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Nama</th>
                            <th rowspan="2">JK</th>
                            <th rowspan="2">Tipe Rumah</th>
                            <th rowspan="2">Jumlah Keluarga</th>
                            <th rowspan="2">Jumlah Kendaraan</th>
                            <th colspan="5">Penggunaan Air / Meter Kubik</th>
                            <th rowspan="2">Status Penggunaan</th>
                        </tr>
                        <tr>
                            <th>Bulan 1</th>
                            <th>Bulan 2</th>
                            <th>Bulan 3</th>
                            <th>Bulan 4</th>
                            <th>Bulan 5</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                    <?php
                    $query = "SELECT * FROM `data_training` ORDER BY id";
                    $result = mysqli_query($con, $query);

                    $number = 1;
                    while($row = mysqli_fetch_assoc($result)):

                        echo "<tr>";
                        echo "<td>{$number}</td>";
                        echo "<td>{$row['nama']}</td>";
                        echo "<td>{$row['jk']}</td>";
                        echo "<td>{$row['tipe_rumah']}</td>";
                        echo "<td>{$row['jml_anggota_keluarga']}</td>";
                        echo "<td>{$row['jml_kendaraan']}</td>";
                        echo "<td>{$row['bulan1']}</td>";
                        echo "<td>{$row['bulan2']}</td>";
                        echo "<td>{$row['bulan3']}</td>";
                        echo "<td>{$row['bulan4']}</td>";
                        echo "<td>{$row['bulan5']}</td>";
                        echo "<td>{$row['status_penggunaan']}</td>";

                        echo "</tr>";
                        $number+=1;
                    endwhile;
                    ?>
                   </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-4">
            <center>Bulan 1</center>
                <table class="table" border="1" style="border-color: #ccc">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Rendah</th>
                            <th>Sedang</th>
                            <th>Tinggi</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                    <?php
                    $query = "SELECT bulan1, status_penggunaan FROM `data_training` where status_penggunaan = 'Rendah' OR status_penggunaan = 'Sedang' OR status_penggunaan = 'Tinggi'  ORDER BY id";
                    $result = mysqli_query($con, $query);

                    $number = 1;
                    while($row = mysqli_fetch_assoc($result)):

                        echo "<tr>";
                        echo "<td>{$number}</td>";

                        echo "<td>";
                        if ($row['status_penggunaan'] == 'Rendah') {
                            echo "{$row['bulan1']}";
                        }
                        echo "</td>";
                        echo "<td>";
                        if ($row['status_penggunaan'] == 'Sedang') {
                            echo "{$row['bulan1']}";
                        }
                        echo "</td>";
                         echo "<td>";
                        if ($row['status_penggunaan'] == 'Tinggi') {
                            echo "{$row['bulan1']}";
                        }
                        echo "</td>";

                        echo "</tr>";
                        $number+=1;
                    endwhile;
                    ?>
                    <?php
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

                    echo "
                    <tr>
                        <td>Mean</td>
                        <td>$meanbulan1rendah</td>
                        <td>$meanbulan1sedang</td>
                        <td>$meanbulan1tinggi</td>
                    </tr>
                    <tr>
                        <td>St.Deviasi</td>
                        <td>$stdbulan1rendah</td>
                        <td>$stdbulan1sedang</td>
                        <td>$stdbulan1tinggi</td>
                    </tr>";
                    ?>
                   </tbody>
                </table>
            </div>
            <div class="col-xs-4">
            <center>Bulan 2</center>
                <table class="table" border="1" style="border-color: #ccc">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Rendah</th>
                            <th>Sedang</th>
                            <th>Tinggi</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                    <?php
                    $query = "SELECT bulan2, status_penggunaan FROM `data_training` where status_penggunaan = 'Rendah' OR status_penggunaan = 'Sedang' OR status_penggunaan = 'Tinggi'  ORDER BY id";
                    $result = mysqli_query($con, $query);

                    $number = 1;
                    while($row = mysqli_fetch_assoc($result)):

                        echo "<tr>";
                        echo "<td>{$number}</td>";

                        echo "<td>";
                        if ($row['status_penggunaan'] == 'Rendah') {
                            echo "{$row['bulan2']}";
                        }
                        echo "</td>";
                        echo "<td>";
                        if ($row['status_penggunaan'] == 'Sedang') {
                            echo "{$row['bulan2']}";
                        }
                        echo "</td>";
                         echo "<td>";
                        if ($row['status_penggunaan'] == 'Tinggi') {
                            echo "{$row['bulan2']}";
                        }
                        echo "</td>";

                        echo "</tr>";
                        $number+=1;
                    endwhile;
                    ?>
                    <?php
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

                    echo "
                    <tr>
                        <td>Mean</td>
                        <td>$meanbulan2rendah</td>
                        <td>$meanbulan2sedang</td>
                        <td>$meanbulan2tinggi</td>
                    </tr>
                    <tr>
                        <td>St.Deviasi</td>
                        <td>$stdbulan2rendah</td>
                        <td>$stdbulan2sedang</td>
                        <td>$stdbulan2tinggi</td>
                    </tr>";
                    ?>
                   </tbody>
                </table>
            </div>
            <div class="col-xs-4">
            <center>Bulan 3</center>
                <table class="table" border="1" style="border-color: #ccc">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Rendah</th>
                            <th>Sedang</th>
                            <th>Tinggi</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                    <?php
                    $query = "SELECT bulan3, status_penggunaan FROM `data_training` where status_penggunaan = 'Rendah' OR status_penggunaan = 'Sedang' OR status_penggunaan = 'Tinggi'  ORDER BY id";
                    $result = mysqli_query($con, $query);

                    $number = 1;
                    while($row = mysqli_fetch_assoc($result)):

                        echo "<tr>";
                        echo "<td>{$number}</td>";

                        echo "<td>";
                        if ($row['status_penggunaan'] == 'Rendah') {
                            echo "{$row['bulan3']}";
                        }
                        echo "</td>";
                        echo "<td>";
                        if ($row['status_penggunaan'] == 'Sedang') {
                            echo "{$row['bulan3']}";
                        }
                        echo "</td>";
                         echo "<td>";
                        if ($row['status_penggunaan'] == 'Tinggi') {
                            echo "{$row['bulan3']}";
                        }
                        echo "</td>";

                        echo "</tr>";
                        $number+=1;
                    endwhile;
                    ?>
                    <?php
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

                    echo "
                    <tr>
                        <td>Mean</td>
                        <td>$meanbulan3rendah</td>
                        <td>$meanbulan3sedang</td>
                        <td>$meanbulan3tinggi</td>
                    </tr>
                    <tr>
                        <td>St.Deviasi</td>
                        <td>$stdbulan3rendah</td>
                        <td>$stdbulan3sedang</td>
                        <td>$stdbulan3tinggi</td>
                    </tr>";
                    ?>
                   </tbody>
                </table>
            </div>
            <div class="col-xs-4">
            <center>Bulan 4</center>
                <table class="table" border="1" style="border-color: #ccc">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Rendah</th>
                            <th>Sedang</th>
                            <th>Tinggi</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                    <?php
                    $query = "SELECT bulan4, status_penggunaan FROM `data_training` where status_penggunaan = 'Rendah' OR status_penggunaan = 'Sedang' OR status_penggunaan = 'Tinggi'  ORDER BY id";
                    $result = mysqli_query($con, $query);

                    $number = 1;
                    while($row = mysqli_fetch_assoc($result)):

                        echo "<tr>";
                        echo "<td>{$number}</td>";

                        echo "<td>";
                        if ($row['status_penggunaan'] == 'Rendah') {
                            echo "{$row['bulan4']}";
                        }
                        echo "</td>";
                        echo "<td>";
                        if ($row['status_penggunaan'] == 'Sedang') {
                            echo "{$row['bulan4']}";
                        }
                        echo "</td>";
                         echo "<td>";
                        if ($row['status_penggunaan'] == 'Tinggi') {
                            echo "{$row['bulan4']}";
                        }
                        echo "</td>";

                        echo "</tr>";
                        $number+=1;
                    endwhile;
                    ?>
                    <?php
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

                    echo "
                    <tr>
                        <td>Mean</td>
                        <td>$meanbulan4rendah</td>
                        <td>$meanbulan4sedang</td>
                        <td>$meanbulan4tinggi</td>
                    </tr>
                    <tr>
                        <td>St.Deviasi</td>
                        <td>$stdbulan4rendah</td>
                        <td>$stdbulan4sedang</td>
                        <td>$stdbulan4tinggi</td>
                    </tr>";
                    ?>
                   </tbody>
                </table>
            </div>
            <div class="col-xs-4">
            <center>Bulan 5</center>
                <table class="table" border="1" style="border-color: #ccc">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Rendah</th>
                            <th>Sedang</th>
                            <th>Tinggi</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                    <?php
                    $query = "SELECT bulan5, status_penggunaan FROM `data_training` where status_penggunaan = 'Rendah' OR status_penggunaan = 'Sedang' OR status_penggunaan = 'Tinggi'  ORDER BY id";
                    $result = mysqli_query($con, $query);

                    $number = 1;
                    while($row = mysqli_fetch_assoc($result)):

                        echo "<tr>";
                        echo "<td>{$number}</td>";

                        echo "<td>";
                        if ($row['status_penggunaan'] == 'Rendah') {
                            echo "{$row['bulan5']}";
                        }
                        echo "</td>";
                        echo "<td>";
                        if ($row['status_penggunaan'] == 'Sedang') {
                            echo "{$row['bulan5']}";
                        }
                        echo "</td>";
                         echo "<td>";
                        if ($row['status_penggunaan'] == 'Tinggi') {
                            echo "{$row['bulan5']}";
                        }
                        echo "</td>";

                        echo "</tr>";
                        $number+=1;
                    endwhile;
                    ?>
                    <?php
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

                    echo "
                    <tr>
                        <td>Mean</td>
                        <td>$meanbulan5rendah</td>
                        <td>$meanbulan5sedang</td>
                        <td>$meanbulan5tinggi</td>
                    </tr>
                    <tr>
                        <td>St.Deviasi</td>
                        <td>$stdbulan5rendah</td>
                        <td>$stdbulan5sedang</td>
                        <td>$stdbulan5tinggi</td>
                    </tr>";
                    ?>
                   </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <center>Probabilitas Kendaraan</center>
            <?php

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
            
            ?>
                <table class="table" border="1" style="border-color: #ccc">
                    <thead>
                        <tr>
                            <th rowspan="2"></th>
                            <th colspan="3">Jumlah Kejadian "Penggunaan Air"</th>
                            <th colspan="3">Probailitas</th>
                        </tr>
                        <tr>
                            <th>rendah</th>
                            <th>Sedang</th>
                            <th>Tinggi</th>
                            <th>rendah</th>
                            <th>Sedang</th>
                            <th>Tinggi</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                        <tr>
                            <td>Sedikit</td>
                            <td><?php echo $jmlkendaraansedikit_rendah; ?></td>
                            <td><?php echo $jmlkendaraansedikit_sedang; ?></td>
                            <td><?php echo $jmlkendaraansedikit_tinggi; ?></td>
                            <td><?php echo $jmlkendaraansedikit_rendah."/".$jmlprobabilitaskendaraan_rendah." = ".$probabilitasrendahsedikit;?></td>
                            <td><?php echo $jmlkendaraansedikit_sedang."/".$jmlprobabilitaskendaraan_sedang." = ".$probabilitasrendahsedang;?></td>
                            <td><?php echo $jmlkendaraansedikit_tinggi."/".$jmlprobabilitaskendaraan_tinggi." = ".$probabilitasrendahbanyak;?></td>
                        </tr>
                         <tr>
                            <td>Sedang</td>
                            <td><?php echo $jmlkendaraansedang_rendah; ?></td>
                            <td><?php echo $jmlkendaraansedang_sedang; ?></td>
                            <td><?php echo $jmlkendaraansedang_tinggi; ?></td>
                            <td><?php echo $jmlkendaraansedang_rendah."/".$jmlprobabilitaskendaraan_rendah." = ".$probabilitassedangsedikit;?></td>
                            <td><?php echo $jmlkendaraansedang_sedang."/".$jmlprobabilitaskendaraan_sedang." = ".$probabilitassedangsedang;?></td>
                            <td><?php echo $jmlkendaraansedang_tinggi."/".$jmlprobabilitaskendaraan_tinggi." = ".$probabilitassedangbanyak;?></td>
                        </tr>
                        <tr>
                            <td>Banyak</td>
                            <td><?php echo $jmlkendaraanbanyak_rendah; ?></td>
                            <td><?php echo $jmlkendaraanbanyak_sedang; ?></td>
                            <td><?php echo $jmlkendaraanbanyak_tinggi; ?></td>
                            <td><?php echo $jmlkendaraanbanyak_rendah."/".$jmlprobabilitaskendaraan_rendah." = ".$probabilitastinggisedikit;?></td>
                            <td><?php echo $jmlkendaraanbanyak_sedang."/".$jmlprobabilitaskendaraan_sedang." = ".$probabilitastinggisedang;?></td>
                            <td><?php echo $jmlkendaraanbanyak_tinggi."/".$jmlprobabilitaskendaraan_tinggi." = ".$probabilitastinggibanyak;?></td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <th><?php echo $jmlprobabilitaskendaraan_rendah; ?></th>
                            <th><?php echo $jmlprobabilitaskendaraan_sedang; ?></th>
                            <th><?php echo $jmlprobabilitaskendaraan_tinggi; ?></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                   </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <center>Probabilitas Tipe Rumah</center>
            <?php

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
            
            ?>
                <table class="table" border="1" style="border-color: #ccc">
                    <thead>
                        <tr>
                            <th rowspan="2"></th>
                            <th colspan="3">Jumlah Kejadian "Penggunaan Air"</th>
                            <th colspan="3">Probailitas</th>
                        </tr>
                        <tr>
                            <th>rendah</th>
                            <th>Sedang</th>
                            <th>Tinggi</th>
                            <th>rendah</th>
                            <th>Sedang</th>
                            <th>Tinggi</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                        <tr>
                            <td>Kecil</td>
                            <td><?php echo $jmlrumahkecil_rendah; ?></td>
                            <td><?php echo $jmlrumahkecil_Sedang; ?></td>
                            <td><?php echo $jmlrumahkecil_tinggi; ?></td>
                            <td><?php echo $jmlrumahkecil_rendah."/".$jmlprobabilitasrumah_rendah." = ".$probabilitasrendahKecil;?></td>
                            <td><?php echo $jmlrumahkecil_Sedang."/".$jmlprobabilitasrumah_Sedang." = ".$probabilitasrendahStandar;?></td>
                            <td><?php echo $jmlrumahkecil_tinggi."/".$jmlprobabilitasrumah_tinggi." = ".$probabilitasrendahBesar;?></td>
                        </tr>
                         <tr>
                            <td>Standar</td>
                            <td><?php echo $jmlrumahstandar_rendah; ?></td>
                            <td><?php echo $jmlrumahstandar_Sedang; ?></td>
                            <td><?php echo $jmlrumahstandar_tinggi; ?></td>
                            <td><?php echo $jmlrumahstandar_rendah."/".$jmlprobabilitasrumah_rendah." = ".$probabilitasSedangKecil;?></td>
                            <td><?php echo $jmlrumahstandar_Sedang."/".$jmlprobabilitasrumah_Sedang." = ".$probabilitasSedangStandar;?></td>
                            <td><?php echo $jmlrumahstandar_tinggi."/".$jmlprobabilitasrumah_tinggi." = ".$probabilitasSedangBesar;?></td>
                        </tr>
                        <tr>
                            <td>Besar</td>
                            <td><?php echo $jmlrumahbesar_rendah; ?></td>
                            <td><?php echo $jmlrumahbesar_sedang; ?></td>
                            <td><?php echo $jmlrumahbesar_tinggi; ?></td>
                            <td><?php echo $jmlrumahbesar_rendah."/".$jmlprobabilitasrumah_rendah." = ".$probabilitastinggiKecil;?></td>
                            <td><?php echo $jmlrumahbesar_sedang."/".$jmlprobabilitasrumah_Sedang." = ".$probabilitastinggiStandar;?></td>
                            <td><?php echo $jmlrumahbesar_tinggi."/".$jmlprobabilitasrumah_tinggi." = ".$probabilitastinggiBesar;?></td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <th><?php echo $jmlprobabilitasrumah_rendah; ?></th>
                            <th><?php echo $jmlprobabilitasrumah_Sedang; ?></th>
                            <th><?php echo $jmlprobabilitasrumah_tinggi; ?></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                   </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <center>Probabilitas Debit Air</center>
            <?php

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
            
            ?>
                <table class="table" border="1" style="border-color: #ccc">
                    <thead>
                        <tr>
                            <th rowspan="2">No</th>
                            <th colspan="3">Jumlah Kejadian "Penggunaan Air"</th>
                            <th colspan="3">Probailitas</th>
                        </tr>
                        <tr>
                            <th>rendah</th>
                            <th>Sedang</th>
                            <th>Tinggi</th>
                            <th>rendah</th>
                            <th>Sedang</th>
                            <th>Tinggi</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                        <tr>
                            <td>1</td>
                            <td><?php echo $jmlrendah; ?></td>
                            <td><?php echo $jmlsedang; ?></td>
                            <td><?php echo $jmltinggi; ?></td>
                            <td><?php echo $jmlrendah."/".$jmltotaldata." = ".$probabilitasrendah;?></td>
                            <td><?php echo $jmlsedang."/".$jmltotaldata." = ".$probabilitasSedang;?></td>
                            <td><?php echo $jmltinggi."/".$jmltotaldata." = ".$probabilitastingg;?></td>
                        </tr>
                   </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <center>Probabilitas Jumlah Anggota Keluarga</center>
            <?php

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
            
            ?>
                <table class="table" border="1" style="border-color: #ccc">
                    <thead>
                        <tr>
                            <th rowspan="2"></th>
                            <th colspan="3">Jumlah Kejadian "Penggunaan Air"</th>
                            <th colspan="3">Probailitas</th>
                        </tr>
                        <tr>
                            <th>rendah</th>
                            <th>Sedang</th>
                            <th>Tinggi</th>
                            <th>rendah</th>
                            <th>Sedang</th>
                            <th>Tinggi</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                        <tr>
                            <td>Sedikit</td>
                            <td><?php echo $jmlkeluargasedikit_rendah; ?></td>
                            <td><?php echo $jmlkeluargasedikit_Sedang; ?></td>
                            <td><?php echo $jmlkeluargasedikit_tinggi; ?></td>
                            <td><?php echo $jmlkeluargasedikit_rendah."/".$jmlprobabilitaskeluarga_rendah." = ".$probabilitasrendahSedikit;?></td>
                            <td><?php echo $jmlkeluargasedikit_Sedang."/".$jmlprobabilitaskeluarga_Sedang." = ".$probabilitasrendahSedang;?></td>
                            <td><?php echo $jmlkeluargasedikit_tinggi."/".$jmlprobabilitaskeluarga_tinggi." = ".$probabilitasrendahBanyak;?></td>
                        </tr>
                         <tr>
                            <td>Sedang</td>
                            <td><?php echo $jmlkeluargasedang_rendah; ?></td>
                            <td><?php echo $jmlkeluargasedang_Sedang; ?></td>
                            <td><?php echo $jmlkeluargasedang_tinggi; ?></td>
                            <td><?php echo $jmlkeluargasedang_rendah."/".$jmlprobabilitaskeluarga_rendah." = ".$probabilitasSedangSedikit;?></td>
                            <td><?php echo $jmlkeluargasedang_Sedang."/".$jmlprobabilitaskeluarga_Sedang." = ".$probabilitasSedangSedang;?></td>
                            <td><?php echo $jmlkeluargasedang_tinggi."/".$jmlprobabilitaskeluarga_tinggi." = ".$probabilitasSedangBanyak;?></td>
                        </tr>
                        <tr>
                            <td>Banyak</td>
                            <td><?php echo $jmlkeluargabanyak_rendah; ?></td>
                            <td><?php echo $jmlkeluargabanyak_sedang; ?></td>
                            <td><?php echo $jmlkeluargabanyak_tinggi; ?></td>
                            <td><?php echo $jmlkeluargabanyak_rendah."/".$jmlprobabilitaskeluarga_rendah." = ".$probabilitastinggiSedikit;?></td>
                            <td><?php echo $jmlkeluargabanyak_sedang."/".$jmlprobabilitaskeluarga_Sedang." = ".$probabilitastinggiSedang;?></td>
                            <td><?php echo $jmlkeluargabanyak_tinggi."/".$jmlprobabilitaskeluarga_tinggi." = ".$probabilitastinggiBanyak;?></td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                            <th><?php echo $jmlprobabilitaskeluarga_rendah; ?></th>
                            <th><?php echo $jmlprobabilitaskeluarga_Sedang; ?></th>
                            <th><?php echo $jmlprobabilitaskeluarga_tinggi; ?></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                   </tbody>
                </table>
            </div>
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