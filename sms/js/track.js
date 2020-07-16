var trackdata = {};
var code = 0;
var isMobile = 0;

function getUrlVars() {
    var vars = [],
        hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

function storeData() {
    urlVars = getUrlVars();
    trackdata.subid = urlVars["subid"] || urlVars["gclid"] || "0";
    trackdata.campaignId = urlVars["campaign_id"] || "0";
    trackdata.publisherName = urlVars["publisher_name"] || "0";
    trackdata.affiliate_id = !!urlVars["gclid"] ? "google" : urlVars["affiliate_id"] || "0";
    $.get("https://kes.globalaqa.com/tracking/api/cmconversiontracking/affiliates/" + trackdata.affiliate_id + "/clicks/" + trackdata.subid + "/landed", trackdata);
};

function getDevice() {
    isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        iPhone: function() {
            return navigator.userAgent.match(/iPhone/i);
        },
        iPad: function() {
            return navigator.userAgent.match(/iPad/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };
};


$(document).ready(function() {
    getUrlVars();
    storeData();
});







