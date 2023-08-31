<?php

	include "connection.php";
    include "header3.php";
	use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer-6.0.5/src/Exception.php';
require 'PHPMailer-6.0.5/src/PHPMailer.php';
require 'PHPMailer-6.0.5/src/SMTP.php';	
	
		$date = $_POST['date'];
		$time = $_POST['time'];
		
	$query = "INSERT INTO tbl_remainder(r_id,r_date,r_time,r_status,l_id) VALUES('','$date','$time','1','$id')";
						
						$result = mysqli_query($con,$query);
							if(!$result)
							{
								echo "<script>alert('Not Inserted');</script>";
							}
							
							else
							{
								
								
							
	//mail


class VerificationCode
{
    public $smtpHost;
    public $smtpPort;
    public $sender;
    public $password;
    public $receiver;
    public $code;

    public function __construct($receiver)
    {
        /**
         * Your email id  
         * For example : johndoe@gmail.com
         * contact@johndoe.com
         * 
         */
        $this->sender = "zeelthakkar237@gmail.com"; 

        /**
         *  YOUR PASSWORD 
         *  ************
         */               
        $this->password = "zeel!@237";  

        /**
         * Receiver email
         * For example : johndoe@gmail.com
         */ 
         if(isset($_GET['id']))
       {
        $email=$_GET['id']."";
      //echo "<script>alert('$d_id');</script>";
       }    
        //echo $email;
        $this->receiver = $email;  

        /**
         * YOUR SMTP HOST NAME 
         * For example : smtp.gmail.com 
         * OR mail.youwebsite.com
         */     
        $this->smtpHost="smtp.gmail.com";        
        
        /**
         * SMTP port number
         * For example :587
         */
        $this->smtpPort = 587;

    }
    public function sendMail(){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->Host = $this->smtpHost;   
        $mail->Port = $this->smtpPort;    
        $mail->IsHTML(true);
        $mail->Username = $this->sender;
        $mail->Password = $this->password;
        $mail->Body=$this->getHTMLMessage();
        $mail->Subject = "Water Reminder {$this->code}";
        $mail->SetFrom($this->sender,"Water Reminder");
        $mail->AddAddress($this->receiver);
        if($mail->send()){
            if(isset($_GET['id']))
       {
        $email=$_GET['id']."";
      //echo "<script>alert('$d_id');</script>";
       }    
            $email=$email;
         echo ("<script>location.href='view_remainder.php'</script>");
          // return true;
          exit;  
        }
        echo "FAILED TO SEND MAIL";
        // return false;

    }
    public function getVerificationCode()
    {
            $con = mysqli_connect('localhost','root','','fitness');
        
             if(!$con)
                {
                     echo "Server not found...";
                 }        
           	else
           	{
            	mysqli_select_db($con,'fitness');
        	}	
            if(isset($_GET['id']))
       {
        $email=$_GET['id']."";
      //echo "<script>alert('$d_id');</script>";
       }    
       $qry2="SELECT * FROM tbl_login WHERE l_email='$email'";
       $run2=mysqli_query($con,$qry2);
       $result2=mysqli_fetch_array($run2);
       $id2=$result2['l_id'];
        	//$email=$email;
           
            	$qry3="SELECT * FROM tbl_remainder WHERE l_id='$id2' ORDER BY r_id DESC";
                $run3=mysqli_query($con,$qry3);
                $result3=mysqli_fetch_array($run3);
                return $result3['r_time'];
           
    }

    public function getHTMLMessage(){
        $this->code=$this->getVerificationCode();   
        $htmlMessage=<<<MSG
        <!DOCTYPE html>
        <html>
         <body>
            <h1>It's time to drink Water {$this->code}</h1>
         </body>
        </html>        
MSG;
    return $htmlMessage;
    }

}

// pass your recipient's email
if(isset($_GET['id']))
       {
        $email=$_GET['id']."";
      //echo "<script>alert('$d_id');</script>";
       }    
$vc=new VerificationCode('Enjoy'); 
$vc->sendMail();




}
		
					
?>