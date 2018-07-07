<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
	
	<?php
	
	$servername = "localhost";
	$username = "fedor";
	$password = "12345";
		
	$conn = new mysqli($servername,$username, $password);
	
	if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}
	echo "Connection successfully";
	
	
	
	?>
</body>
</html>