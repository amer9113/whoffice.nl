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
	<table style="width:100%">
		<thead>
			<tr>
				<th>Name</th>
				<th>Text</th>
				<th>Arabic Text</th>
				<th>Page No.</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pages_texts as $key => $row): ?>
				<tr>
					<td><?= $row->name; ?></td>
					<td><?= $row->text; ?></td>
					<td><?= $row->text_ar; ?></td>
					<td><?= $row->page_nr; ?></td>
					<td><a href="<?= base_url().'teacher/alter_page_text/'.$row->id; ?>">Edit</a></td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<br>

	<form method="POST" action="">
		<fieldset>
			<legend>Add New Text:</legend>
			<input type="" name="name" maxlength="255" placeholder="Name">
			<input type="" name="text" size="50" placeholder="Text">
			<input type="" name="text_ar" size="50" placeholder="Arabic Text">
			<input type="number" min="1" max="8" name="page_nr" placeholder="Page No.">
			<button type="submit">Save</button>
			<?= validation_errors('<p class="error_msg">', '</p>'); ?>
			<?php if (isset($message)): ?>
				<p class="error_msg"><b><?= $message; ?></b></p>
			<?php endif ?>
		</fieldset>
	</form>

	
<?php require('inc/scripts.php') ?>
</body>
</html>