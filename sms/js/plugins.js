// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// country specific
var shortcode = "19726646";

$(document).ready(function() {
    $('#comp').append("<strong style=\'font-weight: bolder;\'>$4.50 per 160 character msg sent.</strong><br>Helpline 1800244616 - To opt out of marketing messages send STOP to 0438528233. - Under 18? Ask account holder first.<br><a href=\'http://askbongo.com/au197/\'>www.askbongo.com</a><br><a href=\'http://askbongo.com/au/tc/\'>Terms & Conditions</a><br>Bongo Operations Pty Ltd");
});
