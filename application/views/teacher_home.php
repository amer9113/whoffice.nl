<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php require('inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<h1>This is the teacher area !</h1>
	<h1>Welcome <?= $acc_name; ?></h1>
	<a href="teacher/logout">Logout</a>
<?php require('inc/scripts.php') ?>
</body>
</html>