<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>Resultaatkaart1</title>
</head>
<body>
	<div class="parallax w3-container w3-mobile" id="Content">
        <?php if (!isset($opened_for_teacher_checking)): ?>
        <div class="col-sm-10 col-sm-offset-1 w3-container w3-mobile" id="cnt" style="margin-bottom:25px;background:rgba(102, 153, 153,0.2); padding: 0.1px;">
            <div class="row">
                <!-- topbar -->
                <div class="topnav" id="myTopnav">
                    <?php foreach ($cards_status as $key => $card): ?>
                    <?php if ($card->card_no == $card_number): ?>
                        <a class="active" href="<?= base_url().'student/card_'.$card->card_no; ?>"><?= 'Resultaatkaart'.$card->card_no; ?></a>
                    <?php else: ?>
                        <?php if ($card->accessable == 1): ?>
                            <a href="<?= base_url().'student/card_'.$card->card_no; ?>"><?= 'Resultaatkaart'.$card->card_no; ?></a>
                        <?php else: ?>
                            <a class="disabled" href="#"><?= 'Resultaatkaart'.$card->card_no; ?></a>
                        <?php endif ?>
                    <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <?php endif ?>
		<div class="cnt_heads w3-mobile" id="cnt_head">
           	<h1 class="w3-xxlarge w3-text-red" id="title"><b>Resultaatkaart1 -BeroePenorientatie<small>arabic</small></b></h1>

           	<hr style="border:1px solid red" class="w3-round w3-hover-border-white"> 

           	<h3 class="w3-large w3-text-teal" id="sidetext">
           		<b>
           			<span class="glyphicon glyphicon-info-sign"></span>U Kunt hier de toelichting of de verklarende woordenlijst openen<small>arabic</small>
           		</b>
           	</h3>
		</div>

        <?php if (!isset($opened_for_teacher_checking)): ?>
    
        <?php if (isset($data)): ?>
            <?php if ($data->checked_with_teacher == 0): ?>
                <div class="alert alert-danger text-center" role="alert"><strong>Waiting</strong> for teacher approval to go to the next card.</div>

                <?php if ($data->needs_correction_by_student == 1): ?>
                    <div class="alert alert-info text-center" role="alert">
                        <strong>Card Needs Correction</strong><br><strong>Notes: </strong><?= $data->correction_notes; ?></div>
                <?php endif ?>
                
            <?php else: ?>
                <div class="alert alert-success text-center" role="alert">
                    <strong>Well done!</strong> You can now take <a href="<?= base_url().'student/card_2'; ?>" class="alert-link">card2</a>.
                </div>
            <?php endif ?>
        <?php endif ?>
    	<?php if (isset($message)): ?>
    		<p><b><?= $message; ?></b></p>
            <script>
                 window.onload = function() {
                     if ( window.history.replaceState ) {
                         window.history.replaceState( null, null, window.location.href );
                     }
                 }
             </script>
    	<?php endif ?>

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
                        <?php if (isset($opened_for_teacher_checking)): ?>
                        
                        <input type="hidden" name="lock_card">
                        <input type="hidden" name="needs_correction_by_student" value="no">
                        <button class="w3-button w3-green approve_edit" type="button">Approve &amp; allow edit</button> 
                        <button class="w3-button w3-red approve_lock" type="button">Approve &amp; lock</button> 
                        <button class="w3-button w3-blue needs_correction" type="button">Needs correction</button><br>
                        <input type="text" name="correction_notes" placeholder="Correction Notes" value="<?= $data->correction_notes; ?>">

                        <?php else: ?>
                            
                        <?php if (isset($data)): ?>
                            <?php if ($data->edit_allow == 1): ?>
                                <button type="submit" class="w3-button w3-red">Update card</button> 
                            <?php else: ?>
                                <button type="submit" class="w3-button w3-red" disabled>Update isn't allowed</button>
                            <?php endif ?>
                        <?php else: ?>
                        <button type="submit" class="w3-button w3-red">Submit card</button>    
                        <?php endif ?>

                        <?php endif ?>
                        
                    </div>
                </div>
            </div>
    	</form>
    </div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
<?php if (isset($opened_for_teacher_checking)): ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.approve_edit').click(function(){
            $('[name="lock_card"]').val("no");
            $('form').submit();
        });

        $('.approve_lock').click(function(){
            $('[name="lock_card"]').val("yes");
            $('form').submit();
        });

        $('.needs_correction').click(function(){
            $('[name="lock_card"]').val("no");
            $('[name="needs_correction_by_student"]').val("yes");
            $('form').submit();
        });
    });
</script>
<?php endif ?>
</body>
</html>