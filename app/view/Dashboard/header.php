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
        include "../../model/member.php";

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
    <link rel="stylesheet" href="<?=base()?>system/css/text-bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>system/css/card-bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>system/css/font-awesome4.min.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>system/css/fontawesome.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>system/css/tailwind.min.css">
    <link rel="stylesheet" href="<?=base()?>system/css/glyphicon.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>app/css/Dashboard/style.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>app/css/Dashboard/dropdown.css" type="text/css">

    <!-- Icon Sekolah -->
    <link rel="shortcut icon" href="<?=base()?>assets/icon/smp.ico" type="image/x-icon">
</head>
<body>
    <div>
        <div>
            <main>
                <div class="navbar navbar-default fixed-top -mt-6">
                    <div class="navbar-container fixed-top">
                        <div class="navbar-header fixed-top">
                            <img src="<?=base()?>assets/image/smp.png" alt="" class="img-responsive navbar-brand -mt-3">
                            <a href="index.php" class="navbar-brand -mt-3">Dashboard Sekolah Menengah Pertama</a>
                            <button type="button" class="navbar-toggle collapsed" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
		        		    	<span class="icon-bar"></span>
		        		    	<span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <?php include "../Dashboard/navigation.php"; ?>
            </main>
        </div>
    </div>
    <script type="text/javascript" src="<?=base()?>system/modules/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?=base()?>system/modules/js/fontawesome.js"></script>
    <script type="text/javascript" src="<?=base()?>app/js/dropdown.js"></script>
<div class="col-md-12">