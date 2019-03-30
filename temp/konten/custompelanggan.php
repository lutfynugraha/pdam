<?php
    $id_pelanggan = '';
    if(isset($_GET['id_p']))
    {

    $id_pelanggan = $_GET['id_p'];  
    $query = "SELECT * FROM pelanggan where id_pelanggan= $id_pelanggan";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    $nama= $row['nama'];
    $jk= $row['jk'];
    $tipe= $row['tipe'];
    $jumlah_anggota_keluarga= $row['jumlah_anggota_keluarga'];
    $jumlah_kendaraan= $row['jumlah_kendaraan'];
    
    $status= $row['status'];

    }
    else
    {
        $hide = 1;
    }

    //############ADD############
    if(isset($_POST['add']))
    {
    $nm = $_POST['nama'];
    $jk = $_POST['jk'];
    $tp = $_POST['tipe'];
    $jumlah_anggota_keluarga = $_POST['jumlah_anggota_keluarga'];
    $jumlah_kendaraan= $_POST['jumlah_kendaraan'];
    $st = $_POST['status'];

    $query = "INSERT INTO pelanggan (`nama`,`jk`,`tipe`,`jumlah_anggota_keluarga`,`jumlah_kendaraan`,`status`) VALUES ('{$nm}','{$jk}','{$tp}','{$jumlah_anggota_keluarga}','{$jumlah_kendaraan}','{$st}');";
   
        $result = mysqli_query($con, $query);
        if($result)
        {
            header('Location: index.php?menu=pelanggan');
            exit();
        } 
    }
    
    //##############UPDATE###########
    if(isset($_POST['update']))
    {
    $id = $_POST['id_p'];
    $nm = $_POST['nama'];
    $jk = $_POST['jk'];
    $tp = $_POST['tipe'];
    $jumlah_anggota_keluarga = $_POST['jumlah_anggota_keluarga'];
    $jumlah_kendaraan= $_POST['jumlah_kendaraan'];
    $st = $_POST['status'];

    $query = "UPDATE pelanggan SET `nama` = '{$nm}',`jk` = '{$jk}',`tipe` = '{$tp}',`jumlah_anggota_keluarga` = '{$jumlah_anggota_keluarga}',`jumlah_kendaraan` = '{$jumlah_kendaraan}',`status` = '{$st}' WHERE id_pelanggan = {$id};";
    
    $result = mysqli_query($con, $query);
    if($result){
        header('Location: index.php?menu=pelanggan');
        exit();

    }
    
}

    ?>

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">    
        <div class="row">
            <div class="col-lg-6">
                <section class="content-header"><h4><?php if($hide == 1) echo "Tambah"; else echo "Ubah";?> Data Pelanggan <?php if($hide == 0) echo "Sdr/i";?> <?php echo $nama; ?></h4></section>
                <a href="?menu=pelanggan" type="button" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-chevron-left"></span>
                Kembali
                </a>
            </div>
        </div>
    <hr class="style-four">
        <div class="row">
            <div class="col-xs-6">
                <form class="form-horizontal" method="POST" action="">
                    <div class="form-group">
                        <label for="nama" class="col-sm-4 control-label">Nama</label>
                        <div class="col-sm-6">
                        <input type="text" name="id_p" value="<?php echo $id_pelanggan; ?>" hidden/>
                        <input type="text" class="form-control input-sm" id="nama" name="nama" value="<?php echo $nama; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jk" class="col-sm-4 control-label" >JK</label>
                        <div class="col-sm-6" >
                        <select id="jk" name="jk" class="form-control input-sm" >
                        <option selected="selected" disabled="disabled" >----Pilih Jenis Kelamin----</option>
                        <option value="L" <?php if($jk =='L') echo "selected"; ?> >Laki-Laki</option>
                        <option value="P" <?php if($jk =='P') echo "selected"; ?>>Perempuan</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tipe" class="col-sm-4 control-label">Tipe Rumah</label>
                        <div class="col-sm-6">
                        <select name="tipe" class="form-control input-sm">
                            <option selected="selected" disabled="disabled" >----Pilih Tipe Rumah----</option>
                            <option value="A" <?php if($tipe =='A') echo "selected"; ?> >Kecil</option>
                            <option value="B" <?php if($tipe =='B') echo "selected"; ?> >Standar</option>
                            <option value="C" <?php if($tipe =='C') echo "selected"; ?> >Besar</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_anggota_keluarga" class="col-sm-4 control-label">Jumlah Anggota Keluarga</label>
                        <div class="col-sm-6">
                        <input type="number"  name="jumlah_anggota_keluarga" class="form-control input-sm" value="<?php echo $jumlah_anggota_keluarga; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_kendaraan" class="col-sm-4 control-label">Jumlah Kendaraan</label>
                        <div class="col-sm-6">
                        <input type="number"  name="jumlah_kendaraan" class="form-control input-sm" value="<?php echo $jumlah_kendaraan; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-4">Status </label>
                        <div class="col-sm-6">
                        <select name="status" class="form-control input-sm">
                            <option value="1" <?php if($status =='1') echo "selected"; ?> >Aktif</option>
                            <option value="0" <?php if($status =='0') echo "selected"; ?> >Non-Aktif</option>
                        </select>
                        </div>
                    </div>  
                    <div class="form-group">
                        <center>
                        <?php 
                        if($hide == 0)
                        echo "
                        <button type='submit' name='update' class='btn btn-success btn-sm'>
                        <span class='glyphicon glyphicon-pencil'></span>
                        Ubah
                        </button>
                        <a href='?menu=pelanggan' class='btn btn-danger btn-sm'>
                        <span class='glyphicon glyphicon-remove'></span>
                        Batal
                        </a>";
                        
                        else
                        {
                        echo "
                        <button type='submit' name='add' class='btn btn-primary btn-sm'>
                        <span class='glyphicon glyphicon-send'></span>
                        Simpan
                        </button>
                        <button type='reset' class='btn btn-success btn-sm'>
                        <span class='glyphicon glyphicon-refresh'></span>
                        Reset
                        </button>";
                        }
                        ?>
                        </center>
                    </div>  
                </form>
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