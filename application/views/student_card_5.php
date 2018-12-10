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
	<?php if (isset($message)): ?>
		<p><b><?= $message; ?></b></p>
	<?php endif ?>
	<form method="POST" enctype="multipart/form-data">
		<p>Question No. 1</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="one_course" value="1">one_course
			<br><br>
			<input type="checkbox" name="one_complate_training" value="1">one_complate_training
			<br><br>
			<input type="checkbox" name="training_one_year" value="1">training_one_year
			<br><br>
			<input type="checkbox" name="training_multi_year" value="1">training_multi_year
			<br><br>
			<input type="checkbox" name="course_full_time" value="1">course_full_time
			<br><br>
			<input type="checkbox" name="course_part_time" value="1">course_part_time
			<br><br>
			<input type="checkbox" name="in_day" value="1">in_day
			<br><br>
			<input type="checkbox" name="at_night" value="1">at_night
			<br><br>
			<input type="checkbox" name="at_school" value="1">at_school
			<br><br>
			<input type="checkbox" name="at_home" value="1">at_home
		</div>

		<p>Question No. 2</p>

		<div style="margin-left: 25px;">
			<textarea name="course_name" maxlength="255" cols="150" placeholder="course_name"></textarea>
			<br><br>
			<textarea name="course_school" maxlength="255" cols="150" placeholder="course_school"></textarea>
			<br><br>
			<textarea name="course_period" maxlength="255" cols="150" placeholder="course_period"></textarea>
			<br><br>
			<textarea name="period_time" maxlength="255" cols="150" placeholder="period_time"></textarea>
			<br><br>
		</div>

		<p>Question No. 3</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="no_diploma" value="1">no_diploma
			<br><br>
			<textarea name="get_diplomas" maxlength="255" cols="150" placeholder="get_diplomas"></textarea>
			<br><br>
			<label>have_diploma</label>
			<input type="radio" name="have_diploma" value="1">Yes
			<input type="radio" name="have_diploma" value="0">No
		</div>

		<p>Question No. 4</p>

		<div style="margin-left: 25px;">
			<input type="text" name="cost_diploma" placeholder="cost_diploma"><br>
			<textarea name="get_lend" cols="150" placeholder="get_lend"></textarea>
			<br>
			<input type="checkbox" name="can_pay" value="1">can_pay
			<br>
			<input type="checkbox" name="owner_pay" value="1">owner_pay
			<br>
			<input type="text" name="another_pay" placeholder="another_pay"><br>
		</div>


		<p>Question No. 5</p>

		<div style="margin-left: 25px;">
			<textarea name="Living_money" cols="150" placeholder="Living_money"></textarea>
		</div>

		<p>Question No. 6</p>

		<div style="margin-left: 25px;">
			<label>dutch_level</label><br>
			<input type="radio" name="dutch_level" value="taalniveay">taalniveay
			<br>
			<input type="radio" name="dutch_level" value="onder 1f">onder 1f(onder a2)
			<br>
			<input type="radio" name="dutch_level" value="1f">1f
			<br>
			<input type="radio" name="dutch_level" value="2f">2f
			<br>
			<input type="radio" name="dutch_level" value="3f">3f
			<br>
			<input type="radio" name="dutch_level" value="4f">4f
			<br><br>
			<label>have_Level</label>
			<input type="radio" name="have_Level" value="1">Yes
			<input type="radio" name="have_Level" value="0">No
			<br><br>
			<label>have_diploma_Level</label>
			<input type="radio" name="have_diploma_Level" value="1">Yes
			<input type="radio" name="have_diploma_Level" value="0">No
		</div>

		<p>Question No. 7</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="can_speak_with_people" value="1">can_speak_with_people
			<br><br>
			<input type="checkbox" name="instructions" value="1">instructions
			<br><br>
			<input type="checkbox" name="meet" value="1">meet
			<br><br>
			<input type="checkbox" name="email" value="1">email
			<br><br>
			<input type="checkbox" name="telephone" value="1">telephone
			<br><br>
			<input type="checkbox" name="report" value="1">report
			<br><br>
			<input type="checkbox" name="speak_client" value="1">speak_client
			<br><br>
			<input type="checkbox" name="contact_colleague" value="1">contact_colleague
			<br><br>
			<input type="checkbox" name="work_paper" value="1">work_paper
			<br><br>
			<input type="checkbox" name="short_report" value="1">short_report
			<br><br>
			<textarea name="another_report" cols="150" placeholder="another_report"></textarea>
			<br><br>
			<label>can_good</label>
			<input type="radio" name="can_good" value="1">Yes
			<input type="radio" name="can_good" value="0">No
		</div>

		<p>Question No. 8</p>

		<div style="margin-left: 25px;">
			<textarea name="language_trajectory" cols="150" placeholder="language_trajectory"></textarea>
			<br><br>
			<textarea name="work_language_trajectory" cols="150" placeholder="work_language_trajectory"></textarea>
			<br><br>
			<input type="checkbox" name="study_lang" value="1">study_lang
			<br><br>
			<input type="text" size="150" name="study_lang_type" placeholder="study_lang_type"><br><br>
			<input type="text" size="150" name="study_lang_where" placeholder="study_lang_where"><br><br>
			<input type="text" size="150" name="study_lang_when" placeholder="study_lang_when"><br><br>
			<input type="checkbox" name="study_lang_no" value="1">study_lang_no
		</div>

		<input type="submit" value="Submit">
	</form>
<?php require('inc/scripts.php') ?>
</body>
</html>