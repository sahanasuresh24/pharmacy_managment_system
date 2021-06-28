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

</style>
<body>

<div class="topnav">
  <a class="active" href="#">VIEW CUSTOMERS</a>
  <a href="addcust.php">ADD CUSTOMERS</a>
   <div class="search-container">
    <form action="sea.php" method = "get">
      <input type="text" placeholder="Search.." name="search"><button type="submit">Search</button>
    </form>
  </div>
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

  <center><table>
		<tr>
			<th>CUSTID</th><th>NAME</th><th>PHONE NO</th><th>PRECID</th>
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
		$sql = mysqli_query($conn,"select c.custid,c.custname,c.phoneno,p.precid from customer c ,prescription p where c.custid=p.custid UNION  select c.custid,c.custname,c.phoneno,'no presc' from customer c where not custid = any(select custid from prescription)");
		if(!$sql)
		{
			echo ("not sucess");
		}
		else
		{
		session_start();
		if(mysqli_num_rows($sql)>=0)
		{
		 $ct = 1;
		 while($row = mysqli_fetch_assoc($sql))
		{
		$id=$row['precid'];
		   echo "<td>" .$row["custid"]. "</td>
		   <td>".$row["custname"]."</td><td>".$row["phoneno"]."</td><td><a href=viewprec.php?id=".$id.">".$row["precid"]."</a></td></tr>";	
		}
		echo "</table></center>";
		}
		}
		}?>
		</body>
</html>
