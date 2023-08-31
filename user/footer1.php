<!-- footer -->
    <footer class="footer-content py-4">
        <div class="container-fluid py-lg-4 inner-sec-w3ls">
            <div class="row">
               <div class="col-lg-1 mt-md-0 mt-5"> </div>
                <div class="col-lg-3 mt-md-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">Navigation</h3>
                        <hr>
                        <div class="row">
                            <ul class="col-6 list-info-w3pvt links">
                                <li>
                                    <a href="index1.php">Home</a>
                                </li>
                                <li>
                                    <a href="about.php">About Us</a>
                                </li>
                                <li>
                                    <a href="contact.php">Contact</a>
                                </li>
                                <li>
                                    <a href="login.php">Sign In</a>
                                </li>
                                <li>
                                    <a href="register.php">Sign Up</a>
                                </li>
                            </ul>
                            <ul class="col-6 list-info-w3pvt links">
                                <?php
									$qry1="SELECT * FROM tbl_cat WHERE cat_status='1'";
									$run1=mysqli_query($con,$qry1);
									while($result1=mysqli_fetch_array($run1))
									{
										$cat_id=$result1['cat_id'];
								?>
                                <li>
                                    <a href="workout_cat.php?id=<?php echo $cat_id; ?>.php">
                                        <?php echo $result1['cat_name']; ?>
                                    </a>
                                </li>
                                <?php
									}
								?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 mt-lg-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">Contact Us</h3>
                        <hr>
                        <div class="last-w3layouts-contact">
                            <p>
                                <a href="mailto:example@email.com">fitfactory@gmail.com</a>
                            </p>
                        </div>
                        <div class="last-w3layouts-contact my-2">
							<p>99999 99999</p>
                        </div>
                        <div class="last-w3layouts-contact">
                            <p>Swastik Char Rasta
                                <br>Ahmedabad, Gujarat</p>
                        </div>
                    </div>
                </div>
                   <div class="col-lg-5 mt-lg-0 mt-5">
                    <div class="footer-w3pvt">
                        <h3 class="mb-3 w3pvt_title">About Fit Factory</h3>
                        <hr>
                        <div class="footer-text">
                            <p>There is no limit to what you are capable of, physically and mentally.  These Dance, HIIT, and Tone workouts are led by Broadway performers, professional dancers, and former Rockettes - all trainers certified through nationally accredited organizations. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
   <!-- //footer -->
</body>
</html>
