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
	<?php if (isset($message)): ?>
		<p><b><?= $message; ?></b></p>
	<?php endif ?>
	<form method="POST">
		<p>Question No. 1</p>

		<div style="margin-left: 25px;">
			<textarea name="properties_1" cols="150" maxlength="255" placeholder="properties_1"></textarea>
			<input type="radio" name="have_properties_1" value="1">Yes
			<input type="radio" name="have_properties_1" value="0">No
			<br><br>
			<textarea name="properties_2" cols="150" maxlength="255" placeholder="properties_2"></textarea>
			<input type="radio" name="have_properties_2" value="1">Yes
			<input type="radio" name="have_properties_2" value="0">No
		</div>

		<p>Question No. 2</p>

		<div style="margin-left: 25px;">
			<textarea name="properties_3" cols="75" maxlength="255" placeholder="properties_3"></textarea>
			<textarea name="why_properties_3" cols="75" maxlength="255" placeholder="why_properties_3"></textarea>
			<input type="radio" name="have_properties_3" value="1">Yes
			<input type="radio" name="have_properties_3" value="0">No
			<br><br>
			<textarea name="properties_4" cols="75" maxlength="255" placeholder="properties_4"></textarea>
			<textarea name="why_properties_4" cols="75" maxlength="255" placeholder="why_properties_4"></textarea>
			<input type="radio" name="have_properties_4" value="1">Yes
			<input type="radio" name="have_properties_4" value="0">No
			<br><br>
			<textarea name="properties_5" cols="75" maxlength="255" placeholder="properties_5"></textarea>
			<textarea name="why_properties_5" cols="75" maxlength="255" placeholder="why_properties_5"></textarea>
			<input type="radio" name="have_properties_5" value="1">Yes
			<input type="radio" name="have_properties_5" value="0">No
			<br><br>
			<textarea name="properties_6" cols="75" maxlength="255" placeholder="properties_6"></textarea>
			<textarea name="why_properties_6" cols="75" maxlength="255" placeholder="why_properties_6"></textarea>
			<input type="radio" name="have_properties_6" value="1">Yes
			<input type="radio" name="have_properties_6" value="0">No
			<br><br>
		</div>


		<input type="submit" value="Submit">
	</form>
</body>
</html>