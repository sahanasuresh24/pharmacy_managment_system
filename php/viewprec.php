<!DOCTYPE html>
<html>
<head>
<title>pharmacy management system</title>
		<meta name = "viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,"/>
		<link rel = "stylesheet" type = "text/css" href = "../css/addcust.css"/>
		<style>

	.x{
	position : fixed;
	  top : 34%;
	  left :32%;
	}
	.y{
	position : fixed;
	  top : 36%;
	  left :41%;
	  font-family : Comic Sans MS;
		color : Burlywood;
		font-size:110%;
	
	}
	.z{
	position : fixed;
	  top :50%;
	  left :31.6%;
	  font-family : Comic Sans MS;
		color : Burlywood;
		font-size:130%;
	}
		</style>
</head>
<body>

<div class="topnav">
  <a class ="active" href="customer.php">VIEW CUSTOMERS</a>
  <a  href="addcust.php">ADD CUSTOMERS</a>
  <div class="b">
    <a href="../html/admindash1.html">BACK</a>
  </div>
</div>
<div class="a">
<center>
<h1>CUSTOMER DETAILS</h1>
</center>
</div>
<div class="bnm">
<img src="../images/plus.jpg" width="100" height="100">
</div>

  <div class='container'>
		<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$precid = $_GET['id'];
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
		$sql = mysqli_query($conn,"select precid,tabname,docname,hospname from prescription where precid='$precid'");
		if(!$sql)
		{
			echo ("not sucess");
		}
		else
		{
		session_start();
		if(mysqli_num_rows($sql)>=0)
		{
		 while($row = mysqli_fetch_assoc($sql))
		{
		   echo "<div class ='x'>
		   <img src=' ../images/plus.jpg'width='100' height='100'> </div>
		   <div class = 'y'>
		   HOSPITAL NAME : ".$row["hospname"]."<br><br> DOCTOR NAME : "
		   .$row["docname"]."</div>
		   <div class ='z'>
		   __________________________________<br><br><br>
		   <center>Tablet name : ".$row["tabname"]."</div></center>";
		}
		}
		}
		}?>
 </div>
</body>
</html>
