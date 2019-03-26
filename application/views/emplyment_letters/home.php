<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>Employment Letters</title>
</head>
<body>
    <div class="text-center" style="margin-top: 25px;">
        <a class="btn btn-primary" href="<?= base_url().'Employment_letter/employment_letter_form' ?>" target="_blank">Sollicitatiebrief</a>
        <a class="btn btn-success" href="<?= base_url().'Employment_letter/employment_letter_form_2' ?>" target="_blank">Sollicitatieformulier</a>
	</div>
</body>
</html>