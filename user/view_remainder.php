<?php
	include "header3.php";
?>
    <!-- banner-bottom -->
    <section class="events py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">View Water Remainder</h3><br/><br/>
            <table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col"><center>Sr No.</center></th>
						<th scope="col"><center>Date</center></th>
						<th scope="col"><center>Time</center></th>
						<th scope="col"><center>Delete</center></th>
					</tr>
				</thead>
			<tbody>
			<?php
				$seq=1;
				$qry1="SELECT * FROM tbl_remainder WHERE l_id='$id' AND r_status='1'";
				$run1=mysqli_query($con,$qry1);
				while($result1=mysqli_fetch_array($run1))
				{
			?>
			<tr>
				<th scope="row"><?php echo $seq; ?></th>
				<td><?php echo $result1['r_date'] ?></td>
				<td><?php echo $result1['r_time'] ?></td>
				<td><a href="?del=<?php echo $result1['r_id'];?>" onclick="return confirm(' Sure to Delete');" class="btn btn-danger btn-circle btn"><i class="fa fa-trash"></i></a></td>
			</tr>
			<?php
				$seq++;
				}
				if(isset($_GET['del']))
				{
					$sql="UPDATE tbl_remainder SET r_status='0' WHERE r_id=".$_GET['del']."";
					$resultt=mysqli_query($con,$sql);
					if($resultt)
					{
						echo ("<script>location.href='view_remainder.php'</script>");
					}
                }
			?>
			</tbody>
			</table>
        </div>
    </section>
<?php
  include "footer2.php";
?>