<?php

	include "connection.php";
	if(isset($_POST['submit']))
		{
			session_start();
		
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$email = strtolower($_POST['email']);
		$add = $_POST['add'];
		$pass = $_POST['pass'];	
		$height = $_POST['height'];	
		$weight = $_POST['weight'];	
		$img = $_POST['image'];
		$image=basename($img);
		//echo $image."<br/>";
		$qry2="SELECT l_email from tbl_login WHERE l_email='$email'";
		
				$result2 = mysqli_query($con,$qry2);
				$c=mysqli_num_rows($result2);
		if($c>=1)
		{
			echo "<script>alert('Same Email Address Exists in Database');</script>";
			header("refresh:0; url=register.php");
		}

		else
		{	
			if($image)
			{
				$location="photos/".$image;
				//echo $location;
				$query = "INSERT INTO tbl_login(l_id,l_name,l_email,l_phone,l_pass,l_add,l_img,l_height,l_weight,l_role,l_status) VALUES('','$name','$email','$phone','$pass','$add','$location','$height','$weight','2','1')";
			
				$result = mysqli_query($con,$query);
					
				if(!$result)
				{
					echo "<script>alert('Not Inserted');</script>";
				}
				
				else
				{			
					header("refresh:0; url=login.php");	
				}
				
			}
			else
			{
				
				$location="photos/Default.png";
				//echo $location;
				$query = "INSERT INTO tbl_login(l_id,l_name,l_email,l_phone,l_pass,l_add,l_img,l_height,l_weight,l_role,l_status,l_active) VALUES('','$name','$email','$phone','$pass','$add','$location','$height','$weight','2','1')";
			
			$result = mysqli_query($con,$query);
				if(!$result)
				{
					echo "<script>alert('Not Inserted');</script>";
				}
				
				else
				{
					
					
					header("refresh:0; url=login.php");
					
				}
			}
		}
	
}
?>