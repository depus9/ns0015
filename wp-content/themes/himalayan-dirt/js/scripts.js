jQuery(document).ready(function ($) {

    'use strict';

    var c, currentScrollTop = 0,
        navbar = $('nav');

    $(window).scroll(function () {
        var a = $(window).scrollTop();
        var b = navbar.height();

        currentScrollTop = a;

        if (c < currentScrollTop && a > b + b) {
            navbar.addClass("scrollUp");
            $('.single-ride-nav').removeClass("topMenuVisible");
        } else if (c > currentScrollTop && !(a <= b)) {
            navbar.removeClass("scrollUp");
            $('.single-ride-nav').addClass("topMenuVisible");
        }
        c = currentScrollTop;
    });
    //ow carousel
    $('div#himalayan-hero').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    $('#happy-riders').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    //aos animation
    AOS.init();
    //back to top action
    if ($('#back-to-top').length) {
        var scrollTrigger = 500, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
    //scroll to about section
    $(".arrow.bounce").click(function () {
        var offset = 20; //Offset of 20px

        $('html, body').animate({
            scrollTop: $("#himalayanDirt").offset().top + offset
        }, 500);
    });
    $(".hero-slider-item").tilt({
        maxTilt: 15,
        perspective: 8000,
        easing: "cubic-bezier(.03,.98,.52,.99)",
        speed: 1200,
        glare: true,
        maxGlare: 0.1,
        scale: 1.03
    });
    //book now on click
    $('#bookNow').on('click', function (e) {
        e.preventDefault();
        var $this = $(this),
            dataSelect = $this.attr('data-select');
        $('#select-rides').val(dataSelect);
        $('#formTrip').modal('show');
    });
    // scroll to section
    $(document).on('click', '.single-rides-nav a[href^="#"]', function (e) {
        e.preventDefault();
        $('.activeScroll').removeClass('activeScroll');
        $(this).addClass('activeScroll');
        $('html, body').stop().animate({
            scrollTop: $($(this).attr('href')).offset().top - 200
        }, 500, 'linear');
    });
    //nav stickey
    var stickyNavTop = $('.single-ride-nav');
    if (stickyNavTop.length > 0) {
        stickyNavTop = stickyNavTop.offset().top;
        var stickyNav = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop >= stickyNavTop) {
                $('.single-ride-nav').addClass('sticky');
            } else {
                $('.single-ride-nav').removeClass('sticky');
            }
        };

        stickyNav();
        $(window).scroll(function () {
            stickyNav();
        });
    }

    //datepicker
    $('.datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });

});