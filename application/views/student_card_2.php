<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php require('inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<h1>Card 2</h1>
	<?php if (isset($message)): ?>
		<p><b><?= $message; ?></b></p>
	<?php endif ?>
	<form method="POST">
		<p>Question No. 1</p>

		<div style="margin-left: 25px;">
			<textarea name="tasks" cols="150" placeholder="tasks"></textarea>
		</div>

		<p>Question No. 2</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="work_with_team" value="1">work_with_team
			<br><br>
			<input type="checkbox" name="same_work_time" value="1">same_work_time
			<br><br>
			<input type="checkbox" name="alot_of_mony" value="1">alot_of_mony
			<br><br>
			<input type="checkbox" name="uniform" value="1">uniform
			<br><br>
			<input type="checkbox" name="travel_far" value="1">travel_far
			<br><br>
			<input type="checkbox" name="work_one_place" value="1">work_one_place
			<br><br>
			<input type="checkbox" name="with_materials" value="1">with_materials
			<br><br>
			<input type="checkbox" name="is_dangerous" value="1">is_dangerous
			<br><br>
			<input type="checkbox" name="physical_work" value="1">physical_work
			<br><br>
			<input type="checkbox" name="work_outside" value="1">work_outside
			<br><br>
			<input type="checkbox" name="work_at_night" value="1">work_at_night
			<br><br>
			<input type="checkbox" name="work_weekend" value="1">work_weekend
			<br><br>
			<textarea name="work_condetions" cols="150" placeholder="work_condetions"></textarea>
			<br><br>

			<label>good_with_me</label>
			<input type="radio" name="good_with_me" value="1">Yes
			<input type="radio" name="good_with_me" value="0">No
		</div>

		<p>Question No. 3</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="driving_license" value="1">driving_license
			<br><br>
			<input type="checkbox" name="speake_another_lang" value="1">speake_another_lang
			<br><br>
			<input type="checkbox" name="sport" value="1">sport
			<br><br>
			<input type="checkbox" name="swimming_diploma" value="1">swimming_diploma
			<br><br>
			<textarea name="other_requirements" cols="150" placeholder="other_requirements"></textarea>
			<br><br>
			<label>good_requirements</label>
			<input type="radio" name="good_requirements" value="1">Yes
			<input type="radio" name="good_requirements" value="0">No
			<br><br>
			<textarea name="another_special_requirements" cols="150" placeholder="another_special_requirements"></textarea>
			<br><br>
		</div>

		<p>Question No. 4</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="in_my_home" value="1">in_my_home
			<br><br>
			<input type="checkbox" name="in_my_health" value="1">in_my_health
			<br><br>
			<input type="checkbox" name="in_my_age" value="1">in_my_age
			<br><br>
			<input type="checkbox" name="in_my_motivation" value="1">in_my_motivation
			<br><br>
			<input type="checkbox" name="in_my_address" value="1">in_my_address
			<br><br>
			<textarea name="other_circumstance" cols="150" placeholder="other_circumstance"></textarea>
			<br><br>
			<textarea name="yes_change_circumstance" maxlength="255" cols="150" placeholder="yes_change_circumstance"></textarea>
			<br><br>
			<textarea name="no_change_circumstance" maxlength="255" cols="150" placeholder="no_change_circumstance"></textarea>
			<br><br>
		</div>

		<input type="submit" value="Submit">
	</form>
<?php require('inc/scripts.php') ?>
</body>
</html>