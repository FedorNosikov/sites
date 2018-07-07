<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Соединение с БД</title>
</head>

<body>
	
	<?php 
	
	echo "2";
	
$db = mysqli_connect("localhost","fedor","12345","firstbd","3306");
mysqli_select_db($db,"firstbd");
mysqli_select_db($db,"firstbd");
		
$result = mysqli_query($db, "SELECT ID FROM 'firma'");

//mysqli_query($db,"INSETR ")
	
echo $result;
	
	
	
	
	
	?>
</body>
</html>