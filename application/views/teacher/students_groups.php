<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">

<head>

	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>

	<title>whoffice</title>

</head>

<body>

	<div class="parallax w3-container background-color:lavenderblush w3-mobile">

	    <div class="col-sm-3">

	        <?php require(dirname(__FILE__) . '/side_navbar.inc.php') ?>

	    </div>



	    <div class="col-sm-9">

	    	<div class="w3-main w3-card-4">

	            <div class="w3-black">

	                <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>

	                <div class="w3-container w3-bottombar w3-border-white w3-hover-border-red">

	                    <h1>Students Groups</h1>

	                </div>

	            </div>

	            <div class="w3-container">

	                <h3>Students Groups</h3>

	                <?php if (isset($message)): ?>

	                	<div class="alert alert-danger text-center" role="alert"><?= $message; ?></div>

	                <?php endif ?>
	                <table class="table table-bordered table-striped table-hover table-condensed">

						<thead>
							<tr>
								<th>Groep</th>
								<th>Students</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($groups as $key => $row): ?>
								<tr>
									<td><?= empty($row->student_group) ? "No Group" : $row->student_group; ?></td>
									<td><?= $row->students_count." ".($row->students_count > 1 ? "Students" : "Student"); ?></td>
									<td><a href="<?= base_url().'admin/send_group_account_info_email/'.urlencode($row->student_group); ?>" title="Send this group account informations."><img src="https://img.icons8.com/wired/64/000000/send-mass-email.png" style="width: 27px;"></a></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
	            </div>
	        </div>
	    </div>
	</div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>