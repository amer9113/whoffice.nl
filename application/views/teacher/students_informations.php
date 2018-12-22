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
	                    <h1>Students Informations</h1>
	                </div>
	            </div>
	            <div class="w3-container">
	                <h3>Students Informations</h3>
	                <?php if (isset($message)): ?>
	                	<div class="alert alert-danger text-center" role="alert"><?= $message; ?></div>
	                <?php endif ?>
	                <table class="table table-bordered table-striped table-hover table-condensed">
						<thead>
							<tr>
								<th>Student Name / ID</th>
								<th>Postal Code</th>
								<th>Email</th>
								<th>Group</th>
								<th>Status</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($students as $key => $student): ?>
								<tr>
									<td><?= $student->firstname." ".$student->lastname." / ".$student->id; ?></td>
									<td><?= $student->postal_code; ?></td>
									<td><?= $student->email; ?></td>
									<td><?= $student->student_group; ?></td>
									<td><?= $student->active == 1 ? "Active" : "Inactive"; ?></td>
									<td><a href="<?= base_url().'teacher/send_student_info_mail/'.$student->id; ?>">Send information email</a> &nbsp;&nbsp; <a href="<?= base_url().'teacher/send_student_reset_password_mail/'.$student->id; ?>">Send reset password email</a> &nbsp;&nbsp; <a href="<?= base_url().'teacher/edit_student/'.$student->id; ?>">Edit</a></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					<div style="padding: 10px;">
						<a href="<?= base_url().'teacher/add_student'; ?>" class="btn btn-success">Add new student</a>
					</div>
	            </div>
	        </div>
	    </div>
	</div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>