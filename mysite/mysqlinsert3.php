<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
	
	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testDB";
	
	
	try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	
	$sql = "INSERT INTO users3(name, surname, password)
	VALUES ('Sidor', 'Sidorov', '444444')";
		$conn->exec($sql);
		echo "Record users3 created";
	}
	catch(PDOException $e)
	{ 
	echo $sql.$e->getMessage();
	}
	
	$conn=null;
	?>
</body>
</html>