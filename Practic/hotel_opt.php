<?php
//session_start();
include"header.php";

?>

<html>
<head>
	<title> AAG_22 </title>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <link rel="stylesheet" href="style.css"/>
</head>
<body>
<br>
<br>
<?php
include"hotel_opt_script.php";//Название отеля: Пароль:Адрес:Кол-во звёзд:Номер телефона: 
?>
<div align="center">
<main id="main_">
		
		<section id="n1" >
			<form id="auth_form" action="hotel_opt_script_2.php" method="post">
			<h3>Информация отеля</h3>
			<input type="text" readonly class="opi" value="ID">
			<input type="text" readonly id="name" value="<?php echo $row["id_h"]; ?>" name="id">
			<input type="text" readonly class="opi" value="Название отеля:">
			<input type="text" id="name" value="<?php echo $row["name"]; ?>" name="name">
			<input type="text" readonly class="opi" value="Пароль:">
			<input type="text" id="password" value="<?php echo $row["password"]; ?>" name="password">
			<input type="text" readonly class="opi" value="Адрес:">
			<input type="text" id="address" value="<?php echo $row["address"]; ?>" name="address">
			<input type="text" readonly class="opi" value="Кол-во звёзд:">
			<input type="number" min="0" max="5" id="kolvo_zv" value="<?php echo $row["kolvo_zv"]; ?>" name="kolvo_zv">
			<input type="text" readonly class="opi" value="Номер телефона:">
			<input type="tel" pattern="[7-8][0-9]{3}[0-9]{3}[0-9]{4}" id="number" value="<?php echo $row["number"]; ?>" name="number">
			<input type="submit" id="_button" value="Сохранить"> 
			</form>
		</section>
		<br><h3>Добавление номеров</h3>
		<section id="n2">
			<form enctype="multipart/form-data" id="auth_form" action="hotel_opt_script_3.php" method="post"> 
			
			<input type="text" readonly hidden class="costil" value="<?php echo $row["id_h"]; ?>" name="id_h">

			<input type="text" readonly class="opi" value="Фото номера:">
			<input type="file" id="image" value=" " name="image"> 
			<input type="text" readonly class="opi" value="Номер комнаты:">
			<input type="number" id="num" value="0" name="num">
			<input type="text" readonly class="opi" value="Количество человек:">
			<input type="number" id="kol_chel" value="0" name="kol_chel">
			<input type="text" readonly class="opi" value="Тип номера:">
			<select class="vib" name="tip">
  			<option value="Лоу кост"selected>Лоу кост</option>
  			<option value="Стандартные">Стандартные</option>
 			<option value="Сюит">Сюит</option>
  			<option value="Люкс">Люкс</option>
			</select>
			<input type="text" readonly class="opi" value="Цена питания за день:">
			<input type="number" id="pitanie" value="0" name="pitanie">
			<input type="text" readonly class="opi" value="Цена номера за день:">
			<input type="number" id="price_day" value="0" name="price_day">
			<input type="text" readonly class="opi" value="Описание:">
			<input type="text" id="opis" value=" " name="opis">
			<input type="submit" id="_button" value="Создать"> 
			</form>
	</section>
	<br>
	<br>
	<br>
	<h3>Управление номерами</h3>
	<?php include"hotel_opt_script_4.php";?>
</main>
</div>

</body>
<?php
//include"footer.php"; 			<input type="text" id="tip" placeholder="Тип:" name="name">

?>