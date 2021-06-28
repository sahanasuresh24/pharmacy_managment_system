<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
   $medid = $_GET['id'];
	$quantity = (int)$_POST['quantity'];
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
		 $sql1 = mysqli_query($conn,"select quantity from bill where medid='$medid'");
		 while($row1 = mysqli_fetch_assoc($sql1))
		 {
		 $id1 = (int)$row1["quantity"];
		 $id2 = $id+$id1;
		 $id3 = $id2-$quantity;
		 $sql2 = mysqli_query($conn,"UPDATE medicine SET quantity='$id2' WHERE medid='$medid'");
		 $sql3 = mysqli_query($conn,"UPDATE bill set quantity= '$quantity' WHERE medid = '$medid'");
		 $sql4 = mysqli_query($conn,"CALL `total_amount`('$medid')");
		 $sql5 = mysqli_query($conn,"UPDATE medicine SET quantity='$id3' WHERE medid='$medid'");
		 }
		}
		include("bill.php");
		}
	}
	}
	?>