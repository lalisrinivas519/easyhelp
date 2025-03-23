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
                                    <li class="breadcrumb-item"><a href="#!">Edit Password</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Page-header end -->
                     <div class="main-body">
                        <div class="page-wrapper">
                           <!-- Page body start -->
                           <div class="main-body">
                              <div class="page-wrapper">
                                 <!-- Page body start -->
                                 <div class="page-body">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="card">
                                             <div class="card-header">
                                                <h5>EDIT PASSWORD</h5>
                                             </div>
                                             <div class="card-block">
                                                <form method="POST" action="edit_password.php" enctype="multipart/form-data">
                                                   <input type="hidden" name="userid" value="<?php echo $userid ?>">
                                                   <div class="form-group">
                                                      <label for="old_password">Enter Old password: </label>
                                                      <input type="password" name="old" id="old_password" class="form-control" placeholder="Enter Old password" required>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="new_password">Enter New password: </label>
                                                      <input type="password" name="new" id="new_password" class="form-control" placeholder="Enter New password" required>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="confirm_password">Enter Confirm password: </label>
                                                      <input type="password" name="conform" id="confirm_password" class="form-control" placeholder="Enter Confirm password" required>
                                                   </div>
                                                   <center>
                                                      <button type="submit" name="submit" style="width:100px; height:50px; background-color: #1c1329; color: white;">Submit</button>
                                                   </center>
                                                   <br>
                                                </form>
                                                <?php
                                                   if(isset($_POST['submit'])){
                                                       include("php_include/connect.php"); 
                                                       $userid=$_POST['userid'];
                                                       $old=$_POST['old'];
                                                       $new=$_POST['new'];
                                                       $conform=$_POST['conform'];
                                                       
                                                       $query=mysqli_query($con,"SELECT * FROM `admin` WHERE `userid`='$userid'");
                                                       $row=mysqli_fetch_array($query);
                                                       $old_password=$row['password'];
                                                       
                                                       if($old==$old_password){
                                                           if($new==$conform){
                                                               $query=mysqli_query($con,"UPDATE `admin` SET `password`='$conform' WHERE `userid`='$userid'");
                                                               if($query){
                                                                   echo '<script>alert("Password Change Successful");window.location.assign("edit_password.php");</script>';
                                                               } else {
                                                                   echo '<script>alert("Error updating password");window.location.assign("edit_password.php");</script>';
                                                               }
                                                           } else {
                                                               echo '<script>alert("New Password and Confirm Password are different");window.location.assign("edit_password.php");</script>';
                                                           }
                                                       } else {
                                                           echo '<script>alert("Old password does not match");window.location.assign("edit_password.php");</script>';
                                                       }
                                                   } 
                                                   ?>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Page body end -->
                              </div>
                           </div>
                           <!-- Page body end -->
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