<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Процедурный способ</title>
</head>

<body>
	
	<?php 
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	
	$conn = mysqli_connect($servername, $username, $password);
	
	if ($conn-> connect_error){
		die ("Connection failed: ".mysqli_connect_error());
	}
	echo "Connection soccessfully";
	
	?>
</body>
</html>