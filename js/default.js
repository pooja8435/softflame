(function($) {
    "use strict"; // Start of use strict

    /*Loader Javascript 
	========================*/
    $(window).on('load', function() {
        $(".loading").fadeOut("fast");
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    $('a:not(.dropdown-toggle)').on('click', function() {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    });
    //dropdown-menu on hover
    if ($(window).width() > 767) {
        $('li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).fadeIn();
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).fadeOut();
        });
    }
    //scroll up 

    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $('#scroll-up').fadeIn();
        } else {
            $('#scroll-up').fadeOut();
        }
    });

    $('#scroll-up').on('click', function() {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    // serach form
    $(".search-icon").find(".fa-search").on('click', function() {
        $(".search-form").toggle();
        return false;
    });

})(jQuery);

/* Footer Open Files*/
/*slider-js*/
$(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            pagination: false,
            dots: false,
            autoplayTimeout: 1500,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    loop: true,
                },
                600: {
                    items: 3,
                    nav: true,
                    loop: true,
                },
                1000: {
                    items: 6,
                    nav: true,
                    loop: true,
                    margin: 20
                }
            }
        })
    })
    /*END*/