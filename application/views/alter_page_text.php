<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require('inc/head.php') ?>
	<title>whoffice</title>

	<style type="text/css">
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		  text-align: center;
		}
	</style>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend>Add New Text:</legend>
			<input type="" name="name" maxlength="255" placeholder="Name" value="<?= $data->name; ?>">
			<input type="" name="text" size="50" placeholder="Text" value="<?= $data->text; ?>">
			<input type="" name="text_ar" size="50" placeholder="Arabic Text" value="<?= $data->text_ar; ?>">
			<input type="number" min="1" max="8" name="page_nr" placeholder="Page No." value="<?= $data->page_nr; ?>">
			<button type="submit">Alter</button>
			<?= validation_errors('<p class="error_msg">', '</p>'); ?>
			<?php if (isset($message)): ?>
				<p class="error_msg"><b><?= $message; ?></b></p>
			<?php endif ?>
		</fieldset>
	</form>

	
<?php require('inc/scripts.php') ?>
</body>
</html>