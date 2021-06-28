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
	    
	    $sql = mysqli_query($conn,"select * from medicine where medname LIKE '%$medname%' AND type = 'toilteries'");
		if(!$sql)
		{
			echo ("not success");
		}
		else
		{
		if(mysqli_num_rows($sql)>0)
		{
			 include("searchtoil.php");
			}
			else
			{
			include("searchnottoil.php");
			}
			}
			}
			?>