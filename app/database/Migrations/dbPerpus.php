<?php 
    $local = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "smp_perpustakaan";
    $port = 3306;

    $conPerpustakaan = mysqli_connect($local, $user, $pass, $dbname, $port) or mysqli_connect_errno();
?>