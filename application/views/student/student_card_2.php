<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">

<head>

	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>

	<title>Resultaatkaart 2</title>

</head>

<body>
	<div class="parallax w3-container w3-mobile" id="Content">
		<?php require(dirname(__FILE__) . '/student_card_header.inc.php') ?>
	    <div class="cnt_heads w3-mobile" id="cnt_head">

	        <h1 class="w3-xxlarge w3-text-red" id="title"><b>

	            Resultaatkaart2 -Realistisch beroepsbeeld

	            </b>

	        </h1>

	        <hr style="border:1px solid red" class="w3-round w3-hover-border-white">

	        <!-- <h3 class="w3-large w3-text-teal" id="sidetext"><b>

	            <span class="glyphicon glyphicon-info-sign"></span>

	            U Kunt hier de toelichting of de verklarende woordenlijst openen

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

		                    [[text21:text]]

		                    </label> 

		                </div>

		                <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

		                    <labelfor="tasks"><input type="text" class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea" name="tasks" required value="<?= isset($data) ? $data->tasks : ''; ?>"></labelfor>

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

		                    <label class="quline_text w3-mobile section_header" name="text3">

		                    [[text22:text]]

		                    </label>

		                </div>

		                <div class="w3-cell-row w3-block w3-mobile" id="ans2line">

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="work_with_team" data-checkbox_mandatory_group="section_2" value="1" <?php if (isset($data) && $data->work_with_team == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text5">

		                        [[text23:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="same_work_time" data-checkbox_mandatory_group="section_2" value="1" <?php if (isset($data) && $data->same_work_time == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text7">

		                        [[text24:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="alot_of_mony" data-checkbox_mandatory_group="section_2" value="1" <?php if (isset($data) && $data->alot_of_mony == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text9">

		                        [[text25:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="uniform" data-checkbox_mandatory_group="section_2" value="1" <?php if (isset($data) && $data->uniform == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text11">

		                        [[text26:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="travel_far" data-checkbox_mandatory_group="section_2" value="1" <?php if (isset($data) && $data->travel_far == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text13">

		                        [[text27:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="work_one_place" data-checkbox_mandatory_group="section_2" value="1" <?php if (isset($data) && $data->work_one_place == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text15">

		                        [[text28:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="with_materials" data-checkbox_mandatory_group="section_2" value="1" <?php if (isset($data) && $data->with_materials == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text17">

		                        [[text29:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="is_dangerous" data-checkbox_mandatory_group="section_2" value="1" <?php if (isset($data) && $data->is_dangerous == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text19">

		                        [[text30:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="physical_work" data-checkbox_mandatory_group="section_2" value="1" <?php if (isset($data) && $data->physical_work == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text21">

		                        [[text31:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="work_outside" data-checkbox_mandatory_group="section_2" value="1" <?php if (isset($data) && $data->work_outside == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text23">

		                        [[text32:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="work_at_night" data-checkbox_mandatory_group="section_2" value="1" <?php if (isset($data) && $data->work_at_night == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text25">

		                        [[text33:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="work_weekend" data-checkbox_mandatory_group="section_2" value="1" <?php if (isset($data) && $data->work_weekend == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text27">

		                        [[text34:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_2" data-input_to_toggle='[name="work_condetions"]' <?php if (isset($data) && $data->work_condetions != ""): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text29">

		                        [[text35:text]]

		                        </label>

		                        </label>

		                        <br>

		                        <labelfor="work_condetions"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="work_condetions" value="<?= isset($data) ? $data->work_condetions : ''; ?>" readonly></labelfor>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <div class="w3-container w3-card-4" id="good_with_me">

		                            <label class="quline_text w3-mobile" name="text31">

		                            [[text36:text]]

		                            </label>

		                            <p>

		                                <input class="w3-radio" type="radio" name="good_with_me" value="1" <?php if (isset($data) && $data->good_with_me == 1): ?>

		    								checked

		    							<?php endif ?>>

		                                <label class="quline_text w3-mobile" name="text33">[[text37:text]]</label>

		                            </p>

		                            <p>

		                                <input class="w3-radio" type="radio"  name="good_with_me" value="0" <?php if (isset($data) && $data->good_with_me == 0): ?>

		    								checked

		    							<?php endif ?>>

		                                <label class="quline_text w3-mobile" name="text34">[[text38:text]]</label>

		                            </p>

		                        </div>

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

		                    <label class="quline_text w3-mobile section_header" name="text35">

		                    [[text39:text]]

		                    </label>

                            <label class="quline_text w3-mobile" name="text35">

		                    [[text40:text]]

		                    </label>

		                </div>

		                <div class="w3-cell-row w3-block w3-mobile" id="ans3line">

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="driving_license" data-checkbox_mandatory_group="section_3" value="1" <?php if (isset($data) && $data->driving_license == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text37">

		                        [[text41:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="speake_another_lang" data-checkbox_mandatory_group="section_3" value="1" <?php if (isset($data) && $data->speake_another_lang == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text39">

		                        [[text42:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="sport" data-checkbox_mandatory_group="section_3" value="1" <?php if (isset($data) && $data->sport == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text41">

		                        [[text43:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="swimming_diploma" data-checkbox_mandatory_group="section_3" value="1" <?php if (isset($data) && $data->swimming_diploma == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text43">

		                        [[text44:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_3" data-input_to_toggle='[name="other_requirements"]' <?php if (isset($data) && $data->other_requirements != ""): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text45">

		                        [[text45:text]]

		                        </label>

		                        </label>

		                        <br>

		                        <labelfor="other_requirements"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="other_requirements" value="<?= isset($data) ? $data->other_requirements : ''; ?>" readonly></labelfor>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <div class="w3-container w3-card-4" id="good_requirement">

		                            <label class="quline_text w3-mobile" name="text47">

		                           [[text46:text]]

		                            </label>

		                            <p>

		                                <input class="w3-radio" type="radio" name="good_requirements" value="1" <?php if (isset($data) && $data->good_requirements == 1): ?>

		    								checked

		    							<?php endif ?>>

		                                <label class="quline_text w3-mobile" name="text49">[[text47:text]]</label>

		                            </p>

		                            <p>

		                                <input class="w3-radio" type="radio"  name="good_requirements" value="0" <?php if (isset($data) && $data->good_requirements == 0): ?>

		    								checked

		    							<?php endif ?>>

		                                <label class="quline_text w3-mobile" name="text50">[[text48:text]]</label>

		                            </p>

		                        </div>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" data-input_to_toggle='[name="another_special_requirements"]' <?php if (isset($data) && $data->another_special_requirements != ""): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text51">

		                        [[text49:text]]

		                        </label>

		                        </label>

		                        <br>

		                        <labelfor="another_special_requirements"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="another_special_requirements" value="<?= isset($data) ? $data->another_special_requirements : ''; ?>" readonly></labelfor>

		                    </div>

		                </div>

		            </div>

		        </div>

		        <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt4">

		            <div class="rightsign w3-container w3-cell w3-mobile">

		                <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
		                <span class="label label-success">&nbsp;&nbsp;4&nbsp;&nbsp;</span>

		            </div>

		            <div class="w3-cell w3-block w3-mobile">

		                <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline4">

		                    <label class="quline_text w3-mobile section_header" name="text53">

		                    [[text50:text]]

		                    </label>

		                </div>

		                <div class="w3-cell-row w3-block w3-mobile" id="ans4line">

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="in_my_home" data-checkbox_mandatory_group="section_4" value="1" <?php if (isset($data) && $data->in_my_home == 1): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text55">

		                        [[text51:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="in_my_health" data-checkbox_mandatory_group="section_4" value="1" <?php if (isset($data) && $data->in_my_health == 1): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text57">

		                        [[text52:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="in_my_age" data-checkbox_mandatory_group="section_4" value="1" <?php if (isset($data) && $data->in_my_age == 1): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text59">

		                        [[text53:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="in_my_motivation" data-checkbox_mandatory_group="section_4" value="1" <?php if (isset($data) && $data->in_my_motivation == 1): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text61">

		                        [[text54:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="in_my_address" data-checkbox_mandatory_group="section_4" value="1" <?php if (isset($data) && $data->in_my_address == 1): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text63">

		                        [[text55:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_4" data-input_to_toggle='[name="other_circumstance"]' <?php if (isset($data) && $data->other_circumstance != ""): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text65">

		                        [[text56:text]]

		                        </label>

		                        </label>

		                        <br>

		                        <labelfor="other_circumstance"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="other_circumstance" value="<?= isset($data) ? $data->other_circumstance : ''; ?>" readonly></labelfor>

		                        <label class="quline_text w3-mobile" name="text67">

		                        [[text57:text]]

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_4" id="yes_change_circumstance_check" data-checkbox_to_revers='#no_change_circumstance_check' data-input_to_toggle='[name="yes_change_circumstance"]' <?php if (isset($data) && $data->yes_change_circumstance != ""): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text69">

		                        [[text58:text]]

		                        </label>

		                        </label>

		                        <br>

		                        <labelfor="yes_change_circumstance"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="yes_change_circumstance" value="<?= isset($data) ? $data->yes_change_circumstance : ''; ?>" readonly></labelfor>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_4" id="no_change_circumstance_check" data-checkbox_to_revers='#yes_change_circumstance_check' data-input_to_toggle='[name="no_change_circumstance"]' <?php if (isset($data) && $data->no_change_circumstance != ""): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text71">

		                        [[text59:text]]

		                        </label>

		                        </label>

		                        <br>

		                        <labelfor="no_change_circumstance"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="no_change_circumstance" value="<?= isset($data) ? $data->no_change_circumstance : ''; ?>" readonly></labelfor>

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