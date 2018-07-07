<?php


    echo "Hello</br>";
$a = 5;
$b = 3;


/*
if (isset($_GET['com'])) {$com = htmlspecialchars($_GET['com']);
echo "Проверка Get=com работает</br>";}
else $com = false;
echo "Пользователем передано: $com";
*/
/*
$com = (isset($_GET['com'])) ? htmlspecialchars($_GET['com']):false;
*/

$com = htmlspecialchars($_GET['com'])??false;
echo "Пользователем передано: $com</br>";

if($com == 'add'){
	$summa = $a+$b;
	echo "$a+$b =$summa";
}
elseif ($com == 'mult') {
	$mult = $a*$b;
	echo "$a*$b =$mult";
}
elseif ($com) {
	echo 'Неизвестная операция';
}


?>
</br>
<div> <a href="?com=add">сложить</a></div>
<div> <a href="?com=mult">перемножить</a></div>

<?php

$tv = [
['БТ1','БТ2','БТ3','БТ5'],
['Брест-ТВ','БУГ','БТ4-Брест'],
['Витебск-ТВ','СОЖ','Гранит','БТ4-Витебск'],
['Гомель-ТВ','Мозырь-ТВ','Речица-ТВ','БТ4-Гомель'],
['Гродно','Гродно-1','БТ4-Гродно'],
['Могилев-ТВ','БТ4-Могилев']
];

for ($i=0; $i < count($tv); $i++) {
	for($j=0;$j<count($tv[$i]);$j++)
		echo $tv[$i][$j].'<br/>';
}

?>

<?php

for ($i=0;$i<10;$i++) echo $i.',';
echo '<br/>';

$summa = 0;
$n=10;
for ($i=0;$i<=$n;$i++){
	$summa+=$i;
	echo $summa.', ';
}
echo '<br/>';
for ($i=0;$i<10;$i++){
	if ($i==3) continue;
	echo $i.', ';
	if ($i==7) break;
}


?>
<?php
echo '<br/>';

$summa=0;
$n=10;
$i=0;
while ($i<= 10) {
	$summa += $i;
	$i++;
}
echo "Сумма чисел от 1 до $n равна $summa";
echo '<br/>';

$x=0;
do{
	echo $x;
} while ($x > 10);
echo '<br/>';

$i = 0;
while ( $i< 10) :
	echo $i.',';
	$i++;
endwhile;


?>

<?php

$x=5;
echo '<br/>';
switch ($x) {
	case 1:
		echo 'пользователь выбралстраницу '. $x;
	break;
	case 2:
		echo 'пользователь выбрал страницу '. $x;
	break;
	case 3:
		echo 'пользователь выбрал страницу '. $x;
	break;
	case 4:
		echo 'пользователь выбрал страницу '. $x;
	break;
	case 5:
		echo 'пользователь выбрал страницу '. $x;
	break;
	case 6:
		echo 'пользователь выбрал страницу '. $x;
	break;
	default:
		echo 'пользователь ничего не выбрал';
		break;
}


echo '<br/>';
$arr = array(1,5,-1,0,5);
$arr=[1,5,-1,0,5, true, ' my string'];

echo $arr[6];
echo '<br/>';
for($i=0;$i<count($arr);$i++ ){
	echo $arr[$i].'<br/>';}


$arr_2 =['name' => 'Michael', 'age' =>26];
echo $arr_2['name'];
echo '<br/>';

$arr_3=[[1,2],[3,5],[10,20,17]];
echo $arr_3[0][1];
echo '<br/>';
echo $arr_3[2][2];
echo '<br/>';
echo '<br/>';
for ($i=0; $i < count($arr_3); $i++) { 
	for($j=0; $j < count($arr_3[$i]); $j++)
		echo $arr_3[$i][$j] . '<br/>';
}

echo '<br/>';

$stuff=[
['name'=>'Michael','age'=>27],
['name'=>'George','age'=>37],
['name'=>'Piter','age'=>20],
];

echo $stuff[1]['age'];
echo '<br/>';
echo $stuff[2]['name'];

echo '<br/>';

?>

<?php
echo '<br/>';
$arr = [1,5,3,56,true,'Troya',2.5];
foreach ($arr as $value) {
	echo $value.'<br/>';
}

$arr_1=[
['name'=>'Michael','age'=>27],
['name'=>'George','age'=>37],
['name'=>'Piter','age'=>20],
];
echo '<br/>';
foreach ($arr_1 as $key=>$value) {
	echo "$key - ";
	foreach ($value as $k=>$v) {
		echo "$k=$v".',';
	}
	echo '<br/>';
}

	echo '<br/>';

$arr = [];

for ($i=0; $i < 100; $i++){
	$arr[] = $i*5;
}
foreach ($arr as $value) {
	echo $value.',';
	
	}
echo '<br/>';

foreach ($arr as $key => $value) {
	$arr[$key] = $value*2;
	
}

foreach ($arr as $value) {
	echo $value.',';
}

echo "<br/>";


foreach ($arr as &$value) {
	$value*=2;
}
foreach ($arr as $value) {
	echo $value.',';
}

?>


<?php

$arr = ['Michael', 'Petrov', 26];
$fn = $arr[0];
$sn = $arr[1];
$age = $arr[2];


echo "$fn, $sn, $age";
echo "<br/>";
list ($fn, $sn, $age) = $arr;

echo "$fn, $sn, $age";
echo "<br/>";

list (, $sn, $age) = $arr;
echo "$sn, $age";
echo "<br/>";

$arr_1 = ['name1'=>'Michael','name2'=>'Igor'];
$arr_2 = ['name3'=>'Alex','name4'=>'Izia'];
$arr_3 = $arr_1+$arr_2;

foreach ($arr_3 as $value) {
	echo $value . ',';
}

echo "<br/>";
$arr_1 = ['name1'=>'Michael','name2'=>'Igor'];
$arr_2 = ['name1'=>'Alex','name2'=>'Izia', 'name3'=>'Goga'];
$arr_3 = $arr_1+$arr_2;
foreach ($arr_3 as $value) {
	echo "$value<br/>";
}
	echo '</br>';
	echo "элемент равен {$arr_1['name1']}";
	echo "{$age}N";


?>

<?php



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



function diff (int $a, int $b): int
{
	return $a - $b;
}

echo "<hr>";
echo diff(170, 171);
echo "<hr>";
echo diff(5.1, 5.5);

?>