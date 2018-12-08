<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>whoffice</title>
</head>
<body>
	<h1>Login</h1>
	<form method="POST" action="<?= base_url().'login/validate_credential'; ?>">
		<input type="text" name="username" placeholder="Your username" required autofocus>
		<input type="password" name="password" placeholder="Your password" required><br>
		student<input type="radio" name="type" value="student" required>
		teacher<input type="radio" name="type" value="teacher" required>
		<br>
		<input type="submit" name="" value="Login">
		<?php if (isset($message)): ?>
			<p class="error_msg"><b><?= $message; ?></b></p>
		<?php endif ?>
	</form>
</body>
</html>