<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
$cookie_name = "h";
   $medid = $_GET['id'];
	$quantity = (int)$_POST['tab'];
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql = mysqli_query($conn,"select * from medicine where medid='$medid'");
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
		 $type=$row['type'];
		 if((int)$quantity<=(int)$id)
		 {
		 $quantity1 = (int)($id-$quantity);
		 $sql1 = mysqli_query($conn,"insert into bill values('$medid','$quantity','0')");
		 $sql3 = mysqli_query($conn,"CALL `total_amount`('$medid')");
		 if(!$sql1)
		{
			include("error1.php");
		}
		else
		{
		$sql2 = mysqli_query($conn,"UPDATE medicine SET quantity='$quantity1' WHERE medid='$medid'");
		include("bill.php");
		}
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