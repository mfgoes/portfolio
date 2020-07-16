<?php

$PageTitle="Happiness";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }
include_once('header.php');
?>

<style>

@font-face {
    font-family: 'SF-UI-Display-Thin';
    src: url('css/SF-UI-Display-Thin.otf');
}

body {
    background: white;
}

img.top {width: 100%;padding: 0%;display: block;}

h2 {
    font-weight: normal;
    text-align: center;
    font-size: 18px;
    line-height: 20px;
    width: 80%;
    display: block;
    margin: 20px auto;
}

input.txt {
    width: 80%;
    display: block;
    margin: 0px auto 15px auto;
    background-color: transparent;
    border: none;
    background-color: #d6ffef;
    color: #007d58;
    font-size: 14px;
    outline: none;
    line-height: 27px;
    padding: 6px 0;
    text-align: center;
    border-radius: 6px;
    letter-spacing: .2px;
    font-weight: 600;
}

#require.show {
    color: #eb6c87;
    font-family: 'Raleway', helvetica;
    font-weight: lighter;
}

.keyword-box {
    display: inline-block;
    margin: 0 5%;
}

.keyword-box>div {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.keyword-box img {
	width: 18%;
    border-radius: 50%;
}

.keyword-box img.active {
    box-shadow: 0 0 6px 4px #3cffb5;
}

.keyword {
    width: 80%;
    text-transform: uppercase;
    text-align: center;
    font-family: 'SF-UI-Display-Thin';
    color:white;
    float: left;
    border: 4px solid white;
    margin: 10px 10%;
    padding: 10px 0;
    box-sizing: border-box;
    -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}

#redirect {
    width: 80%;
    margin: 0px auto;
    padding: 10px 0;
    background: #3cffb5;
    color: white;
    border-radius: 4px;
    text-align: center;
    font-weight: bolder;
    font-size: 22px;
}

p, a {text-align: center;font-size: 12px;color: black;}


