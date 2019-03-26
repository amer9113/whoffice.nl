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
	</style>
</head>
<body>
	<div class="container" style="border: 1px solid #ccc;margin-top: 25px;margin-bottom: 25px;padding: 15px 50px;">
		<form method="POST">
			<div class="row">
				<div class="col-xs-12">
					<h3 class="text-center">Sollicitatieformulier</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<h4>Voor</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-2">
							<label>voor1:</label>
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="for1">
						</div>
						<div class="col-xs-2">
							<label>voor2:</label>
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="for2">
						</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-12">
					<h4>sollicitatie</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-6">
							<label>Dit formulier wordt ingevuld in verband met:</label>
						</div>
						<div class="col-xs-2">
							<input type="checkbox" disabled="" checked=""> <label>sollicitatie</label>
						</div>
						<div class="col-xs-2">
							<input type="checkbox" disabled=""> <label>stage</label>
						</div>
						<div class="col-xs-2">
							<input type="checkbox" disabled=""> <label>Anders, nl.</label>
						</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-12">
					<h4>Persoonlijke gegevens</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-3">
							<label>Naam:</label>
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control" id ="username" name="username">
						</div>
						<div class="col-xs-5">
							<input type="radio" name="gender" value="male"> <label>Man</label>&nbsp;&nbsp;
							<input type="radio" name="gender" value="female"> <label>Vrouw</label>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-xs-3">
							<label>Geboortedatum:</label>
						</div>
						<div class="col-xs-3">
							<input type="text" class="date form-control" id ="date_of_birth" name="date_of_birth">
						</div>
						<div class="col-xs-3">
							<label>Geboorteplaats:</label>
						</div>
						<div class="col-xs-3">
							<input type="text" class="form-control" name="birthplace">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Nationaliteit:</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="nationality">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Burgerlijke staat:</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="marital_status">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Burgerservicenummer (BSN):</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="citizen_service_no">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Straatnaam en huisnummer:</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="street_name_and_house_number">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Postcode en Woonplaats:</label>
						</div>
						<div class="col-xs-3">
							<input type="text" class="form-control"  name="postcode">
						</div>
						<div class="col-xs-6">
							<input type="text" class="form-control" name="address">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Mobiel:</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="mobile">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>E-mailadres:</label>
						</div>
						<div class="col-xs-9">
							<input type="email" class="form-control" name="email">
						</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-12">
					<h4>Functie1</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-3">
							<label>Naar welke functie solliciteert u?</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="applying_for_job1">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Hoeveel uur wilt u werken?</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="job1_houres">
						</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-12">
					<h4>Functie2</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-3">
							<label>Naar welke functie solliciteert u?</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="applying_for_job2">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Hoeveel uur wilt u werken?</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="job2_houres">
						</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-12">
					<h4>Opleidingen</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-3">
							<label>Opleiding / cursus</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="education_course">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Instelling</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="education_institution">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Van / tot</label>
						</div>
						<div class="col-xs-3">
							<input type="text" class="form-control date" name="education_from">
						</div>
						<div class="col-xs-3">
							<input type="text" class="form-control " name="education_to">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Diploma</label>
						</div>
						<div class="col-xs-9">
							<select class="form-control" name="education_diploma">
								<option>ja</option>
								<option>nee</option>
							</select>
						</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-12">
					<h4>Werkervaring</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-3">
							<label>Functie</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="work_experience_position">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Werkzaamheden</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="work_experience_activities">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Van / tot</label>
						</div>
						<div class="col-xs-3">
							<input type="text" class="form-control date" name="work_experience_from">
						</div>
						<div class="col-xs-3">
							<input type="text" class="form-control date" name="work_experience_to">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Bedrijf / organisatie</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="work_experience_company">
						</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-12">
					<h4>Referenties</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-3">
							<label>Naam</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="references_name">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Functie</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="references_position">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Bedrijf / organisatie</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="references_company">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-3">
							<label>Tel. Nr.</label>
						</div>
						<div class="col-xs-9">
							<input type="text" class="form-control" name="references_tel_no">
						</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-12">
					<h4>Talenkennis (vul in: goed / voldoende / matig / slecht)</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-2">
							<label>Nederlands</label>
						</div>
						<div class="col-xs-3">
							<select name="dutch_skill" class="form-control">
								<option>goed</option>
								<option>voldoende</option>
								<option>matig</option>
								<option>slecht</option>
							</select>
						</div>
						<div class="col-xs-2">
							<label>Engels</label>
						</div>
						<div class="col-xs-3">
							<select name="english_skill" class="form-control">
								<option>goed</option>
								<option>voldoende</option>
								<option>matig</option>
								<option>slecht</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-2">
							<label>Arabische</label>
						</div>
						<div class="col-xs-3">
							<select name="arabic_skill" class="form-control">
								<option>goed</option>
								<option>voldoende</option>
								<option>matig</option>
								<option>slecht</option>
							</select>
						</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-12">
					<h4>Vaardigheden (kruis uw vaardigheden aan)</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-4">
							<input type="checkbox" name="accuracy_skill" value="yes"> <label>Nauwkeurigheid</label>
						</div>
						<div class="col-xs-4">
							<input type="checkbox" name="collaborate_skill" value="yes"> <label>Samenwerken</label>
						</div>
						<div class="col-xs-4">
							<input type="checkbox" name="communication_skill" value="yes"> <label>Communicatie</label>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<input type="checkbox" name="creativity_skill" value="yes"> <label>Creativiteit</label>
						</div>
						<div class="col-xs-4">
							<input type="checkbox" name="lead_skill" value="yes"> <label>Leidinggeven</label>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<input type="checkbox" name="analyze_skill" value="yes"> <label>Analyseren</label>
						</div>
						<div class="col-xs-4">
							<input type="checkbox" name="stress_resistance_skill" value="yes"> <label>Stressbestendigheid</label>
						</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-12">
					<h4>Bedrijf1</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-2">
							<label>bedrijfs plaats</label>
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="business_place1">
						</div>
						<div class="col-xs-2">
							<label>Datum</label>
						</div>
						<div class="col-xs-4">
							<input type="text" class="date form-control" name="business_place1_date">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-2">
							<label>Handtekening</label>
						</div>
						<div class="col-xs-10">
							<input type="text" class="form-control" id ="username2" name="username2">
						</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-12">
					<h4>Bedrijf2</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-2">
							<label>bedrijfs plaats</label>
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="business_place2">
						</div>
						<div class="col-xs-2">
							<label>Datum</label>
						</div>
						<div class="col-xs-4">
							<input type="text" class="date form-control" name="business_place2_date">
						</div>
					</div>
					<div class="row">
						<div class="col-xs-2">
							<label>Handtekening</label>
						</div>
						<div class="col-xs-10">
							<input type="text" class="form-control" id ="username3" name="username3">
						</div>
					</div>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-sm-12 text-center">
					<input type="hidden" name="voor_type">
					<button type="button" class="btn btn-success submit1">Submit voor1</button>
					<button type="button" class="btn btn-success submit2">Submit voor2</button>
					<button type="button" class="btn btn-danger" onclick="window.close();">Close</button>
				</div>
			</div>
		</form>
	</div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('.submit1').click(function(){
			$('input[name="voor_type"]').val('voor1');
			$('form').submit();
		});

		$('.submit2').click(function(){
			$('input[name="voor_type"]').val('voor2');
			$('form').submit();
		});
		
	
	});
</script>
</body>
</html>