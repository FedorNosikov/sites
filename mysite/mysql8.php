<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PDO создание БД</title>
</head>

<body>
	
	
	<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	

	try{
		$conn = new PDO ("mysql:host=$servername; dbname=testdb", $username,$password);
		$sql= "CREATE DATABASE testDB2";
		$conn->exec($sql);
		echo"Database created successfully";
	}
	catch(PDOException $e)
	{
		echo $sql.$e->getMessage();
	
	}

	?>
	
</body>
</html>