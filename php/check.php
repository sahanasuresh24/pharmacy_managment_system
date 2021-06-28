<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql = mysqli_query($conn,"select * from bill");
		if(!$sql)
		{
			include("addcusterror.php");
		}
		else
		{
		if(mysqli_num_rows($sql)>0)
		{
		 include("invoice.php");
		}
		else
		{
		include("error.php");
		}
		}
	}
	?>