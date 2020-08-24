(function ($) {
    "use strict";

    jQuery(document).on('ready', function () {

        // Header Sticky
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 120) {

                $('.navbar-area-three').addClass("is-sticky-three");
                $('.navbar-area').addClass("is-sticky");
            } else {
                $('.navbar-area-three').removeClass("is-sticky-three");
                $('.navbar-area').removeClass("is-sticky");
            }
        });

        // Mean Menu
        jQuery('.mean-menu').meanmenu({
            meanScreenWidth: "991"
        });

    });

    // banner Typed Js

    $(function () {
        $(".typed").typed({
            strings: ["Phát triển phần mềm.", "Phát triển ứng dụng.", "Phát triển web."],
            stringsElement: null,
            typeSpeed: 90,
            startDelay: 900,
            backSpeed: 60,
            backDelay: 1000,
            loop: true,
            loopCount: 100,
            showCursor: false,
            cursorChar: "|",
            attr: null,
            contentType: 'html',
            callback: function () {},
            preStringTyped: function () {},
            onStringTyped: function () {},
            resetCallback: function () {}
        });
    });


    // Home-logo
    $('.logo-slider-wrapper').owlCarousel({
        loop: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 0,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1200: {
                items: 5,
            }
        }
    });

    // Clients Slider
    $('.client-slider-wrapper').owlCarousel({
        loop: true,
        dots: false,
        margin: 30,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        nav: true,
        navText: [

            "<i class='fas fa-arrow-left'></i>",
            "<i class='fas fa-arrow-right'></i>"
        ],
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 1,
            },
            1200: {
                items: 2,
            }
        }
    });

    // Vedio-add
    $(document).ready(function () {
        $(".venobox").venobox({
            framewidth: "600px",
            frameheight: "400px",
            border: "none",
            bgcolor: "none",
            titleattr: "data-title",
            numeratio: true,
            infinigall: false,
        });
    });
    // About Fan fact img mousemove
    $('html').mousemove(function (e) {

        var wx = $(window).width();
        var wy = $(window).height();

        var x = e.pageX - this.offsetLeft;
        var y = e.pageY - this.offsetTop;

        var newx = x - wx / 2;
        var newy = y - wy / 2;

        $('.area-img-wrapper img').each(function () {
            var speed = $(this).attr('data-speed');
            if ($(this).attr('data-revert')) speed *= -1;
            TweenMax.to($(this), 1, {
                x: (1 - newx * speed),
                y: (1 - newy * speed)
            });

        });

    });


    // Clients Slider
    $('.trusted-by-partner-logo-wrapper').owlCarousel({
        loop: true,
        dots: false,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 0,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            768: {
                items: 3,
            },
            1200: {
                items: 5,
            }
        }
    });
    // Clients Slider
    $('.challenge-area-slider').owlCarousel({
        loop: true,
        dots: true,
        autoplayHoverPause: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 30,
        nav: false,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            768: {
                items: 1,
            },
            1200: {
                items: 1,
            }
        }
    });

    /*====== Scroll to top ========*/
    // Go to Top
    $(function () {
        // Scroll Event
        $(window).on('scroll', function () {
            var scrolled = $(window).scrollTop();
            if (scrolled > 350) $('.go-top').addClass('active');
            if (scrolled < 350) $('.go-top').removeClass('active');
        });
        // Click Event
        $('.go-top').on('click', function () {
            $("html, body").animate({
                scrollTop: "0"
            }, 500);
        });
    });
    // preloder
    $(window).on('load', function () {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
    });

    //Counter Active
    $('.counter').counterUp({
        delay: 5,
        time: 1000
    })
}(jQuery));