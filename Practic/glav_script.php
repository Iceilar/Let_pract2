<?php
session_start();

include("config_db.php");
$mysqli = mysqli_connect('localhost', $bd_user, $bd_password, $bd_name);

if ($mysqli->connect_errno)
{
    printf("no connect: %s\n", $mysqli_connect_error);
    exit();
}


$kol_chel = $_POST['kol_chel'];
$kolvo_zv = $_POST['kolvo_zv'];
$pitanie = $_POST['pitanie'];
$price_day = $_POST['price_day'];

$tip = $_POST['tip'];
if($tip == 0)
{$tip2 = '';}
else
{$tip2 = "and tip = '$tip'";}

$kol_chel2 = $_POST['kol_chel2'];
$kolvo_zv2 = $_POST['kolvo_zv2'];
$pitanie2 = $_POST['pitanie2'];
$price_day2 = $_POST['price_day2'];

$stmt = "select * from numbers n left join hotels h on n.id_h = h.id_h
WHERE kol_chel >= '$kol_chel' and kol_chel <= '$kol_chel2'
and kolvo_zv >= '$kolvo_zv' and kolvo_zv <= '$kolvo_zv2'
and pitanie >= '$pitanie' and pitanie <= '$pitanie2'
and price_day >= '$price_day' and price_day <= '$price_day2'
 '$tip2'
;";

$result = $mysqli->query($stmt);
$_SESSION["stmt"] = $stmt;


$pred = $_SERVER['HTTP_REFERER'];
header("Location: $pred");
//$result = $mysqli->query($sql);
//echo $result;
//http://localhost:8888/phpMyAdmin5/
?>