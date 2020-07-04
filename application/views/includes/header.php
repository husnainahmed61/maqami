<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>H & H Marine Products</title>

	<!-- Favicon and touch icons -->
	<link rel="shortcut icon" href="<?=base_url();?>assets/images/ddd.png" type="image/x-icon">

	<!-- jquery-ui css -->
	<link href="<?=base_url();?>assets/css/jquery-ui.min.css" rel="stylesheet" >
	<!-- Bootstrap -->
	<link href="<?=base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
	<!-- Font Awesome -->
	<link href="<?=base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" >
	<!-- Themify icons -->
	<link href="<?=base_url();?>assets/themify-icons/themify-icons.min.css" rel="stylesheet" >
	<!-- Pe-icon -->
	<link href="<?=base_url();?>assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" >
	<!-- Data Tables -->
	<link href="<?=base_url();?>assets/plugins/datatables/dataTables.min.css" rel="stylesheet" />
	<!-- Theme style -->
	<link href="<?=base_url();?>assets/css/style-inventory.css" rel="stylesheet" >
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<link href="<?=base_url();?>assets/css/data.Tables.bootstrap.min.css" rel="stylesheet" >
	<!-- jQuery Lib -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Start Core Plugins-->
	<!-- jquery-ui -->
	<script src="<?=base_url();?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url();?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<!-- SlimScroll -->
	<script src="<?=base_url();?>assets/js/jquery.slimscroll.min.js" type="text/javascript"></script>
	<!-- FastClick -->
	<script src="<?=base_url();?>assets/js/fastclick.min.js" type="text/javascript"></script>
	<!-- AdminBD frame -->
	<script src="<?=base_url();?>assets/js/frame.min.js" type="text/javascript"></script>
	<!-- Sparkline js -->
	<script src="<?=base_url();?>assets/js/sparkline.min.js" type="text/javascript"></script>
	<!-- Counter js -->
	<!--<script src="<?=base_url();?>assets/js/waypoints.min.js" type="text/javascript"></script>-->
	<script src="<?=base_url();?>assets/js/jquery.counterup.min.js" type="text/javascript"></script>
	<!-- dataTables js -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js" type="text/javascript"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js" type="text/javascript"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js" type="text/javascript"></script>
	<!-- Dashboard js -->
	<script src="<?=base_url();?>assets/js/dashboard.min.js" type="text/javascript"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

	<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
	</style>
</head>
<body class="sidebar-mini">
<div class="wrapper">
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

			<span class="logo-lg" style="background-color:white;">
            <!-- normal logo -->
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
						</ul>
					</li>
					<li class="dropdown dropdown-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <i class="pe-7s-settings"></i></a>
						<ul class="dropdown-menu">
							<!-- <li><a href="#"><i class="pe-7s-users"></i>User Profile</a></li> -->
							<!--<li><a href="#"><i class="pe-7s-settings"></i>Change Password</a></li>-->
							<li><a href="<?=base_url();?>Login/Logout"><i class="pe-7s-key"></i>Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
