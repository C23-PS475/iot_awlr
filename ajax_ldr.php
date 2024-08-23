
<?php
//Import file config
require 'db.php';

//Panggil data
$tampil = mysqli_query($koneksi, "SELECT * FROM record ORDER BY id DESC LIMIT 1 ");
$hasilku = mysqli_fetch_array($tampil);
if(empty($hasilku['ldr'])){
    $nilai = "0";
} else {
    $nilai = $hasilku['ldr'];
}
?>
<div class="card">
                <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> LDR </h5>
                        <h4 class="fw-semibold mb-3"><?= $nilai ?>%</h4>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-warning rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-bulb fs-6"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                      
