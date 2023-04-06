<?php 

function CreateAccount($userEmail, $userName, $password, $cardMember, $gender, $birthday, $checkInput){
    global $conAccount;

    $userEmail = htmlentities(trim($_POST['userEmail']));
    $userName = htmlentities(trim($_POST['username']));
    $password = md5(trim($_POST['password']), false);
    $cardMember = htmlentities(trim($_POST['member']));
    $gender = htmlentities(trim($_POST['gender']));
    $birthday = htmlentities(trim($_POST['birthday']));
    $onCreated = date('y-m-d h:i:s a');
    $onUpdated = date('y-m-d h:i:s a');
    $checkInput = htmlentities(trim($_POST['selesai']));

    if($checkInput){
        $create = "INSERT INTO account_t (id_user,userEmail,username,password,member,gender,birthday,onCreated,onUpdated,selesai) VALUES ('','$userEmail','$userName','$password','$cardMember','$gender','$birthday','$onCreated','$onUpdated','$checkInput')";
        $response = array();
        $response['account_t'] = array();
        if($conAccount->query($create)){
            array_push($response['account_t'], 
                $userEmail,
                $userName,
                $password,
                $cardMember,
                $gender,
                $birthday,
                $onCreated,
                $onUpdated,
                $checkInput
            );
            return true;
        }
        return true;
    }else{
        return false;
    }
}

function EditAccount($userEmail, $userName, $password, $gender, $birthday, $checkInput, $id_user){
    global $conAccount;

    $id_user = htmlentities(trim($_POST['id_user']));
    $userEmail = htmlentities(trim($_POST['userEmail']));
    $userName = htmlentities(trim($_POST['username']));
    $password = md5(trim($_POST['password']), false);
    $gender = htmlentities(trim($_POST['gender']));
    $birthday = htmlentities(trim($_POST['birthday']));
    $checkInput = htmlentities(trim($_POST['selesai']));

    if($checkInput){
        $update = "UPDATE account_t SET userEmail='$userEmail', username='$userName', password='$password', gender='$gender', birthday='$birthday', selesai='$checkInput' WHERE id_user='$id_user'";
        $response = array();
        $response['account_t'] = array();
        if($conAccount->query($update)){
            array_push($response['account_t'],
                $id_user, 
                $userEmail,
                $userName,
                $password,
                $gender,
                $birthday,
                $checkInput
            );
            return true;
        }
        return true;
    }else{
        return false;
    }
}

function LoginAccount($userEmail, $password, $cardMember){
    global $conAccount;

    $userEmail = htmlentities(trim($_POST['userEmail']));
    $password = md5(trim($_POST['password']), false);
    $cardMember = htmlentities(trim($_POST['member']));
    password_verify($password, PASSWORD_DEFAULT);
    password_hash($password, PASSWORD_DEFAULT);

    $onUpdated = date('y-m-d h:i:s a');

    $data = "SELECT * FROM account_t WHERE userEmail='$userEmail' and password='$password' and member like '$cardMember'";
    $cek = $conAccount->query($data);
    $conAccount->query("UPDATE account_t SET onUpdated='$onUpdated' WHERE userEmail='$userEmail'");

    if($cek->num_rows > 0){
        $response = array();
        $response['account_t'] = array();
        if($row = $cek->fetch_assoc()){
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['member'] = $row['member'];
            array_push($response['account_t'], $row);
        }
        return true; 
    }else{
        return false;
    }
}

?>