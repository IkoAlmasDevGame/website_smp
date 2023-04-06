<?php 
    $local = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "smp_koperasi";
    $port = 3306;

    $conKoperasi = mysqli_connect($local, $user, $pass, $dbname, $port) or mysqli_connect_errno();
?>