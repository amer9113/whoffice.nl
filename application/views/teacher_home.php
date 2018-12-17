<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<?php require('inc/head.php') ?>
	<title>whoffice</title>
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
	    </div>

	</div>

<?php require('inc/scripts.php') ?>
</body>
</html>