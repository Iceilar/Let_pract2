<?php
include("config_db.php");
$mysqli = mysqli_connect('localhost', $bd_user, $bd_password, $bd_name);

if ($mysqli->connect_errno)
{
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}

$id_num = $_POST['id_num'];


$sql = "delete FROM numbers WHERE id_num = '$id_num'";
$mysqli->query($sql);


$pred = $_SERVER['HTTP_REFERER'];
header("Location: $pred");
//$result = $mysqli->query($sql);
//echo $result;
//http://localhost:8888/phpMyAdmin5/
?>