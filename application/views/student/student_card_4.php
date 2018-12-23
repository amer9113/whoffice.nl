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
	                        <label class="quline_text w3-mobile" name="text1">
	                        [[text81:text]]
	                        </label>
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class="w3-cell-row w3-block w3-mobile" id="ans1line1">
	                            <div class="signsize w3-cell w3-mobile">
	                                <div class="w3-container w3-cell w3-mobile">1</div>
	                            </div>
	                            <div class="w3-cell w3-mobile">
	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="place_vacancies_find_1" required maxlength="255" value="<?= isset($data) ? $data->place_vacancies_find_1 : ''; ?>">
	                            </div>
	                        </div>
	                        <div class="w3-cell-row w3-block w3-mobile" id="ans1line2">
	                            <div class="signsize w3-cell w3-mobile">
	                                <div class="w3-container w3-cell w3-mobile">2</div>
	                            </div>
	                            <div class="w3-cell w3-mobile">
	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="place_vacancies_find_2" required maxlength="255" value="<?= isset($data) ? $data->place_vacancies_find_2 : ''; ?>">
	                            </div>
	                        </div>
	                        <div class="w3-cell-row w3-block w3-mobile" id="ans1line3">
	                            <div class="signsize w3-cell w3-mobile">
	                                <div class="w3-container w3-cell w3-mobile">3</div>
	                            </div>
	                            <div class="w3-cell w3-mobile">
	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="place_vacancies_find_3" required maxlength="255" value="<?= isset($data) ? $data->place_vacancies_find_3 : ''; ?>">
	                            </div>
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
	                        <div class="col-sm-4">
	                            <label class="quline_text w3-mobile" name="text3">
	                            [[text82:text]]
	                            </label>
	                        </div>
	                        <div class="col-sm-2">
	                            <labelfor="num_vacancies_find"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="number"  name="num_vacancies_find" value="<?= isset($data) ? $data->num_vacancies_find : ''; ?>"></labelfor>
	                        </div>
	                        <div class="col-sm-6">
	                            <label class="quline_text w3-mobile" name="text5">
	                            [[text83:text]]
	                            </label> 
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt3">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">
	                        <label class="quline_text w3-mobile" name="text7">
	                        [[text84:text]]
	                        </label>
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle w3-container w3-card-4">
	                            <p>
	                                <input class="w3-radio" type="radio" name="chance_work" value="0" <?php if (isset($data) && $data->chance_work == 0): ?>
										checked
									<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text9">[[text85:text]]</label>
	                            </p>
	                            <p>
	                                <input class="w3-radio" type="radio"  name="chance_work" value="1" <?php if (isset($data) && $data->chance_work == 1): ?>
										checked
									<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text10">[[text86:text]]</label>
	                            </p>
	                            <p>
	                                <input class="w3-radio" type="radio" name="chance_work" value="2" <?php if (isset($data) && $data->chance_work == 2): ?>
										checked
									<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text11">[[text87:text]]</label>
	                            </p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt4">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">
	                        <label class="quline_text w3-mobile" name="text13">
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
	                                        <labelfor="job_offer_1_date"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="date"  name="job_offer_1_date" value="<?= isset($data) ? $data->job_offer_1_date : ''; ?>"></labelfor>
	                                    </div>
	                                </div>
	                                <div>
	                                    <div class="col-sm-4">
	                                        <label class="quline_text w3-mobile" name="text19">
	                                        [[text91:text]]
	                                        </label>
	                                    </div>
	                                    <div class="col-sm-8">
	                                        <labelfor="job_offer_1_profession"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_1_profession" value="<?= isset($data) ? $data->job_offer_1_profession : ''; ?>"></labelfor>
	                                    </div>
	                                </div>
	                                <div>
	                                    <div class="col-sm-4">
	                                        <label class="quline_text w3-mobile" name="text21">
	                                        [[text92:text]]
	                                        </label>
	                                    </div>
	                                    <div class="col-sm-8">
	                                        <labelfor="job_offer_1_company"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_1_company" value="<?= isset($data) ? $data->job_offer_1_company : ''; ?>"></labelfor>
	                                    </div>
	                                </div>
	                                <div>
	                                    <div class="col-sm-4">
	                                        <label class="quline_text w3-mobile" name="text23">
	                                        [[text93:text]]
	                                        </label>
	                                    </div>
	                                    <div class="col-sm-8">
	                                        <labelfor="job_offer_1_place"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_1_place" value="<?= isset($data) ? $data->job_offer_1_place : ''; ?>"></labelfor>
	                                    </div>
	                                </div>
	                            </div>
	                            <!--                 //button -->
	                            <div class="w3-container w3-block w3-mobile">
	                                <div class="col-sm-3 w3-block w3-mobile">
	                                    <label class="btn btn-default btn-file w3-teal w3-text-white">
	                                    Kies document <input name="job_offer_1_file"type="file" style="display: none;">
	                                    </label>
	                                    <?php if (isset($data) && $data->job_offer_1_file != ""): ?>
    										<a href="<?= base_url().'ext/student_documents/'.$data->job_offer_1_file; ?>" target="_blank">View uploaded file</a>
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
	                                <input class="w3-radio" type="radio" name="job_offer_1_yes_no" value="1" <?php if (isset($data) && $data->job_offer_1_yes_no == 1): ?>
										checked
									<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text29">
	                                [[text97:text]]
	                                </label>
	                                </label>
	                                <br>
	                                <labelfor="job_offer_1_reason_yes"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_1_reason_yes" value="<?= (isset($data) && $data->job_offer_1_yes_no == 1 ) ? $data->job_offer_1_reason : ''; ?>"></labelfor>
	                            </div>
	                            <div class=".divstyle;checkbox">
	                                <label>
	                                <input class="w3-radio" type="radio"  name="job_offer_1_yes_no" value="0" <?php if (isset($data) && $data->job_offer_1_yes_no == 0): ?>
										checked
									<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text31">
	                                [[text98:text]]
	                                </label>
	                                </label>
	                                <br>
	                                <labelfor="job_offer_1_reason_no"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_1_reason_no" value="<?= (isset($data) && $data->job_offer_1_yes_no == 0) ? $data->job_offer_1_reason : ''; ?>"></labelfor>
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
	                                            <labelfor="job_offer_2_date"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="date"  name="job_offer_2_date" value="<?= isset($data) ? $data->job_offer_2_date : ''; ?>"></labelfor>
	                                        </div>
	                                    </div>
	                                    <div>
	                                        <div class="col-sm-4">
	                                            <label class="quline_text w3-mobile" name="text37">
	                                            [[text101:text]]
	                                            </label>
	                                        </div>
	                                        <div class="col-sm-8">
	                                            <labelfor="job_offer_2_profession"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_2_profession" value="<?= isset($data) ? $data->job_offer_2_profession : ''; ?>"></labelfor>
	                                        </div>
	                                    </div>
	                                    <div>
	                                        <div class="col-sm-4">
	                                            <label class="quline_text w3-mobile" name="text39">
	                                            [[text102:text]]
	                                            </label>
	                                        </div>
	                                        <div class="col-sm-8">
	                                            <labelfor="job_offer_2_company"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_2_company" value="<?= isset($data) ? $data->job_offer_2_company : ''; ?>"></labelfor>
	                                        </div>
	                                    </div>
	                                    <div>
	                                        <div class="col-sm-4">
	                                            <label class="quline_text w3-mobile" name="text41">
	                                            [[text103:text]]
	                                            </label>
	                                        </div>
	                                        <div class="col-sm-8">
	                                            <labelfor="job_offer_2_place"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_2_place" value="<?= isset($data) ? $data->job_offer_2_place : ''; ?>"></labelfor>
	                                        </div>
	                                    </div>
	                                </div>
	                                <!--                 //button -->
	                                <div class="w3-container w3-block w3-mobile">
	                                    <div class="col-sm-3 w3-block w3-mobile">
	                                        <label class="btn btn-default btn-file w3-teal w3-text-white">
	                                        Kies document <input name="job_offer_2_file"type="file" style="display: none;">
	                                        </label>
	                                        <?php if (isset($data) && $data->job_offer_2_file != ""): ?>
    										<a href="<?= base_url().'ext/student_documents/'.$data->job_offer_2_file; ?>" target="_blank">View uploaded file</a>
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
	                                <input class="w3-radio" type="radio"  name="job_offer_2_yes_no" value="1" <?php if (isset($data) && $data->job_offer_2_yes_no == 1): ?>
										checked
									<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text47">
	                                [[text107:text]]
	                                </label>
	                                </label>
	                                <br>
	                                <labelfor="job_offer_2_reason_yes"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_2_reason_yes" value="<?= (isset($data) && $data->job_offer_2_yes_no == 1 ) ? $data->job_offer_2_reason : ''; ?>"></labelfor>
	                            </div>
	                            <div class=".divstyle;checkbox">
	                                <label>
	                                <input class="w3-radio" type="radio"  name="job_offer_2_yes_no" value="0" <?php if (isset($data) && $data->job_offer_2_yes_no == 0): ?>
										checked
									<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text49">
	                                [[text108:text]]
	                                </label>
	                                </label>
	                                <br>
	                                <labelfor="job_offer_2_reason_no"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_2_reason_no" value="<?= (isset($data) && $data->job_offer_2_yes_no == 0 ) ? $data->job_offer_2_reason : ''; ?>"></labelfor>
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
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">
	                        <label class="quline_text w3-mobile" name="text52">
	                        [[text109:text]]
	                        </label>
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <label class="quline_text w3-mobile" name="text54">
	                        [[text110:text]]
	                        </label>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="is_enough_work" value="1" <?php if (isset($data) && $data->is_enough_work == 1): ?>
										checked
									<?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text56">
	                            [[text111:text]]
	                            </label>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->is_little_work != ""): ?>
									checked
								<?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text58">
	                            [[text112:text]]
	                            </label>
	                            </label>
	                            <br>
	                            <labelfor="is_little_work"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="is_little_work" maxlength="255" value="<?= isset($data) ? $data->is_little_work : ''; ?>"></labelfor>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->another_work != ""): ?>
									checked
								<?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text60">
	                            [[text113:text]]
	                            </label>
	                            </label>
	                            <br>
	                            <labelfor="another_work"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="another_work" maxlength="255" value="<?= isset($data) ? $data->another_work : ''; ?>"></labelfor>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->go_first != ""): ?>
									checked
								<?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text62">
	                            [[text114:text]]
	                            </label>
	                            </label>
	                            <br>
	                            <labelfor="go_first"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="go_first" maxlength="255" value="<?= isset($data) ? $data->go_first : ''; ?>"></labelfor>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label class="quline_text w3-mobile" name="text64">
	                            [[text115:text]]
	                            </label>
	                            <br>
	                            <labelfor="go_first_reason"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="go_first_reason" maxlength="255" value="<?= isset($data) ? $data->go_first_reason : ''; ?>"></labelfor>
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