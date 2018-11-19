<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
<?php

  $username=$_POST['uname'];
  $password=$_POST['pass'];
	
  include("connection.php");
	
  $q=pg_query("select * from login where uname='$username' and pass='$password'");
  
  $n=pg_num_rows($q);
	
  if($n<1)
  {
	  
	  echo"Username or Password are wrong";
	  header("HTTP/1.1 400 Bad Request");
	 
	  
  }
  else
  {
	  $q=pg_query("select * from login where uname='$username' and pass='$password'");
	  
	  $res=pg_fetch_array($q);
	  
	  session_start();
	  $_SESSION['user']=$res['uname'];
	  
	  header("Location: protectedpage.php");
	  //echo"welcome";
  }
	
?>
  	
</body>
</html>