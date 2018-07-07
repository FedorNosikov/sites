<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mysite</title>
</head>

<body>
<p>The time is now 
<? echo date('H:i:s'); ?>.</p>	
	
<?php
	echo "<p align='center'>Резюме</p> ";
	$name = "Alexandr";
	$age = 25;
	echo "$name , $age, </br>";
		echo "My friend`s name is $name </br>";
		
	$n = 10;
	$c = $age + $n;
	echo "Через 10 лет Александру будет $c лет.</br>";
	echo "Александр работает в конторе \"Рога и копыта\"";
	echo "</br>".$age.$n.$c."</br>";
	
	echo "<p align='center'>Математические действия</p> ";
	$x = $age - $n;
	$y = $age / $n;
	$z = $age * $n;
	$q = $age % $n;
	echo "</br>".$x." - Результат вычитания";
	echo "</br>".$y." - Результат деления";
	echo "</br>".$z." - Резальтат умнжения";
	echo "</br>".$q." - Результат вычисления остатка";
	
	
	if ($age == $n){
		echo "</br>Он еще ребенок";
	}
	else{
		echo "</br>Он уже не ребенок";
	}
	
	?>	
</body>
</html>