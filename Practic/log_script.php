<?php
session_start();

include("config_db.php");
$mysqli = mysqli_connect('localhost', $bd_user, $bd_password, $bd_name);

if ($mysqli->connect_errno)
{
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}

$name = $_GET['name'];
$password = $_GET['password'];

$stmt = "select name, password from hotels where name = '$name' and password = '$password'";
$result = $mysqli->query($stmt);

$row = $result->fetch_assoc();

if(is_array($row))
{
    include"hotel_opt.php";
    exit();
}
$_SESSION["otv"] = 0;
$pred = $_SERVER['HTTP_REFERER'];
header("Location: $pred");
//printf("Данный отель не зарегистрирован или неверно введено название/пароль");
//$result = $mysqli->query($sql);
//echo $result;
//http://localhost:8888/phpMyAdmin5/
?>