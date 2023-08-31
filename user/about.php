<?php
    include "header1.php";
?>
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
                            <span class="fas fa-apple-alt"></span>
                            <div class="counter-info">
                                <h5> <?php
                            $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(d_id) FROM tbl_diet WHERE d_status='1'"));
                         echo $count1[0];
                        ?></h5>
                                <p>Diet Plan</p>
                            </div>
                        </div>
                        <div class="col-lg-4 counter two">
                            <span class="fas fa-walking"></span>
                            <div class="counter-info">
                                <h5>
                                    <?php
                            $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(w_id) FROM tbl_workout WHERE w_status='1'"));
                         echo $count1[0];
                        ?>
                                </h5>
                                <p>Workout</p>
                            </div>
                        </div>
                        <div class="col-lg-4 counter">
                            <span class="fas fa-headphones"></span>
                            <div class="counter-info">
                                <h5>
                                    <?php
                            $count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(m_id) FROM tbl_music WHERE m_status='1'"));
                         echo $count1[0];
                        ?>
                                </h5>
                                <p>Music</p>
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
    <!--/testimonials -->
    <section class="testimonials py-5" id="testimonials">
        <div class="container py-md-5">
            <div class="header text-center">
                <h3 class="title-w3pvt two mb-lg-5 mb-4"> Client Reviews<span>.</span></h3>
            </div>
            <div class="row">
                <?php
					$qry1="SELECT * FROM tbl_Feedback WHERE f_status='1'";
					$run1=mysqli_query($con,$qry1);
					while($result1=mysqli_fetch_array($run1))
					{
						$l_id=$result1['l_id'];
						$qry2="SELECT * FROM tbl_login WHERE l_id='$l_id'";
						$run2=mysqli_query($con,$qry2);
						$result2=mysqli_fetch_array($run2);
                ?>
                <div class="col-lg-4 test-info text-left">
                    <p><span class="fa fa-quote-left"></span> <?php echo $result1['feedback']; ?> <span class="fa fa-quote-right"></span></p>
                    <div class="test-img text-right mb-3">
                        <img src="<?php echo $result2['l_img']; ?>" class="img-fluid" alt="user-image">
                    </div>
                    <h3 class="my-md-2 my-3 text-right"><?php echo $result2['l_name']; ?></h3>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!--//testimonials -->
<?php
    include "footer1.php";
?>