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
					<div class="panel-heading">Sollicitatiebrief</div>
				  	<div class="panel-body">
				    	<form method="POST">
					  		<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
									    <label>Voor-en achternaam</label>
									    <input type="text" class="form-control" value="<?= $student->username; ?>" disabled>
									</div>
									<div class="form-group">
									    <label>Straatnaam</label>
									    <input type="text" class="form-control" name="street_name" placeholder="Straatnaam" value="" required>
									</div>
									<div class="form-group">
									    <label>Huisnummer</label>
									    <input type="text" class="form-control" name="apartment_no" placeholder="Huisnummer" value="" required>
									</div>
									<div class="form-group">
									    <label>Postcode</label>
									    <input type="text" class="form-control" name="postal_code" placeholder="Postcode" value="<?= $student->postal_code; ?>" required>
									</div>
									<div class="form-group">
									    <label>Woonplaats</label>
									    <input type="text" class="form-control" name="city" placeholder="Woonplaats" value="" required>
									    <input type="hidden" class="form-control" name="future_vocation_city" placeholder="Future vocation city" value="" >
									</div>

									<hr>

									<div class="form-group">
									    <label>Bedrijfsnaam</label>
									    <input type="text" class="form-control" name="company_name" placeholder="Bedrijfsnaam" value="" required>
									</div>

									<div class="form-group">
									    <label>Bedrijfs Straatnaam</label>
									    <input type="text" class="form-control" name="company_street_name" placeholder="Bedrijfs Straatnaam" value="" required>
									</div>

									<div class="form-group">
									    <label>Bedrijfs Huisnummer</label>
									    <input type="text" class="form-control" name="company_building_no" placeholder="Bedrijfs Huisnummer" value="" required>
									</div>

									<div class="form-group">
									    <label>Bedrijfs Postcode</label>
									    <input type="text" class="form-control" name="company_postal_code" placeholder="Bedrijfs Postcode" value="" required>
									</div>

									<div class="form-group">
									    <label>Bedrijfs Plaats</label>
									    <input type="text" class="form-control" name="company_city" placeholder="Bedrijfs Plaats" value="" required>
									</div>
									
								</div>
								<div class="col-sm-6">
								<div class="form-group">
									    <label>Gewenste beroep (vacature)</label>
									    <input type="text" class="form-control" name="future_vocation_name" placeholder="Future vocation name" value="" required>
									</div>
									<div class="form-group">
									    <label>Datum</label>
									    <input type="date" class="form-control" name="future_vocation_date" placeholder="Datum" value="" required>
									</div>

									<div class="form-group">
									    <label>Contactpersoon van de vacature</label>
									    <input type="text" class="form-control" name="future_vocation_company_employer" placeholder="Contactpersoon" value="" required>
									</div>

									<div class="form-group">
									    <label>Bedrijfswebsite</label>
									    <input type="url" class="form-control" name="future_vocation_website" placeholder="Bedrijfswebsite" value="" required>
									</div>

									<div class="form-group">
									    <label>Ervaring opgedaan door de bedrijven / winkels /scholen</label>
									    <input type="text" class="form-control" name="experience_acquired_from_company" placeholder="Ervaring opgedaan" value="" required>
									</div>
									<div class="form-group">
									    <label>Werkervaringsplek</label>
									    <input type="text" class="form-control" name="company_business_field" placeholder="Werkervaringsplek" value="" required>
									</div>
									
									
									
								
									
									
									
								</div>	
								<div class="col-sm-12">
									<button type="submit" class="btn btn-success">Afdruk</button>
									<div class="form-group">
										<?= validation_errors('<p class="error_msg">', '</p>'); ?>
										<?php if (isset($message)): ?>
											<?php if ($message == "Done."): ?>
												<script type="text/javascript">
													window.close();
												</script>
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
<script type="text/javascript">
	$('input[name="city"]').change(function() {
    $('input[name="future_vocation_city"]').val($(this).val());
});
</script>
</body>
</html>