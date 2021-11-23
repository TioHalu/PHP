<?php
    include('connection.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM `karyawan` WHERE id='$id'";
    $query = mysqli_query($connect,$sql);

    if($query)
        header("Location:index.php");
    else 
        echo "delete gagal";
    
    ?>