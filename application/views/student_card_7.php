<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php require('inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<h1>Card 7</h1>
	<?php if (isset($message)): ?>
		<p><b><?= $message; ?></b></p>
	<?php endif ?>
	<form method="POST" enctype="multipart/form-data">
		<p>Question No. 1</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="vacancies" value="1">vacancies
			<br><br>
			<input type="checkbox" name="open_application" value="1">open_application
			<br><br>
			<input type="text" name="other_way" placeholder="other_way"><br>
		</div>

		<p>Question No. 2</p>

		<div style="margin-left: 25px;">
			<input type="text" name="volunteering" placeholder="volunteering"><br><br>
			<input type="text" name="no_volunteering" placeholder="no_volunteering">
		</div>

		<p>Question No. 3</p>

		<div style="margin-left: 25px;">
			<textarea name="have_job" maxlength="" cols="150" placeholder="have_job"></textarea>
			<br><br>
			<textarea name="no_job" maxlength="" cols="150" placeholder="no_job"></textarea>
			<br><br>
			<textarea name="search_job" maxlength="" cols="150" placeholder="search_job"></textarea>
		</div>

		<p>Question No. 4</p>

		<div style="margin-left: 25px;">
			<textarea name="way_application_form_1" maxlength="255" cols="150" placeholder="way_application_form_1"></textarea>
			<br><br>
			<textarea name="way_application_form_2" maxlength="255" cols="150" placeholder="way_application_form_2"></textarea>
			<br><br>
			<textarea name="way_application_form_3" maxlength="255" cols="150" placeholder="way_application_form_3"></textarea>
		</div>

		<p>Question No. 5</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="app_form_work" value="1">app_form_work
			<input type="file" name="app_form_work_file">
			<br><br>

			<input type="checkbox" name="app_form_another_work" value="1">app_form_another_work
			<input type="file" name="app_form_another_work_file_1">
			<input type="file" name="app_form_another_work_file_2">
			<br><br>

			<input type="checkbox" name="motivation" value="1">motivation
			<input type="file" name="motivation_file">
			<br><br>

			<input type="checkbox" name="have_cv" value="1">have_cv
			<input type="file" name="cv">
			<br><br>
		</div>

		<p>Question No. 6</p>

		<div style="margin-left: 25px;">
			<textarea name="help_letter" cols="150" placeholder="help_letter"></textarea>
		</div>

		<p>Question No. 7</p>

		<div style="margin-left: 25px;">
			<textarea name="good_points" cols="150" placeholder="good_points"></textarea>
			<br><br>
			<textarea name="need_to_be_good_1" maxlength="255" cols="150" placeholder="need_to_be_good_1"></textarea>
			<br><br>
			<textarea name="way_to_be_good_1" cols="150" placeholder="way_to_be_good_1"></textarea>
			<br><br>
			<textarea name="need_to_be_good_2" maxlength="255" cols="150" placeholder="need_to_be_good_2"></textarea>
			<br><br>
			<textarea name="way_to_be_good_2" cols="150" placeholder="way_to_be_good_2"></textarea>
			<br><br>
			<textarea name="need_to_be_good_3" maxlength="255" cols="150" placeholder="need_to_be_good_3"></textarea>
			<br><br>
			<textarea name="way_to_be_good_3" cols="150" placeholder="way_to_be_good_3"></textarea>
		</div>

		<input type="submit" value="Submit">
	</form>
<?php require('inc/scripts.php') ?>
</body>
</html>