<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
</head>

<body>
	<?php
      
	   session_start();


	   if(!isset($_SESSION['user']))
	   {
		   header("Location:login.php");
	   }

       if(session_destroy())
	   {
		   	header("Location: login.php");
	   }
?>
</body>
</html>