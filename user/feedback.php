<?php
    include "header3.php";
?>
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Send Feedback</h3>
            <div class="login px-sm-4 mx-auto mw-100 login-wrapper">
                <form class="login-wrapper w3pvt_mail_grid_right" action="" method="post">
                    <div class="form-group">
                        <textarea name="feedback" class="form-control" placeholder="Write Feedback" required=""></textarea>
                    </div>
                    <center><button type="submit" name="submit" class="btn btn-primary submit mt-2 read-more">Submit</button></center>
                </form>
            </div>
        </div>
    </section>
<!-- //banner-bottom -->
<!--/help-line -->
<?php
    include "footer2.php";
    if(isset($_POST['submit']))
    {
        $feedback=$_POST['feedback'];
        $qry1="INSERT INTO tbl_feedback(f_id,feedback,f_status,l_id)VALUES('','$feedback','1','$id')";
        $run1=mysqli_query($con,$qry1);
        if($run1)
        {
            echo "<script> alert('Thanks for the Feedback'); </script>";
            echo ("<script>location.href='index2.php'</script>");
        }
        else
        {
			echo "<script> alert('Feedback Not Added'); </script>";
            echo ("<script>location.href='feedback.php'</script>");   
        }
    }
?>