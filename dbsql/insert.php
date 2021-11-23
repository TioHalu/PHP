<?php

include('connection.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$jenisk = $_POST['jenis_kelamin'];

$sql = "INSERT INTO `karyawan`(`nama`, `alamat`, `umur`, `jenis_kelamin`) VALUES ('$nama','$alamat','$umur','$jenisk')";
$query = mysqli_query($connect,$sql);  

if($query)
    header('Location:index.php');
else {
    echo "data gagal";
}
?>
<html>
    <body>
        
        <a href="index.php">selesai</a>
    </body>
</html>
