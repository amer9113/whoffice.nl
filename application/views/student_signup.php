<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>whoffice</title>
</head>
<body>
	<h1>Signup as a new student</h1>
	<form method="POST" action="<?= base_url().'studentSignup/signup'; ?>" enctype="multipart/form-data">
		<input type="text" name="username" placeholder="Username" required autofocus><br>
		<input type="text" name="firstname" placeholder="Firstname" required><br>
		<input type="text" name="lastname" placeholder="Lastname" required><br>
		<input type="text" name="postal_code" placeholder="Postal code" required><br>
		<input type="email" name="email" placeholder="Email" required><br>
		<input type="url" name="website" placeholder="Website"><br>
		<textarea name="bio" placeholder="About you" rows="5"></textarea><br>
		<input type="password" name="password" placeholder="Password" required><br>
		<input type="file" name="profile_image" accept="image/*"><br>

		<input type="submit" name="" value="Signup">
		<?= validation_errors('<p class="error_msg">', '</p>'); ?>
		<?php if (isset($message)): ?>
			<p class="error_msg"><b><?= $message; ?></b></p>
		<?php endif ?>
	</form>
</body>
</html>