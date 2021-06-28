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
	top:22%;
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
.cd{
	font-family:Bradley Hand ITC;
	color:white;
font-size:18px;
}
		</style>
</head>
<body>

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
  <form method ="POST" action="med.php">
    <center><h3>Medicine Details</h3></center>
	 <div class ="cd">
 <P>FINISH ADDING&nbsp;&nbsp;&nbsp;<a href="stock1.php">CLICK HERE</a></p>
 </div>
	<label for="medid"><b>Medicine ID:</b></label>
    <input type="text" placeholder="MID001" name="medid" required>
		
    <label for="medname"><b>Name:</b></label>
    <input type="text" placeholder="Enter Name" name="medname" required>

    <label for="mfgdate"><b>Select mfgdate :</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="mfgdate" required><br><br>
	
	    <label for="expdate"><b>Select expdate :</b></label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="expdate"  required><br><Br>

    <label for="expdate"><b>Select type :</b></label><br>
	<input type="radio" name="type" value="skincareproducts" checked> Skin care products&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="type" value="medicines"> Medicine<br>
    <input type="radio" name="type" value="babycareproducts"> Baby care products&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="type" value="toilteries"> Toilteries<br><br>
  
    <label for="boxno"><b>Boxno/Shelfno :</b></label>
    <input type="text" placeholder="Enter boxno" name="boxno" required>
    
	<label for="tabprice"><b>price:</b></label>
    <input type="text" placeholder="Enter price for single tablet" name="tabprice" required>
		
	<label for="quantity"><b>quantity :</b></label>
    <input type="text" placeholder="Enter quantity" name="quantity" required>
	
	<label for="arrivaldate"><b>Select Arrival date</b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="arrivaldate" required><br><br>
	
    <div class="clearfix">
      <button type="submit" class="signupbtn">SUBMIT</button>  
    </div>
</body>
</html>
