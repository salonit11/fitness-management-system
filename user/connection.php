<?php
	$con = mysqli_connect('localhost','root','','fitness');
	if(!$con)
	{
		echo "Server not found...";
	}
	else
	{
		mysqli_select_db($con,'fitness');
	}	
	/*
	if(!mysqli_select_db($con,'lawyer'))
	{
		echo "Database not found...";
	}*/
?>