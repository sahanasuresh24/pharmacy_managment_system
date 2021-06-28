<!DOCTYPE html>
<html>
<head>
<title>pharmacy management system</title>
		<meta name = "viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,"/>
		<link rel = "stylesheet" type = "text/css" href = "../css/stock.css"/>
</head>
<style>
a {
    color: white;
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
	#ava{
	font-family : times new roman;
	color:white;
	}
	.back{
	position:absolute;
	top:72%;
	left:49%;
	}
</style>
<body>

<div class="topnav">
  <a class="active" href="employee.php">VIEW EMPLOYEES</a>
  <a href="addemp.php">ADD EMPLOYEE</a>
  <div class="b">
 <a href="../html/admindash.html">BACK</a>
  </div>
</div>
<div class="a">
<center>
<h1>EMPLOYEE DETAILS</h1>
</center>
</div>
<div class="bnm">
<img src="../images/plus.jpg" width="100" height="100">
</div>
<table>
		<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$empid = $_GET['id'];
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
		$sql = mysqli_query($conn,"select date from billings where empid = '$empid'");
		if(!$sql)
		{
			echo ("not sucess");
		}
		else
		{
		if(mysqli_num_rows($sql)>0)
		{
		echo "<tr><td><p>Select the date wanted to view the bills:</td></tr>";
		 while($row = mysqli_fetch_assoc($sql))
		{
		    $date = $row['date'];
		   if($date1==$date)
		   {
		   continue;
		   }
		   else
		   {
		   echo "
		   <tr><td><a href=viewemp1.php?id=".$date."&id1=".$empid.">".$date."</a></td></tr>";
		   $date1=$date;
		   }
		}
		echo "<tr><td><a href='employee.php'>Back</a></td></tr>";
		}
		else
		{
		echo "<center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><img src='../images/nobill.png' width='150' height='150' border='0' align= 'middle'></center><br><center><h2 id = 'ava'>NO BILLS YET</h2></center>";
		echo "<div class = 'back'><a href='employee.php'>Back</a></div>";
		}
		}
		}
		?>
		</table>
		</body>
</html>