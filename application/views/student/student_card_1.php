<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>Resultaatkaart 1</title>
</head>
<body>
    <div class="parallax w3-container w3-mobile" id="Content">
        <?php require(dirname(__FILE__) . '/student_card_header.inc.php') ?>
		<div class="cnt_heads w3-mobile" id="cnt_head">

           	<h1 class="w3-xxlarge w3-text-red" id="title"><b>Resultaatkaart1 -BeroePenorientatie</b></h1>

           	<hr style="border:1px solid red" class="w3-round w3-hover-border-white"> 

           	<!-- <h3 class="w3-large w3-text-teal" id="sidetext">

           		<b>

           			<span class="glyphicon glyphicon-info-sign"></span>U Kunt hier de toelichting of de verklarende woordenlijst openen

           		</b>

           	</h3> -->

		</div>



        <?php require(dirname(__FILE__) . '/student_card_response_messages.inc.php') ?>



    	<form method="POST" enctype="multipart/form-data" class="manual_validation">

    		<div class="w3-container w3-block w3-mobile" id="cnt_form">

                <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt1">

                    <div class="rightsign w3-container w3-cell w3-mobile">

                        <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
                        <span class="label label-success">&nbsp;&nbsp;1&nbsp;&nbsp;</span>

                    </div>

                    <div class="w3-cell w3-block w3-mobile">

                        <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" name="quline1">

                            <label class="quline_text w3-mobile section_header" name="text1">

                            [[text1:text]]

                            </label>

                          

                        </div>

                        <div class="w3-cell-row w3-block w3-mobile" name="ans1line1">

                            <div class="signsize w3-cell w3-mobile">

                                <div class="w3-container w3-cell w3-mobile">1</div>

                            </div>

                            <div class="w3-cell w3-mobile">

                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red create_which_work_select_list" type="text" name="work_1" required maxlength="255" value="<?= isset($data) ? $data->work_1 : ''; ?>">

                            </div>

                        </div>

                        <div class="w3-cell-row w3-block w3-mobile" name="ans1line2">

                            <div class="signsize w3-cell w3-mobile">

                                <div class="w3-container w3-cell w3-mobile">2</div>

                            </div>

                            <div class="w3-cell w3-mobile">

                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red create_which_work_select_list" type="text" name="work_2" required maxlength="255" value="<?= isset($data) ? $data->work_2 : ''; ?>">

                            </div>

                        </div>

                        <div class="w3-cell-row w3-block w3-mobile" name="ans1line3">

                            <div class="signsize w3-cell w3-mobile">

                                <div class="w3-container w3-cell w3-mobile">3</div>

                            </div>

                            <div class="w3-cell w3-mobile">

                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red create_which_work_select_list" type="text" name="work_3" required maxlength="255" value="<?= isset($data) ? $data->work_3 : ''; ?>">

                            </div>

                        </div>

                        <div class="w3-cell-row w3-block w3-mobile" name="ans1line3">

                            <div class="signsize w3-cell w3-mobile">

                                <div class="w3-container w3-cell w3-mobile"></div>

                            </div>
                      
                            <div class="w3-hover-opacity">

                                <h4 name="text3"> [[text2:text]]</h4>

                            </div>
                        
                          

                        </div>
                        <div class="w3-cell-row w3-block w3-mobile" name="ans1line3">
                            <div class="signsize w3-cell w3-mobile">

                                <div class="w3-container w3-cell w3-mobile">-</div>

                            </div>
                            <div class="w3-cell w3-mobile">

                                <select class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="which_work_is_selected" required></select>

                            </div>
                        </div>
                      

                    </div>

                </div>

                <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt2">

                    <div class="rightsign w3-container w3-cell w3-mobile">

                        <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
                        <span class="label label-success">&nbsp;&nbsp;2&nbsp;&nbsp;</span>

                    </div>

                    <div class="w3-cell w3-block w3-mobile">

                        <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" name="quline2">

                            <label class="quline_text w3-mobile section_header" name="text5">

                            Het volgende antwoord past bij mijn gewenste beroep:

                            </label>

                            

                        </div>

                        <div class="w3-cell-row w3-block w3-mobile" name="ans2line">

                            <div class=".divstyle;checkbox" name="ch_line">

                                <label>

                                <input class="w3-check" type="checkbox" id="sectors_checkbox" data-input_to_toggle='[name="sectors"]' data-checkbox_to_revers='#one_sector_checkbox' data-checkbox_mandatory_group="section_2" <?php if (isset($data) && $data->sectors != ""): ?>

    								checked

    							<?php endif ?>>

                                <label class="quline_text w3-mobile" name="text7">

                                mijn gewenste beroep past in veel branches/sectoren , bijvoorbeeld: 

                                </label>

                                </label>

                                <br>

                                <labelfor="sectors"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="sectors" value="<?= isset($data) ? $data->sectors : ''; ?>" readonly></labelfor>

                            </div>

                            <div class=".divstyle;checkbox">

                                <label>

                                <input class="w3-check" type="checkbox" id="one_sector_checkbox" data-input_to_toggle='[name="one_sector"]' data-checkbox_to_revers='#sectors_checkbox' data-checkbox_mandatory_group="section_2" <?php if (isset($data) && $data->one_sector != ""): ?>

    								checked

    							<?php endif ?>>

                                <label class="quline_text w3-mobile" name="text9">

                                mijn gewenste beroep past alleen in de volgende branche/sector:

                                </label>

                                </label>

                                <br>

                                <labelfor="one_sector"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="one_sector" maxlength="255" value="<?= isset($data) ? $data->one_sector : ''; ?>" readonly></labelfor>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt3">

                    <div class="rightsign w3-container w3-cell w3-mobile">

                        <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
                        <span class="label label-success">&nbsp;&nbsp;3&nbsp;&nbsp;</span>

                    </div>

                    <div class="w3-cell w3-block w3-mobile">

                        <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" name="quline3">

                            <label class="quline_text w3-mobile section_header" name="text11">

                            De volgende situatise passen bij mij :

                            </label>

                        </div>

                        <div class="w3-cell-row w3-block w3-mobile" id="ans3line">

                            <div class=".divstyle;checkbox">

                                <label>

                                <input class="w3-check" type="checkbox" name="have_certificate" data-checkbox_mandatory_group="section_3" data-input_to_toggle='[name="certificate_file"]' value="1" <?php if (isset($data) && $data->have_certificate == 1): ?>

                                    checked

                                <?php endif ?>> 

                                <label class="quline_text w3-mobile" name="text13">

                                Ik heb een diploma voor mijn gewenste beroep. Ik kan het bewijs laten zien.

                                </label>

                                 

                                </label>

                                <!--                 //button -->

                                <div class="w3-container w3-block w3-mobile">

                                    <div class="col-sm-3 w3-block w3-mobile">

                                        <label class="btn btn-default btn-file w3-teal w3-text-white" name="quline3_text3">

                                        Kies document <input name="certificate_file" type="file" style="display: none;" <?php if (!(isset($data) && $data->have_certificate == 1)): ?>
                                                disabled
                                            <?php endif ?>>

                                        </label>

                                        <br>

                                        <?php if (isset($data) && $data->have_certificate == 1): ?>

                                            <label class="choosen_file_label"><a href="<?= base_url().'ext/student_documents/'.$data->certificate_name; ?>" target="_blank"><?= $data->certificate_name_caption; ?></a></label>

                                        <?php endif ?>

                                    </div>

                                    <div class="col-sm-9 w3-block w3-mobile">

                                        <label class="quline_text w3-mobile" name="text15">

                                        Voeg een Kopie van het diploma toe

                                        </label>


                                    </div>



                                </div>

                            </div>

                            <div class=".divstyle;checkbox">

                                <label>

                                <input class="w3-check" type="checkbox" name="another_certificate" value="1" data-checkbox_mandatory_group="section_3" data-input_to_toggle='[name="another_certificate_file"]' <?php if (isset($data) && $data->another_certificate == 1): ?>

                                    checked

                                <?php endif ?>> 

                                <label class="quline_text w3-mobile" name="text17">

                                Ik heb geen diploma voor mijn gewenste beroep. Maar wel een ander diploma . Ik kan het bewijs laten zien.

                                </label>

                                

                                </label>

                                <!--                 //button -->

                                <div class="w3-container w3-block w3-mobile">

                                    <div class="col-sm-3 w3-block w3-mobile">

                                        <label class="btn btn-default btn-file w3-teal w3-text-white">

                                        Kies document <input name="another_certificate_file" type="file" style="display: none;" <?php if (!(isset($data) && $data->another_certificate == 1)): ?>
                                                disabled
                                            <?php endif ?>>

                                        </label>

                                        <br>

                                        <?php if (isset($data) && $data->another_certificate == 1): ?>

                                            <label class="choosen_file_label"><a href="<?= base_url().'ext/student_documents/'.$data->another_certificate_name; ?>" target="_blank"><?= $data->another_certificate_name_caption; ?></a></label>

                                        <?php endif ?>

                                    </div>

                                    <div class="col-sm-9 w3-block w3-mobile">

                                        <label class="quline_text w3-mobile" name="text19">

                                        Voeg een Kopie van het diploma toe

                                        </label>

                                    </div>

                                </div>

                            </div>

                            <div class=".divstyle;checkbox">

                                <label>

                                <input class="w3-check" type="checkbox" name="have_certificate_cannot_view" data-checkbox_mandatory_group="section_3" value="1" <?php if (isset($data) && $data->have_certificate_cannot_view == 1): ?>

                                    checked

                                <?php endif ?>>

                                <label class="quline_text w3-mobile" name="text21">

                                Ik heb wel een diploma. Maar ik kan het diploma niet laten zien.

                                </label>

                                

                                </label>

                            </div>

                            <div class=".divstyle;checkbox">

                                <label>

                                <input class="w3-check" type="checkbox" name="ion_certificate" data-checkbox_mandatory_group="section_3" data-input_to_toggle='[name="ion_certificate_name"],[name="ion_certificate_file"]' value="1" <?php if (isset($data) && $data->ion_certificate == 1): ?>

                                    checked

                                <?php endif ?>> 

                                <label class="quline_text w3-mobile" name="text23">

                                Ik heb mijn diploma laten waarderen/een Indicate Onderwijs Niveau (10N).Ik kan het bewijs laten zien. Mijn diploma is gelijk aan het volgende type oplenameing in Nederland: 

                                </label>

                                

                                </label>

                                <labelfor="ion_certificate_name"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="ion_certificate_name" readonly value="<?= isset($data) ? $data->ion_certificate_name : ''; ?>">

                                </labelfor>

                                <br>

                                <!--                 //button -->

                                <div class="w3-container w3-block w3-mobile">

                                    <div class="col-sm-3 w3-block w3-mobile">

                                        <label class="btn btn-default btn-file w3-teal w3-text-white">

                                        Kies document <input name="ion_certificate_file" type="file" style="display: none;" <?php if (!(isset($data) && $data->ion_certificate == 1)): ?>
                                                disabled
                                            <?php endif ?>>

                                        </label>

                                        <br>
                                        <?php if (isset($data) && $data->ion_certificate == 1): ?>

                                            <label class="choosen_file_label"><a href="<?= base_url().'ext/student_documents/'.$data->ion_certificate_file; ?>" target="_blank"><?= $data->ion_certificate_file_caption; ?></a></label>

                                        <?php endif ?>

                                    </div>

                                    <div class="col-sm-9 w3-block w3-mobile">

                                        <label class="quline_text w3-mobile" name="text25">

                                        Voeg een Kopie van de diplomawaardering of ION toe

                                        </label>

                                        

                                    </div>

                                </div>

                                <br>

                            </div>

                            <div class=".divstyle;checkbox">

                                <label>

                                <input class="w3-check" type="checkbox" name="work_with_certificate" data-checkbox_mandatory_group="section_3" value="1" <?php if (isset($data) && $data->work_with_certificate == 1): ?>

                                    checked

                                <?php endif ?>>

                                <label class="quline_text w3-mobile" name="text27">

                                Met mijn diploma/diplomawaardering/ION kan ik werken in mijn gewenste beroep.

                                </label>

                                

                                </label>

                            </div>

                            <div class=".divstyle;checkbox">

                                <label>

                                <input class="w3-check" type="checkbox" data-input_to_toggle='[name="reason_no_certificate"]' data-checkbox_mandatory_group="section_3" id="" <?php if (isset($data) && $data->reason_no_certificate != ""): ?>

                                    checked

                                <?php endif ?>> 

                                <label class="quline_text w3-mobile" name="text29">

                                Ik heb geen diplomawaardering / ION noding , want:

                                </label>

                               

                                </label>

                                <br>

                                <labelfor="reason_no_certificate"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="reason_no_certificate" readonly value="<?= isset($data) ? $data->reason_no_certificate : ''; ?>"></labelfor>

                            </div>

                            <div class=".divstyle;checkbox">

                                <label>

                                <input class="w3-check" type="checkbox" name="experience" data-checkbox_mandatory_group="section_3" value="1" <?php if (isset($data) && $data->experience == 1): ?>

                                    checked

                                <?php endif ?>> 

                                <label class="quline_text w3-mobile" name="text31">

                                Ik heb ervaring in dit gewenste beroep.

                                </label>

                               

                                </label>

                            </div>

                            <div class=".divstyle;checkbox">

                                <label>

                                <input class="w3-check" type="checkbox" name="experience_certificate" data-input_to_toggle='[name="experience_certificate_file"]' data-checkbox_mandatory_group="section_3" value="1" <?php if (isset($data) && $data->experience_certificate == 1): ?>

                                    checked

                                <?php endif ?>> 

                                <label class="quline_text w3-mobile" name="text33">

                                Ik heb een EVC-procedure aangevraagd of gevolgd. Ik kan het bewijs laten zien .

                                </label>

                                

                                </label>

                                <!--                 //button -->

                                <div class="w3-container w3-block w3-mobile">

                                    <div class="col-sm-3 w3-block w3-mobile">

                                        <label class="btn btn-default btn-file w3-teal w3-text-white">

                                        Kies document <input name="experience_certificate_file" type="file" style="display: none;" <?php if (isset($data) && $data->experience_certificate == 1): ?>
                                                disabled
                                            <?php endif ?>>

                                        </label>

                                        <br>
                                        <?php if (isset($data) && $data->experience_certificate == 1): ?>

                                            <label class="choosen_file_label"><a href="<?= base_url().'ext/student_documents/'.$data->experience_certificate_file; ?>" target="_blank"><?= $data->experience_certificate_file_caption; ?></a></label>

                                        <?php endif ?>

                                    </div>

                                    <div class="col-sm-9 w3-block w3-mobile">

                                        <label class="quline_text w3-mobile" name="text35">

                                        Voeg een Kopie van de aanvraag of het ervaringscertificaat toe

                                        </label>

                                        

                                    </div>

                                </div>

                            </div>

                            <div class=".divstyle;checkbox">

                                <label>

                                <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_3" data-input_to_toggle='[name="reason_no_experience"]' <?php if (isset($data) && $data->reason_no_experience != ""): ?>

                                    checked

                                <?php endif ?>> 

                                <label class="quline_text w3-mobile" name="text37">

                                Ik heb geen ervaringscertificaat noding , want:

                                </label>

                                

                                </label>

                                <br>

                                <labelfor="reason_no_experience"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="reason_no_experience" readonly value="<?= isset($data) ? $data->reason_no_experience : ''; ?>"></labelfor>

                            </div>

                            <div class=".divstyle;checkbox">

                                <label>

                                <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_3" name="no_experience_certificate" value="1" <?php if (isset($data) && $data->no_experience_certificate == 1): ?>

                                    checked

                                <?php endif ?>> 

                                <label class="quline_text w3-mobile" name="text39">

                                Ik heb geen diploma's en geen wekwevaring in mijn gewenste beroep .

                                </label>

                                

                                </label>

                            </div>

                        </div>

                    </div>

                </div>

                

                <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile w3-center" id="footer">

                    <div>
                        <?php require(dirname(__FILE__) . '/student_card_modify_buttons.inc.php') ?>
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

<script type="text/javascript">

    $(document).ready(function(){
        $('.create_which_work_select_list').change(function(){

            var work_1 = $('[name="work_1"]').val().trim();
            var work_2 = $('[name="work_2"]').val().trim();
            var work_3 = $('[name="work_3"]').val().trim();

            $('[name="which_work_is_selected"]').empty();

            if (work_1 != "") {
                $('[name="which_work_is_selected"]').append(
                    $('<option value="1">').text(work_1)
                );
            }

            if (work_2 != "") {
                $('[name="which_work_is_selected"]').append(
                    $('<option value="2">').text(work_2)
                );
            }

            if (work_3 != "") {
                $('[name="which_work_is_selected"]').append(
                    $('<option value="3">').text(work_3)
                );

            }
            var which_work_is_selected = <?= isset($data) ? $data->which_work_is_selected : 0; ?>;
            $('[name="which_work_is_selected"] option[value="'+which_work_is_selected+'"]').prop('selected',true);
        });

        $('[name="work_1"]').change();
    });

</script>

</body>

</html>