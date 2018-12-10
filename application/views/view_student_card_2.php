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
	<form method="POST">
		<p>Question No. 1</p>

		<div style="margin-left: 25px;">
			<textarea name="tasks" cols="150" placeholder="tasks"><?= $data->tasks; ?></textarea>
		</div>

		<p>Question No. 2</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="work_with_team" value="1" <?php if ($data->work_with_team == 1): ?>
				checked
			<?php endif ?>>work_with_team
			<br><br>
			<input type="checkbox" name="same_work_time" value="1" <?php if ($data->same_work_time == 1): ?>
				checked
			<?php endif ?>>same_work_time
			<br><br>
			<input type="checkbox" name="alot_of_mony" value="1" <?php if ($data->alot_of_mony == 1): ?>
				checked
			<?php endif ?>>alot_of_mony
			<br><br>
			<input type="checkbox" name="uniform" value="1" <?php if ($data->uniform == 1): ?>
				checked
			<?php endif ?>>uniform
			<br><br>
			<input type="checkbox" name="travel_far" value="1" <?php if ($data->travel_far == 1): ?>
				checked
			<?php endif ?>>travel_far
			<br><br>
			<input type="checkbox" name="work_one_place" value="1" <?php if ($data->work_one_place == 1): ?>
				checked
			<?php endif ?>>work_one_place
			<br><br>
			<input type="checkbox" name="with_materials" value="1" <?php if ($data->with_materials == 1): ?>
				checked
			<?php endif ?>>with_materials
			<br><br>
			<input type="checkbox" name="is_dangerous" value="1" <?php if ($data->is_dangerous == 1): ?>
				checked
			<?php endif ?>>is_dangerous
			<br><br>
			<input type="checkbox" name="physical_work" value="1" <?php if ($data->physical_work == 1): ?>
				checked
			<?php endif ?>>physical_work
			<br><br>
			<input type="checkbox" name="work_outside" value="1" <?php if ($data->work_outside == 1): ?>
				checked
			<?php endif ?>>work_outside
			<br><br>
			<input type="checkbox" name="work_at_night" value="1" <?php if ($data->work_at_night == 1): ?>
				checked
			<?php endif ?>>work_at_night
			<br><br>
			<input type="checkbox" name="work_weekend" value="1" <?php if ($data->work_weekend == 1): ?>
				checked
			<?php endif ?>>work_weekend
			<br><br>
			<textarea name="work_condetions" cols="150" placeholder="work_condetions"><?= $data->work_condetions; ?></textarea>
			<br><br>

			<label>good_with_me</label>
			<input type="radio" name="good_with_me" value="1" <?php if ($data->good_with_me == 1): ?>
				checked
			<?php endif ?>>Yes
			<input type="radio" name="good_with_me" value="0" <?php if ($data->good_with_me == 0): ?>
				checked
			<?php endif ?>>No
		</div>

		<p>Question No. 3</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="driving_license" value="1" <?php if ($data->driving_license == 1): ?>
				checked
			<?php endif ?>>driving_license
			<br><br>
			<input type="checkbox" name="speake_another_lang" value="1" <?php if ($data->speake_another_lang == 1): ?>
				checked
			<?php endif ?>>speake_another_lang
			<br><br>
			<input type="checkbox" name="sport" value="1" <?php if ($data->sport == 1): ?>
				checked
			<?php endif ?>>sport
			<br><br>
			<input type="checkbox" name="swimming_diploma" value="1" <?php if ($data->swimming_diploma == 1): ?>
				checked
			<?php endif ?>>swimming_diploma
			<br><br>
			<textarea name="other_requirements" cols="150" placeholder="other_requirements"><?= $data->other_requirements; ?></textarea>
			<br><br>
			<label>good_requirements</label>
			<input type="radio" name="good_requirements" value="1" <?php if ($data->good_requirements == 1): ?>
				checked
			<?php endif ?>>Yes
			<input type="radio" name="good_requirements" value="0" <?php if ($data->good_requirements == 0): ?>
				checked
			<?php endif ?>>No
			<br><br>
			<textarea name="another_special_requirements" cols="150" placeholder="another_special_requirements"><?= $data->another_special_requirements; ?></textarea>
			<br><br>
		</div>

		<p>Question No. 4</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="in_my_home" value="1" <?php if ($data->in_my_home == 1): ?>
				checked
			<?php endif ?>>in_my_home
			<br><br>
			<input type="checkbox" name="in_my_health" value="1" <?php if ($data->in_my_health == 1): ?>
				checked
			<?php endif ?>>in_my_health
			<br><br>
			<input type="checkbox" name="in_my_age" value="1" <?php if ($data->in_my_age == 1): ?>
				checked
			<?php endif ?>>in_my_age
			<br><br>
			<input type="checkbox" name="in_my_motivation" value="1" <?php if ($data->in_my_motivation == 1): ?>
				checked
			<?php endif ?>>in_my_motivation
			<br><br>
			<input type="checkbox" name="in_my_address" value="1" <?php if ($data->in_my_address == 1): ?>
				checked
			<?php endif ?>>in_my_address
			<br><br>
			<textarea name="other_circumstance" cols="150" placeholder="other_circumstance"><?= $data->other_circumstance; ?></textarea>
			<br><br>
			<textarea name="yes_change_circumstance" maxlength="255" cols="150" placeholder="yes_change_circumstance"><?= $data->yes_change_circumstance; ?></textarea>
			<br><br>
			<textarea name="no_change_circumstance" maxlength="255" cols="150" placeholder="no_change_circumstance"><?= $data->no_change_circumstance; ?></textarea>
			<br><br>
		</div>

		<?php if ($data->edit_allow == 1): ?>
			<input type="submit" value="Alter">
		<?php endif ?>
	</form>
<?php require('inc/scripts.php') ?>
</body>
</html>