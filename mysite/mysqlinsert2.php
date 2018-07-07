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
	
	$sql = "INSERT INTO users2(name, surname, password)
	VALUES ('Petr', 'Petrov', '55512345')";
	
	if(mysqli_query($conn, $sql)){
		
		echo "Record created";
		
	}
		
	mysqli_close($conn);
	?>
</body>
</html>