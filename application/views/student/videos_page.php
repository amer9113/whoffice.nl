<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="NL">
<head>
    <?php require(realpath(dirname(__FILE__) . '/..') . '/inc/head.php') ?>
    <title>ONA-Maatschappij</title>
    <style>
        .vediosmall{
            width: 360px;
            height: 330px;

            background-color: #a51e22;
            color: white;
            font-size: 22px;
            display: inline-block;
            padding: 0px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.69);
        }
        .vediobig{
            display: block;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            padding: 20px;
            padding-left: 30px;
            padding-right: 30px;
            background-color: rgba(101, 101, 101, 0.53);       
        }
    </style>
</head>
<body>
    <div class="parallax imgbc centerpagecnt2">
        <div class="w3-container w3-center w3-mobile">
            <button class="vediosmall" id="vedio1" onclick="changeclass(this)"> 
                <video width="95% ; max-width:300px" controls id="vedio">
                    <source src="<?= base_url().'video/cv.mp4'; ?>"  type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="imgtext1 w3-large">CV</div> 
            </button> &nbsp;
            <button class="vediosmall" id="vedio2" onclick="changeclass(this)"> 
                <video width="95% ; max-width:300px" controls id="vedio">
                    <source src="<?= base_url().'video/hbo.mp4'; ?>"  type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="imgtext1 w3-large">HBO</div> 
            </button> &nbsp;
            <button class="vediosmall" id="vedio3" onclick="changeclass(this)"> 
                <video width="95% ; max-width:300px" controls id="vedio">
                    <source src="<?= base_url().'video/mbo.mp4'; ?>"  type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="imgtext1 w3-large">MBO</div> 
            </button> &nbsp;
            <button class="vediosmall" id="vedio4" onclick="changeclass(this)"> 
                <video width="95% ; max-width:300px" controls id="vedio">
                    <source src="<?= base_url().'video/salaris.mp4'; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="imgtext1 w3-large">Salaris</div> 
            </button> &nbsp;
            <br>
            <button class="vediosmall" id="vedio5" onclick="changeclass(this)"> 
                <video width="95% ; max-width:300px" controls id="vedio">
                    <source src="<?= base_url().'video/inkomen.mp4'; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="imgtext1 w3-large">Inkomen</div> 
            </button> &nbsp;
            <button class="vediosmall" id="vedio6" onclick="changeclass(this)"> 
                <video width="95% ; max-width:300px" controls id="vedio">
                    <source src="<?= base_url().'video/inkomen2.mp4'; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="imgtext1 w3-large">Inkomen2</div> 
            </button> &nbsp;
            <button class="vediosmall" id="vedio7" onclick="changeclass(this)"> 
                <video width="95% ; max-width:300px" controls id="vedio">
                    <source src="<?= base_url().'video/edu_system1.mp4'; ?>"  type="video/mp4">.vediosmall
                    Your browser does not support the video tag.
                </video>
                <div class="imgtext1 w3-large">نظام التعليم 1</div> 
            </button> &nbsp;
            <button class="vediosmall" id="vedio8" onclick="changeclass(this)"> 
                <video width="95% ; max-width:300px" controls id="vedio">
                    <source src="<?= base_url().'video/edu_system2.mp4'; ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="imgtext1 w3-large">نظام التعليم 2</div> 
            </button> &nbsp;
            <br><br>
            <!--<video controls>-->
            <!--        <source src="<?= base_url().'video/edu_system2.mp4'; ?>" type="video/x-ms-wmv">-->
            <!--        Your browser does not support the video tag.-->
            <!--    </video>-->
        </div>
    </div>
<?php require(realpath(dirname(__FILE__) . '/..') . '/inc/scripts.php') ?>
<script>
    function changeclass(mid){
        var myid = mid;
        var classname = myid.className;
        if(classname == "vediobig"){ 
            myid.className="vediosmall" ; 
            var vid = myid.firstElementChild ;
            vid.pause();
        }
        else{ 
            myid.className="vediobig" ; 
        }
    }
</script>
</body>
</html>