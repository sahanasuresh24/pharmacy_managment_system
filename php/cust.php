<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$custid = $_POST['custid'];
	$custname = $_POST['name'];
	$phoneno = $_POST['phno'];
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql = mysqli_query($conn,"insert into customer values('$custid','$custname','$phoneno');");
		if(!$sql)
		{
			include("addcusterror.php");
		}
		else
		{
		$cookie_name = "u";
            $cookie_value = $custid;
            setcookie($cookie_name, $cookie_value,time() + (86400 * 30), "prec.php");
		include("addprec.php");
		}
	}
	?>