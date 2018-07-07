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
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	$sql = "INSERT INTO users4(name, surname, password)
	VALUES ('ShURA', 'ZHUGAEV', '333')";
	
	if(mysqli_query($conn, $sql)){
		$last_id = mysqli_insert_id($conn);
		echo "Record lasID Version2 created";
		
	}
	
	
	mysqli_close($conn);
	
	?>
</body>
</html>