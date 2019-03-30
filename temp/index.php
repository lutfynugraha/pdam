<?php include_once 'divpage/header.php'; ?>
<?php include_once 'divpage/navbar.php'; ?>
<?php include_once 'divpage/menu.php'; ?>

<?php
    switch($menu){
        case "pa":
            include_once 'konten/pa.php';
            break;
        case "pa_pelanggan":
            include_once 'konten/pa_pelanggan.php';
            break;
        case "pelanggan":
            include_once 'konten/pelanggan.php';
            break;
        case "custompelanggan":
            include_once 'konten/custompelanggan.php';
            break;
         case "totalpenggunaan":
            include_once 'konten/totalpenggunaan.php';
            break;
        case "tentang":
            include_once 'konten/tentang.php';
            break;
        case "datatraining":
            include_once 'konten/datatraining.php';
            break;
        case "naivebayes":
            include_once 'konten/prosesperhitungan.php';
            break;
        case "vproses":
            include_once 'konten/lihatproses.php';
            break;
        case "admin":
            include_once 'konten/admin.php';
            break;
        case "customadmin":
            include_once 'konten/customadmin.php';
            break;
        default:
            echo "Page not found";
            break;
    }
?>

<?php include_once 'divpage/footer.php'; ?>