<?php
	include "header1.php";
?>
	<div id="page-wrapper">
		<div class="graphs">
			<h3 class="blank1">ADD WORKOUT</h3><br/>
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>Select Category:</h4></label>
									<div class="col-sm-8">
										<select name="cat_id" class="form-control1">
										<?php
											$qry1="SELECT * FROM tbl_cat WHERE cat_status='1'";
											$run1=mysqli_query($con,$qry1);
											while($result1=mysqli_fetch_array($run1))
											{
										?>
										<option value="<?php echo $result1['cat_id']; ?>"><?php echo $result1['cat_name']; ?></option>
										<?php
											}	
										?>
										</select>
									</div>
							</div><br/>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>Workout Name:</h4></label>
								<div class="col-sm-8">
									<input type="text" name="name" class="form-control1" id="inputPassword" required="">
								</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Workout Time:</h4></label>
									<div class="col-sm-8">
										<input type="time" name="time" class="form-control1" id="inputPassword" required="">
									</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Image:</h4></label>
									<div class="col-sm-8">
										<input type="file" name="img" class="form-control1" id="inputPassword" required="">
									</div>
								</div><br/>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label"><h4>Description:</h4></label>
									<div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
								</div><br/>
								<div class="form-group"><div class="col-sm-8">
									<button type="submit" name="submit" class="btn btn_5 btn-lg btn-info" style="margin-left: 70%;">ADD</button></div>
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
        $qry1="INSERT INTO tbl_workout(w_id,w_name,w_time,w_desc,w_status,cat_id,w_img)VALUES('','$name','$time','$desc','1','$cat_id','$img')";
        $run1=mysqli_query($con,$qry1);
        if($run1)
        {
            echo ("<script>location.href='manage_workout.php'</script>");
        }
        else
        {
            echo "<script>alert('Workout not Added'); </script>";
            echo ("<script>location.href='add_workout.php'</script>");
        }
    }
?>