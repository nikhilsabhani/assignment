
<?php
	
	class connection
	{
		function conn($host,$port,$dbname,$credentials)
		{
			$con = pg_connect( "$host $port $dbname $credentials"  );
			$_SESSION['con']=$con;
		}

	}
	
	$obj = new connection();
		
	$obj->conn("host = 127.0.0.1","port = 5433","dbname = myadmin","user = postgres password=postgres");
		
	
?>
