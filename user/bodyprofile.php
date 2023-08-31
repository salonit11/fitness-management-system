<?php
    include "header3.php";
    $qry1="SELECT * FROM tbl_login WHERE l_id='$id'";
	$run1=mysqli_query($con,$qry1);
	$result1=mysqli_fetch_array($run1);
	$height=$result1['l_height'];
	$weight=$result1['l_weight'];
	$h=$height/100;
	$bmi=$weight/($h*$h);
	$output="";
	if ($bmi<16) {
		$output ="Severely Underweight";
	}
	elseif ($bmi>=16 AND $bmi<=18.4) {
		$output ="Underweight";
	}
	elseif ($bmi>18.4 AND $bmi<=24.9) {
		$output ="Normal";
	}
	elseif ($bmi>25 AND $bmi<=29.9) {
		$output ="Overweight";
	}
	elseif ($bmi>30 AND $bmi<=34.9) {
		$output ="Moderately Obese";
	}
	elseif ($bmi>35 AND $bmi<=39.9) {
		$output ="Severly Obese";
	}
	elseif ($bmi>40) {
		$output ="Morbidly Obese";
	}
?>
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Your Body Profile</h3><br/>
            <p style="font-size: 24px;" class="title-w3pvt text-center">Your BMI Index: <?php echo '<b>'.$bmi.'</b>'; ?></p>
            <p style="font-size: 24px;" class="title-w3pvt text-center">You Are: <?php echo '<b>'.$output.'</b>'; ?></p>
            <div class="login px-sm-4 mx-auto mw-100 login-wrapper">
            	<div id="myDiv" align="center"> 
      			<img src="images/bmi.png" id="profile-img-tag" alt="Profile Pic" width="300px" height="400px" style="border:5px solid #ffffff; background-color: #ffffff;" />
      			</div>	
            </div>
        </div>
    </section>
    <!-- //banner-bottom -->
    <!--/help-line -->
<?php
    include "footer2.php";
?>