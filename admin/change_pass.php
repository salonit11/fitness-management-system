<?php
	include "header1.php";
	$qry1="SELECT * FROM tbl_login WHERE l_id='$id'";
    $run1=mysqli_query($con,$qry1);
    $result1=mysqli_fetch_array($run1);
?>
	<div id="page-wrapper">
		<div class="graphs">
			<h3 class="blank1">CHANGE PASSWORD</h3><br/>
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>Old Password:</h4></label>
								<div class="col-sm-8">
									<input type="password" name="pass" class="form-control1" id="inputPassword" required="">
								</div>
							</div><br/>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>New Password:</h4></label>
								<div class="col-sm-8">
									<input type="password" name="pass1" class="form-control1" id="inputPassword" required="">
								</div>
							</div><br/>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>Confirm Password:</h4></label>
								<div class="col-sm-8">
									<input type="password" name="pass2" class="form-control1" id="inputPassword" required="">
								</div>
							</div><br/>
							<div class="form-group"><div class="col-sm-8">
								<button type="submit" name="submit" class="btn btn_5 btn-lg btn-info" style="margin-left: 70%;">Add</button></div>
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<!--footer section start-->
<?php
	include "footer1.php";
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
                    echo "<script> location.replace('index.php'); </script>";    
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