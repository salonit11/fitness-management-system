<?php
    include "header.php";
?>
    <div class="main-content" id="home">
        <div class="overlay">
            <!-- //header -->
            <div class="container">
                <!-- /banner -->
                <div class="banner-info text-left">
                    <h3>Fill your Hearts and Minds</h3>
                    <div class="read-more-button">
                        <a href="about.php" class="read-more scroll btn">Read More </a> </div>
                </div>
            </div>
            <!-- //banner -->
        </div>
    </div>
    <!--// mian-content -->
    <!-- //about -->
    <section class="banner-bottom py-5">
        <div class="container py-md-5">
            <div class="row banner-grids mb-lg-5">
                <div class="col-lg-7 content-right">
                    <h3 class="title-w3pvt">About Fit Factory</h3><br/>
                    <h4>We will help to find health, to everyone.</h4>
                    <p class="mt-2 text-left">
                        There is no limit to what you are capable of, physically and mentally.  These Dance, HIIT, and Tone workouts are led by Broadway performers, professional dancers, and former Rockettes - all trainers certified through nationally accredited organizations. 
                    </p>
                    <div class="row stats text-left mt-5">
                        <div class="col-lg-4 counter">
                            <span class="fas fa-apple-alt"> Diet Plan</span>
                            <div class="counter-info">
                                <h5> 
								<?php
									$count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(d_id) FROM tbl_diet WHERE d_status='1'"));
									echo $count1[0];
								?>
								</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 counter two">
                            <span class="fas fa-walking"> Workout</span>
                            <div class="counter-info">
                                <h5>
                                <?php
									$count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(w_id) FROM tbl_workout WHERE w_status='1'"));
									echo $count1[0];
								?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-4 counter">
                            <span class="fas fa-headphones"> Music</span>
                            <div class="counter-info">
                                <h5>
                                <?php
									$count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(m_id) FROM tbl_music WHERE m_status='1'"));
									echo $count1[0];
								?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 content-left">
                    <img src="images/ab.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- /about -->
    <!-- /services -->
    <section class="services py-5" style="margin-top:-8%; ;">
        <div class="container py-md-5">
            <div class="row ab-info">
                <div class="col-lg-6 ab-content text-left pr-lg-5">
                    <h3 class="title-w3pvt">What Your Looking for?</h3><br/>
                    <h5>Out Workout Categories</h5>
                    Workout is any bodily activity that enhances or maintains physical fitness and overall health and wellness.It is performed for various reasons, to aid growth and improve strength, prevent aging, develop muscles and the cardiovascular system, hone athletic skills, weight loss or maintenance, improve health, or simply for enjoyment. Many individuals choose to exercise outdoors where they can congregate in groups, socialize, and improve well-being as well as mental health.
                </div>
                <?php
					$qry1="SELECT * FROM tbl_cat WHERE cat_status='1'";
					$run1=mysqli_query($con,$qry1);
                    while($result1=mysqli_fetch_array($run1))
                    {
						$cat_id=$result1['cat_id'];
                ?>
                <div class="col-lg-3 ab-content">
                    <div class="ab-content-inner">
                        <a href="workout_cat.php?id=<?php echo $cat_id; ?>.php"><img src="photos/w1.jpg" alt="news image" class="img-fluid"></a>
                        <div class="ab-info-con">
                            <h4> <?php echo $result1['cat_name']; ?></h4>
                            <a href="workout_cat.php?id=<?php echo $cat_id; ?>.php" class="read-more two btn m-0 px-3"><span class="fa fa-arrow-right fa-lg" aria-hidden="true"> </span></a>
                        </div>
                    </div>
                </div>
				<?php
                    }
                ?>
                </div>
            </div>
        </div>
    </section>
<?php
    include "footer1.php";
?>