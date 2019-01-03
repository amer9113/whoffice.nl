<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">

<head>

	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>

	<title>Resultaatkaart 3</title>

</head>

<body>
	<div class="parallax container-fluid">
        <?php require(dirname(__FILE__) . '/student_card_header.inc.php') ?>
    </div>
	<div class="parallax w3-container w3-mobile" id="Content">
        <div class="cnt_heads w3-mobile" id="cnt_head">

            <h1 class="w3-xxlarge w3-text-red" id="title"><b>

                Resultaatkaart3 -Je eigenschappen Kennen

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

	                        [[text60:text]]

	                        </label>

	                        <br>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class="col-sm-8 .divstyle">

	                            <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1_r">

	                                <label class="quline_text w3-mobile" name="text3">

	                                [[text61:text]]

	                                </label>

                                    <label class="quline_text w3-mobile" name="text3">

	                                [[text62:text]]

	                                </label>

	                                <br>

	                            </div>

	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line1">

	                                <div class="signsize w3-cell w3-mobile">

	                                    <div class="w3-container w3-cell w3-mobile">1-</div>

	                                </div>

	                                <div class="w3-cell w3-mobile">

	                                    <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="properties_1" required maxlength="255" value="<?= isset($data) ? $data->properties_1 : ''; ?>">

	                                </div>

	                            </div>

	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line2">

	                                <div class="signsize w3-cell w3-mobile">

	                                    <div class="w3-container w3-cell w3-mobile">2-</div>

	                                </div>

	                                <div class="w3-cell w3-mobile">

	                                    <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="properties_2" required maxlength="255" value="<?= isset($data) ? $data->properties_2 : ''; ?>">

	                                </div>

	                            </div>

	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line2">

	                                <div class="signsize w3-cell w3-mobile">

	                                    <div class="w3-container w3-cell w3-mobile">3-</div>

	                                </div>

	                                <div class="w3-cell w3-mobile">

	                                    <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="properties_7" required maxlength="255" value="<?= isset($data) ? $data->properties_7 : ''; ?>">

	                                </div>

	                            </div>

	                        </div>

	                        <div class="col-sm-4 .divstyle">

	                            <br>

	                            <br>

	                            <label class="quline_text w3-mobile" name="text5">

	                            [[text63:text]]

	                            <br>

	                            </label>

	                            <div class="divstyle">

	                                <input class="w3-radio" type="radio" name="have_properties_1" required value="1" <?php if (isset($data) && $data->have_properties_1 == 1): ?>

			    						checked

			    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name="text7">[[text64:text]]</label>

	                                <input class="w3-radio" type="radio"  name="have_properties_1" required value="0" <?php if (isset($data) && $data->have_properties_1 == 0): ?>

		    						checked

		    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name="text8">[[text65:text]]</label>

	                            </div>

	                            <br><br>

	                            <div class="divstyle">

	                                <input class="w3-radio" type="radio" name="have_properties_2" required value="1" <?php if (isset($data) && $data->have_properties_2 == 1): ?>

			    						checked

			    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name="text9">[[text66:text]]</label>

	                                <input class="w3-radio" type="radio"  name="have_properties_2" required value="0" <?php if (isset($data) && $data->have_properties_2 == 0): ?>

			    						checked

			    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name="text10">[[text67:text]]</label>

	                            </div>

	                            <br><br>

	                            <div class="divstyle">

	                                <input class="w3-radio" type="radio" name="have_properties_7" required value="1" <?php if (isset($data) && $data->have_properties_7 == 1): ?>

			    						checked

			    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name="text9">[[text66:text]]</label>

	                                <input class="w3-radio" type="radio"  name="have_properties_7" required value="0" <?php if (isset($data) && $data->have_properties_7 == 0): ?>

			    						checked

			    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name="text10">[[text67:text]]</label>

	                            </div>

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

	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline2">

	                        <label class="quline_text w3-mobile section_header" name="text11">

	                        [[text68:text]]

	                        </label>

	                        <br>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class="col-sm-4 w3-rightbar w3-border-gray w3-hover-border-red w3-block w3-mobile .divstyle">

	                            <div class="quline; w3-panel " id="quline2_r">

	                                <label class="quline_text w3-mobile" name="text13">

	                                [[text69:text]]

	                                </label> 

	                            </div>

	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line4">

	                                <div class="signsize w3-cell w3-mobile">

	                                    <div class="w3-container w3-cell w3-mobile">4-</div>

	                                </div>

	                                <div class="w3-cell w3-mobile">

	                                    <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="properties_3" maxlength="255" value="<?= isset($data) ? $data->properties_3 : ''; ?>" required>

	                                </div>

	                            </div>

	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line5">

	                                <div class="signsize w3-cell w3-mobile">

	                                    <div class="w3-container w3-cell w3-mobile">5-</div>

	                                </div>

	                                <div class="w3-cell w3-mobile">

	                                    <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="properties_4" maxlength="255" value="<?= isset($data) ? $data->properties_4 : ''; ?>" required>

	                                </div>

	                            </div>

	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line6">

	                                <div class="signsize w3-cell w3-mobile">

	                                    <div class="w3-container w3-cell w3-mobile">6-</div>

	                                </div>

	                                <div class="w3-cell w3-mobile">

	                                    <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="properties_5" maxlength="255" value="<?= isset($data) ? $data->properties_5 : ''; ?>" required>

	                                </div>

	                            </div>

	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line7">

	                                <div class="signsize w3-cell w3-mobile">

	                                    <div class="w3-container w3-cell w3-mobile">7-</div>

	                                </div>

	                                <div class="w3-cell w3-mobile">

	                                    <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="properties_6" maxlength="255" value="<?= isset($data) ? $data->properties_6 : ''; ?>" required>

	                                </div>

	                            </div>

	                        </div>

	                        <div class="col-sm-4 w3-rightbar w3-border-gray w3-hover-border-red w3-block w3-mobile .divstyle">

	                            <div class="quline; w3-panel" id="quline2_m">

	                                <label class="quline_text w3-mobile" name=" text15">

	                                [[text70:text]]

	                                </label>

                                    <br>

                                    <label class="quline_text w3-mobile" name=" text15">

	                                [[text71:text]]

	                                </label>

	                            </div>

	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line_m_4">

	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="why_properties_3" maxlength="255" value="<?= isset($data) ? $data->why_properties_3 : ''; ?>" required>

	                            </div>

	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line_m_5">          

	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="why_properties_4" maxlength="255" value="<?= isset($data) ? $data->why_properties_4 : ''; ?>" required>

	                            </div>

	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line_m_6">

	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="why_properties_5" maxlength="255" value="<?= isset($data) ? $data->why_properties_5 : ''; ?>" required>

	                            </div>

	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line_m_7">

	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="why_properties_6" maxlength="255" value="<?= isset($data) ? $data->why_properties_6 : ''; ?>" required>

	                            </div>

	                        </div>

	                        <div class="col-sm-4 .divstyle">

	                            <br>

	                            <label class="quline_text w3-mobile" name=" text17">

	                            [[text72:text]]

	                            </label>

	                            <br><br>

	                            <div class="divstyle">

	                                <input class="w3-radio" type="radio" name="have_properties_3" required value="1" <?php if (isset($data) && $data->have_properties_3 == 1): ?>

			    						checked

			    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name=" text19">[[text73:text]]</label>

	                                <input class="w3-radio" type="radio"  name="have_properties_3" required value="0" <?php if (isset($data) && $data->have_properties_3 == 0): ?>

			    						checked

			    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name=" text20">[[text74:text]]</label>

	                            </div>

	                            <br><br>

	                            <div class="divstyle">

	                                <input class="w3-radio" type="radio" name="have_properties_4" required value="1" <?php if (isset($data) && $data->have_properties_4 == 1): ?>

			    						checked

			    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name=" text21">[[text75:text]]</label>

	                                <input class="w3-radio" type="radio"  name="have_properties_4" required value="0" <?php if (isset($data) && $data->have_properties_4 == 0): ?>

			    						checked

			    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name=" text22">[[text76:text]]</label>

	                            </div>

	                            <br><br>

	                            <div class="divstyle">

	                                <input class="w3-radio" type="radio" name="have_properties_5" required value="1" <?php if (isset($data) && $data->have_properties_5 == 1): ?>

			    						checked

			    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name=" text23">[[text77:text]]</label>

	                                <input class="w3-radio" type="radio"  name="have_properties_5" required value="0" <?php if (isset($data) && $data->have_properties_5 == 0): ?>

			    						checked

			    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name=" text24">[[text78:text]]</label>

	                            </div>

	                            <br><br>

	                            <div class="divstyle">

	                                <input class="w3-radio" type="radio" name="have_properties_6" required value="1" <?php if (isset($data) && $data->have_properties_6 == 1): ?>

			    						checked

			    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name=" text25">[[text79:text]]</label>

	                                <input class="w3-radio" type="radio"  name="have_properties_6" required value="0" <?php if (isset($data) && $data->have_properties_6 == 0): ?>

			    						checked

			    					<?php endif ?>>

	                                <label class="quline_text w3-mobile" name=" text26">[[text80:text]]</label>

	                            </div>

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