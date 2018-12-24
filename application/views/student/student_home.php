<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>whoffice</title>
</head>
<body class="parallax">
	<h1 class="text-center">Herzlich willkommen <strong><i><?= $acc_name; ?></i></strong></h1>
	<h4 class="text-center" style="font-weight: 600">Verstrichene Zeit: <?= $this->elapsed_time; ?>&nbsp;&nbsp;&nbsp;<a href="<?= base_url().'student/logout' ?>">Ausloggen</a></h4>

	<a href="<?= base_url().'student/lesson/1'; ?>">Lektion 1</a><br>
	<a href="<?= base_url().'student/card_1'; ?>">Resultaatkaart 1</a><br>
	<a href="<?= base_url().'student/lesson/2'; ?>">Lektion 2</a><br>
	<a href="<?= base_url().'student/card_2'; ?>">Resultaatkaart 2</a><br>
	<a href="<?= base_url().'student/lesson/3'; ?>">Lektion 3</a><br>
	<a href="<?= base_url().'student/card_3'; ?>">Resultaatkaart 3</a><br>
	<a href="<?= base_url().'student/lesson/4'; ?>">Lektion 4</a><br>
	<a href="<?= base_url().'student/card_4'; ?>">Resultaatkaart 4</a><br>
	<a href="<?= base_url().'student/lesson/5'; ?>">Lektion 5</a><br>
	<a href="<?= base_url().'student/card_5'; ?>">Resultaatkaart 5</a><br>
	<a href="<?= base_url().'student/lesson/6'; ?>">Lektion 6</a><br>
	<a href="<?= base_url().'student/card_6'; ?>">Resultaatkaart 6</a><br>
	<a href="<?= base_url().'student/lesson/7'; ?>">Lektion 7</a><br>
	<a href="<?= base_url().'student/card_7'; ?>">Resultaatkaart 7</a><br>
	<a href="<?= base_url().'student/lesson/8'; ?>">Lektion 8</a><br>
	<a href="<?= base_url().'student/card_8'; ?>">Resultaatkaart 8</a><br>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>