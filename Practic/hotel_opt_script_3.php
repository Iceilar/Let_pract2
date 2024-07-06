<?php
include("config_db.php");
$mysqli = mysqli_connect('localhost', $bd_user, $bd_password, $bd_name);

if ($mysqli->connect_errno)
{
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}

$id_h = $_POST['id_h'];

$photo = 'upload/'.basename($_FILES["image"]["name"]);
$num = $_POST['num'];
$kol_chel = $_POST['kol_chel'];
$tip = $_POST['tip'];
$pitanie = $_POST['pitanie'];
$price_day = $_POST['price_day'];
$opis = $_POST['opis'];


$sql = "insert into numbers(id_h, num, kol_chel, tip, opis, pitanie, price_day, photo) 
values('$id_h', '$num','$kol_chel','$tip','$opis','$pitanie','$price_day','$photo')";
$mysqli->query($sql);

if ($_FILES && $_FILES["image"]["error"] == UPLOAD_ERR_OK)
{
    $name = "upload/" . $_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], $name);
    echo "Файл загружен";
}

$pred = $_SERVER['HTTP_REFERER'];
header("Location: $pred");
//$result = $mysqli->query($sql);
//echo $result;
//http://localhost:8888/phpMyAdmin5/
?>