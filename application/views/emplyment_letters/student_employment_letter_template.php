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
					
					<p><?= $username; ?></p>
					<p><?= $street_name." ".$apartment_no; ?></p>
					<p><?= $postal_code." ".$city; ?></p>
					<br>
					<p><?= $company_name; ?></p>
					<p><?= $company_street_name." ".$company_building_no; ?></p>
					<p><?= $company_postal_code." ".$company_city; ?></p>
					<br>
					<p>Betreft: Vacature <?= $future_vocation_name; ?></p>
					<p><?= $future_vocation_city." ".date("d-m-Y", strtotime($future_vocation_date)); ?></p>
					<p>Geachte <?= $future_vocation_company_employer; ?></p>


					<p>Bij het zien van uw vacature voor <?= $future_vocation_name; ?> op <a target="_blank" href="<?= $future_vocation_website; ?>"><?= $future_vocation_website; ?></a> was ik meteen enthousiast. De werkzaamheden en kwaliteiten in uw beschrijving spraken mij zeer aan, omdat ze heel erg goed passen bij mijn opleiding, ervaring en voorkeuren.</p>

					<p>Na mijn opleiding <?= $future_vocation_name; ?> heb ik ervaring opgedaan bij verschillende <?= $company_business_field; ?> Zo heb ik de laatste 3 jaren gewerkt als <?= $future_vocation_name; ?> bij <?= $experience_acquired_from_company; ?> waar ik mij vooral heb kunnen ontwikkelen op het gebied van ervaringen.</p>

					<p>Ik omschrijf mijzelf als Ambitieus, Besluitvaardig, Creatief, Flexibel, Gemotiveerd, Stressbestendig, Oplossingsgericht, Nauwkeurig,Delegeren, Doelenstellen, Klantgericht, Leidinggeven, Luisteren, Samenwerken.</p>

					<p>Uiteraard licht ik een en ander graag toe in een persoonlijk gesprek. Ik zie met belangstelling uit naar uw reactie.</p>

					<p>Met vriendelijke groet,</p>

					<br>
					<p><?= $username; ?></p>

				</div>
			</div>
		</div>
	</div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>