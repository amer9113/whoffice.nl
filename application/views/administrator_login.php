<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php require('inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<h1>Administrator Login</h1>
	<form method="POST" action="<?= base_url().'AdministratorLogin/validate_credential'; ?>">
		<input type="text" name="username" placeholder="Your username" required autofocus>
		<input type="password" name="password" placeholder="Your password" required><br>
		<br>
		<input type="submit" name="" value="Login">
		<?php if (isset($message)): ?>
			<p class="error_msg"><b><?= $message; ?></b></p>
		<?php endif ?>
	</form>
<?php require('inc/scripts.php') ?>
</body>
</html>