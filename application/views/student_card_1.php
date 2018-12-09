<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>whoffice</title>
</head>
<body>
	<h1>Card 1</h1>
	<?php if (isset($message)): ?>
		<p><b><?= $message; ?></b></p>
	<?php endif ?>
	<form method="POST" enctype="multipart/form-data">
		<p>Question No. 1</p>

		<div style="margin-left: 25px;">
			<textarea name="work_1" maxlength="255" cols="150" placeholder="work_1"></textarea><br>
			<textarea name="work_2" maxlength="255" cols="150" placeholder="work_2"></textarea><br>
			<textarea name="work_3" maxlength="255" cols="150" placeholder="work_3"></textarea>
		</div>

		<p>Question No. 2</p>

		<div style="margin-left: 25px;">
			<textarea name="sectors" cols="150" placeholder="sectors"></textarea><br>
			<textarea name="one_sector" maxlength="255" cols="150" placeholder="one_sector"></textarea>
		</div>

		<p>Question No. 3</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="have_certificate" value="1">have_certificate
			<input type="file" name="certificate_file">
			<br><br>
			<input type="checkbox" name="another_certificate" value="1">another_certificate
			<input type="file" name="another_certificate_file">
			<br><br>
			<input type="checkbox" name="have_certificate_cannot_view" value="1">have_certificate_cannot_view
			<br><br>
			<input type="checkbox" name="ion_certificate" value="1">ion_certificate
			<input type="text" name="ion_certificate_name" placeholder="ion_certificate_name">
			<input type="file" name="ion_certificate_file">
			<br><br>
			<input type="checkbox" name="work_with_certificate" value="1">work_with_certificate
			<br><br>
			<input type="text" name="reason_no_certificate" placeholder="reason_no_certificate" maxlength="255">
			<br><br>
			<input type="checkbox" name="experience" value="1">experience
			<br>
			<input type="checkbox" name="experience_certificate" value="1">experience_certificate
			<input type="file" name="experience_certificate_file">
			<br><br>
			<textarea name="reson_no_experience" maxlength="255" cols="150" placeholder="reson_no_experience"></textarea><br>
			<input type="checkbox" name="no_experience_certificate" value="1">no_experience_certificate
			<br><br>
		</div>

		<input type="submit" value="Submit">
	</form>

</body>
</html>