<?php 
include "../../database/Migrations/dbSiswa.php";
include "../../controller/Siswa.php";

if(isset($_POST["simpanMurid"])){
    $nisn = htmlentities(trim($_POST["nisn"]));
    $nama = htmlentities(trim($_POST["nama_siswa"]));
    $tggl = htmlentities(trim($_POST["tanggal_lahir"]));
    $prov = htmlentities(trim($_POST["asal_provinsi"]));
    $agama_id = htmlentities(trim($_POST["agama_id"]));
    $gender_id = htmlentities(trim($_POST["gender_id"]));
    $checkInput = htmlentities(trim($_POST["selesai"]));

    if($checkInput){
        if(CreateSiswa($nisn,$nama,$tggl,$prov,$agama_id,$gender_id,$checkInput)){
        }
        ?>
        <script lang="javascript">
            window.alert('Anda Berhasil Mendaftarkan Siswa / Siswi Baru', location.href='../../view/Dashboard/daftar.php');
        </script>
        <?php
    }else{
        unset($_POST["selesai"]);
        ?>
        <script lang="javascript">
            window.alert('Maaf Anda Gagal Mendaftarkan Siswa / Siswi Baru', location.href='../../view/Dashboard/daftar.php');
        </script>
        <?php
    }
}

?>