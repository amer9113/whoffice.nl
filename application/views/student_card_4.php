<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php require('inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<h1>Card 4</h1>
	<?php if (isset($message)): ?>
		<p><b><?= $message; ?></b></p>
	<?php endif ?>
	<form method="POST" enctype="multipart/form-data">
		<p>Question No. 1</p>

		<div style="margin-left: 25px;">
			<textarea name="place_vacancies_find_1" cols="150" maxlength="255" placeholder="place_vacancies_find_1"></textarea>
			<br><br>
			<textarea name="place_vacancies_find_2" cols="150" maxlength="255" placeholder="place_vacancies_find_2"></textarea>
			<br><br>
			<textarea name="place_vacancies_find_3" cols="150" maxlength="255" placeholder="place_vacancies_find_3"></textarea>
		</div>

		<p>Question No. 2</p>

		<div style="margin-left: 25px;">
			<input type="number" name="num_vacancies_find" placeholder="num_vacancies_find">
			<br><br>
		</div>

		<p>Question No. 3</p>

		<div style="margin-left: 25px;">
			<label>chance_work</label><br>
			<input type="radio" name="chance_work" value="0">ضخم
			<input type="radio" name="chance_work" value="1">معقول
			<input type="radio" name="chance_work" value="2">صغير
			<br><br>
		</div>

		<p>Question No. 4</p>

		<div style="margin-left: 25px;">
			<label>Job offer 1</label><br><br>
			<input type="date" name="job_offer_1_date" placeholder="job_offer_1_date"><br>
			<input type="text" name="job_offer_1_profession" placeholder="job_offer_1_profession"><br>
			<input type="text" name="job_offer_1_company" placeholder="job_offer_1_company"><br>
			<input type="text" name="job_offer_1_place" placeholder="job_offer_1_place"><br>
			<input type="file" name="job_offer_1_file"><br><br>
			<label>job_offer_1_yes_no</label><br>
			<input type="radio" name="job_offer_1_yes_no" value="0">no
			<input type="radio" name="job_offer_1_yes_no" value="1">yes
			<input type="text" name="job_offer_1_reason" placeholder="job_offer_1_reason" size="150">
			<br><br><br><br>
			<label>Job offer 2</label><br><br>
			<input type="date" name="job_offer_2_date" placeholder="job_offer_2_date"><br>
			<input type="text" name="job_offer_2_profession" placeholder="job_offer_2_profession"><br>
			<input type="text" name="job_offer_2_company" placeholder="job_offer_2_company"><br>
			<input type="text" name="job_offer_2_place" placeholder="job_offer_2_place"><br>
			<input type="file" name="job_offer_2_file"><br><br>
			<label>job_offer_2_yes_no</label><br>
			<input type="radio" name="job_offer_2_yes_no" value="0">no
			<input type="radio" name="job_offer_2_yes_no" value="1">yes
			<input type="text" name="job_offer_2_reason" placeholder="job_offer_2_reason" size="150">
		</div>


		<p>Question No. 5</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="is_enough_work" value="1">is_enough_work
			<br><br>
			<textarea name="is_little_work" maxlength="255" cols="150" placeholder="is_little_work"></textarea><br>
			<textarea name="another_work" maxlength="255" cols="150" placeholder="another_work"></textarea><br>
			<textarea name="go_first" maxlength="255" cols="150" placeholder="go_first"></textarea><br>
			<textarea name="go_first_reason" maxlength="255" cols="150" placeholder="go_first_reason"></textarea><br>
		</div>

		<input type="submit" value="Submit">
	</form>
<?php require('inc/scripts.php') ?>
</body>
</html>