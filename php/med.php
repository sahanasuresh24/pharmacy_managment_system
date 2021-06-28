<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$cookie_name = "x";
    $cmpid = $_COOKIE[$cookie_name];
	$medid = $_POST['medid'];
	$medname = $_POST['medname'];
	$mfgdate = date('y-m-d', strtotime($_POST['mfgdate']));
	$expdate = date('y-m-d', strtotime($_POST['expdate']));
	$boxno = (int)$_POST['boxno'];
	$tabprice = (int)$_POST['tabprice'];
	$quantity = (int)$_POST['quantity'];
	$totprice = (int)((int)$tabprice*(int)10);
	$arrivaldate = date('y-m-d', strtotime($_POST['arrivaldate']));
	$price = (int)((int)$tabprice*(int)$quantity);

	
	$type = $_POST['type'];
	
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql = mysqli_query($conn,"insert into medicine values('$medid','$medname','$cmpid','$mfgdate','$expdate','$boxno','$tabprice','$totprice','$quantity','$type');");
		if(!$sql)
		{
			echo "Error".mysqli_error($sql);
		}
		else
		{
		 $sql1 = mysqli_query($conn,"insert into stock values('$medid','$medname','$cmpid','$arrivaldate','$quantity','$price','$quantity');");
		 if(!$sql1)
		{
			echo "Error".mysqli_error($sql1);
		}
		else
		{
		    include("addmedicine.php");
		}
		}
	}
	?>