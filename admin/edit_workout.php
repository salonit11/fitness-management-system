<?php
	include "header1.php";
	if(isset($_GET['id']))
       {
			$w_id=$_GET['id']."";
			//echo "<script>alert('$d_id');</script>";
       }
       $qry1="SELECT * FROM tbl_workout WHERE w_id='$w_id'";
       $run1=mysqli_query($con,$qry1);
       $result1=mysqli_fetch_array($run1);
       $cat_id=$result1['cat_id'];

       $qry2="SELECT * FROM tbl_cat WHERE cat_id='$cat_id'";
       $run2=mysqli_query($con,$qry2);
       $result2=mysqli_fetch_array($run2);
       $cat_name=$result2['cat_name'];
?>
	<div id="page-wrapper">
		<div class="graphs">
			<h3 class="blank1">EDIT WORKOUT</h3><br/>
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>Select Category:</h4></label>
							<div class="col-sm-8">
								<select name="cat_id" class="form-control1">
									<option value="<?php echo $cat_id; ?>"><?php echo $cat_name; ?></option>
									<?php
										$qry3="SELECT * FROM tbl_cat WHERE cat_status='1' AND cat_id!='$cat_id'";
										$run3=mysqli_query($con,$qry3);
										while($result3=mysqli_fetch_array($run3))
										{
									?>
									<option value="<?php echo $result3['cat_id']; ?>"><?php echo $result3['cat_name']; ?></option>
									<?php
										}	
									?>
								</select>
						</div>
						</div><br/>
						<div class="form-group">
							<label for="inputPassword" class="col-sm-2 control-label"><h4>Workout Name:</h4></label>
								<div class="col-sm-8">
									<input type="text" name="name" class="form-control1" id="inputPassword" value="<?php echo $result1['w_name']; ?>" required="">
								</div>
						</div><br/>
						<div class="form-group">
							<label for="inputPassword" class="col-sm-2 control-label"><h4>Workout Time:</h4></label>
								<div class="col-sm-8">
									<input type="time" name="time" class="form-control1" id="inputPassword" value="<?php echo $result1['w_time']; ?>" required="">
								</div>
						</div><br/>
						<div class="form-group">
							<label for="inputPassword" class="col-sm-2 control-label"><h4>New Image:</h4></label>
								<div class="col-sm-8">
									<input type="file" name="img" class="form-control1" id="inputPassword" >
								</div>
						</div><br/>
						<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>Current Image:</h4></label>
								<div class="col-sm-8">
									<img src="<?php echo $result1['w_img']; ?>" name="img" height ="100px" />
								</div>
						</div><br/>	
						<div class="form-group">
							<label for="txtarea1" class="col-sm-2 control-label"><h4>Description:</h4></label>
								<div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1"><?php echo $result1['w_desc']; ?></textarea></div></div>
							<br/>
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
        $cat_id=$_POST['cat_id'];
        $name=$_POST['name'];
        $time=$_POST['time'];
        $desc=$_POST['desc'];
        $img="photos/".$_POST['img'];
       

        $qry4="UPDATE tbl_workout SET cat_id='$cat_id', w_name='$name', w_time='$time', w_desc='$desc', w_img='$img' WHERE w_id='$w_id'";
        $run4=mysqli_query($con,$qry4);

        if($run4)
        {
            echo ("<script>location.href='manage_workout.php'</script>");
        }

    }
?>