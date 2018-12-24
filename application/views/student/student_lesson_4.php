<?php

defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>

<html lang="NL">

<head>

    <?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>

    <title>les 4</title>

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

                <p class="w3-text-red w3-xlarge w3-mobile">RESULTAATKAART – BEROEPSKANSEN</p>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">

                    <b class="w3-xlarge w3-text-red">1-</b>

                    <labelfor name="text1">Ik kan op deze plekken vacatures vinden voor mijn gewenste beroep:</labelfor>

                    <p>

                        <b class="w3-large w3-text-teal">1-</b>

                    </p>

                    <p>

                        <b class="w3-large w3-text-teal">2-</b>

                    </p>

                    <p>

                        <b class="w3-large w3-text-teal">3-</b>

                    </p>



                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="Secquestion">

                    <b class="w3-xlarge w3-text-red">2-</b>

                    <labelfor name="text2">Ik heb _________ (aantal) vacatures gevonden voor mijn gewenste beroep.</labelfor>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="thrdquestion">

                    <b class="w3-xlarge w3-text-red">3-</b>

                    <labelfor name="text3">De kans op werk in dit gewenste beroep is:</labelfor>

                    <div>

                        <div class="col-sm-1"></div>

                        <div class="col-sm-11">

                            <div class=".divstyle;checkbox">

                                <input class="ssquare" disabled>

                                <label class="quline_text w3-mobile" name="text3">

                                    - Groot

                                </label>

                            </div>

                            <div class=".divstyle;checkbox">

                                <input class="ssquare" disabled>

                                <label class="quline_text w3-mobile" name="text4">

                                    - Redelijk

                                </label>

                            </div>

                            <div class=".divstyle;checkbox">

                                <input class="ssquare" disabled>

                                <label class="quline_text w3-mobile" name="text5">

                                    - Klein

                                </label>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="forthquestion">

                    <b class="w3-xlarge w3-text-red">4-</b>

                    <labelfor name="text6">De kans op werk in dit gewenste beroep is:Ik kan 2 vacatures laten zien. Ik vul de gegevens hieronder in.</labelfor>

                    <p name="text7">- Vacature 1</p>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-11">

                        <p name="text8">- Datum</p>

                        <p name="text9">- Beroep</p>

                        <p name="text10">- Naam bedrijf</p>

                        <p name="text11">- Plaats</p>

                    </div>

                    <p name="text12">- Vacature 1 is geschikt voor mij:

                        <br>

                        <input class="csquare" disabled><b>Ja, want:</b>

                        <br>

                        <input class="csquare" disabled><b>Nee, want:</b>

                    </p>

                    <p name="text13">- Vacature 2</p>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-11">

                        <p name="text14">- Datum</p>

                        <p name="text15">- Beroep</p>

                        <p name="text16">- Naam bedrijf</p>

                        <p name="text17">- Plaats</p>

                    </div>

                    <p name="text18">- Vacature 2 is geschikt voor mij:

                        <br>

                        <input class="csquare" disabled><b>Ja, want:</b>

                        <br>

                        <input class="csquare" disabled><b>Nee, want:</b>

                    </p>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fifthquestion">

                    <b class="w3-xlarge w3-text-red">5-</b>

                    <labelfor name="text18">Hoe ga ik nu verder?</labelfor>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text19">

                            De volgende situaties passen bij mij:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text20">

                            Er is genoeg werk. Ik ga verder met dit gewenste beroep.

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text21">

                            Er is weinig werk. Ik ga toch verder met dit gewenste beroep, want:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text22">

                            Ik ga eerst ander werk zoeken, want:

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <label class="quline_text w3-mobile" name="text23">

                            Ik ga eerst:_________________________want______________________

                        </label>

                    </div>

                </div>

            </div>

            <br>

            <div class="aracnt w3-container w3-cell-row w3-border w3-card-4 w3-mobile">

                <p class="w3-text-red w3-xlarge w3-mobile">الكارت رقم 4 – فرصة الحصول على عمل</p>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">

                    <b class="w3-xlarge w3-text-red">1-</b>

                    <labelfor name="text1">يمكنني الحصول على وظائف شاغرة لمهنتي المستقبلية من خلال هذه الوسائل:</labelfor>

                    <p>

                        <b class="w3-large w3-text-teal">1-</b>

                    </p>

                    <p>

                        <b class="w3-large w3-text-teal">2-</b>

                    </p>

                    <p>

                        <b class="w3-large w3-text-teal">3-</b>

                    </p>



                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="Secquestion">

                    <b class="w3-xlarge w3-text-red">2-</b>

                    <labelfor name="text2">وجدت عدد ………. وظيفة شاغرة لمهنتي المستقبلية</labelfor>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="thrdquestion">

                    <b class="w3-xlarge w3-text-red">3-</b>

                    <labelfor name="text3">فرصة الحصول على وظيفة في مهنتي المستقبلية:</labelfor>

                    <div>

                        <div class="col-sm-1"></div>

                        <div class="col-sm-11">

                            <div class=".divstyle;checkbox">

                                <input class="ssquare" disabled>

                                <label class="quline_text w3-mobile" name="text3">

                                    كبيرة

                                </label>

                            </div>

                            <div class=".divstyle;checkbox">

                                <input class="ssquare" disabled>

                                <label class="quline_text w3-mobile" name="text4">

                                    معقول

                                </label>

                            </div>

                            <div class=".divstyle;checkbox">

                                <input class="ssquare" disabled>

                                <label class="quline_text w3-mobile" name="text5">

                                    صغيرة

                                </label>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="forthquestion">

                    <b class="w3-xlarge w3-text-red">4-</b>

                    <labelfor name="text6">يمكنني ان اظهر وظيفتين شاغرتين، سوف املأ التفاصيل ادناه:</labelfor>

                    <p name="text7">- الوظيفة 1</p>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-11">

                        <p name="text8">- التاريخ </p>

                        <p name="text9">- المهنة</p>

                        <p name="text10">- اسم الشركة</p>

                        <p name="text11">- المكان</p>

                    </div>

                    <p name="text12">- الوظيفة 1 مناسبة ؟

                        <br>

                        <input class="csquare" disabled><b>نعم ، لأن</b>

                        <br>

                        <input class="csquare" disabled><b>لا ، لأن</b>

                    </p>

                    <p name="text13">- الوظيفة 2</p>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-11">

                        <p name="text14">- التاريخ</p>

                        <p name="text15">- المهنة</p>

                        <p name="text16">- اسم الشركة</p>

                        <p name="text17">- المكان</p>

                    </div>

                    <p name="text18">- الوظيفة 2 مناسبة ؟

                        <br>

                        <input class="csquare" disabled><b>نعم ، لأن:</b>

                        <br>

                        <input class="csquare" disabled><b>لا ، لأن:</b>

                    </p>

                </div>

                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fifthquestion">

                    <b class="w3-xlarge w3-text-red">5-</b>

                    <labelfor name="text18">كيف ابدأ الاَن:</labelfor>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text19">

                            هناك عدد كاف من فرص العمل سوف أبدا في مهنتي المستقبلية

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text20">

                            هناك عدد قليل من فرص العمل ولكن سوف اواصل في مهنتي المستقبلية لأن

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text21">

                            سوف أذهب اولاً للبحث عن وظيفة أخرى لأن

                        </label>

                    </div>

                    <div class=".divstyle;checkbox">

                        <input class="ssquare" disabled>

                        <label class="quline_text w3-mobile" name="text22">

                            أنا ذاهب أولاً لأفعل…………………………..لأن……………………………………

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

                    <source src="https://www.whoffice.nl/videos/Resultaatkaart-4.mp4?_=1" type="video/mp4">

                   
                </video>

                <div>

                    <a class="w3-button w3-green" href="<?= base_url().'student/card_4' ?>">إكتمل الدرس</a>

                </div>

            </div>

        </div>

    </div>

<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>

</body>

</html>