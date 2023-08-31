<?php
	include "header3.php";     
?>
    <!-- banner-bottom -->
    <section class="events py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Breakfast</h3>
            <?php
				$qry1="SELECT * FROM tbl_diet WHERE d_status='1' AND d_type='Breakfast'";
				$run1=mysqli_query($con,$qry1);
				while($result1=mysqli_fetch_array($run1))
				{
					$d_id=$result1['d_id'];
					$image=$result1['d_img'];
			?>
            <div class="row mid-grids mt-5">
                <div class="col-md-5 content-w3pvt-img">
                    <a href="#"><img src="photos/<?php echo $image; ?>" alt="news image" class="img-fluid"></a>
                </div>
				<div class="col-md-7 content-left-bottom entry-w3layouts-info text-left mt-3">
                    <h5 class="mt-1"><a href="#"><?php echo $result1['d_food']; ?></a></h5><br/>
                    <p class="mt-2 text-left"><?php echo $result1['d_desc']; ?></p>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </section>
    <!-- //banner-bottom -->
   <?php
   include "footer2.php";
   ?>