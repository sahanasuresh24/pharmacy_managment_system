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
	   $sql = mysqli_query($conn,"select quantity from bill where medid ='$medid'");
		if(!$sql)
		{
			echo ("not sucess");
		}
		else
		{
		if(mysqli_num_rows($sql)>=0)
		{
		 while($row = mysqli_fetch_assoc($sql))
		{
		   $id=$row['quantity'];
		   $sql1 = mysqli_query($conn,"select * from medicine where medid='$medid'");
		   if(!$sql1)
		{
			echo ("not sucess");
		}
		else
		{
		if(mysqli_num_rows($sql1)>=0)
		{
		 while($row = mysqli_fetch_assoc($sql1))
		{
		   $id1=$row['quantity'];
		}
		}
		}
		}
	}
	}
	$id2 = ($id+$id1);
	$sql2 = mysqli_query($conn,"UPDATE medicine SET quantity='$id2' WHERE medid='$medid'");
	$sql4 = mysqli_query($conn,"delete from bill where medid='$medid'");
	if(!$sql2 && !$sql3 && !$sql4)
	{
	echo("not success");
	}
	else
	{
	include("bill.php");
	}
	}
	?>