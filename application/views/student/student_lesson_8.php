<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">

<head>

    <?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>

    <title>les 8</title>

</head>

<body>
    <div class="parallax container-fluid">
        <?php require(dirname(__FILE__) . '/student_card_header.inc.php') ?>
    </div>
	<div class="parallax w3-container background-color:lavenderblush w3-mobile">
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

                <p class="w3-text-red w3-xlarge w3-mobile">RESULTAATKAART – WERKCULTUUR</p>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">1-</b>

                        <b>

            <labelfor name="text1">In Nederland is de cultuur op het werk in mijn gewenste beroep anders dan in mijn land van herkomst. Ik noem 3 verschillen:</labelfor>

            </b>

                    </p>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text2">

                            Verschil 1. In mijn land van herkomst:

                        </label>

                        <br>

                        <br>

                        <label class="quline_text w3-mobile" name="text3">

                            In Nederland:

                        </label>

                        <br>

                        <br>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text4">

                            Verschil 2. In mijn land van herkomst:

                        </label>

                        <br>

                        <br>

                        <label class="quline_text w3-mobile" name="text5">

                            In Nederland:

                        </label>

                        <br>

                        <br>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text6">

                            Verschil 3. In mijn land van herkomst:

                        </label>

                        <br>

                        <br>

                        <label class="quline_text w3-mobile" name="text7">

                            In Nederland:

                        </label>

                        <br>

                        <br>

                    </div>

                </div>

            </div>

            <br>

            <div class="aracnt w3-container w3-cell-row w3-border w3-card-4 w3-mobile">

                <p class="w3-text-red w3-xlarge w3-mobile">الكارت رقم 8 – ثقافة العمل</p>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">

                    <p>

                        <b class="w3-xlarge w3-text-red">1-</b>

                        <b>

            <labelfor name="text1">ثقافة العمل في مهنتي المستقبلية في هولندا تختلف عن ثقافة العمل في موطني الأصلي، سوف أعطي ثلاث فوارق</labelfor>

            </b>

                    </p>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text2">

                            الاختلاف 1 في موطني الأصلي في الماضي

                        </label>

                        <br>

                        <br>

                        <label class="quline_text w3-mobile" name="text3">

                            في هولندا

                        </label>

                        <br>

                        <br>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text4">

                            الاختلاف 2 في موطني الأصلي في الماضي

                        </label>

                        <br>

                        <br>

                        <label class="quline_text w3-mobile" name="text5">

                            في هولندا

                        </label>

                        <br>

                        <br>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text6">

                            الاختلاف 3 في موطني الأصلي في الماضي

                        </label>

                        <br>

                        <br>

                        <label class="quline_text w3-mobile" name="text7">

                            في هولندا

                        </label>

                        <br>

                        <br>

                    </div>

                </div>

            </div>

            <br>

            <div class="aracnt w3-container w3-cell-row w3-border w3-mobile">

                <p>

                    <label name=text25>تابع الفيديو ثم اضغط على اكمل الدرس ليتم نقلك إلى الدرس التالي</label>

                </p>

                <video poster="https://whoffice.nl/wp-content/uploads/2018/06/Video-screen-min-1024x528.png" width="100%" height="100%" controls>

                    <source src="https://www.whoffice.nl/videos/Resultaatkaart-8.mp4?_=1" type="video/mp4">

                 

                </video>

                <div>

                    <a class="w3-button w3-green" href="<?= base_url().'student/card_8' ?>">إكتمل الدرس</a>

                </div>

            </div>

        </div>

    </div>

<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>

</body>

</html>