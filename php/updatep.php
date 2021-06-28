<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$cookie_name = "f";
    $medid = $_COOKIE[$cookie_name];
	$mfgdate = date('y-m-d', strtotime($_POST['mfgdate']));
	$expdate = date('y-m-d', strtotime($_POST['expdate']));
	$boxno = (int)$_POST['boxno'];
	$tabprice = (int)$_POST['tabprice'];
	$quantity = (int)$_POST['quantity'];
	$totprice = (int)((int)$tabprice*(int)10);
	$arrivaldate = date('y-m-d', strtotime($_POST['arrivaldate']));	
	
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	    $sql = mysqli_query($conn,"select m.quantity,m.type,m.tabprice,s.price from medicine m, stock s where m.medid='$medid' AND s.medid = m.medid");
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
		$quantity1 = (int)$row['quantity'];
		$type=$row['type'];
		$tabprice1=$row['tabprice'];
		$price1=$row['price'];
		}
		}
		}
		$quantity2=(int)((int)$quantity+(int)$quantity1);
		$price = ((int)((int)$tabprice*(int)$quantity)+$price1);	
		$sql1 = mysqli_query($conn,"UPDATE medicine SET mfgdate='$mfgdate',expdate='$expdate',boxno='$boxno',quantity='$quantity2',tabprice='$tabprice',totprice='$totprice'
	   WHERE medid='$medid'");
		if(!$sql1)
		{
			echo "Error".mysqli_error($sql);
		}
		else
		{
		 $sql2 = mysqli_query($conn,"update stock set arriveddate='$arrivaldate',price='$price' where medid = '$medid'");
		 if(!$sql2)
		{
			echo "Error".mysqli_error($sql1);
		}
		else
		{
		   if($type == 'medicines')
		   {
		    include("stock1.php");
			}
			elseif($type == 'toilteries')
			{
		    include("stock2.php");
			}
			elseif($type == 'skincareproducts')
			{
		    include("stock4.php");
			}
			else
			{
		     include("stock3.php");
			 }
		}
		}
	}
	?>