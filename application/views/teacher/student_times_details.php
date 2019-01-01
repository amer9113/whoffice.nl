<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<div class="parallax w3-container background-color:lavenderblush w3-mobile">
	    <div class="col-sm-3">
	        <?php require(dirname(__FILE__) . '/side_navbar.inc.php') ?>
	    </div>

	    <div class="col-sm-9">
	    	<div class="w3-main w3-card-4">
	            <div class="w3-black">
	                <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
	                <div class="w3-container w3-bottombar w3-border-white w3-hover-border-red">
	                    <h1>Students Times Details</h1>
	                </div>
	            </div>
	            <div class="w3-container">
	                <h3>Students Times Details</h3>
	                <table class="table table-bordered table-striped table-hover table-condensed">
						<thead>
							<tr>
								<th>From</th>
								<th>To</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($students_times as $key => $row): ?>
								<tr>
									<td><?= $row->from; ?></td>
									<td><?= $row->to; ?></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
	            </div>
	        </div>
	    </div>
	</div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>