<?php
	$chList = 'https://disk.yandex.ru/i/bGqduAE5TOkLSg';

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$date = trim($_POST['date']);

	$name = htmlspecialchars($name);
	$email = htmlspecialchars($email);
	$date = htmlspecialchars($date);

	$name = urldecode($name);
	$email = urldecode($email);
	$date = urldecode($date);

	$messageClient = '<!DOCTYPE html>
		<html>
		<head>
			<title>ЧЕК-ЛИСТ</title>
			<meta charset="utf-8">
			<style type="text/css">
				body {
					text-align: center;
				}
			</style>
		</head>
		<body>
			Здравствуйте, '.$name.'<br/>
			Ваш ЧЕК-ЛИСТ<br/>
			'.$chList.'
		</body>
		</html>';

	$title = "ЧЕК-ЛИСТ";

	mail($email, $title, $messageClient,"From: Belle.com \r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=UTF-8");
?>