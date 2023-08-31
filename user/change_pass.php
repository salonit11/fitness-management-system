<?php
    include "header3.php";
    $qry1="SELECT * FROM tbl_login WHERE l_id='$id'";
	$run1=mysqli_query($con,$qry1);
	$result1=mysqli_fetch_array($run1);
?>
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Change Password</h3>
            <div class="login px-sm-4 mx-auto mw-100 login-wrapper">
                <form class="login-wrapper w3pvt_mail_grid_right" action="" method="post">
                    <div class="form-group">
                        <label for="pass"><b>Old Password</b></label>
						<input type="password" class="form-control" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						<br/>
						<label for="pass"><b>New Password</b></label>
						<input type="password" class="form-control" name="pass1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						<br/>
						<label for="pass"><b>Confirm Password</b></label>
						<input type="password" class="form-control" name="pass2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
						<br/>
						<center><button type="submit" name="submit" class="btn btn-primary submit mt-2 read-more">Update</button></center>
                </form>
            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!--/help-line -->
<?php
    include "footer2.php";
    if(isset($_POST['submit']))
  {
    $pass=$_POST['pass']; 
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    if($l_pass==$pass)
    {
      if($pass1==$pass2)
      {
        $qry1="UPDATE tbl_login SET l_pass='$pass2' WHERE l_id='$id'";
        $run1=mysqli_query($con,$qry1);
        if($run1)
        {
          echo "<script> alert('Password Changed'); </script>";
          echo "<script> location.replace('index2.php'); </script>";  
        }
      }
      else
      {
        echo "<script> alert('Both the Passwords are Different'); </script>";
        echo "<script> location.replace('change_pass.php'); </script>";
      }
    }
    else
    {
      echo "<script> alert('Incorrect Old Password'); </script>";
      echo "<script> location.replace('change_pass.php'); </script>";
    }
  }
?>