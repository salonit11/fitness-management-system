<?php
	include "header1.php";
?>
	<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">ADD MUSIC</h3><br/>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="POST" action="">
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Music Name:</h4></label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="inputPassword" required="">
									</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Music Audio:</h4></label>
									<div class="col-sm-8">
										<input type="file" name="music" class="form-control1" id="inputPassword" required="">
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
        $music=$_POST['music'];
        $qry1="INSERT INTO tbl_music(m_id,m_name,m_audio,m_status)VALUES('','$name','$music','1')";
        $run1=mysqli_query($con,$qry1);
        if($run1)
        {
            echo ("<script>location.href='manage_music.php'</script>");
        }
        else
        {
            echo "<script>alert('Music not Added'); </script>";
            echo ("<script>location.href='add_music.php'</script>");
        }
    }
?>