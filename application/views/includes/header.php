<style>
   @media only screen and (max-width: 480px) {
  .hh-main{
            display: none;
        }
    }
</style>
<link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
<header class="main-header"> 
    <a href="#" class="logo" style="height: auto !important;"> 
        <span class="logo-mini">
            <!-- collapsed logo -->
            <img src="<?=base_url();?>assets/images/smalf.png" alt="" style=" width: 100%; height: 30px;">
        </span>
        <span class="logo-lg">
            <!-- normal logo -->
            <img src="<?=base_url();?>assets/images/bigfish.png" alt="" style="margin-top: 2px; width: 100px; height: 85px;">
        </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
         <!-- Sidebar toggle button -->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="pe-7s-keypad"></span>
        </a>
        
     <span style="position: absolute;"><h4 class="hh-main" style="font-family: 'Paytone One', sans-serif; font-size: 45px;color: #2a4715;position: relative;left:55%;">H & H Marine Products</h4></span>

        <div class="navbar-custom-menu">
           
            <ul class="nav navbar-nav">
                <!-- settings -->
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-bell-o" ></i></a>
                    <ul class="dropdown-menu">
                        <!-- <li><a href="#"><i class="pe-7s-users"></i>User Profile</a></li> -->
                        <li class="notification-line"><a href="#"><i class="fa fa-user"></i></i>Lorem Text Here.</a></li>
                        <li class="notification-line"><a href="#"><i class="fa fa-user"></i></i>Lorem Text Here.</a></li>
                        <li class="notification-line"><a href="#"><i class="fa fa-user"></i></i>Lorem Text Here.</a></li>
                        <li class="notification-line"><a href="#"><i class="fa fa-user"></i></i>Lorem Text Here.</a></li>
                        <li class="notification-line"><a href="#"><i class="fa fa-user"></i></i>Lorem Text Here.</a></li>
                    </ul>
                </li>
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <i class="pe-7s-settings"></i></a>
                    <ul class="dropdown-menu">
                        <!-- <li><a href="#"><i class="pe-7s-users"></i>User Profile</a></li> -->
                        <!--<li><a href="#"><i class="pe-7s-settings"></i>Change Password</a></li>-->
                        <li><a href="<?=base_url();?>Admin/Logout"><i class="pe-7s-key"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>