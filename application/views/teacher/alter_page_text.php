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
	        <?php require('/side_navbar.inc.php') ?>
	    </div>

	    <div class="col-sm-9">
	    	<div class="w3-main w3-card-4">
	            <div class="w3-black">
	                <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
	                <div class="w3-container w3-bottombar w3-border-white w3-hover-border-red">
	                    <h1>Text Editer</h1>
	                </div>
	            </div>
	            <div class="w3-container">
	                <h3>Text Editer</h3>
					<form method="POST">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
								    <label>Name</label>
								    <input type="text" class="form-control" maxlength="255" name="name" placeholder="Name" value="<?= $data->name; ?>">
								</div>
								<div class="form-group">
								    <label>Text</label>
								    <input type="text" class="form-control" name="text" placeholder="Text" value="<?= $data->text; ?>">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
								    <label>Page No.</label>
								    <input type="number" min="1" max="8" class="form-control" name="page_nr" placeholder="Page No." value="<?= $data->page_nr; ?>">
								</div>
								<div class="form-group">
								    <label>Arabic Text</label>
								    <input type="text" class="form-control" name="text_ar" placeholder="Arabic Text" value="<?= $data->text_ar; ?>">
								</div>
							</div>	
							<div class="col-sm-12">
								<button type="submit" class="btn btn-success">Alter Text</button>
								<div class="form-group">
									<?= validation_errors('<p class="error_msg">', '</p>'); ?>
									<?php if (isset($message)): ?>
										<p class="error_msg"><b><?= $message; ?></b></p>
									<?php endif ?>
								</div>
							</div>
						</div>
					</form>
	            </div>
	        </div>
	    </div>

	</div>

<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>