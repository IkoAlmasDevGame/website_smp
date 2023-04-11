<?php 
function CreateSiswa($nisn,$nama,$tggl,$prov,$agama_id,$gender_id,$checkInput){
    global $conSiswa;

    $nisn = htmlentities(trim($_POST["nisn"]));
    $nama = htmlentities(trim($_POST["nama_siswa"]));
    $tggl = htmlentities(trim($_POST["tanggal_lahir"]));
    $prov = htmlentities(trim($_POST["asal_provinsi"]));
    $agama_id = htmlentities(trim($_POST["agama_id"]));
    $gender_id = htmlentities(trim($_POST["gender_id"]));
    $checkInput = htmlentities(trim($_POST["selesai"]));

    if($checkInput){
        $create = "INSERT INTO t_datasiswa (id_siswa,nisn,nama_siswa,tanggal_lahir,asal_provinsi,agama_id,gender_id,selesai) VALUES ('','$nisn','$nama','$tggl','$prov','$agama_id','$gender_id','$checkInput')";
        $response = array();
        $response['t_datasiswa'] = array();
        if($conSiswa->query($create)){
            array_push($response['t_datasiswa'],
                $nisn,
                $nama,
                $tggl,
                $prov,
                $agama_id,
                $gender_id,
                $checkInput
            );
            return true;
        }
        return true;
    }else{
        return false;
    }
}

function RuanganKelas(){
    
}

?>