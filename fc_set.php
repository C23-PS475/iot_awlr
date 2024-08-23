
<?php
//Import file config
require 'db.php';

//Panggil data
$tampil = mysqli_query($koneksi, "SELECT * FROM setpoint ORDER BY id DESC LIMIT 1 ");
$hasilku = mysqli_fetch_array($tampil);
$ketinggian_us = $hasilku['ketinggian_us'];
$ketinggian_maks = $hasilku['ketinggian_maks'];
$dht_min = $hasilku['dht_min'];
?>
<?= $ketinggian_us ?>~<?= $ketinggian_maks ?>~<?= $dht_min ?>