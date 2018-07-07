<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Передача методом POST</title>
</head>

<body>
	
	
	<?php 
	
	$name=$_POST['name'];
	$lastname=$_POST['lastname'];
	
	
		echo "Имя введенное на предыдущей странице: $name</br>и фамилия: $lastname";
	?>
	
</body>
</html>