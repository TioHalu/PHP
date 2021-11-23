<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form action="insert.php" method="POST">
        
        <input type="text" name="nama" placeholder="nama"><br><br>
        <input type="number" name="umur" placeholder="umur" ><br><br>
        <select name="jenis_kelamin">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select><br><br>
        <textarea rows="3" cols="30" placeholder="alamat" name="alamat"></textarea>
        <button type="submit">submit</button>

    </form>
    </body>
</html>