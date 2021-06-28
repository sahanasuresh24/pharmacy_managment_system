<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$cookie_name = "u";
    $custid = $_COOKIE[$cookie_name];
	$precid = $_POST['precid'];
	$tabname = $_POST['tabname'];
	$docname = $_POST['docname'];
	$hospname = $_POST['hospname'];
	
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql = mysqli_query($conn,"insert into prescription values('$precid','$tabname','$docname','$hospname','$custid');");
		if(!$sql)
		{
			echo "Error".mysqli_error($sql);
		}
		else
		{
		    include("customer.php");
		}
	}
	?>