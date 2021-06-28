<!DOCTYPE html>
<html>
<head>
<title>pharmacy management system</title>
		<meta name = "viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,"/>
		<style>
		.f{
		font-family : times new roman;
	color:white;
		}
		#alert{
	border-collapse : collapse;
	width :20%;
	position:inherit;

	}
	#alert th{
	font-family : times new roman;
	color:white;
	border: 1.5px solid #ddd;
	border-color : orange;
	text-align:center;
	font-size : 20px;
	padding: 15px;
	background-color: maroon;
	
	}
	#alert td {
	font-family : times new roman;
	color:burlywood;
	 border: 1.5px solid #ddd;
	border-color : orange;
	font-size : 18px;
	text-align:center;
	padding: 15px;
	}
	#ava{
	font-family : times new roman;
	color:white;
	}
		</style>
</head>
<body>

<div class="f">
<center>
<h3>STOCK ALERT BOX</h3>
</center>
</div>
  <center><table id = "alert">
		
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
		$sql = mysqli_query($conn,"select * from stock where stock.quantity < '10' AND stock.medid = any(select medid from medicine where type = 'babycareproducts') ");
		if(!$sql)
		{
			echo ("not sucess");
		}
		else
		{
		if(mysqli_num_rows($sql)>0)
		{
		echo"<tr>
			<th>MEDID</th><th>MEDNAME</th><th>CMPID</th><th>QUANTITY</th>
		</tr>";
		 while($row = mysqli_fetch_assoc($sql))
		{
		$id = $row['medid'];
		$id1=$row['cmpid'];
		   echo "<tr><td><a href=viewmed1.php?id=$id>".$row["medid"]."</a></td><td>" .$row["medname"]."</td><td><a href=viewcmp.php?id=$id1>".$row["cmpid"]."</a></td><td>" .$row["quantity"]. "</td></tr>";	
		}
		echo "</table></center>";
		}
		else
		{
		echo "<br><br><img src='../images/smile.gif' width='120' height='120' border='0' align= 'middle'><br><center><h2 id = 'ava'>STOCK AVAILABLE</h2></center>";
		}
		}
		}
		?>
		</body>
</html>
