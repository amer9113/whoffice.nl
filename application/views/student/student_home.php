<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>whoffice</title>
</head>
<body>
	<!-- <h1 class="text-center">Welkom <strong><i><?= $this->acc_name; ?></i></strong></h1>
	<h4 class="text-center" style="font-weight: 600">Verstreken tijd: <?= $this->elapsed_time; ?>&nbsp;&nbsp;&nbsp;<a href="<?= base_url().'student/logout' ?>">Uitloggen</a></h4>
	<div class="container">
		<div class="row" style="margin-top: 250px;">
			<div class="col-sm-12 text-center">
				<a class="btn btn-danger" href="<?= base_url().'student/lesson/1'; ?>">ONA-Lessen</a>
				<a class="btn btn-primary" target="_blank" href="<?= base_url().'suspention/comming_soon'; ?>">ONA-Praktijk</a>
				<a class="btn btn-success" target="_blank" href="<?= base_url().'suspention/comming_soon'; ?>">ONA-Onderwijs</a>
				<a class="btn btn-success" target="_blank" href="<?= base_url().'suspention/comming_soon'; ?>">ONA-werk en inkomen</a>
				<a class="btn btn-success" target="_blank" href="<?= base_url().'suspention/comming_soon'; ?>">ONA Functies</a>
			</div>
		</div>
	</div> -->
	<div class="parallax imgbc centerpagecnt2">
        <div class="w3-container w3-center w3-mobile">
            <a target="_blank" href="<?= base_url().'student/lesson/1'; ?>"><button class="squarebutton w3-button w3-card-4 w3-mobile w3-display-container"> 
                <img class="imgbutton" src="<?= base_url().'images/3837.jpg'; ?>">
                <div class="imgtext w3-display-bottommiddle w3-large">ONA-lessen</div> 
            </button></a> &nbsp;
            <a target="_blank" href="<?= base_url().'suspention/comming_soon'; ?>"><button class="squarebutton w3-button w3-card-4 w3-mobile w3-display-container"> 
                <img class="imgbutton" src="<?= base_url().'images/61.jpg'; ?>">
                <div class="imgtext w3-display-bottommiddle w3-large">ONA - praktijk</div> 
            </button></a> &nbsp;
            <a target="_blank" href="<?= base_url().'suspention/comming_soon'; ?>"><button class="squarebutton w3-button w3-card-4 w3-mobile w3-display-container"> 
                <img class="imgbutton" src="<?= base_url().'images/25060.jpg'; ?>">
                <div class="imgtext w3-display-bottommiddle w3-large">ONA-onderwijs</div> 
            </button></a> &nbsp;
            <br>
            <a target="_blank" href="<?= base_url().'suspention/comming_soon'; ?>"><button class="squarebutton w3-button w3-card-4 w3-mobile w3-display-container"> 
                <img class="imgbutton" src="<?= base_url().'images/489536-PH1MCV-393.jpg'; ?>">
                <div class="imgtext w3-display-topmiddle w3-large">Ona-werk en inkomen</div> 
            </button></a> &nbsp;
            <a target="_blank" href="<?= base_url().'suspention/comming_soon'; ?>"><button class="squarebutton w3-button w3-card-4 w3-mobile w3-display-container"> 
                <img class="imgbutton" src="<?= base_url().'images/31214.jpg'; ?>">
                <div class="imgtext w3-display-topmiddle w3-large">ONA-Functies</div> 
            </button></a> &nbsp;
            <a target="_blank" href="<?= base_url().'suspention/comming_soon'; ?>"><button class="squarebutton w3-button w3-card-4 w3-mobile w3-display-container"> 
                <img class="imgbutton" src="<?= base_url().'images/989.jpg'; ?>"> 
                <div class="imgtext w3-display-topmiddle w3-large">ONA-Maatschappij</div>
            </button></a> &nbsp;
        </div>
    </div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>