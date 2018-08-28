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
// slideshow
var _createClass = function () {
    function defineProperties(target, props) {
        for (var i = 0; i < props.length; i++) {
            var descriptor = props[i];
            descriptor.enumerable = descriptor.enumerable || false;
            descriptor.configurable = true;
            if ("value" in descriptor) descriptor.writable = true;
            Object.defineProperty(target, descriptor.key, descriptor);
        }
    }
    return function (Constructor, protoProps, staticProps) {
        if (protoProps) defineProperties(Constructor.prototype, protoProps);
        if (staticProps) defineProperties(Constructor, staticProps);
        return Constructor;
    };
}();

function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
        throw new TypeError("Cannot call a class as a function");
    }
}

var $window = $(window);
var $body = $('body');

var Slideshow = function () {
    function Slideshow() {
        var _this = this;

        var userOptions = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};

        _classCallCheck(this, Slideshow);

        var defaultOptions = {
            $el: $('.slideshow'),
            showArrows: false,
            showPagination: true,
            duration: 10000,
            autoplay: true
        };

        var options = Object.assign({}, defaultOptions, userOptions);

        this.$el = options.$el;
        this.maxSlide = this.$el.find($('.slider-home')).length;
        this.showArrows = this.maxSlide > 1 ? options.showArrows : false;
        this.showPagination = options.showPagination;
        this.currentSlide = 1;
        this.isAnimating = false;
        this.animationDuration = 1200;
        this.autoplaySpeed = options.duration;
        this.interval;
        this.$controls = this.$el.find('.js-slider-home-button');
        this.autoplay = this.maxSlide > 1 ? options.autoplay : false;

        this.$el.on('click', '.js-slider-home-next', function (event) {
            return _this.nextSlide();
        });
        this.$el.on('click', '.js-slider-home-prev', function (event) {
            return _this.prevSlide();
        });
        this.$el.on('click', '.js-pagination-item', function (event) {
            if (!_this.isAnimating) {
                _this.preventClick();
                _this.goToSlide(event.target.dataset.slide);
            }
        });

        this.init();
    }

    _createClass(Slideshow, [{
        key: 'init',
        value: function init() {
            this.goToSlide(1);
            if (this.autoplay) {
                this.startAutoplay();
            }
        }
  }, {
        key: 'preventClick',
        value: function preventClick() {
            var _this2 = this;

            this.isAnimating = true;
            this.$controls.prop('disabled', true);
            clearInterval(this.interval);

            setTimeout(function () {
                _this2.isAnimating = false;
                _this2.$controls.prop('disabled', false);
                if (_this2.autoplay) {
                    _this2.startAutoplay();
                }
            }, this.animationDuration);
        }
  }, {
        key: 'goToSlide',
        value: function goToSlide(index) {
            this.currentSlide = parseInt(index);

            if (this.currentSlide > this.maxSlide) {
                this.currentSlide = 1;
            }

            if (this.currentSlide === 0) {
                this.currentSlide = this.maxSlide;
            }

            var newCurrent = this.$el.find('.slider-home[data-slide="' + this.currentSlide + '"]');
            var newPrev = this.currentSlide === 1 ? this.$el.find('.slider-home').last() : newCurrent.prev('.slider-home');
            var newNext = this.currentSlide === this.maxSlide ? this.$el.find('.slider-home').first() : newCurrent.next('.slider-home');

            this.$el.find('.slider-home').removeClass('is-prev is-next active');
            this.$el.find('.js-pagination-item').removeClass('active');

            if (this.maxSlide > 1) {
                newPrev.addClass('is-prev');
                newNext.addClass('is-next');
            }

            newCurrent.addClass('active');
            this.$el.find('.js-pagination-item[data-slide="' + this.currentSlide + '"]').addClass('active');
        }
  }, {
        key: 'nextSlide',
        value: function nextSlide() {
            this.preventClick();
            this.goToSlide(this.currentSlide + 1);
        }
  }, {
        key: 'prevSlide',
        value: function prevSlide() {
            this.preventClick();
            this.goToSlide(this.currentSlide - 1);
        }
  }, {
        key: 'startAutoplay',
        value: function startAutoplay() {
            var _this3 = this;

            this.interval = setInterval(function () {
                if (!_this3.isAnimating) {
                    _this3.nextSlide();
                }
            }, this.autoplaySpeed);
        }
  }, {
        key: 'destroy',
        value: function destroy() {
            this.$el.off();
        }
  }]);

    return Slideshow;
}();

