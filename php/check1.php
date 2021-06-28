<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	  $medid = $_GET['id'];
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
		if(mysqli_num_rows($sql)>=0)
		{
		while($row = mysqli_fetch_assoc($sql))
		 {
		 $id1 = $row['medid'];
		 $id2 = $row['quantity'];
		 if($medid == $id1)
		 {
		    include("error1.php");	
		 }
		 else
		 {
		 include("update.php?id=$medid");
		}
		}
		}
		}
	}
	?>