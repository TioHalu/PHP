<?php
    include('connection.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM karyawan WHERE id='$id'";
    $query = mysqli_query($connect,$sql);
    $hasil = mysqli_fetch_all($query,MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $hasil[0]['id']?>">
        <input type="text" name="nama" placeholder="nama" value="<?php echo $hasil[0]['nama']?>"><br><br>
        <input type="number" name="umur" placeholder="umur"value="<?php echo $hasil[0]['umur']?>" ><br><br>
        <select name="jenis_kelamin" >
            <option value="Pria" <?php echo ($hasil[0]['jenis_kelamin']=="Pria")?'selected':'';?>>Pria</option>
            <option value="Wanita"<?php echo ($hasil[0]['jenis_kelamin']=="Wanita")?'selected':'';?>>Wanita</option>
        </select><br><br>
        <textarea rows="3" cols="30" placeholder="alamat" name="alamat" value=""><?php echo $hasil[0]['alamat']?></textarea>
        <button type="submit">submit</button>

    </form>
    </body>
</html>