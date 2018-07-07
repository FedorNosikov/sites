<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hello</h1>
<?php

//выводим дату
$dat = date("d.m.y");
$dat2= date ("h.i.s");
echo $dat;
echo "</br>";
echo $dat2;
echo "</br>";


//определяем тип переменной
echo gettype($dat);
echo "</br>";

//проверяем наличие переменной - выводит либо true либо false
echo isset($dat2);

$var = 10;
echo "</br>";
echo isset($var);

//удаляем переменную
unset($var);
echo "</br>";
echo isset($var);
echo "</br>";


//константы
define("pi", 3.14);
echo pi;
echo "</br>";

// печать в браузере

$a = array ('a'=>'aple',
            'b'=>'car',
            'c'=>'dog');
//выводіт массив
print_r($a);
echo "</br>";
//выводит значение
print_r("$a[a]");

echo "</br>";

//серверные данные и foreach

foreach ($_SERVER as $k => $z)
    echo "<b>$k</b> = <b>$z</b></br>";



?>
</body>
</html>