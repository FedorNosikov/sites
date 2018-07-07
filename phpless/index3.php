<?php
echo "Урок функции";
/*declare (strict_types = 1);*/

function hello()
{
	echo "string<hr>";
}
echo '</br>';

function helloCoutn($count =2){
	if (!is_int($count)){
echo "Count должен быть числом</br>";
return;

	}
	for($i=0;$i<$count;$i++) hello();
		}

function summa ($a, $b, $return = false){
	if ($return) return ($a+$b);

	echo "$a + $b = " . ($a+$b);
}


function getSumma ($a,$b){
	$summa = $a+$b;
	return $summa;
}

function summaN(){
if (func_num_args()==0){
	echo "Необходимо как минимум два параметра";
	return;
}
	$summa = 0;
	for($i=0;$i<func_num_args();$i++){
		$arg = func_get_arg($i);
		if (!is_numeric($arg)){
			echo "Параметры должны быть числовыми";
			return;
		}
		$summa += $arg;
	}
	return $summa;
}

helloCoutn(5);
helloCoutn("5");
helloCoutn();

summa(5,-36);
echo '</br>';
/*summa();*/

$summa = getSumma (10,5);
echo "</br>$summa";


function change (&$x){

	$x++;
}

$a = 5;
change($a);
echo "</br>$a";
echo "<hr>";
echo summaN(5,6,7,21,2,'-5');
echo "<hr>";
echo summaN();
echo "<hr>";
echo summaN(43, 45,"dfsf" );



function diff ($a, $b): int
{
	return $a - $b;
}

echo "<hr>";
echo diff(170, 171);
echo "<hr>";
echo diff(5.1, 5.5);

function diff2 ($a, $b)
{
	return $a - $b;
}

echo "<hr>";
echo diff(170, 171);
echo "<hr>";
echo diff2(5.1, 5.5);



?>