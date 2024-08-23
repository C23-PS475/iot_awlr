
<?php
//Import file config
require 'db.php';


//Update
if(isset($_POST['update'])) {
  $ketinggian_us = $_POST['ketinggian_us'];
  $ketinggian_maks = $_POST['ketinggian_maks'];
  $dht_min = $_POST['dht_min'];
  $id = "1";
 
  //update Akun
  $sql = "UPDATE setpoint SET ketinggian_us='$ketinggian_us',ketinggian_maks='$ketinggian_maks',dht_min='$dht_min' WHERE id='$id'";

  if ($koneksi->query($sql) === TRUE) {
    echo "<script>
    window.location='page_setpoint.php';
    </script>";
  } else {
    echo "<script>
    alert('Error! Please try again.')
    </script>";
  }

} else {
  //Panggil data
  $tampil = mysqli_query($koneksi, "SELECT * FROM setpoint ORDER BY id DESC LIMIT 1 ");
  $hasilku = mysqli_fetch_array($tampil);
  if(empty($hasilku['ketinggian_us'])){
      $ketinggian_us = "0";
  } else {
      $ketinggian_us = $hasilku['ketinggian_us'];
  }
  if(empty($hasilku['ketinggian_maks'])){
      $ketinggian_maks = "0";
  } else {
      $ketinggian_maks = $hasilku['ketinggian_maks'];
  }
  if(empty($hasilku['dht_min'])){
    $dht_min = "0";
  } else {
    $dht_min = $hasilku['dht_min'];
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem AWLR Tenaga Surya</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="page_index.php" class="text-nowrap logo-img">
            <img src="assets/images/logos/logo.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Main</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link " href="page_index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link " href="page_alert.php" aria-expanded="false">
                <span>
                  <i class="ti ti-notification"></i>
                </span>
                <span class="hide-menu">Alert</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link active" href="page_setpoint.php" aria-expanded="false">
                <span>
                  <i class="ti ti-pencil"></i>
                </span>
                <span class="hide-menu">Setpoint</span>
              </a>
            </li>
            
          </ul>
          
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Setpoint</h5>
                    <form role="form" class="text-start" method="post" action="page_setpoint.php">
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Ketinggian US (m)</label>
                        <input type="text" class="form-control" id="ketinggian_us" value="<?= $ketinggian_us ?>" name="ketinggian_us" placeholder="Jarak dasar air dengan ultrasonic">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Maks ketinggian (m)</label>
                        <input type="text" class="form-control" id="ketinggian_maks" value="<?= $ketinggian_maks ?>" name="ketinggian_maks" placeholder="Tinggi permukaan air maks">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Min DHT22</label>
                        <input type="text" class="form-control" id="dht_min" value="<?= $dht_min ?>" name="dht_min" placeholder="Celcius">
                      </div>
                      <input type="submit" name="update" class="btn btn-primary"value="Update">
                    </form>
              </div>
            </div>
          </div>
        </div>
        <div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Dibuat oleh <a href="https://fajarcode.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">Fkail</a> Politeknik Negeri Malang</p>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <script>
      $(document).ready(function(){
          function getData(){
              $.ajax({
                  type: 'POST',
                  url: 'ajax_alert.php',
                  success: function(data){
                      $('#alert').html(data);
                  }
              });
          }
          getData();
          setInterval(function () {
              getData(); 
          }, 1000); 

      });
  </script>
</body>

</html>