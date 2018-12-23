<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
    <?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
    <title>Resultaatkaart1</title>
</head>
<body>
	<div class="parallax w3-container background-color:lavenderblush w3-mobile">
        <div class="col-sm-10 col-sm-offset-1 w3-container w3-mobile" id="cnt" style="margin-bottom:25px;background:rgba(102, 153, 153,0.2); padding: 0.1px;">
            <div class="row">
                <!-- topbar -->
                <div class="topnav" id="myTopnav">
                    <?php foreach ($cards_status as $key => $card): ?>
                    <?php if ($card->card_no == $card_number): ?>
                        <a class="active" href="<?= base_url().'student/lesson/'.$card->card_no; ?>"><?= 'Resultaatkaart'.$card->card_no; ?></a>
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
                <p class="w3-text-red w3-xlarge">RESULTAATKAART – BEROEPENORIËNTATIE</p>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">1-</b>
                        <label name="text1">Ik wil werken in één van deze 3 beroepen:</label>
                    </p>
                    <p class="w3-text-teal">1-</p>
                    <p class="w3-text-teal">2-</p>
                    <p class="w3-text-teal">3-</p>
                    <div>
                        <div class="col-sm-5">
                            <label name="text2">Ik kies uit deze 3 beroepen 1 beroep:</label>
                        </div>
                        <div class="col-sm-3">
                            -------------------------------
                        </div>
                        <div class="col-sm-4">
                            <label name="text3">Dit is mijn gewenste beroep.</label>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="secquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">2-</b>
                        <label name=text4>Het volgende antwoord past bij mijn gewenste beroep:</label>
                    </p>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text5">
                            Mijn gewenste beroep past in veel branches/sectoren, bijvoorbeeld:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text6">
                            Mijn gewenste beroep past alleen in de volgende branche/sector:
                        </label>
                    </div>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="thirdquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">3-</b>
                        <label name=text7>De volgende situaties passen bij mij:</label>
                    </p>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text8">
                            Ik heb een diploma voor mijn gewenste beroep. Ik kan het bewijs laten zien.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text9">
                            Ik heb geen diploma voor mijn gewenste beroep, maar wel een ander diploma. Ik kan het bewijs laten zien.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text10">
                            Ik heb wel een diploma, maar ik kan het diploma niet laten zien.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text11">
                            Ik heb mijn diploma laten waarderen/een Indicatie Onderwijs Niveau (ION). Mijn diploma is gelijk aan een
                        </label>
                        <div>
                            ----------------------------------
                            <label class="quline_text w3-mobile" name="text12">
                                opleiding in Nederland.Ik kan het bewijs laten zien
                            </label>

                        </div>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text13">
                            Met mijn diploma/diplomawaardering/ION kan ik werken in mijn gewenste beroep
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text14">
                            Ik heb geen diplomawaardering/ION nodig, want:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text15">
                            Ik heb ervaring in dit gewenste beroep.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text16">
                            Ik heb een EVC-procedure aangevraagd of gevolgd. Ik kan het bewijs laten zien.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text17">
                            Ik heb geen ervaringscertificaat nodig, want:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text18">
                            Ik heb geen diploma’s en geen werkervaring in mijn gewenste beroep
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="aracnt w3-container w3-cell-row w3-border w3-card-4 w3-mobile">
                <p class="w3-text-red w3-xlarge">الكارت رقم 1 – التوجه المهني</p>
                <div class="w3-cell-row w3-panel  w3-mobile w3-border" id="fstquestionar">
                    <p>
                        <b class="w3-xlarge w3-text-red">1-</b>
                        <label name="text19">أريد العمل في واحدة من هذه المهن الثلاث:</label>
                    </p>
                    <p class="w3-text-teal">1-</p>
                    <p class="w3-text-teal">2-</p>
                    <p class="w3-text-teal">3-</p>
                    <div>
                        <div class="col-sm-5">
                            <label name="text2">وهي مهنتي المستقبلية</label>
                        </div>
                        <div class="col-sm-3">
                            ---------------------------------
                        </div>
                        <div class="col-sm-4">
                            <label name="text3">اختار مهنة واحدة من بين المهن الثلاث السابقة</label>
                        </div>
                    </div>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="secquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">2-</b>
                        <label name=text22>الأجوبة التالية تناسب المهنة المستقبلية التي اخترتها</label>
                    </p>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text23">
                            مهنتي المستقبلية تناسب الكثير من القطاعات، مثال:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text24">
                            مهنتي المستقبلية تناسب فقط في قطاع معين، مثال:
                        </label>
                    </div>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="thirdquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">3-</b>
                        <label name=text25>الحالات التالية التي تكون مناسبة لي:</label>
                    </p>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text26">
                            لدي شهادة في مهنتي المستقبلية ،أملك دليل على ذلك (نسخة عن الشهادة)
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text27">
                            ليس لدي شهادة في مهنتي المستقبلية ولكن لدي شهادة في مهنة أخرى، أملك دليل على ذلك (نسخة عن الشهادة)
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text28">
                            انا املك شهادة دراسية ولكن لا أستطيع ابراز الدليل
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text29">
                            انا قمت بتعديل شهادة الدراسة التي أملكها في نظام التعديل الهولندي أوأملك شهادة مسجلة في بيان مستوى التعليم وكانت النتيجة ان درجة شهادتي هي
                        </label>
                        <div>
                            -------------------------------------
                            <label class="quline_text w3-mobile" name="text30">
                                في نظام التعليم الهولندي، أملك دليل على ذلك (نسخة عن الشهادة)
                            </label>

                        </div>

                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text31">
                            أستطيع العمل في مهنتي المستقبلية بسبب نوع الشهادة التي املكها (الشهادة المعدلة أو الشهادة التي أملكها حساب بيان مستوى التعليم)
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text32">
                            انا لا احتاج لتعديل شهادتي لأن
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text33">
                            أنا أملك خبرة في مهنتي المستقبلية
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text34">
                            انا قمت بتقديم طلب لتسجيل الخبرة التي املكها في مركز EVC-procedure ، أملك دليل على ذلك (ابرازشهادة التسجيل النهائية او صورة الطلب)
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text35">
                            انا لا أحتاج إلى شهادة خبرة لأن
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare">
                        <label class="quline_text w3-mobile" name="text36">
                            انا لا أملك شهادة دراسية ولا خبرة في مهنتي المستقبلية
                        </label>
                    </div>
                </div>

            </div>
            <br>
            <div class="aracnt w3-container w3-cell-row w3-border w3-mobile">
                <p>
                    <label name=text25>تابع الفيديو ثم اضغط على اكمل الدرس ليتم نقلك إلى الدرس التالي</label>
                </p>
                <video width="100%" height="100%" controls>
                    <source src="movie.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg"> Your browser does not support the video tag.
                </video>
                <div>
                    <a class="w3-button w3-green" href="<?= base_url().'student/card_1' ?>">إكتمل الدرس</a>
                </div>
            </div>

        </div>
    </div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>