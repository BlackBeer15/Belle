<?php
	$fio = trim($_POST['fio']);
	$phNumber = trim($_POST['phoneNumber']);
	$time = trim($_POST['time']);

	$fio = htmlspecialchars($fio);
	$phNumber = htmlspecialchars($phNumber);
	$time = htmlspecialchars($time);

	$fio = urldecode($fio);
	$phNumber = urldecode($phNumber);
	$time = urldecode($time);

	$message = '<!DOCTYPE html>
		<html>
		<head>
			<title>Заказ звонка</title>
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
					<td><b>Желаемое время звонка</b></td>
					<td>'.$time.'</td>
				</tr>
			</table>
		</body>
		</html>';
	$title = "Заказ звонка";
	$email = "little4biz@gmail.com";

	mail($email, $title, $message,"From: Belle.com \r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=UTF-8");
?>