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
                                    <li class="breadcrumb-item"><a href="#!">Wallet Request</a>
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
                                                <h5>WALLET REQUEST</h5>
                                             </div>
                                             <div class="card-block">
                                                <?php
                                                   $userid = $_SESSION['userid'];
                                                   if($con){
                                                   	$query = "SELECT * FROM `wallet_request` WHERE `userid`='$userid'";
                                                   		$res = mysqli_query($con, $query);
                                                   
                                                   			if(mysqli_num_rows($res)>0){
                                                   				$x=mysqli_fetch_assoc($res);
                                                   					
                                                   			echo "<h6><font color='' face='Arial Black'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WALLET:  </font>".' '."<font color='orange' face='Arial Black'>".' '."".' <b>'.$x['amount'].' '."/-</font>".' '."</b>".' '.'</h6>';
                                                   			}
                                                   		}
                                                   ?>
                                                <form method="POST" action="" enctype="multipart/form-data">
                                                   <input type="hidden" name="userid" value="<?php echo $userid?>">
                                                   <div class="form-group">
                                                      <label for="amount">Amount: </label>
                                                      <input type="number" name="amount" id="amount" class="form-control" placeholder="Enter Amount"
                                                         data-parsley-trigger="change"
                                                         pattern=""
                                                         required>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="trnnumber">TRN Number: </label>
                                                      <input type="number" name="trn_number" id="trnnumber" class="form-control" placeholder="Enter TRN Number"
                                                         data-parsley-trigger="change"
                                                         pattern=""
                                                         required>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="image">Upload Receipt: </label>
                                                      <input type="file" name="image" id="image" class="form-control" placeholder="Upload Receipt"
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
                                                   $userid=$_POST['userid'];
                                                       $amount=$_POST['amount'];
                                                       $trn_number=$_POST['trn_number'];
                                                       $image=$_FILES["image"]["name"];
                                                       $date=date('d-m-y');
                                                       $status='Pending';
                                                                $extensions=array('image/jpg','image/jpeg','image/png');
                                                                if($amount!='' && $trn_number!=''){
                                                                    $update = mysqli_query($con,"INSERT INTO `wallet_request`(`userid`, `amount`, `trn_number`, `receipt`, `date`, `status`) 
                                                   VALUES ('$userid','$amount','$trn_number','$image','$date','$status')");
                                                                
                                                                    $newname = $image;  
                                                                    $target = 'wallet_request_image/'.$newname;
                                                                    move_uploaded_file( $_FILES['image']['tmp_name'], $target);
                                                                    if($update){
                                                                        echo '<script>alert("WALLET REQUEST SUCCESSFUL.");window.location.assign("wallet_request.php");</script>';
                                                                 
                                                                    }else{
                                                                        echo '<script>alert("SOMETHING WAS MISSING.");window.location.assign("wallet_request.php");</script>';
                                                                    }
                                                                }else{
                                                                    echo '<script>alert("SOMETHING WAS MISSING PLEASE FIELD ALL THE  DETAILS.");window.location.assign("wallet_request.php");</script>';
                                                                }
                                                   }
                                                   ?>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Page body end -->
								 
                                 <div class="page-body">
                                    <!-- Basic table card start -->
                                    <div class="card">
                                       <div class="card-header">
                                          <h5>WALLET REQUEST</h5>
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
                                                      <th>SL</th>
                                                      <th>Amount</th>
                                                      <th>TRN ID</th>
                                                      <th>Image</th>
                                                      <th>Date</th>
                                                      <th>Status</th>
                                                   </tr>
                                                </thead>
                                                <?php
                                                   $i=1;
                                                   $query = mysqli_query($con,"SELECT * FROM `wallet_request` WHERE `userid`='$userid' order by id desc");
                                                   if(mysqli_num_rows($query)>0){
                                                       while($row=mysqli_fetch_array($query)){
                                                           $amount = $row['amount'];
                                                           $trn_number = $row['trn_number'];
                                                           $receipt = $row['receipt'];
                                                           $date = $row['date'];
                                                           $status = $row['status'];
                                                   ?>
                                                <tr>
                                                   <td><?php echo $i ?></td>
                                                   <td><?php echo $amount ?></td>
                                                   <td><?php echo $trn_number ?></td>
                                                   <td> <a href="wallet_request_image/<?php echo $row['receipt'];?>"> <img src="wallet_request_image/<?php echo $row['receipt'];?>" style="width:50px;"></a></td>
                                                   <td><?php echo $date ?></td>
                                                   <td>
                                                      <?php    
                                                         if($status == 'pending'){
                                                             echo "<font color='orange'>Processing Please Wait...</font>";
                                                         } elseif($status == 'approved'){
                                                             echo "<font color='green'>Wallet Approved</font>";
                                                         } else {
                                                             echo "<font color='red'>Wallet Rejected</font>";
                                                         }
                                                         ?>
                                                   </td>
                                                </tr>
                                                <?php
                                                   $i++;
                                                   }
                                                   } else {
                                                   ?>
                                                <tr>
                                                   <td colspan="6">Sorry you have no USDT requests.</td>
                                                </tr>
                                                <?php
                                                   }
                                                   ?>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
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