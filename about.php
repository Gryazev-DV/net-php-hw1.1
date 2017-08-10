<?php
$name = "Дмитрий";
$age = "32";
$mail = "gdv-education@yandex.ru";
$city = "Moscow";
$about = "Инженер ВКС и мультимедиа";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>About me</title>
	<link rel="stylesheet" href="about.css">
</head>
<body>
	<h1>Обо мне</h1>
	<table>
		<tr>
			<td>Имя</td>
			<td><?= $name ?></td>
		</tr>
		<tr>
			<td>Возраст</td>
			<td><?= $age ?></td>
		</tr>
		<tr>
			<td>Адрес электронной почты</td>
			<td>
			  <a href="mailto:<?=$mail ?>" title="<?= $mail ?>">
			    <?= $mail ?>
			  </a>
			</td>
		</tr>
		<tr>
			<td>Город</td>
			<td><?= $city ?></td>
		</tr>
		<tr>
			<td>О себе</td>
			<td><?= $about ?></td>
		</tr>
	</table>
</body>
</html>