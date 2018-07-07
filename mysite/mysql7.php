<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Процедурное создание БД</title>
</head>

<body>
	<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	
$conn = mysqli_connect($servername, $username, $password);

	if ($conn->connect_error){
		die("Connection failed: ".mysqli_connect_error());
	}
	
	$sql = "CREATE DATABASE testDB";
	
	if (mysqli_query($conn, $sql)){
		echo "Database created successfully";
	}else{
		echo "Error ".mysqli_error($conn);
	}
	
	
	mysqli_close($conn);
	?>
	
</body>
</html>