<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$uname = $_POST['name'];
	$psword = $_POST['password'];
	$cookie_name = "emp";
    $empid = $_COOKIE[$cookie_name];
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql = mysqli_query($conn,"insert into login values('$uname','$psword','$empid');");
		if(!$sql)
		{
		include("addusererror.php");
		}
		else
		{
		include("employee.php");
		}
	}
	?>