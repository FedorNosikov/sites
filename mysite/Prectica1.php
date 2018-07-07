<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Switch + Massivs</title>
</head>

<body>
	<?php
	$month = "январь";
	$koeff = array("0.8","1.0", "1.7");
	
	switch($month)
	{
		case "январь";
		echo $koeff[0];
			break;
		case "февраль";
		echo "коэффициент 1";
			break;
		case "март";
		echo "коэффициент 1";
			break;
		case "апрель";
		echo "коэффициент 1";
			break;
		case "май";
		echo "коэффициент 1";
			break;
		case "июнь";
		echo "коэффициент 1";
			break;
		case "июль";
		echo "коэффициент 1";
			break;
		case "август";
		echo "коэффициент 0.8";
			break;
		case "сентябрь";
		echo "коэффициент 1";
			break;
		case "октябрь";
		echo "коэффициент 1";
			break;
		case "ноябрь";
		echo "коэффициент 1";
			break;
		case "декабрь";
		echo "коэффициент 1";
			break;
		case "с 21 декабря по 7 января";
		echo "коэффициент 1,7";
			break;
		default:
		echo "выберите период размещения";
			break;
			
		
	}
	
	?>
</body>
</html>