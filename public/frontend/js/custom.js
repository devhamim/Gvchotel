"use strict"; // Start of use strict

function accrodion () {
    if ($('.accrodion-grp').length) {
        var accrodionGrp = $('.accrodion-grp');
        accrodionGrp.each(function () {
            var accrodionName = $(this).data('grp-name');
            var Self = $(this);
            var accordion = Self.find('.accrodion');
            Self.addClass(accrodionName);
            Self.find('.accrodion .accrodion-content').hide();
            Self.find('.accrodion.active').find('.accrodion-content').show();
            accordion.each(function() {
                $(this).find('.accrodion-title').on('click', function () {
                    if ($(this).parent().hasClass('active') === false ) {
                        $('.accrodion-grp.'+accrodionName).find('.accrodion').removeClass('active');
                        $('.accrodion-grp.'+accrodionName).find('.accrodion').find('.accrodion-content').slideUp();
                        $(this).parent().addClass('active');
                        $(this).parent().find('.accrodion-content').slideDown();
                    };


                });
            });
        });

    };
}

function thmMailchimp() {
    if ($('.mailchimp-form').length) {
        $('.mailchimp-form').each(function() {
            var mailChimpWrapper = $(this);

            mailChimpWrapper.validate({ // initialize the plugin
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                },
                submitHandler: function(form) {
                    // sending value with ajax request
                    $.post($(form).attr('action'), $(form).serialize(), function(response) {
                        $(form).parent().find('.result').append(response);
                        $(form).find('input[type="text"]').val('');
                        $(form).find('input[type="email"]').val('');
                        $(form).find('textarea').val('');
                    });
                    return false;
                }
            });
        });
    };
}


function thmOwlCarousel() {
    if ($('.gallery-carousel').length) {
        $('.gallery-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            center: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            dots: false,
            autoWidth: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                667: {
                    items: 3
                },
                1024: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });
    };
    if ($('.testimonials-carousel').length) {
        $('.testimonials-carousel').owlCarousel({
            loop: true,
            margin: 90,
            nav: false,
            center: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            dots: true,
            autoWidth: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 0
                },
                480: {
                    items: 1,
                    margin: 30
                },
                667: {
                    items: 2,
                    margin: 30
                },
                768: {
                    margin: 30
                },
                1024: {
                    items: 3,
                    margin: 40
                },
                1200: {
                    items: 3
                }
            }
        });
    };
    if ($('.testimonials-carousel-style-two').length) {
        $('.testimonials-carousel-style-two').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            center: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            dots: true,
            autoWidth: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    };
    if ($('.booking-page-gallery').length) {
        $('.booking-page-gallery').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            center: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            dots: false,
            autoWidth: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    };
}

