<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
	<?php
	
	$box = array("Персик", "Огурец","Миндаль");
	
	list($fruit, $vegetable,$nutt) = $box;
	
	echo "$fruit</br>$vegetable</br>$nutt";
	
	?>
</body>
</html>