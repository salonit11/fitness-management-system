<?php
include "header2.php";
	$sensorvalue = 1;  //by default this value is set to 0, change it to 1, in order to get the sms. 
	$date=$_POST['date'];
	$time=$_POST['time'];
	if($sensorvalue==1)
	{
		$msg = 'Water Reminder :-'.$date.' and'. $time; //yoi can chnage the message as per requirement,
		$num = '9104518761'; //this is disha's mobile number, you can change this mobile number to anyone as per your requirement.
		$fields = array
		(
		    "sender_id" => "TXTIND",
		    "message_text" => $msg,
		    "language" => "english",
		    "route" => "v3",
		    "numbers" => $num,
		);
		$curl = curl_init();
		curl_setopt_array($curl, array
		(
		  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_SSL_VERIFYHOST => 0,
		  CURLOPT_SSL_VERIFYPEER => 0,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => json_encode($fields),
		  CURLOPT_HTTPHEADER => array(
		    "authorization: RcL0HF6xm1JOQz8hqBaDbE9idXPIA2CuprMjwkseW7G4tvNVZKTGj4Ac7QafYSoi1unVPMOgsHNtpKCD",
		    "accept: */*",
		    "cache-control: no-cache",
		    "content-type: application/json"
		  ),
		));
		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);
		if ($err) 
		{
		  echo "cURL Error #:" . $err;
		} 
		else {
			
		  //echo $response;
			$query = "INSERT INTO tbl_remainder(r_id,r_date,r_time,r_status,l_id) VALUES('','$date','$time','1','$id')";
			$result = mysqli_query($con,$query);
			echo "<script> alert('Message Send Successfully..!'); </script>";
			echo ("<script>location.href='view_remainder.php'</script>");
		}
	}
	elseif ($sensorvalue==0) 
	{
		echo "Circuit working well!";
	}
?>