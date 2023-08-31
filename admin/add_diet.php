<?php
	include "header1.php";
?>
	<div id="page-wrapper">
		<div class="graphs">
			<h3 class="blank1">ADD DIET</h3><br/>
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>Select Type of Diet:</h4></label>
									<div class="col-sm-8">
										<select name="type" class="form-control1">
											<option value="nun"></option>
											<option value="Breakfast"><h5>BreakFast</h5></option>
											<option value="Lunch"><h5>Lunch</h5></option>		
											<option value="Dinner"><h5>Dinner</h5></option>								
										</select>
									</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Diet Food Name:</h4></label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="inputPassword" required="">
									</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Image:</h4></label>
									<div class="col-sm-8">
										<input type="file" name="img" class="form-control1" id="inputPassword" required="">
									</div>
								</div><br/>
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label"><h4>Diet Food Description:</h4></label>
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
    	$type=$_POST['type'];
        $name=$_POST['name'];
        $desc=$_POST['desc'];
        $img=$_POST['img'];
        $qry1="INSERT INTO tbl_diet(d_id,d_type,d_food,d_desc,d_img,d_status)VALUES('','$type','$name','$desc','$img','1')";
        $run1=mysqli_query($con,$qry1);
        if($run1)
        {
            echo ("<script>location.href='manage_diet.php'</script>");
        }
        else
        {
            echo "<script>alert('Diet Plan not Added'); </script>";
            echo ("<script>location.href='add_diet.php'</script>");
        }
    }
?>