<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Вывод даты</title>
</head>

<body>
	
	<?php
	
	$den []= "Понедельник";
	$den []= "Вторник";
	$den []= "Среда";
	$den []= "Четверг";
	$den []= "Пятница";
	$den []= "Суббота";
	$den []= "Воскресенье";
	
	
	date_default_timezone_set('UTC');
	$d = date("d-m-Y");
	$a = date ("N")-1;
	//echo $a;
	//echo $den[$a];
	echo "</br>";
	echo "Сегодня: $den[$a], $d";
	
	
	
	?>
	
</body>
</html>