<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>Resultaatkaart 7</title>
</head>
<body>
	<div class="parallax w3-container w3-mobile" id="Content">
		<?php require(dirname(__FILE__) . '/student_card_header.inc.php') ?>
        <div class="cnt_heads w3-mobile" id="cnt_head">
            <h1 class="w3-xxlarge w3-text-red" id="title"><b>
                Resultaatkaart7 -Werk vinden
                <small>arabic</small></b>
            </h1>
            <hr style="border:1px solid red" class="w3-round w3-hover-border-white">
            <h3 class="w3-large w3-text-teal" id="sidetext"><b>
                <span class="glyphicon glyphicon-info-sign"></span>
                U Kunt hier de toelichting of de verklarende woordenlijst openen.
                <small>arabic</small></b>
            </h3>
        </div>
        <?php require(dirname(__FILE__) . '/student_card_response_messages.inc.php') ?>
	    <form method="POST" enctype="multipart/form-data">
	    	<div class="w3-container w3-block w3-mobile" id="cnt_form">
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt1">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">
	                        <label class="t8 quline_text w3-mobile" name="text1">
	                        [[text202:text]]
	                        </label> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="vacancies" value="1" <?php if (isset($data) && $data->vacancies == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text3">
	                            [[text203:text]]
	                            </label>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="open_application" value="1" <?php if (isset($data) && $data->open_application == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text5">
	                            [[text204:text]]
	                            </label>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->other_way != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text7">
	                            [[text205:text]]
	                            </label>
	                            </label>
	                            <br>
	                            <labelfor="other_way"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="other_way" maxlength="255" value="<?= isset($data) ? $data->other_way : ''; ?>"></labelfor>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt2">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline2">
	                        <label class="t8 quline_text w3-mobile" name="text9">
	                        [[text206:text]]
	                        </label>
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->volunteering != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text11">
	                            [[text207:text]]
	                            </label>
	                            </label>
	                            <br>
	                            <labelfor="volunteering"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="volunteering" maxlength="255" value="<?= isset($data) ? $data->volunteering : ''; ?>"></labelfor>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->no_volunteering != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text13">
	                            [[text208:text]]
	                            </label>
	                            </label>
	                            <br>
	                            <labelfor="no_volunteering"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="no_volunteering" maxlength="255" value="<?= isset($data) ? $data->no_volunteering : ''; ?>"></labelfor>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt3">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline3">
	                        <label class="t8 quline_text w3-mobile" name="text15">
	                        [[text209:text]]
	                        </label>
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->have_job != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text17">
	                            [[text210:text]]
	                            </label>
	                            </label>
	                            <br>
	                            <labelfor="have_job"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea"  name="have_job" value="<?= isset($data) ? $data->have_job : ''; ?>"></labelfor>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->no_job != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text19">
	                            [[text211:text]]
	                            </label>
	                            </label>
	                            <br>
	                            <labelfor="no_job"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea"  name="no_job" value="<?= isset($data) ? $data->no_job : ''; ?>"></labelfor>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->search_job != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text21">
	                            [[text212:text]]
	                            </label>
	                            </label>
	                            <br>
	                            <labelfor="search_job"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea"  name="search_job" value="<?= isset($data) ? $data->search_job : ''; ?>"></labelfor>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt4">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline4">
	                        <label class="t8 quline_text w3-mobile" name="text23">
	                        [[text213:text]]
	                        </label>
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class="w3-cell-row w3-block w3-mobile" id="ans1line1">
	                            <div class="signsize w3-cell w3-mobile">
	                                <div class="w3-container w3-cell w3-mobile">1</div>
	                            </div>
	                            <div class="w3-cell w3-mobile">
	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="way_application_form_1" required maxlength="255" value="<?= isset($data) ? $data->way_application_form_1 : ''; ?>">
	                            </div>
	                        </div>
	                        <div class="w3-cell-row w3-block w3-mobile" id="ans1line2">
	                            <div class="signsize w3-cell w3-mobile">
	                                <div class="w3-container w3-cell w3-mobile">2</div>
	                            </div>
	                            <div class="w3-cell w3-mobile">
	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="way_application_form_2" required maxlength="255" value="<?= isset($data) ? $data->way_application_form_2 : ''; ?>">
	                            </div>
	                        </div>
	                        <div class="w3-cell-row w3-block w3-mobile" id="ans1line3">
	                            <div class="signsize w3-cell w3-mobile">
	                                <div class="w3-container w3-cell w3-mobile">3</div>
	                            </div>
	                            <div class="w3-cell w3-mobile">
	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="way_application_form_3" required maxlength="255" value="<?= isset($data) ? $data->way_application_form_3 : ''; ?>">
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt5">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline5">
	                        <label class="t8 quline_text w3-mobile" name="text25">
	                        [[text214:text]]
	                        </label>
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="app_form_work" value="1" <?php if (isset($data) && $data->app_form_work == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text27">
	                            [[text215:text]]
	                            </label>
                                 <label class="quline_text w3-mobile" name="text27">
	                            [[text216:text]]
	                            </label>
	                            </label>
	                            <!--                 //button -->
	                            <div class="w3-container w3-block w3-mobile">
	                                <div class="col-sm-3 w3-block w3-mobile">
	                                    <label class="btn btn-default btn-file w3-teal w3-text-white">
	                                    Kies document <input name="app_form_work_file"type="file" style="display: none;">
	                                    </label>
	                                    <?php if (isset($data) && $data->app_form_work_file != ""): ?>
    										<a href="<?= base_url().'ext/student_documents/'.$data->app_form_work_file; ?>" target="_blank">View uploaded file</a>
    									<?php endif ?>
	                                </div>
	                                <div class="col-sm-9 w3-block w3-mobile">
	                                    <label class="quline_text w3-mobile" name="text29">
	                                    [[text217:text]]
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="app_form_another_work" value="1" <?php if (isset($data) && $data->app_form_another_work == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text31">
	                            [[text218:text]]
	                            </label>
	                            </label>
	                            <!--                 //button -->
	                            <div class="w3-container w3-block w3-mobile">
	                                <div class="col-sm-6 w3-block w3-mobile">
	                                    <label class="btn btn-default btn-file w3-teal w3-text-white">
	                                    Kies document <input name="app_form_another_work_file_1"type="file" style="display: none;">
	                                    </label>

	                                    <?php if (isset($data) && $data->app_form_another_work_file_1 != ""): ?>
    										<a href="<?= base_url().'ext/student_documents/'.$data->app_form_another_work_file_1; ?>" target="_blank">View uploaded file</a>
    									<?php endif ?>

	                                    <label class="btn btn-default btn-file w3-teal w3-text-white">
	                                    Kies document <input name="app_form_another_work_file_2"type="file" style="display: none;">
	                                    </label>

	                                    <?php if (isset($data) && $data->app_form_another_work_file_2 != ""): ?>
    										<a href="<?= base_url().'ext/student_documents/'.$data->app_form_another_work_file_2; ?>" target="_blank">View uploaded file</a>
    									<?php endif ?>

	                                </div>
	                                <div class="col-sm-6 w3-block w3-mobile">
	                                    <label class="quline_text w3-mobile" name="text33">
	                                    [[text219:text]]
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="motivation" value="1" <?php if (isset($data) && $data->motivation == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text35">
	                            [[text221:text]]
	                            </label>
                                <label class="quline_text w3-mobile" name="text35">
	                            [[text222:text]]
	                            </label>    
	                            </label>
	                            <!--                 //button -->
	                            <div class="w3-container w3-block w3-mobile">
	                                <div class="col-sm-3 w3-block w3-mobile">
	                                    <label class="btn btn-default btn-file w3-teal w3-text-white">
	                                    Kies document <input name="motivation_file"type="file" style="display: none;">
	                                    </label>
	                                    <?php if (isset($data) && $data->motivation_file != ""): ?>
    										<a href="<?= base_url().'ext/student_documents/'.$data->motivation_file; ?>" target="_blank">View uploaded file</a>
    									<?php endif ?>
	                                </div>
	                                <div class="col-sm-10 w3-block w3-mobile">
	                                    <label class="quline_text w3-mobile" name="text37">
	                                    [[text223:text]]
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="have_cv" value="1" <?php if (isset($data) && $data->have_cv == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text39">
	                            [[text225:text]]
	                            </label>
                                <label class="quline_text w3-mobile" name="text39">
	                            [[text226:text]]
	                            </label>
	                            </label>
	                            <!--                 //button -->
	                            <div class="w3-container w3-block w3-mobile">
	                                <div class="col-sm-3 w3-block w3-mobile">
	                                    <label class="btn btn-default btn-file w3-teal w3-text-white">
	                                    Kies document <input name="cv"type="file" style="display: none;">
	                                    </label>
	                                    <?php if (isset($data) && $data->cv != ""): ?>
    										<a href="<?= base_url().'ext/student_documents/'.$data->cv; ?>" target="_blank">View uploaded file</a>
    									<?php endif ?>
	                                </div>
	                                <div class="col-sm-10 w3-block w3-mobile">
	                                    <label class="quline_text w3-mobile" name="text41">
	                                    [[text227:text]]
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt6">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline6">
	                        <label class="t8 quline_text w3-mobile" name="text43">
	                        [[text229:text]]
	                        </label> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <labelfor="help_letter"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea"  name="help_letter" value="<?= isset($data) ? $data->help_letter : ''; ?>"></labelfor>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt7">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline7">
	                        <label class="t8 quline_text w3-mobile" name="text45">
	                        [[text230:text]]
	                        </label>
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <labelfor="good_points"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea"  name="good_points" value="<?= isset($data) ? $data->good_points : ''; ?>"></labelfor>   
	                        <div>
	                            <label class="t8 quline_text w3-mobile" name="text47">
	                            [[text231:text]]
	                            </label>
	                            <div>
	                                <div class=".divstyle;checkbox">
	                                    <div class="col-sm-4">
	                                        <label class="quline_text w3-mobile" name="text49">
	                                        [[text232:text]]
	                                        </label>
	                                        <br>
	                                    </div>
	                                    <div class="col-sm-8">
	                                        <labelfor="need_to_be_good_1"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="need_to_be_good_1" maxlength="255" value="<?= isset($data) ? $data->need_to_be_good_1 : ''; ?>"></labelfor>
	                                    </div>
	                                </div>
	                                <div class=".divstyle;checkbox">
	                                    <label>
	                                    <label class="quline_text w3-mobile" name="text51">
	                                    [[text233:text]]
	                                    </label>
	                                    </label>
	                                    <br>
	                                    <labelfor="way_to_be_good_1"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea"  name="way_to_be_good_1" value="<?= isset($data) ? $data->way_to_be_good_1 : ''; ?>"></labelfor>
	                                </div>
	                            </div>
	                            <div>
	                                <div class=".divstyle;checkbox">
	                                    <label>
	                                    <label class="quline_text w3-mobile" name="text53">
	                                    [[text234:text]]
	                                    </label>
	                                    </label>
	                                    <labelfor="need_to_be_good_2"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="need_to_be_good_2" maxlength="255" value="<?= isset($data) ? $data->need_to_be_good_2 : ''; ?>"></labelfor>
	                                </div>
	                                <div class=".divstyle;checkbox">
	                                    <label>
	                                    <label class="quline_text w3-mobile" name="text55">
	                                    [[text235:text]]
	                                    </label>
	                                    </label>
	                                    <br>
	                                    <labelfor="way_to_be_good_2"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea"  name="way_to_be_good_2" value="<?= isset($data) ? $data->way_to_be_good_2 : ''; ?>"></labelfor>
	                                </div>
	                            </div>
	                            <div>
	                                <div class=".divstyle;checkbox">
	                                    <label>
	                                    <label class="quline_text w3-mobile" name="text57">
	                                    [[text236:text]]
	                                    </label>
	                                    </label>
	                                    <labelfor="need_to_be_good_3"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="need_to_be_good_3" maxlength="255" value="<?= isset($data) ? $data->need_to_be_good_3 : ''; ?>"></labelfor>
	                                </div>
	                                <div class=".divstyle;checkbox">
	                                    <label>
	                                    <label class="quline_text w3-mobile" name="text59">
	                                    [[text237:text]]
	                                    </label>
	                                    </label>
	                                    <br>
	                                    <labelfor="way_to_be_good_3"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea"  name="way_to_be_good_3" value="<?= isset($data) ? $data->way_to_be_good_3 : ''; ?>"></labelfor>
	                                </div>
	                            </div>
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