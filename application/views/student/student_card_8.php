<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">

<head>

	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>

	<title>Resultaatkaart 8</title>

</head>

<body>

	<div class="parallax w3-container w3-mobile" id="Content">

		<?php require(dirname(__FILE__) . '/student_card_header.inc.php') ?>

        <div class="cnt_heads w3-mobile" id="cnt_head">

            <h1 class="w3-xxlarge w3-text-red" id="title"><b>

                Resultaatkaart8 -Werkcultuur

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

	                        <label class="t8 quline_text w3-mobile section_header" name="text1">

	                        [[text238:text]]

	                        </label>

	                    </div>

	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">

	                        <div class=".divstyle;">

	                            <div>

	                                <label class="quline_text w3-mobile" name="text3">

	                                [[text239:text]]

	                                </label>

	                                <br>

	                                <labelfor="in_my_country_1"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="in_my_country_1" value="<?= isset($data) ? $data->in_my_country_1 : ''; ?>" required></labelfor>

	                            </div>

	                            <div>

	                                <label class="quline_text w3-mobile" name="text5">

	                                [[text240:text]]

	                                </label>

	                                <br>

	                                <labelfor="in_netherlands_1"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="in_netherlands_1" value="<?= isset($data) ? $data->in_netherlands_1 : ''; ?>" required></labelfor>

	                            </div>

	                        </div>

	                        <div class=".divstyle;">

	                            <div>

	                                <label class="quline_text w3-mobile" name="text7">

	                                [[text241:text]]

	                                </label>

	                                <br>

	                                <labelfor="in_my_country_2"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="in_my_country_2" value="<?= isset($data) ? $data->in_my_country_2 : ''; ?>" required></labelfor>

	                            </div>

	                            <div>

	                                <label class="quline_text w3-mobile" name="text9">

	                                [[text242:text]]

	                                </label>

	                                <br>

	                                <labelfor="in_netherlands_2"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="in_netherlands_2" value="<?= isset($data) ? $data->in_netherlands_2 : ''; ?>" required></labelfor>

	                            </div>

	                        </div>

	                        <div class=".divstyle;">

	                            <div>

	                                <label class="quline_text w3-mobile" name="text11">

	                                [[text243:text]]

	                                </label>

	                                <br>

	                                <labelfor="in_my_country_3"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="in_my_country_3" value="<?= isset($data) ? $data->in_my_country_3 : ''; ?>" required></labelfor>

	                            </div>

	                            <div>

	                                <label class="quline_text w3-mobile" name="text13">

	                                [[text244:text]]

	                                </label>

	                                <br>

	                                <labelfor="in_netherlands_3"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="in_netherlands_3" value="<?= isset($data) ? $data->in_netherlands_3 : ''; ?>" required></labelfor>

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