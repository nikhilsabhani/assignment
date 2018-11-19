<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	

<?php

//$con = pg_pconnect("127.0.0.1","postgres","postgres");
//pg_select_db("myadmin",$con);


//$con=pg_connect(host="127.0.0.1", port=5433, dbname="myadmin", user="postgres", password="postgres");
		
/**$connstring = (host="127.0.0.1", port=5433, dbname="myadmin", user="postgres", password="postgres");
$con = pg_connect($connstring);**/
		
//$con=pg_connect("127.0.0.1", 5433, "myadmin", "postgres", "postgres");
		
   $host        = "host = 127.0.0.1";
   $port        = "port = 5433";
   $dbname      = "dbname = myadmin";
   $credentials = "user = postgres password=postgres";
		
$con = pg_connect( "$host $port $dbname $credentials"  );
		

?>
</body>
</html>