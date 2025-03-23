<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>My Admin Login Page</title>
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
   </head>
   <body class="bg-gradient-primary" style="background-color: #1773eb;">
      <div class="container" style="background-color: #1773eb;">
      <!-- Outer Row -->
      <div class="row justify-content-center">
         <div class="col-lg-6">
            <div class="p-5">
               <div class="text-center">
                  <br><br><br><br><br><br><br><br><br><br><br><br>
                  <center>
                     <h1 class="h4 text-gray-900 mb-4"><font color="yellow">ADMIN LOGIN</font></h1>
                  </center>
               </div>
               <form method="POST" action="check_login.php" style="border:2px solid black; width:400px; margin:auto; padding:10px; background-color: lightblue; border-radius: 15px;">
               <center>
                  <h4>login</h4>
                  <div>
                     <input type="text" name="userid" placeholder="Enter User ID" style="width:250px; height:30px" required>
                  </div>
                  <br>
                  <div>
                     <input type="password" name="password" placeholder="password" style="width:250px; height:30px" required>
                  </div>
               </center>
               <br>
               <div>
                  <center>
                     <button type="submit" name="submit" style="background-color: yellow; height:40px; width:150px">SUBMIT</button>
                  </center>
                  <hr>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>
   </body>
</html>