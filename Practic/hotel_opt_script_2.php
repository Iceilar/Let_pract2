<?php
include("config_db.php");
$mysqli = mysqli_connect('localhost', $bd_user, $bd_password, $bd_name);

if ($mysqli->connect_errno)
{
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}

$id = $_POST['id'];

$name = $_POST['name'];
$password = $_POST['password'];
$address = $_POST['address'];
$kolvo_zv = $_POST['kolvo_zv'];
$number = $_POST['number'];

if($kolvo_zv < 0 and $kolvo_zv > 5)
{
    echo "Количество звёзд введено неправильно";
    exit;
}

$sql = "update hotels SET name = '$name', password = '$password', 
address = '$address', kolvo_zv = '$kolvo_zv', number = '$number' WHERE hotels.id_h = '$id';";
$mysqli->query($sql);


$pred = $_SERVER['HTTP_REFERER'];
header("Location: $pred");
//$result = $mysqli->query($sql);
//echo $result;
//http://localhost:8888/phpMyAdmin5/
?>