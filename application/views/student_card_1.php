<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require('inc/head.php') ?>
	<title>Resultaatkaart1</title>
</head>
<body>
	<div class="parallax w3-container w3-mobile" id="Content">
        <div class="col-sm-10 col-sm-offset-1 w3-container w3-mobile" id="cnt" style="margin-bottom:25px;background:rgba(102, 153, 153,0.2); padding: 0.1px;">
            <div class="row">
                <!-- topbar -->
                <div class="topnav" id="myTopnav">
                    <a class="active">Resultaatkaart1</a>
                    <a href="<?= base_url().'student/card_2'; ?>">Resultaatkaart2</a>
                    <a href="<?= base_url().'student/card_3'; ?>">Resultaatkaart3</a>
                    <a href="<?= base_url().'student/card_4'; ?>">Resultaatkaart4</a>
                    <a href="<?= base_url().'student/card_5'; ?>">Resultaatkaart5</a>
                    <a href="<?= base_url().'student/card_6'; ?>">Resultaatkaart6</a>
                    <a href="<?= base_url().'student/card_7'; ?>">Resultaatkaart7</a>
                    <a href="<?= base_url().'student/card_8'; ?>">Resultaatkaart8</a>
                </div>
            </div>
        </div>
		<div class="cnt_heads w3-mobile" id="cnt_head">
           	<h1 class="w3-xxlarge w3-text-red" id="title"><b>Resultaatkaart1 -BeroePenorientatie<small>arabic</small></b></h1>

           	<hr style="border:1px solid red" class="w3-round w3-hover-border-white"> 

           	<h3 class="w3-large w3-text-teal" id="sidetext">
           		<b>
           			<span class="glyphicon glyphicon-info-sign"></span>U Kunt hier de toelichting of de verklarende woordenlijst openen<small>arabic</small>
           		</b>
           	</h3>
		</div>
    	<?php if (isset($message)): ?>
    		<p><b><?= $message; ?></b></p>
    	<?php endif ?>
    	<form method="POST" enctype="multipart/form-data">
    		<div class="w3-container w3-block w3-mobile" id="cnt_form">
                <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt1">
                    <div class="rightsign w3-container w3-cell w3-mobile">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </div>
                    <div class="w3-cell w3-block w3-mobile">
                        <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" name="quline1">
                            <label class="quline_text w3-mobile" name="text1">
                            [[text1:text]]
                            </label>
                            <small name="text2"> [[text1:text_ar]]</small> 
                        </div>
                        <div class="w3-cell-row w3-block w3-mobile" name="ans1line1">
                            <div class="signsize w3-cell w3-mobile">
                                <div class="w3-container w3-cell w3-mobile">1</div>
                            </div>
                            <div class="w3-cell w3-mobile">
                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="work_1" required maxlength="255" value="<?= isset($data) ? $data->work_1 : ''; ?>">
                            </div>
                        </div>
                        <div class="w3-cell-row w3-block w3-mobile" name="ans1line2">
                            <div class="signsize w3-cell w3-mobile">
                                <div class="w3-container w3-cell w3-mobile">2</div>
                            </div>
                            <div class="w3-cell w3-mobile">
                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="work_2" required maxlength="255" value="<?= isset($data) ? $data->work_2 : ''; ?>">
                            </div>
                        </div>
                        <div class="w3-cell-row w3-block w3-mobile" name="ans1line3">
                            <div class="signsize w3-cell w3-mobile">
                                <div class="w3-container w3-cell w3-mobile">3</div>
                            </div>
                            <div class="w3-cell w3-mobile">
                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="work_3" required maxlength="255" value="<?= isset($data) ? $data->work_3 : ''; ?>">
                            </div>
                        </div>
                        <div class="w3-hover-opacity">
                            <h4 name="text3">Ik kies uit deze 3 beroepen 1 beroep . Dit is mijn gewenste beroep:<small name="text4">arabic</small></h4>
                        </div>
                    </div>
                </div>
                <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt2">
                    <div class="rightsign w3-container w3-cell w3-mobile">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </div>
                    <div class="w3-cell w3-block w3-mobile">
                        <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" name="quline2">
                            <label class="quline_text w3-mobile" name="text5">
                            Het volgende antwoord past bij mijn gewenste beroep:
                            </label>
                            <small name="text6">arabic</small> 
                        </div>
                        <div class="w3-cell-row w3-block w3-mobile" name="ans2line">
                            <div class=".divstyle;checkbox" name="ch_line">
                                <label>
                                <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->sectors != ""): ?>
    								checked
    							<?php endif ?>>
                                <label class="quline_text w3-mobile" name="text7">
                                mijn gewenste beroep past in veel branches/sectoren , bijvoorbeeld: 
                                </label>
                                <small name="text8">arabic</small>
                                </label>
                                <br>
                                <labelfor="sectors"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="sectors" required value="<?= isset($data) ? $data->sectors : ''; ?>"></labelfor>
                            </div>
                            <div class=".divstyle;checkbox">
                                <label>
                                <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->one_sector != ""): ?>
    								checked
    							<?php endif ?>>
                                <label class="quline_text w3-mobile" name="text9">
                                mijn gewenste beroep past alleen in de volgende branche/sector:
                                </label>
                                <small name="text10">arabic</small>
                                </label>
                                <br>
                                <labelfor="one_sector"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="one_sector" required maxlength="255" value="<?= isset($data) ? $data->one_sector : ''; ?>"></labelfor>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt3">
                    <div class="rightsign w3-container w3-cell w3-mobile">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </div>
                    <div class="w3-cell w3-block w3-mobile">
                        <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" name="quline3">
                            <label class="quline_text w3-mobile" name="text11">
                            De volgende situatise passen bij mij :
                            </label>
                            <small name="text12">arabic</small> 
                        </div>
                        <div class="w3-cell-row w3-block w3-mobile" id="ans3line">
                            <div class=".divstyle;checkbox">
                                <label>
                                <input class="w3-check" type="checkbox" name="have_certificate" value="1" <?php if (isset($data) && $data->have_certificate == 1): ?>
    								checked
    							<?php endif ?>> 
                                <label class="quline_text w3-mobile" name="text13">
                                Ik heb een diploma voor mijn gewenste beroep. Ik kan het bewijs laten zien.
                                </label>
                                <small name="text14">arabic</small> 
                                </label>
                                <!--                 //button -->
                                <div class="w3-container w3-block w3-mobile">
                                    <div class="col-sm-3 w3-block w3-mobile">
                                        <label class="btn btn-default btn-file w3-teal w3-text-white" name="quline3_text3">
                                        Kies document <input name="certificate_file" type="file" style="display: none;">
                                        </label>
                                        <?php if (isset($data) && $data->have_certificate == 1): ?>
    										<a href="<?= base_url().'ext/student_documents/'.$data->certificate_name; ?>" target="_blank">View uploaded file</a>
    									<?php endif ?>
                                    </div>
                                    <div class="col-sm-9 w3-block w3-mobile">
                                        <label class="quline_text w3-mobile" name="text15">
                                        Voeg een Kopie van het diploma toe
                                        </label>
                                        <small name="text16">arabic</small>
                                    </div>

                                </div>
                            </div>
                            <div class=".divstyle;checkbox">
                                <label>
                                <input class="w3-check" type="checkbox" name="another_certificate" value="1" <?php if (isset($data) && $data->another_certificate == 1): ?>
    								checked
    							<?php endif ?>> 
                                <label class="quline_text w3-mobile" name="text17">
                                Ik heb geen diploma voor mijn gewenste beroep. Maar wel een ander diploma . Ik kan het bewijs laten zien.
                                </label>
                                <small name="text18">arabic</small>
                                </label>
                                <!--                 //button -->
                                <div class="w3-container w3-block w3-mobile">
                                    <div class="col-sm-3 w3-block w3-mobile">
                                        <label class="btn btn-default btn-file w3-teal w3-text-white">
                                        Kies document <input name="another_certificate_file"type="file" style="display: none;">
                                        </label>
                                    	<?php if (isset($data) && $data->another_certificate == 1): ?>
    										<a href="<?= base_url().'ext/student_documents/'.$data->another_certificate_name; ?>" target="_blank">View uploaded file</a>
    									<?php endif ?>
                                    </div>
                                    <div class="col-sm-9 w3-block w3-mobile">
                                        <label class="quline_text w3-mobile" name="text19">
                                        Voeg een Kopie van het diploma toe
                                        </label>
                                        <small name="text20">arabic</small>
                                    </div>
                                </div>
                            </div>
                            <div class=".divstyle;checkbox">
                                <label>
                                <input class="w3-check" type="checkbox" name="have_certificate_cannot_view" value="1" <?php if (isset($data) && $data->have_certificate_cannot_view == 1): ?>
    								checked
    							<?php endif ?>>
                                <label class="quline_text w3-mobile" name="text21">
                                Ik heb wel een diploma. Maar ik kan het diploma niet laten zien.
                                </label>
                                <small name="text22">arabic</small>
                                </label>
                            </div>
                            <div class=".divstyle;checkbox">
                                <label>
                                <input class="w3-check" type="checkbox" name="ion_certificate" value="1" <?php if (isset($data) && $data->ion_certificate == 1): ?>
    								checked
    							<?php endif ?>> 
                                <label class="quline_text w3-mobile" name="text23">
                                Ik heb mijn diploma laten waarderen/een Indicate Onderwijs Niveau (10N).Ik kan het bewijs laten zien. Mijn diploma is gelijk aan het volgende type oplenameing in Nederland: 
                                </label>
                                <small name="text24">arabic</small>
                                </label>
                                <labelfor="ion_certificate_name"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="ion_certificate_name">
                                </labelfor>
                                <br>
                                <!--                 //button -->
                                <div class="w3-container w3-block w3-mobile">
                                    <div class="col-sm-3 w3-block w3-mobile">
                                        <label class="btn btn-default btn-file w3-teal w3-text-white">
                                        Kies document <input name="ion_certificate_file" type="file" style="display: none;">
                                        </label>
                                    	<?php if (isset($data) && $data->ion_certificate == 1): ?>
    										<a href="<?= base_url().'ext/student_documents/'.$data->ion_certificate_file; ?>" target="_blank">View uploaded file</a>
    									<?php endif ?>
                                    </div>
                                    <div class="col-sm-9 w3-block w3-mobile">
                                        <label class="quline_text w3-mobile" name="text25">
                                        Voeg een Kopie van de diplomawaardering of ION toe
                                        </label>
                                        <small name="text26">arabic</small>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class=".divstyle;checkbox">
                                <label>
                                <input class="w3-check" type="checkbox" name="work_with_certificate" value="1" <?php if (isset($data) && $data->work_with_certificate == 1): ?>
    								checked
    							<?php endif ?>>
                                <label class="quline_text w3-mobile" name="text27">
                                Met mijn diploma/diplomawaardering/ION kan ik werken in mijn gewenste beroep.
                                </label>
                                <small name="text28">arabic</small>
                                </label>
                            </div>
                            <div class=".divstyle;checkbox">
                                <label>
                                <input class="w3-check" type="checkbox" id="" <?php if (isset($data) && $data->reason_no_certificate != ""): ?>
                                	checked
                                <?php endif ?>> 
                                <label class="quline_text w3-mobile" name="text29">
                                Ik heb geen diplomawaardering / ION noding , want:
                                </label>
                                <small name="text30">arabic</small>
                                </label>
                                <br>
                                <labelfor="reason_no_certificate"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="reason_no_certificate" value="<?= isset($data) ? $data->reason_no_certificate : ''; ?>"></labelfor>
                            </div>
                            <div class=".divstyle;checkbox">
                                <label>
                                <input class="w3-check" type="checkbox" name="experience" value="1" <?php if (isset($data) && $data->experience == 1): ?>
    								checked
    							<?php endif ?>> 
                                <label class="quline_text w3-mobile" name="text31">
                                Ik heb ervaring in dit gewenste beroep.
                                </label>
                                <small name="text32">arabic</small>
                                </label>
                            </div>
                            <div class=".divstyle;checkbox">
                                <label>
                                <input class="w3-check" type="checkbox" name="experience_certificate" value="1" <?php if (isset($data) && $data->experience_certificate == 1): ?>
                                	checked
                                <?php endif ?>> 
                                <label class="quline_text w3-mobile" name="text33">
                                Ik heb een EVC-procedure aangevraagd of gevolgd. Ik kan het bewijs laten zien .
                                </label>
                                <small name="text34">arabic</small>
                                </label>
                                <!--                 //button -->
                                <div class="w3-container w3-block w3-mobile">
                                    <div class="col-sm-3 w3-block w3-mobile">
                                        <label class="btn btn-default btn-file w3-teal w3-text-white">
                                        Kies document <input name="experience_certificate_file" type="file" style="display: none;">
                                        </label>
                                    	<?php if (isset($data) && $data->experience_certificate == 1): ?>
    										<a href="<?= base_url().'ext/student_documents/'.$data->experience_certificate_file; ?>" target="_blank">View uploaded file</a>
    									<?php endif ?>
                                    </div>
                                    <div class="col-sm-9 w3-block w3-mobile">
                                        <label class="quline_text w3-mobile" name="text35">
                                        Voeg een Kopie van de aanvraag of het ervaringscertificaat toe
                                        </label>
                                        <small name="text36">arabic</small>
                                    </div>
                                </div>
                            </div>
                            <div class=".divstyle;checkbox">
                                <label>
                                <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->reason_no_experience != ""): ?>
                                	checked
                                <?php endif ?>> 
                                <label class="quline_text w3-mobile" name="text37">
                                Ik heb geen ervaringscertificaat noding , want:
                                </label>
                                <small name="text38">arabic</small>
                                </label>
                                <br>
                                <labelfor="reason_no_experience"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="reason_no_experience" value="<?= isset($data) ? $data->reason_no_experience : ''; ?>"></labelfor>
                            </div>
                            <div class=".divstyle;checkbox">
                                <label>
                                <input class="w3-check" type="checkbox" name="no_experience_certificate" value="1" <?php if (isset($data) && $data->no_experience_certificate == 1): ?>
    								checked
    							<?php endif ?>> 
                                <label class="quline_text w3-mobile" name="text39">
                                Ik heb geen diploma's en geen wekwevaring in mijn gewenste beroep .
                                </label>
                                <small name="text40">arabic</small>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile w3-center" id="footer">
                    <div class="w3-bar">
                        <input type="hidden" name="direction">
                        <button class="w3-button w3-red submit_forword" type="button">Naar Kaart2</button>
                    </div>
                </div>
            </div>
    	</form>
    </div>
<?php require('inc/scripts.php') ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.submit_forword').click(function(e){
            $('[name="direction"]').val("next");
            $('form').submit();
        });

        $('.submit_backword').click(function(e){
            e.preventDefault();
            $('[name="direction"]').val("back");
            $('form').submit();
        });
    });
</script>
</body>
</html>