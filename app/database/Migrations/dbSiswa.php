<?php 
    $local = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "smp_siswa";
    $port = 3306;

    $conSiswa = mysqli_connect($local, $user, $pass, $dbname, $port) or mysqli_connect_errno();
?>