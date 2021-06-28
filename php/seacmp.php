<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$cmpname = $_GET['search'];
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	    
	    $sql = mysqli_query($conn,"select * from company where cmpname LIKE '%$cmpname%'");
		if(!$sql)
		{
			echo ("not success");
		}
		else
		{
		if(mysqli_num_rows($sql)>0)
		{
			 include("scmp.php");
			}
			else
			{
			include("snotcmp.php");
			}
			}
			}
			?>