<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require('inc/head.php') ?>
	<title>Resultaatkaart7</title>
</head>
<body>
	<div class="w3-container w3-mobile" id="Content">
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
	                        <label class="t8 quline_text w3-mobile" name="text1">
	                        text1
	                        </label>
	                        <small name="text2">text2</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="vacancies" value="1" <?php if (isset($data) && $data->vacancies == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text3">
	                            text3
	                            </label>
	                            <small name="text4">text4</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="open_application" value="1" <?php if (isset($data) && $data->open_application == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text5">
	                            text5
	                            </label>
	                            <small name="text6">text6</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->other_way != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text7">
	                            text7
	                            </label>
	                            <small name="text8">text8</small>
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
	                        text9
	                        </label>
	                        <small name="text10">tex10</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->volunteering != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text11">
	                            text11
	                            </label>
	                            <small name="text12">text12</small>
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
	                            text13
	                            </label>
	                            <small name="text14">text14</small>
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
	                        text15
	                        </label>
	                        <small name="text16">text16</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->have_job != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text17">
	                            text17
	                            </label>
	                            <small name="text18">text18</small>
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
	                            text19
	                            </label>
	                            <small name="text20">text20</small>
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
	                            text21
	                            </label>
	                            <small name="text22">text22</small>
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
	                        text23
	                        </label>
	                        <small name="text24">text24</small> 
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
	                        text25
	                        </label>
	                        <small name="text26">text26</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="app_form_work" value="1" <?php if (isset($data) && $data->app_form_work == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text27">
	                            text27
	                            </label>
	                            <small name="text28">text28</small> 
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
	                                    text29
	                                    </label>
	                                    <small name="text30">text30</small>
	                                </div>
	                            </div>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="app_form_another_work" value="1" <?php if (isset($data) && $data->app_form_another_work == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text31">
	                            text31
	                            </label>
	                            <small name="text32">text32</small> 
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
	                                    text33
	                                    </label>
	                                    <small name="text34">text34</small>
	                                </div>
	                            </div>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="motivation" value="1" <?php if (isset($data) && $data->motivation == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text35">
	                            text35
	                            </label>
	                            <small name="text36">text36</small> 
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
	                                    text37
	                                    </label>
	                                    <small name="text38">text38</small>
	                                </div>
	                            </div>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="have_cv" value="1" <?php if (isset($data) && $data->have_cv == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text39">
	                            text39
	                            </label>
	                            <small name="text40">text40</small> 
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
	                                    text41
	                                    </label>
	                                    <small name="text42">text42</small>
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
	                        text43
	                        </label>
	                        <small name="text44">text44</small> 
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
	                        text45
	                        </label>
	                        <small name="text46">text46</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <labelfor="good_points"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea"  name="good_points" value="<?= isset($data) ? $data->good_points : ''; ?>"></labelfor>   
	                        <div>
	                            <label class="t8 quline_text w3-mobile" name="text47">
	                            text47
	                            <small name="text48">text48</small> 
	                            </label>
	                            <div>
	                                <div class=".divstyle;checkbox">
	                                    <div class="col-sm-4">
	                                        <label class="quline_text w3-mobile" name="text49">
	                                        text49
	                                        </label>
	                                        <small name="text50">text50</small>
	                                        <br>
	                                    </div>
	                                    <div class="col-sm-8">
	                                        <labelfor="need_to_be_good_1"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="need_to_be_good_1" maxlength="255" value="<?= isset($data) ? $data->need_to_be_good_1 : ''; ?>"></labelfor>
	                                    </div>
	                                </div>
	                                <div class=".divstyle;checkbox">
	                                    <label>
	                                    <label class="quline_text w3-mobile" name="text51">
	                                    text51
	                                    </label>
	                                    <small name="text52">text52</small>
	                                    </label>
	                                    <br>
	                                    <labelfor="way_to_be_good_1"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea"  name="way_to_be_good_1" value="<?= isset($data) ? $data->way_to_be_good_1 : ''; ?>"></labelfor>
	                                </div>
	                            </div>
	                            <div>
	                                <div class=".divstyle;checkbox">
	                                    <label>
	                                    <label class="quline_text w3-mobile" name="text53">
	                                    text53
	                                    </label>
	                                    <small name="text54">text54</small>
	                                    </label>
	                                    <labelfor="need_to_be_good_2"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="need_to_be_good_2" maxlength="255" value="<?= isset($data) ? $data->need_to_be_good_2 : ''; ?>"></labelfor>
	                                </div>
	                                <div class=".divstyle;checkbox">
	                                    <label>
	                                    <label class="quline_text w3-mobile" name="text55">
	                                    text55
	                                    </label>
	                                    <small name="text56">text56</small>
	                                    </label>
	                                    <br>
	                                    <labelfor="way_to_be_good_2"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea"  name="way_to_be_good_2" value="<?= isset($data) ? $data->way_to_be_good_2 : ''; ?>"></labelfor>
	                                </div>
	                            </div>
	                            <div>
	                                <div class=".divstyle;checkbox">
	                                    <label>
	                                    <label class="quline_text w3-mobile" name="text57">
	                                    text57
	                                    </label>
	                                    <small name="text58">text58</small>
	                                    </label>
	                                    <labelfor="need_to_be_good_3"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="need_to_be_good_3" maxlength="255" value="<?= isset($data) ? $data->need_to_be_good_3 : ''; ?>"></labelfor>
	                                </div>
	                                <div class=".divstyle;checkbox">
	                                    <label>
	                                    <label class="quline_text w3-mobile" name="text59">
	                                    text59
	                                    </label>
	                                    <small name="text60">text60</small>
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
				        <input type="hidden" name="direction">
				        <button class="w3-button w3-red" type="button" id="submit_backword">Naar Kaart6</button>
				        <button class="w3-button w3-red" type="button" id="submit_forword">Naar Kaart8</button>
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