
<?php
//Import file config
require 'db.php';

//Panggil data
$tampil = mysqli_query($koneksi, "SELECT * FROM record ORDER BY id DESC LIMIT 1 ");
$hasilku = mysqli_fetch_array($tampil);
if(empty($hasilku['dht22'])){
    $nilai_cel = "-";
} else {
    $nilai_cel = $hasilku['dht22'];
}
?>

<div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> DHT22 </h5>
                        <h4 class="fw-semibold mb-3"><?= $nilai_cel ?>°C</h4>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-success rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-thermometer fs-6"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                      
