<?php
    include "header1.php";
?>
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Signup Now</h3>
            <div class="login px-sm-4 mx-auto mw-100 login-wrapper">
                <form class="login-wrapper w3pvt_mail_grid_right" action="insert.php" method="post">
                    <div class="form-group">
                        <label><b>User Name</b></label>
                        <input class="form-control" type="text" name="name" required="">
                    </div><br/>
                    <div class="form-group">
                        <label><b>Email</b></label>
                        <input class="form-control" type="email"  name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div><br/>
                    <div class="form-group">
                        <label><b>Phone Number</b></label>
						<input type="text" class="form-control" name="phone"  pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile number starting with 7 or 8 or 9' required>
					</div><br/>
                    <div class="form-group">
                        <label class="mb-2"><b>Password</b></label>
                        <input type="password" class="form-control" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div><br/>
                    <div class="form-group">
                        <label class="mb-2"><b>Profile Pic</b></label>
                        <input type="file" class="form-control" name="image" required>
                    </div><br/>
                    <div class="form-group">
                        <label class="mb-2"><b>Address</b></label>
                        <textarea class="form-control" rows="2" name="add" required></textarea>
                    </div>
                    <div class="form-group">
                        <label><b>Height</b> <font color="red"> * In Centimeter </font></label>
                        <input class="form-control" type="number" name="height" required="">
                    </div><br/>
                    <div class="form-group">
                        <label><b>Weight</b> <font color="red"> * In Kg </font></label>
                        <input class="form-control" type="number" name="weight" required="">
                    </div><br/>
                    <center><button type="submit" name="submit" class="btn btn-primary submit mt-2 read-more">Sign Up</button></center><br/>
					<p>
                        <a href="login.php">Already having an Account? <b>Login</b></a>
                    </p>
                </form>
            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
<?php
	include "footer1.php";
?>
