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
<script>
function myFunction() {
    alert("no record found");
}
</script>
<body onload ="myFunction()" >

<div class="topnav">
  <a class="active" href="employee.php">VIEW EMPLOYEES</a>
  <a href="addemp.php">ADD EMPLOYEE</a>
   <div class="search-container">
    <form action="seaemp.php" method = "get">
      <input type="text" placeholder="Phone no..." name="search"><button type="submit">Search</button>
    </form>
  </div>
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

  <center><table>
		<tr>
			<th>EMPID</th><th>NAME</th><th>ADDRESS</th><th>PHONE NO</th><th>SALARY</th>
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
		$sql = mysqli_query($conn,"select * from employee");
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
		echo "<td>" .$row["empid"]. "</td>
		   <td>".$row["empname"]."</td><td>".$row["address"]."<br>".$row["place"]."<br>".$row["state"]."</td><td>".$row["phoneno"]."</td><td>".$row["salary"]."</td></tr>";		
		}
		echo "</table></center>";
		}
		}
		}?>
		</body>
</html>
