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
									    <input type="text" class="form-control" name="username" placeholder="Voor-en achternaam" required>
									</div>
									<div class="form-group">
									    <label>Straatnaam</label>
									    <input type="text" class="form-control" name="street_name" placeholder="Straatnaam" required>
									</div>
									<div class="form-group">
									    <label>Huisnummer</label>
									    <input type="text" class="form-control" name="apartment_no" placeholder="Huisnummer" required>
									</div>
									<div class="form-group">
									    <label>Postcode</label>
									    <input type="text" class="form-control" name="postal_code" placeholder="Postcode" required>
									</div>
									<div class="form-group">
									    <label>Woonplaats</label>
									    <input type="text" class="form-control" name="city" placeholder="Woonplaats" value="" required>
									    <input type="hidden" class="form-control" name="future_vocation_city" placeholder="Future vocation city" >
									</div>

									<hr>

									<div class="form-group">
									    <label>Bedrijfsnaam</label>
									    <input type="text" class="form-control" name="company_name" placeholder="Bedrijfsnaam" required>
									</div>

									<div class="form-group">
									    <label>Bedrijfs Straatnaam</label>
									    <input type="text" class="form-control" name="company_street_name" placeholder="Bedrijfs Straatnaam" required>
									</div>

									<div class="form-group">
									    <label>Bedrijfs Huisnummer</label>
									    <input type="text" class="form-control" name="company_building_no" placeholder="Bedrijfs Huisnummer" required>
									</div>

									<div class="form-group">
									    <label>Bedrijfs Postcode</label>
									    <input type="text" class="form-control" name="company_postal_code" placeholder="Bedrijfs Postcode" required>
									</div>

									<div class="form-group">
									    <label>Bedrijfs Plaats</label>
									    <input type="text" class="form-control" name="company_city" placeholder="Bedrijfs Plaats" required>
									</div>
									
								</div>
								<div class="col-sm-6">
								<div class="form-group">
									    <label>Gewenste beroep (vacature)</label>
									    <input type="text" class="form-control" name="future_vocation_name" placeholder="Future vocation name" required>
									</div>
									<div class="form-group">
									    <label>Datum</label>
									    <input type="text" class="form-control date" name="future_vocation_date" placeholder="Datum" required>
									</div>

									<div class="form-group">
									    <label>Contactpersoon van de vacature</label>
									    <input type="text" class="form-control" name="future_vocation_company_employer" placeholder="Contactpersoon" required>
									</div>

									<div class="form-group">
									    <label>Bedrijfswebsite</label>
									    <input type="text" class="form-control" name="future_vocation_website" placeholder="Bedrijfswebsite" required>
									</div>

									<div class="form-group">
									    <label>Ervaring opgedaan door de bedrijven / winkels /scholen</label>
									    <input type="text" class="form-control" name="company_business_field" placeholder="Ervaring opgedaan" required>
									</div>
									<div class="form-group">
									    <label>Werkervaringsplek</label>
									    <input type="text" class="form-control" name="experience_acquired_from_company"  placeholder="Werkervaringsplek" required>
									</div>
								</div>	
								<div class="col-sm-12">
									<button type="submit" class="btn btn-success">Afdruk</button>
									<button type="button" class="btn btn-danger" onclick="window.close();">Dichtbij</button>
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