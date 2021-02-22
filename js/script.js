/*---------------------------------------

Project: Sulz - Creative Portfolio Template 
TemplateVersion: 1.0
Author: YasirKareem

01. Slideshow
02. All Script
    02.1 Navbar Fixed Top
    02.2 Navbar Toggle
    02.3 Navbar Collapse Hide
    02.4 State
    02.5 Scroll Top 
    02.6 Scroll Down
03. Single Post Header  // Single Post + Blog Post
04. Post Content Img + Features Slider 
05. Testimonials Slider
06. Insta Feed
07. Map

---------------------------------------*/

//navbar 
$(function () {
    'use strict';
    // navbarFixedTop
    $(window).scroll(function () {
        if ($('.navbar').offset().top > 50) {
            $('.navbar-fixed-top').addClass('top-nav');
        } else {
            $('.navbar-fixed-top').removeClass('top-nav');
        }
    });

    // navbarToggle
    $('.menu-icon').on('click', function () {
        $('.navbar-toggle').toggleClass('change');
    });

    // navbarCollapseHide
    $('a.click-close').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });

// scrollTop 
    var scrollButton = $(".scroll-top");
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 400) {
            scrollButton.show();
        } else {
            scrollButton.hide();
        }
    });
    scrollButton.on('click', function () {
        $("html,body").animate({
            scrollTop: 0
        }, 2000);
    });
    
// scrollDown
    $(".scroll-down").on('click', function () {
        $('html,body').animate({
                scrollTop: $("#our-story").offset().top
            },
            2000);
    });

});