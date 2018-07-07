<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Форма расчета стоимости размещения</title>
 </head>
 <body>

<style>
/*_Calendar*/
#Calendar {
    position: absolute;
    border-collapse: collapse;
    background: #FFFFFF;
    border: 1px solid #303030;
    display: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    user-select: none;
    z-index: 9999999;
    box-shadow: 0 0 15px rgba(98, 98, 206, 1);
}
#Calendar_mns{
    text-align:center;
    margin: 0;
    padding: 0;
}
#Calendar select,#Calendar option {
    font-size: 11px;
    padding: 0 2px
}
</style>



<script src="calendar_kdg.js" type="text/javascript"></script>
<form action="index2.php">
<p><b>Выберите период размещения:</b></p>
с <input type="text" value="dd-mm-yy" onfocus="this.select();_Calendar.lcs(this)"
    onclick="event.cancelBubble=true;this.select();_Calendar.lcs(this)"  data-yearfrom="-80" data-yearto="5">
по <input type="text" value="dd-mm-yy" onfocus="this.select();_Calendar.lcs(this)"
    onclick="event.cancelBubble=true;this.select();_Calendar.lcs(this)" data-yearto="5">
</p>




  <!--form method="post" action="input5.php">
   <p><b>С какими операционными системами вы знакомы?</b></p>
   <p><input type="checkbox" name="option1" value="a1" checked>Windows 95/98<Br>
   <input type="checkbox" name="option2" value="a2">Windows 2000<Br>
   <input type="checkbox" name="option3" value="a3">System X<Br> 
   <input type="checkbox" name="option4" value="a4">Linux<Br> 
   <input type="checkbox" name="option5" value="a5">X3-DOS</p>
   <p><input type="submit" value="Отправить"></p>
  </form-->


 
   <p><b>Выберите пакет размещения</b></p>
    <p><input name="paket" type="radio" value="sutki"> Сутки (240 выходов)</p>
    <p><input name="paket" type="radio" value="sutki-plus"> Сутки-плюс (480 выходов)</p>


    <p><b>Выберите количество дней размещения</b></p>
    <input type="text" name="period" size="20" >
     <p><b>Укажите длительность ролика, секунд</b></p>
    <input type="text" name="duration" size="20" >
    
    <p><input type="submit" value="Посчитать"></p>
  </form> 

<?php


$com=$_GET['paket']??false;
echo "Выбор пользователя:</br>";

if($com == 'sutki'){
	$summa = 240;
	echo "Пакет: Сутки</br>";
	echo "Выходов в сутки: $summa раз</br>";
}
elseif ($com == 'sutki-plus') {
	$summa = 480;
	echo "Пакет: Сутки-плюс</br>";
	echo "Выходов в сутки: $summa раз</br>";
}
elseif ($com) {
	echo 'Неизвестная операция';
}

$com=$_GET['duration']??false;
$duration = (int)$com;
echo "Длительность ролика $com секунд</br>";


$com=$_GET['period']??false;
$period = (int)$com;
echo "Период размещения: $com дней</br>";
$itogo = $summa*$period;
$hron = (($duration*$itogo)/60)/$period;
echo "За указанный период ролик выйдет в эфир $itogo раз</br>";
echo "Общий хронометраж составит $hron минут</br>";
echo "</br>Стоимость 1 минуты размещения составляет 15 рублей</br>";

echo "Итого, стоимость размещения до скидок составляет ". $hron*15 . " белорусских рублей.";

echo '</br>';

$com=$_GET['Calendar']??false;
echo 'Дата начала размещения:'. $com;

?>


 </body>
</html>


