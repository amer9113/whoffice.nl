<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">

<head>

	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>

	<title>Resultaatkaart 4</title>

</head>

<body>
	<div class="parallax w3-container w3-mobile" id="Content">
		<?php require(dirname(__FILE__) . '/student_card_header.inc.php') ?>
        <div class="cnt_heads w3-mobile" id="cnt_head">

            <h1 class="w3-xxlarge w3-text-red" id="title"><b>

                Resultaatkaart4 -Beroepskansen

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

	    <form method="POST" enctype="multipart/form-data" class="manual_validation">

	    	<div class="w3-container w3-block w3-mobile" id="cnt_form">

	    		<div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt0">

		            <div class="rightsign w3-container w3-cell w3-mobile">

		                <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
		                <span class="label label-success">&nbsp;&nbsp;1&nbsp;&nbsp;</span>

		            </div>

		            <div class="w3-cell w3-block w3-mobile">

		                <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

		                    <label class="quline_text w3-mobile section_header" name="text1">

		                    jouw gewenste beroep is :

		                    </label> 

		                </div>

		                <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
		                    <labelfor="tasks"><input type="text" maxlength="500" class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea" name="desired_profession" value="<?= isset($data) ? $data->desired_profession : ''; ?>" required></labelfor>
		                </div>

		            </div>

		        </div>

	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt1">

	                <div class="rightsign w3-container w3-cell w3-mobile">

	                    <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
	                    <span class="label label-success">&nbsp;&nbsp;2&nbsp;&nbsp;</span>

	                </div>

	                <div class="w3-cell w3-block w3-mobile">

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

	                        <label class="quline_text w3-mobile section_header" name="text1">

	                        [[text81:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class="w3-cell-row w3-block w3-mobile" id="ans1line1">

	                            <div class="signsize w3-cell w3-mobile">

	                                <div class="w3-container w3-cell w3-mobile">1</div>

	                            </div>

	                            <div class="w3-cell w3-mobile">

	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="place_vacancies_find_1" maxlength="255" value="<?= isset($data) ? $data->place_vacancies_find_1 : ''; ?>" required>

	                            </div>

	                        </div>

	                        <div class="w3-cell-row w3-block w3-mobile" id="ans1line2">

	                            <div class="signsize w3-cell w3-mobile">

	                                <div class="w3-container w3-cell w3-mobile">2</div>

	                            </div>

	                            <div class="w3-cell w3-mobile">

	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="place_vacancies_find_2" maxlength="255" value="<?= isset($data) ? $data->place_vacancies_find_2 : ''; ?>" required>

	                            </div>

	                        </div>

	                        <div class="w3-cell-row w3-block w3-mobile" id="ans1line3">

	                            <div class="signsize w3-cell w3-mobile">

	                                <div class="w3-container w3-cell w3-mobile">3</div>

	                            </div>

	                            <div class="w3-cell w3-mobile">

	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="place_vacancies_find_3" maxlength="255" value="<?= isset($data) ? $data->place_vacancies_find_3 : ''; ?>" required>

	                            </div>

	                        </div>

	                    </div>

	                </div>

	            </div>

	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt2">

	                <div class="rightsign w3-container w3-cell w3-mobile">

	                    <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
	                    <span class="label label-success">&nbsp;&nbsp;3&nbsp;&nbsp;</span>

	                </div>

	                <div class="w3-cell w3-block w3-mobile">

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

	                        <label class="quline_text w3-mobile section_header" name="text1">

	                        [[text82:text]]&nbsp;&nbsp;&nbsp;&nbsp;[[text83:text]]
	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class="w3-cell-row w3-block w3-mobile" id="ans1line1">
	                            <div class="w3-cell w3-mobile">
	                                <labelfor="num_vacancies_find"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="number" name="num_vacancies_find" value="<?= isset($data) ? $data->num_vacancies_find : ''; ?>" required></labelfor>
	                            </div>
	                        </div>
	                    </div>

	                </div>

	            </div>

	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt3">

	                <div class="rightsign w3-container w3-cell w3-mobile">

	                    <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
	                    <span class="label label-success">&nbsp;&nbsp;4&nbsp;&nbsp;</span>

	                </div>

	                <div class="w3-cell w3-block w3-mobile">

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

	                        <label class="quline_text w3-mobile section_header" name="text7">

	                        [[text84:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle w3-container w3-card-4">

	                            <p>

	                                <input class="w3-radio" type="radio" name="chance_work" required value="0" <?php if (isset($data) && $data->chance_work == 0): ?>

										checked

									<?php endif ?>>

	                                <label class="quline_text w3-mobile" name="text9">[[text85:text]]</label>

	                            </p>

	                            <p>

	                                <input class="w3-radio" type="radio"  name="chance_work" required value="1" <?php if (isset($data) && $data->chance_work == 1): ?>

										checked

									<?php endif ?>>

	                                <label class="quline_text w3-mobile" name="text10">[[text86:text]]</label>

	                            </p>

	                            <p>

	                                <input class="w3-radio" type="radio" name="chance_work" required value="2" <?php if (isset($data) && $data->chance_work == 2): ?>

										checked

									<?php endif ?>>

	                                <label class="quline_text w3-mobile" name="text11">[[text87:text]]</label>

	                            </p>

	                        </div>

	                    </div>

	                </div>

	            </div>

	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt4">

	                <div class="rightsign w3-container w3-cell w3-mobile">

	                    <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
	                    <span class="label label-success">&nbsp;&nbsp;5&nbsp;&nbsp;</span>

	                </div>

	                <div class="w3-cell w3-block w3-mobile">

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

	                        <label class="quline_text w3-mobile section_header" name="text13">

	                        [[text88:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle;checkbox">

	                       

	                            <label class="quline_text w3-mobile" name="text15">

	                            [[text89:text]]

	                            </label>

	                            <div>

	                                <div>

	                                    <div class="col-sm-4">

	                                        <label class="quline_text w3-mobile" name="text17">

	                                        [[text90:text]]

	                                        </label>

	                                    </div>

	                                    <div class="col-sm-8">

	                                        <labelfor="job_offer_1_date"><input class="date w3-input w3-animate-input w3-border w3-hover-border-red" placeholder="dd-mm-yyyy" name="job_offer_1_date" value="<?= isset($data) ? $data->job_offer_1_date : ''; ?>" required></labelfor>

	                                    </div>

	                                </div>

	                                <div>

	                                    <div class="col-sm-4">

	                                        <label class="quline_text w3-mobile" name="text19">

	                                        [[text91:text]]

	                                        </label>

	                                    </div>

	                                    <div class="col-sm-8">

	                                        <labelfor="job_offer_1_profession"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_1_profession" value="<?= isset($data) ? $data->job_offer_1_profession : ''; ?>" required></labelfor>

	                                    </div>

	                                </div>

	                                <div>

	                                    <div class="col-sm-4">

	                                        <label class="quline_text w3-mobile" name="text21">

	                                        [[text92:text]]

	                                        </label>

	                                    </div>

	                                    <div class="col-sm-8">

	                                        <labelfor="job_offer_1_company"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_1_company" value="<?= isset($data) ? $data->job_offer_1_company : ''; ?>" required></labelfor>

	                                    </div>

	                                </div>

	                                <div>

	                                    <div class="col-sm-4">

	                                        <label class="quline_text w3-mobile" name="text23">

	                                        [[text93:text]]

	                                        </label>

	                                    </div>

	                                    <div class="col-sm-8">

	                                        <labelfor="job_offer_1_place"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="job_offer_1_place" value="<?= isset($data) ? $data->job_offer_1_place : ''; ?>" required></labelfor>

	                                    </div>

	                                </div>

	                            </div>

	                            <!--                 //button -->

	                            <div class="w3-container w3-block w3-mobile">

	                                <div class="col-sm-3 w3-block w3-mobile">

	                                    <label class="btn btn-default btn-file w3-teal w3-text-white">

	                                    Kies document <input name="job_offer_1_file" type="file" style="display: none;" <?php if (!(isset($data) && $data->job_offer_1_file != "")): ?>
	                                    	required
	                                    <?php endif ?>>

	                                    </label>
	                                    <br>
	                                    <?php if (isset($data) && $data->job_offer_1_file != ""): ?>
	                                    	<div class="parent_box">
	    										<label class="choosen_file_label"><a href="<?= base_url().'ext/student_documents/'.$data->job_offer_1_file; ?>" target="_blank"><?= $data->job_offer_1_file_caption; ?></a></label>
	    										<br>
	    										<?php if (isset($opened_for_teacher_checking) && $data->job_offer_1_file != ""): ?>
	                                                <label><a class="remove_file_link" href="<?= base_url().'admin/remove_file/4/'.$data->user_id.'/job_offer_1_file'; ?>">Remove this file</a></label>
	                                            <?php endif ?>
	                                    	</div>
    									<?php endif ?>

	                                </div>

	                                <div class="col-sm-9 w3-block w3-mobile">

	                                    <label class="quline_text w3-mobile" name="text25">

	                                   [[text94:text]]

	                                    </label>

	                                </div>

	                            </div>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label class="quline_text w3-mobile" name="text27">

	                            [[text96:text]]

	                            </label>

	                            <div class=".divstyle;checkbox">

	                                <label> 

	                                <input class="w3-radio" type="radio" required id="job_offer_1_yes_check" data-checkbox_to_revers='#job_offer_1_no_check' data-input_to_toggle='[name="job_offer_1_reason_yes"]' name="job_offer_1_yes_no" value="1" <?php if (isset($data) && $data->job_offer_1_yes_no == 1): ?>

										checked

									<?php endif ?>>

	                                <label class="quline_text w3-mobile" name="text29">

	                                [[text97:text]]

	                                </label>

	                                </label>

	                                <br>

	                                <labelfor="job_offer_1_reason_yes"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_1_reason_yes" value="<?= (isset($data) && $data->job_offer_1_yes_no == 1 ) ? $data->job_offer_1_reason : ''; ?>" readonly></labelfor>

	                            </div>

	                            <div class=".divstyle;checkbox">

	                                <label>

	                                <input class="w3-radio" type="radio" required id="job_offer_1_no_check" data-checkbox_to_revers='#job_offer_1_yes_check' data-input_to_toggle='[name="job_offer_1_reason_no"]' name="job_offer_1_yes_no" value="0" <?php if (isset($data) && $data->job_offer_1_yes_no == 0): ?>

										checked

									<?php endif ?>>

	                                <label class="quline_text w3-mobile" name="text31">

	                                [[text98:text]]

	                                </label>

	                                </label>

	                                <br>

	                                <labelfor="job_offer_1_reason_no"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_1_reason_no" value="<?= (isset($data) && $data->job_offer_1_yes_no == 0) ? $data->job_offer_1_reason : ''; ?>" readonly></labelfor>

	                            </div>

	                            <div class=".divstyle;checkbox">

	                                

	                                <label class="quline_text w3-mobile" name="text33">

	                                [[text99:text]]

	                                </label>

	                                

	                                <div>

	                                    <div>

	                                        <div class="col-sm-4">

	                                            <label class="quline_text w3-mobile" name="text35">

	                                            [[text100:text]]

	                                            </label>

	                                        </div>

	                                        <div class="col-sm-8">

	                                            <labelfor="job_offer_2_date"><input class="date w3-input w3-animate-input w3-border w3-hover-border-red" placeholder="dd-mm-yyyy" name="job_offer_2_date" value="<?= isset($data) ? $data->job_offer_2_date : ''; ?>" required></labelfor>

	                                        </div>

	                                    </div>

	                                    <div>

	                                        <div class="col-sm-4">

	                                            <label class="quline_text w3-mobile" name="text37">

	                                            [[text101:text]]

	                                            </label>

	                                        </div>

	                                        <div class="col-sm-8">

	                                            <labelfor="job_offer_2_profession"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_2_profession" value="<?= isset($data) ? $data->job_offer_2_profession : ''; ?>" required></labelfor>

	                                        </div>

	                                    </div>

	                                    <div>

	                                        <div class="col-sm-4">

	                                            <label class="quline_text w3-mobile" name="text39">

	                                            [[text102:text]]

	                                            </label>

	                                        </div>

	                                        <div class="col-sm-8">

	                                            <labelfor="job_offer_2_company"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_2_company" value="<?= isset($data) ? $data->job_offer_2_company : ''; ?>" required></labelfor>

	                                        </div>

	                                    </div>

	                                    <div>

	                                        <div class="col-sm-4">

	                                            <label class="quline_text w3-mobile" name="text41">

	                                            [[text103:text]]

	                                            </label>

	                                        </div>

	                                        <div class="col-sm-8">

	                                            <labelfor="job_offer_2_place"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_2_place" value="<?= isset($data) ? $data->job_offer_2_place : ''; ?>" required></labelfor>

	                                        </div>

	                                    </div>

	                                </div>

	                                <!--                 //button -->

	                                <div class="w3-container w3-block w3-mobile">

	                                    <div class="col-sm-3 w3-block w3-mobile">

	                                        <label class="btn btn-default btn-file w3-teal w3-text-white">

	                                        Kies document <input name="job_offer_2_file" type="file" style="display: none;" <?php if (!(isset($data) && $data->job_offer_2_file != "")): ?>
			                                    	required
			                                    <?php endif ?>>

	                                        </label>
	                                        <br>
	                                        <?php if (isset($data) && $data->job_offer_2_file != ""): ?>
	                                        	<div class="parent_box">
		    										<label class="choosen_file_label"><a href="<?= base_url().'ext/student_documents/'.$data->job_offer_2_file; ?>" target="_blank"><?= $data->job_offer_2_file_caption; ?></a></label>
		    										<br>
		    										<?php if (isset($opened_for_teacher_checking) && $data->job_offer_2_file != ""): ?>
		                                            <label><a class="remove_file_link" href="<?= base_url().'admin/remove_file/4/'.$data->user_id.'/job_offer_2_file'; ?>">Remove this file</a></label>
		                                            <?php endif ?>
		                                    	</div>
    										<?php endif ?>

	                                    </div>

	                                    <div class="col-sm-9 w3-block w3-mobile">

	                                        <label class="quline_text w3-mobile" name="text43">

	                                        [[text104:text]]

	                                        </label>

	                                    </div>

	                                </div>

	                            </div>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label class="quline_text w3-mobile" name="text45">

	                            [[text106:text]]

	                            </label>

	                            <div class=".divstyle;checkbox">

	                                <label>

	                                <input class="w3-radio" type="radio" id="job_offer_2_yes_check" data-checkbox_to_revers='#job_offer_2_no_check' name="job_offer_2_yes_no" data-input_to_toggle='[name="job_offer_2_reason_yes"]' required value="1" <?php if (isset($data) && $data->job_offer_2_yes_no == 1): ?>

										checked

									<?php endif ?>>

	                                <label class="quline_text w3-mobile" name="text47">

	                                [[text107:text]]

	                                </label>

	                                </label>

	                                <br>

	                                <labelfor="job_offer_2_reason_yes"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_2_reason_yes" value="<?= (isset($data) && $data->job_offer_2_yes_no == 1 ) ? $data->job_offer_2_reason : ''; ?>" readonly></labelfor>

	                            </div>

	                            <div class=".divstyle;checkbox">

	                                <label>

	                                <input class="w3-radio" type="radio" id="job_offer_2_no_check" data-checkbox_to_revers='#job_offer_2_yes_check' name="job_offer_2_yes_no" data-input_to_toggle='[name="job_offer_2_reason_no"]' required value="0" <?php if (isset($data) && $data->job_offer_2_yes_no == 0): ?>

										checked

									<?php endif ?>>

	                                <label class="quline_text w3-mobile" name="text49">

	                                [[text108:text]]

	                                </label>

	                                </label>

	                                <br>

	                                <labelfor="job_offer_2_reason_no"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_2_reason_no" value="<?= (isset($data) && $data->job_offer_2_yes_no == 0 ) ? $data->job_offer_2_reason : ''; ?>" readonly></labelfor>

	                            </div>

	                        </div>

	                    </div>

	                </div>

	            </div>

	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile section_container" id="cnt5">

	                <div class="rightsign w3-container w3-cell w3-mobile">

	                    <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
	                    <span class="label label-success">&nbsp;&nbsp;6&nbsp;&nbsp;</span>

	                </div>

	                <div class="w3-cell w3-block w3-mobile">

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

	                        <label class="quline_text w3-mobile section_header" name="text52">

	                        [[text109:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <label class="quline_text w3-mobile" name="text54">

	                        [[text110:text]]

	                        </label>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" name="is_enough_work" data-checkbox_mandatory_group="section_5" value="1" <?php if (isset($data) && $data->is_enough_work == 1): ?>

										checked

									<?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text56">

	                            [[text111:text]]

	                            </label>

	                            </label>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_5" data-input_to_toggle='[name="is_little_work"]' <?php if (isset($data) && $data->is_little_work != ""): ?>

									checked

								<?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text58">

	                            [[text112:text]]

	                            </label>

	                            </label>

	                            <br>

	                            <labelfor="is_little_work"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="is_little_work" maxlength="255" value="<?= isset($data) ? $data->is_little_work : ''; ?>" readonly></labelfor>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_5" data-input_to_toggle='[name="another_work"]' <?php if (isset($data) && $data->another_work != ""): ?>

									checked

								<?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text60">

	                            [[text113:text]]

	                            </label>

	                            </label>

	                            <br>

	                            <labelfor="another_work"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="another_work" maxlength="255" value="<?= isset($data) ? $data->another_work : ''; ?>" readonly></labelfor>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label>

	                            <input class="w3-check" type="checkbox" data-checkbox_mandatory_group="section_5" data-input_to_toggle='[name="go_first"],[name="go_first_reason"]' <?php if (isset($data) && $data->go_first != ""): ?>

									checked

								<?php endif ?>> 

	                            <label class="quline_text w3-mobile" name="text62">

	                            [[text114:text]]

	                            </label>

	                            </label>

	                            <br>

	                            <labelfor="go_first"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="go_first" maxlength="255" value="<?= isset($data) ? $data->go_first : ''; ?>" readonly></labelfor>

	                        </div>

	                        <div class=".divstyle;checkbox">

	                            <label class="quline_text w3-mobile" name="text64">

	                            [[text115:text]]

	                            </label>

	                            <br>

	                            <labelfor="go_first_reason"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="go_first_reason" maxlength="255" value="<?= isset($data) ? $data->go_first_reason : ''; ?>" readonly></labelfor>

	                        </div>

	                    </div>

	                </div>

	            </div>

	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile w3-center" id="footer">

	                <div class="">
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

        $('.alter_answers').click(function(){
            $('[name="alter_answers"]').val("yes");
            $('form').submit();
        });
    });
</script>
<?php endif ?>

</body>

</html>