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
		table{
	border-collapse : collapse;
	width :80%;
	position:absolute;
	top:32%;
	left:8%;
	right:8%;
	}
	th{
	font-family : times new roman;
	color:white;
	border: 1.5px solid #ddd;
	border-color : orange;
	text-align:center;
	font-size : 20px;
	padding: 15px;
	background-color: maroon;
	
	}
	td {
	font-family : times new roman;
	color:burlywood;
	 border: 1.5px solid #ddd;
	border-color : orange;
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
    <form action="seacmp.php" method = "get">
      <input type="text" placeholder="company name...." name="search"><button type="submit">Search</button>
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

  <center><table>
		<tr>
			<th>CMPID</th><th>CMPNAME</th><th>ADDRESS</th><th>REPORT</th><th>ADD</th>
		</tr>
	<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
		$sql = mysqli_query($conn,"select * from company");
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
		$id = $row['cmpid'];
		   echo "<tr><td>".$row['cmpid']."</td><td>" .$row["cmpname"]."</td><td>".$row['address']."<br>".$row['state']."<br>".$row['country']."</td><td><a href=reportview.php?id=".$id."><img src='../images/icon.png' width='40' height='40' border='0' align= 'middle'></a></td><td><a href=updatecmp.php?id=".$id."><img src='../images/addcart.png' width='40' height='40' border='0' align= 'middle'></a></td></tr>";	
		}
		echo "</table></center>";
		}
		}
		}
		?>
		</div>
		</body>
</html>