<?php 
    $local = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "smp_data";
    $port = 3306;

    $conAccount = mysqli_connect($local, $user, $pass, $dbname, $port) or mysqli_connect_errno();
?>