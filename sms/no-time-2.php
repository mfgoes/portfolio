<?php

$PageTitle="NO TIME";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }
include_once('header.php');
?>

<style>
body {
    background: #ff004e;
}

* {text-align: center;color: white;}
img.top {width: 100%;}

h2 {
    font-weight: normal;
    text-align: center;
    color: white;
    font-size: 18px;
    line-height: 20px;
}

input.txt {
    width: 80%;
    display: block;
    margin: 0px auto 15px auto;
    font-size: 14px;
    outline: none;
    line-height: 27px;
    padding: 6px 0;
    text-align: left;
    text-indent: 46px;
    border: none;
    letter-spacing: 1px;
    color: white;
    background-color: #ff457e;
}

input::placeholder {color: white;}

#fullname {
    background-image: url(img/nt-name.png);
    margin-bottom: 10px;
    background-position: 12px;
    background-size: 25px;
    background-repeat: no-repeat;
}


#location {
    background-image: url(img/nt-location.png);
    margin-bottom: 5px;
    background-position: 9px;
    background-size: 30px;
    background-repeat: no-repeat;
}



#require.show {
    margin: 0;
    color: white;
    font-family: 'Raleway', helvetica;
    font-weight: lighter;
}

#redirect {
    background-color: #ff9b06;
    color: white;
    font-weight: bolder;
    width: 80%;
    margin: 16px auto 8px;
    padding: 10px;
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
        <img class='top' src="img/no-time.png" />

        <div class="row">
            <div>        
                <form id="askbongo-form">
                    <input type="text" id='fullname' name="firstname" class="txt" placeholder="Enter your FB username" required>
                    <p id='require'>Please fill in every field</p>
                    <div id='redirect'>FIND OUT WHO THEY ARE NOW!</div>
                    <p id='automatic'>Your are going to be redirected to your SMS</p>
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

var keyword='No time,';

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
