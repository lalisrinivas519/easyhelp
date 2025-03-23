<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <?php include("php_include/head.php"); ?>
   <body>
      <!-- Pre-loader start -->
      <?php include("php_include/preloader.php"); ?>
      <!-- Pre-loader end -->
      <div id="pcoded" class="pcoded">
         <div class="pcoded-overlay-box"></div>
         <div class="pcoded-container navbar-wrapper">
            <?php include("php_include/header.php"); ?>         
            <div class="pcoded-main-container">
               <div class="pcoded-wrapper">
                  <?php include("php_include/sidebar.php"); ?>
                  <div class="pcoded-content">
                     <!-- Page-header start -->
                     <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">WELCOME TO EASY HELP</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="home.php"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="home.php">Dashboard</a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Level Team 05</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <!-- Page-header end -->
                     <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                           <div class="page-wrapper">
                              <!-- Page-body start -->
                              <div class="page-body">
                                 <!-- Basic table card start -->
                                 <div class="card">
                                    <div class="card-header">
                                       <h5>LEVEL TEAM 05</h5>
                                       <div class="card-header-right">
                                          <ul class="list-unstyled card-option">
                                             <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                             <li><i class="fa fa-window-maximize full-card"></i></li>
                                             <li><i class="fa fa-minus minimize-card"></i></li>
                                             <li><i class="fa fa-refresh reload-card"></i></li>
                                             <li><i class="fa fa-trash close-card"></i></li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="card-block table-border-style">
                                       <div class="table-responsive">
                                          <table class="table">
                                             <thead>
                                                <tr>
                                                   <th>SL No</th>
                                                   <th>User ID</th>
                                                   <th>Name</th>
                                                   <th>Purchase</th>
                                                   <th>Status</th>
                                                   <th>Date</th>
                                                </tr>
                                             </thead>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- Page-body end -->
                           </div>
                        </div>
                        <!-- Main-body end -->
                        <div id="styleSelector">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Required Jquery -->
      <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
      <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/pages/widget/excanvas.js"></script>
      <!-- waves js -->
      <script src="assets/pages/waves/js/waves.min.js"></script>
      <!-- jquery slimscroll js -->
      <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
      <!-- modernizr js -->
      <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
      <!-- slimscroll js -->
      <script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
      <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <!-- Chart js -->
      <script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
      <!-- amchart js -->
      <script src="../../www.amcharts.com/lib/3/amcharts.js"></script>
      <script src="assets/pages/widget/amchart/gauge.js"></script>
      <script src="assets/pages/widget/amchart/serial.js"></script>
      <script src="assets/pages/widget/amchart/light.js"></script>
      <script src="assets/pages/widget/amchart/pie.min.js"></script>
      <script src="../../www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
      <!-- menu js -->
      <script src="assets/js/pcoded.min.js"></script>
      <script src="assets/js/vertical-layout.min.js"></script>
      <!-- custom js -->
      <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
      <script type="text/javascript" src="assets/js/script.js"></script>
   </body>
</html>