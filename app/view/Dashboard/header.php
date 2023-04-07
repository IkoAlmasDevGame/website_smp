<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sekolah</title>
    <?php 
        session_start();        
        include "../../database/Migrations/dbAccount.php";
        include "../../database/Migrations/dbKoperasi.php";
        include "../../database/Migrations/dbPerpus.php";
        include "../../database/Migrations/dbSiswa.php";
        include "../../config/auth.php";
        include "../../config/config.php";

        if(isset($_GET['aksi'])){
            $aksi = $_GET['aksi'];
            if($aksi == "keluar"){
                if(isset($_SESSION['status'])){
                    unset($_SESSION['status']);
                    session_unset();
                    session_destroy();
                    $_SESSION = array();
                }
                header("location:../index.php");
                exit;
            }
        }    
    ?>
    <!-- CSS System dari Module Js -->
    <link rel="stylesheet" href="<?=base()?>system/css/bootstrapv5221.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>system/css/tailwind.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>system/css/text-bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>system/css/card-bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>system/css/font-awesome4.min.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>system/css/fontawesome.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>system/css/tailwind.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>system/css/glyphicon.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>app/css/Dashboard/style.css" type="text/css">

    <!-- Icon Sekolah -->
    <link rel="shortcut icon" href="<?=base()?>assets/icon/smp.ico" type="image/x-icon">

    <!-- Module System Js -->
    <script src="<?=base()?>system/modules/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?=base()?>system/modules/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?=base()?>system/modules/js/bootstrap.bundle.js" type="text/javascript"></script>
    <script src="<?=base()?>system/modules/js/fontawesome.js" type="text/javascript"></script>
</head>
<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <header class="navbar navbar-default fixed-top">
                    <div class="navbar-header">
                        <div class="container-fluid">
                            <img src="<?=base()?>assets/image/smp.png" alt="Logo" class="navbar-brand">
                            <a href="index.php" class="navbar-brand text-medium fw-normal">Dashboard Sekolah Menengah Pertama</a>
                        </div>
                    </div>
                </header>
            </main>
        </div>
    </div>
<div class="col-md-12">