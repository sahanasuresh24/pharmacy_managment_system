<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$sum=0;
	$custid = $_GET['id'];
	$cookie_name = "bill";
    $cookie_value = $custid;
    setcookie($cookie_name, $cookie_value,time() + (86400 * 30), "/");
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql1 = mysqli_query($conn,"select * from bill");
		   if(!$sql1)
		{
			echo ("not sucess");
		}
		else
		{
		if(mysqli_num_rows($sql1)>=0)
		{
		 while($row1 = mysqli_fetch_assoc($sql1))
		{  
		   $sum = $sum+$row1["price"]; 
		}
		}
		}
		$cookie_name = "quan";
    $cookie_value = $sum;
    setcookie($cookie_name, $cookie_value,time() + (86400 * 30), "/");
	   $sql3 = mysqli_query($conn,"delete from bill");
		if(!$sql3)
		{
			include("addcusterror.php");
		}
		else
		{
		include("up.php");
		}
	}
	?>