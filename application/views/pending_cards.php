<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require('inc/head.php') ?>
	<title>whoffice</title>

	<style type="text/css">
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		  text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				<div class="alert alert-warning text-center" role="alert">There are <strong><?= count($pending_cards); ?></strong> card pending approval.</div>
				<table style="width:100%">
					<thead>
						<tr>
							<th>Student Name / ID</th>
							<th>Card</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($pending_cards as $key => $card): ?>
							<tr>
								<td><?= $card->firstname." ".$card->lastname." / ".$card->id; ?></td>
								<td><?= $card->card_name; ?></td>
								<td><a href="<?= base_url().'teacher/check_card/'.$card->card_no.'/'.$card->card_id; ?>">check it out</a></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
				<br>
				<a class="btn btn-primary" href="<?= base_url().'teacher'; ?>">Close</a>
			</div>
		</div>
	</div>
<?php require('inc/scripts.php') ?>
</body>
</html>