<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php require('inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<h1>Card 5</h1>
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
			<input type="checkbox" name="one_course" value="1" <?php if ($data->one_course == 1): ?>
				checked
			<?php endif ?>>one_course
			<br><br>
			<input type="checkbox" name="one_complate_training" value="1" <?php if ($data->one_complate_training == 1): ?>
				checked
			<?php endif ?>>one_complate_training
			<br><br>
			<input type="checkbox" name="training_one_year" value="1" <?php if ($data->training_one_year == 1): ?>
				checked
			<?php endif ?>>training_one_year
			<br><br>
			<input type="checkbox" name="training_multi_year" value="1" <?php if ($data->training_multi_year == 1): ?>
				checked
			<?php endif ?>>training_multi_year
			<br><br>
			<input type="checkbox" name="course_full_time" value="1" <?php if ($data->course_full_time == 1): ?>
				checked
			<?php endif ?>>course_full_time
			<br><br>
			<input type="checkbox" name="course_part_time" value="1" <?php if ($data->course_part_time == 1): ?>
				checked
			<?php endif ?>>course_part_time
			<br><br>
			<input type="checkbox" name="in_day" value="1" <?php if ($data->in_day == 1): ?>
				checked
			<?php endif ?>>in_day
			<br><br>
			<input type="checkbox" name="at_night" value="1" <?php if ($data->at_night == 1): ?>
				checked
			<?php endif ?>>at_night
			<br><br>
			<input type="checkbox" name="at_school" value="1" <?php if ($data->at_school == 1): ?>
				checked
			<?php endif ?>>at_school
			<br><br>
			<input type="checkbox" name="at_home" value="1" <?php if ($data->at_home == 1): ?>
				checked
			<?php endif ?>>at_home
		</div>

		<p>Question No. 2</p>

		<div style="margin-left: 25px;">
			<textarea name="course_name" maxlength="255" cols="150" placeholder="course_name"><?= $data->course_name; ?></textarea>
			<br><br>
			<textarea name="course_school" maxlength="255" cols="150" placeholder="course_school"><?= $data->course_school; ?></textarea>
			<br><br>
			<textarea name="course_period" maxlength="255" cols="150" placeholder="course_period"><?= $data->course_period; ?></textarea>
			<br><br>
			<textarea name="period_time" maxlength="255" cols="150" placeholder="period_time"><?= $data->period_time; ?></textarea>
			<br><br>
		</div>

		<p>Question No. 3</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="no_diploma" value="1" value="<?= $data->no_diploma; ?>">no_diploma
			<br><br>
			<textarea name="get_diplomas" maxlength="255" cols="150" placeholder="get_diplomas"><?= $data->get_diplomas; ?></textarea>
			<br><br>
			<label>have_diploma</label>
			<input type="radio" name="have_diploma" value="1" <?php if ($data->have_diploma == 1): ?>
				checked
			<?php endif ?>>Yes
			<input type="radio" name="have_diploma" value="0" <?php if ($data->have_diploma == 0): ?>
				checked
			<?php endif ?>>No
		</div>

		<p>Question No. 4</p>

		<div style="margin-left: 25px;">
			<input type="text" name="cost_diploma" placeholder="cost_diploma" value="<?= $data->cost_diploma; ?>"><br>
			<textarea name="get_lend" cols="150" placeholder="get_lend"><?= $data->get_lend; ?></textarea>
			<br>
			<input type="checkbox" name="can_pay" value="1" <?php if ($data->can_pay == 1): ?>
				checked
			<?php endif ?>>can_pay
			<br>
			<input type="checkbox" name="owner_pay" value="1" <?php if ($data->owner_pay == 1): ?>
				checked
			<?php endif ?>>owner_pay
			<br>
			<input type="text" name="another_pay" placeholder="another_pay" value="<?= $data->another_pay; ?>"><br>
		</div>


		<p>Question No. 5</p>

		<div style="margin-left: 25px;">
			<textarea name="Living_money" cols="150" placeholder="Living_money"><?= $data->Living_money; ?></textarea>
		</div>

		<p>Question No. 6</p>

		<div style="margin-left: 25px;">
			<label>dutch_level</label><br>
			<input type="radio" name="dutch_level" value="taalniveay" <?php if ($data->dutch_level == "taalniveay"): ?>
				checked
			<?php endif ?>>taalniveay
			<br>
			<input type="radio" name="dutch_level" value="onder 1f" <?php if ($data->dutch_level == "onder 1f"): ?>
				checked
			<?php endif ?>>onder 1f(onder a2)
			<br>
			<input type="radio" name="dutch_level" value="1f" <?php if ($data->dutch_level == "1f"): ?>
				checked
			<?php endif ?>>1f
			<br>
			<input type="radio" name="dutch_level" value="2f" <?php if ($data->dutch_level == "2f"): ?>
				checked
			<?php endif ?>>2f
			<br>
			<input type="radio" name="dutch_level" value="3f" <?php if ($data->dutch_level == "3f"): ?>
				checked
			<?php endif ?>>3f
			<br>
			<input type="radio" name="dutch_level" value="4f" <?php if ($data->dutch_level == "4f"): ?>
				checked
			<?php endif ?>>4f
			<br><br>
			<label>have_Level</label>
			<input type="radio" name="have_Level" value="1" <?php if ($data->have_Level == 1): ?>
				checked
			<?php endif ?>>Yes
			<input type="radio" name="have_Level" value="0" <?php if ($data->have_Level == 0): ?>
				checked
			<?php endif ?>>No
			<br><br>
			<label>have_diploma_Level</label>
			<input type="radio" name="have_diploma_Level" value="1" <?php if ($data->have_diploma_Level == 1): ?>
				checked
			<?php endif ?>>Yes
			<input type="radio" name="have_diploma_Level" value="0" <?php if ($data->have_diploma_Level == 0): ?>
				checked
			<?php endif ?>>No
		</div>

		<p>Question No. 7</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="can_speak_with_people" value="1" <?php if ($data->can_speak_with_people == 1): ?>
				checked
			<?php endif ?>>can_speak_with_people
			<br><br>
			<input type="checkbox" name="instructions" value="1" <?php if ($data->instructions == 1): ?>
				checked
			<?php endif ?>>instructions
			<br><br>
			<input type="checkbox" name="meet" value="1" <?php if ($data->meet == 1): ?>
				checked
			<?php endif ?>>meet
			<br><br>
			<input type="checkbox" name="email" value="1" <?php if ($data->email == 1): ?>
				checked
			<?php endif ?>>email
			<br><br>
			<input type="checkbox" name="telephone" value="1" <?php if ($data->telephone == 1): ?>
				checked
			<?php endif ?>>telephone
			<br><br>
			<input type="checkbox" name="report" value="1" <?php if ($data->report == 1): ?>
				checked
			<?php endif ?>>report
			<br><br>
			<input type="checkbox" name="speak_client" value="1" <?php if ($data->speak_client == 1): ?>
				checked
			<?php endif ?>>speak_client
			<br><br>
			<input type="checkbox" name="contact_colleague" value="1" <?php if ($data->contact_colleague == 1): ?>
				checked
			<?php endif ?>>contact_colleague
			<br><br>
			<input type="checkbox" name="work_paper" value="1" <?php if ($data->work_paper == 1): ?>
				checked
			<?php endif ?>>work_paper
			<br><br>
			<input type="checkbox" name="short_report" value="1" <?php if ($data->short_report == 1): ?>
				checked
			<?php endif ?>>short_report
			<br><br>
			<textarea name="another_report" cols="150" placeholder="another_report"><?= $data->another_report; ?></textarea>
			<br><br>
			<label>can_good</label>
			<input type="radio" name="can_good" value="1" <?php if ($data->can_good == 1): ?>
				checked
			<?php endif ?>>Yes
			<input type="radio" name="can_good" value="0" <?php if ($data->can_good == 0): ?>
				checked
			<?php endif ?>>No
		</div>

		<p>Question No. 8</p>

		<div style="margin-left: 25px;">
			<textarea name="language_trajectory" cols="150" placeholder="language_trajectory"><?= $data->language_trajectory; ?></textarea>
			<br><br>
			<textarea name="work_language_trajectory" cols="150" placeholder="work_language_trajectory"><?= $data->work_language_trajectory; ?></textarea>
			<br><br>
			<input type="checkbox" name="study_lang" value="1" <?php if ($data->study_lang == 1): ?>
				checked
			<?php endif ?>>study_lang
			<br><br>
			<input type="text" size="150" name="study_lang_type" placeholder="study_lang_type" value="<?= $data->study_lang_type; ?>"><br><br>
			<input type="text" size="150" name="study_lang_where" placeholder="study_lang_where" value="<?= $data->study_lang_where; ?>"><br><br>
			<input type="text" size="150" name="study_lang_when" placeholder="study_lang_when" value="<?= $data->study_lang_when; ?>"><br><br>
			<input type="checkbox" name="study_lang_no" value="1" <?php if ($data->study_lang_no == 1): ?>
				checked
			<?php endif ?>>study_lang_no
		</div>

		<?php if ($data->edit_allow == 1): ?>
			<input type="submit" value="Alter">
		<?php endif ?>
	</form>
<?php require('inc/scripts.php') ?>
</body>
</html>