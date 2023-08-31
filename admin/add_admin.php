<?php
	include "header1.php";
?>
	<div id="page-wrapper">
		<div class="graphs">
			<h3 class="blank1">ADD ADMIN</h3><br/>
				<div class="tab-content">
					<div class="tab-pane active" id="horizontal-form">
						<form class="form-horizontal" method="POST" action="insert_admin.php">
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>Name:</h4></label>
								<div class="col-sm-8">
									<input type="text" name="name" class="form-control1" id="inputPassword" required="">
								</div>
							</div><br/>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>Email:</h4></label>
								<div class="col-sm-8">
									<input type="email" name="email" class="form-control1" id="inputPassword" required="">
								</div>
							</div><br/>
							<div class="form-group">
								<label for="inputPassword" class="col-sm-2 control-label"><h4>Phone Number:</h4></label>
								<div class="col-sm-8">
									<input type="text" name="phone" class="form-control1" id="inputPassword" required="">
								</div>
							</div><br/>
							<div class="form-group">
								<label for="txtarea1" class="col-sm-2 control-label"><h4>Address:</h4></label>
								<div class="col-sm-8"><textarea name="addr" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
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
?>