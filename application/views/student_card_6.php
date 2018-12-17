<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
	<?php require('inc/head.php') ?>
	<title>Resultaatkaart6</title>
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
                Resultaatkaart6 -Netwerk opbouwen
                <small>arabic</small></b>
            </h1>
            <hr style="border:1px solid red" class="w3-round w3-hover-border-white">
            <h3 class="w3-large w3-text-teal" id="sidetext"><b>
                <span class="glyphicon glyphicon-info-sign"></span>
                U Kunt hier de toelichting of de verklarende woordenlijst openen.
                <small>arabic</small></b>
            </h3>
        </div>
        <?php if (!isset($opened_for_teacher_checking)): ?>
    
        <?php if (isset($data)): ?>
            <?php if ($data->checked_with_teacher == 0): ?>
                <div class="alert alert-danger text-center" role="alert"><strong>Waiting</strong> for teacher approval to go to the next card.</div>
            <?php else: ?>
                <div class="alert alert-success text-center" role="alert">
                    <strong>Well done!</strong> You can now take <a href="<?= base_url().'student/card_6'; ?>" class="alert-link">card6</a>.
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
	                        <small name="text2">text2</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="close_friend" value="1" <?php if (isset($data) && $data->close_friend == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="colleague" value="1" <?php if (isset($data) && $data->colleague == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="study_friend" value="1" <?php if (isset($data) && $data->study_friend == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="sports_club_friend" value="1" <?php if (isset($data) && $data->sports_club_friend == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="client_manger" value="1" <?php if (isset($data) && $data->client_manger == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="knowledge" value="1" <?php if (isset($data) && $data->knowledge == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="friend" value="1" <?php if (isset($data) && $data->friend == 1): ?>
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
	                            <input class="w3-check" type="checkbox" name="family" value="1" <?php if (isset($data) && $data->family == 1): ?>
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
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && $data->another != ""): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text19">
	                            text19
	                            </label>
	                            <small name="text20">text20</small>
	                            </label>
	                            <br>
	                            <labelfor="another"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="another" value="<?= isset($data) ? $data->another : ''; ?>"></labelfor>
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
	                        <label class="quline_text w3-mobile" name="text21">
	                        text21
	                        </label>
	                        <small name="text22">text22</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" <?php if (isset($data) && ($data->name_help_me_1 != "" || $data->name_help_me_2 != "" || $data->name_help_me_3 != "" )): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text23">
	                            text23
	                            </label>
	                            <small name="text24">text24</small>
	                            </label>
	                            <div>
	                                <div>
	                                    <div class="col-sm-4">
	                                        <label class="quline_text w3-mobile" name="text25">
	                                        text25
	                                        </label>
	                                        <br>
	                                        <small name="text26">text26</small>
	                                    </div>
	                                    <div class="col-sm-8">
	                                        <labelfor><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="name_help_me_1" maxlength="100" value="<?= isset($data) ? $data->name_help_me_1 : ''; ?>"></labelfor>
	                                    </div>
	                                </div>
	                                <div>
	                                    <div class="col-sm-4">
	                                        <label class="quline_text w3-mobile" name="text27">
	                                        text27
	                                        </label>
	                                        <br>
	                                        <small name="text28">text28</small>
	                                    </div>
	                                    <div class="col-sm-8">
	                                        <labelfor="name_help_me_2"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="name_help_me_2" maxlength="100" value="<?= isset($data) ? $data->name_help_me_2 : ''; ?>"></labelfor>
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
	                                        <labelfor="name_help_me_3"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="name_help_me_3" maxlength="100" value="<?= isset($data) ? $data->name_help_me_3 : ''; ?>"></labelfor>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class=".divstyle;checkbox">
	                            <label>
	                            <input class="w3-check" type="checkbox" name="no_one_help_me" value="1" <?php if (isset($data) && $data->no_one_help_me == 1): ?>
	                            	checked
	                            <?php endif ?>> 
	                            <label class="quline_text w3-mobile" name="text31">
	                            text31
	                            </label>
	                            <small name="text32">text32</small>
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
	                    <div class="quline; w3-panel w3-bottombar w3-border-gray w3-hover-border-red w3-block w3-mobile" id="quline3">
	                        <label class="quline_text w3-mobile" name="text33">
	                        text33
	                        </label>
	                        <small name="text34">text34</small> 
	                    </div>
	                    <div class="w3-cell-row w3-block w3-mobile" id="ans1line">
	                        <div class=".divstyle;">
	                            <div class="col-sm-4">  
	                                <label>
	                                <label class="quline_text w3-mobile" name="text35">
	                                text35
	                                </label>
	                                <br>
	                                <small name="text36">text36</small>
	                                </label>
	                            </div>
	                            <div class="col-sm-8">
	                                <labelfor="who_work"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="who_work" maxlength="100" value="<?= isset($data) ? $data->who_work : ''; ?>"></labelfor>
	                            </div>
	                        </div>
	                        <div class=".divstyle;">
	                            <div class="col-sm-4">
	                                <label>
	                                <label class="quline_text w3-mobile" name="text37">
	                                text37
	                                </label>
	                                <br>
	                                <small name="text38">text38</small>
	                                </label>
	                            </div>
	                            <div class="col-sm-8">
	                                <labelfor="when_work"><input class="w3-input w3-animate-input w3-border w3-hover-border-red" type="text"  name="when_work" maxlength="100" value="<?= isset($data) ? $data->when_work : ''; ?>"></labelfor>
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