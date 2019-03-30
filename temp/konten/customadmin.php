<?php
    $id = '';
    if(isset($_GET['id_a']))
    {

    $id = $_GET['id_a'];  
    $query = "SELECT * FROM users where id= $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    $id = $row['id'];
    $nm= $row['nama'];
    $nama= $row['name'];
    $password= $row['password'];
    $status= $row['active'];

    }
    else
    {
        $hide = 1;
    }

    //############ADD############
    if(isset($_POST['add']))
    {
    $nm= $_POST['nm'];
    $nama= $_POST['nama'];
    $password= md5($_POST['password']);
    $status= $_POST['status'];

    $query = "INSERT INTO users (`nama`,`name`,`password`,`active`) VALUES ('{$nm}','{$nama}','{$password}','{$status}');";
   
        $result = mysqli_query($con, $query);
        if($result)
        {
            header('Location: index.php?menu=admin');
            exit();
        } 
    }
    
    //##############UPDATE###########
    if(isset($_POST['update']))
    {
    $nm= $_POST['nm'];
    $nama= $_POST['nama'];
    $password= $_POST['password'];
    $status= $_POST['status'];

    $query = "UPDATE users SET `nama` = '{$nm}',`name` = '{$nama}',`password` = '{$password}',`active` = '{$status}' WHERE id = {$id};";
    
    $result = mysqli_query($con, $query);
    if($result){
        header('Location: index.php?menu=admin');
        exit();

    }
    
}

    ?>

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">    
        <div class="row">
            <div class="col-lg-6">
                <section class="content-header"><h4><?php if($hide == 1) echo "Tambah"; else echo "Ubah";?> Data Admin <?php if($hide == 0) echo "Sdr/i";?> <?php echo $nm; ?></h4></section>
                <a href="?menu=admin" type="button" class="btn btn-primary btn-sm">
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
                        <label for="nm" class="col-sm-4 control-label">Nama</label>
                        <div class="col-sm-6">
                        <input type="text" name="id_a" value="<?php echo $id; ?>" hidden/>
                        <input type="text" class="form-control input-sm" id="nm" name="nm" value="<?php echo $nm; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-sm-4 control-label">Username</label>
                        <div class="col-sm-6">
                        <input type="text" name="id_a" value="<?php echo $id; ?>" hidden/>
                        <input type="text" class="form-control input-sm" id="nama" name="nama" value="<?php echo $nama; ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-6">
                        <input type="password"  name="password" class="form-control input-sm" value="<?php echo $password; ?>">
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
                        <a href='?menu=admin' class='btn btn-danger btn-sm'>
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