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
	                    <h1>Student Information</h1>
	                </div>
	            </div>
	            <div class="w3-container">
	                <h3><?= $student->firstname." ".$student->lastname; ?></h3>
	                <?php if (isset($message)): ?>
	                	<div class="alert alert-danger text-center" role="alert"><?= $message; ?></div>
	                <?php endif ?>
			    	<form method="POST">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
								    <label>Username</label>
								    <input type="text" class="form-control" maxlength="75" placeholder="Username" value="<?= $student->username; ?>" readonly="">
								</div>
								<div class="form-group">
								    <label>Firstname</label>
								    <input type="text" maxlength="75" class="form-control" name="firstname" placeholder="Firstname" value="<?= $student->firstname; ?>">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								    <label>Email</label>
								    <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $student->email; ?>">
								</div>
								
								<div class="form-group">
								    <label>Lastname</label>
								    <input type="text" maxlength="75" class="form-control" name="lastname" placeholder="Lastname" value="<?= $student->lastname; ?>">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								    <label>Group</label>
								    <input type="text" class="form-control" name="student_group" placeholder="Group" value="<?= $student->student_group; ?>">
								</div>
							</div>	
							<div class="col-sm-12">
								<input type="hidden" name="action">
								<button type="button" class="btn btn-success alter_btn">Alter Information</button>
								<button type="button" class="btn btn-danger delete_btn">Delete Student</button>
								<?php if ($student->active == 1): ?>
								<button type="button" class="btn btn-warning deactivate_btn">Deactivate Student</button>
								<div class="form-group">
								<?php else: ?>
								<button type="button" class="btn btn-warning activate_btn">Activate Student</button>
								<div class="form-group">
								<?php endif ?>
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
        $('.alter_btn').click(function(){
            $('[name="action"]').val("alter");
            $('form').submit();
        });

        $('.delete_btn').click(function(){
            $('[name="action"]').val("delete");
            $('form').submit();
        });

        $('.activate_btn').click(function(){
            $('[name="action"]').val("activate");
            $('form').submit();
        });

        $('.deactivate_btn').click(function(){
            $('[name="action"]').val("deactivate");
            $('form').submit();
        });
    });
</script>
</body>
</html>