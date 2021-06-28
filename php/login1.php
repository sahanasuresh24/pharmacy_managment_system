<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$uname = $_POST['name'];
	$psword = $_POST['password'];
    $empid = $_GET['id'];
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql = mysqli_query($conn,"update login set uname = '$uname', psword = '$psword' where empid = '$empid'");
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