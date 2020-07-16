<?php

$PageTitle="Bump";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }
include_once('header.php');
?>

<style>
body {
    background: linear-gradient(to right, #33a8f2, #28bcc6);
}

* {text-align: center;color: white}
img.top {width: 100%;}
.row {padding-bottom: 30px;}

h2 {
    font-weight: lighter;
    text-align: center;
    margin: 12px 0;
    color: white;
    font-size: 21px;
    font-family: helvetica;
    line-height: 22px;

}

input.txt {
    width: 80%;
    display: block;
    margin: 0px auto 15px auto;
    border: none;
    font-size: 14px;
    outline: none;
    line-height: 27px;
    background-color: white;
    padding: 4px 0;
    text-align: left;
    color: black;
    text-indent: 48px;
}

p.comp {
    margin-top: 30px;
}

#fullname {
    background-image: url(img/bump-user.png);
    margin-bottom: 5px;
    background-size: 39px;
    background-repeat: no-repeat;
}


#location {
    background-image: url(img/bump-location.png);
    margin-bottom: 5px;
    background-size: 39px;
    background-repeat: no-repeat;
}



#require.show {
        margin: 0;
    color: #eb6c87;
    font-family: 'Raleway', helvetica;
    font-weight: lighter;
}

#redirect {
    background-color: #1d82ff;
    color: white;
    font-weight: lighter;
    width: 80%;
    font-size: 20px;
    margin: 0 auto;
    padding: 14px;
    box-sizing: border-box;
    border-radius: 6px;
}

#automatic {
    font-weight: lighter;
    margin: 6px;
    font-size: 14px;
}

</style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript type="text/javascript" data-cfasync="false"><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVP32D"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <container>
        <img class='top' src="img/bump.png" />

        <div class="row">
            <div>        
                <h2 id='headline'>Which hottie will you<br>bump into, next?</h2>
                <form id="askbongo-form">
                    <input type="text" id='fullname' name="firstname" class="txt" placeholder="Enter your Facebook name" required>
                    <input type="text" id='location' name="location" class="txt" placeholder="Enter your location" required>

                    <p id='require'>Please fill in every field</p>
                    <p id='automatic'>Your SMS app will open automatically</p>
                    <div id='redirect'>Start Bumping</div>
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

var keyword='Bump,';

function generateMsg() {
    $.get("https://kes.globalaqa.com/tracking/api/cmconversiontracking/affiliates/" + trackdata.affiliate_id + "/clicks/" + trackdata.subid + "/submitted", function(resp) {
        console.log(resp);
        code = resp.slotId;
        getDevice();
        if (isMobile.any()) {
            if (isMobile.iPhone()) {
                window.location.replace("sms:" + shortcode + "&body=" + code + " - " + keyword + " " + $("#fullname").val() + ", " + $("#location").val());
            } else if (isMobile.Android()) {
                window.location.replace("sms:" + shortcode + "?body=" + code + " - " + keyword + " " + $("#fullname").val() + ", " + $("#location").val());
            }
        } else {
            alert(code + " " + "Use your mobile device to text on " + shortcode + " with " + keyword + " " + $("#fullname").val() + " and " + $("#location").val());
        }
    }, 'jsonp');
};

$('#redirect').on('click', function(){
    if (!$('#fullname').val() || !$('#location').val()) {
        $('#require').addClass('show');
    } else {
        generateMsg();    
    };
});


$(document).ready(function(){
    setTimeout(function(){
        $('#headline').text('');
        $('#headline').append('Text your name and town<br>to start bumping')
    }, 2500)
});

</script>

<?php 
include_once('footer.php');
?>
