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
                                    <li class="breadcrumb-item"><a href="#!">Award Achieved</a>
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
                                                <h5>UPLOAD AADHAAR</h5>
                                             </div>
                                             <div class="card-block">
                                                <?php
                                                   $query=mysqli_query($con,"SELECT * FROM `admin` WHERE `userid`='$userid'");
                                                   $row= mysqli_fetch_array($query);
                                                   ?>
                                                <form method="POST" action="upload_aadhaar.php" enctype="multipart/form-data">
                                                   <input type="hidden" name="userid" value="<?php echo $userid;?>">
                                                   <div class="form-group">
                                                      <label for="aadhaar_no">Aadhaar No: </label>
                                                      <input type="number" name="adhar_front" id="aadhaar_no" class="form-control" placeholder="Enter Aadhaar No"
                                                         data-parsley-trigger="change"
                                                         pattern=""
                                                         required>
                                                   </div>
                                                   <div class="form-group">
                                                      <?php 
                                                         if($row['adhar_front']==NULL){
                                                           
                                                           ?> 
                                                      <center><img src="images/aadhar_fron.png" style="border-radius:10px; width:200px;"/></center>
                                                      <?php
                                                         }else{
                                                             
                                                             ?>
                                                      <center> <img src="kyc/<?php echo $row['adhar_front'];?>" style="border-radius:10px; width:3s00px;height:200px;"></center>
                                                      <?php
                                                         }
                                                         ?>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="image">Upload Aaadhar Front Image: </label>
                                                      <input type="file" name="image" id="image" class="form-control" placeholder="Upload Aaadhar Front Image"
                                                         data-parsley-trigger="change"
                                                         pattern=""
                                                         required>
                                                   </div>
                                                   <center>
                                                      <button type="submit" name="submit" value="" style="width:100px; height:50px; background-color: #1c1329; color: white;">Submit</button>
                                                   </center>
                                                   <br>
                                                </form>
                                                <?php
                                                   if(isset($_POST['submit'])){
                                                       $aadhaar_no =      mysqli_real_escape_string($con,$_POST['aadhaar_no']);
                                                       $userid      =      mysqli_real_escape_string($con,$_POST['userid']);
                                                   
                                                       $image=$_FILES["image"]["name"];
                                                   $query=mysqli_query($con,"SELECT * FROM `admin` WHERE `userid`='$userid'"); 
                                                   $row=mysqli_fetch_array($query);
                                                   
                                                   $extensions=array('image/jpg','image/jpeg','image/png');
                                                   
                                                       	     if($userid!=''){
                                                   
                                                   
                                                   $status='on';
                                                       	         $query=mysqli_query($con,"UPDATE `admin` SET `adhar_no`='$aadhaar_no',`adhar_front`='$image' WHERE `userid`='$userid'");
                                                       	    $newname = $image;  
                                                              $target = 'kyc/'.$newname;
                                                              move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                                                       	     if($query){
                                                       	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("upload_aadhaar.php");</script>';
                                                       	     }else{
                                                       	         echo '<script>alert("Something Went Wrong.");window.location.assign("upload_aadhaar.php");</script>'; 
                                                       	     }
                                                       	     
                                                       	     }else{
                                                       	         echo '<script>alert("Please Field All The Field.");window.location.assign("upload_aadhaar.php");</script>';
                                                       	     }   
                                                   }
                                                   ?>
                                                <?php
                                                   $query=mysqli_query($con,"SELECT * FROM `admin` WHERE `userid`='$userid'");
                                                   $row= mysqli_fetch_array($query);
                                                   ?>
                                                <form method="POST" action="upload_aadhaar.php" enctype="multipart/form-data">
                                                   <input type="hidden" name="userid" value="<?php echo $userid;?>">
                                                   <div class="form-group">
                                                      <?php 
                                                         if($row['adhar_back']==NULL){
                                                           
                                                           ?>  
                                                      <center><img src="images/aadhar_back.png" style="border-radius:10px; width:200px;"/></center>
                                                      <?php
                                                         }else{
                                                             
                                                             ?>
                                                      <center> <img src="kyc/<?php echo $row['adhar_back'];?>" style="border-radius:10px; width:300px;height:200px;"></center>
                                                      <?php
                                                         }
                                                         ?>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="image">Upload Aaadhar Back Image: </label>
                                                      <input type="file" name="image" id="image" class="form-control" placeholder="Upload Aaadhar Back Image"
                                                         data-parsley-trigger="change"
                                                         pattern=""
                                                         required>
                                                   </div>
                                                   <center>
                                                      <button type="submit" name="submit1" value="" style="width:100px; height:50px; background-color: #1c1329; color: white;">Submit</button>
                                                   </center>
                                                </form>
                                                <?php
                                                   if(isset($_POST['submit1'])){
                                                       
                                                       $userid      =      mysqli_real_escape_string($con,$_POST['userid']);
                                                   
                                                       $image=$_FILES["image"]["name"];
                                                   $query=mysqli_query($con,"SELECT * FROM `admin` WHERE `userid`='$userid'"); 
                                                   $row=mysqli_fetch_array($query);
                                                   $trn=$row['trn_password'];
                                                   $extensions=array('image/jpg','image/jpeg','image/png');
                                                   
                                                       	     if($userid!=''){
                                                   
                                                   
                                                   $status='on';
                                                       	         $query=mysqli_query($con,"UPDATE `admin` SET `adhar_back`='$image' WHERE `userid`='$userid'");
                                                       	    $newname = $image;  
                                                              $target = 'kyc/'.$newname;
                                                              move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                                                       	     if($query){
                                                       	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("upload_aadhaar.php");</script>';
                                                       	     }else{
                                                       	         echo '<script>alert("Something Went Wrong.");window.location.assign("upload_aadhaar.php");</script>'; 
                                                       	     }
                                                       	     
                                                       	     }else{
                                                       	         echo '<script>alert("Please Field All The Field.");window.location.assign("upload_aadhaar.php");</script>';
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
