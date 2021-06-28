<!DOCTYPE html>
<html>
<head>
<title>pharmacy management system</title>
		<meta name = "viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,"/>
		<link rel = "stylesheet" type = "text/css" href = "../css/stock.css"/>
		<style>

		a{
		color : white;
		}
		.cmp{
		position:absolute;
		top:30%;
		left:43%;
		font-family : times new roman;
	color:white;
		}
		table{
	border-collapse : collapse;
	width :80%;
	position:absolute;
	top:38%;
	left:8%;
	right:8%;
	}
	td {
	font-family : times new roman;
	color:burlywood;
	 border: 0;
	font-size : 18px;
	text-align:center;
	padding: 15px;
	}
		</style>
</head>
<body>
<div class="topnav">
  <a href="stock1.php">MEDICINES</a>
  <a href="stock2.php">TOILTERIES</a>
  <a href="stock3.php">BABY CARE PRODUCTS</a>
  <a href="stock4.php">SKIN CARE PRODUCTS</a>
  <a href="addproducts.php">ADD PRODUCTS</a>
  <a class="active" href="cdetails.php">COMPANY</a>
    <div class="search-container">
    <form action="" method = "get">
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
<div class = "cmp">
<h2>Select the date</h2>
</div>
<table>
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
		$sql = mysqli_query($conn,"select arriveddate from stock where cmpid = '$cmpid' order by arriveddate");
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
		    $date = $row['arriveddate'];
		   if($date1==$date)
		   {
		   continue;
		   }
		   else
		   {
		   echo "
		   <tr><td><a href=report.php?id=".$date."&id1=".$cmpid.">".$date."</a></td></tr>";
		   $date1=$date;
		   }
		}
		}
		}
		}
		?>
		<tr><td><a href="cdetails.php">Back</a></td></tr>
		</table>
		</body>
</html>