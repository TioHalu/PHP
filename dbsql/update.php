<?php

include('connection.php');
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenisk = $_POST['jenis_kelamin'];
$id = $_POST['id'];


$sql = "UPDATE `karyawan` SET `nama`='$nama',`alamat`='$alamat',`umur`='$umur',`jenis_kelamin`='$jenisk' WHERE id='$id'";
$query = mysqli_query($connect,$sql);

if($query){
    header('Location:index.php');
}
else {
    echo "masukan gagal";
}
?>