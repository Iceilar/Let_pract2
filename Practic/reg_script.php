<?php
session_start();

include("config_db.php");
$mysqli = mysqli_connect('localhost', $bd_user, $bd_password, $bd_name);

if ($mysqli->connect_errno)
{
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}

$name = $_POST['name'];
$password = $_POST['password']; 
//echo $name;
//echo $password;

$stmt = "select name, password from hotels where name = '$name'";
$result = $mysqli->query($stmt);

$row = $result->fetch_assoc();

if(is_array($row))
{
    $_SESSION["otv"] = 0;
    $pred = $_SERVER['HTTP_REFERER'];
    header("Location: $pred");
    exit();
}

$sql = "insert into hotels (name, password, kolvo_zv, number, address) values('$name','$password', '0', '0', '0')";
$result = $mysqli->query($sql);
include"hotel_opt.php";
?>