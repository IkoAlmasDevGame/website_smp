<?php 
include "../../database/Migrations/dbSiswa.php";
error_reporting(0);
session_start();

$id_siswa = htmlentities(trim($_POST['id_siswa']));
$selection_id = htmlentities(trim($_POST["selection_id"]));


$select         = "SELECT COUNT(*) as total FROM t_datasiswa WHERE id_siswa='$id_siswa' ";
$select         = mysqli_query($conSiswa, $select);
$select         = mysqli_fetch_array($select);

if($select['total'] > 0){
    mysqli_query($conSiswa, "update t_datasiswa set selection_id='$selection_id' where id_siswa='$id_siswa'");
}else{
    mysqli_query($conSiswa, "insert into t_datasiswa set selection_id='$selection_id'");    
}
header("location:../../view/Dashboard/daftar.php");
?>