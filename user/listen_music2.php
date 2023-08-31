<?php
	include "header3.php";
?>
    <!-- banner-bottom -->
    <section class="events py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Workout Music</h3><br/><br/>
            <table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col"><center>Sr No.</center></th>
						<th scope="col"><center>Music Name</center></th>
						<th scope="col"><center>Music Audio</center></th>
					</tr>
				</thead>
				<tbody>
					<?php
						$seq=1;
						$qry1="SELECT * FROM tbl_music WHERE m_status='1'";
						$run1=mysqli_query($con,$qry1);
						while($result1=mysqli_fetch_array($run1))
						{
					?>
					<tr>
						<th scope="row"><?php echo $seq; ?></th>
						<td><?php echo $result1['m_name'] ?></td>
						<td>
							<audio controls="controls" src="music\<?php echo $result1['m_audio'] ?>" >
								<source src="<?php echo $result1['m_audio'] ?>" type="audio/mp3">
							</audio>
						</td>
					</tr>
					<?php
						$seq++;
						}
					?>
				</tbody>
			</table>
        </div>
    </section>
<?php
	include "footer2.php";
?>