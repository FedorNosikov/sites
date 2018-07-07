<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>передача переменной</title>
</head>

<body>
	
	<?php 
	
	$a = $_GET['a'];
	$b = $_GET['b'];
	$c=$a+$b;
	echo "</br>$c";
	
	echo "</br><a href='test.php?a=10&b=5'>a=20 & b = 5</a>";
	
	//echo $_GET['$a'];
	
	?>
</body>
</html>