@-webkit-keyframes glowing {
  0% {box-shadow: inset 0 0 3px #ff00f6, 0 0 3px #ff00f6; }
  50% {box-shadow: inset 0 0 20px 4px #ff00f6, 0 0 20px 4px #ff00f6; }
  100% {box-shadow: inset 0 0 3px #ff00f6, 0 0 3px #ff00f6; }
}

@-moz-keyframes glowing {
  0% {box-shadow: inset 0 0 3px #ff00f6, 0 0 3px #ff00f6; }
  50% {box-shadow: inset 0 0 20px 4px #ff00f6, 0 0 20px 4px #ff00f6; }
  100% {box-shadow: inset 0 0 3px #ff00f6, 0 0 3px #ff00f6; }
}

@-o-keyframes glowing {
  0% {box-shadow: inset 0 0 3px #ff00f6, 0 0 3px #ff00f6; }
  50% {box-shadow: inset 0 0 20px 4px #ff00f6, 0 0 20px 4px #ff00f6; }
  100% {box-shadow: inset 0 0 3px #ff00f6, 0 0 3px #ff00f6; }
}

@keyframes glowing {
  0% {box-shadow: inset 0 0 3px #ff00f6, 0 0 3px #ff00f6; }
  50% {box-shadow: inset 0 0 20px 4px #ff00f6, 0 0 20px 4px #ff00f6; }
  100% {box-shadow: inset 0 0 3px #ff00f6, 0 0 3px #ff00f6; }
}

p.comp, p.comp a {margin-top: 10px;margin-bottom: 0px;padding-bottom: 20px;color: black;}

/* placeholder */
::-webkit-input-placeholder {color: #007d58;}
:-moz-placeholder {color: #007d58;}
::-moz-placeholder {color: #007d58;}
:-ms-input-placeholder {color: #007d58;}

#fullname {
    background-image: url('img/happy-user.png');
    background-position: 9px 7px;
    background-size: 22px;
    background-repeat: no-repeat;
}

.keyword {
  font-weight: 400;
      font-size: 20px;
    letter-spacing: 2px;
  border: 3px solid #ffffff;
  box-shadow: #ffffff 0px 0px 0.075em, #ffffff 0px 0px 0.15em, #ff00dd 0px 0px 0.3em, #ff00dd 0px 0px 0.52em;
}

.keyword.active {
  text-shadow: #ffffff 0px 0px 0.3em, #ffffff 0px 0px 0.6em, #ffffff 0px 0px 0.9em, #ff00dd 0px 0px 0.6em, #ff00dd 0px 0px 1.04em, #ff00dd 0px 0px 1.2em, #ff00dd 0px 0px 1.5em;
  box-shadow: #ffffff 0px 0px 0.15em, #ffffff 0px 0px 0.3em, #ffffff 0px 0px 0.44em, #ff00dd 0px 0px 0.6em, #ff00dd 0px 0px 1.04em, #ff00dd 0px 0px 1.2em, #ff00dd 0px 0px 1.5em, inset #ff00dd 0 0 1.3em;
  background: rgba(255,0,221,.8);
}

container {
    width: 100%;
    display: block;
    overflow: hidden;
}

.row {
    width: 300%;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    transition-timing-function: ease-out;
    display: inline-block;
}

.row>div {
    width: calc(91% /3);
    float: left;
    margin: 0 1.5%;
}

.row.clicked1 {
    margin-left: -100%;
} 

.row.clicked2 {
    margin-left: -200%;
}

.next {
    display: block;
    width: 80%;
    margin: 30px auto;
    padding: 10px 0;
    background: #3cffb5;
    color: white;
    border-radius: 4px;
    text-align: center;
    font-weight: bolder;
    font-size: 22px;
}

h3 {
    text-align: center;
    margin: 30px 0 20px;
    font-weight: 100;
}

#automatic {
    color: #3cffb5;
}

</style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript type="text/javascript" data-cfasync="false"><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVP32D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <container>


        <img class='top' src="img/happy.png">


        <div class="row">
            <div class='keyword-box'>
            	<h3>How happy are you at home?</h3>
                <div>
    	        	<img src="img/icon1.png" id='10%' class="btn btn1">
    	        	<img src="img/icon2.png" id='30%' class="btn btn1">
    	        	<img src="img/icon3.png" id='50%' class="btn btn1">
    	        	<img src="img/icon4.png" id='80%' class="btn btn1">
    	        	<img src="img/icon5.png" id='100%' class="btn btn1">
                </div>
                <div class='next next1'>Next</div>
            </div>
            <div class='keyword-box'>
                <h3>How happy are you at work?</h3>
                <div>
                    <img src="img/icon1.png" id='10%' class="btn btn2">
                    <img src="img/icon2.png" id='30%' class="btn btn2">
                    <img src="img/icon3.png" id='50%' class="btn btn2">
                    <img src="img/icon4.png" id='80%' class="btn btn2">
                    <img src="img/icon5.png" id='100%' class="btn btn2">
                </div>
                <div class='next next2'>Next</div>
            </div>
            <div>        
                <h2>Fill in your name to access your full report and receive your comprehensive guide to becoming a <strong>better you</strong></h2>
            <div>        
                <form id="askbongo-form">
                    <input type="text" id='fullname' name="firstname" class="txt" placeholder="Enter your Facebook name" required>
                    <p id='require'>Please fill in every field</p>
                    <div id='redirect'>Send</div>
                    <p id='automatic'>You'll be redirected to your SMS</p>

                </form>

                <?php 
                include_once('compliance.php');
                ?>


            </div>
        </div>
    </container>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/track.js"></script>

<script type="text/javascript">

var keyword='HAPPINESS';
var home = '';
var work = '';

$('.keyword').on('click', function(){
    $('.active').removeClass('active');
    $(this).addClass('active');
    setTimeout(function(){ $('#fullname').focus() }, 300);
});

$('.btn').on('click', function(){
    $('.active').removeClass('active');
    $(this).addClass('active');
});

$('.btn1').on('click', function(){
    home = $(this).attr('id');
});

$('.btn2').on('click', function(){
    work = $(this).attr('id');
});

$('.next1').on('click', function(){
    if ($('.btn1').hasClass('active')) {
        $('.row').addClass('clicked1');
    }
});


$('.next2').on('click', function(){
    if ($('.btn2').hasClass('active')) {
        $('.row').addClass('clicked2');
    }
});

function generateMsg() {
    $.get("https://kes.globalaqa.com/tracking/api/cmconversiontracking/affiliates/" + trackdata.affiliate_id + "/clicks/" + trackdata.subid + "/submitted", function(resp) {
        console.log(resp);
        code = resp.slotId;
        getDevice();
        if (isMobile.any()) {
            if (isMobile.iPhone()) {
                window.location.replace("sms:" + shortcode + "&body=" + code + " - " + keyword + ": " + "home " + home + ", work " + work + " " +$("#fullname").val());
            } else if (isMobile.Android()) {
                window.location.replace("sms:" + shortcode + "?body=" + code + " - " + keyword + ": " + "home " + home + ", work " + work + " " + $("#fullname").val());
            }
        } else {
            alert(code + " " + "Use your mobile device to text on " + shortcode + " with " + keyword + ": " + "home " + home + ", work " + work + " " + $("#fullname").val());
        }
    }, 'jsonp');
};

$('#redirect').on('click', function(){
    if (!$('#fullname').val()) {
        $('#require').addClass('show');
    } else {
        generateMsg();    
    };
});

</script>

<?php 
include_once('footer.php');
?>