(function () {
    var loaded = false;
    var maxLoad = 3000;

    function load() {
        var options = {
            showPagination: true
        };

        var slideShow = new Slideshow(options);
    }

    function addLoadClass() {
        $body.addClass('is-loaded');

        setTimeout(function () {
            $body.addClass('is-animated');
        }, 600);
    }

    $window.on('load', function () {
        if (!loaded) {
            loaded = true;
            load();
        }
    });

    setTimeout(function () {
        if (!loaded) {
            loaded = true;
            load();
        }
    }, maxLoad);

    addLoadClass();
})();

// allScript
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

   // singlePostHeader
// singlePost + blogPost
if ($(window).width() > 481) {
    function promoEffect() {
        var headerScale = $('.header-scale'),
            where = $(window).scrollTop();
        headerScale.css({
            'transform': 'scale(' + (100 - where / 100) / 98 + ')',
            'opacity': (1 - (where / 20) / 30)
        })
    }
    promoEffect();
    $(window).scroll(promoEffect);
} else {
    function promoEffect() {
                var headerScale = $('.header-scale'),
            where = $(window).scrollTop();
        headerScale.css({
            'transform': 'scale(' + (100 - where / 100) / 99 + ')',
            'opacity': (1 - (where / 20) / 15)
        })
    }
    promoEffect();
    $(window).scroll(promoEffect);

}

});


// postContentImg
// featuresSlider 

$('.slider.post-content-img, .slider.features-slider').slick({
    speed: 400,
    infinite: true,
    autoplay: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                arrows: false,
                slidesToShow: 1
            }
        }
                ]
});

// testimonialsSlider
$('.slider.testimonials-slider').slick({
    speed: 3000,
    infinite: true,
    autoplay: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: false,
    dots: true,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                arrows: false,
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
                ]
});

// instaFeed
var userFeed = new Instafeed({
    get: 'user',
    userId: '5534344692',
    limit: 12,
    resolution: 'standard_resolution',
    accessToken: '5534344692.1677ed0.1c4be347827a47fcb84c6c4d3ad19e38',
    sortBy: 'most-recent',
    template: '<div class="col-lg-4 col-xs-4 gallery"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',

    after: function () {
        $('.slider.insta').slick({
            accessibility: true,
            speed: 7000,
            infinite: true,
            autoplay: true,
            focusOnSelect: false,
            autoplaySpeed: 0,
            cssEase: 'linear',
            slidesToShow: 5,
            slidesToScroll: 1,
            arrows: false,
            dots: false,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        arrows: false,
                        slidesToShow: 2
                    }
    }
        ]
        });
    }
});
userFeed.run();

// map
function initMap() {
    // Styles a map in night mode.
    'use strict';
    var sulz = {
        lat: 47.285339,
        lng: 9.644274
    };
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 47.285339,
            lng: 9.644274
        },
        zoom: 15,
        styles: [
            {
                elementType: 'geometry',
                stylers: [{
                    color: '#121212'
                }]
            },
            {
                elementType: 'labels.text.stroke',
                stylers: [{
                    color: '#272e32'
                }]
            },
            {
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#403e3e'
                }]
            },
            {
                featureType: 'administrative.locality',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#909090'
                }]
            },
            {
                featureType: 'poi',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#c69c6d'
                }]
            },
            {
                featureType: 'poi.park',
                elementType: 'geometry',
                stylers: [{
                    color: '#414242'
                }]
            },
            {
                featureType: 'poi.park',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#909090'
                }]
            },
            {
                featureType: 'road',
                elementType: 'geometry',
                stylers: [{
                    color: '#c69c6d'
                }]
            },
            {
                featureType: 'road',
                elementType: 'geometry.stroke',
                stylers: [{
                    color: '#724a1e'
                }]
            },
            {
                featureType: 'road',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#edc598'
                }]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry',
                stylers: [{
                    color: '#8d6539'
                }]
            },
            {
                featureType: 'road.highway',
                elementType: 'geometry.stroke',
                stylers: [{
                    color: '#ababab'
                }]
            },
            {
                featureType: 'road.highway',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#f3b875'
                }]
            },
            {
                featureType: 'transit',
                elementType: 'geometry',
                stylers: [{
                    color: '#777777'
                }]
            },
            {
                featureType: 'transit.station',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#6b6b6b'
                }]
            },
            {
                featureType: 'water',
                elementType: 'geometry',
                stylers: [{
                    color: '#414d54'
                }]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.fill',
                stylers: [{
                    color: '#6b6b6b'
                }]
            },
            {
                featureType: 'water',
                elementType: 'labels.text.stroke',
                stylers: [{
                    color: '#272727'
                }]
            }
        ]
    });
    var marker = new google.maps.Marker({
        position: sulz,
        map: map,
        title: 'SULZ',
        icon: '../img/map/blank.png'
    });
}