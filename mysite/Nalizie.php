<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
	
	<?php
	$a = 8;
	$b = 10;
	
	if (isset($a))
	{
		
		echo "Переменная a существует и ее значние равно $a</br>";
	}
	else
	{
		echo "Переменная a НЕ существует</br>";
	}
	
	unset($b);
	
	if (isset($b))
	{
		
		echo "Переменная b существует и ее значние равно $b</br>";
	}
	else
	{
		echo "Переменная  b НЕ существует</br>";
	}
	
	
	?>
</body>
</html>