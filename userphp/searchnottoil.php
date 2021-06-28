<!DOCTYPE html>
<html>
<head>
<title>pharmacy management system</title>
		<meta name = "viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,"/>
		<link rel = "stylesheet" type = "text/css" href = "../css/stock.css"/>
		<style>
				a{
		color:white;
		}

		table{
	border-collapse : collapse;
	width :90%;
	position:absolute;
top:28%;
left:5%;
right:5%;
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
	color:white;
	 border: 1.5px solid #ddd;
	border-color : orange;
	font-size : 18px;
	text-align:center;
	padding: 15px;
	}
		</style>


<script>
function myFunction() {
    alert("no record found");
}
</script>
</head>
<body onload ="myFunction()" >



<div class="topnav">
  <a href="medicine.php">MEDICINES</a>
  <a class="active" href="toilteries.php">TOILTERIES</a>
  <a href="babycareproducts.php">BABY CARE PRODUCTS</a>
  <a href="skincareproducts.php">SKIN CARE PRODUCTS</a>
    <div class="search-container">
    <form action="seatoil.php" method = "get">
      <input type="text" placeholder="Product Name...." name="search"><button type="submit">Search</button>
    </form>
  </div>
  <div class="b">
 <a href="../html/userdash.html">BACK</a>
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
			<th>MEDID</th><th>NAME</th><th>CMPID</th><th>MFGDATE</th><th>EXPDATE</th><th>SHELFNO</th><th>PRICE</th><th>QUANTITY</th><th>ADD</th>
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
		$sql = mysqli_query($conn,"select * from medicine where type = 'toilteries'");
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
		   $id = $row["medid"];
		   $id1=$row['cmpid'];
		   $sql1 = mysqli_query($conn,"select * from company where cmpid = '$id1'");
		   while($row1 = mysqli_fetch_assoc($sql1))
		   {
		   echo "<tr><td>"
		   .$row["medid"]."</td><td>" .$row["medname"]."</td><td><a href=viewm.php?id=$id1>".$row1["cmpname"]."</a></td><td>" .$row["mfgdate"]."</td><td>" .$row["expdate"].
           "</td><td>".$row["boxno"]."</td><td>" .$row["tabprice"]. "</td><td>".$row["quantity"].
		   "</td><td><a href='../userphp/expcheck.php?id=$id'><img src='../images/cart.png' width='40' height='40' border='0' align= 'middle'></a></td></tr>";	
		}
		}
		echo "</table></center>";
		}
		}
		}?>
		</body>
</html>
