<?php 
include "../../controller/Account.php";
include "../../database/Migrations/dbAccount.php";

session_start();
if(isset($_POST["submit"])){
    $userEmail = htmlentities(trim($_POST['userEmail']));
    $password = md5(trim($_POST['password']), false);
    $cardMember = htmlentities(trim($_POST['member']));
    password_verify($password, PASSWORD_DEFAULT);
    password_hash($password, PASSWORD_DEFAULT);

    if($userEmail == "" || $password == ""){
        ?>
        <script type="text/javascript">
            window.alert("Form Log-In Tidak Boleh Kosong", location.href="../../view/index.php");
        </script>
        <?php
        exit;
    }

    if(LoginAccount($userEmail,$password,$cardMember)){
        $_SESSION['status'] = "Berhasil Log-In";
        if($cardMember == 1){
            header("location:../../view/Dashboard/index.php");
        }else if($cardMember == 2){
            header("location:../../view/Dashboard/index.php");
        }else if($cardMember == 3){
            header("location:../../view/Dashboard/index.php");
        }
    }else{
        ?>
        <script type="text/javascript">
            window.alert("Coba Lagi ...", location.href="../../view/index.php");
        </script>
        <?php
    }
}
?>