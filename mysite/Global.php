<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Глобальный массив</title>
</head>

<body>
	
	<?php 
	
	$s = $_SERVER['REMOTE_ADDR'];
	echo "Ваш IP адрес ".$s."</br>";
	$a = $_SERVER['HTTP_USER_AGENT'];
	echo "Ваш браузер и операционка: ".$a."</br>";
	$b = $_SERVER['DOCUMENT_ROOT'];
	$c = $_SERVER['GATEWAY_INTERFACE'];
	$d = $_SERVER['HTTP_ACCEPT'];
	echo "Также доп инфа: </br>".$b."</br>".$c."</br>".$d."</br>";
	
	$e =$_SERVER['HTTP_REFERER'];
	echo "Страница с который вы пришли: </br>".$e."</br>";
	?>
</body>
</html>