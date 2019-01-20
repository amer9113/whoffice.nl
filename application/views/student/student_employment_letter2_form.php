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
							<label><?= $this->acc_name; ?></label>
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
							<input type="text" class="date form-control" name="date_of_birth">
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
							<input type="text" class="form-control" value="<?= $student->postal_code; ?>" disabled>
						</div>
						<div class="col-xs-6">
							<input type="text" name="address" class="form-control">
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
							<label><?= $student->email; ?></label>
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
										<td>Middelbare school</td>
										<td>Alyarmouk School</td>
										<td>1999-2001</td>
										<td>ja / nee</td>
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
										<th>Bedrijf / organisatie</th>
										<th>Van / tot</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Vrouwelijke kapper</td>
										<td>knippen</td>
										<td>Yarmouk Salon</td>
										<td>2000-2017</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div><br><br>
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
										<td>ffffff</td>
										<td>dddddd</td>
										<td>asdf</td>
										<td>6562336</td>
									</tr>
								</tbody>
							</table>
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
					<h4>Bedrijfs plaats 1</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-2">
							<label>Utrecht</label>
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
							<label><?= $this->acc_name; ?></label>
						</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-sm-12">
					<h4>Bedrijfs plaats 2</h4>
					<hr style="margin: 5px 0px;">
					<div class="row">
						<div class="col-xs-2">
							<label>Utrecht</label>
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
							<label><?= $this->acc_name; ?></label>
						</div>
					</div>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-sm-12 text-center">
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
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>