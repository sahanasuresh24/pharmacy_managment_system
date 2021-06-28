<!DOCTYPE html>
<html>
<head>
<title>pharmacy management system</title>
		<meta name = "viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,"/>
		<link rel = "stylesheet" type = "text/css" href = "../css/stock.css"/>
		<style>
		a{
		color:burlywood;
		}
		.container {
    position:absolute;
	top:36%;
	left:35%;
	font-family : Segoe Print;
	font-size:20px;
 padding: 16px;
	 color : burlywood;
	 text-align:center;
	border-style: groove;
	border-color:yellow;
	width:320px;
	height:320px;
	}
		</style>
</head>
<body>

<div class="topnav">
  <a href="stock1.php">MEDICINES</a>
  <a href="stock2.php">TOILTERIES</a>
  <a class="active" href="stock3.php">BABY CARE PRODUCTS</a>
  <a href="stock4.php">SKIN CARE PRODUCTS</a>
  <a href="addproducts.php">ADD PRODUCTS</a>
  <a href="cdetails.php">COMPANY</a>
    <div class="search-container">
    <form action="sea1.php" method = "get">
      <input type="text" placeholder="Search.." name="search"><button type="submit">Search</button>
    </form>
  </div>
  <div class="b">
 <a href="../html/admindash.html">BACK</a>
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
	$medid = $_GET['id'];
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
		$sql = mysqli_query($conn,"select * from medicine where medid='$medid' AND type='babycareproducts'");
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
		    echo "<br> NAME: ".$row['medname']."<br> <br>MFGDATE: ".$row['mfgdate']."<br><br> EXPDATE: ".$row['expdate']."<br><br> PRICE: ".$row['tabprice']."<br>";
		}
		}
		}
		}?>
		</div>
		</body>
</html>
