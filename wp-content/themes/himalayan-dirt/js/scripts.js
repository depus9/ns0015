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
            $('.mobile-contact-bar').addClass("show-bar");
            $('[aria-expanded="true"]').click();
        } else if (c > currentScrollTop && !(a <= b)) {
            navbar.removeClass("scrollUp");
            $('.single-ride-nav').addClass("topMenuVisible");

            $('.mobile-contact-bar').removeClass("show-bar");
        }
        c = currentScrollTop;
    });
    //ow carousel
    $('div#himalayan-hero').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                dots: false
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    $('#supporter-carousel').owlCarousel({
        loop: false,
        margin: 0,
        nav: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2,
                dots: false,
                loop: true
            },
            600: {
                items: 4
            },
            1000: {
                items: 4
            }
        }
    })
    $('#single-rides').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        stagePadding: 0,
        margin: 0,
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
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
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
    AOS.init({disable: false});
    //back to top action
    if ($('.back-top-top').length) {
        var scrollTrigger = 500, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('.back-top-top').addClass('show');
                } else {
                    $('.back-top-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('.back-top-top').on('click', function (e) {
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

    if ($('#tripOverview').length > 0) {
        window.onscroll = function () {
            stickySidebar();

        }
        var sticky = $('#tripOverview').offset().top + 10;

        function stickySidebar() {
            if (window.pageYOffset >= sticky && $('.bottom-contact').offset().top >= window.pageYOffset + 600) {
                $('#tripOverview').addClass("sticky")
            } else {
                $('#tripOverview').removeClass("sticky");
            }
        }

    }


});