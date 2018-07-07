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
	$conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="CREATE TABLE users3(
	name VARCHAR (30) NOT NULL, 
	surname VARCHAR (30) NOT NULL PRIMARY KEY, 
	password VARCHAR (30) NOT NULL)";
		
		$conn->exec($sql);
	}
	catch(PDOException $e){
		echo $sql.$e->getMessage();
	}
	
$conn= null;
	
//$conn->close();
	
		
			?>
</body>
</html>