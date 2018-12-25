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
	                    <h1>Students Statistics</h1>
	                </div>
	            </div>
	            <div class="w3-container">
	                <h3>Students Statistics</h3>

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
					  	  	<label class="sr-only">From Hours</label>
					  	  	<input type="number" step="0.1" class="form-control" name="from_hours" placeholder="From Hours" value="<?= isset($_POST['from_hours']) ? $_POST['from_hours'] : ''; ?>">
					  	</div>
					  	<div class="form-group">
					  	  	<label class="sr-only">To Hours</label>
					  	  	<input type="number" step="0.1" class="form-control" name="to_hours" placeholder="To Hours" value="<?= isset($_POST['to_hours']) ? $_POST['to_hours'] : ''; ?>">
					  	</div>
					  	<button type="submit" class="btn btn-primary" style="margin-top: -17px;">Filter</button>
					</form>

	                <table class="table table-bordered table-striped table-hover table-condensed">
						<thead>
							<tr>
								<th>Student Name / ID</th>
								<th>Time</th>
								<th>Achieved cards</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $key => $student): ?>
								<tr>
									<td><?= $student->username." / ".$student->id; ?></td>
									<td><?= $student->time_elapsed; ?></td>
									<?php if ($student->last_achieved_card_no == 0): ?>
										<td><span style="margin: 0px 3px;">None</span></td>
									<?php else: ?>
										<td>
											<?php for ($i=1; $i <= $student->last_achieved_card_no; $i++) { ?> 
												<a style="margin: 0px 3px;" target="_blank" href="<?= base_url().'teacher/check_card/'.$student->id.'/'.$i.'/0'; ?>">Card<?= $i; ?></a> 
											<?php } ?>
										</td>
									<?php endif ?>
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