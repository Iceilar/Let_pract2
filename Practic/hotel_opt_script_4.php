<?php
include("config_db.php");
$mysqli = mysqli_connect('localhost', $bd_user, $bd_password, $bd_name);

if ($mysqli->connect_errno)
{
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}

$id_h = $row["id_h"];
//echo $row["id_h"];

$stmt = "select id_num, num, kol_chel, tip, opis, pitanie, price_day, photo 
from numbers
WHERE id_h = '$id_h';";
$result = $mysqli->query($stmt);

while($row2 = $result->fetch_assoc() and is_array($row2))
{
    echo
    '<div class="red_n">
            
    <img src="'.$row2["photo"].'">
		<section id="n2" >
			<form enctype="multipart/form-data" id="auth_form" action="hotel_opt_script_5.php" method="post"> 

			<input type="text" readonly hidden class="costil" value="'.$row2["id_num"].'" name="id_num">

			<input type="text" readonly class="opi" value="Номер комнаты:">
			<input type="number" id="num" value="'.$row2["num"].'" name="num">
			<input type="text" readonly class="opi" value="Количество человек:">
			<input type="number" id="kol_chel" value="'.$row2["kol_chel"].'" name="kol_chel">
			<input type="text" readonly class="opi" value="Тип номера:">
			<input type="text" readonly class="opi" value="'.$row2["tip"].'">
			<select class="vib2" value="" name="tip">
  			<option value="Лоу кост">Лоу кост</option>
  			<option value="Стандартный" selected>Стандартный</option>
 			<option value="Сюит">Сюит</option>
  			<option value="Люкс">Люкс</option>
			</select>
			<input type="text" readonly class="opi" value="Цена питания за день:">
			<input type="number" id="pitanie" value="'.$row2["pitanie"].'" name="pitanie">
			<input type="text" readonly class="opi" value="Цена номера за день:">
			<input type="number" id="price_day" value="'.$row2["price_day"].'" name="price_day">
			<input type="text" readonly class="opi" value="Описание:">
			<input type="text" id="opis" value="'.$row2["opis"].'" name="opis">
			<input type="submit" id="_button" value="Изменить"> 
			</form>
            <form id="auth_form" action="hotel_opt_script_6.php" method="post">
            <input type="text" readonly hidden class="costil" value="'.$row2["id_num"].'" name="id_num">
            <input type="submit" id="_button" value="Удалить"> 
            </form>
        </section>
    </div>
    ';
}


//$result = $mysqli->query($sql);
//echo $result;
//http://localhost:8888/phpMyAdmin5/
?>