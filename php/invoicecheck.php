<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$phoneno = $_POST['phoneno'];
	$ct=0;
	$cookie_name = "phone";
    $cookie_value = $phoneno;
    setcookie($cookie_name, $cookie_value,time() + (86400 * 30), "/");
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	   $sql = mysqli_query($conn,"select * from customer");
		if(!$sql)
		{
			echo ("not success");
		}
		else
		{
		if(mysqli_num_rows($sql)>=0)
		{
		 while($chk = mysqli_fetch_assoc($sql))
		{
           if($phoneno == $chk['phoneno'] )
			{
			 $ct++;
			}
			}
			if($ct==1 )
			{?>
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
width:460px;
      padding:16px;
      border:1px solid #ccc;
      background:#fff; 
	 min-height:95%;
	  position:absolute;
	  left:20%;
	  word-wrap: normal
	  
	  }
table{
 border-collapse: collapse;
 border: 1.5px solid black;
	table-layout:fixed;
	width :90%;
	position:absolute;
top:35%;
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
	 border: solid 1.5px black; 
     border: solid 1.5px black;
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
<div class ='text'><h2>Pharmacy Store</h2></div>
<div class ='text1'><p>12th Main Road, 27th Cross,<br>Banashankari II Stage<br>Bangalore-560070</p></div>
		<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
$cookie_name = "phone";
    $phoneno = $_POST['phoneno'];	
	$sum1=0;
	$ct=1;
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	     $sql1 = mysqli_query($conn,"select * from customer where phoneno = '$phoneno'");
		 if(!$sql1)
		{
			echo ("not sucess");
		}
		else
		{
		if(mysqli_num_rows($sql1)>=0)
		{
		while($row = mysqli_fetch_assoc($sql1))
		{
		$id5= $row['custid'];
		echo "<div class ='y'><p>&nbsp;Cust Id : ".$row['custid']."<br>&nbsp;Name :".$row['custname']."<br>&nbsp;PhoneNo : ".$row['phoneno']."</p></div>";
		}
		}
		}
		 $sql = mysqli_query($conn,"select * from bill");
		 if(!$sql)
		{
			echo ("not sucess");
		}
		else
		{
		if(mysqli_num_rows($sql)>=0)
		{
		echo "<table><tr><th>Sno</th><th>Name</th><th>Quantity</th><th>Price</th>";
		 while($row = mysqli_fetch_assoc($sql))
		{
		  $id = $row["medid"];
		   $sql1 = mysqli_query($conn,"select * from medicine where medid='$id'");
		   if(!$sql1)
		{
			echo ("not sucess");
		}
		else
		{
		if(mysqli_num_rows($sql1)>=0)
		{
		 while($row1 = mysqli_fetch_assoc($sql1))
		{  
		   echo "<tr><td>".$ct."</td><td>" .$row1["medname"]."</td><td>".$row["quantity"]."</td><td>RS".$row["price"]."</td></tr>";
		   $ct++;
		   $sum1 = $sum1+$row["price"];
		   
		}
		$discount = $sum1*0.2;
		$sum= $sum1-$discount;
		}
		}
		} 
		}
		}
		}
	?>
	<tr><td></td><td></td></td><td>AMOUNT</td><td><?php echo("Rs".$sum1);?></td></tr>
	<tr><td></td><td></td></td><td>Discounted AMOUNT</td><td><?php echo("Rs".$discount);?></td></tr>
	<tr><td></td><td></td></td><td>TOTAL AMOUNT</td><td><?php echo("Rs".$sum);?></td></tr>
	</table>
	<center><p>Congratulations You have availed discount of Rs<?php echo($discount) ?></p></center>
	<center><button onclick = "myFunction()" >Print</button></center>
	<div class = 'z'><a href="clear.php?id=<?php echo($id5)?>">Continue</a></div>
</div>	
</body>
</html>
			<?php
			}
			else
			{
			include("addcust.php");
			}
			}
			}
	}
	?>