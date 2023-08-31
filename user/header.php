<?php
    include "connection.php";
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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
                    <div class="form-w3layouts-grid"></div>
                </div>
                <div class="forms mt-md-0 mt-2">
                    <a href="login.php" class="btn"><span class="fa fa-user fa-lg"></span> Login</a>
                    <a href="register.php" class="btn"><span class="fa fa-pencil-square-o fa-lg"></span> Sign Up</a>
                </div> 
            </div>
            <nav class="text-center">
                <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu" style="font-family:arial; padding-right:10px; color:black">
                    <li><a href="index1.php">HOME</a></li>
					<li><a href="about.php">ABOUT US</a></li>
                    <li>
                        <!-- First Tier Drop Down -->
                        <label style="letter-spacing: 2px; font-family:arial; padding-right:30px; padding-left:30px;">WORKOUT <span class="fa fa-angle-down" aria-hidden="true"></label></span>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <?php
								$qry1="SELECT * FROM tbl_cat WHERE cat_status='1'";
								$run1=mysqli_query($con,$qry1);
								while($result1=mysqli_fetch_array($run1))
								{
									$cat_id=$result1['cat_id'];
							?>
                            <li><a href="workout_cat.php?id=<?php echo $cat_id; ?>.php" class="drop-text"><?php echo $result1['cat_name']; ?></a></li>
							<?php
								}
							?>
                        </ul>
					</li>
                    <li><a href="listen_music.php">MUSIC</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->