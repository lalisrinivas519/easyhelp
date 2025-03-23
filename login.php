<!DOCTYPE html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <?php include("php_include/head.php")?>
   </head>
   <body class="page-template page-template-page-templates page-template-organia-home page-template-page-templatesorgania-home-php page page-id-1054 theme-organia woocommerce-no-js mega-menu-primary-menu active_header_181 elementor-default elementor-kit-7 elementor-page elementor-page-1054">
 <?php include("php_include/loader.php")?>
 
      <?php include("php_include/header.php")?>
      <section class="organia_home_page" style>
         <div data-elementor-type="wp-page" data-elementor-id="1054" class="elementor elementor-1054" data-elementor-settings="[]">
            <div class="elementor-section-wrap">
                <section class="page_banner" style>
         <div class="container largeContainer">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h2 class="banner-title">Login</h2>
                  <p class="breadcrumbs"><a href="index.php" rel="v:url">Home</a> / Login</p>
               </div>
            </div>
         </div>
      </section><br><br>
	  <section class="organia_full_width_page">
         <div data-elementor-type="wp-page" data-elementor-id="109" class="elementor elementor-109" data-elementor-settings="[]">
            <div class="elementor-section-wrap">
              
               <center>
         <div style="width:420px; background: ; color:white; position:relative; border-radius:20px; padding:30px 40px;">
            <form action="login_process.php" method="POST">
               <h1 style="font-size:34px; color:#f06930;" >Login Here!</h1>
			
			    
               <div  style="width:100%; height:50px; margin:30px 0;" >
                  <input type="text" placeholder="Enter UserId" name="userid" required style="width:110%; height:100%; background:#edbb5c; border:none; outline:none; border: 2px solid rgba(255,255,255,.2); border-radius:40px; padding:20px 45px 20px 20px;  " >
                  <i class='bx bx-user' style="position:absolute; right:55px; top:27%; transform:translateY(-50%); font-size:20px; color:black;"></i>
               </div>
               <div  style="width:100%; height:50px; margin:30px 0;" >
                  <input type="password" placeholder="Enter Password" name="password" required style="width:110%; height:100%; background:#edbb5c; border:none; outline:none; border: 2px solid rgba(255,255,255,.2); border-radius:40px; padding:20px 45px 20px 20px;  " >
                  <i class='bx bx-user' style="position:absolute; right:55px; top:27%; transform:translateY(-50%); font-size:20px; color:black;"></i>
               </div>
               <div class="forgot-passowrd clearfix">
                                 <a href="forgot.php"><font color="black">Forget Password?</font></a>
                              </div>
               <button type="submit" class="btn btn-success"  name="submit" style="width:80%; height:45px; background:#f06930; border:none; outline:none; border-radius:40px; box-shadow:0 0 10px rgba(0,0,0,.1); cursor:pointer: font-size:16px; font-weight:600; ">Submit</button>
            </form>
         </div>
      </center>
            </div>
         </div>
      </section>
     
             </div>
         </div>
      </section>
	  <?php include("php_include/footer.php")?>
      <?php include("php_include/all_js.php")?>
   </body>
</html>