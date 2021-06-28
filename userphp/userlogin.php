<?php
// Start the session
session_start();
?>
<?php
	$host = "127.0.0.1";
	$user = "pms";
	$pass = "gvhindu@98";
	$dbname = "pharmacy";
	$uname = $_POST['id'];
	$pasw = $_POST['pass'];
	$c =0;
	$conn = mysqli_Connect("$host","$user","$pass","$dbname");
	if(!$conn)
	{
		echo("Server not connected".mysqli_error($conn));
	}
	else
	{
		$sql = mysqli_query($conn,"select * from login;");
		if(!$sql)
		{
			echo "Error".mysqli_error($sql);
		}
		else{
		      if($uname == "admin")
		       {
		         if(mysqli_num_rows($sql)>0)
		         {
		           while($chk1 = mysqli_fetch_assoc($sql))
		           {
			        if($uname == $chk1['uname'] && $pasw == $chk1['psword'])
			        {
				      include("../html/user.html");
				       break;	
			         }
		            }
		          }
                }
                else 
				{
		          if(mysqli_num_rows($sql)>0)
		           {
		             while($chk1 = mysqli_fetch_assoc($sql))
		             {
			           if($uname == $chk1['uname'] && $pasw == $chk1['psword'])
			            {
						 $c++;
			            }
		             }
                     if($c>0)
                     {
					     $sql1 = mysqli_query($conn,"select empid from login where uname = '$uname'");
						 if(!$sql1)
		                 {
			               echo "Error".mysqli_error($sql1);
		                 }
		                else{
		                   if(mysqli_num_rows($sql1)>0)
		                    {
		                       while($chk = mysqli_fetch_assoc($sql1))
		                        {
						          $_SESSION["username"] = $uname;
								  $_SESSION["empid"] = $chk["empid"];
								 }
							}
							}
					     include("../html/userdash.html");
                     }
                     else
                     {
					    include("../html/user.html");
                     }		
		           }
		        }
	        }
	}
?>