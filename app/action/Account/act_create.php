<?php 
include "../../controller/Account.php";
include "../../database/Migrations/dbAccount.php";
include "../../database/Migrations/dbSiswa.php";

if(isset($_POST["tambahAccount"])){
    $userEmail = htmlentities(trim($_POST['userEmail']));
    $userName = htmlentities(trim($_POST['username']));
    $password = md5(trim($_POST['password']), false);
    $cardMember = htmlentities(trim($_POST['member']));
    $gender = htmlentities(trim($_POST['gender']));
    $birthday = htmlentities(trim($_POST['birthday']));
    $onCreated = date('y-m-d H:i:s a');
    $onUpdated = date('y-m-d H:i:s a');
    $checkInput = htmlentities(trim($_POST['selesai']));

    if($checkInput){
        if(CreateAccount($userEmail,$userName,$password,$cardMember,$gender,$birthday,$checkInput)){
            mysqli_query($conSiswa, "INSERT t_guru SET username='$userName', gender='$gender', birthday='$birthday', selesai='$checkInput'");
            ?>
            <script type="text/javascript">
                window.alert("Welcome To Junior high school", location.href="../../view/index.php");
            </script>
            <?php
        }
        header("location:../../view/index.php?pesan=berhasil");
    }else{
        unset($checkInput);
        header("location:../../view/index.php?pesan=gagal");
    }
}
?>