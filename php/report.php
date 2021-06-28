<!DOCTYPE html>
<html>
<head>
<title>pharmacy management system</title>
		<meta name = "viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,"/>
		<style>
	button {
    color: black;
    padding: 8px;
    text-align: center;
    font-size: 12px;
	border-radius: 2px;
	width:10%;
	position:absolute;
	top:95%;
	left:45%;
}
	
.container {
width:540px;
      padding:16px;
      border:1px solid #ccc;
      background:#fff; 
	 min-height:95%;
	  position:absolute;
	  left:20%;
	  word-wrap: normal;
	  
	  }
table{
 border-collapse: collapse;
 border: 1.5px solid black;
	table-layout:fixed;
	width :90%;
	position:absolute;
top:40%;
left:5%;
rigth:5%;
	}
	table tr {
  border-bottom: 0;
}

table tr:last-child {
  border: 1px solid black;
  border-right :0;
  border-left:0;
}
	
	th{
	 border-collapse: collapse;
	border: 1.5px  solid black;
	font-family : times new roman;
	color:black;
	text-align:center;
	font-size : 18px;
	padding: 15px;
	height: 1px;
	
	}
	td {
	 border-collapse: collapse;
	 border-right: solid 1.5px black; 
     border-left: solid 1.5px black;
	font-family : times new roman;
	color:black;
	font-size : 15px;
	text-align:center;
	padding: 5px;
	
	}
	
	.text{
		position:absolute;
		top:-1.5%;
	left:34%;
	font-family : English111 Vivace BT;
		color : black;
		text-align:center;
	}
	.text1{
		position:absolute;
		top:4.5%;
	left:35%;
	font-family : times new roman;
		color : black;
		text-align:center;
	}
	.x
	{
	position:absolute;
	top:16%;
	}
	.y{
	position:absolute;
		top:20%;
	left:0%;
	font-family : times new roman;
		color : black;
	}
	.z
	{
	position:absolute;
		top:96%;
	left:56%;
		
	}
	a{
	color : black;
	}
</style>
<script>
function myFunction() {
window.print();
}
</script>
</head>
<body>
<div class ="container">
<img src='../images/plus.jpg' width='80' height='80'>
<div class ='text'><h2>B.N.M Pharmacy</h2></div>
<div class ='text1'><p>12th Main Road, 27th Cross,<br>Banashankari II Stage<br>Bangalore-560070</p></div>
		<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
    $date = $_GET['id'];
    $cmpid = $_GET['id1'];	
	$sum=0;
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{ 
	    $sql3 = mysqli_query($conn,"select * from company where cmpid = '$cmpid'");
		 if(!$sql3)
		{
			echo ("not sucess");
		}
		else
		{
		if(mysqli_num_rows($sql3)>=0)
		{
		while($row = mysqli_fetch_assoc($sql3))
		{
		echo "<div class ='y'><p>&nbsp;Cmp Id : ".$row['cmpid']."<br>&nbsp;Name :".$row['cmpname']."<br>&nbsp;Address : ".$row['address']."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['state']."<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['country']."</p></div>";
		}
		}
		}
	    $sql1 = mysqli_query($conn,"select medid from stock where arriveddate = '$date' AND cmpid = '$cmpid'");
		 if(!$sql1)
		{
			echo ("not sucess");
		}
		else
		{
		echo "<table><tr><th>MEDID</th><th>MEDNAME</th><th>QUANTITY</th><th>AMOUNT</th>";
		while($row2 = mysqli_fetch_assoc($sql1))
		{
		$medid = $row2['medid'];
		$sql = mysqli_query($conn,"select m.medid , m.medname , s.price , s.fixquan from  medicine m, stock s  where m.medid = '$medid' and s.medid = '$medid'");
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
		 echo "<tr><td>".$row2['medid']."</td><td>".$row['medname']."</td><td>".$row['fixquan']."</td><td>".$row['price']."</td></tr><br>";
		  $sum= $sum+$row['price'];
		}
		}
		}
		}
		}
		}
	?>
		<tr><td></td><td></td></td><td>TOTAL AMOUNT</td><td><?php echo($sum);?></td></tr>
	</table>
	<center><button onclick = "myFunction()" >Print</button></center>
	<div class = 'z'><a href="reportview.php?id=<?php echo($cmpid); ?>">Back</a></div>
</div>	
</body>
</html>