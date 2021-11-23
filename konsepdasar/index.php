<?php

//aturan variable
$umur=21;
$nama="tiohalu";
$Kelas="tk4301";
$_alamat_tinggal="bundang";
$TEMPAT_LAHIR="indonesia";

function welcome($name){//function di php
echo $name;
}

?>
<!-- HTML PHP -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>nama <?php echo $nama ?></h1>
    <h2>kelas: <?php echo $Kelas?></h2>
    <p>alamat : <?php echo $_alamat_tinggal, $TEMPAT_LAHIR?></p>
<!-- contoh pemanggilan fungsi -->
    <h1>selamat datang , <?php welcome($nama)?></h1> 
    </body>
</html>