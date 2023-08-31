<?php
	include "header1.php";
	$qry1="SELECT * FROM tbl_login WHERE l_id='$id'";
    $run1=mysqli_query($con,$qry1);
    $result1=mysqli_fetch_array($run1);
?>
	<div id="page-wrapper">
		<div class="graphs">
			<h3 class="blank1">EDIT PROFILE</h3><br/>
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>Name:</h4></label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="inputPassword" value="<?php echo $result1['l_name']; ?>" required="">
									</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Email:</h4></label>
									<div class="col-sm-8">
										<input type="email" name="email" class="form-control1" id="inputPassword" value="<?php echo $result1['l_email']; ?>" required="">
									</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Phone Number:</h4></label>
									<div class="col-sm-8">
										<input type="text" name="phone" class="form-control1" id="inputPassword" value="<?php echo $result1['l_phone']; ?>" required="">
									</div>
								</div><br/>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label"><h4>Address:</h4></label>
									<div class="col-sm-8"><textarea name="add" id="txtarea1" cols="50" rows="4" class="form-control1" ><?php echo $result1['l_add']; ?></textarea></div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Current Image:</h4></label>
										<div class="col-sm-8">
											<img src="<?php echo $img; ?>" width="120px" height="120px">
										</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Upload New Image:</h4></label>
									<div class="col-sm-8">
										<input type="file" class="form-control1" name="image">
									</div>
								</div><br/>
								<div class="form-group"><div class="col-sm-8">
									<button type="submit" name="submit" class="btn btn_5 btn-lg btn-info" style="margin-left: 70%;">UPDATE</button></div>
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

        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $add=$_POST['add'];
        $image=$_POST['image'];
        //echo "Hello".$image;
        if($image=="")
        {
            $qry1="UPDATE tbl_login SET l_email='$email', l_name='$name', l_phone='$phone', l_add='$add' WHERE l_id='$id'";
            $run1=mysqli_query($con,$qry1);
            if($run1)
            {
                echo "<script> alert('Profile Updated'); </script>";
                echo "<script> location.replace('index.php'); </script>";    
            }
            else
            {
                echo "<script> alert('Profile Not Updated'); </script>";
                echo "<script> location.replace('edit_profile.php'); </script>";    
            }
        }
        else
        {
            $location="photos/".$image;
            $qry1="UPDATE tbl_login SET l_email='$email', l_name='$name', l_phone='$phone', l_add='$add', l_img='$location' WHERE l_id='$id'";
            $run1=mysqli_query($con,$qry1);
            if($run1)
            {
                echo "<script> alert('Profile Updated'); </script>";
                echo "<script> location.replace('index.php'); </script>";    
            }
            else
            {
                echo "<script> alert('Profile Not Updated'); </script>";
                echo "<script> location.replace('edit_profile.php'); </script>";    
            }   
        }

    }
?>