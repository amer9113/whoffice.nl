<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Employment Letter Form</div>
				  	<div class="panel-body">
				    	<form method="POST">
					  		<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
									    <label>Full Name</label>
									    <input type="text" class="form-control" value="<?= $student->username; ?>" disabled>
									</div>
									<div class="form-group">
									    <label>Street Name</label>
									    <input type="text" class="form-control" name="street_name" placeholder="Street Name" value="" required>
									</div>
									<div class="form-group">
									    <label>Postal code</label>
									    <input type="text" class="form-control" name="postal_code" placeholder="Postal code" value="<?= $student->postal_code; ?>" required>
									</div>
									<div class="form-group">
									    <label>Company Street Name</label>
									    <input type="text" class="form-control" name="company_street_name" placeholder="Company Street Name" value="" required>
									</div>
									<div class="form-group">
									    <label>Company Postal code</label>
									    <input type="text" class="form-control" name="company_postal_code" placeholder="Company Postal code" value="<?= $student->postal_code; ?>" required>
									</div>
									<div class="form-group">
									    <label>Future vocation city</label>
									    <input type="text" class="form-control" name="future_vocation_city" placeholder="Future vocation city" value="" required>
									</div>
									<div class="form-group">
									    <label>Future vocation company employer</label>
									    <input type="text" class="form-control" name="future_vocation_company_employer" placeholder="Future vocation company employer" value="" required>
									</div>
									<div class="form-group">
									    <label>Experience acquired from company</label>
									    <input type="text" class="form-control" name="experience_acquired_from_company" placeholder="Experience acquired from company" value="" required>
									</div>
									<div class="form-group">
									    <label>Company business field</label>
									    <input type="text" class="form-control" name="company_business_field" placeholder="Company business field" value="" required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
									    <label>Apartment No.</label>
									    <input type="text" class="form-control" name="apartment_no" placeholder="Apartment No." value="" required>
									</div>
									<div class="form-group">
									    <label>City</label>
									    <input type="text" class="form-control" name="city" placeholder="City" value="" required>
									</div>
									<div class="form-group">
									    <label>Company Name</label>
									    <input type="text" class="form-control" name="company_name" placeholder="Company Name" value="" required>
									</div>
									<div class="form-group">
									    <label>Company Building No.</label>
									    <input type="text" class="form-control" name="company_building_no" placeholder="Company Building No." value="" required>
									</div>
									<div class="form-group">
									    <label>Company City</label>
									    <input type="text" class="form-control" name="company_city" placeholder="Company City" value="" required>
									</div>
									<div class="form-group">
									    <label>Future vocation name</label>
									    <input type="text" class="form-control" name="future_vocation_name" placeholder="Future vocation name" value="" required>
									</div>
									<div class="form-group">
									    <label>Future vocation date</label>
									    <input type="text" class="form-control date" name="future_vocation_date" placeholder="Future vocation date" value="" required>
									</div>
									<div class="form-group">
									    <label>Future vocation website</label>
									    <input type="url" class="form-control" name="future_vocation_website" placeholder="Future vocation website" value="" required>
									</div>
								</div>	
								<div class="col-sm-12">
									<button type="submit" class="btn btn-success">Submit</button>
									<button type="button" class="btn btn-danger" onclick="window.close();">Close</button>
									<div class="form-group">
										<?= validation_errors('<p class="error_msg">', '</p>'); ?>
										<?php if (isset($message)): ?>
											<?php if ($message == "Done."): ?>
												
											<?php else: ?>
												<p class="error_msg"><b><?= $message; ?></b></p>
											<?php endif ?>
										<?php endif ?>
									</div>
								</div>
							</div>
						</form>
				  	</div>
				</div>
			</div>
		</div>
	</div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>