<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>whoffice</title>
</head>
<body class="parallax">
	<h1>This is the student area !</h1>
	<h1>Welcome <?= $acc_name; ?></h1>
	<h3>Elapsed Time : <?= $this->elapsed_time; ?></h3>


	<a href="<?= base_url().'student/lesson/1'; ?>">Card 1</a><br>
	<a href="<?= base_url().'student/lesson/2'; ?>">Card 2</a><br>
	<a href="<?= base_url().'student/lesson/3'; ?>">Card 3</a><br>
	<a href="<?= base_url().'student/lesson/4'; ?>">Card 4</a><br>
	<a href="<?= base_url().'student/lesson/5'; ?>">Card 5</a><br>
	<a href="<?= base_url().'student/lesson/6'; ?>">Card 6</a><br>
	<a href="<?= base_url().'student/lesson/7'; ?>">Card 7</a><br>
	<a href="<?= base_url().'student/lesson/8'; ?>">Card 8</a><br>
	<a href="<?= base_url().'student/logout'; ?>">Logout</a>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>