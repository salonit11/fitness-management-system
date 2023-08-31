<?php
    include "header3.php";
?>
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Set Water Remainder</h3>

            <div class="login px-sm-4 mx-auto mw-100 login-wrapper">
                <form class="login-wrapper w3pvt_mail_grid_right" action="send_msg.php" method="post">
                    <div class="form-group">
                        <label class="mb-2"><b>Date</b></label>
                        <input type="date" name="date" class="form-control" required="">
                    </div><br/>
                    <div class="form-group">
                        <label class="mb-2"><b>Time</b></label>
                        <input type="time" class="form-control" id="exampleInputPassword1" name="time" required="">
                    </div>
                    <center><button type="submit" name="submit" class="btn btn-primary submit mt-2 read-more">Set</button></center>                   
                </form>
            </div>
        </div>
    </section>
<!-- //banner-bottom -->
<!--/help-line -->
<?php
    include "footer1.php";
?>