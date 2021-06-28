<!DOCTYPE html>
<html>
<head>
<title>pharmacy management system</title>
		<meta name = "viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,"/>
		<style>
		body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.z{	
 position:absolute;
	 top:92%;
	 left:16%;
	 font-family:Bradley Hand ITC;
	color:white;
	font-size : 18px;
	text-align:center;
	padding: 15px;

		  }
		  a {
    color: yellow;
}

		.b{
position : absolute;
	  top : 1%;
	  left :92%;
}
.e{
position : absolute;
	  top : 1%;
	  left :83%;
}

.m{
position : absolute;
	  top : 1%;
	  left :70%;
}

.topnav {
  overflow: hidden;
  background-color: #333;
  position:absolute;
  top:18%;
  width:100%;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
 }
.a{
font-family : times new roman;
position:absolute;
top:2.5%;
left:38%;
		color : white;
		font-weight : bold;
	}
	.bnm{
		position : absolute;
		top:1%;
		left :2%;
	}
	body {font-family: Arial;
   background-image: url("../images/custback.jpg");
 background-repeat: repeat-y;
  background-size: cover;
   background-attachment: fixed;
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
   top :70%;
}
.container {
    position:absolute;
	top:45%;
     left:40%;
     width:30%;
	 padding: 16px;
	 color : white;
	 }
.clearfix {
    position:absolute;
	 top:105%;
	 left:20%;
     width:28%;
}


/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
		</style>
</head>
<body>

<div class="topnav">
  <a class ="active"href="bill.php">CART</a>
  <a href="#">VIEW BILLS</a>
  <div class= "m">
  <a href="medicine.php">ADD MORE ITEMS</a>
  </div>
  <div class="b">
    <a href="../html/admindash.html">BACK</a>
  </div>
  <div class="e">
    <a href="check.php">PROCEED</a>
  </div>
</div>
<div class="a">
<center>
<h1>BILLING DETAILS</h1>
</center>
</div>
<div class="bnm">
<img src="../images/plus.jpg" width="100" height="100">
</div>

  <div class="container">
  <form method ="POST" action="upload.php" enctype = "multipart/form-data" >
	<label for="file"><b><h3>Select the Receipt just now printed</h3></b></label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="file" required>
	
    <div class="clearfix">
      <button type="submit" class="signupbtn">UPLOAD</button>  
    </div>
</form>
 </div>
</body>
</html>

