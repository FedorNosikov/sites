<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Коэффициент размещения</title>
</head>

<body>
	<?php
	
	
	function cost($price, $koef, $discount)
	{
		$result = ($price*$koef)/100*(100-$discount);
		echo $result;
	}
	
	
	$koef1 = 0.8;
	$koef2 = 1.0;
	$koef3 = 1.7;
	$price = 100;
	
	echo "Стоисомть размещения с учетом сезонного коэффициента равна - ";
	
	$discount1 = 20;
	$discount2 = 30;
	
	cost( $price, $koef1, $discount1);
	
	
	
	?>
</body>
</html>