<?php 
function Member($member){
    if($member == 1){
        echo "Administrasi";
    }else if($member == 2){
        echo "Guru";
    }else if($member == 3){
        echo "Siswa / Siswi";
    }
}
?>