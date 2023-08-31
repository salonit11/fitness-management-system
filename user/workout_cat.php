<?php
	include "header1.php";
	if(isset($_GET['id']))
	{
		$cat_id=$_GET['id']."";
		//echo "<script>alert('$d_id');</script>";
	}
    $qry2="SELECT * FROM tbl_cat WHERE cat_id='$cat_id'";
    $run2=mysqli_query($con,$qry2);
    $result2=mysqli_fetch_array($run2);
    $category=$result2['cat_name'];
?>
    <!-- banner-bottom -->
    <section class="events py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center"><?php echo $category; ?></h3>
            <?php
				$qry1="SELECT * FROM tbl_workout WHERE w_status='1' AND cat_id='$cat_id'";
				$run1=mysqli_query($con,$qry1);
				while($result1=mysqli_fetch_array($run1))
				{
					$w_id=$result1['w_id'];
					$image=$result1['w_img'];
			?>
            <div class="row mid-grids mt-5">
                <div class="col-md-5 content-w3pvt-img">
                    <a href="#"><img src="<?php echo $result1['w_img']; ?>" alt="news image" class="img-fluid"></a>
                </div>
                <div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                    <h5 class="mt-1"><a href="#"><?php echo $result1['w_name']; ?></a></h5>
                    <small><?php echo $result1['w_time']; ?></small>
                    <p class="mt-2 text-left"><?php echo $result1['w_desc']; ?></p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </section>
<!-- //banner-bottom -->
<?php
   include "footer1.php";
?>