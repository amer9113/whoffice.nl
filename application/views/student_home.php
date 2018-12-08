<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>whoffice</title>
</head>
<body>
	<h1>This is the student area !</h1>
	<h1>Welcome <?= $acc_name; ?></h1>


	<a href="<?= base_url().'student/card/1'; ?>">Card 1</a><br>
	<a href="<?= base_url().'student/card/2'; ?>">Card 2</a><br>
	<a href="<?= base_url().'student/card/3'; ?>">Card 3</a><br>
	<a href="<?= base_url().'student/card/4'; ?>">Card 4</a><br>
	<a href="<?= base_url().'student/card/5'; ?>">Card 5</a><br>
	<a href="<?= base_url().'student/card/6'; ?>">Card 6</a><br>
	<a href="<?= base_url().'student/card/7'; ?>">Card 7</a><br>
	<a href="<?= base_url().'student/card/8'; ?>">Card 8</a><br>
	<a href="<?= base_url().'student/logout'; ?>">Logout</a>
</body>
</html>