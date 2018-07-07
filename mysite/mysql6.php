<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Создание БД</title>
</head>

<body>
	
	<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	
$conn = new mysqli ($servername, $username, $password);

	if ($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	}
	
	$sql = "CREATE DATABASE testDB";
	
	if ($conn->query($sql)===TRUE){
		echo "Database created successfully";
	}else{
		echo "Erro ".$conn->error;
	}
	
	?>
</body>
</html>