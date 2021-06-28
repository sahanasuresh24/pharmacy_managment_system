<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$cookie_name = "x";
    $cmpid = $_COOKIE[$cookie_name];
	$cmpname = $_POST['cmpname'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$country = $_POST['country'];
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql = mysqli_query($conn,"insert into company values('$cmpid','$cmpname','$address','$state','$country');");
		if(!$sql)
		{
			include("addcmperror.php");
		}
		else
		{
		include("addmedicine.php");
		}
	}
	?>