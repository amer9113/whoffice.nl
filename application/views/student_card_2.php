<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require('inc/head.php') ?>
	<title>Resultaatkaart2</title>
</head>
<body>
	<div class="parallax w3-container w3-mobile" id="Content">
	    <div class="cnt_heads w3-mobile" id="cnt_head">
	        <h1 class="w3-xxlarge w3-text-red" id="title"><b>
	            Resultaatkaart2 -Realistisch beroepsbeeld
	            <small>arabic</small></b>
	        </h1>
	        <hr style="border:1px solid red" class="w3-round w3-hover-border-white">
	        <h3 class="w3-large w3-text-teal" id="sidetext"><b>
	            <span class="glyphicon glyphicon-info-sign"></span>
	            U Kunt hier de toelichting of de verklarende woordenlijst openen
	            <small>arabic</small></b>
	        </h3>
	    </div>
	    <?php if (isset($message)): ?>
    		<p><b><?= $message; ?></b></p>
    	<?php endif ?>
    	<form method="POST">
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
		                    <labelfor="tasks"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="textarea" name="tasks" required value="<?= isset($data) ? $data->tasks : ''; ?>"></labelfor>
		                </div>
		            </div>
		        </div>
		        <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt2">
		            <div class="rightsign w3-container w3-cell w3-mobile">
		                <span class="glyphicon glyphicon-chevron-right"></span>
		            </div>
		            <div class="w3-cell w3-block w3-mobile">
		                <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline2">
		                    <label class="quline_text w3-mobile" name="text3">
		                    text3
		                    </label>
		                    <small name="text4">text4</small> 
		                </div>
		                <div class="w3-cell-row w3-block w3-mobile" id="ans2line">
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="work_with_team" value="1" <?php if (isset($data) && $data->work_with_team == 1): ?>
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
		                        <input class="w3-check" type="checkbox" name="same_work_time" value="1" <?php if (isset($data) && $data->same_work_time == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text7">
		                        text7
		                        </label>
		                        <small name="text8">text8</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="alot_of_mony" value="1" <?php if (isset($data) && $data->alot_of_mony == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text9">
		                        text9
		                        </label>
		                        <small name="text10">text10</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="uniform" value="1" <?php if (isset($data) && $data->uniform == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text11">
		                        text11
		                        </label>
		                        <small name="text12">text12</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="travel_far" value="1" <?php if (isset($data) && $data->travel_far == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text13">
		                        text13
		                        </label>
		                        <small name="text14">text14</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="work_one_place" value="1" <?php if (isset($data) && $data->work_one_place == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text15">
		                        text15
		                        </label>
		                        <small name="text16">text16</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="with_materials" value="1" <?php if (isset($data) && $data->with_materials == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text17">
		                        text17
		                        </label>
		                        <small name="text18">text18</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="is_dangerous" value="1" <?php if (isset($data) && $data->is_dangerous == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text19">
		                        text19
		                        </label>
		                        <small name="text20">text20</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="physical_work" value="1" <?php if (isset($data) && $data->physical_work == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text21">
		                        text21
		                        </label>
		                        <small name="text22">text22</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="work_outside" value="1" <?php if (isset($data) && $data->work_outside == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text23">
		                        text23
		                        </label>
		                        <small name="text24">text24</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="work_at_night" value="1" <?php if (isset($data) && $data->work_at_night == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text25">
		                        text25
		                        </label>
		                        <small name="text26">text26</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="work_weekend" value="1" <?php if (isset($data) && $data->work_weekend == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text27">
		                        text27
		                        </label>
		                        <small name="text28">text28</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->work_condetions != ""): ?>
		    						checked
		    					<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text29">
		                        text29
		                        </label>
		                        <small name="text30">text30</small>
		                        </label>
		                        <br>
		                        <labelfor="work_condetions"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="work_condetions" value="<?= isset($data) ? $data->work_condetions : ''; ?>"></labelfor>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <div class="w3-container w3-card-4" id="good_with_me">
		                            <label class="quline_text w3-mobile" name="text31">
		                            text31
		                            <small name="text32">text32</small>
		                            </label>
		                            <p>
		                                <input class="w3-radio" type="radio" name="good_with_me" value="1" <?php if (isset($data) && $data->good_with_me == 1): ?>
		    								checked
		    							<?php endif ?>>
		                                <label class="quline_text w3-mobile" name="text33">ja</label>
		                            </p>
		                            <p>
		                                <input class="w3-radio" type="radio"  name="good_with_me" value="0" <?php if (isset($data) && $data->good_with_me == 0): ?>
		    								checked
		    							<?php endif ?>>
		                                <label class="quline_text w3-mobile" name="text34">nee</label>
		                            </p>
		                        </div>
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
		                    <label class="quline_text w3-mobile" name="text35">
		                    text35
		                    </label>
		                    <small name="text36">text36</small> 
		                </div>
		                <div class="w3-cell-row w3-block w3-mobile" id="ans3line">
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="driving_license" value="1" <?php if (isset($data) && $data->driving_license == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text37">
		                        text37
		                        </label>
		                        <small name="text38">text38</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="speake_another_lang" value="1" <?php if (isset($data) && $data->speake_another_lang == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text39">
		                        text39
		                        </label>
		                        <small name="text40">text40</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="sport" value="1" <?php if (isset($data) && $data->sport == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text41">
		                        text41
		                        </label>
		                        <small name="text42">text42</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="swimming_diploma" value="1" <?php if (isset($data) && $data->swimming_diploma == 1): ?>
    								checked
    							<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text43">
		                        text43
		                        </label>
		                        <small name="text44">text44</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->other_requirements != ""): ?>
		    						checked
		    					<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text45">
		                        text45
		                        </label>
		                        <small name="text46">text46</small>
		                        </label>
		                        <br>
		                        <labelfor="other_requirements"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="other_requirements" value="<?= isset($data) ? $data->other_requirements : ''; ?>"></labelfor>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <div class="w3-container w3-card-4" id="good_requirement">
		                            <label class="quline_text w3-mobile" name="text47">
		                            text47
		                            <small name="text48">text48</small>
		                            </label>
		                            <p>
		                                <input class="w3-radio" type="radio" name="good_requirements" value="1" <?php if (isset($data) && $data->good_requirements == 1): ?>
		    								checked
		    							<?php endif ?>>
		                                <label class="quline_text w3-mobile" name="text49">ja</label>
		                            </p>
		                            <p>
		                                <input class="w3-radio" type="radio"  name="good_requirements" value="0" <?php if (isset($data) && $data->good_requirements == 0): ?>
		    								checked
		    							<?php endif ?>>
		                                <label class="quline_text w3-mobile" name="text50">nee</label>
		                            </p>
		                        </div>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->another_special_requirements != ""): ?>
		    						checked
		    					<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text51">
		                        text51
		                        </label>
		                        <small name="text52">text52</small>
		                        </label>
		                        <br>
		                        <labelfor="another_special_requirements"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="another_special_requirements" value="<?= isset($data) ? $data->another_special_requirements : ''; ?>"></labelfor>
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
		                    <label class="quline_text w3-mobile" name="text53">
		                    text53
		                    </label>
		                    <small name="text54">text54</small> 
		                </div>
		                <div class="w3-cell-row w3-block w3-mobile" id="ans4line">
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="in_my_home" value="1" <?php if (isset($data) && $data->in_my_home == 1): ?>
		    						checked
		    					<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text55">
		                        text55
		                        </label>
		                        <small name="text56">text56</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="in_my_health" value="1" <?php if (isset($data) && $data->in_my_health == 1): ?>
		    						checked
		    					<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text57">
		                        text57
		                        </label>
		                        <small name="text58">text58</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="in_my_age" value="1" <?php if (isset($data) && $data->in_my_age == 1): ?>
		    						checked
		    					<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text59">
		                        text59
		                        </label>
		                        <small name="text60">text60</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="in_my_motivation" value="1" <?php if (isset($data) && $data->in_my_motivation == 1): ?>
		    						checked
		    					<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text61">
		                        text61
		                        </label>
		                        <small name="text62">text62</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" name="in_my_address" value="1" <?php if (isset($data) && $data->in_my_address == 1): ?>
		    						checked
		    					<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text63">
		                        text63
		                        </label>
		                        <small name="text64">text64</small>
		                        </label>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->other_circumstance != ""): ?>
		    						checked
		    					<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text65">
		                        text65
		                        </label>
		                        <small name="text66">text66</small>
		                        </label>
		                        <br>
		                        <labelfor="other_circumstance"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="other_circumstance" value="<?= isset($data) ? $data->other_circumstance : ''; ?>"></labelfor>
		                        <label class="quline_text w3-mobile" name="text67">
		                        text67
		                        </label>
		                        <small name="text68">text68</small>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->yes_change_circumstance != ""): ?>
		    						checked
		    					<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text69">
		                        text69
		                        </label>
		                        <small name="text70">text70</small>
		                        </label>
		                        <br>
		                        <labelfor="yes_change_circumstance"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="yes_change_circumstance" value="<?= isset($data) ? $data->yes_change_circumstance : ''; ?>"></labelfor>
		                    </div>
		                    <div class=".divstyle;checkbox">
		                        <label>
		                        <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->no_change_circumstance != ""): ?>
		    						checked
		    					<?php endif ?>> 
		                        <label class="quline_text w3-mobile" name="text71">
		                        text71
		                        </label>
		                        <small name="text72">text72</small>
		                        </label>
		                        <br>
		                        <labelfor="no_change_circumstance"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="no_change_circumstance" value="<?= isset($data) ? $data->no_change_circumstance : ''; ?>"></labelfor>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile w3-center" id="footer">
		            <div class="w3-bar">
		                <input type="hidden" name="direction">
                        <button class="w3-button w3-red" type="button" id="submit_backword">Naar Kaart1</button>
                        <button class="w3-button w3-red" type="button" id="submit_forword">Naar Kaart3</button>
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