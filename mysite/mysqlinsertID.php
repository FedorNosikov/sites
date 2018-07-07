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
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	$sql = "INSERT INTO users4(name, surname, password)
	VALUES ('GLEB', 'ZHIGLOV', '777777')";
	
	if($conn->query($sql)===TRUE){
		$last_id = $conn->insert_id;
		echo "Record lasID created".$last_id;
		
	}
	
	
	$conn->close();
	
	?>
</body>
</html>