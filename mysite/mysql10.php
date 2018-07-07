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
	if ($conn->connect_error){
		
		die ("Connection falied: ".$con->mysqli_connect_error());
	}
	
	$sql="CREATE TABLE users2(
	name VARCHAR (30) NOT NULL, 
	surname VARCHAR (30) NOT NULL PRIMARY KEY, 
	password VARCHAR (30) NOT NULL)";
	
	if(mysqli_query($conn, $sql)){
		echo"Table users2 created soccessfully";
	}else{
		echo "Error".mysqli_error($conn);
			
	}
	
	$conn->close()
	
		
			?>
</body>
</html>