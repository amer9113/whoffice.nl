<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php require('inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<h1>Card 8</h1>
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
			<textarea cols="150" name="in_my_country_1" placeholder="in_my_country_1"><?= $data->in_my_country_1; ?></textarea><br><br>
			<textarea cols="150" name="in_my_country_2" placeholder="in_my_country_2"><?= $data->in_my_country_2; ?></textarea><br><br>
			<textarea cols="150" name="in_my_country_3" placeholder="in_my_country_3"><?= $data->in_my_country_3; ?></textarea><br><br>
			<textarea cols="150" name="in_netherlands_1" placeholder="in_netherlands_1"><?= $data->in_netherlands_1; ?></textarea><br><br>
			<textarea cols="150" name="in_netherlands_2" placeholder="in_netherlands_2"><?= $data->in_netherlands_2; ?></textarea><br><br>
			<textarea cols="150" name="in_netherlands_3" placeholder="in_netherlands_3"><?= $data->in_netherlands_3; ?></textarea><br><br>
		</div>

		<?php if ($data->edit_allow == 1): ?>
			<input type="submit" value="Alter">
		<?php endif ?>
	</form>
<?php require('inc/scripts.php') ?>
</body>
</html>