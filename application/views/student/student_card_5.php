<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">

<head>

	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>

	<title>Resultaatkaart 5</title>

</head>

<body>
	<div class="parallax container-fluid">
        <?php require(dirname(__FILE__) . '/student_card_header.inc.php') ?>
    </div>
	<div class="parallax w3-container w3-mobile" id="Content">
        <div class="cnt_heads w3-mobile" id="cnt_head">

            <h1 class="w3-xxlarge w3-text-red" id="title"><b>

                Resultaatkaart5 -Beroepscompetenties

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

	                        [[text116:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="one_course" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->one_course == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text3">

	                            [[text117:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="one_complate_training" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->one_complate_training == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text5">

	                            [[text118:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="training_one_year" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->training_one_year == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text7">

	                            [[text119:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="training_multi_year" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->training_multi_year == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text9">

	                            [[text120:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="days_work" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->days_work == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text9">

	                            [[text120:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="days_school" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->days_school == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text9">

	                            [[text120:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="course_full_time" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->course_full_time == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text11">

	                            [[text121:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="course_part_time" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->course_part_time == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text13">

	                            [[text122:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="in_day" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->in_day == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text15">

	                            [[text123:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="at_night" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->at_night == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text17">

	                            [[text124:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="at_school" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->at_school == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text19">

	                            [[text125:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="at_home" data-checkbox_mandatory_group="section_1" value="1" <?php if (isset($data) && $data->at_home == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text21">

	                            [[text126:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-input_to_toggle='[name="another_course"]' data-checkbox_mandatory_group="section_1" <?php if (isset($data) && $data->another_course != ""): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text23">

	                            [[text127:text]]

	                            </label>

	                            </label>

	                            <br>

	                            <labelfor="another_course"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="another_course" value="<?= isset($data) ? $data->another_course : ''; ?>" readonly></labelfor>

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

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

	                        <label class="quline_text w3-mobile section_header" name="text25">

	                        [[text128:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle;">

	                            <div>

	                                <div class="col-sm-4">

	                                    <label class="quline_text w3-mobile" name="text27">

	                                    [[text129:text]]

	                                    </label>

	                                </div>

	                                <div class="col-sm-8">

	                                    <labelfor="course_name"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="course_name" maxlength="255" value="<?= isset($data) ? $data->course_name : ''; ?>" required></labelfor>

	                                </div>

	                            </div>

	                            <div>

	                                <div class="col-sm-4">

	                                    <label class="quline_text w3-mobile" name="text29">

	                                    [[text130:text]]

	                                    </label>

	                                </div>

	                                <div class="col-sm-8">

	                                    <labelfor="course_school"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="course_school" maxlength="255" value="<?= isset($data) ? $data->course_school : ''; ?>" required></labelfor>

	                                </div>

	                            </div>

	                            <div>

	                                <div class="col-sm-4">

	                                    <label class="quline_text w3-mobile" name="text31">

	                                    [[text131:text]]

	                                    </label>

	                                </div>

	                                <div class="col-sm-8">

	                                    <labelfor="course_period"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="course_period" maxlength="255" value="<?= isset($data) ? $data->course_period : ''; ?>" required></labelfor>

	                                </div>

	                            </div>

	                            <div>

	                                <div class="col-sm-4">

	                                    <label class="quline_text w3-mobile" name="text33">

	                                    [[text132:text]]

	                                    </label>

	                                </div>

	                                <div class="col-sm-8">

	                                    <labelfor="period_time"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="period_time" maxlength="255" value="<?= isset($data) ? $data->period_time : ''; ?>" required></labelfor>

	                                </div>

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

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

	                        <label class="quline_text w3-mobile section_header" name="text35">

	                        [[text133:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_3" name="no_diploma" value="1" <?php if (isset($data) && $data->no_diploma == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text37">

	                            [[text134:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_3" data-input_to_toggle='[name="get_diplomas"]' <?php if (isset($data) && $data->get_diplomas != ""): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text39">

	                            [[text135:text]]

	                            </label>

	                            </label>

	                            <br>

	                            <labelfor="get_diplomas"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="get_diplomas" value="<?= isset($data) ? $data->get_diplomas : ''; ?>" maxlength="255" readonly></labelfor>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <div class="w3-container w3-card-4">

	                                <label class="quline_text w3-mobile" name="text41">

	                                [[text136:text]]

	                                </label>

	                                <p>

	                                    <input class="w3-radio" type="radio" required name="have_diploma" value="1" <?php if (isset($data) && $data->have_diploma == 1): ?>

			                            	checked

			                            <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text43">[[text137:text]]</label>

	                                </p>

	                                <p>

	                                    <input class="w3-radio" type="radio" required  name="have_diploma" value="0" <?php if (isset($data) && $data->have_diploma == 0): ?>

			                            	checked

			                            <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text44">[[text138:text]]</label>

	                                </p>

	                            </div>

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

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

	                        <div class="col-sm-6">

	                            <label class="quline_text w3-mobile section_header" name="text45">

	                            [[text139:text]]

	                            </label>

	                        </div>

	                        <div class="col-sm-2">

	                            <label><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" maxlength="255" name="cost_diploma" value="<?= isset($data) ? $data->cost_diploma : ''; ?>"></label>

	                        </div>

	                        <div class="col-sm-4">

	                            <label class="quline_text w3-mobile" name="text47">

	                            euro per jaar

	                            </label>

	                        </div>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_4" data-input_to_toggle='[name="get_lend"]' <?php if (isset($data) && $data->get_lend != ""): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text49">

	                            [[text140:text]]

	                            </label>

	                            </label>

	                            <br>

	                            <labelfor="get_lend"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="get_lend" value="<?= isset($data) ? $data->get_lend : ''; ?>" readonly></labelfor>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_4" name="can_pay" value="1" <?php if (isset($data) && $data->can_pay == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text51">

	                            [[text141:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_4" name="owner_pay" value="1" <?php if (isset($data) && $data->owner_pay == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text53">

	                            [[text142:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_4" data-input_to_toggle='[name="another_pay"]' <?php if (isset($data) && $data->another_pay != ""): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text55">

	                            [[text143:text]]

	                            </label>

	                            </label>

	                            <br>

	                            <labelfor="another_pay"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="another_pay" maxlength="255" value="<?= isset($data) ? $data->another_pay : ''; ?>" readonly></labelfor>

	                        </div>

	                    </div>

	                </div>

	            </div>

	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt5">

	                <div class="rightsign w3-container w3-cell w3-mobile">

	                    <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
	                    <span class="label label-success">&nbsp;&nbsp;5&nbsp;&nbsp;</span>

	                </div>

	                <div class="w3-cell w3-block w3-mobile">

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

	                        <label class="quline_text w3-mobile section_header" name="text57">

	                        [[text144:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle;checkbox">

	                            

	                            <label class="quline_text w3-mobile" name="text59">

	                            [[text145:text]]

	                            </label>

	                            

	                            <br>

	                            <labelfor="Living_money"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="Living_money" value="<?= isset($data) ? $data->Living_money : ''; ?>" required></labelfor>

	                        </div>

	                    </div>

	                </div>

	            </div>

	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt6">

	                <div class="rightsign w3-container w3-cell w3-mobile">

	                    <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
	                    <span class="label label-success">&nbsp;&nbsp;6&nbsp;&nbsp;</span>

	                </div>

	                <div class="w3-cell w3-block w3-mobile">

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

	                        <label class="quline_text w3-mobile section_header" name="text61">

	                        [[text146:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle;checkbox">

	                            <div class="w3-container w3-card-4">

	                                <p>

	                                    <input class="w3-radio" type="radio" required name="dutch_level" value="taalniveay" <?php if (isset($data) && $data->dutch_level == "taalniveay"): ?>

			                            	checked

			                            <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text63">[[text147:text]]</label>

	                                </p>

	                                <p>

	                                    <input class="w3-radio" type="radio" required  name="dutch_level" value="onder 1f" <?php if (isset($data) && $data->dutch_level == "onder 1f"): ?>

			                            	checked

			                            <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text64">[[text148:text]]</label>

	                                </p>

	                                <p>

	                                    <input class="w3-radio" type="radio" required name="dutch_level" value="1f" <?php if (isset($data) && $data->dutch_level == "1f"): ?>

			                            	checked

			                            <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text65">[[text149:text]]</label>

	                                </p>

	                                <p>

	                                    <input class="w3-radio" type="radio" required  name="dutch_level" value="2f" <?php if (isset($data) && $data->dutch_level == "2f"): ?>

			                            	checked

			                            <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text66">[[text150:text]]</label>

	                                </p>

	                                <p>

	                                    <input class="w3-radio" type="radio" required name="dutch_level" value="3f" <?php if (isset($data) && $data->dutch_level == "3f"): ?>

			                            	checked

			                            <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text67">[[text151:text]]</label>

	                                </p>

	                                <p>

	                                    <input class="w3-radio" type="radio" required  name="dutch_level" value="4f" <?php if (isset($data) && $data->dutch_level == "4f"): ?>

			                            	checked

			                            <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text68">[[text152:text]]</label>

	                                </p>

	                            </div>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <div class="w3-container">

	                                <label class="quline_text w3-mobile" name="text69">

	                                [[text153:text]]

	                                </label>

	                                <p>

	                                    <input class="w3-radio" type="radio" required name="have_Level" value="1" <?php if (isset($data) && $data->have_Level == 1): ?>

			                            	checked

			                            <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text71">[[text154:text]]</label>

	                                    <input class="w3-radio" type="radio" required  name="have_Level" value="0" <?php if (isset($data) && $data->have_Level == 0): ?>

			                            	checked

			                            <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text72">[[text155:text]]</label>

	                                </p>

	                            </div>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <div class="w3-container">

	                                <label class="quline_text w3-mobile" name="text79">

	                                text79

	                                <small name="text80">[[text156:text]]</small>

	                                </label>

	                                <p>

	                                    <input class="w3-radio" type="radio" required name="have_diploma_Level" value="1" <?php if (isset($data) && $data->have_diploma_Level == 1): ?>

			                            	checked

			                            <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text81">[[text157:text]]</label>

	                                    <input class="w3-radio" type="radio" required  name="have_diploma_Level" value="0" <?php if (isset($data) && $data->have_diploma_Level == 0): ?>

			                            	checked

			                            <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text82">[[text158:text]]</label>

	                                </p>

	                            </div>

	                        </div>

	                    </div>

	                </div>

	            </div>

	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt7">

	                <div class="rightsign w3-container w3-cell w3-mobile">

	                    <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
	                    <span class="label label-success">&nbsp;&nbsp;7&nbsp;&nbsp;</span>

	                </div>

	                <div class="w3-cell w3-block w3-mobile">

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

	                        <label class="quline_text w3-mobile section_header" name="text73">

	                        [[text159:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_7" name="can_speak_with_people" value="1" <?php if (isset($data) && $data->can_speak_with_people == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text75">

	                            [[text160:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_7" name="instructions" value="1" <?php if (isset($data) && $data->instructions == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text77">

	                            [[text161:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_7" name="meet" value="1" <?php if (isset($data) && $data->meet == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text79">

	                            [[text162:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_7" name="email" value="1" <?php if (isset($data) && $data->email == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text81">

	                            [[text163:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_7" name="telephone" value="1" <?php if (isset($data) && $data->telephone == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text83">

	                            [[text164:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_7" name="report" value="1" <?php if (isset($data) && $data->report == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text85">

	                            [[text165:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_7" name="speak_client" value="1" <?php if (isset($data) && $data->speak_client == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text87">

	                            [[text166:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_7" name="contact_colleague" value="1" <?php if (isset($data) && $data->contact_colleague == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text89">

	                            [[text167:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_7" name="work_paper" value="1" <?php if (isset($data) && $data->work_paper == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text91">

	                            [[text168:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_7" name="short_report" value="1" <?php if (isset($data) && $data->short_report == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text93">

	                            [[text169:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_7" data-input_to_toggle='[name="another_report"]' <?php if (isset($data) && $data->another_report != ""): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text95">

	                            [[text170:text]]

	                            </label>

	                            </label>

	                            <br>

	                            <labelfor="another_report"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="another_report" value="<?= isset($data) ? $data->another_report : ''; ?>" readonly></labelfor>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <div class="w3-container w3-card-4">

	                                <label class="quline_text w3-mobile" name="text97">

	                                [[text171:text]]

	                                </label>

	                                <p>

	                                    <input class="w3-radio" type="radio" required name="can_good" value="1" <?php if (isset($data) && $data->can_good == 1): ?>

	                                    	checked

	                                    <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text99">[[text172:text]]</label>

	                                </p>

	                                <p>

	                                    <input class="w3-radio" type="radio" required  name="can_good" value="0" <?php if (isset($data) && $data->can_good == 0): ?>

	                                    	checked

	                                    <?php endif ?>>

	                                    <label class="quline_text w3-mobile" name="text100">[[text173:text]]</label>

	                                </p>

	                            </div>

	                        </div>

	                    </div>

	                </div>

	            </div>

	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt8">

	                <div class="rightsign w3-container w3-cell w3-mobile">

	                    <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
	                    <span class="label label-success">&nbsp;&nbsp;8&nbsp;&nbsp;</span>

	                </div>

	                <div class="w3-cell w3-block w3-mobile">

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

	                        <label class="quline_text w3-mobile section_header" name="text101">

	                        [[text174:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_8" data-input_to_toggle='[name="language_trajectory"]' <?php if (isset($data) && $data->language_trajectory != ""): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text103">

	                            [[text175:text]]

	                            </label>

	                            </label>

	                            <br>

	                            <labelfor="language_trajectory"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="language_trajectory" value="<?= isset($data) ? $data->language_trajectory : ''; ?>" readonly></labelfor>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_8" data-input_to_toggle='[name="work_language_trajectory"]' <?php if (isset($data) && $data->work_language_trajectory != ""): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text105">

	                            [[text176:text]]

	                            </label>

	                            <br>

	                            <label class="quline_text w3-mobile" name="text107">

	                            [[text177:text]]

	                            </label>

	                            </label>

	                            <br>

	                            <labelfor="work_language_trajectory"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="work_language_trajectory" value="<?= isset($data) ? $data->work_language_trajectory : ''; ?>" readonly></labelfor>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_8" data-input_to_toggle='[name="study_lang_type"],[name="study_lang_where"],[name="study_lang_when"]' name="study_lang" value="1" <?php if (isset($data) && $data->study_lang == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text109">

	                            [[text178:text]]

	                            </label>

	                            </label>

	                            <div>

	                                <div class="col-sm-4">

	                                    <label class="quline_text w3-mobile" name="text111">

	                                    [[text179:text]]

	                                    </label>

	                                </div>

	                                <div class="col-sm-8">

	                                    <labelfor="study_lang_type"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="study_lang_type" maxlength="100" value="<?= isset($data) ? $data->study_lang_type : ''; ?>" readonly></labelfor>

	                                </div>

	                            </div>

	                            <div>

	                                <div class="col-sm-4">

	                                    <label class="quline_text w3-mobile" name="text113">

	                                    [[text180:text]]

	                                    </label>

	                                </div>

	                                <div class="col-sm-8">

	                                    <labelfor="study_lang_where"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="study_lang_where" maxlength="100" value="<?= isset($data) ? $data->study_lang_where : ''; ?>" readonly></labelfor>

	                                </div>

	                            </div>

	                            <div>

	                                <div class="col-sm-4">

	                                    <label class="quline_text w3-mobile" name="text115">

	                                    [[text181:text]]

	                                    </label>

	                                </div>

	                                <div class="col-sm-8">

	                                    <labelfor="study_lang_when"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="study_lang_when" maxlength="100" value="<?= isset($data) ? $data->study_lang_when : ''; ?>" readonly></labelfor>

	                                </div>

	                            </div>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_8" name="study_lang_no" value="1" <?php if (isset($data) && $data->study_lang_no == 1): ?>

	                            	checked

	                            <?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text117">

	                            [[text182:text]]

	                            </label>

	                            </label>

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