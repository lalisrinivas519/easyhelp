<nav class="pcoded-navbar">
   <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
   <div class="pcoded-inner-navbar main-menu">
      <div class="">
         <div class="main-menu-header">
            <img class="img-80 img-radius" src="images/profile.jpg" alt="User-Profile-Image">
            <div class="user-details">
               <span id="more-details">USER ID = "<?php echo $userid?>"</span>
            </div>
         </div>
         
      </div>
      <div class="p-15 p-b-0">
         <form class="form-material">
            <div class="form-group form-primary">
               <input type="text" name="footer-email" class="form-control" required="">
               <span class="form-bar"></span>
               <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
            </div>
         </form>
      </div>
      <ul class="pcoded-item pcoded-left-item">
         <li class="active">
            <a href="home.php" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
            <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
            <span class="pcoded-mcaret"></span>
            </a>
         </li>
         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
            <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Profile</span>
            <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
               <li class=" ">
                  <a href="edit_profile.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Edit Profile</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="edit_password.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Edit Password</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
            </ul>
         </li>
         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
            <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">KYC</span>
            <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
               <li class=" ">
                  <a href="update_adhar.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Update Aadhaar</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="update_pan.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Update Pan</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="update_bank_details.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Update Bank Details</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
            </ul>
         </li>
      </ul>
      <ul class="pcoded-item pcoded-left-item">
         <li>
            <a href="wallet_request.php" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Wallet Request</span>
            <span class="pcoded-mcaret"></span>
            </a>
         </li>
         <li>
            <a href="withdraw_report.php" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Withdraw Report</span>
            <span class="pcoded-mcaret"></span>
            </a>
         </li>
         <li>
            <a href="active_now.php" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Active Now</span>
            <span class="pcoded-mcaret"></span>
            </a>
         </li>
         <li>
            <a href="self_active_list.php" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Self Active List</span>
            <span class="pcoded-mcaret"></span>
            </a>
         </li>
         <li>
            <a href="self_repurchase.php" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Self Repurchase List</span>
            <span class="pcoded-mcaret"></span>
            </a>
         </li>
         <li>
            <a href="team_active_list.php" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Team Active List</span>
            <span class="pcoded-mcaret"></span>
            </a>
         </li>
         <li>
            <a href="team_repurchase.php" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
            <span class="pcoded-mtext" data-i18n="nav.form-components.main">Team Repurchase List</span>
            <span class="pcoded-mcaret"></span>
            </a>
         </li>
      </ul>
      <ul class="pcoded-item pcoded-left-item">
         <li class="pcoded-hasmenu ">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
            <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Income Menu</span>
            <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
               <li class="">
                  <a href="direct_referral.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Direct Referral</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class="">
                  <a href="matching_referral.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Matching Referral</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class="">
                  <a href="repurchase_income.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Repurchase Income</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class="pcoded-hasmenu ">
                  <a href="javascript:void(0)" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main">Promotional Income</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
                  <ul class="pcoded-submenu">
                     <li class="">
                        <a href="asm.php" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">ASM</span>
                        <span class="pcoded-mcaret"></span>
                        </a>
                     </li>
                     <li class="">
                        <a href="sm.php" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">SM</span>
                        <span class="pcoded-mcaret"></span>
                        </a>
                     </li>
                     <li class="">
                        <a href="ssm.php" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">SSM</span>
                        <span class="pcoded-mcaret"></span>
                        </a>
                     </li>
                     <li class="">
                        <a href="bm.php" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">BM</span>
                        <span class="pcoded-mcaret"></span>
                        </a>
                     </li>
                     <li class="">
                        <a href="dm.php" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">DM</span>
                        <span class="pcoded-mcaret"></span>
                        </a>
                     </li>
                  </ul>
               </li>
            </ul>
         </li>
      </ul>
      <ul class="pcoded-item pcoded-left-item">
         <li class="pcoded-hasmenu">
            <a href="javascript:void(0)" class="waves-effect waves-dark">
            <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
            <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Level Team</span>
            <span class="pcoded-mcaret"></span>
            </a>
            <ul class="pcoded-submenu">
               <li class=" ">
                  <a href="level_01.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Level 01</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="level_02.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Level 02</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="level_03.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Level 03</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="level_04.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Level 04</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="level_05.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Level 05</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="level_06.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Level 06</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="level_07.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Level 07</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="level_08.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Level 08</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="level_09.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Level 09</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="level_10.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Level 10</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="level_11.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Level 11</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
               <li class=" ">
                  <a href="level_12.php" class="waves-effect waves-dark">
                  <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                  <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Level 12</span>
                  <span class="pcoded-mcaret"></span>
                  </a>
               </li>
            </ul>
         </li>
		 <li>
         <a href="award_achieved.php" class="waves-effect waves-dark">
         <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
         <span class="pcoded-mtext" data-i18n="nav.form-components.main">Award Achieved</span>
         <span class="pcoded-mcaret"></span>
         </a>
      </li>
      <li>
         <a href="logout.php" class="waves-effect waves-dark">
         <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
         <span class="pcoded-mtext" data-i18n="nav.form-components.main">Log Out</span>
         <span class="pcoded-mcaret"></span>
         </a>
      </li>
      </ul>
      
   </div>
</nav>