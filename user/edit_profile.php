<?php
    include "header3.php";
    $qry1="SELECT * FROM tbl_login WHERE l_id='$id'";
	$run1=mysqli_query($con,$qry1);
	$result1=mysqli_fetch_array($run1);
?>
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Edit Profile</h3>
            <div class="login px-sm-4 mx-auto mw-100 login-wrapper">
                <form class="login-wrapper w3pvt_mail_grid_right" action="" method="post">
                    <div class="form-group">
                        <label class="mb-2"><b>Name</b></label>
                        <input type="text" name="name" class="form-control" value="<?php echo $result1['l_name']; ?>" required="">
						<br/>
                        <label for="email"><b>Email</b></label>
                        <input type="text" class="form-control" class="form-control" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" value="<?php echo $result1['l_email']; ?>" required>
						<br/>
                        <label for="phone"><b>Phone</b></label>
                        <input type="text" class="form-control" value="<?php echo $result1['l_phone']; ?>" name="phone"  pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile number starting with 7 or 8 or 9' required>
						<br/>
                        <label for="add"><b>Address</b></label>
                        <textarea rows="3" name="add" class="form-control" required><?php echo $result1['l_add']; ?></textarea>
						<br/>
                        <label for="image"><b>Current Image</b></label>
                        <img src="<?php echo $result1['l_img']; ?>" width="100px" height="100px">
						<br/>
                        <label for="image"><b>Profile Pic</b></label>
                        <input type="file" class="form-control" name="image">
                        <br/>
                        <label class="mb-2"><b>Height</b> <font color="red"> * In Centimeter </font></label>
                        <input type="text" name="height" class="form-control" value="<?php echo $result1['l_height']; ?>" required="">
						<br/>
						<label class="mb-2"><b>Weight</b> <font color="red"> * In Kg </font></label>
                        <input type="text" name="weight" class="form-control" value="<?php echo $result1['l_weight']; ?>" required="">
						<br/>
                    </div>
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
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$add=$_POST['add'];
		$height=$_POST['height'];
		$weight=$_POST['weight'];
		$image=$_POST['image'];
			//echo "Hello".$image;
		if($image=="")
		{
			$qry1="UPDATE tbl_login SET l_email='$email', l_name='$name', l_phone='$phone', l_add='$add',l_height='$height',l_weight='$weight' WHERE l_id='$id'";
			$run1=mysqli_query($con,$qry1);
			if($run1)
			{
				echo "<script> alert('Profile Updated'); </script>";
				echo "<script> location.replace('index2.php'); </script>";  
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
			$qry1="UPDATE tbl_login SET l_email='$email', l_name='$name', l_phone='$phone', l_add='$add', l_img='$location', l_height='$height', l_weight='$weight' WHERE l_id='$id'";
			$run1=mysqli_query($con,$qry1);
			if($run1)
			{
				echo "<script> alert('Profile Updated'); </script>";
				echo "<script> location.replace('index2.php'); </script>";  
			}
			else
			{
				echo "<script> alert('Profile Not Updated'); </script>";
				echo "<script> location.replace('edit_profile.php'); </script>";  
			} 
		}
	}
?>