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
				<div style="border: 2px solid #333;padding: 50px;">
					
					<p><?= $acc_info->username; ?></p>
					<p><?= $letter_details->street_name." ".$letter_details->apartment_no; ?></p>
					<p><?= $letter_details->postal_code." ".$letter_details->city; ?></p>
					<br>
					<p><?= $letter_details->company_name; ?></p>
					<p><?= $letter_details->company_street_name." ".$letter_details->company_building_no; ?></p>
					<p><?= $letter_details->company_postal_code." ".$letter_details->company_city; ?></p>
					<br>
					<p>Betreft: Vacature <?= $letter_details->future_vocation_name; ?></p>
					<p><?= $letter_details->future_vocation_city." ".$letter_details->future_vocation_date; ?></p>
					<p>Geachte <?= $letter_details->future_vocation_company_employer; ?></p>


					<p>Bij het zien van uw vacature voor <?= $letter_details->future_vocation_name; ?> op <a target="_blank" href="<?= $letter_details->future_vocation_website; ?>"><?= $letter_details->future_vocation_website; ?></a> was ik meteen enthousiast. De werkzaamheden en kwaliteiten in uw beschrijving spraken mij zeer aan, omdat ze heel erg goed passen bij mijn opleiding, ervaring en voorkeuren.</p>

					<p>Na mijn opleiding <?= $letter_details->future_vocation_name; ?> heb ik ervaring opgedaan bij verschillende <?= $letter_details->company_business_field; ?> Zo heb ik de laatste 3 jaren gewerkt als <?= $letter_details->future_vocation_name; ?> bij <?= $letter_details->experience_acquired_from_company; ?> waar ik mij vooral heb kunnen ontwikkelen op het gebied van ervaringen.</p>

					<p>Ik omschrijf mijzelf als Ambitieus, Besluitvaardig, Creatief, Flexibel, Gemotiveerd, Stressbestendig, Oplossingsgericht, Nauwkeurig,Delegeren, Doelenstellen, Klantgericht, Leidinggeven, Luisteren, Samenwerken.</p>

					<p>Uiteraard licht ik een en ander graag toe in een persoonlijk gesprek. Ik zie met belangstelling uit naar uw reactie.</p>

					<p>Met vriendelijke groet,</p>

					<br>
					<p><?= $acc_info->username; ?></p>

				</div>
			</div>
		</div>
	</div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>