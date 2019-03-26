<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>whoffice</title>
	<style type="text/css">
		html,body{
			background-color: #fff;
		}
		.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12,.row {
			border:0;
			padding:0;
			margin-left:-0.00001;
		}

	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-6">
				<h3>Sollicitatieformulier</h3>
			</div>
			<div class="col-xs-6">
				<?php if ($type == "voor1"): ?>
					<h3>voor: <?= $for1; ?></h3>
				<?php else: ?>
					<h3>voor: <?= $for2; ?></h3>
				<?php endif ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h4>sollicitatie</h4>
				<hr style="margin: 5px 0px;">
				<div class="row">
					<div class="col-xs-12">
						<label>Dit formulier wordt ingevuld in verband met:</label>&nbsp;&nbsp;&nbsp;<label>sollicitatie</label>
					</div>
				</div>
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm-12">
				<h4>Persoonlijke gegevens</h4>
				<hr style="margin: 5px 0px;">
				<div class="row">
					<div class="col-xs-12">
						<label>Naam:</label>&nbsp;&nbsp;&nbsp;
						<label><?= $username; ?></label> / 
						<?php if ($gender == "male"): ?>
							<label>Man</label>
						<?php else: ?>
							<label>Vrouw</label>
						<?php endif ?>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>Geboortedatum:</label>&nbsp;&nbsp;&nbsp;<label><?= date("d-m-Y", strtotime($date_of_birth));  ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>Geboorteplaats:</label>&nbsp;&nbsp;&nbsp;<label><?= $birthplace; ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>Nationaliteit:</label>&nbsp;&nbsp;&nbsp;<label><?= $nationality; ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>Burgerlijke staat:</label>&nbsp;&nbsp;&nbsp;<label><?= $marital_status; ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>Burgerservicenummer (BSN):</label>&nbsp;&nbsp;&nbsp;<label><?= $citizen_service_no; ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>Straatnaam en huisnummer:</label>&nbsp;&nbsp;&nbsp;<label><?= $street_name_and_house_number; ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>Postcode en Woonplaats:</label>&nbsp;&nbsp;&nbsp;<label><?= $postcode.' ,'.$address; ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>Mobiel:</label>&nbsp;&nbsp;&nbsp;<label><?= $mobile; ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>E-mailadres:</label>&nbsp;&nbsp;&nbsp;<label><?= $email; ?></label>
					</div>
				</div>
			</div>
		</div><br>
		<?php if ($type == "voor1"): ?>
		<div class="row">
			<div class="col-sm-12">
				<h4>Functie</h4>
				<hr style="margin: 5px 0px;">
				<div class="row">
					<div class="col-xs-12">
						<label>Naar welke functie solliciteert u?</label>&nbsp;&nbsp;&nbsp;<label><?= $applying_for_job1; ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>Hoeveel uur wilt u werken?</label>&nbsp;&nbsp;&nbsp;<label><?= $job1_houres; ?></label>
					</div>
				</div>
			</div>
		</div><br>
		<?php else: ?>
		<div class="row">
			<div class="col-sm-12">
				<h4>Functie</h4>
				<hr style="margin: 5px 0px;">
				<div class="row">
					<div class="col-xs-12">
						<label>Naar welke functie solliciteert u?</label>&nbsp;&nbsp;&nbsp;<label><?= $applying_for_job2; ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>Hoeveel uur wilt u werken?</label>&nbsp;&nbsp;&nbsp;<label><?= $job2_houres; ?></label>
					</div>
				</div>
			</div>
		</div><br>
		<?php endif ?>
		<div class="row">
			<div class="col-sm-12">
				<h4>Opleidingen</h4>
				<hr style="margin: 5px 0px;">
				<div class="row">
					<div class="col-xs-12">
						<table class="table table-condensed table-bordered">
							<thead>
								<tr>
									<th>Opleiding / cursus</th>
									<th>Instelling</th>
									<th>Van / tot</th>
									<th>Diploma</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?= $education_course; ?></td>
									<td><?= $education_institution; ?></td>
									<td><?= date("d-m-Y", strtotime($education_from)); ?> - <?= ($education_to == '0000-00-00')?'Heden':date("d-m-Y", strtotime($education_to)); ?></td>
									<td><?= $education_diploma; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-sm-12">
				<h4>Werkervaring</h4>
				<hr style="margin: 5px 0px;">
				<div class="row">
					<div class="col-xs-12">
						<table class="table table-condensed table-bordered">
							<thead>
								<tr>
									<th>Functie</th>
									<th>Werkzaamheden</th>
								
									<th>Van / tot</th>
										<th>Bedrijf / organisatie</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?= $work_experience_position; ?></td>
									<td><?= $work_experience_activities; ?></td>
									<td><?= date("d-m-Y", strtotime($work_experience_from)); ?> - <?= date("d-m-Y", strtotime($work_experience_to)); ?></td>
									<td><?= $work_experience_company; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm-12">
				<h4>Referenties</h4>
				<hr style="margin: 5px 0px;">
				<div class="row">
					<div class="col-xs-12">
						<table class="table table-condensed table-bordered">
							<thead>
								<tr>
									<th>Naam</th>
									<th>Functie</th>
									<th>Bedrijf / organisatie</th>
									<th>Tel. Nr.</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?= $references_name; ?></td>
									<td><?= $references_position; ?></td>
									<td><?= $references_company; ?></td>
									<td><?= $references_tel_no; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm-12">
				<h4>Talenkennis (vul in: goed / voldoende / matig / slecht)</h4>
				<hr style="margin: 5px 0px;">
				<div class="row">
					<div class="col-xs-6">
						<label>Nederlands:</label>&nbsp;&nbsp;&nbsp;&nbsp;<label><?= $dutch_skill; ?></label>
					</div>
					<div class="col-xs-6">
						<label>Engels:</label>&nbsp;&nbsp;&nbsp;&nbsp;<label><?= $english_skill; ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6">
						<label>Arabische:</label>&nbsp;&nbsp;&nbsp;&nbsp;<label><?= $arabic_skill; ?></label>
					</div>
				</div>
			</div>
		</div><br>
		<div class="row">
			<div class="col-sm-12">
				<h4>Vaardigheden </h4>
				<hr style="margin: 5px 0px;">
				<div class="row">
					<?php if ($accuracy_skill == "yes"): ?>
					<div class="col-xs-4">
						<label>Nauwkeurigheid</label>
					</div>
					<?php endif ?>
					<?php if ($collaborate_skill == "yes"): ?>
					<div class="col-xs-4">
						<label>Samenwerken</label>
					</div>
					<?php endif ?>
					<?php if ($communication_skill == "yes"): ?>
					<div class="col-xs-4">
						<label>Communicatie</label>
					</div>
					<?php endif ?>
					<?php if ($creativity_skill == "yes"): ?>
					<div class="col-xs-4">
						<label>Creativiteit</label>
					</div>
					<?php endif ?>
					<?php if ($lead_skill == "yes"): ?>
					<div class="col-xs-4">
						<label>Leidinggeven</label>
					</div>
					<?php endif ?>
					<?php if ($analyze_skill == "yes"): ?>
					<div class="col-xs-4">
						<label>Analyseren</label>
					</div>
					<?php endif ?>
					<?php if ($stress_resistance_skill == "yes"): ?>
					<div class="col-xs-4">
						<label>Stressbestendigheid</label>
					</div>
					<?php endif ?>
				</div>
			</div>
		</div><br>
		<?php if ($type == "voor1"): ?>
		<div class="row">
			<div class="col-sm-12">
				<h4></h4>
				<hr style="margin: 5px 0px;">
				<div class="row">
					<div class="col-xs-8">
						<label>bedrijfs plaats:</label>&nbsp;&nbsp;&nbsp;<label><?= $business_place1; ?></label>
					</div>
					<div class="col-xs-4">
						<label>Datum:</label>&nbsp;&nbsp;&nbsp;<label><?= date("d-m-Y", strtotime( $business_place1_date)); ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>Handtekening:</label>&nbsp;&nbsp;&nbsp;<label><?= $username2; ?></label>
					</div>
				</div>
			</div>
		</div><br>
		<?php else: ?>
		<div class="row">
			<div class="col-sm-12">
				<h4></h4>
				<hr style="margin: 5px 0px;">
				<div class="row">
					<div class="col-xs-8">
						<label>bedrijfs plaats:</label>&nbsp;&nbsp;&nbsp;<label><?= $business_place2; ?></label>
					</div>
					<div class="col-xs-4">
						<label>Datum:</label>&nbsp;&nbsp;&nbsp;<label><?= date("d-m-Y", strtotime($business_place2_date)); ?></label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<label>Handtekening:</label>&nbsp;&nbsp;&nbsp;<label><?= $username3; ?></label>
					</div>
				</div>
			</div>
		</div>
		<?php endif ?>
	</div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>