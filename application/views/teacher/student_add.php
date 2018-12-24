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
	                    <h1>New Student</h1>
	                </div>
	            </div>
	            <div class="w3-container">
	                <h3>New Student's information</h3>
	                <?php if (isset($message)): ?>
	                	<div class="alert alert-danger text-center" role="alert"><?= $message; ?></div>
	                <?php endif ?>
			    	<form method="POST">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
								    <label>Username</label>
								    <input type="text" class="form-control" name="username" placeholder="Username" readonly>
								</div>
								<div class="form-group">
								    <label>Firstname</label>
								    <input type="text" class="form-control compose_username" name="firstname" placeholder="Firstname" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : ''; ?>" minlength="4" maxlength="45" required>
								</div>
								<div class="form-group">
								    <label>Lastname</label>
								    <input type="text" class="form-control compose_username" name="lastname" placeholder="Lastname" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : ''; ?>" minlength="4" maxlength="45" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								    <label>Email</label>
								    <input type="email" class="form-control" name="email" placeholder="Email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>" required>
								</div>
								<div class="form-group">
								    <label>Postal Code</label>
								    <input type="text" class="form-control" name="postal_code" placeholder="Postal Code" value="<?= isset($_POST['postal_code']) ? $_POST['postal_code'] : ''; ?>" minlength="4" required>
								</div>
								<div class="form-group">
								    <label>Group</label>
								    <input type="text" class="form-control" name="student_group" placeholder="Group" value="<?= isset($_POST['student_group']) ? $_POST['student_group'] : ''; ?>">
								</div>
							</div>
							<div class="col-sm-12">
								<button type="submit" class="btn btn-success alter_btn">Add</button>
								<div class="form-group">
									<?= validation_errors('<p class="error_msg">', '</p>'); ?>
								</div>
							</div>
						</div>
					</form>
	            </div>
	        </div>
	    </div>
	</div>

<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('input.compose_username').change(function(){
            var firstname = $('[name="firstname"]').val().trim();
            var lastname = $('[name="lastname"]').val().trim();

            if (firstname != "" && lastname != "") {
            	$('[name="username"]').val(firstname+lastname);
            }

        });

        $('[name="firstname"]').change();
    });
</script>
</body>
</html>