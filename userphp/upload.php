<?php
session_start();
?>
<?php
$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$date = date("Y/m/d");
	$empid = $_SESSION["empid"];
	$cookie_name = "bill";
    $custid = $_COOKIE[$cookie_name];
	$cookie_name = "quan";
    $amount = $_COOKIE[$cookie_name];
	$filetmpname = addslashes($_FILES['file']['tmp_name']);
	$filename = addslashes($_FILES['file']['name']);
	$data = file_get_contents($filetmpname);
	$data1 = base64_encode($data);
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
	  $sql = mysqli_query($conn,"insert into billings values('$custid','$amount','$data1','$date','$empid')");
	  if(!$sql)
	  {
	  echo "error";
	  }
	  else
	  {
	  include("viewbill.php");
		}
	}
?>