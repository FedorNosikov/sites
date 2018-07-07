<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PDO способ</title>
</head>

<body>
	<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	
	try {
		
		$conn = new PDO ("mysql:host=$servername; dbname=newDB", $username, $password);
	
	echo "Connection soccessfully";
	}
	
	catch (PDOException $e)
	{
		echo "Connection falied: ".$e->getMessage();
	}
	
	
	?>
</body>
</html>