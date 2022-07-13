<?php
	$fio = trim($_POST['fiores']);
	$phNumber = trim($_POST['phoneres']);
	$area = trim($_POST['area']);
	$dateweed = trim($_POST['dateweed']);

	$fio = htmlspecialchars($fio);
	$phNumber = htmlspecialchars($phNumber);
	$area = htmlspecialchars($area);
	$dateweed = htmlspecialchars($dateweed);

	$fio = urldecode($fio);
	$phNumber = urldecode($phNumber);
	$area = urldecode($area);
	$dateweed = urldecode($dateweed);

	$message = '<!DOCTYPE html>
		<html>
		<head>
			<title>Бронирование "PERSONAL"</title>
			<meta charset="utf-8">
			<style type="text/css">
				table {
					margin: 0 auto;
					border-collapse: collapse;
					text-align: center;
					background-color: #FFF4E7;
					color: #000;
				}

				td {
					border: 2px solid #000;
					width: 300px;
					height: 35px;
				}

				td:first-child {
					font-weight: bold;
				}
			</style>
		</head>
		<body>
			<table>
				<tr>
					<td><b>ФИО</b></td>
					<td>'.$fio.'</td>
				</tr>
				<tr>
					<td><b>Номер телефона</b></td>
					<td>'.$phNumber.'</td>
				</tr>
				<tr>
					<td><b>Банкетная площадка</b></td>
					<td>'.$area.'</td>
				</tr>
				<tr>
					<td><b>Дата</b></td>
					<td>'.$dateweed.'</td>
				</tr>
			</table>
		</body>
		</html>';
	$title = "Бронирование PERSONAL";
	$email = "little4biz@gmail.com";

	mail($email, $title, $message,"From: Belle.com \r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=UTF-8");
?>