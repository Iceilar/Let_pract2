<?php
session_start();
include"header.php";
?>

<html>
<head>
	<title> AAG_22 </title>
	
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <link rel="stylesheet" href="style.css"/>
	 
</head>
<body>

<main id="main_">
		<br>
		<br>
		<br>
		<div align="center">				
	<section class="sec">
		<form id="auth_form" action="log_script.php" method="get"> 
        <input type="text" id="name" placeholder="Название отеля" name="name"> 
        <input type="password" id="password" placeholder="Пароль" name="password">
        <input type="submit" id="_button2" value="Авторизоваться">
		<?php 
			if(isset($_SESSION["otv"]))
				{echo "<h3> Введённые данные неверны </h3>";
				unset($_SESSION['otv']);}
		?>
		</form>
	</section>
</div>
</main>

</body>

<?php
include"footer.php";
?>