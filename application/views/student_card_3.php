<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require('inc/head.php') ?>
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
        <?php if (!isset($opened_for_teacher_checking)): ?>
    
        <?php if (isset($data)): ?>
            <?php if ($data->checked_with_teacher == 0): ?>
                <div class="alert alert-danger text-center" role="alert"><strong>Waiting</strong> for teacher approval to go to the next card.</div>
            <?php else: ?>
                <div class="alert alert-success text-center" role="alert">
                    <strong>Well done!</strong> You can now take <a href="<?= base_url().'student/card_3'; ?>" class="alert-link">card3</a>.
                </div>
            <?php endif ?>
        <?php endif ?>
    	<?php if (isset($message)): ?>
    		<p><b><?= $message; ?></b></p>
            <script>
                 window.onload = function() {
                     if ( window.history.replaceState ) {
                         window.history.replaceState( null, null, window.location.href );
                     }
                 }
             </script>
    	<?php endif ?>

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
	                        <br>
	                        <small name="text2">text2</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class="col-sm-8 .divstyle">
	                            <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline1_r">
	                                <label class="quline_text w3-mobile" name="text3">
	                                text3
	                                </label>
	                                <br>
	                                <small name="text4">text4</small> 
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
	                        </div>
	                        <div class="col-sm-4 .divstyle">
	                            <br>
	                            <br>
	                            <label class="quline_text w3-mobile" name="text5">
	                            text5
	                            <br>
	                            <small name="text6">text6</small>
	                            </label>
	                            <div class="divstyle">
	                                <input class="w3-radio" type="radio" name="have_properties_1" value="1" <?php if (isset($data) && $data->have_properties_1 == 1): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text7">ja</label>
	                                <input class="w3-radio" type="radio"  name="have_properties_1" value="0" <?php if (isset($data) && $data->have_properties_1 == 0): ?>
		    						checked
		    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text8">nee</label>
	                            </div>
	                            <br><br>
	                            <div class="divstyle">
	                                <input class="w3-radio" type="radio" name="have_properties_2" value="1" <?php if (isset($data) && $data->have_properties_2 == 1): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text9">ja</label>
	                                <input class="w3-radio" type="radio"  name="have_properties_2" value="0" <?php if (isset($data) && $data->have_properties_2 == 0): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name="text10">nee</label>
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
	                        text11
	                        </label>
	                        <br>
	                        <small name="text12">text12</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class="col-sm-4 w3-rightbar w3-border-gray w3-hover-border-red w3-block w3-mobile .divstyle">
	                            <div class="quline; w3-panel " id="quline2_r">
	                                <label class="quline_text w3-mobile" name="text13">
	                                text13
	                                </label>
	                                <br>
	                                <small name=" text14"> text14</small> 
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
	                                text15
	                                </label>
	                                <br>
	                                <small name=" text16"> text16</small> 
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
	                            text17
	                            <br>
	                            <small name=" text18"> text18</small>
	                            </label>
	                            <br><br>
	                            <div class="divstyle">
	                                <input class="w3-radio" type="radio" name="have_properties_3" value="1" <?php if (isset($data) && $data->have_properties_3 == 1): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text19">ja</label>
	                                <input class="w3-radio" type="radio"  name="have_properties_3" value="0" <?php if (isset($data) && $data->have_properties_3 == 0): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text20">nee</label>
	                            </div>
	                            <br><br>
	                            <div class="divstyle">
	                                <input class="w3-radio" type="radio" name="have_properties_4" value="1" <?php if (isset($data) && $data->have_properties_4 == 1): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text21">ja</label>
	                                <input class="w3-radio" type="radio"  name="have_properties_4" value="0" <?php if (isset($data) && $data->have_properties_4 == 0): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text22">nee</label>
	                            </div>
	                            <br><br>
	                            <div class="divstyle">
	                                <input class="w3-radio" type="radio" name="have_properties_5" value="1" <?php if (isset($data) && $data->have_properties_5 == 1): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text23">ja</label>
	                                <input class="w3-radio" type="radio"  name="have_properties_5" value="0" <?php if (isset($data) && $data->have_properties_5 == 0): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text24">nee</label>
	                            </div>
	                            <br><br>
	                            <div class="divstyle">
	                                <input class="w3-radio" type="radio" name="have_properties_6" value="1" <?php if (isset($data) && $data->have_properties_6 == 1): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text25">ja</label>
	                                <input class="w3-radio" type="radio"  name="have_properties_6" value="0" <?php if (isset($data) && $data->have_properties_6 == 0): ?>
			    						checked
			    					<?php endif ?>>
	                                <label class="quline_text w3-mobile" name=" text26">nee</label>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="cnt w3-cell-row w3-panel w3-border w3-block w3-mobile w3-center" id="footer">
	                <div class="w3-bar">
                        <?php if (isset($opened_for_teacher_checking)): ?>
                        
                        <input type="hidden" name="lock_card">
                        <button class="w3-button w3-green approve_edit" type="button">Approve &amp; allow edit</button> 
                        <button class="w3-button w3-red approve_lock" type="button">Approve &amp; lock</button> 

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
<?php require('inc/scripts.php') ?>
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
    });
</script>
<?php endif ?>
</body>
</html>