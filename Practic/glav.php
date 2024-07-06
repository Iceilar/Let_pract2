<?php
session_start();
include"header.php";
?>

<html>
<head>
	<title> AAG_22 </title>
	
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <link rel="stylesheet" href="style.css"/>
</head>


<body>
<div align="center">
<main id="main_">
		<br>
		<h3>Поиск по критериям</h3>
		<section id="n2">
			<form id="auth_form" action="glav_script.php" method="post"> 

				<input type="text" readonly class="opi" value="(Включительно)">
				<input type="text" readonly class="har" value="От">
				<input type="text" readonly class="har" value="До">

				<input type="text" readonly class="opi" value="Количество человек:">
				<input type="number" min="1" max="10" class="har" id="kol_chel" value="1" name="kol_chel">
				<input type="number" min="1" max="10" class="har" id="kol_chel" value="5" name="kol_chel2">

				<input type="text" readonly class="opi" value="Кол-во звёзд:">
				<input type="number" min="0" max="5" class="har" id="kolvo_zv" value="0" name="kolvo_zv">
				<input type="number" min="0" max="5" class="har" id="kolvo_zv" value="5" name="kolvo_zv2">

				<input type="text" readonly class="opi" value="Тип номера:">
				<select class="vib" name="tip">
				<option value="0"selected>Любой</option>
				<option value="Лоу кост">Лоу кост</option>
				<option value="Стандартные">Стандартный</option>
				<option value="Сюит">Сюит</option>
				<option value="Люкс">Люкс</option>
				</select>

				<input type="text" readonly class="opi" value="Цена питания за день:">
				<input type="number" min="0" max="50000" class="har" id="pitanie" value="0" name="pitanie">
				<input type="number" min="0" max="50000" class="har" id="pitanie" value="50000" name="pitanie2">

				<input type="text" readonly class="opi" value="Цена номера за день:">
				<input type="number" min="1" max="100000" class="har" id="price_day" value="1" name="price_day">
				<input type="number" min="1" max="100000" class="har" id="price_day" value="100000" name="price_day2">
				
				<input type="submit" class="har" id="_button" value="Поиск"> 
			</form>
		</section>
	<br>
	<br>
	<br>
	<h3>Варианты:</h3>

	<?php 
	if(isset($_SESSION["stmt"]))
		include"glav_script_2.php";
		include"footer.php";
	?>

	
</main>
</div>
</body>
</html>