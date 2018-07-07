<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Функции</title>
</head>

<body>
	
	<?php
	
	linkphoto();
	echo "</br>";
	
	function square($a)
	{
	
		$result = $a*$a;
		echo $result;
		
	}
	
	$new = 25;
	
	echo "Квадрат $new равен - ";
	
	square($new);
	
	
	function linkphoto()
		
	{
		echo "<a href='http://photoshop-master.ru'>Уроки фотошоп</a>";
	}
	
	?>
	
</body>
</html>