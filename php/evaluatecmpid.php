<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$ct=0;
	$cmpid = $_POST['cmpid'];
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql = mysqli_query($conn,"select * from company");
		if(!$sql)
		{
			echo"error";
		}
		else
		{
		if(mysqli_num_rows($sql)>=0)
		{
		 while($row = mysqli_fetch_assoc($sql))
		{
		if($cmpid == $row['cmpid'])
		{
		$ct++;
		}
		}
		}
		if($ct==1)
		{
		include("addcmperror.php");
		}
		else
		{
		$cookie_name = "x";
        $cookie_value = $cmpid;
        setcookie($cookie_name, $cookie_value,time() + (86400 * 30), "/");
		include("addp.php");
		}
		}
	}
	?>