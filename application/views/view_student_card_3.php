<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>whoffice</title>
</head>
<body>
	<h1>Card 3</h1>
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
			<textarea name="properties_1" cols="150" maxlength="255" placeholder="properties_1"><?= $data->properties_1; ?></textarea>
			<input type="radio" name="have_properties_1" value="1"<?php if ($data->have_properties_1 == 1): ?>
				checked
			<?php endif ?>>Yes
			<input type="radio" name="have_properties_1" value="0"<?php if ($data->have_properties_1 == 0): ?>
				checked
			<?php endif ?>>No
			<br><br>
			<textarea name="properties_2" cols="150" maxlength="255" placeholder="properties_2"><?= $data->properties_2; ?></textarea>
			<input type="radio" name="have_properties_2" value="1"<?php if ($data->have_properties_2 == 1): ?>
				checked
			<?php endif ?>>Yes
			<input type="radio" name="have_properties_2" value="0"<?php if ($data->have_properties_2 == 0): ?>
				checked
			<?php endif ?>>No
		</div>

		<p>Question No. 2</p>

		<div style="margin-left: 25px;">
			<textarea name="properties_3" cols="75" maxlength="255" placeholder="properties_3"><?= $data->properties_3; ?></textarea>
			<textarea name="why_properties_3" cols="75" maxlength="255" placeholder="why_properties_3"><?= $data->why_properties_3; ?></textarea>
			<input type="radio" name="have_properties_3" value="1"<?php if ($data->have_properties_3 == 1): ?>
				checked
			<?php endif ?>>Yes
			<input type="radio" name="have_properties_3" value="0"<?php if ($data->have_properties_3 == 0): ?>
				checked
			<?php endif ?>>No
			<br><br>
			<textarea name="properties_4" cols="75" maxlength="255" placeholder="properties_4"><?= $data->properties_4; ?></textarea>
			<textarea name="why_properties_4" cols="75" maxlength="255" placeholder="why_properties_4"><?= $data->why_properties_4; ?></textarea>
			<input type="radio" name="have_properties_4" value="1"<?php if ($data->have_properties_4 == 1): ?>
				checked
			<?php endif ?>>Yes
			<input type="radio" name="have_properties_4" value="0"<?php if ($data->have_properties_4 == 0): ?>
				checked
			<?php endif ?>>No
			<br><br>
			<textarea name="properties_5" cols="75" maxlength="255" placeholder="properties_5"><?= $data->properties_5; ?></textarea>
			<textarea name="why_properties_5" cols="75" maxlength="255" placeholder="why_properties_5"><?= $data->why_properties_5; ?></textarea>
			<input type="radio" name="have_properties_5" value="1"<?php if ($data->have_properties_5 == 1): ?>
				checked
			<?php endif ?>>Yes
			<input type="radio" name="have_properties_5" value="0"<?php if ($data->have_properties_5 == 0): ?>
				checked
			<?php endif ?>>No
			<br><br>
			<textarea name="properties_6" cols="75" maxlength="255" placeholder="properties_6"><?= $data->properties_6; ?></textarea>
			<textarea name="why_properties_6" cols="75" maxlength="255" placeholder="why_properties_6"><?= $data->why_properties_6; ?></textarea>
			<input type="radio" name="have_properties_6" value="1"<?php if ($data->have_properties_6 == 1): ?>
				checked
			<?php endif ?>>Yes
			<input type="radio" name="have_properties_6" value="0"<?php if ($data->have_properties_6 == 0): ?>
				checked
			<?php endif ?>>No
			<br><br>
		</div>

		<?php if ($data->edit_allow == 1): ?>
			<input type="submit" value="Alter">
		<?php endif ?>
	</form>
</body>
</html>