function galleryMasonaryLayout() {
    if ($('.masonary-layout').length) {
        $('.masonary-layout').isotope({
            layoutMode: 'masonry'
        });
    }

    if ($('.post-filter').length) {
        $('.post-filter li').children('span').on('click', function() {
            var Self = $(this);
            var selector = Self.parent().attr('data-filter');
            var postFilterLi = $('.post-filter li');
            postFilterLi.children('span').parent().removeClass('active');
            Self.parent().addClass('active');


            $('.filter-layout').isotope({
                filter: selector,
                animationOptions: {
                    duration: 500,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    }

    if ($('.post-filter.has-dynamic-filter-counter').length) {
        // var allItem = $('.single-filter-item').length;

        var activeFilterItem = $('.post-filter.has-dynamic-filter-counter').find('li');

        activeFilterItem.each(function() {
            var filterElement = $(this).data('filter');
            var count = $('.gallery-content').find(filterElement).length;

            $(this).children('span').append('<span class="count"><b>' + count + '</b></span>');
        });
    };
}


function thmbxSlider() {
    if ($('.instafeed-slider').length) {
        $('.instafeed-slider').bxSlider({
            minSlides: 1,
            maxSlides: 6,
            slideWidth: 195,
            slideMargin: 0,
            useCSS: false,
            ticker: true,
            autoHover:true,
            tickerHover:true,
            speed: 100000,
            infiniteLoop: true
        });
    };
}



function stickyHeader() {
    if ($('.stricky').length) {
        var strickyScrollPos = 100;
        var stricky = $('.stricky');
        if ($(window).scrollTop() > strickyScrollPos) {
            stricky.removeClass('slideIn animated').addClass('stricky-fixed slideInDown animated');
            $('.scroll-to-top').fadeIn(500);
        } else if ($(this).scrollTop() <= strickyScrollPos) {
            stricky.removeClass('stricky-fixed slideInDown animated').addClass('slideIn animated');
            $('.scroll-to-top').fadeOut(500);
        }
    };
}


function thmLightBox() {
    if ($('.img-popup').length) {
        var groups = {};
        var imgPop = $('.img-popup');
        imgPop.each(function() {
            var id = parseInt($(this).attr('data-group'), 10);

            if (!groups[id]) {
                groups[id] = [];
            }

            groups[id].push(this);
        });


        $.each(groups, function() {

            $(this).magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                closeBtnInside: false,
                gallery: { enabled: true }
            });

        });

    };
}

function thmCounter() {
    if ($('.counter').length) {
        $('.counter').counterUp({
            delay: 10,
            time: 3000
        });
    };
}

function thmScrollAnim() {
    if ($('.wow').length) {
        var wow = new WOW({
            mobile: false
        });
        wow.init();
    };
}

// function contactFormValidation() {
//     if ($('.contact-form').length) {
//         $('.contact-form').validate({ // initialize the plugin
//             rules: {
//                 name: {
//                     required: true
//                 },
//                 email: {
//                     required: true,
//                     email: true
//                 },
//                 message: {
//                     required: true
//                 },
//                 subject: {
//                     required: true
//                 }
//             },
//             submitHandler: function(form) {
//                 // sending value with ajax request
//                 $.post($(form).attr('action'), $(form).serialize(), function(response) {
//                     $(form).find('.form-result').append(response);
//                     $(form).find('input[type="text"]').val('');
//                     $(form).find('input[type="email"]').val('');
//                     $(form).find('textarea').val('');
//                     console.log(response);
//                 });
//                 return false;
//             }
//         });
//     }
// }

function thmVideoPopup() {
    if ($('.video-popup').length) {
        $('.video-popup').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: true,

            fixedContentPos: false
        });
    };
}

function scrollToTarget() {
    if ($('.scroll-to-target').length) {
        $(".scroll-to-target").on('click', function() {
            var target = $(this).attr('data-target');
            // animate
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1000);

        });
    }
}

function mobileNavToggle () {
    if ($('#main-nav-bar .navbar-nav .sub-menu').length) {
        $('#main-nav-bar .navbar-nav .sub-menu').parent('li').children('a').append(function () {
             return '<button class="sub-nav-toggler"><i class="fa fa-angle-down"></i></button>';
        });
        $('#main-nav-bar .navbar-nav .sub-nav-toggler').on('click', function () {
            var Self = $(this);
            Self.parent().parent().children('.sub-menu').slideToggle();
            return false;
        });

    };
}

function sideNavToggler () {
    if ($('.side-navigation').length) {
        $('.side-nav-opener').on('click', function () {
            $('.side-navigation').addClass('open');
        });
        $('.side-navigation-close-btn').on('click', function () {
            $('.side-navigation').removeClass('open');
        });
    };
}


function SmoothMenuScroll () {
    var anchor = $('.scrollToLink');
    if(anchor.length){
        anchor.children('a').bind('click', function (event) {
            if ($(window).scrollTop() > 10) {
                var headerH = '45';
            }else {
                var headerH = '125';
            }
            var target = $(this);
            $('html, body').stop().animate({
                scrollTop: $(target.attr('href')).offset().top - headerH + 'px'
            }, 1200, 'easeInOutExpo');
            anchor.removeClass('current');
            target.parent().addClass('current');
            event.preventDefault();
        });
    }
}
function OnePageMenuScroll () {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 100) {
        var menuAnchor = $('.mainmenu.one-page-scroll-menu .scrollToLink').children('a');
        menuAnchor.each(function (){
            // grabing section id dynamically
            var sections = $(this).attr('href');
            $(sections).each(function() {
                // checking is scroll bar are in section
                if ($(this).offset().top <= windscroll + 100) {
                    // grabing the dynamic id of section
                    var Sectionid = $(sections).attr('id');
                    // removing current class from others
                    $('.mainmenu').find('li').removeClass('current');
                    // adding current class to related navigation
                    $('.mainmenu').find('a[href*=\\#'+Sectionid+']').parent().addClass('current');
                }
            });
        });
    } else {
        $('.mainmenu.one-page-scroll-menu li.current').removeClass('current');
        $('.mainmenu.one-page-scroll-menu li:first').addClass('current');
    }
}

