<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php require('inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<h1>Card 6</h1>
	<?php if (isset($message)): ?>
		<p><b><?= $message; ?></b></p>
	<?php endif ?>
	<form method="POST">
		<p>Question No. 1</p>

		<div style="margin-left: 25px;">
			<textarea cols="150" name="in_my_country_1" placeholder="in_my_country_1"></textarea><br><br>
			<textarea cols="150" name="in_my_country_2" placeholder="in_my_country_2"></textarea><br><br>
			<textarea cols="150" name="in_my_country_3" placeholder="in_my_country_3"></textarea><br><br>
			<textarea cols="150" name="in_netherlands_1" placeholder="in_netherlands_1"></textarea><br><br>
			<textarea cols="150" name="in_netherlands_2" placeholder="in_netherlands_2"></textarea><br><br>
			<textarea cols="150" name="in_netherlands_3" placeholder="in_netherlands_3"></textarea><br><br>
		</div>

		<input type="submit" value="Submit">
	</form>
<?php require('inc/scripts.php') ?>
</body>
</html>