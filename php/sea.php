<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$phoneno = $_GET['search'];
	$ct=0;
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	    
	    $sql = mysqli_query($conn,"select * from customer");
		if(!$sql)
		{
			echo ("not success");
		}
		else
		{
		if(mysqli_num_rows($sql)>=0)
		{
		 while($chk = mysqli_fetch_assoc($sql))
		{
           if($phoneno == $chk['phoneno'] )
			{
			 $ct++;
			}
			}
			if($ct==1 )
			{
			 include("search.php");
			}
			else
			{
			include("searchnot.php");
			}
			}
			}
			}
			?>