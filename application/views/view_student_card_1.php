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
	<form method="POST" action="<?= base_url().'student/submit_card_1'; ?>" enctype="multipart/form-data">
		<p>Question No. 1</p>

		<div style="margin-left: 25px;">
			<textarea name="work_1" maxlength="255" cols="150" placeholder="work_1"><?= $data->work_1; ?></textarea><br>
			<textarea name="work_2" maxlength="255" cols="150" placeholder="work_2"><?= $data->work_2; ?></textarea><br>
			<textarea name="work_3" maxlength="255" cols="150" placeholder="work_3"><?= $data->work_3; ?></textarea>
		</div>

		<p>Question No. 2</p>

		<div style="margin-left: 25px;">
			<textarea name="sectors" cols="150" placeholder="sectors"><?= $data->sectors; ?></textarea><br>
			<textarea name="one_sector" maxlength="255" cols="150" placeholder="one_sector"><?= $data->one_sector; ?></textarea>
		</div>

		<p>Question No. 3</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="have_certificate" value="1" <?php if ($data->have_certificate == 1): ?>
				checked
			<?php endif ?>>have_certificate

			<?php if ($data->have_certificate == 1): ?>
				<a href="<?= base_url().'ext/student_certificates/'.$data->certificate_name; ?>" target="_blank">View file</a>
			<?php endif ?>

			<input type="file" name="certificate_file">

			<br><br>

			<input type="checkbox" name="another_certificate" value="1" <?php if ($data->another_certificate == 1): ?>
				checked
			<?php endif ?>>another_certificate


			<?php if ($data->another_certificate == 1): ?>
				<a href="<?= base_url().'ext/student_certificates/'.$data->another_certificate_name; ?>" target="_blank">View file</a>
			<?php endif ?>

			<input type="file" name="another_certificate_file">

			<br><br>

			<input type="checkbox" name="have_certificate_cannot_view" value="1" <?php if ($data->have_certificate_cannot_view == 1): ?>
				checked
			<?php endif ?>>have_certificate_cannot_view

			<br><br>

			<input type="checkbox" name="ion_certificate" value="1" <?php if ($data->ion_certificate == 1): ?>
				checked
			<?php endif ?>>ion_certificate
			<input type="text" name="ion_certificate_name" placeholder="ion_certificate_name" value="<?= $data->ion_certificate_name; ?>">

			<?php if ($data->ion_certificate == 1): ?>
				<a href="<?= base_url().'ext/student_certificates/'.$data->ion_certificate_file; ?>" target="_blank">View file</a>
			<?php endif ?>

			<input type="file" name="ion_certificate_file">
			<br><br>
			<input type="checkbox" name="work_with_certificate" value="1" <?php if ($data->work_with_certificate == 1): ?>
				checked
			<?php endif ?>>work_with_certificate
			<input type="text" name="reason_no_certificate" placeholder="reason_no_certificate" maxlength="255" value="<?= $data->reason_no_certificate; ?>">
			<br><br>
			<input type="checkbox" name="experience" value="1" <?php if ($data->experience == 1): ?>
				checked
			<?php endif ?>>experience
			<br>
			<input type="checkbox" name="experience_certificate" value="1" <?php if ($data->experience_certificate == 1): ?>
				checked
			<?php endif ?>>experience_certificate

			<?php if ($data->experience_certificate == 1): ?>
				<a href="<?= base_url().'ext/student_certificates/'.$data->experience_certificate_file; ?>" target="_blank">View file</a>
			<?php endif ?>
			
			<input type="file" name="experience_certificate_file" value="<?= $data->experience_certificate_file; ?>">
			<br><br>
			<textarea name="reson_no_experience" maxlength="255" cols="150" placeholder="reson_no_experience"><?= $data->reson_no_experience; ?></textarea><br>
			<input type="checkbox" name="no_experience_certificate" value="1" <?php if ($data->no_experience_certificate == 1): ?>
				checked
			<?php endif ?>>no_experience_certificate
			<br><br>
		</div>


		<?php if ($data->edit_allow == 1): ?>
			<input type="submit" value="Alter">
		<?php endif ?>
		
	</form>

</body>
</html>