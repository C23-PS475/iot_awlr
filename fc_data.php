
<?php
//Koneksi
include("db.php");

//Ambil Data Yang Dikirim
$us = $_GET['a'];
$ldr = $_GET['b'];
$rain = $_GET['c'];
$dht22 = $_GET['d'];
$kesimpulan1 = $_GET['e'];
$kesimpulan2 = $_GET['f'];

//Proteksi
if($_GET['b'] == 0 || empty($_GET['b'])){
    $ldr = 0;
}
if($_GET['c'] == 0 || empty($_GET['c'])){
    $rain = 0;
}

//Cek
if($kesimpulan2 == "POTENSI BANJIR"){
    //Post Data
    $sql = "INSERT INTO alert (nilai)
    VALUES ('$us')";

    if ($koneksi->query($sql) === TRUE) {
    echo "[Alert] ditambahkan";
    } else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
//Post Data
$sql = "INSERT INTO record (us, ldr, rain, dht22, kesimpulan1, kesimpulan2)
VALUES ('$us', '$ldr', '$rain', '$dht22', '$kesimpulan1', '$kesimpulan2')";

if ($koneksi->query($sql) === TRUE) {
  echo "[Record] ditambahkan";
} else {
  echo "Error: " . $sql . "<br>" . $koneksi->error;
}
?>