<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Вствка данных в таблицу БД</title>
</head>

<body>
	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "testDB";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	$sql = "INSERT INTO users(name, surname, password)
	VALUES ('IVAN', 'Ivanov', '12345')";
	
	if($conn->query($sql)===TRUE){
		
		echo "Record created";
		
	}
	
	
	$conn->close();
	
	?>
</body>
</html>