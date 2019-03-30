<?php include_once 'base/db.php'; ?>
<?php
session_start();
if(!$_SESSION['username']){
    session_destroy();
    session_unset();
    header("Location: ../index.php");
    die();
}
if(isset($_GET['menu'])){
    $menu=$_GET['menu'];
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Aplikasi Monitoring Penggunaan Air PDAM</title>
        <!-- Favicon -->
        <link rel="icon" href="assets/img/icon.png" type="image/x-icon" />
        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="assets/css/custom.css" rel="stylesheet">
        <link href="assets/css/guages.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet"> 
        <!-- Slider -->
        <link href="assets/css/slider/freshslider.min.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="assets/js/jquery.js"></script>
        <!-- Chart js library -->
        <script src="assets/js/chart/Chart.js"></script>
        <!-- datatables -->
        <link href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
        
        <!-- SWITCH SECTION -->
        <link href="assets/css/switch/bootstrap-switch.css" rel="stylesheet">
        <script src="assets/js/switch/highlight.js"></script>
        <script src="assets/js/switch/bootstrap-switch.js"></script>
        <script src="assets/js/switch/main.js"></script>
        
    </head>
    
    <body>
        <div id="wrapper">