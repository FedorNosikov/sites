<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Создание таблицы</title>
</head>

<body>
	
	
	<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testDB";
	
	$conn = new mysqli ($servername, $username, $password, $dbname);
	if ($conn->connect_error){
		
		die ("Connection falied: ".$con->connect_error);
	}
	
	$sql="CREATE TABLE users(
	name VARCHAR (30) NOT NULL, 
	surname VARCHAR (30) NOT NULL PRIMARY KEY, 
	password VARCHAR (30) NOT NULL)";
	
	if($conn->query($sql)===TRUE){
		echo"Table created soccessfully";
	}else{
		echo "Error".$conn->error;
			
	}
	
	$conn->close()
	
	
		
		
	
	?>
</body>
</html>