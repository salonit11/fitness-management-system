<?php
    include "header1.php";
?>
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Login Now</h3>
            <div class="login px-sm-4 mx-auto mw-100 login-wrapper">
                <form class="login-wrapper w3pvt_mail_grid_right" action="check_login.php" method="post">
                    <div class="form-group">
                        <label class="mb-2"><b>Email Address</b></label>
                        <input type="email" name="email" class="form-control" required="">
                    </div>
                    <div class="form-group">
                        <label class="mb-2"><b>Password</b></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required="">
                    </div>
                    <center><button type="submit" name="submit" class="btn btn-primary submit mt-2 read-more">Login</button></center><br/>
                    <p>
						<a href="register.php"> Don't have an Account? <b>Sign Up</b></a><br/><br/>
						<a href="forget.php"> Forget Password? <b>Reset Again</b></a>
					</p>
                </form>
            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!--/help-line -->
<?php
    include "footer1.php";
?>