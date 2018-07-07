<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TV</title>
	<link rel="stylesheet" href="style12.css">
</head>
<body>
	
	<div class="main">
		<div class="bigblock hat">ff44</div>
		<div class="bigblock b1">
			<div class="logo-group">
				<div class="logo"><img src="logoTV2/1ngtrk.png" alt=""></div>
				<div class="site s1">БТ1</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="logoTV/2ngtrk.png" alt=""></div>
				<div class="site s2">БТ2</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="logoTV/3ngtrk.png" alt=""></div>
				<div class="site s3">БТ3</div>
			</div>
			<div class="logo-group">
				<div class="logo">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logoTV";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT passway FROM logo WHERE id=1";
$result = $conn->query($sql);

if($result->num_rows >0){
	while ($row = $result->fetch_assoc()){
		echo $row["passway"];
					}
				}
$conn->close();
?>





					</div>
				<div class="site s4">БТ4</div>
			</div>
			<div class="logo-group">
				<div class="logo">
					
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logoTV";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT passway FROM logo WHERE id=2";
$result = $conn->query($sql);

if($result->num_rows >0){
	while ($row = $result->fetch_assoc()){
		echo $row["passway"];
					}
				}
$conn->close();
?>


				</div>
				<div class="site s5">НТВ-Беларусь</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s6">Россия-Беларусь</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s7">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s8">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s9">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s10">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s11">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s12">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s13">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s14">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s15">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s16">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s17">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s18">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s19">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s20">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s21">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s22">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s23">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s24">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s25">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s26">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s27">NoizyCow.by</div>
			</div>
			<div class="logo-group">
				<div class="logo"><img src="" alt=""></div>
				<div class="site s28">NoizyCow.by</div>
			</div>
		</div>
		<div class="bigblock b2"></div>
		<div class="bigblock b3"></div>
		<div class="bigblock b4">
			<div class="site s1">NoizyCow.by</div>
			<div class="site s2">NoizyCow.by</div>
			<div class="site s3">NoizyCow.by</div>
			<div class="site s4">NoizyCow.by</div>
			<div class="site s5">NoizyCow.by</div>
			<div class="site s6">NoizyCow.by</div>
			<div class="site s7">NoizyCow.by</div>
			<div class="site s8">NoizyCow.by</div>
			<div class="site s9">NoizyCow.by</div>
			<div class="site s10">NoizyCow.by</div>
			<div class="site s11">NoizyCow.by</div>
			<div class="site s12">NoizyCow.by</div>
			<div class="site s13">NoizyCow.by</div>
			<div class="site s14">NoizyCow.by</div>
			<div class="site s15">NoizyCow.by</div>
			<div class="site s16">NoizyCow.by</div>
			<div class="site s17">NoizyCow.by</div>
			<div class="site s18">NoizyCow.by</div>
			<div class="site s19">NoizyCow.by</div>
			<div class="site s20">NoizyCow.by</div>
			<div class="site s21">NoizyCow.by</div>
			<div class="site s22">NoizyCow.by</div>
			<div class="site s23">NoizyCow.by</div>
			<div class="site s24">NoizyCow.by</div>
			<div class="site s25">NoizyCow.by</div>
			<div class="site s26">NoizyCow.by</div>
			<div class="site s27">NoizyCow.by</div>
			<div class="site s28">NoizyCow.by</div>

		</div>
		<div class="bigblock footer">ИП Носиков Ф.В. УНП 190449230, </br>зарегистрирован минским исполнительным комитетом 01.07.2018г. за № 799</br> 220103, а/я 217,</br>+375 29 645 95 17</div>
	</div>
	
</body>
</html>