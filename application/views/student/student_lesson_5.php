<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">

<head>

    <?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>

    <title>les 5</title>

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

                <p class="w3-text-red w3-xlarge w3-mobile">RESULTAATKAART – BEROEPSCOMPETENTIES</p>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">1-</b>

                        <label name="text1">Een opleiding of cursus die past bij mijn persoonlijke omstandigheden/voorkeur is:</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text2">

                            Een cursus

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text3">

                            Een complete opleiding

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text4">

                            Een opleiding van maximaal 1 jaar

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text5">

                            Een opleiding van meerdere jaren

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text6">

                            4 dagen werken, 1 dag naar school (beroepsbegeleidende leerweg (bbl))

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text7">

                            4 dagen naar school, 1 dag werken (beroepsopleidende leerweg (bol))

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text8">

                            Een voltijdopleiding of cursus

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text9">

                            Een deeltijdopleiding of cursus

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text10">

                            Overdag

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text11">

                            ’s Avonds of in het weekendJe werkt in een team.

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text12">

                            Op een school

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text13">

                            Thuis via de computer en zelfstudie

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text14">

                            Anders, namelijk:

                        </label>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="secstquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">2-</b>

                        <label name="text15">De volgende opleiding of cursus voor mijn gewenste beroep past bij mijn persoonlijke omstandigheden:</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text16">

                            Naam opleiding of cursus:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text17">

                            Naam instituut of school:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text18">

                            Duur van de opleiding of cursus:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text19">

                            Overdag of ’s avonds/weekend:

                        </label>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="thrdtquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">3-</b>

                        <label name="text20">Om met deze opleiding te mogen beginnen:</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text20">

                            Heb ik geen diploma nodig.

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text21">

                            Moet ik het volgende diploma hebben:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text22">

                            Ik heb dit diploma:

                        </label>

                        <br>

                        <input class="csquare" disabled><b>Ja</b>

                        <input class="csquare" disabled><b>Nee</b>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="forthquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">4-</b>

                        <label name="text23">-Deze opleiding of cursus kost: € _____ per jaar.</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text24">

                            Ik kan geld lenen voor deze opleiding of cursus. Dat kan bij:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text25">

                            Ik kan de opleiding of cursus zelf betalen.

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text26">

                            Mijn werkgever wil de opleiding of cursus voor mij betalen.

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text27">

                            Anders, namelijk:

                        </label>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fifthquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">5-</b>

                        <label name="text28">Ik zorg dat ik genoeg geld heb om van te leven als ik deze opleiding of cursus doe. Dat doe ik zo:</label>

                    </p>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="sxthquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">6-</b>

                        <label name="text29">Voor deze opleiding of cursus moet ik dit taalniveau in het Nederlands hebben:</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text3027">

                            Taalniveau: niet belangrijk

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text31">

                            Onder 1F (onder A2)

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text32">

                            1F (A2)

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text33">

                            2F (B1)

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text34">

                            3F (B2)

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text35">

                            4F (C1)

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text36">

                            Ik heb dit taalniveau:

                        </label>

                        <br>

                        <input class="csquare" disabled><b>Ja</b>

                        <input class="csquare" disabled><b>Nee</b>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text37">

                            Ik heb een diploma voor dit taalniveau:

                        </label>

                        <br>

                        <input class="csquare" disabled><b>Ja</b>

                        <input class="csquare" disabled><b>Nee</b>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="svthquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">7-</b>

                        <label name="text38">-Als ik werk in mijn gewenste beroep, dan moet ik in het Nederlands kunnen:</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text39">

                            Overleggen met andere mensen

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text40">

                            Instructies begrijpen

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text41">

                            Vergaderen

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text42">

                            E-mailen

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text43">

                            Telefoneren

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text44">

                            Rapporten schrijven

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text45">

                            Met klanten of patiënten spreken

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text46">

                            Contact met collega’s

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text47">

                            Werkbriefjes invullen

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text48">

                            Kort verslagje schrijven

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text49">

                            Anders, namelijk:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text50">

                            Ik kan dit goed:

                        </label>

                        <br>

                        <input class="csquare" disabled><b>Ja</b>

                        <input class="csquare" disabled><b>Nee</b>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="eghthquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">8-</b>

                        <label name="text51">-Ik moet aan mijn taal werken voor dit gewenste beroep of de opleiding/cursus:</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text52">

                            Ja. Ik volg een taaltraject dat bij mij past:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text53">

                            Ja. Ik werk zelfstandig aan mijn taal voor het beroep of de opleiding/cursus. Ik doe dat zo:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text54">

                            Ja. Ik ga een taaltraject volgen. Ik heb een plan gemaakt:

                        </label>

                        <br>

                        <label class="quline_text w3-mobile" name="text55">

                            Soort target:

                        </label>

                        <br>

                        <label class="quline_text w3-mobile" name="text56">

                            Waar:

                        </label>

                        <br>

                        <label class="quline_text w3-mobile" name="text57">

                            Wanneer:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text58">

                            Nee, ik hoef niet aan mijn taal te werken voor dit gewenste beroep of de opleiding/cursus

                        </label>

                    </div>

                </div>

            </div>

            <br>

            <div class="aracnt w3-container w3-cell-row w3-border w3-card-4 w3-mobile">

                <p class="w3-text-red w3-xlarge w3-mobile">الكارت رقم 5 – الكفاءة المهنية</p>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">1-</b>

                        <label name="text1">الدراسة او الدورة المناسبة لظرفي الشخصي:</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text2">

                            دورة معينة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text3">

                            متابعة دراستي

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text4">

                            اتباع دراسة لمدة سنة او أقل

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text5">

                            اتباع دراسة لأكثر من سنة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text6">

                            اربعة أيام عمل ويوم 1 دراسة في المدرسة BBL

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text7">

                            أربعة أيام دراسة ويوم واحد عمل BOL

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text8">

                            دراسة او دورة بدوام كامل

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text9">

                            دراسة او دورة بدوام جزئي

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text10">

                            أيام الأسبوع

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text11">

                            دراسة مسائية او في عطلة الأسبوع

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text12">

                            دراسة في المدرسة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text13">

                            دراسة في المنزل بواسطة الحاسوب او دراسة لوحدي

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text14">

                            شيء اًخر

                        </label>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="secstquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">2-</b>

                        <label name="text15">الدورة او الدراسة التالية التي تناسب مهنتي المستقبلية وظروفي الشخصية:</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text16">

                            اسم الدورة او الدراسة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text17">

                            اسم المعهد او المدرسة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text18">

                            مدة الدراسة أو الدورة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text19">

                            أيام الأسبوع او مسائية/نهاية الأسبوع

                        </label>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="thrdtquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">3-</b>

                        <label name="text20">-لكي أستطيع البدء في الدراسة او الدورة</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text20">

                            لا احتاج إلى شهادة معينة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text21">

                            احتاج إلى شهادة معينة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text22">

                            هل تملك هذه الشهادة؟

                        </label>

                        <br>

                        <input class="csquare" disabled><b>نعم </b>

                        <input class="csquare" disabled><b> لا</b>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="forthquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">4-</b>

                        <label name="text23">-تكلفة الدورة او الدراسة ………….. يورو في السنة</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text24">

                            أستطيع الحصول على قرض من اجل الدراسة عن طريق:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text25">

                            أستطيع دفع تكاليف الدراسة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text26">

                            المسؤول في العمل سيدفع لي تكاليف الدراسة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text27">

                            شيء اَخر………………………………..

                        </label>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fifthquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">5-</b>

                        <label name="text28">كن حذر لوجود المال الكافي للمقدرة على المعيشة إذا درست، وهذا يمكن عن طريق</label>

                    </p>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="sxthquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">6-</b>

                        <label name="text29">ماهو مستوى اللغة الهولندية المطلوب للدخول في الدراسة او الدورة</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text3027">

                            مستوى اللغة غير مهم

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text31">

                            أقل من مستوى A2

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text32">

                            مستوى A2

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text33">

                            مستوى B1

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text34">

                            مستوى B2

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text35">

                            مستوى C1

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text36">

                            هل تملك هذا المستوى:

                        </label>

                        <br>

                        <input class="csquare" disabled><b>نعم</b>

                        <input class="csquare" disabled><b>لا</b>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text37">

                            هل لديك شهادة في مستوى اللغة:

                        </label>

                        <br>

                        <input class="csquare" disabled><b>نعم</b>

                        <input class="csquare" disabled><b>لا</b>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="svthquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">7-</b>

                        <label name="text38">--إذا حصلت على عمل في مهنتي المستقبلية، يجب ان يكون لدي القدرة على استخدام اللغة الهولندية في:</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text39">

                            التشاور مع الاَخرين

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text40">

                            فهم التعليمات

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text41">

                            الاجتماعات

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text42">

                            الايميل

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text43">

                            الهاتف

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text44">

                            كتابة التقارير

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text45">

                            التحدث مع الزبائن

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text46">

                            التواصل مع الزبائن

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text47">

                            كتابة رسائل العمل

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text48">

                            كتابة التقارير القصيرة

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text49">

                            شيء اَخر:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text50">

                            أستطيع فعل ذلك بشكل جيد:

                        </label>

                        <br>

                        <input class="csquare" disabled><b>نعم</b>

                        <input class="csquare" disabled><b>لا</b>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="eghthquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">8-</b>

                        <label name="text51">-يجب أن اعمل على تطوير مستوى اللغة الهولندية من اجل الدراسة او العمل في المهنة المستقبلية</label>

                    </p>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text52">

                            أتبع دورة لغة تناسبني في…………………………………………………

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text53">

                            أقوم بتطوير اللغة بنفسي من خلال ……………………………………….

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text54">

                            اتبع دورة لغة ولدي خطة لذلك:

                        </label>

                        <br>

                        <label class="quline_text w3-mobile" name="text55">

                            نوع الدورة

                        </label>

                        <br>

                        <label class="quline_text w3-mobile" name="text56">

                            المكان

                        </label>

                        <br>

                        <label class="quline_text w3-mobile" name="text57">

                            الزمان

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text58">

                            لا احتاج لتطوير اللغة من اجل دراستي او العمل

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

                    <source src="https://whoffice.nl/wp-content/uploads/2018/06/ONA-les-5.mp4" type="video/mp4">

                  

                </video>

                <div>

                    <a class="w3-button w3-green" href="<?= base_url().'student/card_5' ?>">إكتمل الدرس</a>

                </div>

            </div>

        </div>

    </div>

<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>

</body>

</html>