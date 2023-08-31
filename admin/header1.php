<?php
include "connection.php";
session_start();
    
    if(!isset($_SESSION['log']))
    {
        header("location:../user/login.php");
    }
    else
    {
        $log = $_SESSION['log'];
        //echo "<script>alert('$log');</script>";
        $qry1="SELECT * FROM tbl_login WHERE l_email='$log'";
        $run1=mysqli_query($con,$qry1);
        $result1=mysqli_fetch_array($run1);
        $img=$result1['l_img'];
        $name=$result1['l_name'];
        $email=$result1['l_email'];
        $phone=$result1['l_phone'];
        $add=$result1['l_add'];
        $id=$result1['l_id'];
        $status=$result1['l_status'];
        $l_pass=$result1['l_pass'];
    }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->
</head> 
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">
			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="index.php">Admin <span>Panel</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="index.php"><i class="lnr lnr-home"></i> </a>
			</div>
			<!--logo and iconic logo end-->
			<div class="left-side-inner">
				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="menu-list">
							<a href="#"><i class="fa fa-user-o fa-lg" aria-hidden="true"></i>
								<span>Admin</span></a>
								<ul class="sub-menu-list">
									<li><a href="add_admin.php">Add Admin</a> </li>
									<li><a href="manage_admin.php">Manage Admin</a></li>
								</ul>
						</li>
						<li class="menu-list">
							<a href="#"><i class="fa fa-users fa-lg" aria-hidden="true"></i>
								<span>User</span></a>
								<ul class="sub-menu-list">
									<li><a href="manage_user.php">Manage User</a></li>
								</ul>
						</li>
						<li class="menu-list">
							<a href="#"><i class="fa fa-check-square fa-lg" aria-hidden="true"></i>
								<span>Workout Category</span></a>
								<ul class="sub-menu-list">
									<li><a href="add_cat.php">Add Workout Category</a> </li>
									<li><a href="manage_cat.php">Manage Workout Category</a></li>
								</ul>
						</li>
						<li class="menu-list">
							<a href="#"><i class="fa fa-area-chart fa-lg" aria-hidden="true"></i>
								<span>Workout</span></a>
								<ul class="sub-menu-list">
									<li><a href="add_workout.php">Add Workout</a> </li>
									<li><a href="manage_workout.php">Manage Workout</a></li>
								</ul>
						</li>
						<li class="menu-list">
							<a href="#"><i class="fa fa-music fa-lg" aria-hidden="true"></i>
								<span>Music</span></a>
								<ul class="sub-menu-list">
									<li><a href="add_music.php">Add Music</a> </li>
									<li><a href="manage_music.php">Manage Music</a></li>
								</ul>
						</li>
						<li class="menu-list">
							<a href="#"><i class="fa fa-cutlery fa-lg" aria-hidden="true"></i>
								<span>Diet Plan</span></a>
								<ul class="sub-menu-list">
									<li><a href="add_diet.php">Add Diet Plan</a> </li>
									<li><a href="manage_diet.php">Manage Diet Plan</a></li>
								</ul>
						</li>

						<li class="menu-list">
							<a href="#"><i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
								<span>Feedback</span></a>
								<ul class="sub-menu-list">
									<li><a href="feedback.php">Manage Feedback</a> </li>
									
								</ul>
						</li>
						<li class="menu-list">
							<a href="#"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
								<span>Contact</span></a>
								<ul class="sub-menu-list">
									<li><a href="contact.php">Manage Contact</a> </li>
								</ul>
						</li>
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->
			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<img src="<?php echo $img; ?>" height="35px" width="35px">
										 <div class="user-name">
											<p><?php echo $name; ?><span>Admin</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="edit_profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
									<li> <a href="change_pass.php"><i class="fa fa-lock"></i> Change Password</a> </li>
									<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
							<div class="clearfix"></div>
						</ul>
					</div>		
					
					<div class="clearfix"></div>
				</div>
			  </div>
			<!--notification menu end -->
			</div>
