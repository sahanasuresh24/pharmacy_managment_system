<!DOCTYPE html>
<html>
<head>
<title>pharmacy management system</title>
		<meta name = "viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,"/>
		<link rel = "stylesheet" type = "text/css" href = "../css/stock1.css"/>
		<style>
		a{
		color:white;
		}
		.container {
    position:absolute;
	top:36%;
	left:35%;
	font-family : Segoe Print;
	font-size:20px;
 padding: 16px;
	 color : white;
	 text-align:center;
	border-style: groove;
	border-color:yellow;
	width:320px;
	height:350px;
	}
		</style>
</head>
<body>

<div class="topnav">
  <a href="medicine.php">MEDICINES</a>
  <a href="toilteries.php">TOILTERIES</a>
  <a href="babycareproducts.php">BABY CARE PRODUCTS</a>
  <a class="active" href="skincareproducts.php">SKIN CARE PRODUCTS</a>
    <div class="search-container">
    <form action="seaskp.php" method = "get">
      <input type="text" placeholder="Search.." name="search"><button type="submit">Search</button>
    </form>
  </div>
  <div class="b">
 <a href="../html/admindash1.html">BACK</a>
  </div>
</div>
<div class="a">
<center>
<h1>PRODUCT DETAILS</h1>
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
	$cmpid = $_GET['id'];
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
		$sql = mysqli_query($conn,"select * from company where cmpid='$cmpid'");
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
		    echo "<br> CMPNAME: ".$row['cmpname']."<br> <br>ADDRESS: ".$row['address']."<br><br> STATE: ".$row['state']."<br><br> COUNTRY: ".$row['country']."<br>";
		}
		}
		}
		}?>
		</div>
		</body>
</html>
