<?php
include("config_db.php");
$mysqli = mysqli_connect('localhost', $bd_user, $bd_password, $bd_name);

if ($mysqli->connect_errno)
{
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}




$stmt = $_SESSION["stmt"];
$result = $mysqli->query($stmt);

while($row = $result->fetch_assoc() and is_array($row))
{
    echo
    '<div class="red_n">
            
    	<img src="'.$row["photo"].'">

		<section>
			<form enctype="multipart/form-data" id="auth_form" action="hotel_opt_script_5.php" method="post"> 
			<input type="text" readonly hidden class="costil" value="'.$row["id_num"].'" name="id_num">
			<input type="text" readonly class="opi" value="Номер комнаты:">
			<input type="text" readonly id="num" value="'.$row["num"].'" name="num">
			<input type="text" readonly class="opi" value="Количество человек:">
			<input type="text" readonly id="kol_chel" value="'.$row["kol_chel"].'" name="kol_chel">
			<input type="text" readonly class="opi" value="Тип номера:">
			<input type="text" readonly value="'.$row["tip"].'">
			<input type="text" readonly class="opi" value="Цена питания за день:">
			<input type="text" readonly id="pitanie" value="'.$row["pitanie"].'" name="pitanie">
			<input type="text" readonly class="opi" value="Цена номера за день:">
			<input type="text" readonly id="price_day" value="'.$row["price_day"].'" name="price_day">
			<input type="text" readonly class="opi" value="Описание:">
			<input type="text" readonly id="opis" value="'.$row["opis"].'" name="opis">
			</form>
        </section>
    </div>
    ';
}

//$result = $mysqli->query($sql);
//echo $result;
//http://localhost:8888/phpMyAdmin5/
?>