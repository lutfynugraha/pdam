<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">    
        <div class="row">
            <div class="col-lg-6">
                <section class="content-header"><h4>Pelanggan</h4></section>
                <a href="?menu=custompelanggan" type="button" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-plus"></span>
                Pelanggan
                </a>
                </div>
            </div>
            <hr class="style-four">
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>JK</th>
                            <th>Tipe Rumah</th>
                            <th>Jumlah Anggota Keluarga</th>
                            <th>Jumlah Kendaraan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                    <?php
                    $query = "SELECT * FROM pelanggan ORDER BY id_pelanggan ASC";
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

                        echo "<tr>";
                        echo "<td>{$number}</td>";
                        echo "<td>{$row['id_pelanggan']}</td>";
                        echo "<td>{$row['nama']}</td>";
                        echo "<td>{$row['jk']}</td>";
                        echo "<td>$rumah</td>";
                        echo "<td>$jml_ak</td>";
                        echo "<td>$jml_ken</td>";

                        echo "<td>";
                        if ($row['status'] == 1){
                            echo"<span class='label label-primary' style='padding: 7px;'>Aktif</span>";
                        }
                        else
                        {
                            echo"<span class='label label-warning' style='padding: 7px;'>Non-Aktif</span>";
                        }
     
                        echo"</td>";
                        echo "<td>
                              <a href='?menu=custompelanggan&id_p={$row['id_pelanggan']}' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-pencil'></span></a>
                              </td>";
                        echo "</tr>";
                        $number+=1;
                    endwhile;
                    ?>
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