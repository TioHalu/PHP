<?php
// fungsi biasa
function data($nama=null){
    if($nama==null){
        echo "selamat datang !";
    }
    else {
        echo "selamat datang,".$nama."!";
    }
    
}

data("ujang");
?>