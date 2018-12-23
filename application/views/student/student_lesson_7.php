<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="NL">
<head>
    <?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
    <title>Lektion 7</title>
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
                <p class="w3-text-red w3-xlarge w3-mobile">RESULTAATKAART – WERK VINDEN</p>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">1-</b>
                        <label name="text1">Ik kan op deze manieren werk vinden in mijn gewenste beroep:</label>
                    </p>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text2">
                            Via vacatures
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text3">
                            Via een open sollicitatie
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text4">
                            Op een andere manier, namelijk:
                        </label>
                    </div>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="scndquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">2-</b>
                        <label name="text5">-Een werkervaringsplaats, stageplaats of vrijwilligerswerk is voor mij belangrijk:</label>
                    </p>
                    <br>
                    <input class="csquare" disabled><b>Ja, want:</b>
                    <br>
                    <input class="csquare" disabled><b>Nee, want:</b>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="thrdquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">3-</b>
                        <label name="text6">-Ik heb werk, een werkervaringsplaats of stageplaats en/of doe vrijwilligerswerk:</label>
                    </p>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text7">
                            Ja. Ik werk/loop stage/doe vrijwilligerswerk bij:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text8">
                            Nee, want:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text9">
                            Nee, maar ik ga werk/stage/vrijwilligerswerk zoeken. Dat ga ik zo doen:
                        </label>
                    </div>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="forthquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">4-</b>
                        <label name="text10">-Ik kan 3 redenen noemen waarom sollicitatieformulieren en sollicitatiebrieven worden gebruikt:</label>
                    </p>
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
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fifthquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">5-</b>
                        <label name="text11">-Ik kan de volgende bewijzen laten zien:</label>
                    </p>
                    <b>
            <div class=".divstyle;checkbox">
                    <input class="ssquare" disabled>
                     <labelfor class="quline_text w3-mobile" name="text12">
                     Bij mijn gewenste beroep gebruiken werkgevers vaak sollicitatieformulieren. Ik heb 2 sollicitatieformulieren voor mijn gewenste beroep ingevuld. Op deze formulieren heb ik mijn eigen gegevens ingevuld. Ik kan de formulieren laten zien.
                     </labelfor> 
            </div>
            <div class=".divstyle;checkbox">
                    <input class="ssquare" disabled>
                     <labelfor class="quline_text w3-mobile" name="text13">
                     Bij mijn gewenste beroep gebruiken werkgevers geen sollicitatieformulieren. Ik heb 2 sollicitatieformulieren voor een ander beroep ingevuld. Op deze formulieren heb ik mijn eigen gegevens ingevuld. Ik kan de formulieren laten zien.
                     </labelfor> 
            </div>
            <div class=".divstyle;checkbox">
                    <input class="ssquare" disabled>
                     <labelfor class="quline_text w3-mobile" name="text14">
                      Ik heb een sollicitatiebrief geschreven die ik kan gebruiken bij andere sollicitaties. Ik kan deze sollicitatiebrief laten zien.
                     </labelfor> 
            </div>
            </b>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text15">
                            Ik heb een cv gemaakt. Ik kan dit cv laten zien.
                        </label>
                    </div>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="sxthquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">6-</b>
                        <label name="text16">-Als ik hulp nodig heb bij het schrijven van een sollicitatiebrief, kan ik die hier vinden:</label>
                    </p>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="svthquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">7-</b>
                        <label name="text16">-Ik weet dat het belangrijk is om in een sollicitatiegesprek een goede indruk te maken. Ik kan een goede indruk maken op de volgende punten:</label>
                    </p>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text17">
                            De volgende punten kan ik nog verbeteren:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text18">
                            Verbeterpunt:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text19">
                            Ik ga dit op de volgende manier doen:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text20">
                            Verbeterpunt:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text21">
                            Ik ga dit op de volgende manier doen:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text22">
                            Verbeterpunt:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text23">
                            Ik ga dit op de volgende manier doen
                        </label>
                    </div>
                </div>
            </div>
            <br>
            <div class="aracnt w3-container w3-cell-row w3-border w3-card-4 w3-mobile">
                <p class="w3-text-red w3-xlarge w3-mobile">الكارت رقم 7 – الحصول على عمل</p>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fstquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">1-</b>
                        <label name="text1">أستطيع من خلال الطرق التالية الحصول على عمل في مهنتي المستقبلية:</label>
                    </p>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text2">
                            من خلال الوظائف الشاغرة
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text3">
                            من خلال التسجيل على الوظائف بشكل مفتوح
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text4">
                            طريقة أخرى
                        </label>
                    </div>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="scndquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">2-</b>
                        <label name="text5">-مكان الخبرة أو مكان التدريب أو العمل الطوعي هل هي مهمة بالنسبة لي:</label>
                    </p>
                    <br>
                    <input class="csquare" disabled><b>نعم ،لأن :</b>
                    <br>
                    <input class="csquare" disabled><b>لا ،لأن :</b>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="thrdquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">3-</b>
                        <label name="text6">-أنا أملك عمل أو عمل طوعي أو تدريب</label>
                    </p>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text7">
                            نعم، أملك عمل أو عمل طوعي أو تدريب وذلك يكون عند:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text8">
                            لا، لأن
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text9">
                            لا، ولكن أنا أبحث عن عمل أو عمل طوعي أو مكان للتدريب ويكون ذلك في الطريقة التالية:
                        </label>
                    </div>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="forthquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">4-</b>
                        <label name="text10">-انا اعلم ثلاثة أسباب لماذا نستخدم طلبات التوظيف ورسائل التوظيف</label>
                    </p>
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
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="fifthquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">5-</b>
                        <label name="text11">-انا أملك الدلائل التالية (وثائق)</label>
                    </p>
                    <b>
            <div class=".divstyle;checkbox">
                    <input class="ssquare" disabled>
                     <labelfor class="quline_text w3-mobile" name="text12">
                     في مهنتي المستقبلية صاحب العمل يستخدم غالبا طلبات توظيف، أنا لدي طلبين توظيفلمهنتي المستقبلية قمت بتجهيزهم وكتبت بياناتي الشخصية وأستطيع إبرازهم(نسخة عن كل طلب)
                     </labelfor> 
            </div>
            <div class=".divstyle;checkbox">
                    <input class="ssquare" disabled>
                     <labelfor class="quline_text w3-mobile" name="text13">
                      لا يطلب صاحب العمل في مهنتي المستقبلية طلبات توظيف ولكن لدي طلبين توظيف لمهنة أخرى قمت بتجهيزهم وكتبت بياناتي الشخصية وأستطيع   إبرازهم (  نسخة عن كل طلب)
                     </labelfor> 
            </div>
            <div class=".divstyle;checkbox">
                    <input class="ssquare" disabled>
                     <labelfor class="quline_text w3-mobile" name="text14">
                       كتبت رسالة توظيف من أجل العمل أستطيع استخدامها، املك دليل على ذلك (نسخة عن كل طلب)
                     </labelfor> 
            </div>
            </b>
                    <div class=".divstyle;checkbox">
                        <input class="ssquare" disabled>
                        <label class="quline_text w3-mobile" name="text15">
                            انا لدي سيرة ذاتية (نسخة عن السيرة الذاتية)
                        </label>
                    </div>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="sxthquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">6-</b>
                        <label name="text16">-إذا كنت أريد مساعدة في كتابة رسالة التوظيف يمكنني الحصول على المساعدة من خلال:</label>
                    </p>
                </div>
                <div class="w3-cell-row w3-panel w3-mobile w3-border" id="svthquestion">
                    <p>
                        <b class="w3-xlarge w3-text-red">7-</b>
                        <label name="text16">-أنا أعلم من الضروري ان اترك انطباع جيد في مقابلة التوظيف، ويمكنني ان اترك انطباع جيد من خلال النقاط التالية:</label>
                    </p>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text17">
                            النقاط التالية يجب أن أقوم بتطويرها
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text18">
                            النقطة:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text19">
                            سوف أقوم بتطويرها من خلال الطريقة التالية:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text20">
                            النقطة:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text21">
                            سوف أقوم بتطويرها من خلال الطريقة التالية:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text22">
                            النقطة:
                        </label>
                    </div>
                    <div class=".divstyle;checkbox">
                        <label class="quline_text w3-mobile" name="text23">
                            سوف أقوم بتطويرها من خلال الطريقة التالية:
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
                    <a class="w3-button w3-green" href="<?= base_url().'student/card_7' ?>">إكتمل الدرس</a>
                </div>
            </div>
        </div>
    </div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
</body>
</html>