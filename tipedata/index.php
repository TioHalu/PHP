
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php 
    $a = 10;
    $b = 11;
    $hasil = $a * $b; //contoh perkalian
    echo $hasil."<br>"; 
    $hasil = $a + $b; //contoh penjumlahan
    echo $hasil."<br>";
    $a=10;
    $a++;
    echo $a."<br>"; // menghasilkan nilai 11
    $b = 10;
    $b--;
    echo $b."<br>"; //menghasilkan nilai 9
    $c = 10;
    $c++;
    $c++;
    echo $c."<br>";//akan menghasilkan nilai 12 karena menggunakan 2x operator increment
//STRING
    $nama = "Meilan";
    $pesan = "Selamat datang $nama <br>";
echo $pesan;
//boolean
$nilai1 = 10;
$nilai2 = 5;
$kondisi = $nilai1>$nilai2; //cek kondisi apakah bernilai true(benar) atau false(salah)
var_dump($kondisi);

//ARRAY
$angka  = array(1,2,3,4,5); //kumpulan data integer
$buah   = ["pisang","anggur","apel","kiwi","nanas"]; //kumpulan data string
$angka[]= 6; // menambahkan data ke dalam array $angka dimana akan diletakan di index paling terak
$buah[] = "nangka"; 
echo "<br>";
var_dump($angka);
echo "<br>";
var_dump($buah);

//ARRAY ASOSIATIF
$buah[0]="Anggur";
$buah[1]="Jeruk";
$buah[2]="Strawberry";
//ATAU
$buah[0]="Anggur";
$buah[1]="Jeruk";
$buah[2]="Strawberry";
//ASOSIATIF
$alamat= array(
                "naufal"=>"Bandung",
                "meilan"=>"Malang",
                "marimar"=>"Mexico"
              );
foreach($alamat as $x => $value) 
{
    echo "<br> ". "Alamat " .$x. "  di " . $value;
    echo "<br>";
}
//array multidimensi
$mahasiswa = array
  (
  array("Marimar",20,"Wanita"),
  array("Soledad",25,"Wanita"),
  array("Alfonso",30,"Pria")
  );
for ($baris = 0; $baris < 3; $baris++) {
  echo "<p><b>Baris No: $baris</b></p>";
  echo "<ul>";
  for ($kolom = 0; $kolom < 3; $kolom++) {
    echo "<li>".$mahasiswa[$baris][$kolom]."</li>";
  }
  echo "</ul>";
}


?>




    </body>
</html>
