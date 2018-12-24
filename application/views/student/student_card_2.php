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

	        <h3 class="w3-large w3-text-teal" id="sidetext"><b>

	            <span class="glyphicon glyphicon-info-sign"></span>

	            U Kunt hier de toelichting of de verklarende woordenlijst openen

	            </b>

	        </h3>

	    </div>

	    <?php require(dirname(__FILE__) . '/student_card_response_messages.inc.php') ?>

    	<form method="POST">

		    <div class="w3-container w3-block w3-mobile" id="cnt_form">

		        <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt1">

		            <div class="rightsign w3-container w3-cell w3-mobile">

		                <span class="glyphicon glyphicon-chevron-right"></span>

		            </div>

		            <div class="w3-cell w3-block w3-mobile">

		                <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">

		                    <label class="quline_text w3-mobile" name="text1">

		                    [[text21:text]]

		                    </label> 

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

		                    [[text22:text]]

		                    </label>

		                </div>

		                <div class="w3-cell-row w3-block w3-mobile" id="ans2line">

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="work_with_team" value="1" <?php if (isset($data) && $data->work_with_team == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text5">

		                        [[text23:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="same_work_time" value="1" <?php if (isset($data) && $data->same_work_time == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text7">

		                        [[text24:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="alot_of_mony" value="1" <?php if (isset($data) && $data->alot_of_mony == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text9">

		                        [[text25:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="uniform" value="1" <?php if (isset($data) && $data->uniform == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text11">

		                        [[text26:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="travel_far" value="1" <?php if (isset($data) && $data->travel_far == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text13">

		                        [[text27:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="work_one_place" value="1" <?php if (isset($data) && $data->work_one_place == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text15">

		                        [[text28:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="with_materials" value="1" <?php if (isset($data) && $data->with_materials == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text17">

		                        [[text29:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="is_dangerous" value="1" <?php if (isset($data) && $data->is_dangerous == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text19">

		                        [[text30:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="physical_work" value="1" <?php if (isset($data) && $data->physical_work == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text21">

		                        [[text31:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="work_outside" value="1" <?php if (isset($data) && $data->work_outside == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text23">

		                        [[text32:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="work_at_night" value="1" <?php if (isset($data) && $data->work_at_night == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text25">

		                        [[text33:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="work_weekend" value="1" <?php if (isset($data) && $data->work_weekend == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text27">

		                        [[text34:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->work_condetions != ""): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text29">

		                        [[text35:text]]

		                        </label>

		                        </label>

		                        <br>

		                        <labelfor="work_condetions"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="work_condetions" value="<?= isset($data) ? $data->work_condetions : ''; ?>"></labelfor>

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

		        <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt3">

		            <div class="rightsign w3-container w3-cell w3-mobile">

		                <span class="glyphicon glyphicon-chevron-right"></span>

		            </div>

		            <div class="w3-cell w3-block w3-mobile">

		                <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline3">

		                    <label class="quline_text w3-mobile" name="text35">

		                    [[text39:text]]

		                    </label>

                            <label class="quline_text w3-mobile" name="text35">

		                    [[text40:text]]

		                    </label>

		                </div>

		                <div class="w3-cell-row w3-block w3-mobile" id="ans3line">

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="driving_license" value="1" <?php if (isset($data) && $data->driving_license == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text37">

		                        [[text41:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="speake_another_lang" value="1" <?php if (isset($data) && $data->speake_another_lang == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text39">

		                        [[text42:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="sport" value="1" <?php if (isset($data) && $data->sport == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text41">

		                        [[text43:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="swimming_diploma" value="1" <?php if (isset($data) && $data->swimming_diploma == 1): ?>

    								checked

    							<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text43">

		                        [[text44:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->other_requirements != ""): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text45">

		                        [[text45:text]]

		                        </label>

		                        </label>

		                        <br>

		                        <labelfor="other_requirements"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="other_requirements" value="<?= isset($data) ? $data->other_requirements : ''; ?>"></labelfor>

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

		                        <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->another_special_requirements != ""): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text51">

		                        [[text49:text]]

		                        </label>

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

		                    [[text50:text]]

		                    </label>

		                </div>

		                <div class="w3-cell-row w3-block w3-mobile" id="ans4line">

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="in_my_home" value="1" <?php if (isset($data) && $data->in_my_home == 1): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text55">

		                        [[text51:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="in_my_health" value="1" <?php if (isset($data) && $data->in_my_health == 1): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text57">

		                        [[text52:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="in_my_age" value="1" <?php if (isset($data) && $data->in_my_age == 1): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text59">

		                        [[text53:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="in_my_motivation" value="1" <?php if (isset($data) && $data->in_my_motivation == 1): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text61">

		                        [[text54:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" name="in_my_address" value="1" <?php if (isset($data) && $data->in_my_address == 1): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text63">

		                        [[text55:text]]

		                        </label>

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->other_circumstance != ""): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text65">

		                        [[text56:text]]

		                        </label>

		                        </label>

		                        <br>

		                        <labelfor="other_circumstance"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="other_circumstance" value="<?= isset($data) ? $data->other_circumstance : ''; ?>"></labelfor>

		                        <label class="quline_text w3-mobile" name="text67">

		                        [[text57:text]]

		                        </label>

		                    </div>

		                    <div class=".divstyle;checkbox">

		                        <label>

		                        <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->yes_change_circumstance != ""): ?>

		    						checked

		    					<?php endif ?>> 

		                        <label class="quline_text w3-mobile" name="text69">

		                        [[text58:text]]

		                        </label>

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

		                        [[text59:text]]

		                        </label>

		                        </label>

		                        <br>

		                        <labelfor="no_change_circumstance"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="no_change_circumstance" value="<?= isset($data) ? $data->no_change_circumstance : ''; ?>"></labelfor>

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