<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>whoffice</title>
</head>
<body>
	<h1>Card 4</h1>
	<a href="<?= base_url().'student'; ?>">Close</a>
	<?php if (isset($message)): ?>
		<p><b><?= $message; ?></b></p>
		<script>
			window.onload = function() {
				if ( window.history.replaceState ) {
			        window.history.replaceState( null, null, window.location.href );
			    }
			}
		</script>
	<?php endif ?>
	<form method="POST" enctype="multipart/form-data">
		<p>Question No. 1</p>

		<div style="margin-left: 25px;">
			<textarea name="place_vacancies_find_1" cols="150" maxlength="255" placeholder="place_vacancies_find_1"><?= $data->place_vacancies_find_1; ?></textarea>
			<br><br>
			<textarea name="place_vacancies_find_2" cols="150" maxlength="255" placeholder="place_vacancies_find_2"><?= $data->place_vacancies_find_2; ?></textarea>
			<br><br>
			<textarea name="place_vacancies_find_3" cols="150" maxlength="255" placeholder="place_vacancies_find_3"><?= $data->place_vacancies_find_3; ?></textarea>
		</div>

		<p>Question No. 2</p>

		<div style="margin-left: 25px;">
			<input type="number" name="num_vacancies_find" placeholder="num_vacancies_find" value="<?= $data->num_vacancies_find; ?>">
			<br><br>
		</div>

		<p>Question No. 3</p>

		<div style="margin-left: 25px;">
			<label>chance_work</label><br>
			<input type="radio" name="chance_work" value="0" <?php if ($data->chance_work == 0): ?>
				checked
			<?php endif ?>>ضخم
			<input type="radio" name="chance_work" value="1" <?php if ($data->chance_work == 1): ?>
				checked
			<?php endif ?>>معقول
			<input type="radio" name="chance_work" value="2" <?php if ($data->chance_work == 2): ?>
				checked
			<?php endif ?>>صغير
			<br><br>
		</div>

		<p>Question No. 4</p>

		<div style="margin-left: 25px;">
			<label>Job offer 1</label><br><br>
			<input type="date" name="job_offer_1_date" placeholder="job_offer_1_date" value="<?= $data->job_offer_1_date; ?>"><br>
			<input type="text" name="job_offer_1_profession" placeholder="job_offer_1_profession" value="<?= $data->job_offer_1_profession; ?>"><br>
			<input type="text" name="job_offer_1_company" placeholder="job_offer_1_company" value="<?= $data->job_offer_1_company; ?>"><br>
			<input type="text" name="job_offer_1_place" placeholder="job_offer_1_place" value="<?= $data->job_offer_1_place; ?>"><br>
			<input type="file" name="job_offer_1_file">
			<?php if ($data->job_offer_1_file != ""): ?>
				<a href="<?= base_url().'ext/student_documents/'.$data->job_offer_1_file; ?>" target="_blank">View file</a>
			<?php endif ?>
			<br><br>
			<label>job_offer_1_yes_no</label><br>
			<input type="radio" name="job_offer_1_yes_no" value="0" <?php if ($data->job_offer_1_yes_no == 0): ?>
				checked
			<?php endif ?>>no
			<input type="radio" name="job_offer_1_yes_no" value="1" <?php if ($data->job_offer_1_yes_no == 1): ?>
				checked
			<?php endif ?>>yes
			<input type="text" name="job_offer_1_reason" placeholder="job_offer_1_reason" size="150" value="<?= $data->job_offer_1_reason; ?>">
			<br><br><br><br>
			<label>Job offer 2</label><br><br>
			<input type="date" name="job_offer_2_date" placeholder="job_offer_2_date" value="<?= $data->job_offer_2_date; ?>"><br>
			<input type="text" name="job_offer_2_profession" placeholder="job_offer_2_profession" value="<?= $data->job_offer_2_profession; ?>"><br>
			<input type="text" name="job_offer_2_company" placeholder="job_offer_2_company" value="<?= $data->job_offer_2_company; ?>"><br>
			<input type="text" name="job_offer_2_place" placeholder="job_offer_2_place" value="<?= $data->job_offer_2_place; ?>"><br>
			<input type="file" name="job_offer_2_file">
			<?php if ($data->job_offer_2_file != ""): ?>
				<a href="<?= base_url().'ext/student_documents/'.$data->job_offer_2_file; ?>" target="_blank">View file</a>
			<?php endif ?>
			<br><br>
			<label>job_offer_2_yes_no</label><br>
			<input type="radio" name="job_offer_2_yes_no" value="0" <?php if ($data->job_offer_2_yes_no == 0): ?>
				checked
			<?php endif ?>>no
			<input type="radio" name="job_offer_2_yes_no" value="1" <?php if ($data->job_offer_2_yes_no == 1): ?>
				checked
			<?php endif ?>>yes
			<input type="text" name="job_offer_2_reason" placeholder="job_offer_2_reason" size="150" value="<?= $data->job_offer_2_reason; ?>">
		</div>


		<p>Question No. 5</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="is_enough_work" value="1" <?php if ($data->is_enough_work == 1): ?>
				checked
			<?php endif ?>>is_enough_work
			<br><br>
			<textarea name="is_little_work" maxlength="255" cols="150" placeholder="is_little_work"><?= $data->is_little_work; ?></textarea><br>
			<textarea name="another_work" maxlength="255" cols="150" placeholder="another_work"><?= $data->another_work; ?></textarea><br>
			<textarea name="go_first" maxlength="255" cols="150" placeholder="go_first"><?= $data->go_first; ?></textarea><br>
			<textarea name="go_first_reason" maxlength="255" cols="150" placeholder="go_first_reason"><?= $data->go_first_reason; ?></textarea><br>
		</div>

		<?php if ($data->edit_allow == 1): ?>
			<input type="submit" value="Alter">
		<?php endif ?>
	</form>
</body>
</html>