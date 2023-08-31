<?php
    include "header1.php";
?>
    <!-- banner-bottom -->
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center">Contact Us</h3>
            <div class="comment-top mt-5 row">
                <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                    <img class="img-fluid" src="images/contact.jpg" alt="">
                </div>
                <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                    <form action="" method="post">
                        <div class="row">

                            <div class="col-lg-6 form-group">
                                <label><b>First Name</b></label>
                                <input class="form-control" type="text" name="name" required="">
                            </div>
                            <div class="col-lg-6 form-group">
                                <label><b>Email</b></label>
                                <input class="form-control" type="email" name="email" required="">
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-lg-6 form-group">
                                <label><b>Phone Number</b></label>
                                <input class="form-control" type="text" name="phone" required="">
                            </div>

                        </div>
                        <div class="form-group">
                            <label><b>Write Message</b></label>
                            <textarea class="form-control" name="message" required=""></textarea>
                        </div>
                        <center><button type="submit" name="submit" class="read-more btn submit mt-3">Submit</button></center>
                    </form>
                </div>
            </div>
            <ul class="list-unstyled row text-left mt-lg-5 pt-lg-5  pb-lg-3">
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Location</h6>
                            <p>Swastik Char Rasta
                                <br>Ahmedabad, Gujarat</p>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-envelope-open-o"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Email</h6>
                            <a href="mailto:info@example.com">fitfactory@gmail.com</a>
                        </div>
                    </div>
                </li>
                <li class="col-lg-4 adress-info">
                    <div class="row">
                        <div class="col-md-3 text-lg-center adress-icon">
                            <span class="fa fa-mobile"></span>
                        </div>
                        <div class="col-md-9 text-left">
                            <h6>Phone Number</h6>
                            <p> 99999 99999</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- //banner-bottom -->
    <?php
    include "footer1.php";
    if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
    $email=strtolower($_POST['email']);
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    $qry1="INSERT INTO tbl_contact(c_id,c_name,c_email,c_phone,c_message,c_status)VALUES('','$name','$email','$phone','$message','1')";
    $run1=mysqli_query($con,$qry1);
    if($run1)
    {
      echo "<script>  alert('Thanks for Contacting'); </script>";
      echo "<script> window.location.replace('index1.php');</script>";
    }
    else
    {
      echo "<script>  alert('Not Added'); </script>";
            header("Refresh: 0; url=index1.php");

    }
  }
    ?>