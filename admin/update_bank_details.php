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
                                                <h5>Upload Bank Details</h5>
                                             </div>
                                             <div class="card-block">
                                                <?php
                                                   $query=mysqli_query($con,"SELECT * FROM `admin` WHERE `userid`='$userid'");
                                                   $row= mysqli_fetch_array($query);
                                                   ?>
                                                <form method="POST" action="upload_bank_details.php" enctype="multipart/form-data">
                                                   <input type="hidden" name="userid" value="<?php echo $userid?>">
                                                   <div class="form-group">
                                                      <label for="acc_no">Account No: </label>
                                                      <input type="number" name="acc_no" id="acc_no" class="form-control" placeholder="Enter Account Number"
                                                         data-parsley-trigger="change"
                                                         pattern=""
                                                         required>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="username">Account Holder Name: </label>
                                                      <input type="text" name="account_holder_name" id="username" class="form-control" placeholder="Enter Account Holder Name"
                                                         data-parsley-trigger="change"
                                                         data-parsley-range="[4, 20]"
                                                         required>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="username">Bank Name: </label>
                                                      <input type="text" name="bank_name" id="username" class="form-control" placeholder="Enter Bank Name"
                                                         data-parsley-trigger="change"
                                                         data-parsley-range="[4, 20]"
                                                         required>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="username">IFSC Code: </label>
                                                      <input type="text" name="ifsc_code" id="username" class="form-control" placeholder="Enter IFSC Code"
                                                         data-parsley-trigger="change"
                                                         data-parsley-range="[4, 20]"
                                                         required>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="username">Branch Name: </label>
                                                      <input type="text" name="branch_name" id="username" class="form-control" placeholder="Enter Branch Name"
                                                         data-parsley-trigger="change"
                                                         data-parsley-range="[4, 20]"
                                                         required>
                                                   </div>
                                                   <div class="form-group">
                                                      <?php 
                                                         if($row['passbook_image']==NULL){
                                                           
                                                           ?> 
                                                      <center><img src="images/passbook.jpg" style="border-radius:10px; width:200px;"/></center>
                                                      <?php
                                                         }else{
                                                             
                                                             ?>
                                                      <center> <img src="kyc/<?php echo $row['passbook_image'];?>" style="border-radius:10px; width:200px;height:200px;"></center>
                                                      <?php
                                                         }
                                                         ?>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="image">Upload passbook Image: </label>
                                                      <input type="file" name="image" id="image" class="form-control" placeholder="Upload passbook Image"
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
                                                       
                                                       $userid      =      mysqli_real_escape_string($con,$_POST['userid']);
                                                   $acc_no =      mysqli_real_escape_string($con,$_POST['acc_no']);
                                                   $account_holder_name =      mysqli_real_escape_string($con,$_POST['account_holder_name']);
                                                   $bank_name =      mysqli_real_escape_string($con,$_POST['bank_name']);
                                                   $ifsc_code =      mysqli_real_escape_string($con,$_POST['ifsc_code']);
                                                   $branch_name =      mysqli_real_escape_string($con,$_POST['branch_name']);
                                                   
                                                       $image=$_FILES["image"]["name"];
                                                   $query=mysqli_query($con,"SELECT * FROM `admin` WHERE `userid`='$userid'"); 
                                                   $row=mysqli_fetch_array($query);
                                                   
                                                   $extensions=array('image/jpg','image/jpeg','image/png');
                                                   
                                                       	     if($userid!=''){
                                                   
                                                   
                                                   $status='on';
                                                       	         $query=mysqli_query($con,"UPDATE `admin` SET `acc_no`='$acc_no',`acc_holder_name`='$account_holder_name',`bank_name`='$bank_name',`ifsc_code`='$ifsc_code',`branch`='$branch_name',`passbook_image`='$image' WHERE `userid`='$userid'");
                                                       	    $newname = $image;  
                                                              $target = 'kyc/'.$newname;
                                                              move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                                                       	     if($query){
                                                       	          echo '<script>alert("UPDATE SUCCESSFUL.");window.location.assign("upload_bank_details.php");</script>';
                                                       	     }else{
                                                       	         echo '<script>alert("Something Went Wrong.");window.location.assign("upload_bank_details.php");</script>'; 
                                                       	     }
                                                       	     
                                                       	     }else{
                                                       	         echo '<script>alert("Please Field All The Field.");window.location.assign("upload_bank_details.php");</script>';
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
