<?php
	include "header1.php";
	 if(isset($_GET['id']))
       {
        $m_id=$_GET['id']."";
      //echo "<script>alert('$d_id');</script>";
       }
       $qry1="SELECT * FROM tbl_music WHERE m_id='$m_id'";
       $run1=mysqli_query($con,$qry1);
       $result1=mysqli_fetch_array($run1);
?>
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">EDIT MUSIC</h3><br/>
						<div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="POST" action="">
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Music Name:</h4></label>
									<div class="col-sm-8">
										<input type="text" name="name" class="form-control1" id="inputPassword" value="<?php echo $result1['m_name']; ?>" required="">
									</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>New Music Audio:</h4></label>
									<div class="col-sm-8">
										<input type="file" name="music" class="form-control1" id="inputPassword">
									</div>
								</div><br/>
								<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label"><h4>Current Music Audio:</h4></label>
									<div class="col-sm-8">
										<audio controls="controls" src="music\<?php echo $result1['m_audio'] ?>" >
                                              <source src="<?php echo $result1['m_audio'] ?>" type="audio/mp3">
                                        </audio>
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
        $music=$_POST['music'];
       

        $qry4="UPDATE tbl_music SET m_name='$name', m_audio='$music' WHERE m_id='$m_id'";
        $run4=mysqli_query($con,$qry4);

        if($run4)
        {
            echo ("<script>location.href='manage_music.php'</script>");
        }

    }
?>