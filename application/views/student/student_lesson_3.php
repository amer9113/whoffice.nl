<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
    <?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
    <title>Lektion 3</title>
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
                <p class="w3-text-red w3-xlarge w3-mobile">RESULTAATKAART – REALISTISCH BEROEPSBEELD</p>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">1-</b>
                        <labelfor name="text1">Ik kan eigenschappen/competenties noemen die belangrijk zijn als je werkt in Nederland. Ik kan van de eigenschappen/competenties zeggen of ik deze heb of niet.</labelfor>
                    </p>
                    <div>
                        <label name="text2">Deze eigenschappen/ competenties zijn voor Heb ik die eigenschap/ iedereen belangrijk: competentie?
                        </label>
                        <p>
                            <b class="w3-large w3-text-teal">1-</b>
                            <input class="csquare" disabled><b>Ja</b>
                            <input class="csquare" disabled><b>Nee</b>
                        </p>
                        <p>
                            <b class="w3-large w3-text-teal">2-</b>
                            <input class="csquare" disabled><b>Ja</b>
                            <input class="csquare" disabled><b>Nee</b>
                        </p>
                        <p>
                            <b class="w3-large w3-text-teal">3-</b>
                            <input class="csquare" disabled><b>Ja</b>
                            <input class="csquare" disabled><b>Nee</b>
                        </p>
                    </div>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="Secquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">2-</b>
                        <labelfor name="text3">Ik kan eigenschappen/competenties noemen die belangrijk zijn voor mijn gewenste beroep. Ik kan voorbeelden geven waarom deze eigenschappen/competenties belangrijk zijn. Ik kan van de eigenschappen/competenties zeggen of ik deze heb of niet.</labelfor>
                    </p>
                    <div>
                        <label name="text4">Deze eigenschappen/ Waarom is deze eigenschap/ Heb ik die
                        </label>
                        <label name="text5">competenties zijn belangrijk competentie belangrijk? eigenschap/
                        </label>
                        <label name="text6">voor mijn gewenste beroep: Ik geef een voorbeeld: competentie?
                        </label>
                        <p>
                            <b class="w3-large w3-text-teal">4-</b>
                            <input class="csquare" disabled><b>Ja</b>
                            <input class="csquare" disabled><b>Nee</b>
                        </p>
                        <p>
                            <b class="w3-large w3-text-teal">5-</b>
                            <input class="csquare" disabled><b>Ja</b>
                            <input class="csquare" disabled><b>Nee</b>
                        </p>
                        <p>
                            <b class="w3-large w3-text-teal">6-</b>
                            <input class="csquare" disabled><b>Ja</b>
                            <input class="csquare" disabled><b>Nee</b>
                        </p>
                        <p>
                            <b class="w3-large w3-text-teal">7-</b>
                            <input class="csquare" disabled><b>Ja</b>
                            <input class="csquare" disabled><b>Nee</b>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="aracnt w3-container w3-cell-row w3-border w3-card-4 w3-mobile">
                <p class="w3-text-red w3-xlarge w3-mobile">الكارت رقم 3 – الخصائص والكفاءات</p>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">1-</b>
                        <labelfor name="text7">أستطيع ان أذكر الخصائص والكفاءات المهمة لأي عمل بشكل عام في هولندا وأستطيع ان احدد إذا كنت املكها أو لا</labelfor>
                    </p>
                    <div>
                        <label name="text8">الكفاءات والخصائص المهمة لكل الأشخاص:هل تملك هذه الكفاءات والخصائص؟
                        </label>
                        <p>
                            <b class="w3-large w3-text-teal">1-</b>
                            <input class="csquare" disabled><b>نعم</b>
                            <input class="csquare" disabled><b>لا</b>
                        </p>
                        <p>
                            <b class="w3-large w3-text-teal">2-</b>
                            <input class="csquare" disabled><b>نعم</b>
                            <input class="csquare" disabled><b>لا</b>
                        </p>
                        <p>
                            <b class="w3-large w3-text-teal">3-</b>
                            <input class="csquare" disabled><b>نعم</b>
                            <input class="csquare" disabled><b>لا</b>
                        </p>
                    </div>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="Secquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">2-</b>
                        <labelfor name="text3=10">أستطيع ان أذكر الخصائص والكفاءات المهمة في مهنتي المستقبلية وسوف أشرح سبب أهميتها وأستطيع ان احدد إذا كنت املكها أو لا</labelfor>
                    </p>
                    <div>
                        <label name="text4">الكفاءات والخصائص المهمة : لماذا مهمة؟ هل تملكها؟
                        </label>
                        <p>
                            <b class="w3-large w3-text-teal">4-</b>
                            <input class="csquare" disabled><b>نعم</b>
                            <input class="csquare" disabled><b>لا</b>
                        </p>
                        <p>
                            <b class="w3-large w3-text-teal">5-</b>
                            <input class="csquare" disabled><b>نعم</b>
                            <input class="csquare" disabled><b>لا</b>
                        </p>
                        <p>
                            <b class="w3-large w3-text-teal">6-</b>
                            <input class="csquare" disabled><b>نعم</b>
                            <input class="csquare" disabled><b>لا</b>
                        </p>
                        <p>
                            <b class="w3-large w3-text-teal">7-</b>
                            <input class="csquare" disabled><b>نعم</b>
                            <input class="csquare" disabled><b>لا</b>
                        </p>
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
                    <a class="w3-button w3-green" href="<?= base_url().'student/card_3' ?>">إكتمل الدرس</a>
                </div>
            </div>
        </div>
    </div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>