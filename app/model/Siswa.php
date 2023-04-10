<?php 

function Agama($agama_id){

    if($agama_id == 1){
        echo "Kristen";
    }else if($agama_id == 2){
        echo "Katholik";
    }else if($agama_id == 3){
        echo "Buddha";
    }else if($agama_id == 4){
        echo "Hindu";
    }else if($agama_id == 5){
        echo "Islam";
    }else{
        echo "Konghucu";
    }
}

function Gender($gender_id){
    if($gender_id == 1){
        echo "Laki - Laki";
    }else{
        echo "Perempuan";
    }
}

?>