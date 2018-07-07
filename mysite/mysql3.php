<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ООП способ</title>
</head>

<body>
	<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	
	$conn = new mysqli ($servername, $username, $password);
	
	if ($conn-> connect_error){
		die ("Connection failed: ".$conn->connect_error);
	}
	echo "Connection soccessfully";
	
	?>
</body>
</html>