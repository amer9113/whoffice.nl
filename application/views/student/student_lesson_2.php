<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
    <?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
    <title>Resultaatkaart2</title>
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
                <p class="w3-text-red w3-xlarge w3-mobile">RESULTAATKAART – REALISTISCH BEROEPSBEELD</p>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">1-</b>
                        <label name="text1">Als ik het werk van mijn gewenste beroep doe, heb ik de volgende taken:</label>
                    </p>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="secstquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">2-</b>
                        <label name="text2">Dit gewenste beroep heeft de volgende werkomstandigheden:</label>
                    </p>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text3">
                            Je werkt in een team.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text4">
                            Je hebt altijd dezelfde werktijden.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text5">
                            Je verdient veel geld.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text6">
                            Je draagt een uniform of werkkleding.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text7">
                            Je moet ver reizen.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text8">
                            Je werkt op één plaats.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text9">
                            Je werkt met machines of materialen.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text10">
                            Het is gevaarlijk werk.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text11">
                            Je doet lichamelijk werk.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text12">
                            Je werkt buiten.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text13">
                            Je hebt (soms) nachtdiensten of avonddiensten.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text14">
                            Je werkt (soms) in het weekend.
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text15">
                            Er zijn nog andere werkomstandigheden bij dit gewenste beroep:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text16">
                            Deze werkomstandigheden passen bij mij:
                        </label>
                        <br>
                        <input class="csquare" disabled><b>Ja</b>
                        <input class="csquare" disabled><b>Nee</b>
                    </div>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="thirdtquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">3-</b>
                        <label name="text16">Dit werk stelt speciale eisen aan mij. Voor dit werk moet ik:</label>
                    </p>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text17">
                            Een rijbewijs hebben
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text18">
                            Goed andere talen spreken
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text19">
                            Sportief of sterk zijn
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text20">
                            Een zwemdiploma hebben
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text21">
                            Er zijn nog andere speciale eisen bij dit gewenste beroep:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text22">
                            Deze eisen passen bij mij:
                        </label>
                        <br>
                        <input class="csquare" disabled><b>Ja</b>
                        <input class="csquare" disabled><b>Nee</b>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text23">
                            Als ik dit werk wil doen, dan moet ik nog werken aan de volgende speciale eisen:
                        </label>
                    </div>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="forthquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">4-</b>
                        <label name="text24">Dit werk past bij mijn persoonlijke omstandigheden:</label>
                    </p>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text25">
                            Bij mijn thuissituatie
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text26">
                            Bij mijn gezondheid
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text27">
                            Bij mijn leeftijd
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text28">
                            Bij mijn motivatie
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text29">
                            Bij mijn woonplaats
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text30">
                            Ik heb nog andere persoonlijke omstandigheden:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text31">
                            Ik kan mijn persoonlijke omstandigheden veranderen voor het gewenste beroep:
                        </label>
                        <br>
                        <input class="csquare" disabled><b>Ja, want:</b>
                        <br>
                        <input class="csquare" disabled><b>Nee, want:</b>
                    </div>
                </div>
            </div>
            <br>
            <div class="aracnt w3-container w3-cell-row w3-border w3-card-4 w3-mobile">
                <p class="w3-text-red w3-xlarge w3-mobile">الكارت رقم 2 – صورة عن واقع العمل</p>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">1-</b>
                        <label name="text1">إذا مارست مهنتي المستقبلية املك المهمات التالية:</label>
                    </p>
                    <div>
                        <p>
                            <b class="w3-xlarge w3-text-red">2-</b>
                            <label name="text2">ظروف العمل الموجودة في مهنتي المستقبلية هي:</label>
                        </p>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text3">
                                العمل ضمن مجموعة
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text4">
                                أملك دائما أوقات عمل مشابهة
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text5">
                                أكسب الكثير من المال
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text6">
                                ارتدي لباس رسمي او ملابس العمل
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text7">
                                لدي السفر ضمن العمل
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text8">
                                أعمل في مكان واحد
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text9">
                                اعمل مع الماكينات او المواد
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text10">
                                املك عمل خطر
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text11">
                                عملي يتطلب مجهود جسدي
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text12">
                                اعمل في الخارج
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text13">
                                لدي عمل أحيانا في فترات مسائية او ليلية
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text14">
                                لدي عمل أحيانا في عطلة الأسبوع
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text15">
                                هناك المزيد من ظروف العمل في مهنتي المستقبلية:
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text16">
                                ظروف العمل التي اخترتها جميعها مناسبة لي:
                            </label>
                            <br>
                            <input class="csquare" disabled><b>نعم</b>
                            <input class="csquare" disabled><b>لا</b>
                        </div>
                    </div>
                    <div>
                        <p>
                            <b class="w3-xlarge w3-text-red">3-</b>
                            <label name="text16">هذا العمل يضع مطالب خاصة علي، لهذا العمل يجب أن:</label>
                        </p>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text17">
                                أملك شهادة سياقة
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text18">
                                أتكلم لغة ثانية بشكل جيد
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text19">
                                أملك الحركة الجيدة والقوة
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text20">
                                أملك شهادة سباحة
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text21">
                                هناك مطالب خاصة أخرى، مثال:
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text22">
                                مطالب العمل الخاصة التي اخترتها جميعها مناسبة لي:
                            </label>
                            <br>
                            <input class="csquare" disabled><b>نعم</b>
                            <input class="csquare" disabled><b>لا</b>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text23">
                                إذا قمت بممارسة هذا العمل يجب أن اجتهد أكثر على هذه المطالب الخاصة:
                            </label>
                        </div>
                    </div>
                    <div>
                        <p>
                            <b class="w3-xlarge w3-text-red">4-</b>
                            <label name="text24">يجب على العمل ان يتناسب مع ظروفي الشخصية التالية:</label>
                        </p>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text25">
                                مع حالة السكن
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text26">
                                مع صحتي
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text27">
                                مع عمري
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text28">
                                مع الحوافز التي املكها
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text29">
                                مع مكان السكن
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text30">
                                لدي ظروف شخصية أخرى:
                            </label>
                        </div>
                        <div class=".divstyle;checkbox">
                            <input class="ssquare" disabled>
                            <label class="quline_text w3-mobile" name="text31">
                                أستطيع تغيير ظروفي الشخصية من أجل العمل:
                            </label>
                            <br>
                            <input class="csquare" disabled><b>نعم ، لأن:</b>
                            <br>
                            <input class="csquare" disabled><b>لا ، لأن:</b>
                        </div>
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
                    <a class="w3-button w3-green" href="<?= base_url().'student/card_2' ?>">إكتمل الدرس</a>
                </div>
            </div>
        </div>
    </div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>