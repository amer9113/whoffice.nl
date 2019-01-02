<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>

	 <h1 class="text-center">Welkom <strong><i><?= $acc_name; ?></i></strong></h1>
	<h4 class="text-center" style="font-weight: 600">Verstreken tijd: <?= $this->elapsed_time; ?>&nbsp;&nbsp;&nbsp;<a href="<?= base_url().'student/logout' ?>">Uitloggen</a></h4>
	<!--
	<a href="<?= base_url().'student/lesson/1'; ?>">les 1</a><br>
	<a href="<?= base_url().'student/card_1'; ?>">Resultaatkaart 1</a><br>
	<a href="<?= base_url().'student/lesson/2'; ?>">les 2</a><br>
	<a href="<?= base_url().'student/card_2'; ?>">Resultaatkaart 2</a><br>
	<a href="<?= base_url().'student/lesson/3'; ?>">les 3</a><br>
	<a href="<?= base_url().'student/card_3'; ?>">Resultaatkaart 3</a><br>
	<a href="<?= base_url().'student/lesson/4'; ?>">les 4</a><br>
	<a href="<?= base_url().'student/card_4'; ?>">Resultaatkaart 4</a><br>
	<a href="<?= base_url().'student/lesson/5'; ?>">les 5</a><br>
	<a href="<?= base_url().'student/card_5'; ?>">Resultaatkaart 5</a><br>
	<a href="<?= base_url().'student/lesson/6'; ?>">les 6</a><br>
	<a href="<?= base_url().'student/card_6'; ?>">Resultaatkaart 6</a><br>
	<a href="<?= base_url().'student/lesson/7'; ?>">les 7</a><br>
	<a href="<?= base_url().'student/card_7'; ?>">Resultaatkaart 7</a><br>
	<a href="<?= base_url().'student/lesson/8'; ?>">les 8</a><br>
	<a href="<?= base_url().'student/card_8'; ?>">Resultaatkaart 8</a><br> -->

	<div class="container">
		<div class="row" style="margin-top: 250px;">
			<div class="col-sm-12 text-center">
				<a class="btn btn-danger" target="_blank" href="<?= base_url().'student/lesson/1'; ?>">ONA-Lessen</a>
				<a class="btn btn-primary" target="_blank" href="<?= base_url().'suspention/comming_soon'; ?>">ONA-Praktijk</a>
				<a class="btn btn-success" target="_blank" href="<?= base_url().'Student_text/learn_hol'; ?>">ONA-Onderwijs</a>
				<a class="btn btn-success" target="_blank" href="<?= base_url().'Student_text/work_hol'; ?>">ONA-werk en inkomen</a>
				<a class="btn btn-success" target="_blank" href="<?= base_url().'suspention/comming_soon'; ?>">ONA Functies</a>
			</div>
		</div>
	</div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>