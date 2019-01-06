<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__)) . '/inc/head.php') ?>
	<title>whoffice</title>
	<style type="text/css">
		.we-mobile{
			background-image: url("<?= base_url().'images/topbanner.jpg'; ?>");
		 background-repeat: no-repeat;
			height: 200px;
		}
	</style>
</head>
<body>
    <div class="parallax" style="background-color: #1c2023">
    	<div class="we-mobile"></div>
	    <div class="centerpagecnt w3-container w3-center w3-mobile w3-card-4 w3-white">
	        <a href="https://whoffice.nl/wp-login.php"><button class="squarebutton w3-button w3-card-4 w3-mobile w3-display-container" style=" width: 333px; height: 300px; "> 
	        	<img class="imgbutton" src="<?= base_url().'images/1243.jpg'; ?>">
	        	<div class="imgtext w3-display-topmiddle w3-large">studenten 2018</div> 
	        </button></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	        <a href="student_login"><button class="squarebutton w3-button w3-card-4 w3-mobile w3-display-container" style=" width: 333px; height: 300px; "> 
	        	<img class="imgbutton" src="<?= base_url().'images/153171-OU5TVG-38.jpg'; ?>">
	        	<div class="imgtext w3-display-bottommiddle w3-large">studenten  2019</div> 
	        </button></a> &nbsp;
	        
	    </div>
    </div>
<?php require(realpath(dirname(__FILE__)) . '/inc/scripts.php') ?>
</body>
</html>