<?php
	include "connection.php";
	session_start();
	if(!isset($_SESSION['log']))
	{
		header("location:login.php");
	}
	else
	{
		$log = $_SESSION['log'];
		//echo "<script>alert('$log');</script>";
		$qry1="SELECT * FROM tbl_login WHERE l_email='$log'";
		$run1=mysqli_query($con,$qry1);
		$result1=mysqli_fetch_array($run1);
		$img=$result1['l_img'];
		$id=$result1['l_id'];
		$name=$result1['l_name'];
		$l_pass=$result1['l_pass'];
		//echo "<script> alert('$log'); </script>";
	}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Fit Factory</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Yoga Lite Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="css/responsive.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
</head>
<body>
    <!-- //header -->
    <header class="py-sm-3 pt-3 pb-2" id="home">
        <div class="container">
            <!-- nav -->
            <div class="top d-md-flex">
                <div id="logo">
                    <h1><a href="index1.php"><b><span class="fa-3x">F</span>IT FACTORY</b></a></h1>
                </div>
                <div class="search-form mx-md-auto">
                    <div class="form-w3layouts-grid">
                    </div>
                </div>
                <div class="forms mt-md-0 mt-2">
					<h5 style="color:#FFC000; font-family:arial; text-align:right;">Hello, <?php echo $name; ?>..!<img src="<?php echo $img;?>" height="50px" class="btn"></h5>
                    <a href="edit_profile.php" class="btn"><span class="fa fa-user-circle fa-lg"></span> Edit Profile</a>
                    <a href="change_pass.php" class="btn"><span class="fa fa-lock fa-lg"></span> Change Password</a>
                    <a href="logout.php" class="btn"><span class="fa fa-arrow-right fa-lg"></span> Sign Out</a>
                </div>
            </div>
            <nav class="text-center">
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu" style="color:black; font-family:arial">
                    <li class="active"><a href="index2.php">HOME</a></li>
                    <li>
                        <!-- First Tier Drop Down -->
                        <label style="letter-spacing:1px">WORKOUT <span class="fa fa-angle-down" aria-hidden="true"></label></span>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <?php
								$qry1="SELECT * FROM tbl_cat WHERE cat_status='1'";
								$run1=mysqli_query($con,$qry1);
								while($result1=mysqli_fetch_array($run1))
								{
									$cat_id=$result1['cat_id'];
							?>
                            <li><a href="workout_cat2.php?id=<?php echo $cat_id; ?>.php" class="drop-text"><?php echo $result1['cat_name']; ?></a></li>
							<?php
								}
							?>
						</ul>
					</li>
					<li><a href="listen_music2.php">MUSIC</a></li>
                    <li>
                        <!-- First Tier Drop Down -->
                        <label style="letter-spacing:1px">DIET PLAN <span class="fa fa-angle-down" aria-hidden="true"></label></span>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <li><a href="breakfast.php">BREAKFAST</a></li>
                            <li><a href="lunch.php">LUNCH</a></li>
                            <li><a href="dinner.php">DINNER</a></li>
                        </ul>
					</li>
					<li><a href="set_remainder.php">SET WATER REMINDER</a></li>
					<li><a href="view_remainder.php">VIEW WATER REMINDER</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
					<li><a href="bodyprofile.php">Your Body Profile</a></li>
					<li><a href="contact.php">CONTACT US</a></li>
				</ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->
	