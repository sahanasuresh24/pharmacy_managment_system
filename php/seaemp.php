<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$phoneno = $_POST['id'];
	$c=0;
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	    
	    $sql1 = mysqli_query($conn,"select * from employee");
		if(!$sql1)
		{
			echo ("not success");
		}
		else
		{
		if(mysqli_num_rows($sql1)>=0)
		{
		 while($chk = mysqli_fetch_assoc($sql1))
		{
           if($phoneno == $chk['phoneno'])
			{
			 $c++;
			}
			}
			if($c==1)
			{
			 include("empsearch.php");
			}
			else
			{
			include("empsearchnot.php");
			}
			}
			}
			}
			?>