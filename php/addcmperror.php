<!DOCTYPE html>
<html>
<head>
<title>pharmacy management system</title>
		<meta name = "viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,"/>
		<link rel = "stylesheet" type = "text/css" href = "../css/stock.css"/>
		<style>
		 body {font-family: Arial;
    background-image: url("../images/custback.jpg");
	height: 580px;
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text],input[type=password]{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
 name,password{
  width: 50%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 14px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 2px 2px;
	border-radius: 10px;
	width:35%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
  float: center;
  width: 100%;
}
.container {
    position:absolute;
	top:40%;
     left:35%;
     width:30%;
	 padding: 16px;
	 color : white;
	 }
.clearfix {
    position:relative;
	 top:90%;
	 left:32%;
     width:28%;
}


/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
		</style>
</style>
		<script>
function myFunction() {
    alert("already company id  exits");
}
</script>
</head>
<body onload ="myFunction()" >

<div class="topnav">
  <a href="stock1.php">MEDICINES</a>
  <a href="stock2.php">TOILTERIES</a>
  <a href="stock3.php">BABY CARE PRODUCTS</a>
  <a href="stock4.php">SKIN CARE PRODUCTS</a>
  <a class="active" href="addproducts.php">ADD PRODUCTS</a>
  <a href="cdetails.php">COMPANY</a>
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

  <div class="container">
  <form method ="POST" action="evaluatecmpid.php">
    <center><h3>Company Details</h3></center>
	
	<label for="cmpid"><b>company ID :</b></label>
    <input type="text" placeholder="CMP001" pattern="cmp[0-9]{3,4}" name="cmpid" required>
		
    <div class="clearfix">
      <button type="submit" class="signupbtn">CHECK</button>  
    </div>
</body>
</html>
