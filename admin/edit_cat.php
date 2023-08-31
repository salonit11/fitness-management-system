<?php
	include "header1.php";
	if(isset($_GET['id']))
    {
        $cat_id=$_GET['id']."";
		//echo "<script>alert('$d_id');</script>";
    }
    $qry1="SELECT * FROM tbl_cat WHERE cat_id='$cat_id'";
    $run1=mysqli_query($con,$qry1);
    $result1=mysqli_fetch_array($run1);
?>
	<div id="page-wrapper">
		<div class="graphs">
			<h3 class="blank1">EDIT WORKOUT CATEGORY</h3><br/>
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>Category Name:</h4></label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="inputPassword" value="<?php echo $result1['cat_name']; ?>" required="">
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
        $name = $_POST['name'];
        $qry4="UPDATE tbl_cat SET cat_name='$name'WHERE cat_id='$cat_id'";
        $run4=mysqli_query($con,$qry4);
        if($run4)
        {
            echo ("<script>location.href='manage_cat.php'</script>");
        }

    }
?>