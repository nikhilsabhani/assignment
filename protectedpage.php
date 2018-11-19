<?php
		session_start();
        
        echo "Welcome &nbsp";
        echo $_SESSION['user'];
		
		if(!isset($_SESSION['user']))
		{
			header("Location:login.php");
			
		}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<a href="logout.php"  style="margin-left: 1000px">Logout</a>
</body>
</html>