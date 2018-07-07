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
	
	try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$sql = "INSERT INTO users4(name, surname, password)
	VALUES ('VASIA', 'KOT', '333111')";
		$conn->exec($sql); //выполнение запроса в PDP
		$last_id = $conn->lastInsertId(); //заносим в ID следующее за последним имеющимся число
		echo"last id".$last_id; //выводим на поник последнее ID
	}
	catch(PDOException $e){
		echo $sql.$e->getMessage(); //функция вывода сообщения исключения (ошибки)
	}
	$conn = null; //завершаем подключение к БД
	
	?>
</body>
</html>