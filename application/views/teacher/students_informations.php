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

	                <form class="form-inline" method="POST">
					  	<div class="form-group">
					  	  	<label class="sr-only">ID</label>
					  	  	<input type="number" class="form-control" name="id" placeholder="ID" value="<?= isset($_POST['id']) ? $_POST['id'] : ''; ?>">
					  	</div>
					  	<div class="form-group">
					  	  	<label class="sr-only">FirstName</label>
					  	  	<input type="text" class="form-control" name="firstname" placeholder="FirstName" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : ''; ?>">
					  	</div>
					  	<div class="form-group">
					  	  	<label class="sr-only">LastName</label>
					  	  	<input type="text" class="form-control" name="lastname" placeholder="LastName" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : ''; ?>">
					  	</div>
					  	<div class="form-group">
					  	  	<label class="sr-only">Email</label>
					  	  	<input type="email" class="form-control" name="email" placeholder="Email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>">
					  	</div>
					  	<div class="form-group">
					  	  	<label class="sr-only">Postcode</label>
					  	  	<input type="text" class="form-control" name="postal_code" placeholder="Postal code" value="<?= isset($_POST['postal_code']) ? $_POST['postal_code'] : ''; ?>">
					  	</div>
					  	<div class="form-group">
					  	  	<label class="sr-only">Groep</label>
					  	  	<input type="text" class="form-control" name="group" placeholder="Groep" value="<?= isset($_POST['group']) ? $_POST['group'] : ''; ?>">
					  	</div>
					  	<button type="submit" class="btn btn-primary" style="margin-top: -17px;">Filter</button>
					</form>

	                <table class="table table-bordered table-striped table-hover table-condensed">

						<thead>

							<tr>

								<th>Studenten naam </th>

								<th>Password</th>

								<th>Postcode</th>

								<th>E-mail</th>

								<th>Groep</th>

								<th>Staat</th>

								<th></th>

							</tr>

						</thead>

						<tbody>

							<?php foreach ($students as $key => $student): ?>

								<tr>

									<td><?= $student->username; ?></td>

									<td><?= $student->postal_code.$student->postal_code; ?></td>

									<td><?= $student->postal_code; ?></td>

									<td><?= $student->email; ?></td>

									<td><?= $student->student_group; ?></td>

									<td><?= $student->active == 1 ? "Actief" : "Inactief"; ?></td>

									<td><a href="<?= base_url().'teacher/send_student_info_mail/'.$student->id; ?>"><img src="https://img.icons8.com/wired/64/000000/send-mass-email.png" style="width: 27px;"> </a> &nbsp;&nbsp; <a href="<?= base_url().'teacher/edit_student/'.$student->id; ?>"><img src="https://img.icons8.com/wired/64/000000/pencil.png" style="width: 27px;"></a></td>

								</tr>

							<?php endforeach ?>

						</tbody>

					</table>

					<div style="padding: 10px;">
						<a href="<?= base_url().'teacher/add_student'; ?>" class="btn btn-success">Voeg nieuwe student toe</a>
					</div>
	            </div>

	        </div>

	    </div>

	</div>

<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>

</body>

</html>