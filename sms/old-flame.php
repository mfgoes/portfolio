<?php

$PageTitle="Old Flame";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }
include_once('header.php');
?>

<style>
body {
    background: white;
}

* {text-align: center;}
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
    border: 2px solid #29bdd2;
    font-size: 14px;
    outline: none;
    line-height: 27px;
    padding: 6px 0;
    text-align: left;
    text-indent: 42px;
    border-radius: 6px;
    letter-spacing: 1px;
}

#fullname {
    background: url(img/of-name.png);
    margin-bottom: 5px;
    background-position: 8px;
    background-size: 25px;
    background-repeat: no-repeat;
}


#location {
    background: url(img/of-location.png);
    margin-bottom: 5px;
    background-position: 10px;
    background-size: 20px;
    background-repeat: no-repeat;
}



#require.show {
        margin: 0;
    color: #eb6c87;
    font-family: 'Raleway', helvetica;
    font-weight: lighter;
}

#redirect {
    background-color: #1f4092;
    color: white;
    font-weight: bolder;
    width: 80%;
    margin: 0 auto;
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
        <img class='top' src="img/love-reunited.png" />

        <div class="row">
            <div>        
                <form id="askbongo-form">
                    <input type="text" id='fullname' name="firstname" class="txt" placeholder="Enter your Facebook name" required>
                    <input type="text" id='location' name="location" class="txt" placeholder="Enter your location" required>

                    <p id='require'>Please fill in every field</p>
                    <p id='automatic'>Your SMS app will open automatically</p>
                    <div id='redirect'>RECONNECT NOW</div>
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

var keyword='Old flame,';

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

</script>

<?php 
include_once('footer.php');
?>