function handlePreloader() {
    if($('.preloader').length){
        $('body').removeClass('active-preloader-ovh');
        $('.preloader').fadeOut();
    }
}


function pogressbarAnim () {
    if ($('.single-progress-bar .pogress-wow').length) {
        var wow = new WOW({
            boxClass:     'pogress-wow',      // default
            animateClass: 'animated',
            mobile: true
        });
        wow.init();
    }
}

function toggleTabWithSwitch () {

    var tabSwitch = $('.switch-toggler-list label.switch');
    var monthTabTitle = $('.switch-toggler-list li.month');
    var yearTabTitle = $('.switch-toggler-list li.year');
    // var yearTabTitle = $('.switch-toggler-list li.year');
    monthTabTitle.on('click', function () {
        tabSwitch.removeClass('off');
        tabSwitch.addClass('on');
    });
    yearTabTitle.on('click', function () {
        tabSwitch.removeClass('on');
        tabSwitch.addClass('off');
    });
}

function searchPopup () {
    if ($('.popup-with-zoom-anim').length) {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });
    }
}


function bootstrapAnimatedLayer() {
    if ($('#minimal-bootstrap-carousel').length) {
        /* Demo Scripts for Bootstrap Carousel and Animate.css article
         * on SitePoint by Maria Antonietta Perna
         */

        //Function to animate slider captions
        function doAnimations(elems) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';

            elems.each(function() {
                var $this = $(this),
                    $animationType = $this.data('animation');
                $this.addClass($animationType).one(animEndEv, function() {
                    $this.removeClass($animationType);
                });
            });
        }

        //Variables on page load
        var $myCarousel = $('#minimal-bootstrap-carousel'),
            $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

        //Initialize carousel
        $myCarousel.carousel({
            interval: 7000
        });

        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);

        //Pause carousel
        $myCarousel.carousel('pause');


        //Other slides to be animated on carousel slide event
        $myCarousel.on('slide.bs.carousel', function(e) {
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });
    }
}

function countDownTimer () {
    if ($('.countdown-box').length) {
        var countDownBox = $('.countdown-box');
        countDownBox.each(function () {
            var Self = $(this);
            var countDate = Self.data('countdown-time'); // getting date

            Self.countdown(countDate, function(event) {
                $(this).html('<li> <div class="box"> <h4>'+ event.strftime('%D') +'</h4> <span>Days</span> </div> </li> <li> <div class="box"> <h4>'+ event.strftime('%H') +'</h4> <span>Hours</span> </div> </li> <li> <div class="box"> <h4>'+ event.strftime('%M') +'</h4> <span>Minutes</span> </div> </li> <li> <div class="box"> <h4>'+ event.strftime('%S') +'</h4> <span>Seconds</span> </div> </li> ');
            });
        });



    };
}

function typeEffect () {
    if ($(".typed").length) {
        $(".typed").typed({
            stringsElement: $('.typed-strings'),
            typeSpeed: 200,
            backDelay: 1500,
            loop: true,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function () { null; },
            resetCallback: function () { newTyped(); }
        });
    };
}

// instance of fuction while Document ready event
jQuery(document).on('ready', function() {
    (function($) {
        thmMailchimp();
        thmLightBox();
        thmCounter();
        contactFormValidation();
        scrollToTarget();
        thmVideoPopup();
        mobileNavToggle();
        sideNavToggler();
        SmoothMenuScroll();
        toggleTabWithSwitch();
        bootstrapAnimatedLayer();
        searchPopup();
        accrodion();
        countDownTimer();
        typeEffect();
    })(jQuery);
});

// instance of fuction while Window Load event
jQuery(window).on('load', function() {
    (function($) {
        thmbxSlider();
        galleryMasonaryLayout();
        handlePreloader()
        // thmScrollAnim();
        pogressbarAnim();
        thmOwlCarousel();
    })(jQuery);
});

// instance of fuction while Window Scroll event
jQuery(window).on('scroll', function() {
    (function($) {
        stickyHeader();
        OnePageMenuScroll();
    })(jQuery);
});
