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
                <div class="col-lg-3 pull-right">
                    <div class="input-group pull-right"> 
                        <input id="filter" type="text" class="form-control" placeholder="Type here...">
                        <span class="input-group-addon">Search</span>
                    </div>
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
                            <th>Alamat</th>
                            <th>Tipe</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="searchable">
                    <?php
                    $id_pelanggan = '';
                    if(isset($_GET['id_p'])){
                    $id_pelanggan = $_GET['id_p'];  
                    }
                    $query = "SELECT * FROM pelanggan ORDER BY id_pelanggan DESC";
                    $result = mysqli_query($con, $query);

                    $number = 1;
                    while($row = mysqli_fetch_assoc($result)):
                        echo "<tr>";
                        echo "<td>{$number}</td>";
                        echo "<td><a href='?menu=klasifikasipengguna&id_p={$row['id_pelanggan']}' class='btn btn-success btn-sm'>{$row['id_pelanggan']}</a></td>";
                        echo "<td>{$row['nama']}</td>";
                        echo "<td>{$row['jk']}</td>";
                        echo "<td>{$row['alamat']}</td>";
                        echo "<td>{$row['tipe']}</td>";
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