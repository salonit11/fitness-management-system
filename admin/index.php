<?php
	include "header1.php";
?>
	<!-- //header-ends -->
		<div id="page-wrapper">
			<div class="graphs">
				<div class="col_3" style="margin-bottom:2%;">
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="fa fa-user" style="color: #8BC34A;"></i>
							<div class="stats">
								<h5>
							  	<?php
									$count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(l_id) FROM tbl_login WHERE l_status='1' AND l_role='1'"));
									echo $count1[0];
								?>
								</h5>
								<div class="grow">
									<p>Admin</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 widget widget1">
						<div class="r3_counter_box">
							<i class="fa fa-users fa-lg" aria-hidden="true" style="color:#00BCD4;"></i>
							<div class="stats">
								<h5>
								<?php
									$count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(l_id) FROM tbl_login WHERE l_status='1' AND l_role='2'"));
									echo $count1[0];
								?>
								</h5>
								<div class="grow grow1">
								<p>User</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="fa fa-table fa-lg" aria-hidden="true" style="color:#F44336;"></i>
						<div class="stats">
							<h5>
							<?php
								$count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(cat_id) FROM tbl_cat WHERE cat_status='1'"));
								echo $count1[0];
							?>
							</h5>
							<div class="grow grow3">
								<p>Category</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget">
					<div class="r3_counter_box">
						<i class="fa fa-line-chart fa-lg" style="color:#FFCA28;"></i>
						<div class="stats">
							<h5>
								<?php
									$count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(w_id) FROM tbl_workout WHERE w_status='1'"));
									echo $count1[0];
								?>
							</h5>
							<div class="grow grow2">
								<p>Workout</p>
							</div>
						</div>
					</div>
					</div>
				<div class="clearfix"></div>
			</div>
			<div class="col_3">
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="fa fa-headphones fa-lg" style="color:#8BC34A;"></i>
						<div class="stats">
							<h5>
							<?php
								$count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(m_id) FROM tbl_music WHERE m_status='1'"));
								echo $count1[0];
							?>
							</h5>
							<div class="grow">
								<p>Music</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="fa fa-pie-chart fa-lg" style="color: #00BCD4;"></i>
						<div class="stats">
							<h5>
							<?php
								$count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(d_id) FROM tbl_diet WHERE d_status='1'"));
								echo $count1[0];
							?>
							</h5>
							<div class="grow grow1">
								<p>Diet Plan</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget widget1">
					<div class="r3_counter_box">
						<i class="fa fa-star fa-lg" style="color: #F44336;"></i>
						<div class="stats">
							<h5>
							<?php
								$count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(f_id) FROM tbl_feedback WHERE f_status='1'"));
								echo $count1[0];
							?>
							</h5>
							<div class="grow grow3">
								<p>Feedback</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 widget">
					<div class="r3_counter_box">
						<i class="fa fa-phone fa-lg" style="color:#FFCA28;"></i>
						<div class="stats">
							<h5>
							<?php
								$count1 = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(c_id) FROM tbl_contact WHERE c_status='1'"));
								echo $count1[0];
							?>
							</h5>
							<div class="grow grow2">
								<p>Contact</p>
							</div>
						</div>
					</div>
				</div>
						<div class="clearfix"></div>
					</div>
				</div>
			<!--body wrapper start-->
			</div>
			 <!--body wrapper end-->
		</div>
        <!--footer section start-->
<?php
	include "footer1.php";
?>