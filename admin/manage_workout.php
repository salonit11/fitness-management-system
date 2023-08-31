<?php
	include "header1.php";
?>
	<div id="page-wrapper">
		<div class="graphs">
			<h3 class="blank1">MANAGE WORKOUT</h3>
				<div class="xs tabls">
					<div class="bs-example4" data-example-id="contextual-table">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th><center>Sr No</center></th>
                                        <th><center>Category</center></th>
                                        <th><center>Workout Name</center></th>
                                        <th><center>Workout Time</center></th>
                                        <th><center>Image</center></th>
                                        <th><center>Description</center></th>
                                        <th><center>Edit</center></th>
                                        <th><center>Delete</center></th>
									</tr>
								</thead>
							<tbody>
							<?php
								$seq=1;
								$qry1="SELECT * FROM tbl_workout WHERE w_status='1'";
								$run1=mysqli_query($con,$qry1);
								while($result1=mysqli_fetch_array($run1))
								{
									$cat_id=$result1['cat_id'];
									$qry2="SELECT * FROM tbl_cat WHERE cat_id='$cat_id'";
									$run2=mysqli_query($con,$qry2);
									$result2=mysqli_fetch_array($run2);
							?>
                            <tr>
								<td><?php echo $seq; ?></td>
								<td><?php echo $result2['cat_name']; ?></td>
								<td><?php echo $result1['w_name']; ?></td>
								<td><?php echo $result1['w_time']; ?></td>
								<td><img src="<?php echo $result1['w_img']; ?>" width="50px" height="50px"></td>
								<td class="p"><?php echo $result1['w_desc']; ?></td>
								<td><a href="edit_workout.php?id=<?php echo $result1['w_id'];?>" class="btn btn-success btn-circle btn"><i class="fa fa-edit"></i></a></td>
								<td><a href="?del=<?php echo $result1['w_id'];?>" onclick="return confirm(' Sure to Delete..?');" class="btn btn-danger btn-circle btn"><i class="fa fa-trash"></i></a></td>
                            </tr>
							<?php
								$seq++;
								}
								if(isset($_GET['del']))
								{
									// $sql="DELETE FROM tbl_news WHERE news_id=".$_GET['del']."";
									$sql="UPDATE tbl_workout SET w_status='0' WHERE w_id=".$_GET['del']."";
									$resultt=mysqli_query($con,$sql);
									if($resultt)
									{
										echo ("<script>location.href='manage_workout.php'</script>");
									}
								}
                            ?>
						</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	include "footer1.php";
?>