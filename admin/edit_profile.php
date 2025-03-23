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
                                    <li class="breadcrumb-item"><a href="#!">Edit Profile</a>
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
                                                <h5>EDIT PROFILE</h5>
                                             </div>
                                             <div class="card-block">
                                                <form method="POST" action="edit_profile.php">
                                                   <input type="hidden" name="userid" value="<?php echo $userid?>">
                                                   <div class="form-group">
                                                      <label for="name">Enter Name: </label>
                                                      <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" 
                                                         data-parsley-trigger="change"
                                                         data-parsley-range="[4, 20]"
                                                         required>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="email">Enter Email: </label>
                                                      <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email"
                                                         data-parsley-trigger="change"
                                                         required>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="mobile">Enter Phone Number: </label>
                                                      <input type="number" name="mobile" id="mobile" class="form-control" placeholder="Enter Phone Number"
                                                         data-parsley-trigger="change"
                                                         pattern="^[\d\+\-\.\(\)\/\s]*$"
                                                         required>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="gender">Gender: </label>
                                                      <select class="form-control" name="gender">
                                                         <option value="">---- Select Gender---- </option>
                                                         <option value="Male">Male</option>
                                                         <option value="Female">Female</option>
                                                         <option value="Others">Others</option>
                                                      </select>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="dob">Enter Date Of Birth: </label>
                                                      <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter Date Of Birth"
                                                         data-parsley-trigger="change"
                                                         data-parsley-range="[4, 20]"
                                                         required>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="address">Enter Address: </label>
                                                      <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address"
                                                         data-parsley-trigger="change"
                                                         data-parsley-range="[4, 20]"
                                                         required>
                                                   </div>
                                                   <div class="form-group" style="border:1px; solid black">
                                                      <label for="State">State: </label>
                                                      <select class="form-control" id="inputState" name="state">
                                                         <option value="SelectState">-----Select State-----</option>
                                                         <option value="Andra Pradesh">Andra Pradesh</option>
                                                         <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                         <option value="Assam">Assam</option>
                                                         <option value="Bihar">Bihar</option>
                                                         <option value="Chhattisgarh">Chhattisgarh</option>
                                                         <option value="Goa">Goa</option>
                                                         <option value="Gujarat">Gujarat</option>
                                                         <option value="Haryana">Haryana</option>
                                                         <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                         <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                         <option value="Jharkhand">Jharkhand</option>
                                                         <option value="Karnataka">Karnataka</option>
                                                         <option value="Kerala">Kerala</option>
                                                         <option value="Madya Pradesh">Madya Pradesh</option>
                                                         <option value="Maharashtra">Maharashtra</option>
                                                         <option value="Manipur">Manipur</option>
                                                         <option value="Meghalaya">Meghalaya</option>
                                                         <option value="Mizoram">Mizoram</option>
                                                         <option value="Nagaland">Nagaland</option>
                                                         <option value="Orissa">Orissa</option>
                                                         <option value="Punjab">Punjab</option>
                                                         <option value="Rajasthan">Rajasthan</option>
                                                         <option value="Sikkim">Sikkim</option>
                                                         <option value="Tamil Nadu">Tamil Nadu</option>
                                                         <option value="Telangana">Telangana</option>
                                                         <option value="Tripura">Tripura</option>
                                                         <option value="Uttaranchal">Uttaranchal</option>
                                                         <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                         <option value="West Bengal">West Bengal</option>
                                                         <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                                                         <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                         <option value="Chandigarh">Chandigarh</option>
                                                         <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                         <option value="Daman and Diu">Daman and Diu</option>
                                                         <option value="Delhi">Delhi</option>
                                                         <option value="Lakshadeep">Lakshadeep</option>
                                                         <option value="Pondicherry">Pondicherry</option>
                                                      </select>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="country">Country: </label>
                                                      <select id="country" name="country" class="form-control">
                                                         <option value="">---- Select Country---- </option>
                                                         <option value="Afghanistan">Afghanistan</option>
                                                         <option value="Åland Islands">Åland Islands</option>
                                                         <option value="Albania">Albania</option>
                                                         <option value="Algeria">Algeria</option>
                                                         <option value="American Samoa">American Samoa</option>
                                                         <option value="Andorra">Andorra</option>
                                                         <option value="Angola">Angola</option>
                                                         <option value="Anguilla">Anguilla</option>
                                                         <option value="Antarctica">Antarctica</option>
                                                         <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                         <option value="Argentina">Argentina</option>
                                                         <option value="Armenia">Armenia</option>
                                                         <option value="Aruba">Aruba</option>
                                                         <option value="Australia">Australia</option>
                                                         <option value="Austria">Austria</option>
                                                         <option value="Azerbaijan">Azerbaijan</option>
                                                         <option value="Bahamas">Bahamas</option>
                                                         <option value="Bahrain">Bahrain</option>
                                                         <option value="Bangladesh">Bangladesh</option>
                                                         <option value="Barbados">Barbados</option>
                                                         <option value="Belarus">Belarus</option>
                                                         <option value="Belgium">Belgium</option>
                                                         <option value="Belize">Belize</option>
                                                         <option value="Benin">Benin</option>
                                                         <option value="Bermuda">Bermuda</option>
                                                         <option value="Bhutan">Bhutan</option>
                                                         <option value="Bolivia">Bolivia</option>
                                                         <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                         <option value="Botswana">Botswana</option>
                                                         <option value="Bouvet Island">Bouvet Island</option>
                                                         <option value="Brazil">Brazil</option>
                                                         <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                         <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                         <option value="Bulgaria">Bulgaria</option>
                                                         <option value="Burkina Faso">Burkina Faso</option>
                                                         <option value="Burundi">Burundi</option>
                                                         <option value="Cambodia">Cambodia</option>
                                                         <option value="Cameroon">Cameroon</option>
                                                         <option value="Canada">Canada</option>
                                                         <option value="Cape Verde">Cape Verde</option>
                                                         <option value="Cayman Islands">Cayman Islands</option>
                                                         <option value="Central African Republic">Central African Republic</option>
                                                         <option value="Chad">Chad</option>
                                                         <option value="Chile">Chile</option>
                                                         <option value="China">China</option>
                                                         <option value="Christmas Island">Christmas Island</option>
                                                         <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                         <option value="Colombia">Colombia</option>
                                                         <option value="Comoros">Comoros</option>
                                                         <option value="Congo">Congo</option>
                                                         <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                         <option value="Cook Islands">Cook Islands</option>
                                                         <option value="Costa Rica">Costa Rica</option>
                                                         <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                         <option value="Croatia">Croatia</option>
                                                         <option value="Cuba">Cuba</option>
                                                         <option value="Cyprus">Cyprus</option>
                                                         <option value="Czech Republic">Czech Republic</option>
                                                         <option value="Denmark">Denmark</option>
                                                         <option value="Djibouti">Djibouti</option>
                                                         <option value="Dominica">Dominica</option>
                                                         <option value="Dominican Republic">Dominican Republic</option>
                                                         <option value="Ecuador">Ecuador</option>
                                                         <option value="Egypt">Egypt</option>
                                                         <option value="El Salvador">El Salvador</option>
                                                         <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                         <option value="Eritrea">Eritrea</option>
                                                         <option value="Estonia">Estonia</option>
                                                         <option value="Ethiopia">Ethiopia</option>
                                                         <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                         <option value="Faroe Islands">Faroe Islands</option>
                                                         <option value="Fiji">Fiji</option>
                                                         <option value="Finland">Finland</option>
                                                         <option value="France">France</option>
                                                         <option value="French Guiana">French Guiana</option>
                                                         <option value="French Polynesia">French Polynesia</option>
                                                         <option value="French Southern Territories">French Southern Territories</option>
                                                         <option value="Gabon">Gabon</option>
                                                         <option value="Gambia">Gambia</option>
                                                         <option value="Georgia">Georgia</option>
                                                         <option value="Germany">Germany</option>
                                                         <option value="Ghana">Ghana</option>
                                                         <option value="Gibraltar">Gibraltar</option>
                                                         <option value="Greece">Greece</option>
                                                         <option value="Greenland">Greenland</option>
                                                         <option value="Grenada">Grenada</option>
                                                         <option value="Guadeloupe">Guadeloupe</option>
                                                         <option value="Guam">Guam</option>
                                                         <option value="Guatemala">Guatemala</option>
                                                         <option value="Guernsey">Guernsey</option>
                                                         <option value="Guinea">Guinea</option>
                                                         <option value="Guinea-bissau">Guinea-bissau</option>
                                                         <option value="Guyana">Guyana</option>
                                                         <option value="Haiti">Haiti</option>
                                                         <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                         <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                         <option value="Honduras">Honduras</option>
                                                         <option value="Hong Kong">Hong Kong</option>
                                                         <option value="Hungary">Hungary</option>
                                                         <option value="Iceland">Iceland</option>
                                                         <option value="India" selected >India</option>
                                                         <option value="Indonesia">Indonesia</option>
                                                         <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                         <option value="Iraq">Iraq</option>
                                                         <option value="Ireland">Ireland</option>
                                                         <option value="Isle of Man">Isle of Man</option>
                                                         <option value="Israel">Israel</option>
                                                         <option value="Italy">Italy</option>
                                                         <option value="Jamaica">Jamaica</option>
                                                         <option value="Japan">Japan</option>
                                                         <option value="Jersey">Jersey</option>
                                                         <option value="Jordan">Jordan</option>
                                                         <option value="Kazakhstan">Kazakhstan</option>
                                                         <option value="Kenya">Kenya</option>
                                                         <option value="Kiribati">Kiribati</option>
                                                         <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                         <option value="Korea, Republic of">Korea, Republic of</option>
                                                         <option value="Kuwait">Kuwait</option>
                                                         <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                         <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                         <option value="Latvia">Latvia</option>
                                                         <option value="Lebanon">Lebanon</option>
                                                         <option value="Lesotho">Lesotho</option>
                                                         <option value="Liberia">Liberia</option>
                                                         <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                         <option value="Liechtenstein">Liechtenstein</option>
                                                         <option value="Lithuania">Lithuania</option>
                                                         <option value="Luxembourg">Luxembourg</option>
                                                         <option value="Macao">Macao</option>
                                                         <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                         <option value="Madagascar">Madagascar</option>
                                                         <option value="Malawi">Malawi</option>
                                                         <option value="Malaysia">Malaysia</option>
                                                         <option value="Maldives">Maldives</option>
                                                         <option value="Mali">Mali</option>
                                                         <option value="Malta">Malta</option>
                                                         <option value="Marshall Islands">Marshall Islands</option>
                                                         <option value="Martinique">Martinique</option>
                                                         <option value="Mauritania">Mauritania</option>
                                                         <option value="Mauritius">Mauritius</option>
                                                         <option value="Mayotte">Mayotte</option>
                                                         <option value="Mexico">Mexico</option>
                                                         <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                         <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                         <option value="Monaco">Monaco</option>
                                                         <option value="Mongolia">Mongolia</option>
                                                         <option value="Montenegro">Montenegro</option>
                                                         <option value="Montserrat">Montserrat</option>
                                                         <option value="Morocco">Morocco</option>
                                                         <option value="Mozambique">Mozambique</option>
                                                         <option value="Myanmar">Myanmar</option>
                                                         <option value="Namibia">Namibia</option>
                                                         <option value="Nauru">Nauru</option>
                                                         <option value="Nepal">Nepal</option>
                                                         <option value="Netherlands">Netherlands</option>
                                                         <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                         <option value="New Caledonia">New Caledonia</option>
                                                         <option value="New Zealand">New Zealand</option>
                                                         <option value="Nicaragua">Nicaragua</option>
                                                         <option value="Niger">Niger</option>
                                                         <option value="Nigeria">Nigeria</option>
                                                         <option value="Niue">Niue</option>
                                                         <option value="Norfolk Island">Norfolk Island</option>
                                                         <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                         <option value="Norway">Norway</option>
                                                         <option value="Oman">Oman</option>
                                                         <option value="Pakistan">Pakistan</option>
                                                         <option value="Palau">Palau</option>
                                                         <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                         <option value="Panama">Panama</option>
                                                         <option value="Papua New Guinea">Papua New Guinea</option>
                                                         <option value="Paraguay">Paraguay</option>
                                                         <option value="Peru">Peru</option>
                                                         <option value="Philippines">Philippines</option>
                                                         <option value="Pitcairn">Pitcairn</option>
                                                         <option value="Poland">Poland</option>
                                                         <option value="Portugal">Portugal</option>
                                                         <option value="Puerto Rico">Puerto Rico</option>
                                                         <option value="Qatar">Qatar</option>
                                                         <option value="Reunion">Reunion</option>
                                                         <option value="Romania">Romania</option>
                                                         <option value="Russian Federation">Russian Federation</option>
                                                         <option value="Rwanda">Rwanda</option>
                                                         <option value="Saint Helena">Saint Helena</option>
                                                         <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                         <option value="Saint Lucia">Saint Lucia</option>
                                                         <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                         <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                         <option value="Samoa">Samoa</option>
                                                         <option value="San Marino">San Marino</option>
                                                         <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                         <option value="Saudi Arabia">Saudi Arabia</option>
                                                         <option value="Senegal">Senegal</option>
                                                         <option value="Serbia">Serbia</option>
                                                         <option value="Seychelles">Seychelles</option>
                                                         <option value="Sierra Leone">Sierra Leone</option>
                                                         <option value="Singapore">Singapore</option>
                                                         <option value="Slovakia">Slovakia</option>
                                                         <option value="Slovenia">Slovenia</option>
                                                         <option value="Solomon Islands">Solomon Islands</option>
                                                         <option value="Somalia">Somalia</option>
                                                         <option value="South Africa">South Africa</option>
                                                         <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                         <option value="Spain">Spain</option>
                                                         <option value="Sri Lanka">Sri Lanka</option>
                                                         <option value="Sudan">Sudan</option>
                                                         <option value="Suriname">Suriname</option>
                                                         <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                         <option value="Swaziland">Swaziland</option>
                                                         <option value="Sweden">Sweden</option>
                                                         <option value="Switzerland">Switzerland</option>
                                                         <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                         <option value="Taiwan">Taiwan</option>
                                                         <option value="Tajikistan">Tajikistan</option>
                                                         <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                         <option value="Thailand">Thailand</option>
                                                         <option value="Timor-leste">Timor-leste</option>
                                                         <option value="Togo">Togo</option>
                                                         <option value="Tokelau">Tokelau</option>
                                                         <option value="Tonga">Tonga</option>
                                                         <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                         <option value="Tunisia">Tunisia</option>
                                                         <option value="Turkey">Turkey</option>
                                                         <option value="Turkmenistan">Turkmenistan</option>
                                                         <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                         <option value="Tuvalu">Tuvalu</option>
                                                         <option value="Uganda">Uganda</option>
                                                         <option value="Ukraine">Ukraine</option>
                                                         <option value="United Arab Emirates">United Arab Emirates</option>
                                                         <option value="United Kingdom">United Kingdom</option>
                                                         <option value="United States">United States</option>
                                                         <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                         <option value="Uruguay">Uruguay</option>
                                                         <option value="Uzbekistan">Uzbekistan</option>
                                                         <option value="Vanuatu">Vanuatu</option>
                                                         <option value="Venezuela">Venezuela</option>
                                                         <option value="Viet Nam">Viet Nam</option>
                                                         <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                         <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                         <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                         <option value="Western Sahara">Western Sahara</option>
                                                         <option value="Yemen">Yemen</option>
                                                         <option value="Zambia">Zambia</option>
                                                         <option value="Zimbabwe">Zimbabwe</option>
                                                      </select>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="pincode">Enter Pincode: </label>
                                                      <input type="number" name="pincode" id="pincode" class="form-control" placeholder="Enter Pincode"
                                                         data-parsley-trigger="change"
                                                         data-parsley-range="[4, 20]"
                                                         required>
                                                   </div>
                                                   <br>
                                                   <center>
                                                      <button type="submit" name="submit" value="" style="width:100px; height:50px; background-color: #1c1329; color: white;">Submit</button>
                                                   </center>
                                                </form>
                                                <?php
                                                   if(isset($_POST['submit'])){
                                                   	$userid=$_POST['userid'];
                                                   	$name=$_POST['name'];
                                                   	$email=$_POST['email'];
                                                   	$mobile=$_POST['mobile'];
                                                   	$gender=$_POST['gender'];
                                                   	$dob=$_POST['dob'];
                                                   	$address=$_POST['address'];
                                                   	$state=$_POST['state'];
                                                   	$country=$_POST['country'];
                                                   	$pincode=$_POST['pincode'];
                                                   	
                                                   		$query=mysqli_query($con,"UPDATE `admin` SET `name`='$name',`email`='$email',`mobile`='$mobile',`dob`='$dob',`gender`='$gender',
                                                   `address`='$address',`state`='$state',`country`='$country',`pincode`='$pincode' WHERE `userid`='$userid'");
                                                   		
                                                   		if($query){
                                                   			echo'<script>alert("updated succefully");window.location.assign*("edit_profile.php");</script>';
                                                   		}
                                                   		else{
                                                   			echo'<script>alert("Not updated");window.location.assign*("edit_profile.php");</script>';
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