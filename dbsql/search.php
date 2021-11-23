<?php
    include('connection.php');

    $key = $_GET['keyword'];
    $kondisi = "id='$key' OR nama='$key'";

    $sql = "SELECT `id`, `nama`, `alamat`, `umur`, `jenis_kelamin` FROM `karyawan` WHERE $kondisi ";
    $query = mysqli_query($connect,$sql);
    $hasil = mysqli_fetch_all($query,MYSQLI_ASSOC);

?>

<html>
    <body>
        <form action="search.php" method="GET">
            <input name="keyword" placeholder="Searching">
            <button type="submit">cari</button>
        </form>
        <table border="3">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>jenis Kelamin</th>
                <th>Alamat</th>
                <th>pilihan</th>
            </tr>
            <?php foreach ($hasil as $key):?>
                <tr>
                    <td><?php echo $key['id']?></td>
                    <td><?php echo $key['nama']?></td>
                    <td><?php echo $key['umur']?></td>
                    <td><?php echo $key['jenis_kelamin']?></td>
                    <td><?php echo $key['alamat']?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $key['id']?>">edit</a>
                        <a href="delete.php?id=<?php echo $key['id']?>">delete</a>
                    </td>
                </tr>
                <?php endforeach ?>
        </table>

       

        
    </body>
</html> 
