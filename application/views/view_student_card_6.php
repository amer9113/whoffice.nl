<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php require('inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<h1>Card 6</h1>
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
			<input type="checkbox" name="close_friend" value="1" <?php if ($data->close_friend == 1): ?>
				checked
			<?php endif ?>>close_friend
			<br><br>
			<input type="checkbox" name="colleague" value="1" <?php if ($data->colleague == 1): ?>
				checked
			<?php endif ?>>colleague
			<br><br>
			<input type="checkbox" name="study_friend" value="1" <?php if ($data->study_friend == 1): ?>
				checked
			<?php endif ?>>study_friend
			<br><br>
			<input type="checkbox" name="sports_club_friend" value="1" <?php if ($data->sports_club_friend == 1): ?>
				checked
			<?php endif ?>>sports_club_friend
			<br><br>
			<input type="checkbox" name="client_manger" value="1" <?php if ($data->client_manger == 1): ?>
				checked
			<?php endif ?>>client_manger
			<br><br>
			<input type="checkbox" name="knowledge" value="1" <?php if ($data->knowledge == 1): ?>
				checked
			<?php endif ?>>knowledge
			<br><br>
			<input type="checkbox" name="friend" value="1" <?php if ($data->friend == 1): ?>
				checked
			<?php endif ?>>friend
			<br><br>
			<input type="checkbox" name="family" value="1" <?php if ($data->family == 1): ?>
				checked
			<?php endif ?>>family
			<br><br>
			<input type="text" name="another" placeholder="another" value="<?= $data->another; ?>"><br>
		</div>

		<p>Question No. 2</p>

		<div style="margin-left: 25px;">
			<textarea name="name_help_me_1" maxlength="100" cols="150" placeholder="name_help_me_1"><?= $data->name_help_me_1; ?></textarea>
			<br><br>
			<textarea name="name_help_me_2" maxlength="100" cols="150" placeholder="name_help_me_2"><?= $data->name_help_me_2; ?></textarea>
			<br><br>
			<textarea name="name_help_me_3" maxlength="100" cols="150" placeholder="name_help_me_3"><?= $data->name_help_me_3; ?></textarea>
			<br><br>
			<input type="checkbox" name="no_one_help_me" value="1" <?php if ($data->no_one_help_me == 1): ?>
				checked
			<?php endif ?>>no_one_help_me
		</div>

		<p>Question No. 3</p>

		<div style="margin-left: 25px;">
			<textarea name="who_work" maxlength="100" cols="150" placeholder="who_work"><?= $data->who_work; ?></textarea>
			<br><br>
			<textarea name="when_work" maxlength="100" cols="150" placeholder="when_work"><?= $data->when_work; ?></textarea>
		</div>

		<?php if ($data->edit_allow == 1): ?>
			<input type="submit" value="Alter">
		<?php endif ?>
	</form>
<?php require('inc/scripts.php') ?>
</body>
</html>