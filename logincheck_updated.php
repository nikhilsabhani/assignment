
<?php

	
  $username=$_POST['uname'];
  $password=$_POST['pass'];

	
  include("connection.php");

 
  $q = pg_prepare($_SESSION['con'], "my_query", "select * from login where uname=$1 and pass=$2");
  $q = pg_execute($_SESSION['con'], "my_query", array($username,$password));


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

