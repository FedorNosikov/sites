<?php

$servername = "localhost";
$username = "root";
$password = "";


try {
	$conn = new PDO("mysql:host=$servername; dbname=NewDB", $username, $password);
	echo "Connect successfully";
}

catch (PDOExeption $e){
	echo "Connection failed: " . $e->getMessage();
}
?>


</br>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "NewDB";


try{
$conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "CREATE TABLE users(
name VARCHAR (30) NOT NULL,
surname VARCHAR (30) NOT NULL PRIMARY KEY,
password VARCHAR (30) NOT NULL)";

$conn->exec($sql);
}
catch (PDOExeption $e){
echo $sql . $e->getMessage();
}

$conn = null;
?>