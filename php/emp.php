<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$empid = $_POST['empid'];
	$empname = $_POST['name'];
	$address = $_POST['address'];
	$place = $_POST['place'];
	$state = $_POST['state'];
	$phoneno = $_POST['phno'];
	$salary = (int)$_POST['salary'];
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql = mysqli_query($conn,"insert into employee values('$empid','$empname','$address','$place','$state','$phoneno','$salary');");
		if(!$sql)
		{
			include("addemperror.php");
		}
		else
		{
		$cookie_name = "emp";
            $cookie_value = $empid;
            setcookie($cookie_name, $cookie_value,time() + (86400 * 30), "/");
		include("adduser.php");
		}
	}
	?>