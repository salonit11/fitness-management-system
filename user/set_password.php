<?php
    include "header1.php";
?>
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Change Password</h3>
            <div class="login px-sm-4 mx-auto mw-100 login-wrapper">
                <form class="login-wrapper w3pvt_mail_grid_right" action="" method="POST">
                    <div class="form-group">
                        <label class="mb-2"><b>New Password</b></label>
                        <input type="password" name="pass1" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required="">
                    </div><br/>
                    <div class="form-group">
                        <label class="mb-2"><b>Confirm Password</b></label>
                        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="pass2" class="form-control" required="">
                    </div><br/>
                    <center><button type="submit" name="submit" class="btn btn-primary submit mt-2 read-more">Next</button></center>
                </form>
            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!--/help-line -->
<?php
    include "footer1.php";
    if(isset($_POST['submit']))
	{
		$lid=$_GET['id'];
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];
			//echo "<script> alert($lid); </script>";
		if($pass1==$pass2)
		{
				//echo "<script> alert('$pass1'); </script>";
			$eqry="UPDATE tbl_login SET l_pass='$pass1' WHERE l_id='$lid'";
			$updated=mysqli_query($con,$eqry);
			if($updated)
			{
					//echo "<script>  alert('$lid'); </script>";
				echo '<script type="text/javascript">';
				echo 'window.location.href="login.php";';
				echo '</script>';
			}
		}
		else
		{
			echo "<script>  alert('Both the passwords are different'); </script>";
			header("Refresh: 0; url=set_password.php");
		}
	}
?>