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
	position:inherit;
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
	.rightcolumn {
    float: left;
    width: 35%;
	 padding-left: 5px;
	 padding-top :185px;
}
.leftcolumn {   
    float: left;
    width: 63%;
	padding-top :185px;
}

		</style>
</head>
<body>
<div class="topnav">
  <a href="stock1.php">MEDICINES</a>
  <a class="active" href="stock2.php">TOILTERIES</a>
  <a href="stock3.php">BABY CARE PRODUCTS</a>
  <a href="stock4.php">SKIN CARE PRODUCTS</a>
  <a href="addproducts.php">ADD PRODUCTS</a>
  <a href="cdetails.php">COMPANY</a>
    <div class="search-container">
    <form action="sea2.php" method = "get">
      <input type="text" placeholder="Product Name..." name="search"><button type="submit">Search</button>
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
<div class="row">
  <div class="leftcolumn">
  <center><table>
		<tr>
			<th>MEDID</th><th>NAME</th><th>CMPID</th><th>ARRIVED DATE</th><th>QUANTITY</th><th>PRICE</th><th>UPDATE</th>
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
		$sql = mysqli_query($conn,"select * from stock where medname LIKE'%$medname%' AND stock.medid = any(select medid from medicine where type = 'toilteries')");
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
		$id = $row['medid'];
		$id1=$row['cmpid'];
		   echo "<tr><td><a href=viewmed1.php?id=$id>".$row["medid"]."</a></td><td>" .$row["medname"]."</td><td><a href=viewcmp.php?id=$id1>".$row["cmpid"]."</a></td><td>".$row["arriveddate"]."</td><td>" .$row["quantity"]. "</td><td>".$row["price"]."</td>
		   <td><a href='updateproducts.php?id=$id'><img src='../images/update.png' width='40' height='40' border='0' align= 'middle'></a></td></tr>";	
		}
		echo "</table></center>";
		}
		}
		}
		?>
		</div>
		 <div class="rightcolumn">
		<?php
require "footer2.php";
?>
		</div>
		</div>
		</body>
</html>