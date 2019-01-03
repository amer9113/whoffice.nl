<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">

<head>

    <?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>

    <title>les 6</title>

</head>

<body>
	<div class="parallax w3-container background-color:lavenderblush w3-mobile">
        <?php require(dirname(__FILE__) . '/student_card_header.inc.php') ?>
        <div class="col-sm-2"></div>

        <div class="col-sm-8 w3-container w3-mobile w3-center">

            <div class="aracnt w3-container w3-cell-row w3-border w3-mobile">

                <div class="w3-cell-row w3-panel w3-mobile">

                    <p class="aracnt w3-cell-row w3-panel w3-text-red w3-xlarge">المهمة :</p>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile">

                    <span class="glyphicon glyphicon-chevron-left"></span>

                    <lable>قراءة الكارت باللغة الهولندية</lable>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile">

                    <span class="glyphicon glyphicon-chevron-left"></span>

                    <lable>قراءة ترجمة الكارت للغة العربية</lable>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile">

                    <span class="glyphicon glyphicon-chevron-left"></span>

                    <lable>مشاهدة فيديو عن كيفية تعبئة الكارت</lable>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile">

                    <span class="glyphicon glyphicon-chevron-left"></span>

                    <lable>للإنتقال للفقرة التالية يرجى الضغط أولاً على كلمة إكتمل ثم الإنتقال</lable>

                </div>

            </div>

            <br>

            <div class="hollcnt w3-container w3-cell-row w3-border w3-card-4 w3-mobile">

                <p class="w3-text-red w3-xlarge w3-mobile">RESULTAATKAART – NETWERK OPBOUWEN</p>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">1-</b>

                        <labelfor name="text1">Ik heb een netwerk van mensen die mij kunnen helpen. De mensen in mijn netwerk zijn:</labelfor>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text2">

                            Vakgenoten

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text3">

                            Collega’s

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text4">

                            Studievrienden

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text5">

                            Mensen die ik ken van de sportclub, vereniging of organisatie waarvan ik lid ben

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text6">

                            Ouders van vriendjes van mijn kinderen

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text7">

                            Andere ouders op de school of kinderopvang van mijn kinderen

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text8">

                            Klantmanagers

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text9">

                            Kennissen

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text10">

                            Vrienden

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text11">

                            Familie

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text12">

                            Anders:

                        </label>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="secquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">2-</b>

                        <labelfor name="text13">-In mijn netwerk zitten mensen die mij kunnen helpen om werk te vinden in mijn gewenste beroep of een werkervaringsplek of stage:</labelfor>

                    </p>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text14">

                            Ja, deze mensen in mijn netwerk kunnen mij helpen:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text15">

                            Voornaam en achternaam:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text16">

                            Voornaam en achternaam:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text17">

                            Voornaam en achternaam:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text18">

                            Nee, in mijn netwerk zitten geen mensen die mij kunnen helpen.

                        </label>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="thrdquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">3-</b>

                        <labelfor name="text19">Ik ga mijn kans op werk vergroten. Ik ga (nog meer) mensen zoeken die mij kunnen helpen. Ik schrijf hier op hoe en wanneer ik ga zoeken:</labelfor>

                    </p>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text20">

                            Hoe:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text21">

                            Wanneer:

                        </label>

                    </div>

                </div>

            </div>

            <br>

            <div class="aracnt w3-container w3-cell-row w3-border w3-card-4 w3-mobile">

                <p class="w3-text-red w3-xlarge w3-mobile">الكارت رقم 6 – بناء شبكة العلاقات</p>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">1-</b>

                        <labelfor name="text1">لدي شبكة علاقات مع الناس الذين يستطيعون تقديم المساعدة لي وتتكون شبكة علاقاتي من:</labelfor>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text2">

                            الزملاء

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text3">

                            زملاء العمل

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text4">

                            زملاء الدراسة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text5">

                            زملاء النادي او الجمعية او المنظمة التي أنا عضو فيها

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text6">

                            أولياء أمور أصدقاء أطفالي

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text7">

                            أولياء أمور أطفالي في الروضة أو المدرسة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text8">

                            مدراء العملاء

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text9">

                            المعارف

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text10">

                            الأصدقاء

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text11">

                            العائلة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text12">

                            اَخرى:

                        </label>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="secquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">2-</b>

                        <labelfor name="text13">-في شبكة علاقتي يوجد أصدقاء يستطيعون مساعدتي في الحصول على عمل في مهنتي المستقبلية او لكسب الخبرة او للتدريب:</labelfor>

                    </p>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text14">

                            نعم، الأشخاص الذين يستطيعون مساعدتي:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text15">

                            الاسم الكامل

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text16">

                            الاسم الكامل

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text17">

                            الاسم الكامل

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text18">

                            لا ، لا يوجد

                        </label>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="thrdquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">3-</b>

                        <labelfor name="text19">انا ذاهب لزيادة فرص العمل وبالتالي يجب ان أبحث عن أشخاص يستطيعون مساعدتي</labelfor>

                    </p>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text20">

                            كيف

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text21">

                            متى

                        </label>

                    </div>

                </div>

            </div>

            <br>

            <div class="aracnt w3-container w3-cell-row w3-border w3-mobile">

                <p>

                    <label name=text25>تابع الفيديو ثم اضغط على اكمل الدرس ليتم نقلك إلى الدرس التالي</label>

                </p>

                <video poster="https://whoffice.nl/wp-content/uploads/2018/06/Video-screen-min-1024x528.png" width="100%" height="100%" controls>

                    <source src="https://whoffice.nl/wp-content/uploads/2018/06/ONA-les-6.mp4" type="video/mp4">

                   

                </video>

                <div>

                    <a class="w3-button w3-green" href="<?= base_url().'student/card_6' ?>">إكتمل الدرس</a>

                </div>

            </div>

        </div>

    </div>

<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>

</body>

</html>