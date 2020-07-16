<?php

$PageTitle="Truth or Dare";

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
    background: url('img/tod-bg.png');
    background-size: cover;
    background-repeat: no-repeat;
}

img.top {width: 80%;padding: 12% 10%;display: block;}

h2 {
    font-weight: normal;
    text-align: center;
    color: white;
    font-size: 18px;
    line-height: 20px;
    width: 80%;
    margin: 0px auto 20px;
}

input.txt {
    width: 80%;
    display: block;
    margin: 0px auto 15px auto;
    background-color: transparent;
    border: none;
    background: rgba(255,255,255,.3);
    color: white;
    font-size: 14px;
    outline: none;
    line-height: 27px;
    padding: 6px 0;
    text-align: left;
    font-family: 'SF-UI-Display-Thin';
    text-indent: 42px;
    border-radius: 6px;
    letter-spacing: 1px;
}

#require.show {
    color: #eb6c87;
    font-family: 'Raleway', helvetica;
    font-weight: lighter;
}

.keyword-box {
    width: 90%;
    display: inline-block;
    margin: 0 5%;
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
    margin: 14px auto;
    display: block;
    width: 80%;
    font-size: 22px;
    line-height: 36px;
    text-align: center;
    letter-spacing: 1px;
    text-shadow: 2px 2px 2px #ff00f6;
    font-weight: lighter;
    border-radius: 2px;
    color: #C424C5;
    box-shadow: 0px 0px 25px #C424C5;
    background-color: white;
}

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

p.comp {margin-top: 10px;margin-bottom: 0px;padding-bottom: 20px;}

/* placeholder */
::-webkit-input-placeholder {color: white;}
:-moz-placeholder {color: white;}
::-moz-placeholder {color: white;}
:-ms-input-placeholder {color: white;}

#fullname {
    background-image: url(img/tod-user.png);
    background-position: 9px 7px;
    background-size: 22px;
    background-repeat: no-repeat;
}

#location {
    background-image: url(img/tod-location.png);
    background-position: 10px 6px;
    background-size: 20px;
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

p, a {text-align: center;font-size: 12px;color: white;}
p.comp, p.comp a {
    margin-bottom: 0px;
    padding-bottom: 20px;
    font-size: 13px;
}

container {
    width: 100%;
    display: block;
    overflow: hidden;
}

.row {
    width: 200%;
    -webkit-transition-duration: .3s;
    transition-duration: .3s;
    transition-timing-function: ease-out;
    display: inline-block;
}

.row>div {
    width: 48%;
    float: left;
    margin: 0 1%;
}

.row.clicked {
    margin-left: -100%;
}

</style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript type="text/javascript" data-cfasync="false"><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVP32D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <container>


        <img class='top' src="img/tod-title.png">


        <div class="row">
            <div class='keyword-box'>
                <div id="truth" class="keyword">TRUTH</div>
                <div id="dare" class="keyword">DARE</div>
            </div>
            <div>        
                <h2 id="text-box"></h2>

                <form id="askbongo-form">
                    <input type="text" id="fullname" name="firstname" class="txt" placeholder="Enter your Facebook name" required>
                    <p id="require">Please fill in every field</p>
                    <p style="font-weight:lighter;">Your SMS app will open automatically</p>
                    <div id="redirect">FIND OUT NOW</div>
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

var keyword='TRUTH,';


$('#truth').on('click', function(){
    keyword = 'TRUTH,';
    $('#text-box').text('Enter your name and town to play the game');
});
$('#dare').on('click', function(){
    keyword = 'DARE,';
    $('#text-box').text('Enter your name and town to receive your challenge');
});


$('.keyword').on('click', function(){
    $('.row').addClass('clicked');
    $('.active').removeClass('active');
    $(this).addClass('active');
    setTimeout(function(){ $('#fullname').focus() }, 300);
});

function generateMsg() {
    $.get("https://kes.globalaqa.com/tracking/api/cmconversiontracking/affiliates/" + trackdata.affiliate_id + "/clicks/" + trackdata.subid + "/submitted", function(resp) {
        console.log(resp);
        code = resp.slotId;
        getDevice();
        if (isMobile.any()) {
            if (isMobile.iPhone()) {
                window.location.replace("sms:" + shortcode + "&body=" + code + " - " + keyword + " " + $("#fullname").val());
            } else if (isMobile.Android()) {
                window.location.replace("sms:" + shortcode + "?body=" + code + " - " + keyword + " " + $("#fullname").val());
            }
        } else {
            alert(code + " " + "Use your mobile device to text on " + shortcode + " with " + keyword + " " + $("#fullname").val());
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
