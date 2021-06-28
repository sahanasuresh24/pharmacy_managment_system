<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
$medid = $_GET['id'];
  $date = date("Y/m/d");
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql = mysqli_query($conn,"select quantity,expdate from medicine where medid='$medid'");
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
		 $id =(int) $row["quantity"];
		 $expdate = $row['expdate'];
		 if($id>0)
		 {
		 include("updatemedicine.php");
		 }
		 else
		 {
		 include("noquantity.php");
		 }
		}
		}
		}
	}
	?>