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
		<div class="row">
			<div class="col-xs-6">
				<h3>Sollicitatieformulier</h3>
			</div>
			<div class="col-xs-6">
				<h3>voor: UBN Utrecht</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h4>sollicitatie</h4>
				<hr style="margin: 5px 0px;">
				<div class="row">
					<div class="col-xs-6">
						<label>Dit formulier wordt ingevuld in verband met:</label>
					</div>
					<div class="col-xs-2">
						<input type="checkbox" checked=""> <label>sollicitatie</label>
					</div>
					<div class="col-xs-2">
						<input type="checkbox"> <label>stage</label>
					</div>
					<div class="col-xs-2">
						<input type="checkbox"> <label>Anders, nl.</label>
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
						<label>Razan Tahboob</label>
					</div>
					<div class="col-xs-5">
						<input type="checkbox"> <label>Man</label>&nbsp;&nbsp;
						<input type="checkbox" checked> <label>Vrouw</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<label>Geboortedatum:</label>
					</div>
					<div class="col-xs-3">
						<label>25-07-1983</label>
					</div>
					<div class="col-xs-3">
						<label>Geboorteplaats:</label>
					</div>
					<div class="col-xs-3">
						<label>Syrie</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<label>Nationaliteit:</label>
					</div>
					<div class="col-xs-9">
						<label>Staatloos</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<label>Burgerlijke staat:</label>
					</div>
					<div class="col-xs-9">
						<label>Gehuwd</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<label>Burgerservicenummer (BSN):</label>
					</div>
					<div class="col-xs-9">
						<label>565127494</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<label>Straatnaam en huisnummer:</label>
					</div>
					<div class="col-xs-9">
						<label>Voltastraat 128</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<label>Postcode en Woonplaats:</label>
					</div>
					<div class="col-xs-9">
						<label>2871ZR , Schoonhoven</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<label>Mobiel:</label>
					</div>
					<div class="col-xs-9">
						<label>0686167325</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<label>E-mailadres:</label>
					</div>
					<div class="col-xs-9">
						<label>razantahbob@gmail.com</label>
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
						<label>Magazijnmedewerker</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<label>Hoeveel uur wilt u werken?</label>
					</div>
					<div class="col-xs-9">
						<label>40	uur per week</label>
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
						<label>Magazijnmedewerker</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-3">
						<label>Hoeveel uur wilt u werken?</label>
					</div>
					<div class="col-xs-9">
						<label>40	uur per week</label>
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
						<label>goed</label>
					</div>
					<div class="col-xs-2">
						<label>Engels</label>
					</div>
					<div class="col-xs-3">
						<label>voldoende </label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2">
						<label>Arabische</label>
					</div>
					<div class="col-xs-9">
						<label>slecht</label>
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
						<input type="checkbox" checked> <label>Nauwkeurigheid</label>
					</div>
					<div class="col-xs-4">
						<input type="checkbox" checked> <label>Samenwerken</label>
					</div>
					<div class="col-xs-4">
						<input type="checkbox" checked> <label>Communicatie</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<input type="checkbox" checked> <label>Creativiteit</label>
					</div>
					<div class="col-xs-4">
						<input type="checkbox"> <label>Leidinggeven</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<input type="checkbox" checked> <label>Analyseren</label>
					</div>
					<div class="col-xs-4">
						<input type="checkbox"> <label>Stressbestendigheid</label>
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
						<label>Utrecht</label>
					</div>
					<div class="col-xs-2">
						<label>Datum</label>
					</div>
					<div class="col-xs-4">
						<label>1-06-2018</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2">
						<label>Handtekening</label>
					</div>
					<div class="col-xs-10">
						<label>Name</label>
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
						<label>Utrecht</label>
					</div>
					<div class="col-xs-2">
						<label>Datum</label>
					</div>
					<div class="col-xs-4">
						<label>1-06-2018</label>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-2">
						<label>Handtekening</label>
					</div>
					<div class="col-xs-10">
						<label>Name</label>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>