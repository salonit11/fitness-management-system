<?php
	include "header1.php";
	 if(isset($_GET['id']))
       {
        $d_id=$_GET['id']."";
      //echo "<script>alert('$d_id');</script>";
       }
       $qry1="SELECT * FROM tbl_diet WHERE d_id='$d_id'";
       $run1=mysqli_query($con,$qry1);
       $result1=mysqli_fetch_array($run1);
?>
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">EDIT DIET PLAN</h3><br/>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="POST" action="">
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Diet Type:</h4></label>
										<div class="col-sm-8">
											<select name="type" class="form-control1">
												<option value="<?php echo $result1['d_type']; ?>"><?php echo $result1['d_type']; ?></option>
												<?php
													if($result1['d_type']=="Lunch")
													{
												?>
												<option value="Breakfast"><h5>BreakFast</h5></option>
												<option value="Dinner"><h5>Dinner</h5></option>
												<?php
													}
													else if($result1['d_type']=="Breakfast")
													{	
												?>
												<option value="Lunch"><h5>Lunch</h5></option>
												<option value="Dinner"><h5>Dinner</h5></option>
												<?php
													}
													else
													{
												?>
											<option value="Breakfast"><h5>Breakfast</h5></option>
											<option value="Lunch"><h5>Lunch</h5></option>
											<?php
												}
											?>
										</select>
									</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Diet Food Name:</h4></label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="inputPassword" value="<?php echo $result1['d_food']; ?>" required="">
									</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Diet Food Description:</h4></label>
									<div class="col-sm-8">
										<textarea name="desc" rows="4" class="form-control1" id="inputPassword" required=""><?php echo $result1['d_desc']; ?></textarea>
									</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Upload New Image:</h4></label>
									<div class="col-sm-8">
										<input type="file" name="img" class="form-control1" id="inputPassword">
									</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Current Image:</h4></label>
									<div class="col-sm-8">
										<img src="<?php echo "photos/".$result1['d_img']; ?>" height ="100px" />
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
        $type=$_POST['type'];
        $name=$_POST['name'];
        $desc=$_POST['desc'];
        $img=$_POST['img'];
        $qry4="UPDATE tbl_diet SET d_type='$type', d_food='$name', d_desc='$desc', d_img='$img' WHERE d_id='$d_id'";
        $run4=mysqli_query($con,$qry4);
        if($run4)
        {
            echo ("<script>location.href='manage_diet.php'</script>");
        }
    }
?>