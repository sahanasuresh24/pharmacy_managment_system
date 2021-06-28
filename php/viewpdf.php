<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$custid = $_GET['id'];
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql1 = mysqli_query($conn,"select * from billings where custid= '$custid'");
		if(!$sql1)
		{
			echo ("not sucess");
		}
		else
		{
		if(mysqli_num_rows($sql1)>0)
		{
		 while($row1 = mysqli_fetch_assoc($sql1))
		{  
		  $file=base64_decode(stripslashes($row1['data']));
header("content-type: application/pdf");
header('Accept-Ranges: bytes');
header('Content-Transfer-Encoding: binary');
echo $file;
		}
		}
		}
	}
	?>