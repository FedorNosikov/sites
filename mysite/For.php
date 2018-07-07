<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
	
	<?php
		
	for ($i = 0, $sum=0; $i <= 1000; $i++) {
    $sum = $sum+$i;
}
	echo("Сумма свех чисел от 1 до 1000 = $sum")
	?>
</body>
</html>