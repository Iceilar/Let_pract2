<?php
include("config_db.php");
$mysqli = mysqli_connect('localhost', $bd_user, $bd_password, $bd_name);

if ($mysqli->connect_errno)
{
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}

//$name = $_GET['name'];
//$password = $_GET['password'];

$stmt = "select id_h, name, password, kolvo_zv, number, address from hotels where name = '$name' and password = '$password'";
$result = $mysqli->query($stmt);

$row = $result->fetch_assoc();

//$result = $mysqli->query($sql);
//echo $result;
//http://localhost:8888/phpMyAdmin5/
?>