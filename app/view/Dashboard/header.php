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
    <link rel="stylesheet" href="<?=base()?>system/css/tailwind.css">
    <link rel="stylesheet" href="<?=base()?>system/css/glyphicon.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>app/css/Dashboard/style.css" type="text/css">
    <link rel="stylesheet" href="<?=base()?>app/css/Dashboard/dropdown.css" type="text/css">

    <!-- Icon Sekolah -->
    <link rel="shortcut icon" href="<?=base()?>assets/icon/smp.ico" type="image/x-icon">
</head>
<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <!-- Navbar Awal -->
                <header class="navbar navbar-default fixed-top">
                    <div class="navbar-header">
                        <div class="container-fluid">
                            <img src="<?=base()?>assets/image/smp.png" alt="Logo" class="navbar-brand">
                            <a href="index.php" class="navbar-brand text-medium fw-normal">Dashboard Sekolah Menengah Pertama</a>
                            <button type="button" class="navbar-toggle collapsed" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                <span class="sr-only">Toggle Navigation</span>
                                <span class="icon-bar"></span>
				    	        <span class="icon-bar"></span>
				    	        <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse -mt-6 mr-40">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" role="button"> 
                                &nbsp&nbsp<span class="glyphicon glyphicon-user mx-auto -mr-6" id="dropbtn" onclick="myFunction()"></span></a>
                                <div id="myDropdown" class="dropdown-content">
                                    <?php 
                                    if($_SESSION['member'] == 1){
                                        ?>                                            
                                        <a role="button">Hi, <?php echo $_SESSION["username"]; ?></a>
                                        <a href="../dashboard/logger.php"><span class="fa fa-file mr-5"></span>Logger</a>
                                        <a href="../dashboard/edit.php?user_id=<?php echo $_SESSION["id_user"];?>"><span class="fa fa-user mr-5"></span>Account</a>
                                        <a href="header.php?aksi=keluar"><i class="fa fa-sign-out mr-4"></i>Log out</a>
                                        <?php
                                    }else if($_SESSION['member'] == 2){
                                        ?>
                                        <a role="button">Hi, <?php echo $_SESSION["username"]; ?></a>
                                        <a href="../dashboard/edit.php?user_id=<?php echo $_SESSION["id_user"];?>"><span class="fa fa-user mr-5"></span>Account</a>
                                        <a href="header.php?aksi=keluar"><i class="fa fa-sign-out mr-4"></i>Log out</a>
                                        <?php
                                    }else if($_SESSION['member'] == 3){
                                        ?>
                                        <a role="button">Hi, <?php echo $_SESSION["username"]; ?></a>
                                        <a href="../dashboard/edit.php?user_id=<?php echo $_SESSION["id_user"];?>"><span class="fa fa-user mr-5"></span>Account</a>
                                        <a href="header.php?aksi=keluar"><i class="fa fa-sign-out mr-4"></i>Log out</a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Navbar Akhir -->
                </header>
            </main>
        </div>
    </div>
<!-- Module System Js -->
<script src="<?=base()?>system/modules/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base()?>system/modules/js/bootstrap.js" type="text/javascript"></script>
<script src="<?=base()?>system/modules/js/fontawesome.js" type="text/javascript"></script>
<script src="<?=base()?>app/js/dropdwon.js" type="text/javascript"></script>
<div class="col-md-12">