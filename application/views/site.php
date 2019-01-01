<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__)) . '/inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<!-- <h1>Welcome to whoffice!</h1>
	<a href="login">Login as student</a>
	<br>
	<a href="login/teacher">Login as teacher</a>
	<br>
	<a href="studentSignup">Signup as a new student</a> -->
	<div class="container">
		<div class="row" style="margin-top: 250px;">
			<div class="col-sm-12 text-center">
				<a class="btn btn-danger" href="https://whoffice.nl/wp-login.php">studenten voor 2019</a>
				<a class="btn btn-primary" href="student_login">studenten na 2019</a>
			</div>
		</div>
	</div>
<?php require(realpath(dirname(__FILE__)) . '/inc/scripts.php') ?>
</body>
</html>