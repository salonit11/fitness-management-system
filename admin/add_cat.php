<?php
	include "header1.php";
?>
	<div id="page-wrapper">
		<div class="graphs">
			<h3 class="blank1">ADD WORKOUT CATEGORY</h3><br/>
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" method="POST" action="">
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>Category Name:</h4></label>
								<div class="col-sm-8">
									<input type="text" name="name" class="form-control1" id="inputPassword" required="">
								</div>
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
        $name=$_POST['name'];
        $qry1="INSERT INTO tbl_cat(cat_id,cat_name,cat_status)VALUES('','$name','1')";
        $run1=mysqli_query($con,$qry1);
        if($run1)
        {
            echo ("<script>location.href='manage_cat.php'</script>");
        }
        else
        {
            echo "<script>alert('Category not Added'); </script>";
            echo ("<script>location.href='add_cat.php'</script>");
        }
    }
?>