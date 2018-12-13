<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require('inc/head.php') ?>
	<title>Resultaatkaart8</title>
</head>
<body>
	<div class="w3-container w3-mobile" id="Content">
        <div class="cnt_heads w3-mobile" id="cnt_head">
            <h1 class="w3-xxlarge w3-text-red" id="title"><b>
                Resultaatkaart8 -Werkcultuur
                <small>arabic</small></b>
            </h1>
            <hr style="border:1px solid red" class="w3-round w3-hover-border-white">
            <h3 class="w3-large w3-text-teal" id="sidetext"><b>
                <span class="glyphicon glyphicon-info-sign"></span>
                U Kunt hier de toelichting of de verklarende woordenlijst openen.
                <small>arabic</small></b>
            </h3>
        </div>
        <?php if (isset($message)): ?>
    		<p><b><?= $message; ?></b></p>
    	<?php endif ?>
	    <form method="POST">
	    	<div class="w3-container w3-block w3-mobile" id="cnt_form">
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt1">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">
	                        <label class="t8 quline_text w3-mobile" name="text1">
	                        text1
	                        </label>
	                        <small name="text2">text2</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;">
	                            <div>
	                                <label class="quline_text w3-mobile" name="text3">
	                                text3
	                                </label>
	                                <small name="text4">text4</small>
	                                <br>
	                                <labelfor="in_my_country_1"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="in_my_country_1" value="<?= isset($data) ? $data->in_my_country_1 : ''; ?>"></labelfor>
	                            </div>
	                            <div>
	                                <label class="quline_text w3-mobile" name="text5">
	                                text5
	                                </label>
	                                <small name="text6">text6</small>
	                                <br>
	                                <labelfor="in_netherlands_1"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="in_netherlands_1" value="<?= isset($data) ? $data->in_netherlands_1 : ''; ?>"></labelfor>
	                            </div>
	                        </div>
	                        <div class=".divstyle;">
	                            <div>
	                                <label class="quline_text w3-mobile" name="text7">
	                                text7
	                                </label>
	                                <small name="text8">text8</small>
	                                <br>
	                                <labelfor="in_my_country_2"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="in_my_country_2" value="<?= isset($data) ? $data->in_my_country_2 : ''; ?>"></labelfor>
	                            </div>
	                            <div>
	                                <label class="quline_text w3-mobile" name="text9">
	                                text9
	                                </label>
	                                <small name="text10">text10</small>
	                                <br>
	                                <labelfor="in_netherlands_2"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="in_netherlands_2" value="<?= isset($data) ? $data->in_netherlands_2 : ''; ?>"></labelfor>
	                            </div>
	                        </div>
	                        <div class=".divstyle;">
	                            <div>
	                                <label class="quline_text w3-mobile" name="text11">
	                                text11
	                                </label>
	                                <small name="text12">text12</small>
	                                <br>
	                                <labelfor="in_my_country_3"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="in_my_country_3" value="<?= isset($data) ? $data->in_my_country_3 : ''; ?>"></labelfor>
	                            </div>
	                            <div>
	                                <label class="quline_text w3-mobile" name="text13">
	                                text13
	                                </label>
	                                <small name="text14">text14</small>
	                                <br>
	                                <labelfor="in_netherlands_3"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="in_netherlands_3" value="<?= isset($data) ? $data->in_netherlands_3 : ''; ?>"></labelfor>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile w3-center" id="footer">
	                <div class="w3-bar">
	                    <button class="w3-button w3-red" type="submit">Naar Kaart7</button>
	                </div>
	            </div>
	        </div>
	    </form>
    </div>
<?php require('inc/scripts.php') ?>
</body>
</html>