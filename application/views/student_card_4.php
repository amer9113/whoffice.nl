<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require('inc/head.php') ?>
	<title>Resultaatkaart4</title>
</head>
<body>
	<div class="w3-container w3-mobile" id="Content">
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
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">
	                        <label class="quline_text w3-mobile" name="text1">
	                        text1
	                        </label>
	                        <small name="text2">text2</small> 
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
	                            text3
	                            <br>
	                            <small name="text4">text4</small> 
	                            </label>
	                        </div>
	                        <div class="col-sm-2">
	                            <labelfor="num_vacancies_find"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="number"  name="num_vacancies_find" value="<?= isset($data) ? $data->num_vacancies_find : ''; ?>"></labelfor>
	                        </div>
	                        <div class="col-sm-6">
	                            <label class="quline_text w3-mobile" name="text5">
	                            text5
	                            <br>
	                            <small name="text6">text6</small> 
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
	                        text7
	                        </label>
	                        <small name="text8">text8</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle w3-container w3-card-4">
	                            <p>
	                                <input class="w3-radio" type="radio" name="chance_work" value="0" <?php if (isset($data) && $data->chance_work == 0): ?>
										checked
									<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text9">text9 <small name="text10">text10</small></label>
	                            </p>
	                            <p>
	                                <input class="w3-radio" type="radio"  name="chance_work" value="1" <?php if (isset($data) && $data->chance_work == 1): ?>
										checked
									<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text10">text10 <small name="text11">text11</small></label>
	                            </p>
	                            <p>
	                                <input class="w3-radio" type="radio" name="chance_work" value="2" <?php if (isset($data) && $data->chance_work == 2): ?>
										checked
									<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text11">text11 <small name="text12">text12</small></label>
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
	                        text13
	                        </label>
	                        <small name="text14">text14</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <label class="quline_text w3-mobile" name="text15">
	                            text15
	                            </label>
	                            <small name="text16">text16</small>
	                            </label>
	                            <div>
	                                <div>
	                                    <div class="col-sm-4">
	                                        <label class="quline_text w3-mobile" name="text17">
	                                        text17
	                                        </label>
	                                        <br>
	                                        <small name="text18">text18</small>
	                                    </div>
	                                    <div class="col-sm-8">
	                                        <labelfor="job_offer_1_date"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="date"  name="job_offer_1_date" value="<?= isset($data) ? $data->job_offer_1_date : ''; ?>"></labelfor>
	                                    </div>
	                                </div>
	                                <div>
	                                    <div class="col-sm-4">
	                                        <label class="quline_text w3-mobile" name="text19">
	                                        text19
	                                        </label>
	                                        <br>
	                                        <small name="text20">text20</small>
	                                    </div>
	                                    <div class="col-sm-8">
	                                        <labelfor="job_offer_1_profession"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_1_profession" value="<?= isset($data) ? $data->job_offer_1_profession : ''; ?>"></labelfor>
	                                    </div>
	                                </div>
	                                <div>
	                                    <div class="col-sm-4">
	                                        <label class="quline_text w3-mobile" name="text21">
	                                        text21
	                                        </label>
	                                        <br>
	                                        <small name="text22">text22</small>
	                                    </div>
	                                    <div class="col-sm-8">
	                                        <labelfor="job_offer_1_company"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_1_company" value="<?= isset($data) ? $data->job_offer_1_company : ''; ?>"></labelfor>
	                                    </div>
	                                </div>
	                                <div>
	                                    <div class="col-sm-4">
	                                        <label class="quline_text w3-mobile" name="text23">
	                                        text23
	                                        </label>
	                                        <br>
	                                        <small name="text24">text24</small>
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
	                                    Voeg een Kopie van de aanvraag of het ervaringscertificaat toe
	                                    </label>
	                                    <small name="text26">arabic</small>
	                                </div>
	                            </div>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label class="quline_text w3-mobile" name="text27">
	                            text27
	                            <small name="text28">text28</small>
	                            </label>
	                            <div class=".divstyle;checkbox">
	                                <label> 
	                                <input class="w3-radio" type="radio" name="job_offer_1_yes_no" value="1" <?php if (isset($data) && $data->job_offer_1_yes_no == 1): ?>
										checked
									<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text29">
	                                text29
	                                </label>
	                                <small name="text30">text30</small>
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
	                                text31
	                                </label>
	                                <small name="text32">text32</small>
	                                </label>
	                                <br>
	                                <labelfor="job_offer_1_reason_no"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_1_reason_no" value="<?= (isset($data) && $data->job_offer_1_yes_no == 0) ? $data->job_offer_1_reason : ''; ?>"></labelfor>
	                            </div>
	                            <div class=".divstyle;checkbox">
	                                <label>
	                                <label class="quline_text w3-mobile" name="text33">
	                                text33
	                                </label>
	                                <small name="text34">text34</small>
	                                </label>
	                                <div>
	                                    <div>
	                                        <div class="col-sm-4">
	                                            <label class="quline_text w3-mobile" name="text35">
	                                            text35
	                                            </label>
	                                            <br>
	                                            <small name="text36">text36</small>
	                                        </div>
	                                        <div class="col-sm-8">
	                                            <labelfor="job_offer_2_date"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="date"  name="job_offer_2_date" value="<?= isset($data) ? $data->job_offer_2_date : ''; ?>"></labelfor>
	                                        </div>
	                                    </div>
	                                    <div>
	                                        <div class="col-sm-4">
	                                            <label class="quline_text w3-mobile" name="text37">
	                                            text37
	                                            </label>
	                                            <br>
	                                            <small name="text38">text38</small>
	                                        </div>
	                                        <div class="col-sm-8">
	                                            <labelfor="job_offer_2_profession"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_2_profession" value="<?= isset($data) ? $data->job_offer_2_profession : ''; ?>"></labelfor>
	                                        </div>
	                                    </div>
	                                    <div>
	                                        <div class="col-sm-4">
	                                            <label class="quline_text w3-mobile" name="text39">
	                                            text39
	                                            </label>
	                                            <br>
	                                            <small name="text40">text40</small>
	                                        </div>
	                                        <div class="col-sm-8">
	                                            <labelfor="job_offer_2_company"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="job_offer_2_company" value="<?= isset($data) ? $data->job_offer_2_company : ''; ?>"></labelfor>
	                                        </div>
	                                    </div>
	                                    <div>
	                                        <div class="col-sm-4">
	                                            <label class="quline_text w3-mobile" name="text41">
	                                            text41
	                                            </label>
	                                            <br>
	                                            <small name="text42">text42</small>
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
	                                        Voeg een Kopie van de aanvraag of het ervaringscertificaat toe
	                                        </label>
	                                        <small name="text44">arabic</small>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label class="quline_text w3-mobile" name="text45">
	                            text45
	                            <small name="text46">text46</small>
	                            </label>
	                            <div class=".divstyle;checkbox">
	                                <label>
	                                <input class="w3-radio" type="radio"  name="job_offer_2_yes_no" value="1" <?php if (isset($data) && $data->job_offer_2_yes_no == 1): ?>
										checked
									<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text47">
	                                text47
	                                </label>
	                                <small name="text48">text48</small>
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
	                                text49
	                                </label>
	                                <small name="text50">text50</small>
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
	                        text52
	                        </label>
	                        <small name="text53">text53</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <label class="quline_text w3-mobile" name="text54">
	                        text54
	                        <small name="text55">text55</small>
	                        </label>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="is_enough_work" value="1" <?php if (isset($data) && $data->is_enough_work == 1): ?>
										checked
									<?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text56">
	                            text56
	                            </label>
	                            <small name="text57">text57</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->is_little_work != ""): ?>
									checked
								<?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text58">
	                            text58
	                            </label>
	                            <small name="text59">text59</small>
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
	                            text60
	                            </label>
	                            <small name="text61">text61</small>
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
	                            text62
	                            </label>
	                            <small name="text63">text63</small>
	                            </label>
	                            <br>
	                            <labelfor="go_first"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="go_first" maxlength="255" value="<?= isset($data) ? $data->go_first : ''; ?>"></labelfor>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label class="quline_text w3-mobile" name="text64">
	                            text64
	                            <small name="text65">text65</small>
	                            </label>
	                            <br>
	                            <labelfor="go_first_reason"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="go_first_reason" maxlength="255" value="<?= isset($data) ? $data->go_first_reason : ''; ?>"></labelfor>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile w3-center" id="footer">
	                <div class="w3-bar">
	                    <input type="hidden" name="direction">
	                    <button class="w3-button w3-red" type="button" id="submit_backword">Naar Kaart3</button>
	                    <button class="w3-button w3-red" type="button" id="submit_forword">Naar Kaart5</button>
	                </div>
	            </div>
	        </div>
	    </form>
    </div>
<?php require('inc/scripts.php') ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#submit_forword').click(function(){
			$('[name="direction"]').val("next");
			$('form').submit();
		});

		$('#submit_backword').click(function(){
			$('[name="direction"]').val("back");
			$('form').submit();
		});
	});
</script>
</body>
</html>