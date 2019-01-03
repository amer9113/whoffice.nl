<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">

<head>

	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>

	<title>Resultaatkaart 6</title>

</head>

<body>
	<div class="parallax w3-container w3-mobile" id="Content">
		<?php require(dirname(__FILE__) . '/student_card_header.inc.php') ?>
        <div class="cnt_heads w3-mobile" id="cnt_head">

            <h1 class="w3-xxlarge w3-text-red" id="title"><b>

                Resultaatkaart6 -Netwerk opbouwen

                </b>

            </h1>

            <hr style="border:1px solid red" class="w3-round w3-hover-border-white">

            <!-- <h3 class="w3-large w3-text-teal" id="sidetext"><b>

                <span class="glyphicon glyphicon-info-sign"></span>

                U Kunt hier de toelichting of de verklarende woordenlijst openen.

                </b>

            </h3> -->

        </div>

        <?php require(dirname(__FILE__) . '/student_card_response_messages.inc.php') ?>

    	<form method="POST" class="manual_validation">

	        <div class="w3-container w3-block w3-mobile" id="cnt_form">

	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt1">

	                <div class="rightsign w3-container w3-cell w3-mobile">

	                    <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
	                    <span class="label label-success">&nbsp;&nbsp;1&nbsp;&nbsp;</span>

	                </div>

	                <div class="w3-cell w3-block w3-mobile">

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

	                        <label class="quline_text w3-mobile section_header" name="text1">

	                        [[text183:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="close_friend" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->close_friend == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text3">

	                            [[text184:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="colleague" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->colleague == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text5">

	                            [[text185:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="study_friend" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->study_friend == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text7">

	                            [[text186:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="sports_club_friend" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->sports_club_friend == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text9">

	                            [[text187:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="parents" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->parents == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text9">

	                            [[text187:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="another_parents" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->another_parents == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text9">

	                            [[text187:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="client_manger" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->client_manger == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text11">

	                            [[text188:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="knowledge" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->knowledge == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text13">

	                            [[text189:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="friend" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->friend == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text15">

	                            [[text190:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="family" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->family == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text17">

	                            [[text191:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_1" data-input_to_toggle='[name="another"]' <?php if (isset($data) && $data->another != ""): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text19">

	                            [[text192:text]]

	                            </label>

	                            </label>

	                            <br>

	                            <labelfor="another"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="another" value="<?= isset($data) ? $data->another : ''; ?>" readonly></labelfor>

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

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline2">

	                        <label class="quline_text w3-mobile section_header" name="text21">

	                        [[text193:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_2" data-checkbox_to_revers='#no_help_check' id="help_checkbox" data-input_to_toggle='[name="name_help_me_1"],[name="name_help_me_2"],[name="name_help_me_3"]' <?php if (isset($data) && ($data->name_help_me_1 != "" || $data->name_help_me_2 != "" || $data->name_help_me_3 != "" )): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text23">

	                            [[text194:text]]

	                            </label>

	                            </label>

	                            <div>

	                                <div>

	                                    <div class="col-sm-4">

	                                        <label class="quline_text w3-mobile" name="text25">

	                                        [[text195:text]]

	                                        </label>

	                                    </div>

	                                    <div class="col-sm-8">

	                                        <labelfor><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="name_help_me_1" maxlength="100" value="<?= isset($data) ? $data->name_help_me_1 : ''; ?>" readonly></labelfor>

	                                    </div>

	                                </div>

	                                <div>

	                                    <div class="col-sm-4">

	                                        <label class="quline_text w3-mobile" name="text27">

	                                        [[text196:text]]

	                                        </label>

	                                    </div>

	                                    <div class="col-sm-8">

	                                        <labelfor="name_help_me_2"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="name_help_me_2" maxlength="100" value="<?= isset($data) ? $data->name_help_me_2 : ''; ?>" readonly></labelfor>

	                                    </div>

	                                </div>

	                                <div>

	                                    <div class="col-sm-4">

	                                        <label class="quline_text w3-mobile" name="text29">

	                                        [[text197:text]]

	                                        </label>

	                                    </div>

	                                    <div class="col-sm-8">

	                                        <labelfor="name_help_me_3"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="name_help_me_3" maxlength="100" value="<?= isset($data) ? $data->name_help_me_3 : ''; ?>" readonly></labelfor>

	                                    </div>

	                                </div>

	                            </div>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_2" data-checkbox_to_revers='#help_checkbox' id="no_help_check" name="no_one_help_me" value="1" <?php if (isset($data) && $data->no_one_help_me == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text31">

	                            [[text198:text]]

	                            </label>

	                            </label>

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

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline3">

	                        <label class="quline_text w3-mobile section_header" name="text33">

	                        [[text199:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle;">

	                            <div class="col-sm-4">  

	                                <label>

	                                <label class="quline_text w3-mobile" name="text35">

	                                [[text200:text]]

	                                </label>

	                                </label>

	                            </div>

	                            <div class="col-sm-8">

	                                <labelfor="who_work"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="who_work" maxlength="100" value="<?= isset($data) ? $data->who_work : ''; ?>" required></labelfor>

	                            </div>

	                        </div>

	                        <div class=".divstyle;">

	                            <div class="col-sm-4">

	                                <label>

	                                <label class="quline_text w3-mobile" name="text37">

	                                [[text201:text]]

	                                </label>

	                                </label>

	                            </div>

	                            <div class="col-sm-8">

	                                <labelfor="when_work"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="when_work" maxlength="100" value="<?= isset($data) ? $data->when_work : ''; ?>" required></labelfor>

	                            </div>

	                        </div>

	                    </div>

	                </div>

	            </div>

	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile w3-center" id="footer">

	                <div class="w3-bar">
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

</body>

</html>