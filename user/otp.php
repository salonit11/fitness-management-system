<?php
    include "header1.php";
	include "connection.php";
	if(isset($_GET['lid']))
    {
		$lid=$_GET['lid'];
    }
?>
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">OTP</h3>
            <div class="login px-sm-4 mx-auto mw-100 login-wrapper">
                <form class="login-wrapper w3pvt_mail_grid_right" action="" method="POST">
                    <div class="form-group">
                        <label class="mb-2"><b>Enter OTP</b></label>
                        <input type="text" name="otp" class="form-control" required="">
                    </div>
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
		$otp_enter=$_POST['otp'];
		$q1="SELECT * FROM tbl_otp ORDER BY o_id DESC LIMIT 1 ";
		$run=mysqli_query($con,$q1);
		$result=mysqli_fetch_array($run);
		$otp=$result['otp'];
		$lid=$result['l_id'];
			//echo "<script>alert('$otp'); </script>";
		if($otp==$otp_enter)
		{ 
			echo "<script>location.href='set_password.php?id=$lid'</script>";
		}
		else
		{
			echo "<script>alert('Incorrect OTP'); </script>";
			header("location:otp.php?id=".$lid);
				//echo $otp;
		}
	}
?>