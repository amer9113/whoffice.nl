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
	<div class="parallax w3-container background-color:lavenderblush w3-mobile">
	    <div class="col-sm-2">

	        <div class="side w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left w3-teal w3-card-4 w3-large w3-left" id="mySidebar">
	            <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
	            <div class="pad w3-container w3-bottombar w3-border-white w3-hover-border-red w3-center">
	                <img src="https://img.icons8.com/color/48/000000/businessman.png" id="sideicon">
	                <br>
	                <labelfor name="admin_name" id="adminname"><?= $this->acc_name; ?></labelfor>
	            </div>
	            <a class="pad w3-bar-item w3-button" href="<?= base_url().'teacher/view_pages_texts'; ?>">Text Editer</a>
				<a class="pad w3-bar-item w3-button" href="<?= base_url().'teacher/check_students_pending_cards'; ?>">Students Check</a>
				<a class="pad w3-bar-item w3-button" href="<?= base_url().'teacher/check_students_times'; ?>">Students Times</a>
				<a class="pad w3-bar-item w3-button" href="<?= base_url().'teacher/logout'; ?>">Logout</a>
	        </div>
	    </div>

	    <div class="col-sm-10">

	        <div class="w3-main w3-card-4">
	            <div class="w3-black">
	                <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
	                <div class="w3-container w3-bottombar w3-border-white w3-hover-border-red">
	                    <h1>Text Editer</h1>
	                </div>
	            </div>
	            <div class="w3-container">
	                <h3>Text Editer</h3>
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
	            </div>
	        </div>
	    </div>

	</div>
<?php require('inc/scripts.php') ?>
</body>
</html>