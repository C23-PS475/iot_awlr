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
              <a class="sidebar-link active" href="page_index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="page_alert.php" aria-expanded="false">
                <span>
                  <i class="ti ti-notification"></i>
                </span>
                <span class="hide-menu">Alert</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="page_setpoint.php" aria-expanded="false">
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
        <div class="col-lg-3">
                <!-- Monthly Earnings -->
                <div id="ketinggian"></div>
              </div>
              <div class="col-lg-3">
                <!-- Monthly Earnings -->
                <div id="dht22"></div>
              </div>
              <div class="col-lg-3">
                <!-- Monthly Earnings -->
                <div id="rain"></div>
              </div>
              <div class="col-lg-3">
                <!-- Monthly Earnings -->
                <div id="ldr"></div>
              </div>
        </div>
        <div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">10 Record Terbaru</h5>
                <div id="record"></div>
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
                  url: 'ajax_ketinggian.php',
                  success: function(data){
                      $('#ketinggian').html(data);
                  }
              });
          }
          getData();
          setInterval(function () {
              getData(); 
          }, 1000); 

      });
  </script>
  <script>
      $(document).ready(function(){
          function getData(){
              $.ajax({
                  type: 'POST',
                  url: 'ajax_ldr.php',
                  success: function(data){
                      $('#ldr').html(data);
                  }
              });
          }
          getData();
          setInterval(function () {
              getData(); 
          }, 1000); 

      });
  </script>
  <script>
      $(document).ready(function(){
          function getData(){
              $.ajax({
                  type: 'POST',
                  url: 'ajax_dht22.php',
                  success: function(data){
                      $('#dht22').html(data);
                  }
              });
          }
          getData();
          setInterval(function () {
              getData(); 
          }, 1000); 

      });
  </script>
  <script>
      $(document).ready(function(){
          function getData(){
              $.ajax({
                  type: 'POST',
                  url: 'ajax_rain.php',
                  success: function(data){
                      $('#rain').html(data);
                  }
              });
          }
          getData();
          setInterval(function () {
              getData(); 
          }, 1000); 

      });
  </script>
  <script>
      $(document).ready(function(){
          function getData(){
              $.ajax({
                  type: 'POST',
                  url: 'ajax_record.php',
                  success: function(data){
                      $('#record').html(data);
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