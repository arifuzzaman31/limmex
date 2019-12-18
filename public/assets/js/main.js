$(document).ready(function() {
    "use strict";

    // data - background
    $("[data-background]").each(function() {
            $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
        })
        // Service carousel
    $(".services-item").owlCarousel({

        nav: true,
        dots: false,
        autoplay: true,
        margin: 30,
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            1200: {
                items: 3
            },
            992: {
                items: 3
            },
            768: {
                items: 2
            },
            320: {
                items: 1
            },
            480: {
                items: 1
            }
        }
    });

    // Portfolio carousel
    $(".portfolio-item").owlCarousel({

        nav: true,
        dots: false,
        autoplay: true,
        margin: 30,
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            1200: {
                items: 5
            },
            992: {
                items: 5
            },
            768: {
                items: 2
            },
            320: {
                items: 1
            },
            480: {
                items: 1
            }
        }
    });

    // Blog carousel
    $(".blog-list").owlCarousel({

        nav: true,
        dots: false,
        autoplay: false,
        margin: 30,
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        mouseDrag: true,
        touchDrag: false,
        responsive: {
            1200: {
                items: 2
            },
            992: {
                items: 2
            },
            768: {
                items: 2
            },
            320: {
                items: 1
            },
            480: {
                items: 1
            }
        }
    });
    // Blog slider carousel
    $(".blog-slider-feature-area").owlCarousel({

        nav: true,
        items: 1,
        dots: false,
        autoplay: false,
        margin: 30,
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        mouseDrag: true,
        touchDrag: true,

    });

    // sticky
    $(window).on('scroll', function() {
        var scroll = $(window).scrollTop();
        if (scroll < 2) {
            $("#header-sticky").removeClass("sticky");
        } else {
            $("#header-sticky").addClass("sticky");
        }
    });

    // Magnifi popup

    $('.video-btn').magnificPopup({ type: 'video' });

    // One Page Nav
    $('.heus-main-menu ul').onePageNav({
        filter: ':not(.external)'
    });

    // Slick Nav
    $('#menu').slicknav({
        prependTo: '.responsive-menu'
    });

    jQuery(window).load(function() {
        // Prealoader
        jQuery(".prealoader-area-wrapepr").fadeOut(500);
    });


});