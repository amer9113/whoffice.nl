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
	<?php if (isset($message)): ?>
		<p><b><?= $message; ?></b></p>
	<?php endif ?>
	<form method="POST" enctype="multipart/form-data">
		<p>Question No. 1</p>

		<div style="margin-left: 25px;">
			<input type="checkbox" name="close_friend" value="1">close_friend
			<br><br>
			<input type="checkbox" name="colleague" value="1">colleague
			<br><br>
			<input type="checkbox" name="study_friend" value="1">study_friend
			<br><br>
			<input type="checkbox" name="sports_club_friend" value="1">sports_club_friend
			<br><br>
			<input type="checkbox" name="client_manger" value="1">client_manger
			<br><br>
			<input type="checkbox" name="knowledge" value="1">knowledge
			<br><br>
			<input type="checkbox" name="friend" value="1">friend
			<br><br>
			<input type="checkbox" name="family" value="1">family
			<br><br>
			<input type="text" name="another" placeholder="another"><br>
		</div>

		<p>Question No. 2</p>

		<div style="margin-left: 25px;">
			<textarea name="name_help_me_1" maxlength="100" cols="150" placeholder="name_help_me_1"></textarea>
			<br><br>
			<textarea name="name_help_me_2" maxlength="100" cols="150" placeholder="name_help_me_2"></textarea>
			<br><br>
			<textarea name="name_help_me_3" maxlength="100" cols="150" placeholder="name_help_me_3"></textarea>
			<br><br>
			<input type="checkbox" name="no_one_help_me" value="1">no_one_help_me
		</div>

		<p>Question No. 3</p>

		<div style="margin-left: 25px;">
			<textarea name="who_work" maxlength="100" cols="150" placeholder="who_work"></textarea>
			<br><br>
			<textarea name="when_work" maxlength="100" cols="150" placeholder="when_work"></textarea>
		</div>

		<input type="submit" value="Submit">
	</form>
<?php require('inc/scripts.php') ?>
</body>
</html>