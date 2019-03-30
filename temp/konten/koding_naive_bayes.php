<?php
//proses naive bayes

$tp_rumah= $_GET['tp_rumah'];
$jml_ak= $_GET['jml_ak'];
$jml_ken= $_GET['jml_ken'];
$nilaibulan1= $_GET['bulan1'];
$nilaibulan2= $_GET['bulan2'];
$nilaibulan3= $_GET['bulan3'];
$nilaibulan4= $_GET['bulan4'];
$nilaibulan5= $_GET['bulan5'];

$stts_pemakain1 = "Rendah"; 
$stts_pemakain2 = "Sedang"; 
$stts_pemakain3 = "Tinggi";

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

                    ?>

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

							<?php  $nilaibulan1; ?>
							<?php  $meanbulan1rendah; ?>
							<?php  $stdbulan1rendah; ?>
							<?php  $phinilai2 = 2.505*$stdbulan1rendah; ?>
							<?php  $satuphinilai = 1/$phinilai2; ?>
							<?php $pangkateatas = $nilaibulan1 - $meanbulan1rendah;  pow($pangkateatas,2); ?>
							<?php $pangkatebawah = 2*pow($stdbulan1rendah,2);  $pangkatebawah; ?>
							<?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
							<?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
							<?php $hasilrendahbulan1 = $satuphinilai*$satuepangkat;  $hasilrendahbulan1; ?>

							                        
							<?php  $nilaibulan1; ?>
							<?php  $meanbulan1sedang; ?>
							<?php  $stdbulan1sedang; ?><
							<?php  $phinilai2 = 2.505*$stdbulan1sedang; ?>
							<?php  $satuphinilai = 1/$phinilai2; ?>
							<?php $pangkateatas = $nilaibulan1 - $meanbulan1sedang;  pow($pangkateatas,2); ?>
							<?php $pangkatebawah = 2*pow($stdbulan1sedang,2);  $pangkatebawah; ?>
							<?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
							<?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
							<?php $hasilsedangbulan1 = $satuphinilai*$satuepangkat;  $hasilsedangbulan1; ?>

							                            
							<?php  $nilaibulan1; ?>
							<?php  $meanbulan1tinggi; ?>
							<?php  $stdbulan1tinggi; ?>
							<?php  $phinilai2 = 2.505*$stdbulan1tinggi; ?>
							<?php  $satuphinilai = 1/$phinilai2; ?>
							<?php $pangkateatas = $nilaibulan1 - $meanbulan1tinggi;  pow($pangkateatas,2); ?>
							<?php $pangkatebawah = 2*pow($stdbulan1tinggi,2);  $pangkatebawah; ?>
							<?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
							<?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
							<?php $hasiltinggibulan1 = $satuphinilai*$satuepangkat;  $hasiltinggibulan1; ?>


                            <?php  $nilaibulan2; ?>
                            <?php  $meanbulan2rendah; ?>
                            <?php  $stdbulan2rendah; ?>
                            <?php  $phinilai2 = 2.505*$stdbulan2rendah; ?>
                            <?php  $satuphinilai = 1/$phinilai2; ?>
                            <?php $pangkateatas = $nilaibulan2 - $meanbulan2rendah;  pow($pangkateatas,2); ?>
                            <?php $pangkatebawah = 2*pow($stdbulan2rendah,2);  $pangkatebawah; ?>
                            <?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
                            <?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
                            <?php $hasilrendahbulan2 = $satuphinilai*$satuepangkat;  $hasilrendahbulan2; ?>
                        
                        
                            <?php  $nilaibulan2; ?>
                            <?php  $meanbulan2sedang; ?>
                            <?php  $stdbulan2sedang; ?>
                            <?php  $phinilai2 = 2.505*$stdbulan2sedang; ?>
                            <?php  $satuphinilai = 1/$phinilai2; ?>
                            <?php $pangkateatas = $nilaibulan2 - $meanbulan2sedang;  pow($pangkateatas,2); ?>
                            <?php $pangkatebawah = 2*pow($stdbulan2sedang,2);  $pangkatebawah; ?>
                            <?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
                            <?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
                            <?php $hasilsedangbulan2 = $satuphinilai*$satuepangkat;  $hasilsedangbulan2; ?>
                        
                        
                            <?php  $nilaibulan2; ?>
                            <?php  $meanbulan2tinggi; ?>
                            <?php  $stdbulan2tinggi; ?>
                            <?php  $phinilai2 = 2.505*$stdbulan2tinggi; ?>
                            <?php  $satuphinilai = 1/$phinilai2; ?>
                            <?php $pangkateatas = $nilaibulan2 - $meanbulan2tinggi;  pow($pangkateatas,2); ?>
                            <?php $pangkatebawah = 2*pow($stdbulan2tinggi,2);  $pangkatebawah; ?>
                            <?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
                            <?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
                            <?php $hasiltinggibulan2 = $satuphinilai*$satuepangkat;  $hasiltinggibulan2; ?>
                        
            
                            <?php  $nilaibulan3; ?>
                            <?php  $meanbulan3rendah; ?>
                            <?php  $stdbulan3rendah; ?>
                            <?php  $phinilai2 = 2.505*$stdbulan3rendah; ?>
                            <?php  $satuphinilai = 1/$phinilai2; ?>
                            <?php $pangkateatas = $nilaibulan3 - $meanbulan3rendah;  pow($pangkateatas,2); ?>
                            <?php $pangkatebawah = 2*pow($stdbulan3rendah,2);  $pangkatebawah; ?>
                            <?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
                            <?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
                            <?php $hasilrendahbulan3 = $satuphinilai*$satuepangkat;  $hasilrendahbulan3; ?>
                        
                        
                            <?php  $nilaibulan3; ?>
                            <?php  $meanbulan3sedang; ?>
                            <?php  $stdbulan3sedang; ?>
                            <?php  $phinilai2 = 2.505*$stdbulan3sedang; ?>
                            <?php  $satuphinilai = 1/$phinilai2; ?>
                            <?php $pangkateatas = $nilaibulan3 - $meanbulan3sedang;  pow($pangkateatas,2); ?>
                            <?php $pangkatebawah = 2*pow($stdbulan3sedang,2);  $pangkatebawah; ?>
                            <?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
                            <?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
                            <?php $hasilsedangbulan3 = $satuphinilai*$satuepangkat;  $hasilsedangbulan3; ?>
                        
                        
                            <?php  $nilaibulan3; ?>
                            <?php  $meanbulan3tinggi; ?>
                            <?php  $stdbulan3tinggi; ?>
                            <?php  $phinilai2 = 2.505*$stdbulan3tinggi; ?>
                            <?php  $satuphinilai = 1/$phinilai2; ?>
                            <?php $pangkateatas = $nilaibulan3 - $meanbulan3tinggi;  pow($pangkateatas,2); ?>
                            <?php $pangkatebawah = 2*pow($stdbulan3tinggi,2);  $pangkatebawah; ?>
                            <?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
                            <?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
                            <?php $hasiltinggibulan3 = $satuphinilai*$satuepangkat;  $hasiltinggibulan3; ?>
                        

                            <?php  $nilaibulan4; ?>
                            <?php  $meanbulan4rendah; ?>
                            <?php  $stdbulan4rendah; ?>
                            <?php  $phinilai2 = 2.505*$stdbulan4rendah; ?>
                            <?php  $satuphinilai = 1/$phinilai2; ?>
                            <?php $pangkateatas = $nilaibulan4 - $meanbulan4rendah;  pow($pangkateatas,2); ?>
                            <?php $pangkatebawah = 2*pow($stdbulan4rendah,2);  $pangkatebawah; ?>
                            <?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
                            <?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
                            <?php $hasilrendahbulan4 = $satuphinilai*$satuepangkat;  $hasilrendahbulan4; ?>
                        
                        
                            <?php  $nilaibulan4; ?>
                            <?php  $meanbulan4sedang; ?>
                            <?php  $stdbulan4sedang; ?>
                            <?php  $phinilai2 = 2.505*$stdbulan4sedang; ?>
                            <?php  $satuphinilai = 1/$phinilai2; ?>
                            <?php $pangkateatas = $nilaibulan4 - $meanbulan4sedang;  pow($pangkateatas,2); ?>
                            <?php $pangkatebawah = 2*pow($stdbulan4sedang,2);  $pangkatebawah; ?>
                            <?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
                            <?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
                            <?php $hasilsedangbulan4 = $satuphinilai*$satuepangkat;  $hasilsedangbulan4; ?>
                        

                            <?php  $nilaibulan4; ?>
                            <?php  $meanbulan4tinggi; ?>
                            <?php  $stdbulan4tinggi; ?>
                            <?php  $phinilai2 = 2.505*$stdbulan4tinggi; ?>
                            <?php  $satuphinilai = 1/$phinilai2; ?>
                            <?php $pangkateatas = $nilaibulan4 - $meanbulan4tinggi;  pow($pangkateatas,2); ?>
                            <?php $pangkatebawah = 2*pow($stdbulan4tinggi,2);  $pangkatebawah; ?>
                            <?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
                            <?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
                            <?php $hasiltinggibulan4 = $satuphinilai*$satuepangkat;  $hasiltinggibulan4; ?>
                        
            
                            <?php  $nilaibulan5; ?>
                            <?php  $meanbulan5rendah; ?>
                            <?php  $stdbulan5rendah; ?>
                            <?php  $phinilai2 = 2.505*$stdbulan5rendah; ?>
                            <?php  $satuphinilai = 1/$phinilai2; ?>
                            <?php $pangkateatas = $nilaibulan5 - $meanbulan5rendah;  pow($pangkateatas,2); ?>
                            <?php $pangkatebawah = 2*pow($stdbulan5rendah,2);  $pangkatebawah; ?>
                            <?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
                            <?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
                            <?php $hasilrendahbulan5 = $satuphinilai*$satuepangkat;  $hasilrendahbulan5; ?>
                        
                        
                            <?php  $nilaibulan5; ?>
                            <?php  $meanbulan5sedang; ?>
                            <?php  $stdbulan5sedang; ?>
                            <?php  $phinilai2 = 2.505*$stdbulan5sedang; ?>
                            <?php  $satuphinilai = 1/$phinilai2; ?>
                            <?php $pangkateatas = $nilaibulan5 - $meanbulan5sedang;  pow($pangkateatas,2); ?>
                            <?php $pangkatebawah = 2*pow($stdbulan5sedang,2);  $pangkatebawah; ?>
                            <?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
                            <?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
                            <?php $hasilsedangbulan5 = $satuphinilai*$satuepangkat;  $hasilsedangbulan5; ?>
                        

                            <?php  $nilaibulan5; ?>
                            <?php  $meanbulan5tinggi; ?>
                            <?php  $stdbulan5tinggi; ?>
                            <?php  $phinilai2 = 2.505*$stdbulan5tinggi; ?>
                            <?php  $satuphinilai = 1/$phinilai2; ?>
                            <?php $pangkateatas = $nilaibulan5 - $meanbulan5tinggi;  pow($pangkateatas,2); ?>
                            <?php $pangkatebawah = 2*pow($stdbulan5tinggi,2);  $pangkatebawah; ?>
                            <?php $hasilbagieab = pow($pangkateatas,2) / $pangkatebawah ;  $hasilbagieab; ?>
                            <?php $satuepangkat = 1/(exp($hasilbagieab));  $satuepangkat; ?>
                            <?php $hasiltinggibulan5 = $satuphinilai*$satuepangkat;  $hasiltinggibulan5; ?>
                        

                    <?php
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

            $jumlah3 = $jumlah3 = $hasiltinggibulan1*$hasiltinggibulan2*$hasiltinggibulan3*$hasiltinggibulan4*$hasiltinggibulan5*$jml_anggota_kel3 * $jml_kendaraan3 * $jml_tp_rumah3 * $probabilitastingg;
                    ?>
                    
                            <?php  $hasilrendahbulan1; ?>
                            <?php  $hasilrendahbulan2; ?>
                            <?php  $hasilrendahbulan3; ?>
                            <?php  $hasilrendahbulan4; ?>
                            <?php  $hasilrendahbulan5; ?>

                            <?php  $jml_anggota_kel1; ?>
                            <?php  $jml_kendaraan1; ?>
                            <?php  $jml_tp_rumah1; ?>
                            <?php  $probabilitasrendah; ?>

                            <?php  $jumlah1; ?>
                        
                        
                            <?php  $hasilsedangbulan1; ?>
                            <?php  $hasilsedangbulan2; ?>
                            <?php  $hasilsedangbulan3; ?>
                            <?php  $hasilsedangbulan4; ?>
                            <?php  $hasilsedangbulan5; ?>

                            <?php  $jml_anggota_kel2; ?>
                            <?php  $jml_kendaraan2; ?>
                            <?php  $jml_tp_rumah2; ?>
                            <?php  $probabilitasSedang; ?>

                            <?php  $jumlah2; ?>
                        
                        
                            <?php  $hasiltinggibulan1; ?>
                            <?php  $hasiltinggibulan2; ?>
                            <?php  $hasiltinggibulan3; ?>
                            <?php  $hasiltinggibulan4; ?>
                            <?php  $hasiltinggibulan5; ?>

                            <?php  $jml_anggota_kel3; ?>
                            <?php  $jml_kendaraan3; ?>
                            <?php  $jml_tp_rumah3; ?>
                            <?php  $probabilitastingg; ?>

                            <?php  $jumlah3; ?>
                        
                        
                            <?php  $jumlah4 = $jumlah1 + $jumlah2 + $jumlah3; ?>
                        
                   
                            <?php  $jumlah5[1] = $jumlah1 / $jumlah4 ; ?>
                            <?php  $jumlah5[2] = $jumlah2 / $jumlah4 ; ?>
                            <?php  $jumlah5[3] = $jumlah3 / $jumlah4 ; ?>
                        
                        
                            <?php  number_format($jumlah5[1],8)?>
                            <?php  number_format($jumlah5[2],8)?>
                            <?php  number_format($jumlah5[3],8)?>
                        
                        <?php
                        $keputusan = array($jumlah5[1],$jumlah5[2],$jumlah5[3]);
                        if (max($keputusan) == $jumlah5[1])
                        {
                            $status_penggunaan_nya = "Rendah";
                        }
                        elseif (max($keputusan) == $jumlah5[2])
                        {
                            $status_penggunaan_nya = "Sedang";
                        }
                        elseif (max($keputusan) == $jumlah5[3])
                        {
                            $status_penggunaan_nya = "Tinggi";
                        }
                        ?>
                        
<?php echo max($keputusan)." (".$status_penggunaan_nya.")"; ?>
                        
                    
