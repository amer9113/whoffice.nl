<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
	<title>Resultaatkaart3</title>
</head>
<body>
	<div class="parallax w3-container w3-mobile" id="Content">
		<?php if (!isset($opened_for_teacher_checking)): ?>
        <div class="col-sm-10 col-sm-offset-1 w3-container w3-mobile" id="cnt" style="margin-bottom:25px;background:rgba(102, 153, 153,0.2); padding: 0.1px;">
            <div class="row">
                <!-- topbar -->
                <div class="topnav" id="myTopnav">
                    <?php foreach ($cards_status as $key => $card): ?>
                    <?php if ($card->card_no == $card_number): ?>
                        <a class="active" href="<?= base_url().'student/card_'.$card->card_no; ?>"><?= 'Resultaatkaart'.$card->card_no; ?></a>
                    <?php else: ?>
                        <?php if ($card->accessable == 1): ?>
                            <a href="<?= base_url().'student/card_'.$card->card_no; ?>"><?= 'Resultaatkaart'.$card->card_no; ?></a>
                        <?php else: ?>
                            <a class="disabled" href="#"><?= 'Resultaatkaart'.$card->card_no; ?></a>
                        <?php endif ?>
                    <?php endif ?>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <p class="text-center" style="clear: both;margin: 0px;">Elapsed Time : <?= $this->elapsed_time; ?> <a href="<?= base_url().'student/logout' ?>">Logout</a></p>
        <?php endif ?>
        <div class="cnt_heads w3-mobile" id="cnt_head">
            <h1 class="w3-xxlarge w3-text-red" id="title"><b>
                Resultaatkaart3 -Je eigenschappen Kennen
                <small>arabic</small></b>
            </h1>
            <hr style="border:1px solid red" class="w3-round w3-hover-border-white">
            <h3 class="w3-large w3-text-teal" id="sidetext"><b>
                <span class="glyphicon glyphicon-info-sign"></span>
                U Kunt hier de toelichting of de verklarende woordenlijst openen
                <small>arabic</small></b>
            </h3>
        </div>
        <?php require(dirname(__FILE__) . '/student_card_header.inc.php') ?>
        <form method="POST">
        	<div class="w3-container w3-block w3-mobile" id="cnt_form">
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile" id="cnt1">
	                <div class="rightsign w3-container w3-cell w3-mobile">
	                    <span class="glyphicon glyphicon-chevron-right"></span>
	                </div>
	                <div class="w3-cell w3-block w3-mobile">
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1">
	                        <label class="quline_text w3-mobile" name="text1">
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
	                                <input class="w3-radio" type="radio" name="have_properties_1" value="1" <?php if (isset($data) && $data->have_properties_1 == 1): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text7">[[text64:text]]</label>
	                                <input class="w3-radio" type="radio"  name="have_properties_1" value="0" <?php if (isset($data) && $data->have_properties_1 == 0): ?>
		    						checked
		    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text8">[[text65:text]]</label>
	                            </div>
	                            <br><br>
	                            <div class="divstyle">
	                                <input class="w3-radio" type="radio" name="have_properties_2" value="1" <?php if (isset($data) && $data->have_properties_2 == 1): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text9">[[text66:text]]</label>
	                                <input class="w3-radio" type="radio"  name="have_properties_2" value="0" <?php if (isset($data) && $data->have_properties_2 == 0): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text10">[[text67:text]]</label>
	                            </div>
	                            <br><br>
	                            <div class="divstyle">
	                                <input class="w3-radio" type="radio" name="have_properties_7" value="1" <?php if (isset($data) && $data->have_properties_7 == 1): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text9">[[text66:text]]</label>
	                                <input class="w3-radio" type="radio"  name="have_properties_7" value="0" <?php if (isset($data) && $data->have_properties_7 == 0): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text10">[[text67:text]]</label>
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
	                        <label class="quline_text w3-mobile" name="text11">
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
	                                    <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="properties_3" maxlength="255" value="<?= isset($data) ? $data->properties_3 : ''; ?>">
	                                </div>
	                            </div>
	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line5">
	                                <div class="signsize w3-cell w3-mobile">
	                                    <div class="w3-container w3-cell w3-mobile">5-</div>
	                                </div>
	                                <div class="w3-cell w3-mobile">
	                                    <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="properties_4" maxlength="255" value="<?= isset($data) ? $data->properties_4 : ''; ?>">
	                                </div>
	                            </div>
	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line6">
	                                <div class="signsize w3-cell w3-mobile">
	                                    <div class="w3-container w3-cell w3-mobile">6-</div>
	                                </div>
	                                <div class="w3-cell w3-mobile">
	                                    <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="properties_5" maxlength="255" value="<?= isset($data) ? $data->properties_5 : ''; ?>">
	                                </div>
	                            </div>
	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line7">
	                                <div class="signsize w3-cell w3-mobile">
	                                    <div class="w3-container w3-cell w3-mobile">7-</div>
	                                </div>
	                                <div class="w3-cell w3-mobile">
	                                    <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="properties_6" maxlength="255" value="<?= isset($data) ? $data->properties_6 : ''; ?>">
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
	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="why_properties_3" maxlength="255" value="<?= isset($data) ? $data->why_properties_3 : ''; ?>">
	                            </div>
	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line_m_5">          
	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="why_properties_4" maxlength="255" value="<?= isset($data) ? $data->why_properties_4 : ''; ?>">
	                            </div>
	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line_m_6">
	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="why_properties_5" maxlength="255" value="<?= isset($data) ? $data->why_properties_5 : ''; ?>">
	                            </div>
	                            <div class="w3-cell-row w3-block w3-mobile" id="ans1line_m_7">
	                                <input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text" name="why_properties_6" maxlength="255" value="<?= isset($data) ? $data->why_properties_6 : ''; ?>">
	                            </div>
	                        </div>
	                        <div class="col-sm-4 .divstyle">
	                            <br>
	                            <label class="quline_text w3-mobile" name=" text17">
	                            [[text72:text]]
	                            </label>
	                            <br><br>
	                            <div class="divstyle">
	                                <input class="w3-radio" type="radio" name="have_properties_3" value="1" <?php if (isset($data) && $data->have_properties_3 == 1): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text19">[[text73:text]]</label>
	                                <input class="w3-radio" type="radio"  name="have_properties_3" value="0" <?php if (isset($data) && $data->have_properties_3 == 0): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text20">[[text74:text]]</label>
	                            </div>
	                            <br><br>
	                            <div class="divstyle">
	                                <input class="w3-radio" type="radio" name="have_properties_4" value="1" <?php if (isset($data) && $data->have_properties_4 == 1): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text21">[[text75:text]]</label>
	                                <input class="w3-radio" type="radio"  name="have_properties_4" value="0" <?php if (isset($data) && $data->have_properties_4 == 0): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text22">[[text76:text]]</label>
	                            </div>
	                            <br><br>
	                            <div class="divstyle">
	                                <input class="w3-radio" type="radio" name="have_properties_5" value="1" <?php if (isset($data) && $data->have_properties_5 == 1): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text23">[[text77:text]]</label>
	                                <input class="w3-radio" type="radio"  name="have_properties_5" value="0" <?php if (isset($data) && $data->have_properties_5 == 0): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text24">[[text78:text]]</label>
	                            </div>
	                            <br><br>
	                            <div class="divstyle">
	                                <input class="w3-radio" type="radio" name="have_properties_6" value="1" <?php if (isset($data) && $data->have_properties_6 == 1): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text25">[[text79:text]]</label>
	                                <input class="w3-radio" type="radio"  name="have_properties_6" value="0" <?php if (isset($data) && $data->have_properties_6 == 0): ?>
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