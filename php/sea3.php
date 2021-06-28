<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$medname = $_GET['search'];
	$ct=0;
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	    
	    $sql = mysqli_query($conn,"select * from stock where medname LIKE '%$medname%' AND stock.medid = any(select medid from medicine where type = 'babycareproducts')");
		if(!$sql)
		{
			echo ("not success");
		}
		else
		{
		if(mysqli_num_rows($sql)>0)
		{
			 include("search3.php");
			}
			else
			{
			include("searchnot3.php");
			}
			}
			}
			?>