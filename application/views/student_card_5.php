<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require('inc/head.php') ?>
	<title>Resultaatkaart5</title>
</head>
<body>
	<div class="w3-container w3-mobile" id="Content">
        <div class="cnt_heads w3-mobile" id="cnt_head">
            <h1 class="w3-xxlarge w3-text-red" id="title"><b>
                Resultaatkaart5 -Beroepscompetenties
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
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="one_course" value="1" <?php if (isset($data) && $data->one_course == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="one_complate_training" value="1" <?php if (isset($data) && $data->one_complate_training == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="training_one_year" value="1" <?php if (isset($data) && $data->training_one_year == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="training_multi_year" value="1" <?php if (isset($data) && $data->training_multi_year == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="course_full_time" value="1" <?php if (isset($data) && $data->course_full_time == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="course_part_time" value="1" <?php if (isset($data) && $data->course_part_time == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="in_day" value="1" <?php if (isset($data) && $data->in_day == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="at_night" value="1" <?php if (isset($data) && $data->at_night == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="at_school" value="1" <?php if (isset($data) && $data->at_school == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="at_home" value="1" <?php if (isset($data) && $data->at_home == 1): ?>
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
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->another_course != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text23">
	                            text23
	                            </label>
	                            <small name="text24">text24</small>
	                            </label>
	                            <br>
	                            <labelfor="another_course"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="another_course" value="<?= isset($data) ? $data->another_course : ''; ?>"></labelfor>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt2">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">
	                        <label class="quline_text w3-mobile" name="text25">
	                        text25
	                        </label>
	                        <small name="text26">text26</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;">
	                            <div>
	                                <div class="col-sm-4">
	                                    <label class="quline_text w3-mobile" name="text27">
	                                    text27
	                                    </label>
	                                    <br>
	                                    <small name="text28">text28</small>
	                                </div>
	                                <div class="col-sm-8">
	                                    <labelfor="course_name"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="course_name" maxlength="255" value="<?= isset($data) ? $data->course_name : ''; ?>"></labelfor>
	                                </div>
	                            </div>
	                            <div>
	                                <div class="col-sm-4">
	                                    <label class="quline_text w3-mobile" name="text29">
	                                    text29
	                                    </label>
	                                    <br>
	                                    <small name="text30">text30</small>
	                                </div>
	                                <div class="col-sm-8">
	                                    <labelfor="course_school"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="course_school" maxlength="255" value="<?= isset($data) ? $data->course_school : ''; ?>"></labelfor>
	                                </div>
	                            </div>
	                            <div>
	                                <div class="col-sm-4">
	                                    <label class="quline_text w3-mobile" name="text31">
	                                    text31
	                                    </label>
	                                    <br>
	                                    <small name="text32">text32</small>
	                                </div>
	                                <div class="col-sm-8">
	                                    <labelfor="course_period"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="course_period" maxlength="255" value="<?= isset($data) ? $data->course_period : ''; ?>"></labelfor>
	                                </div>
	                            </div>
	                            <div>
	                                <div class="col-sm-4">
	                                    <label class="quline_text w3-mobile" name="text33">
	                                    text33
	                                    </label>
	                                    <br>
	                                    <small name="text34">text34</small>
	                                </div>
	                                <div class="col-sm-8">
	                                    <labelfor="period_time"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="period_time" maxlength="255" value="<?= isset($data) ? $data->period_time : ''; ?>"></labelfor>
	                                </div>
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
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">
	                        <label class="quline_text w3-mobile" name="text35">
	                        text35
	                        </label>
	                        <small name="text36">text36</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="no_diploma" value="1" <?php if (isset($data) && $data->no_diploma == 1): ?>
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
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->get_diplomas != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text39">
	                            text39
	                            </label>
	                            <small name="text40">text40</small>
	                            </label>
	                            <br>
	                            <labelfor="get_diplomas"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="get_diplomas" value="<?= isset($data) ? $data->get_diplomas : ''; ?>" maxlength="255"></labelfor>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <div class="w3-container w3-card-4">
	                                <label class="quline_text w3-mobile" name="text41">
	                                text41
	                                <small name="text42">text42</small>
	                                </label>
	                                <p>
	                                    <input class="w3-radio" type="radio" name="have_diploma" value="1" <?php if (isset($data) && $data->have_diploma == 1): ?>
			                            	checked
			                            <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text43">ja</label>
	                                </p>
	                                <p>
	                                    <input class="w3-radio" type="radio"  name="have_diploma" value="0" <?php if (isset($data) && $data->have_diploma == 0): ?>
			                            	checked
			                            <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text44">nee</label>
	                                </p>
	                            </div>
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
	                        <div class="col-sm-6">
	                            <label class="quline_text w3-mobile" name="text45">
	                            text45
	                            <br>
	                            <small name="text46">text46</small> 
	                            </label>
	                        </div>
	                        <div class="col-sm-2">
	                            <label><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" maxlength="255" name="cost_diploma" value="<?= isset($data) ? $data->cost_diploma : ''; ?>"></label>
	                        </div>
	                        <div class="col-sm-4">
	                            <label class="quline_text w3-mobile" name="text47">
	                            text47
	                            <small name="text48">text48</small> 
	                            <br>
	                            </label>
	                        </div>
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox"> 
	                            <label class="quline_text w3-mobile" name="text49">
	                            text49
	                            </label>
	                            <small name="text50">text50</small>
	                            </label>
	                            <br>
	                            <labelfor="get_lend"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="get_lend" value="<?= isset($data) ? $data->get_lend : ''; ?>"></labelfor>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="can_pay" value="1" <?php if (isset($data) && $data->can_pay == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text51">
	                            text51
	                            </label>
	                            <small name="text52">text52</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="owner_pay" value="1" <?php if (isset($data) && $data->owner_pay == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text53">
	                            text53
	                            </label>
	                            <small name="text54">text54</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->another_pay != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text55">
	                            text55
	                            </label>
	                            <small name="text56">text56</small>
	                            </label>
	                            <br>
	                            <labelfor="another_pay"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="another_pay" maxlength="255" value="<?= isset($data) ? $data->another_pay : ''; ?>"></labelfor>
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
	                        <label class="quline_text w3-mobile" name="text57">
	                        text57
	                        </label>
	                        <small name="text58">text58</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <label class="quline_text w3-mobile" name="text59">
	                            text59
	                            </label>
	                            <small name="text60">text60</small>
	                            </label>
	                            <br>
	                            <labelfor="Living_money"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="Living_money" value="<?= isset($data) ? $data->Living_money : ''; ?>"></labelfor>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt6">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">
	                        <label class="quline_text w3-mobile" name="text61">
	                        text61
	                        </label>
	                        <small name="text62">text62</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <div class="w3-container w3-card-4">
	                                <p>
	                                    <input class="w3-radio" type="radio" name="dutch_level" value="taalniveay" <?php if (isset($data) && $data->dutch_level == "taalniveay"): ?>
			                            	checked
			                            <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text63">text63</label>
	                                </p>
	                                <p>
	                                    <input class="w3-radio" type="radio"  name="dutch_level" value="onder 1f" <?php if (isset($data) && $data->dutch_level == "onder 1f"): ?>
			                            	checked
			                            <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text64">text64</label>
	                                </p>
	                                <p>
	                                    <input class="w3-radio" type="radio" name="dutch_level" value="1f" <?php if (isset($data) && $data->dutch_level == "1f"): ?>
			                            	checked
			                            <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text65">text65</label>
	                                </p>
	                                <p>
	                                    <input class="w3-radio" type="radio"  name="dutch_level" value="2f" <?php if (isset($data) && $data->dutch_level == "2f"): ?>
			                            	checked
			                            <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text66">text66</label>
	                                </p>
	                                <p>
	                                    <input class="w3-radio" type="radio" name="dutch_level" value="3f" <?php if (isset($data) && $data->dutch_level == "3f"): ?>
			                            	checked
			                            <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text67">text67</label>
	                                </p>
	                                <p>
	                                    <input class="w3-radio" type="radio"  name="dutch_level" value="4f" <?php if (isset($data) && $data->dutch_level == "4f"): ?>
			                            	checked
			                            <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text68">text68</label>
	                                </p>
	                            </div>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <div class="w3-container">
	                                <label class="quline_text w3-mobile" name="text69">
	                                text69
	                                <small name="text70">text70</small>
	                                </label>
	                                <p>
	                                    <input class="w3-radio" type="radio" name="have_Level" value="1" <?php if (isset($data) && $data->have_Level == 1): ?>
			                            	checked
			                            <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text71">ja</label>
	                                    <input class="w3-radio" type="radio"  name="have_Level" value="0" <?php if (isset($data) && $data->have_Level == 0): ?>
			                            	checked
			                            <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text72">nee</label>
	                                </p>
	                            </div>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <div class="w3-container">
	                                <label class="quline_text w3-mobile" name="text79">
	                                text79
	                                <small name="text80">text80</small>
	                                </label>
	                                <p>
	                                    <input class="w3-radio" type="radio" name="have_diploma_Level" value="1" <?php if (isset($data) && $data->have_diploma_Level == 1): ?>
			                            	checked
			                            <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text81">ja</label>
	                                    <input class="w3-radio" type="radio"  name="have_diploma_Level" value="0" <?php if (isset($data) && $data->have_diploma_Level == 0): ?>
			                            	checked
			                            <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text82">nee</label>
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt7">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">
	                        <label class="quline_text w3-mobile" name="text73">
	                        text73
	                        </label>
	                        <small name="text74">text74</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="can_speak_with_people" value="1" <?php if (isset($data) && $data->can_speak_with_people == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text75">
	                            text75
	                            </label>
	                            <small name="text76">text76</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="instructions" value="1" <?php if (isset($data) && $data->instructions == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text77">
	                            text77
	                            </label>
	                            <small name="text78">text78</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="meet" value="1" <?php if (isset($data) && $data->meet == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text79">
	                            text79
	                            </label>
	                            <small name="text80">text80</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="email" value="1" <?php if (isset($data) && $data->email == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text81">
	                            text81
	                            </label>
	                            <small name="text82">text82</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="telephone" value="1" <?php if (isset($data) && $data->telephone == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text83">
	                            text83
	                            </label>
	                            <small name="text84">text84</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="report" value="1" <?php if (isset($data) && $data->report == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text85">
	                            text85
	                            </label>
	                            <small name="text86">text86</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="speak_client" value="1" <?php if (isset($data) && $data->speak_client == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text87">
	                            text87
	                            </label>
	                            <small name="text88">text88</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="contact_colleague" value="1" <?php if (isset($data) && $data->contact_colleague == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text89">
	                            text89
	                            </label>
	                            <small name="text90">text90</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="work_paper" value="1" <?php if (isset($data) && $data->work_paper == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text91">
	                            text91
	                            </label>
	                            <small name="text92">text92</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="short_report" value="1" <?php if (isset($data) && $data->short_report == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text93">
	                            text93
	                            </label>
	                            <small name="text94">text94</small>
	                            </label>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->another_report != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text95">
	                            text95
	                            </label>
	                            <small name="text96">text96</small>
	                            </label>
	                            <br>
	                            <labelfor="another_report"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="another_report" value="<?= isset($data) ? $data->another_report : ''; ?>"></labelfor>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <div class="w3-container w3-card-4">
	                                <label class="quline_text w3-mobile" name="text97">
	                                text97
	                                <small name="text98">text98</small>
	                                </label>
	                                <p>
	                                    <input class="w3-radio" type="radio" name="can_good" value="1" <?php if (isset($data) && $data->can_good == 1): ?>
	                                    	checked
	                                    <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text99">ja</label>
	                                </p>
	                                <p>
	                                    <input class="w3-radio" type="radio"  name="can_good" value="0" <?php if (isset($data) && $data->can_good == 0): ?>
	                                    	checked
	                                    <?php endif ?>>
	                                    <label class="quline_text w3-mobile" name="text100">nee</label>
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt8">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">
	                        <label class="quline_text w3-mobile" name="text101">
	                        text101
	                        </label>
	                        <small name="text102">text102</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->language_trajectory != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text103">
	                            text103
	                            </label>
	                            <small name="text104">text104</small>
	                            </label>
	                            <br>
	                            <labelfor="language_trajectory"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="language_trajectory" value="<?= isset($data) ? $data->language_trajectory : ''; ?>"></labelfor>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->work_language_trajectory != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text105">
	                            text105
	                            </label>
	                            <small name="text106">text106</small>
	                            <br>
	                            <label class="quline_text w3-mobile" name="text107">
	                            text107
	                            </label>
	                            <small name="text108">text108</small>
	                            </label>
	                            <br>
	                            <labelfor="work_language_trajectory"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="work_language_trajectory" value="<?= isset($data) ? $data->work_language_trajectory : ''; ?>"></labelfor>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="study_lang" value="1" <?php if (isset($data) && $data->study_lang == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text109">
	                            text109
	                            </label>
	                            <small name="text110">text110</small>
	                            </label>
	                            <div>
	                                <div class="col-sm-4">
	                                    <label class="quline_text w3-mobile" name="text111">
	                                    text111
	                                    </label>
	                                    <br>
	                                    <small name="text112">text112</small>
	                                    <br>
	                                </div>
	                                <div class="col-sm-8">
	                                    <labelfor="study_lang_type"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="study_lang_type" maxlength="100" value="<?= isset($data) ? $data->study_lang_type : ''; ?>"></labelfor>
	                                </div>
	                            </div>
	                            <div>
	                                <div class="col-sm-4">
	                                    <label class="quline_text w3-mobile" name="text113">
	                                    text113
	                                    </label>
	                                    <br>
	                                    <small name="text114">text114</small>
	                                </div>
	                                <div class="col-sm-8">
	                                    <labelfor="study_lang_where"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="study_lang_where" maxlength="100" value="<?= isset($data) ? $data->study_lang_where : ''; ?>"></labelfor>
	                                </div>
	                            </div>
	                            <div>
	                                <div class="col-sm-4">
	                                    <label class="quline_text w3-mobile" name="text115">
	                                    text115
	                                    </label>
	                                    <br>
	                                    <small name="text116">text116</small>
	                                </div>
	                                <div class="col-sm-8">
	                                    <labelfor="study_lang_when"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="study_lang_when" maxlength="100" value="<?= isset($data) ? $data->study_lang_when : ''; ?>"></labelfor>
	                                </div>
	                            </div>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="study_lang_no" value="1" <?php if (isset($data) && $data->study_lang_no == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text117">
	                            text117
	                            </label>
	                            <small name="text118">text118</small>
	                            </label>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile w3-center" id="footer">
	                <div class="w3-bar">
		                <input type="hidden" name="direction">
		                <button class="w3-button w3-red" type="button" id="submit_backword">Naar Kaart4</button>
		                <button class="w3-button w3-red" type="button" id="submit_forword">Naar Kaart6</button>
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