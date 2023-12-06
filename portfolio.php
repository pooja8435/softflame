<!doctype html>

<html lang="en">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135022729-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-135022729-1');
    </script>

    <title>Portfolio | SoftFlame Solution </title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="keywords"
        content="website company in pune,web development company in pune,website design in pune,web design company,web design pune,web development company, website design company, ecommerce website design,ecommerce websites development,SEO services pune,seo company in pune" />
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="description"
        content="SoftFlame Solutionss - Website Design Company Pune offer Web design, website development, ecommerce development and search engine optimization services in Pune" />

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/theme.css" rel="stylesheet">

    <link rel="canonical" href=" https://www.softflame.in/" />

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="shortcut icon" href="images/fav NEW LOGO 2 ic (1).png" type="image/x-icon">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet'
        type='text/css'>

    <!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

    <!-- stylesheets -->
    <link rel="stylesheet" media="screen" href="js/bootstrap/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="js/mainmenu/menu.css" type="text/css" />
    <link rel="stylesheet" href="css/default.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/colors/lightblue.css" type="text/css" />
    <link rel="stylesheet" href="css/layouts.css" type="text/css" />
    <link rel="stylesheet" href="css/shortcodes.css" type="text/css" />
    <link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    <link rel="stylesheet" href="js/masterslider/style/masterslider.css" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
    <link rel="stylesheet" href="css/et-line-font/et-line-font.css">
    <link href="js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="js/cubeportfolio/cubeportfolio.min.css">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

    <link rel="stylesheet" href="js/ytplayer/ytplayer.css" />
    <link rel="stylesheet" href="js/style-swicher/style-swicher.css" type="text/css" />
    <link rel="stylesheet" href="js/custom-scrollbar/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;300;400;500&family=Nunito+Sans:opsz,wght@6..12,200&family=Open+Sans:wght@300;400;700&family=Poppins:wght@200;400;600&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- <script src="custom.js"></script> -->
<script src="https://unpkg.com/scrollreveal"></script>
<script>
/*========== NAVBAR TRANSPARENT TO SOLID ==========*/

$(document).ready(function() { //when document(DOM) loads completely.
    // Transition effect for navbar
    $(window).scroll(function() { //function is called while you scrolls
        // checks if window is scrolled more than 300px, adds/removes solid class
        if ($(this).scrollTop() > 200) {
            $('.navbar').addClass('solid'); //add class 'solid' in any element which has class 'navbar'
        } else {
            $('.navbar').removeClass(
                'solid'); //remove class 'solid' in any element which has class 'navbar'
        }
    });
});

/*========== ADD NAV BACKGROUND ON CLICK ==========*/

$(document).ready(function() { //when document loads completely.
    $('#hamburguer').click(function() {
        if ($(window).scrollTop() === 0) {
            $('.navbar').toggleClass('solid');
        }
    });
});

/*========== CLOSE MOBILE NAV ON CLICK ==========*/

$(document).ready(function() { //when document loads completely.
    $(document).click(function(event) { //click anywhere
        var clickover = $(event.target); //get the target element where you clicked
        var _opened = $(".navbar-collapse").hasClass(
            "show"
            ); //check if element with 'navbar-collapse' class has a class called show. Returns true and false.
        if (_opened === true && !clickover.hasClass(
                "navbar-toggler"
                )) { // if _opened is true and clickover(element we clicked) doesn't have 'navbar-toggler' class
            $(".navbar-toggler").click(); //toggle the navbar; close the navbar menu in mobile.
        }
    });
});

/*========== SMOOTH SCROLLING TO LINKS ==========*/

$(document).ready(function() { //document is loaded
    // Add smooth scrolling to all links
    $("a").on('click', function(event) { //click on any link;anchor tag;

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") { //for e.g. website.com#home - #home
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;
            //console.log('hash:',hash)

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({ //animate whole html and body elements
                scrollTop: $(hash).offset().top //scroll to the element with that hash
            }, 800, function() {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash; //website.com - website.com#home
                //Optional remove "window.location.hash = hash;" to prevent transparent navbar on load
            });
        } // End if
    });
});

/*========== BOUNCING DOWN ARROW ==========*/
//down arrow at top
$(document).ready(function() {
    $(window).scroll(function() { //browser scroll
        $(".arrow").css("opacity", 1 - $(window).scrollTop() /
            250); //set opacity css from 1 to -(negative) infinity of element with class 'arrow'
        //250 is fade pixels
    });
});

/*========== SKILLS COUNTER ==========*/

$(document).ready(function() { //when document is ready
    $('.counter').counterUp({
        delay: 10, //delay in milliseconds per count up
        time: 1800 //total time taken by the animation
    });
});

/*========== CLIENTS CAROUSEL ==========*/

$(document).ready(function() { //when document is ready
    $("#clients-slider").owlCarousel({ //owlCarousel settings
        items: 2, //by default there are 2 slides display.
        autoplay: true, //the slides will change automatically.
        smartSpeed: 1700, //speed of changing wil be 700
        loop: true, //infinite loop; after the last slide, first slide starts
        autoplayHoverPause: true, //when you put mouse over Carousel, slide changing will stop
        responsive: { //responsiveness as screen size changes
            // min-width: 0px
            0: {
                items: 1 //on devices with width 0 to 768px show 1 slide
            },
            // min-width: 768px
            768: {
                items: 2 //on devices with width 768px and above show show 2 slides
            },
        }
    });
});

/*========== TOP SCROLL BUTTON ==========*/

$(document).ready(function() { //when document is ready
    $(window).scroll(function() { //when webpage is scrolled
        if ($(this).scrollTop() > 500) { //if scroll from top is more than 500
            $('.top-scroll').fadeIn(); //display element with class 'top-scroll'; opacity increases
        } else { //if not
            $('.top-scroll').fadeOut(); //hide element with class 'top-scroll'; opacity decreases
        }
    });
});


//Optional Refresh Page at top of document on load instead of at # hash

$(document).ready(function() {
    $('html, body').scrollTop(0);
    $(window).on('load', function() {
        setTimeout(function() {
            $('html, body').scrollTop(0);
        }, 0);
    });
});

//UPDATE ADDITION: MAKE PRICING & TEAM SECTIONS COLUMN HEIGHT EQUAL
/*

$(document).ready(function(){

    // Select and loop the container element of the elements you want to equalise
    $('.row').each(function(){

      // Cache the highest
      var highestBox = 0;

      // Select and loop the elements you want to equalise
      $('.pricing-column,.card-body', this).each(function(){

        // If this box is higher than the cached highest then store it
        if($(this).height() > highestBox) {
          highestBox = $(this).height();
        }

      });

      // Set the height of all those children to whichever was highest
      $('.pricing-column,.card-body',this).height(highestBox);

    });

});

*/



$(".navbar-nav").on('click', 'li', function() {
    $(".navbar-nav li.active").removeClass("active");
    // adding classname 'active' to current click li 
    $(this).addClass("active");
});
</script>
</head>




<style>
@import url('https://fonts.googleapis.com/css?family=Lato:400,700');

body {
    overflow-x: hidden;
    font-family: 'Nunito', sans-serif;
    color: #505962;
}

/*--- Nav Scrolling Offset ---*/
.offset:before {
    height: 4rem;
    margin-top: -4rem;
    content: "";
    display: block;
}

/*--- Extra Bootstrap Column Padding ---*/
[class*="col-"] {
    padding: 1rem;
}


/*============ LANDING PAGE IMAGE ============*/
.home-inner {
    background-image: url('img/small-business-banner.jpg');
}

.caption {
    width: 100%;
    max-width: 100%;
    position: absolute;
    top: 38%;
    z-index: 1;
}

.caption h1 {
    color: #FFF;
    font-size: 4.5rem;
    text-transform: uppercase;
    font-weight: 700;
    letter-spacing: 0.3rem;
    text-shadow: 0.1rem 0.1rem 0.8rem #000;
    padding-bottom: 1rem;
    font-family: 'Nunito', sans-serif !important;
}

.caption h3 {
    color: #FFF;
    font-size: 2.5rem;
    text-transform: uppercase;
    font-weight: 400;
    text-shadow: 0.1rem 0.1rem 0.5rem #000;
    padding-bottom: 2rem;
    font-family: 'Nunito', sans-serif !important;
}

.btn-lg {
    border-width: medium;
    border-radius: 0;
    padding: 0.8rem 1.5rem;
    font-size: 1.5rem;
    font-weight: 400;
    text-transform: uppercase;
    display: inline-block !important;
    font-family: 'Nunito', sans-serif !important;
    border:2px solid wheat;
    color:orange;
}

.btn-lg:hover{
    background:#f07e2c;
    color:white;
    border:none;
}

/*--- Bootstrap Mobile Gutter Fix --*/
.row,
.container-fluid {
    margin-left: 0px !important;
    margin-right: 0px !important;
}

/*--- Fix for Fixed Navbar jumping on scroll --*/
.fixed-top {
    -webkit-backface-visibility: hidden;
}

/*--- Fixed Landing Page Section --*/
.landing {
    position: relative;
    width: 100%;
    height: 100vh;
    /* Change height of landing page image. */
    display: table;
    z-index: -1;
}

.home-wrap {
    clip: rect(0, auto, auto, 0);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.home-inner {
    position: fixed;
    /* Change to relative to remove fixed style. */
    display: table;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center center;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    will-change: transform;
}

/*--- iOS Fixed Background Image --*/
.fixed-background {
    position: relative;
    width: 100%;
}

.fixed-wrap {
    clip: rect(0, auto, auto, 0);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -999 !important;
}

/*--- Features Dark Background Image --*/
#fixed {
    position: fixed;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center center;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    will-change: transform;
}

/*--- Team Light Background Image --*/
#fixed-2 {
    position: fixed;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center center;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    will-change: transform;
}

/*--- Prevent WayPoints from Browser Window Scrolling On Mobile --*/
/* Devices under 768px (md) */
@media (max-width: 767px) {
    .row {
        overflow-x: hidden;
        overflow-y: hidden;
    }
}

/*============ ARROW STYLES ============*/

.bounce {
    /*arrow bouncing duration*/
    -moz-animation: bounce 2s infinite;
    -webkit-animation: bounce 2s infinite;
    animation: bounce 2s infinite;
}

.arrow {
    position: absolute;
    bottom: 0;
    left: 50%;
    /* margin-left: 10px; */
    width: 100px;
    height: 100px;
    /*change with size of arrow to make it sit on bottom of page*/
}

.arrow svg {
    fill: orange;
}

a.down-arrow {
    display: block;
    color: #fff;
    /*arrow color*/
}

.down-arrow svg.svg-inline--fa {
    opacity: .3;
    /*arrow opacity*/
    font-size: 2rem;
    /*arrow size*/
}

.down-arrow svg.svg-inline--fa:hover {
    opacity: .5;
    /*arrow hover opacity*/
}

@-moz-keyframes bounce {

    0%,
    20%,
    50%,
    80%,
    100% {
        -moz-transform: translateY(0);
        transform: translateY(0);
    }

    40% {
        -moz-transform: translateY(-30px);
        transform: translateY(-30px);
    }

    60% {
        -moz-transform: translateY(-15px);
        transform: translateY(-15px);
    }
}

@-webkit-keyframes bounce {

    0%,
    20%,
    50%,
    80%,
    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }

    40% {
        -webkit-transform: translateY(-30px);
        transform: translateY(-30px);
    }

    60% {
        -webkit-transform: translateY(-15px);
        transform: translateY(-15px);
    }
}

@keyframes bounce {

    0%,
    20%,
    50%,
    80%,
    100% {
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }

    40% {
        -moz-transform: translateY(-30px);
        -ms-transform: translateY(-30px);
        -webkit-transform: translateY(-30px);
        transform: translateY(-30px);
    }

    60% {
        -moz-transform: translateY(-15px);
        -ms-transform: translateY(-15px);
        -webkit-transform: translateY(-15px);
        transform: translateY(-15px);
    }
}

/**
 * Owl Carousel v2.3.3
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
/*
 *  Owl Carousel - Core
 */
.owl-carousel {
    display: block !important;
    width: 100%;
    -webkit-tap-highlight-color: transparent;
    /* position relative and z-index fix webkit rendering fonts issue */
    position: relative;
    z-index: 1;
}

.owl-carousel .owl-stage {
    position: relative;
    -ms-touch-action: pan-Y;
    touch-action: manipulation;
    -moz-backface-visibility: hidden;
    /* fix firefox animation glitch */
}

.owl-carousel .owl-stage:after {
    content: ".";
    display: block;
    clear: both;
    visibility: hidden;
    line-height: 0;
    height: 0;
}

.owl-carousel .owl-stage-outer {
    position: relative;
    overflow: hidden;
    /* fix for flashing background */
    -webkit-transform: translate3d(0px, 0px, 0px);
}

.owl-carousel .owl-wrapper,
.owl-carousel .owl-item {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
}

.owl-carousel .owl-item {
    position: relative;
    min-height: 1px;
    float: left;
    -webkit-backface-visibility: hidden;
    -webkit-tap-highlight-color: transparent;
    -webkit-touch-callout: none;
}

.owl-carousel .owl-item img {
    display: block;
    width: 100%;
}

.owl-carousel .owl-nav.disabled,
.owl-carousel .owl-dots.disabled {
    display: none;
}

.owl-carousel .owl-nav .owl-prev,
.owl-carousel .owl-nav .owl-next,
.owl-carousel .owl-dot {
    cursor: pointer;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.owl-carousel .owl-nav button.owl-prev,
.owl-carousel .owl-nav button.owl-next,
.owl-carousel button.owl-dot {
    background: none;
    color: inherit;
    border: none;
    padding: 0 !important;
    font: inherit;
}

.owl-carousel.owl-loaded {
    display: block;
}

.owl-carousel.owl-loading {
    opacity: 0;
    display: block;
}

.owl-carousel.owl-hidden {
    opacity: 0;
}

.owl-carousel.owl-refresh .owl-item {
    visibility: hidden;
}

.owl-carousel.owl-drag .owl-item {
    -ms-touch-action: none;
    touch-action: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.owl-carousel.owl-grab {
    cursor: move;
    cursor: grab;
}

.owl-carousel.owl-rtl {
    direction: rtl;
}

.owl-carousel.owl-rtl .owl-item {
    float: right;
}

/* No Js */
.no-js .owl-carousel {
    display: block;
}

/*
 *  Owl Carousel - Animate Plugin
 */
.owl-carousel .animated {
    animation-duration: 1000ms;
    animation-fill-mode: both;
}

.owl-carousel .owl-animated-in {
    z-index: 0;
}

.owl-carousel .owl-animated-out {
    z-index: 1;
}

.owl-carousel .fadeOut {
    animation-name: fadeOut;
}

@keyframes fadeOut {
    0% {
        opacity: 1;
    }

    100% {
        opacity: 0;
    }
}

/*
 * 	Owl Carousel - Auto Height Plugin
 */
.owl-height {
    transition: height 500ms ease-in-out;
}

/*
 * 	Owl Carousel - Lazy Load Plugin
 */
.owl-carousel .owl-item .owl-lazy {
    opacity: 0;
    transition: opacity 400ms ease;
}

.owl-carousel .owl-item img.owl-lazy {
    transform-style: preserve-3d;
}

/*
 * 	Owl Carousel - Video Plugin
 */
.owl-carousel .owl-video-wrapper {
    position: relative;
    height: 100%;
    background: #000;
}

.owl-carousel .owl-video-play-icon {
    position: absolute;
    height: 80px;
    width: 80px;
    left: 50%;
    top: 50%;
    margin-left: -40px;
    margin-top: -40px;
    background: url("owl.video.play.png") no-repeat;
    cursor: pointer;
    z-index: 1;
    -webkit-backface-visibility: hidden;
    transition: transform 100ms ease;
}

.owl-carousel .owl-video-play-icon:hover {
    -ms-transform: scale(1.3, 1.3);
    transform: scale(1.3, 1.3);
}

.owl-carousel .owl-video-playing .owl-video-tn,
.owl-carousel .owl-video-playing .owl-video-play-icon {
    display: none;
}

.owl-carousel .owl-video-tn {
    opacity: 0;
    height: 100%;
    background-position: center center;
    background-repeat: no-repeat;
    background-size: contain;
    transition: opacity 400ms ease;
}

.owl-carousel .owl-video-frame {
    position: relative;
    z-index: 1;
    height: 100%;
    width: 100%;
}

/**
   * Owl Carousel v2.3.3
   * Copyright 2013-2018 David Deutsch
   * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
   */
/*
   * 	Default theme - Owl Carousel CSS File
   */
.owl-theme .owl-nav {
    margin-top: 10px;
    text-align: center;
    -webkit-tap-highlight-color: transparent;
}

.owl-theme .owl-nav [class*='owl-'] {
    color: #FFF;
    font-size: 14px;
    margin: 5px;
    padding: 4px 7px;
    background: #D6D6D6;
    display: inline-block;
    cursor: pointer;
    border-radius: 3px;
}

.owl-theme .owl-nav [class*='owl-']:hover {
    background: #869791;
    color: #FFF;
    text-decoration: none;
}

.owl-theme .owl-nav .disabled {
    opacity: 0.5;
    cursor: default;
}

.owl-theme .owl-nav.disabled+.owl-dots {
    margin-top: 10px;
}

.owl-theme .owl-dots {
    text-align: center;
    -webkit-tap-highlight-color: transparent;
}

.owl-theme .owl-dots .owl-dot {
    display: inline-block;
    zoom: 1;
    *display: inline;
}

.owl-theme .owl-dots .owl-dot span {
    width: 10px;
    height: 10px;
    margin: 5px 7px;
    background: #D6D6D6;
    display: block;
    -webkit-backface-visibility: visible;
    transition: opacity 200ms ease;
    border-radius: 30px;
}

.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
    background: #869791;
}

/*============= WAYPOINTS =============*/

.os-animation {
    opacity: 0;
    margin: 0 !important;
    max-width: 100%;
}

.os-animation.animated {
    opacity: 1;
}


/*--- TURN OFF ANIMATION ON MOBILE *
        @media (max-width: 768px) {
        .animated, .os-animation {
        	-webkit-animation: none;
        	-moz-animation: none;
        	-o-animation: none;
        	animation: none;
        	opacity: 1;
        	-webkit-animation-delay: none !important;
        	-moz-animation-delay: none !important;
        	animation-delay: none !important;
        	}
        }

/*============ FEATURES SECTION ============*/
.narrow {
    width: 75%;
    margin: 0 auto;
    padding-top: 2rem;
}

.narrow h2 {
    font-family: 'Nunito', sans-serif !important;
}

.btn-sm {
    border-width: medium;
    border-radius: 0;
    padding: 0.5rem 1.1rem;
    font-size: 0.9rem;
    font-weight: 400;
    text-transform: uppercase;
    margin: 1rem;
}
.btn-sm:hover{
    color:#F2992E;
}

.btn-orange {
    border-color: #F2992E;
    background-color: #F2992E;
    color: #FFF;
}

.btn-orange:hover,
.btn-orange:focus {
    border-color: #F79928;
    background-color: #F79928;
    color: #FFF;
}

.jumbotron {
    margin-bottom: 0;
    border-radius: 0;
    padding: 1rem 0 3rem;
}

h3.heading {
    font-size: 1.9rem;
    font-weight: 700;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 1.9rem;
    font-family: 'Nunito', sans-serif !important;
}

.heading-underline {
    width: 3rem;
    height: 0.2rem;
    background-color: #F2992E;
    margin: 0 auto 2rem;
}

.feature {
    text-align: center;
}

#feature-svg svg {
    width: 100%;
    height: 50%;
    margin-top: 25%;
    fill: white;
}

.feature2 svg {
    margin-top: 0%;
    fill: #f07a2e;
}

.circle {
    background-color: #F2992E;
    margin: 0 auto;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-bottom: 20px;
}

.margin-left {
    margin-left: 10px;
}

.feature h3 {
    font-size: 1.3rem;
    text-transform: uppercase;
    padding-bottom: 0.4rem;
    font-family: 'Nunito', sans-serif !important;
}

.feature p {
    font-size: 1.1rem;
}

/*============ FIXED BACKGROUND IMAGE DARK ============*/
#fixed {
    background-image: url('img/image-bg2.jpg');
    z-index: -1;
}

.dark {
    background-color: rgba(0, 0, 0, 0.75);
    padding: 7rem 2rem;
    text-align: center;
    z-index: 998 !important;
}

.dark h3,
.dark p {
    color: #E9ECEF;
}

.orange {
    color: #F2992E;
}

/*============ PORTFOLIO SECTION ============*/
.row.padding {
    padding: 2rem 0 1rem;
}

.example-image {
    width: 90%;
}

img.example-image {
    max-width: 100%;
}

.row.no-padding [class*=col-] {
    padding: 0;
}

.portfolio-item img:hover {
    transform: scale(1.3);
    cursor: zoom-in;
}

.portfolio-item img {
    transition: transform 0.4s ease;
}

.portfolio-item {
    overflow: hidden;
}

/*============ PRICING SECTION ============*/
.pricing-column {
    background-color: #FFF;
    padding: 2rem;
    border-top: 0.2rem solid #F2992E;
    box-shadow: 0 0 0.8rem rgba(0, 0, 0, 0.075);
    transition: transform 0.7s ease;
    overflow: hidden;
    position: relative;
}

.pricing-column:hover {
    transform: scale(1.1);
}

.pricing-column h3 {
    padding: 1rem;
    border-bottom: 0.1rem solid rgba(0, 0, 0, 0.1);
}

.pricing-colum p {
    opacity: 0.8;
    margin-top: 1.3rem;
}

.pricing-column h4 {
    font-size: 1.1rem;
    padding: 0.4rem;
    font-family: 'Nunito', sans-serif !important;
}

.pricing-column .item {
    font-weight: 700;
    font-family: 'Nunito', sans-serif !important;
}

.pricing-column h2 {
    padding: 0.8rem 0;
}

.ribbon {
    background-color: #6C757D;
    color: #FFF;
    width: 10rem;
    height: 2rem;
    font-size: 0.8rem;
    font-weight: 700;
    padding-top: 0.4rem;
    position: absolute;
    right: -2.8rem;
    top: 1.6rem;
    transform: rotate(45deg);
    box-shadow: 0 0 0.2rem rgba(0, 0, 0, 0.25);
    font-family: 'Nunito', sans-serif !important;
}

/*============ SKILLS SECTION ============*/
.skill h3 {
    color: #F2992E;
    font-size: 2.5rem;
    font-weight: 700;
    margin: 1rem 0 0.5rem;
    font-family: 'Nunito', sans-serif !important;
}

.skill p {
    font-size: 1.1rem;
    text-transform: uppercase;
    font-weight: 700;
    font-family: 'Nunito', sans-serif !important;
}

/*============ CLIENTS SECTION ============*/
.clients ul li {
    list-style: none;
}

.clients img {
    width: 100%;
    height: auto;
    /* border-radius: 50%; */
    transition: transform 0.3s ease;
}

.clients img:hover {
    transform: scale(0.95);
}

blockquote::before {
    font-family: 'Font Awesome\ 5 Free';
    content: '\f10d';
    /*quote left icon*/
    margin: 1rem;
    color: #F2992E;
    font-weight: 900;
}

.clients-hr {
    border-top: 1px solid #F2992E;
}


/*============ TOP SCROLL ============*/
.top-scroll svg.svg-inline--fa {
    font-size: 3rem;
    height: 1.7rem;
    color: rgba(57, 63, 70, 0.65);
    background-color: #FFF;
    font-family: 'Nunito', sans-serif !important;
}

a.top-scroll {
    right: 1.2rem;
    bottom: 1.2rem;
    position: fixed;
    opacity: 0.3;
    z-index: 2000;
}

a.top-scroll:hover {
    opacity: 0.5;
}

/*============ MEDIA QUERIES ============*/
@media (max-width: 991px) {
    .caption {
        top: 32%;
    }

    .caption h1 {
        font-size: 3.5rem;
        letter-spacing: 0.2rem;
        padding-bottom: 0.8rem;
    }

    .caption h3 {
        font-size: 2.2rem;
        padding-bottom: 1.7rem;
    }

    .btn-lg {
        padding: 0.7rem 1.2rem;
        font-size: 1rem;
    }

    .narrow h2 {
        font-size: 2.1rem;
    }

    .example-image {
        width: 100%;
        margin-bottom: 20px;
    }
}

@media (max-width: 767px) {
    .caption h1 {
        font-size: 2.7rem;
        letter-spacing: 0.15rem;
        padding-bottom: 0.5rem;
    }

    .caption h3 {
        font-size: 1.7rem;
        padding-bottom: 1.2rem;
    }

    .btn-lg {
        padding: 0.6rem 1.1rem;
        font-size: 1rem;
    }

    .narrow h2 {
        font-size: 1.8rem;
    }

    footer {
        background: url('https://github.com/Ceci007/images/blob/master/img-portfolio/footer/footer-mobile.png?raw=true');
    }

    .clients img {
        max-width: 50%;
        margin: 0 auto;
    }

    .top-scroll {
        display: none !important;
    }
}

@media (max-width: 575px) {
    .caption h1 {
        font-size: 1.7rem;
        letter-spacing: 0.1rem;
        padding-bottom: 0.4rem;
    }

    .caption h3 {
        font-size: 1.2rem;
        padding-bottom: 1rem;
    }

    .btn-lg {
        padding: 0.4rem 0.9rem;
        font-size: 0.9rem;
    }

    .narrow {
        width: 85%;
    }
}

.skill svg {
    width: 50%;
    height: auto;
}
.skill .azureimg {
    width: 82%;
    height: auto;
}
.skill .cassandraimg{
    width:52%;
    height:auto;
}

.client-box {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 300px; 
    margin: 5px; 
    border-radius: 8px; 
    overflow: hidden; 
    transition: border-color 0.3s ease-in-out; 
    padding:20px;
}

.client-box:hover {
    border-color: #e74c3c; /* Change border color on hover */
}

.client-image {
    max-width: 100%;
    max-height: 100%;
}

.bg-contact {
            background: aliceblue;
        }

        .contact-img {
            height: 250px;
            margin-left: 45px;
        }

        .clr-black {
            color: #575a7b;
        }

        .contact-btn {
            color: white;
            border-radius: 20px;
            background: linear-gradient(to right, rgba(255, 175, 75, 1) 0%, rgba(240, 81, 24, 1) 68%, rgba(240, 81, 24, 1) 100%);
        }

        .fa-arrow-right {
            margin-left: 16px;
        }

        .header-font{
            color: black !important;
            font-family: 'Nunito', sans-serif !important;
        }
        .init_text{
            text-align:left !important;
            font-family: 'Nunito', sans-serif !important;
        }

        @media (max-width: 768px) {

            .contact-img {
                height: 185px;
                margin-left: 45px;
            }
            .skill svg {
               width: 20%;
               height: auto;
            }
            .skill .azureimg {
               width: 50%;
               height: auto;
            }
            .skill .cassandraimg{
                width:40%;
                height:auto;
            }

            .arrow{
                height:20px;
            }
            .landing{
                height:50vh;
            }
        }
</style>


</head>

<?php include 'header.php';?>

<body data-spy="scroll" data-target="#navbarResponsive">
    <!-- Start Home Section -->
    <div id="home">
        <!-- Start Navigation -->

        <!-- Start of the Landing Page Image -->
        <section id="welcome-section">
            <div class="landing">
                <div class="home-wrap">
                    <div class="home-inner">
                    </div>
                </div>
            </div>
            <div class="caption center-block text-center">
                <div class="title">
                    <h1>Welcome to our Portfolio</h1>
                </div>
                <div class="title1" data-animation="bounceInUp" data-delay="0.8s">
                    <h3>Explore Our Work</h3>
                </div>
                <div class="title2" data-animation="bounceInUp" data-delay="1s">
                    <a class="btn btn-outline-light btn-lg" href="#features">Get Started</a>
                </div>
            </div>
    </div>
    <!-- Bouncing Down Arrow -->
    <a class="down-arrow" href="#features">
        <div class="arrow bounce d-none d-md-block">
            <!-- <i class="fa-solid fa-angle-down" aria-hidden="true"></i> -->
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                <path
                    d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
            </svg>
        </div>
    </a>
    </section>
    <section>
        <div class="pagenation-holder">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-12 text-center">
                        <div class="pagenation_links"><a href="index.php">Home</a><i> / </i> <a href="portfolio.php">Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Features Section -->
    <div id="features" class="offset">
        <div class="aos-animation" data-animation="fadeInUp">
            <div class="narrow text-center">
                <div class="col-12">
                    <h2 class="about">About Us</h2>
                    <p class="lead2 lead">
                        SoftFlame Solutions is a reliable technology partner for Web Apps,
                        Mobile Apps Development and Cloud Consultation & Implementation.
                        We build innovative web and mobile solutions for different industries
                        and constantly strive to go beyond programming paradigms. We also
                        support the requirement of resources by our client for a specific
                        duration of their project.
                    </p>
                    <a href="#contact" class="btn1 btn btn-secondary btn-sm">Request a Quote</a>
                    <a href="#portfolio" class="btn2 btn btn-orange btn-sm">See Our Portfolio</a>
                </div>
            </div>
        </div>
        <!-- Start Jumbotron -->
        <div class="jumbotron">
            <div class="narrow">
                <div class="aos-animation" data-animation="fadeInUp">
                    <h3 class="about heading">Industry</h3>
                    <div class="heading-underline">
                    </div>
                </div>
                <div class="circless row">
                    <div class="col-sm-6 col-md-4">
                        <div class="aos-animation" data-animation="fadeInLeft">
                            <div class="feature" id="feature-svg">
                                <div class="circle fa-layers fa-4x">
                                    <!-- <i class="fas fa-mobile-alt fa-inverse"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="20"
                                        viewBox="0 0 640 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M335.5 4l288 160c15.4 8.6 21 28.1 12.4 43.5s-28.1 21-43.5 12.4L320 68.6 47.5 220c-15.4 8.6-34.9 3-43.5-12.4s-3-34.9 12.4-43.5L304.5 4c9.7-5.4 21.4-5.4 31.1 0zM320 160a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM144 256a40 40 0 1 1 0 80 40 40 0 1 1 0-80zm312 40a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM226.9 491.4L200 441.5V480c0 17.7-14.3 32-32 32H120c-17.7 0-32-14.3-32-32V441.5L61.1 491.4c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l37.9-70.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c16.3 0 31.9 4.5 45.4 12.6l33.6-62.3c15.3-28.5 45.1-46.3 77.5-46.3h19.5c32.4 0 62.1 17.8 77.5 46.3l33.6 62.3c13.5-8.1 29.1-12.6 45.4-12.6h19.5c32.4 0 62.1 17.8 77.5 46.3l37.9 70.3c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8L552 441.5V480c0 17.7-14.3 32-32 32H472c-17.7 0-32-14.3-32-32V441.5l-26.9 49.9c-6.3 11.7-20.8 16-32.5 9.8s-16-20.8-9.8-32.5l36.3-67.5c-1.7-1.7-3.2-3.6-4.3-5.8L376 345.5V400c0 17.7-14.3 32-32 32H296c-17.7 0-32-14.3-32-32V345.5l-26.9 49.9c-1.2 2.2-2.6 4.1-4.3 5.8l36.3 67.5c6.3 11.7 1.9 26.2-9.8 32.5s-26.2 1.9-32.5-9.8z" />
                                    </svg>
                                </div>
                                <h3>Insurance</h3>
                                <!-- <p>
                  Using a mixture of mature Agile development capabilities,
design thinking, and nearly 5+ years of product development
services, We offers a potent combination of services to
enhance your product development.
                  </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="aos-animation" data-animation="fadeInUp">
                            <div class="feature" id="feature-svg">
                                <div class="circle fa-layers fa-4x">
                                    <!-- <i class="fas fa-desktop fa-inverse"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                        viewBox="0 0 576 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M224 24V80H168c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24h56v56c0 13.3 10.7 24 24 24h48c13.3 0 24-10.7 24-24V176h56c13.3 0 24-10.7 24-24V104c0-13.3-10.7-24-24-24H320V24c0-13.3-10.7-24-24-24H248c-13.3 0-24 10.7-24 24zM559.7 392.2c17.8-13.1 21.6-38.1 8.5-55.9s-38.1-21.6-55.9-8.5L392.6 416H272c-8.8 0-16-7.2-16-16s7.2-16 16-16h16 64c17.7 0 32-14.3 32-32s-14.3-32-32-32H288 272 193.7c-29.1 0-57.3 9.9-80 28L68.8 384H32c-17.7 0-32 14.3-32 32v64c0 17.7 14.3 32 32 32H192 352.5c29 0 57.3-9.3 80.7-26.5l126.6-93.3zm-367-8.2l.9 0 0 0c-.3 0-.6 0-.9 0z" />
                                    </svg>
                                </div>
                                <h3>Health Care</h3>
                                <!-- <p>
                  We cover the entire app development cycle, no matter
how diverse or complex your needs our expert have years
of experience in global app solution services and product
engineering industries.
                  </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="aos-animation" data-animation="fadeInRight">
                            <div class="feature" id="feature-svg">
                                <div class="circle fa-layers fa-4x">
                                    <!-- <i class="fas fa-play fa-inverse margin-left"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                        viewBox="0 0 576 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                    </svg>
                                </div>
                                <h3>E-Commerce</h3>
                                <!-- <p>
                  As a prominent IoT solutions and services provider, We
offers hi-end IoT Application Development services based
on the bespoke needs of customers from different industry
verticals.
                  </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="aos-animation" data-animation="fadeInLeft">
                            <div class="feature" id="feature-svg">
                                <div class="circle fa-layers fa-4x">
                                    <!-- <i class="fas fa-angle-double-down fa-inverse"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                        viewBox="0 0 512 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M160 96a96 96 0 1 1 192 0A96 96 0 1 1 160 96zm80 152V512l-48.4-24.2c-20.9-10.4-43.5-17-66.8-19.3l-96-9.6C12.5 457.2 0 443.5 0 427V224c0-17.7 14.3-32 32-32H62.3c63.6 0 125.6 19.6 177.7 56zm32 264V248c52.1-36.4 114.1-56 177.7-56H480c17.7 0 32 14.3 32 32V427c0 16.4-12.5 30.2-28.8 31.8l-96 9.6c-23.2 2.3-45.9 8.9-66.8 19.3L272 512z" />
                                    </svg>
                                </div>
                                <h3>Education</h3>
                                <!-- <p>
                  We have expertise in cloud consultation for Amazon AWS,
Google Cloud & Microsoft Azure& provide customers with
cloud consulting, development and migration services.
                  </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="aos-animation" data-animation="fadeInUp">
                            <div class="feature" id="feature-svg">
                                <div class="circle fa-layers fa-4x">
                                    <!-- <i class="fas fa-sliders-h fa-inverse"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                        viewBox="0 0 576 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M64 32C46.3 32 32 46.3 32 64V304v48 80c0 26.5 21.5 48 48 48H496c26.5 0 48-21.5 48-48V304 152.2c0-18.2-19.4-29.7-35.4-21.1L352 215.4V152.2c0-18.2-19.4-29.7-35.4-21.1L160 215.4V64c0-17.7-14.3-32-32-32H64z" />
                                    </svg>
                                </div>
                                <h3>Manufacturing</h3>
                                <!-- <p>
                    Owl.Carousel.js makes navigating content sliders seamless with it's content carousel navigation.
                  </p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="aos-animation" data-animation="fadeInRight">
                            <div class="feature" id="feature-svg">
                                <div class="circle fa-layers fa-4x">
                                    <!-- <i class="fab fa-wpforms fa-inverse"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16"
                                        viewBox="0 0 512 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M165.4 96H346.6c13.6 0 25.7 8.6 30.2 21.4L402.9 192H109.1l26.1-74.6c4.5-12.8 16.6-21.4 30.2-21.4zm-90.6 .3L39.6 196.8C16.4 206.4 0 229.3 0 256v80c0 23.7 12.9 44.4 32 55.4V448c0 17.7 14.3 32 32 32H96c17.7 0 32-14.3 32-32V400H384v48c0 17.7 14.3 32 32 32h32c17.7 0 32-14.3 32-32V391.4c19.1-11.1 32-31.7 32-55.4V256c0-26.7-16.4-49.6-39.6-59.2L437.2 96.3C423.7 57.8 387.4 32 346.6 32H165.4c-40.8 0-77.1 25.8-90.6 64.3zM208 272h96c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H208c-8.8 0-16-7.2-16-16V288c0-8.8 7.2-16 16-16zM48 280c0-13.3 10.7-24 24-24h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H72c-13.3 0-24-10.7-24-24zm360-24h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H408c-13.3 0-24-10.7-24-24s10.7-24 24-24z" />
                                    </svg>
                                </div>
                                <h3>Automobile</h3>
                                <!-- <p>
                    The Bootsrap HTML contact form it's currently off.
                  </p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Fixed Background Image Dark -->
        <div class="fixed-background">
            <div class="row dark">
                <div class="col-12 aos-animation" data-animation="fadeInUp">
                    <h3 class="about heading">Our Values</h3>
                    <div class="heading-underline">
                    </div>
                </div>
                <div class="circless2 col-md-4">
                    <div class="aos-animation" data-animation="fadeInLeft">
                        <h3>Change</h3>
                        <div class="feature feature2">
                            <span class="fa-layers fa-3x">
                                <!-- <i class="fas fa-code orange"></i> -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 512 512">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path
                                        d="M249.4 25.4c12.5-12.5 32.8-12.5 45.3 0s12.5 32.8 0 45.3L269.3 96 416 96c53 0 96 43 96 96v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V192c0-17.7-14.3-32-32-32l-146.7 0 25.4 25.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0l-80-80c-12.5-12.5-12.5-32.8 0-45.3l80-80zm13.3 256l80 80c12.5 12.5 12.5 32.8 0 45.3l-80 80c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 416 96 416c-17.7 0-32 14.3-32 32v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V448c0-53 43-96 96-96l146.7 0-25.4-25.4c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0zM384 384a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM64 192A64 64 0 1 1 64 64a64 64 0 1 1 0 128z" />
                                </svg>
                            </span>
                        </div>
                        <p class="lead">In a technology driven world where change is the only constant,
                            outperforming the competition requires the confidence to
                            realistic challenge the norms of the day.</p>
                    </div>
                </div>
                <div class="circless2 col-md-4">
                    <div class="aos-animation" data-animation="fadeInUp">
                        <h3>Passion</h3>
                        <div class="feature feature2">
                            <span class="fa-layers fa-3x">
                                <!-- <i class="fas fa-bold orange"></i> -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 384 512">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path
                                        d="M153.6 29.9l16-21.3C173.6 3.2 180 0 186.7 0C198.4 0 208 9.6 208 21.3V43.5c0 13.1 5.4 25.7 14.9 34.7L307.6 159C356.4 205.6 384 270.2 384 337.7C384 434 306 512 209.7 512H192C86 512 0 426 0 320v-3.8c0-48.8 19.4-95.6 53.9-130.1l3.5-3.5c4.2-4.2 10-6.6 16-6.6C85.9 176 96 186.1 96 198.6V288c0 35.3 28.7 64 64 64s64-28.7 64-64v-3.9c0-18-7.2-35.3-19.9-48l-38.6-38.6c-24-24-37.5-56.7-37.5-90.7c0-27.7 9-54.8 25.6-76.9z" />
                                </svg>
                            </span>
                        </div>
                        <p class="lead">Our culture which we are so proud of promotes an ownership
                            attitude, creating passionate, agile and cohesive teams that
                            align themselves to the client's needs.</p>
                    </div>
                </div>
                <div class="circless2 col-md-4">
                    <div class="aos-animation" data-animation="fadeInRight">
                        <h3>Confidence</h3>
                        <div class="feature feature2">
                            <span class="fa-layers fa-3x">
                                <!-- <i class="fab fa-css3 orange"></i> -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 512 512">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path
                                        d="M208 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm40 304V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V256.9l-28.6 47.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l58.3-97c17.4-28.9 48.6-46.6 82.3-46.6h29.7c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L328 256.9V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V352H248zM7 7C16.4-2.3 31.6-2.3 41 7l80 80c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L7 41C-2.3 31.6-2.3 16.4 7 7zM471 7c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-80 80c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9L471 7zM7 505c-9.4-9.4-9.4-24.6 0-33.9l80-80c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L41 505c-9.4 9.4-24.6 9.4-33.9 0zm464 0l-80-80c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l80 80c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0z" />
                                </svg>
                            </span>
                        </div>
                        <p class="lead">Collaborating and engaging in our client's success we have this
                            great ability to fit living confidence.</p>
                    </div>
                </div>
            </div>
            <div class="fixed-wrap">
                <div id="fixed">
                </div>
            </div>
        </div>
        <div class="fixed-background">
            <div class="row dark">
                <div class="col-12 aos-animation" data-animation="fadeInUp">
                    <h3 class="about heading">Our Services</h3>
                    <div class="heading-underline">
                    </div>
                </div>
                <div class="circless2 col-md-4">
                    <div class="aos-animation" data-animation="fadeInLeft">
                        <h3>Ecommerce portal Development</h3>
                        <div class="feature feature2">
                            <span class="fa-layers fa-3x">
                                <!-- <i class="fas fa-code orange"></i> -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 576 512">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path
                                        d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                                </svg>
                            </span>
                        </div>
                        <p class="lead">Crafting seamless and user-centric ecommerce portals that elevate online
                            shopping experiences through intuitive design, robust functionality, and secure
                            transactions.</p>
                    </div>
                </div>
                <div class="circless2 col-md-4">
                    <div class="aos-animation" data-animation="fadeInUp">
                        <h3>Responsive Custom Website Design</h3>
                        <div class="feature feature2">
                            <span class="fa-layers fa-3x">
                                <!-- <i class="fas fa-bold orange"></i> -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 640 512">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path
                                        d="M64 96c0-35.3 28.7-64 64-64H512c35.3 0 64 28.7 64 64V352H512V96H128V352H64V96zM0 403.2C0 392.6 8.6 384 19.2 384H620.8c10.6 0 19.2 8.6 19.2 19.2c0 42.4-34.4 76.8-76.8 76.8H76.8C34.4 480 0 445.6 0 403.2zM281 209l-31 31 31 31c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-48-48c-9.4-9.4-9.4-24.6 0-33.9l48-48c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9zM393 175l48 48c9.4 9.4 9.4 24.6 0 33.9l-48 48c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l31-31-31-31c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0z" />
                                </svg>
                            </span>
                        </div>
                        <p class="lead">Delivering cutting-edge responsive custom website design and development
                            tailored to your unique brand identity, ensuring optimal user experience across all devices.
                        </p>
                    </div>
                </div>
                <div class="circless2 col-md-4">
                    <div class="aos-animation" data-animation="fadeInRight">
                        <h3>Search Engine optimization</h3>
                        <div class="feature feature2">
                            <span class="fa-layers fa-3x">
                                <!-- <i class="fab fa-css3 orange"></i> -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 460 512">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                    <path
                                        d="M220.6 130.3l-67.2 28.2V43.2L98.7 233.5l54.7-24.2v130.3l67.2-209.3zm-83.2-96.7l-1.3 4.7-15.2 52.9C80.6 106.7 52 145.8 52 191.5c0 52.3 34.3 95.9 83.4 105.5v53.6C57.5 340.1 0 272.4 0 191.6c0-80.5 59.8-147.2 137.4-158zm311.4 447.2c-11.2 11.2-23.1 12.3-28.6 10.5-5.4-1.8-27.1-19.9-60.4-44.4-33.3-24.6-33.6-35.7-43-56.7-9.4-20.9-30.4-42.6-57.5-52.4l-9.7-14.7c-24.7 16.9-53 26.9-81.3 28.7l2.1-6.6 15.9-49.5c46.5-11.9 80.9-54 80.9-104.2 0-54.5-38.4-102.1-96-107.1V32.3C254.4 37.4 320 106.8 320 191.6c0 33.6-11.2 64.7-29 90.4l14.6 9.6c9.8 27.1 31.5 48 52.4 57.4s32.2 9.7 56.8 43c24.6 33.2 42.7 54.9 44.5 60.3s.7 17.3-10.5 28.5zm-9.9-17.9c0-4.4-3.6-8-8-8s-8 3.6-8 8 3.6 8 8 8 8-3.6 8-8z" />
                                </svg>
                            </span>
                        </div>
                        <p class="lead">Elevating online visibility and driving organic traffic through strategic and
                            results-driven Search Engine Optimization (SEO) services, tailored to boost your website's
                            ranking and enhance its digital presence.</p>
                    </div>
                </div>
            </div>
            <div class="fixed-wrap">
                <div id="fixed">
                </div>
            </div>
        </div>
    </div>
    <!-- Start Portfolio Section -->
    <section id="projects">
        <div id="portfolio" class="offset">
            <div class="row padding">
                <div class="col-12 aos-animation" data-animation="fadeInUp">
                    <h3 class="about heading project-tile">Portfolio</h3>
                    <div class="heading-underline">
                    </div>
                </div>
            </div>
            <!--Start Of The Portfolio Grid -->
            <div class="circless2 container-fluid">
                <div class="row no-padding">
                    <div class="col-sm-12 col-md-6">
                        <div class="aos-animation" data-animation="bounceInLeft" data-delay="0.2s">
                            <div class="portfolio-item">
                                <a href="http://www.virtualed.in/" target="_blank">
                                    <img class="example-image" src="img/virtualed.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="aos-animation" data-animation="bounceInLeft">
                            <div class="portfolio-item">
                                <a href="https://www.mocktestseries.in/" target="_blank">
                                    <img class="example-image" src="img/mts.png">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="aos-animation" data-animation="fadeInUp">
                <div class="narrow text-center">
                    <div class="col-12">
                        <p class="bottom lead">
                            Get in contact with us to see more of our great portfolio design work in addition
                            to web development projects such as websites, apps and more!
                        </p>
                        <!-- <a id="profile-link" target="_blank" class="btn btn-secondary btn-sm"
                            href="https://github.com/Ceci007">profile link</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Pricing Section -->
    <!-- <div id="pricing" class="offset">
       
        <div class="jumbotron">
            <div class="narrow">
                <div class="aos-animation" data-animation="fadeInUp">
                    <h3 class="heading">Pricing</h3>
                    <div class="heading-underline">
                    </div>
                </div>
                
                <div class="row justify-content-md-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="aos-animation" data-animation="fadeInLeft">
                            <div class="pricing-column text-center">
                                
                                <h3>BASIC</h3>
                                <p>The Basic Plan, the best plan to get you started off.</p>
                                <div class="pricing-features">
                                    <h4><span class="item">Domain Names:</span> 1</h4>
                                    <h4><span class="item">Email Addresses:</span> 1</h4>
                                    <h4><span class="item">Hard Drive:</span> 50GB</h4>
                                </div>
                                <h2>$49</h2>
                                <a href="#contact" class="btn btn-secondary btn-sm">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="aos-animation" data-animation="fadeInUp">
                            <div class="pricing-column text-center">
                                <div class="ribbon">
                                    Best Value
                                </div>
                                <h3>PRO</h3>
                                <p>The Pro Plan, the best overall value you can get.</p>
                                <div class="pricing-features">
                                    <h4><span class="item">Domain Names:</span> 5</h4>
                                    <h4><span class="item">Email Addresses:</span> 3</h4>
                                    <h4><span class="item">Hard Drive:</span> 100GB</h4>
                                </div>
                                <h2>$99</h2>
                                <a href="#contact" class="btn btn-orange btn-sm">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="aos-animation" data-animation="fadeInRight">
                            <div class="pricing-column text-center">
                                <h3>PREMIUM</h3>
                                <p>Go Premium if you need a little extra space.</p>
                                <div class="pricing-features">
                                    <h4><span class="item">Domain Names:</span> 10</h4>
                                    <h4><span class="item">Email Addresses:</span> 5</h4>
                                    <h4><span class="item">Hard Drive:</span> 150GB</h4>
                                </div>
                                <h2>$149</h2>
                                <a href="#contact" class="btn btn-secondary btn-sm">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Start Skills Section -->
    <div id="skills" class="offset">
        <!-- Start Jumbotron -->
        <div class="jumbotron">
            <div class="narrow">
                <div class="col-12 aos-animation" data-animation="fadeInUp">
                    <h3 class="about heading">Our Expertise Technologies</h3>
                    <!-- <div class="heading-underline"></div> -->
                    <p class="about" style="text-align: center;">Development Technologies</p>
                    <div class="heading-underline"></div>

                </div>
                <div class="tech aos-animation" data-animation="fadeInUp">
                    <div class="row text-center">
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fas fa-clock"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2370" height="2500"
                                        preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 270" id="angular">
                                        <path fill="#B3B3B3"
                                            d="M127.606.341L.849 44.95 20.88 211.022l106.86 58.732 107.412-59.528L255.175 44.16 127.606.341z">
                                        </path>
                                        <path fill="#A6120D"
                                            d="M242.532 53.758L127.31 14.466v241.256l96.561-53.441 18.66-148.523z">
                                        </path>
                                        <path fill="#DD1B16"
                                            d="M15.073 54.466l17.165 148.525 95.07 52.731V14.462L15.074 54.465z"></path>
                                        <path fill="#F2F2F2"
                                            d="M159.027 142.898L127.31 157.73H93.881l-15.714 39.305-29.228.54L127.31 23.227l31.717 119.672zm-3.066-7.467l-28.44-56.303-23.329 55.334h23.117l28.652.97z">
                                        </path>
                                        <path fill="#B3B3B3"
                                            d="M127.309 23.226l.21 55.902 26.47 55.377h-26.62l-.06 23.189 36.81.035 17.204 39.852 27.967.518-81.981-174.873z">
                                        </path>
                                    </svg>
                                </span>
                                <h3><span class="counter">Angular</span></h3>
                                <!-- <p>Class Minutes</p> -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fab fa-codepen"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 25.5" id="react">
                                        <circle cx="12" cy="11.999" r="2.147" fill="#53C1DE"></circle>
                                        <path fill="#53C1DE"
                                            d="M4.514 15.801c.211.07.422.141.638.202-.07.281-.131.558-.188.844-.492 2.602-.108 4.664 1.12 5.372 1.266.731 3.394-.019 5.466-1.833.164-.145.328-.295.492-.455.206.202.422.394.637.581 2.006 1.725 3.989 2.423 5.213 1.716 1.266-.731 1.678-2.948 1.144-5.648a18.477 18.477 0 0 0-.141-.633c.15-.042.295-.089.441-.136 2.705-.895 4.664-2.344 4.664-3.83 0-1.42-1.847-2.798-4.397-3.675v-.001a24.589 24.589 0 0 0-.759-.239c.042-.173.08-.347.117-.52.577-2.794.197-5.038-1.083-5.779-1.233-.708-3.244.028-5.278 1.8-.202.173-.398.356-.586.539a14.702 14.702 0 0 0-.389-.361C9.492 1.851 7.355 1.054 6.075 1.8c-1.228.713-1.594 2.827-1.078 5.469.052.263.108.52.173.783-.3.084-.595.178-.872.277C1.795 9.196 0 10.565 0 11.981c0 1.463 1.912 2.929 4.514 3.82zm6.375 3.819a8.585 8.585 0 0 1-2.644 1.655c-.52.248-1.12.272-1.655.061-.745-.431-1.055-2.086-.633-4.313.052-.262.108-.525.173-.783 1.05.225 2.109.38 3.183.459a24.606 24.606 0 0 0 2.025 2.503c-.15.145-.3.286-.45.417l.001.001zm5.953-8.802a36.56 36.56 0 0 0-.68-1.228c-.23-.398-.469-.792-.717-1.181.755.094 1.477.22 2.152.375a20.737 20.737 0 0 1-.755 2.034zm.009 2.334c.3.68.563 1.369.792 2.077-.727.164-1.462.291-2.203.375a32.717 32.717 0 0 0 1.411-2.452zm-.542-1.166a31.495 31.495 0 0 1-2.146 3.74c-.698.052-1.425.075-2.161.075s-1.448-.023-2.137-.066a28.48 28.48 0 0 1-2.161-3.731h-.002a28.24 28.24 0 0 1 2.147-3.726 29.151 29.151 0 0 1 4.304 0c.398.591.778 1.195 1.139 1.814a32.18 32.18 0 0 1 1.017 1.894zM7.832 9.599c-.23.398-.455.805-.666 1.218a22.302 22.302 0 0 1-.75-2.043c.675-.15 1.392-.272 2.137-.366-.247.389-.491.787-.721 1.191zm-.665 3.59c.216.413.436.821.67 1.224.239.408.483.816.741 1.214a21.23 21.23 0 0 1-2.175-.352c.206-.675.464-1.373.764-2.086zm4.871 5.291a21.873 21.873 0 0 1-1.42-1.701 32.91 32.91 0 0 0 2.808-.005 19.942 19.942 0 0 1-1.388 1.706zm6.127 1.408a2.086 2.086 0 0 1-.774 1.466c-.745.431-2.334-.131-4.05-1.603a20.163 20.163 0 0 1-.595-.539 23.21 23.21 0 0 0 1.978-2.512 23.126 23.126 0 0 0 3.197-.492c.047.192.089.384.127.572a8.54 8.54 0 0 1 .117 3.108zm.407-10.856c.244.07.478.145.703.22 2.184.75 3.717 1.866 3.717 2.719 0 .919-1.636 2.105-3.975 2.878-.131.042-.262.084-.398.122a23.84 23.84 0 0 0-1.195-2.991c.45-.956.83-1.941 1.148-2.948zM13.26 4.326c1.745-1.518 3.371-2.113 4.112-1.687.792.455 1.097 2.292.6 4.706a7.988 7.988 0 0 1-.108.469 24.1 24.1 0 0 0-3.155-.497 23.536 23.536 0 0 0-1.997-2.49c.183-.173.361-.337.548-.501zm-1.25 1.219c.492.534.956 1.096 1.387 1.677a30.883 30.883 0 0 0-2.789 0c.459-.604.933-1.166 1.402-1.677zM6.572 2.672c.788-.459 2.536.197 4.378 1.828.117.103.234.216.356.328a23.643 23.643 0 0 0-2.011 2.488 24.72 24.72 0 0 0-3.15.488c-.061-.239-.112-.483-.164-.727-.441-2.269-.15-3.979.591-4.405zM4.627 9.28c.267-.094.539-.178.811-.258a24.986 24.986 0 0 0 1.148 2.981c-.45.98-.839 1.992-1.162 3.023l-.001.001a11.205 11.205 0 0 1-.581-.183c-.998-.314-2.133-.811-2.953-1.462a2.103 2.103 0 0 1-.881-1.402c0-.858 1.481-1.955 3.619-2.7z">
                                        </path>
                                    </svg>
                                </span>
                                <h3><span class="counter">React</span></h3>
                                <!-- <p>Web Dev Files</p> -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fas fa-users" data-fa-transform="left-2"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 25.5" id="ionic">
                                        <path fill="#4E8FF6"
                                            d="M12 6.529a5.475 5.475 0 0 0-5.471 5.47 5.475 5.475 0 0 0 5.47 5.47 5.475 5.475 0 0 0 5.47-5.47A5.479 5.479 0 0 0 12 6.529z">
                                        </path>
                                        <circle cx="19.85" cy="4.522" r="2.494" fill="#4E8FF6"></circle>
                                        <path fill="#4E8FF6"
                                            d="M12 24c6.619 0 12-5.381 12-12 0-1.73-.361-3.403-1.078-4.973l-.001-.001-.103-.23-.169.188c-.408.464-.928.82-1.505 1.036l-.159.061.066.155a9.586 9.586 0 0 1 .75 3.749v.01c0 5.405-4.397 9.806-9.806 9.806s-9.802-4.397-9.802-9.802 4.402-9.806 9.806-9.806c1.467 0 2.883.319 4.2.947l.155.075.066-.155c.254-.582.63-1.07 1.099-1.447l.007-.006.197-.159-.225-.117A11.745 11.745 0 0 0 12.028 0H12C5.381 0 0 5.381 0 12s5.381 12 12 12z">
                                        </path>
                                    </svg>
                                </span>
                                <h3><span class="counter">Ionic</span></h3>
                                <!-- <p>24/7 support</p> -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fas fa-cloud-download-alt" data-fa-transform="left-1"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        viewBox="0 0 24 25.5" id="firebase">
                                        <polygon fill="#F57F17"
                                            points="12.314 10.903 3.336 19.254 10.086 6.408 12.314 10.903"></polygon>
                                        <path fill="#FFA000"
                                            d="M10.086,6.408l-6.75,12.846L6.344,0.477c0.113-0.582,0.443-0.641,0.741-0.126L10.086,6.408L10.086,6.408z">
                                        </path>
                                        <polygon fill="#D56F14"
                                            points="6.711 12.831 3.336 19.254 6.711 16.115 6.711 12.831"></polygon>
                                        <path fill="#DE8B00"
                                            d="M6.689,0H6.67C6.525,0.007,6.404,0.169,6.344,0.477L3.336,19.254l3.375-6.423V0.002C6.704,0.001,6.697,0,6.689,0L6.689,0z">
                                        </path>
                                        <path fill="#FFA000"
                                            d="M14.714,8.669l-2.4,2.235l-2.229-4.496l1.152-2.585c0.291-0.516,0.766-0.523,1.058,0L14.714,8.669L14.714,8.669z">
                                        </path>
                                        <path fill="#DE8B00"
                                            d="M11.767,3.433c-0.192,0-0.385,0.131-0.531,0.389l-1.152,2.585L12,10.271V3.499C11.925,3.455,11.846,3.433,11.767,3.433L11.767,3.433z">
                                        </path>
                                        <path fill="#FFCA28"
                                            d="M17.346,5.251c0.43-0.41,0.873-0.272,0.984,0.311l2.334,13.58l-7.741,4.648C12.651,23.94,11.931,24,11.931,24s-0.654-0.08-0.905-0.218l-7.689-4.528L17.346,5.251L17.346,5.251z">
                                        </path>
                                        <path fill="#DEB023"
                                            d="M17.832,5.015c-0.151,0-0.32,0.077-0.487,0.236L3.336,19.254l7.689,4.528C11.276,23.921,11.931,24,11.931,24s0.721-0.06,0.992-0.211l1.595-0.958L18.021,5.06C17.963,5.03,17.9,5.015,17.832,5.015L17.832,5.015z">
                                        </path>
                                    </svg>
                                </span>
                                <h3><span class="counter">Firebase</span></h3>
                                <!-- <p>Resources</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="aos-animation" data-animation="fadeInUp">
                    <div class="narrow text-center">
                        <div class="col-12">
                            <p class="lead">
                                Want to learn more about our design and development skills?
                            </p>
                            <a href="#contact" class="btn btn-orange btn-sm">contact us</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="narrow">
                <div class="col-12 aos-animation" data-animation="fadeInUp">
                    <!-- <h3 class="heading">Our Expertise Technologies</h3> -->
                    <!-- <div class="heading-underline"></div> -->
                    <p class="about" style="text-align: center;">Databases</p>
                    <div class="heading-underline"></div>

                </div>
                <div class="tech aos-animation" data-animation="fadeInUp">
                    <div class="row text-center">
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fas fa-clock"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="mysql">
                                        <path fill="#105E86"
                                            d="M6.532 19.554c-.146 0-.276-.009-.386-.026v.485c.226.09.413.135.566.135.573 0 1.101-.35 1.583-1.053.616-.91 1.114-2.371 1.492-4.379h-.88a14.741 14.741 0 0 1-.835 3.419c.028-.209-.041-.576-.205-1.102l-.727-2.317h-.91l1.014 3.099c.153.465.23.775.23.927 0 .219-.098.417-.295.594-.164.144-.379.218-.647.218z">
                                        </path>
                                        <path fill="#DE8A03" d="M19.482 13.293v5.429h2.63v-.668h-1.745v-4.761z"></path>
                                        <path fill="#105E86"
                                            d="M1.04 14.392h.01l1.4 4.33h.705l1.41-4.33h.008a49.03 49.03 0 0 1 .27 4.33h.93a57.767 57.767 0 0 0-.428-5.429H4.25l-1.347 3.99h-.008l-1.335-3.99H.41A54.641 54.641 0 0 0 0 18.722h.845c.027-1.588.092-3.031.195-4.33z">
                                        </path>
                                        <path fill="#DE8A03"
                                            d="M18.679 15.906c0-1.796-.718-2.696-2.155-2.696-.704 0-1.254.228-1.65.684-.43.499-.646 1.233-.646 2.204 0 .954.19 1.655.574 2.101.35.403.877.604 1.583.604.264 0 .506-.032.725-.096l1.325.758.36-.61h-.003l-1.016-.491c.09-.075.177-.155.255-.245.433-.498.648-1.236.648-2.213zm-2.203 2.225c-.445 0-.77-.164-.978-.491l.002-.005c-.225-.353-.337-.923-.337-1.704 0-1.368.424-2.052 1.27-2.052.443 0 .77.164.977.491.224.355.336.919.336 1.692 0 1.378-.424 2.069-1.27 2.069zM13.2 16.074s-.794-.447-1.187-.658c-.432-.236-.666-.513-.666-.834a.67.67 0 0 1 .248-.515c.152-.136.371-.202.654-.202.349 0 .704.076 1.064.226l.213-.467a2.544 2.544 0 0 0-1.4-.402c-.5 0-.905.134-1.22.407-.313.27-.47.623-.47 1.065 0 .531.21.854.632 1.156 0 0 .775.436 1.163.645.418.231.648.506.648.83a.737.737 0 0 1-.3.604c-.19.144-.451.216-.783.216-.357 0-.752-.106-1.19-.322l-.237.467c.509.337 1.03.506 1.573.506.581 0 1.04-.147 1.384-.442.344-.294.516-.673.516-1.135l.006.003c0-.529-.215-.848-.648-1.148z">
                                        </path>
                                        <path fill="#105E86"
                                            d="M16.405 5.768c-.115 0-.193.014-.274.032v.013h.014c.054.102.146.177.214.268.054.105.1.21.154.314l.014-.015c.094-.065.14-.169.14-.327-.04-.046-.046-.092-.08-.137-.04-.066-.126-.098-.18-.15l-.002.002z">
                                        </path>
                                        <path fill="#105E86"
                                            d="M23.695 13.2a3.215 3.215 0 0 0-.695-.663c-.214-.143-.682-.344-.77-.584l-.013-.014c.146-.013.32-.065.46-.104.227-.059.435-.046.67-.104.106-.026.213-.059.32-.092v-.059c-.12-.118-.21-.278-.334-.388a8.86 8.86 0 0 0-1.104-.808c-.21-.132-.476-.216-.697-.328-.08-.039-.214-.059-.26-.125-.12-.143-.19-.334-.275-.505-.192-.361-.38-.761-.547-1.142-.12-.257-.193-.513-.34-.749-.69-1.116-1.437-1.793-2.586-2.454-.247-.137-.543-.196-.856-.269-.167-.008-.334-.02-.5-.027-.11-.046-.216-.171-.31-.231-.38-.236-1.364-.746-1.644-.071-.18.426.267.846.422 1.062.115.15.26.322.34.491.047.114.06.231.107.35.106.289.207.61.347.881.073.137.153.282.247.405.054.072.146.105.167.223-.094.134-.1.328-.154.491-.24.743-.146 1.662.194 2.209.107.163.362.524.703.386.3-.118.234-.491.32-.82.02-.079.007-.131.048-.184v.015c.094.185.188.36.274.545.206.322.566.656.867.879.16.118.287.322.487.395v-.02h-.015c-.043-.057-.1-.084-.154-.131a3.384 3.384 0 0 1-.35-.393 8.58 8.58 0 0 1-.747-1.196c-.11-.206-.202-.428-.29-.631-.04-.078-.04-.196-.107-.236-.1.143-.247.268-.32.445-.127.283-.14.63-.188.992-.027.007-.014 0-.027.014-.214-.051-.287-.269-.367-.452-.2-.466-.233-1.215-.06-1.753.047-.137.247-.571.167-.703-.042-.125-.174-.196-.247-.297a2.444 2.444 0 0 1-.24-.419c-.16-.367-.24-.774-.414-1.141-.08-.17-.22-.348-.334-.504-.127-.177-.267-.301-.368-.511-.033-.072-.08-.191-.027-.269.014-.053.042-.074.094-.088.088-.071.335.022.422.061.247.098.455.19.662.328.094.065.195.189.315.222h.14c.214.046.455.014.655.072.355.112.675.275.962.452a5.885 5.885 0 0 1 2.085 2.244c.08.151.115.29.188.447.14.324.313.651.455.964.14.309.275.625.476.881.1.137.502.209.682.281.133.059.34.113.46.185.23.137.454.295.67.446.11.075.443.239.463.371-.535-.014-.95.039-1.297.185-.1.039-.26.039-.274.164.055.052.063.137.11.21.08.131.218.307.346.4.14.108.28.212.427.304.26.157.555.25.81.408.145.092.293.209.44.307.073.049.12.138.214.169V13.6c-.046-.059-.06-.144-.105-.21-.067-.066-.134-.125-.2-.19z">
                                        </path>
                                    </svg>
                                </span>
                                <h3><span class="counter">My Sql</span></h3>
                                <!-- <p>Class Minutes</p> -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fab fa-codepen"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 52 52"
                                        viewBox="0 0 52 52" id="data-server-protection">
                                        <circle cx="22.042" cy="46.97" r="3.03" fill="#8D94C9"></circle>
                                        <path d="M25.07098,46.96743c0,1.67529-1.35836,3.03365-3.02464,3.03365c-1.15911,0-2.16428-0.64298-2.6714-1.59382
					c0.42559,0.21733,0.90557,0.34412,1.4217,0.34412c1.67535,0,3.03371-1.3493,3.03371-3.02459
					c0-0.51618-0.13586-1.00523-0.37132-1.43082C24.41893,44.80309,25.07098,45.80827,25.07098,46.96743z" opacity=".07">
                                        </path>
                                        <path fill="#66CDF5" d="M42.0832,9.12594v7.7949c0,0.66279-0.5475,1.19588-1.2103,1.19588H3.19363
						c-0.66279,0-1.19588-0.53308-1.19588-1.19588v-7.7949c0-0.66279,0.53308-1.2103,1.19588-1.2103H40.8729
						C41.5357,7.91564,42.0832,8.46314,42.0832,9.12594z"></path>
                                        <path d="M42.08631,9.13619v7.79459c0,0.66636-0.55238,1.20119-1.20996,1.20119H3.19331
						c-0.66636,0-1.19246-0.53482-1.19246-1.20119v-0.85045h33.06244c2.74433,0,4.97138-2.22706,4.97138-4.97138V7.92623h0.84168
						C41.53394,7.92623,42.08631,8.47861,42.08631,9.13619z" opacity=".07"></path>
                                        <g>
                                            <path fill="#7DC79C" d="M42.0832,19.32701v7.7949c0,0.66279-0.5475,1.19588-1.2103,1.19588H3.19363
						c-0.66279,0-1.19588-0.53308-1.19588-1.19588v-7.7949c0-0.6628,0.53308-1.2103,1.19588-1.2103H40.8729
						C41.5357,18.11671,42.0832,18.66422,42.0832,19.32701z"></path>
                                            <path d="M42.08631,19.3309v7.79459c0,0.66636-0.55238,1.20119-1.20996,1.20119H3.19331
						c-0.66636,0-1.19246-0.53482-1.19246-1.20119v-0.85045h33.06244c2.74433,0,4.97138-2.22706,4.97138-4.97138v-3.18272h0.84168
						C41.53394,18.12093,42.08631,18.67331,42.08631,19.3309z" opacity=".07"></path>
                                        </g>
                                        <g>
                                            <path fill="#F06982" d="M42.0832,29.52809v7.7949c0,0.66279-0.5475,1.19588-1.2103,1.19588H3.19363
						c-0.66279,0-1.19588-0.53308-1.19588-1.19588v-7.7949c0-0.66279,0.53308-1.2103,1.19588-1.2103H40.8729
						C41.5357,28.31779,42.0832,28.8653,42.0832,29.52809z"></path>
                                            <path d="M42.08631,29.5256v7.79459c0,0.66636-0.55238,1.20119-1.20996,1.20119H3.19331
						c-0.66636,0-1.19246-0.53482-1.19246-1.20119v-0.85045h33.06244c2.74433,0,4.97138-2.22705,4.97138-4.97138v-3.18272h0.84168
						C41.53394,28.31564,42.08631,28.86801,42.08631,29.5256z" opacity=".07"></path>
                                            <path fill="#293C66"
                                                d="M6.552 14.02275h16.49023c.55273 0 1-.44775 1-1s-.44727-1-1-1H6.552c-.55273 0-1 .44775-1 1S5.99927 14.02275 6.552 14.02275zM37.52527 14.45952c.79242 0 1.4408-.63397 1.4408-1.4408 0-.79242-.64838-1.4408-1.4408-1.4408s-1.4408.64838-1.4408 1.4408C36.08447 13.82555 36.73285 14.45952 37.52527 14.45952zM33.09033 14.45952c.79242 0 1.4408-.63397 1.4408-1.4408 0-.79242-.64838-1.4408-1.4408-1.4408s-1.4408.64838-1.4408 1.4408C31.64954 13.82555 32.29791 14.45952 33.09033 14.45952zM28.65546 14.45952c.79236 0 1.44073-.63397 1.44073-1.4408 0-.79242-.64838-1.4408-1.44073-1.4408-.79242 0-1.4408.64838-1.4408 1.4408C27.21466 13.82555 27.86304 14.45952 28.65546 14.45952zM6.552 24.22392h16.49023c.55273 0 1-.44775 1-1s-.44727-1-1-1H6.552c-.55273 0-1 .44775-1 1S5.99927 24.22392 6.552 24.22392zM37.52527 24.66057c.79242 0 1.4408-.63391 1.4408-1.4408 0-.79242-.64838-1.4408-1.4408-1.4408s-1.4408.64838-1.4408 1.4408C36.08447 24.02666 36.73285 24.66057 37.52527 24.66057zM33.09033 24.66057c.79242 0 1.4408-.63391 1.4408-1.4408 0-.79242-.64838-1.4408-1.4408-1.4408s-1.4408.64838-1.4408 1.4408C31.64954 24.02666 32.29791 24.66057 33.09033 24.66057zM28.65546 24.66057c.79236 0 1.44073-.63391 1.44073-1.4408 0-.79242-.64838-1.4408-1.44073-1.4408-.79242 0-1.4408.64838-1.4408 1.4408C27.21466 24.02666 27.86304 24.66057 28.65546 24.66057zM23.04224 32.42509H6.552c-.55273 0-1 .44775-1 1s.44727 1 1 1h16.49023c.55273 0 1-.44775 1-1S23.59497 32.42509 23.04224 32.42509zM37.52527 31.98009c-.79242 0-1.4408.64838-1.4408 1.4408 0 .80682.64838 1.4408 1.4408 1.4408s1.4408-.63397 1.4408-1.4408C38.96606 32.62846 38.31769 31.98009 37.52527 31.98009zM33.09033 31.98009c-.79242 0-1.4408.64838-1.4408 1.4408 0 .80682.64838 1.4408 1.4408 1.4408s1.4408-.63397 1.4408-1.4408C34.53113 32.62846 33.88275 31.98009 33.09033 31.98009zM28.65546 31.98009c-.79242 0-1.4408.64838-1.4408 1.4408 0 .80682.64838 1.4408 1.4408 1.4408.79236 0 1.44073-.63397 1.44073-1.4408C30.09619 32.62846 29.44781 31.98009 28.65546 31.98009z">
                                            </path>
                                        </g>
                                        <g>
                                            <path fill="#FFF" d="M49.99773,6.45078v2.22481c0,3.26069-0.8737,6.39532-2.45901,9.11553
				c-1.58532,2.72928-3.88221,5.03519-6.71056,6.6475c-5.67468-3.22468-9.17859-9.24165-9.17859-15.76303V6.45078
				c4.9541-0.62152,9.17859-4.44968,9.17859-4.44968S45.04363,5.82926,49.99773,6.45078z"></path>
                                            <path fill="#3E5176" d="M40.82346,5.78815c-1.47644,1.02112-3.65369,2.30145-6.17334,3.06946
					c0.01544,1.27667,0.20471,2.52649,0.52954,3.73193h5.6438V5.78815z"></path>
                                            <path fill="#FBBA73"
                                                d="M46.47971 12.58954c.32477-1.21307.50195-2.46655.51709-3.73193-2.52051-.76855-4.69629-2.04981-6.16992-3.07178-.0011.00073-.00232.00159-.00342.00232v6.80139H46.47971zM35.17966 12.58954c.88782 3.29468 2.86365 6.2312 5.6438 8.27679v-8.27679H35.17966z">
                                            </path>
                                            <path fill="#3E5176" d="M40.82346,12.58954v8.27679c0.00085,0.00061,0.00159,0.0014,0.00244,0.00201
					c1.6709-1.22949,3.07715-2.79053,4.12109-4.5874c0.67566-1.15936,1.18768-2.40253,1.53271-3.69141H40.82346z"></path>
                                            <path fill="#293C66" d="M50.12,5.46123c-4.57001-0.57996-8.57996-4.15997-8.62-4.19995c-0.38-0.35004-0.95996-0.35004-1.33997,0
			c-0.04004,0.02997-4.06,3.62-8.63,4.19995c-0.51001,0.06-0.88,0.49005-0.88,0.99005v0.45996H3.19c-1.21002,0-2.19,1-2.19,2.21002
			v7.79999c0,0.44,0.13,0.84998,0.35999,1.20001C1.13,18.47124,1,18.88127,1,19.33122v7.79004c0,0.44,0.13,0.84998,0.35999,1.20001
			C1.13,28.67125,1,29.08122,1,29.53123v7.79004c0,1.20996,0.97998,2.19995,2.19,2.19995h17.85004v3.56
			c-1.41003,0.36005-2.52002,1.47003-2.89001,2.89001H2c-0.54999,0-1,0.45001-1,1s0.45001,1,1,1h16.15002
			c0.45001,1.73999,2.01996,3.03003,3.89001,3.03003c1.87994,0,3.43994-1.29004,3.88995-3.03003h16.15002c0.56,0,1-0.45001,1-1
			s-0.44-1-1-1H25.92999c-0.35999-1.41998-1.46997-2.52997-2.88995-2.89001v-3.56H40.87c1.22003,0,2.21002-0.98999,2.21002-2.19995
			v-7.79004c0-0.45001-0.13-0.85999-0.35999-1.20996c0.22998-0.35004,0.35999-0.76001,0.35999-1.20001v-2.95001
			C48.16267,20.47685,51,14.6823,51,8.67125V6.45128C51,5.95128,50.62,5.52122,50.12,5.46123z M3,9.12126
			c0-0.10999,0.09003-0.21002,0.19-0.21002h27.46002C30.69,11.80125,31.38,14.61125,32.63,17.12126H3.19
			c-0.10999,0-0.19-0.09003-0.19-0.20001V9.12126z M24.07001,46.97124c0,1.12-0.90997,2.03003-2.02997,2.03003
			c-1.12006,0-2.03003-0.91003-2.03003-2.03003s0.90997-2.02997,2.03003-2.02997
			C23.16003,44.94127,24.07001,45.85124,24.07001,46.97124z M41.08002,37.32127c0,0.10999-0.09003,0.19995-0.21002,0.19995H3.19
			c-0.10999,0-0.19-0.08997-0.19-0.19995v-7.79004c0-0.12,0.09003-0.20996,0.19-0.20996H40.87
			c0.10999,0,0.21002,0.09998,0.21002,0.20996V37.32127z M41.08002,27.12126c0,0.10999-0.09003,0.20001-0.21002,0.20001H3.19
			c-0.10999,0-0.19-0.09003-0.19-0.20001v-7.79004c0-0.12,0.09003-0.20996,0.19-0.20996h30.58002
			c1.64001,2.52002,3.87,4.65997,6.56,6.19c0.15997,0.08002,0.33002,0.13,0.5,0.13c0.08002,0,0.16998-0.01001,0.25-0.04004V27.12126
			z M49,8.67125c0,5.63734-2.80241,11.25679-8.16998,14.60999c-9.08984-5.60537-8.12938-15.76579-8.17999-15.97998
			c2.8521-0.54839,5.91027-2.18828,8.17999-4c1.33002,1.06,4.46997,3.27997,8.16998,4V8.67125z"></path>
                                        </g>
                                    </svg>
                                </span>
                                <h3><span class="counter">SQL Server</span></h3>
                                <!-- <p>Web Dev Files</p> -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fas fa-users" data-fa-transform="left-2"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" id="mongodb">
                                        <path fill="#94795D" fill-rule="evenodd"
                                            d="M87.259 100.139c.169-.325.331-.612.469-.909.087-.19.221-.228.41-.223 1.133.032 2.266.067 3.4.078.963.01 1.928-.008 2.892-.019 1.086-.013 2.172-.07 3.257-.039 1.445.042 2.853.325 4.16.968 1.561.769 2.742 1.94 3.547 3.483.514.985.812 2.03.931 3.14.172 1.608.059 3.179-.451 4.717-.632 1.906-1.832 3.365-3.499 4.458-1.283.841-2.69 1.338-4.198 1.622-1.596.301-3.197.204-4.798.209-1.756.007-3.511-.031-5.267-.051-.307-.003-.351-.061-.27-.354l.075-.27c.171-.538.263-.562.809-.652.378-.061.77-.203 1.087-.413.184-.122.26-.44.332-.685.062-.214.065-.449.067-.675.025-3.425.051-6.849.065-10.272.003-.865-.017-1.732-.065-2.596-.034-.605-.357-1.019-1.077-1.162-.56-.111-1.124-.197-1.687-.296l-.189-.059zm16.076 8.293c-.076-.682-.113-1.37-.235-2.042-.292-1.613-.998-3.018-2.238-4.119-2.005-1.779-4.419-2.053-6.949-1.841-.576.048-.7.245-.709.837-.014.84-.028 1.68-.029 2.52-.004 2.664-.004 5.328 0 7.992.001.758.009 1.516.031 2.272.024.774.305 1.429 1.063 1.729 1.195.473 2.452.529 3.706.336 2.003-.307 3.404-1.474 4.344-3.223.744-1.388.954-2.903 1.016-4.461zM108.204 117.503c-.024-.415.146-.758.356-1.073.057-.085.253-.081.388-.108l1.146-.227c.405-.086.618-.358.675-.755.038-.262.074-.527.077-.792.025-2.097.049-4.194.059-6.291.01-2.1.002-4.2.002-6.3l-.009-.401c-.041-.675-.367-1.025-1.037-1.124l-1.453-.221c-.179-.024-.244-.11-.179-.269.112-.271.219-.552.377-.796.059-.09.258-.125.392-.122.694.01 1.388.062 2.082.061l6.041-.036c1.164-.001 2.288.202 3.332.759 1.149.612 1.792 1.559 1.976 2.849.192 1.355-.219 2.497-1.209 3.404-.407.374-.934.618-1.406.922l-.154.096c.438.161.855.3 1.261.466 1.188.487 2.133 1.248 2.633 2.463.395.959.395 1.959.161 2.953-.364 1.556-1.389 2.591-2.722 3.374-1.251.735-2.605 1.163-4.047 1.235-1.33.067-2.666.042-3.999.057l-.772.004c-1.284-.029-2.569-.062-3.854-.096l-.117-.032zm5.537-6.089h.013c0 .658-.009 1.316.003 1.974.008.426-.007.864.085 1.274.138.613.418 1.166 1.106 1.342.929.239 1.878.287 2.818.124 1.177-.205 2.116-.795 2.631-1.916.382-.833.439-1.716.308-2.618-.174-1.188-.805-2.05-1.854-2.615-.688-.371-1.422-.598-2.204-.628-.876-.033-1.753-.035-2.629-.062-.246-.007-.28.118-.279.32.005.934.002 1.869.002 2.805zm1.865-4.475c.479-.024 1.021-.031 1.56-.085 1.032-.103 1.759-.622 2.138-1.609.193-.501.185-1.017.19-1.538.015-1.357-.777-2.469-2.066-2.929-.995-.355-2.021-.361-3.053-.333-.418.011-.605.194-.611.615l-.062 5.489c-.003.218.091.312.303.319l1.601.071z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#50382B" fill-rule="evenodd"
                                            d="M10.543 116.448l-.073.944c-.68 0-1.307-.005-1.934.002-1.181.012-2.362.031-3.544.048l-.114.007c-.169-.02-.476-.02-.484-.07-.05-.281-.034-.576-.021-.867.001-.033.116-.075.183-.091l.919-.205c.573-.149.775-.396.802-.988.031-.667.062-1.335.065-2.002.009-1.642-.001-3.282.006-4.924.001-.384-.132-.67-.49-.826-.426-.188-.854-.372-1.285-.546-.204-.082-.469-.127-.445-.401.024-.279.281-.352.523-.407 1.002-.229 2.005-.452 3.004-.696.322-.079.63-.212 1.015-.346.02.208.057.406.053.604l-.059.941c-.001.106.054.248.133.307.048.037.209-.03.289-.092.854-.65 1.758-1.211 2.789-1.538 1.597-.507 2.968-.037 3.928 1.34.338.485.339.485.808.146.805-.585 1.647-1.101 2.589-1.441 2.068-.747 4.055.201 4.774 2.284.262.756.362 1.537.36 2.335l-.019 5.298c-.001.437.144.686.56.822.467.153.951.258 1.477.396l-.122.911c-.598 0-1.148-.004-1.698.001-1.344.012-2.688.019-4.031.05-.234.006-.295-.052-.307-.271-.039-.701-.045-.7.615-.858l.222-.057c.645-.176.86-.374.865-1.028.015-1.878.054-3.761-.041-5.635-.099-1.944-1.642-2.979-3.526-2.481-.615.162-1.172.446-1.69.814-.175.125-.208.269-.194.488.053.828.086 1.657.093 2.486.012 1.451-.006 2.902 0 4.354.002.588.203.813.784.949l.863.199.16.036c.012.276.023.552.01.828-.008.173-.142.188-.292.185-.839-.021-1.679-.049-2.518-.047-1.021.002-2.041.031-3.061.049h-.24c0-.293-.014-.573.01-.852.005-.067.123-.161.204-.182l1.006-.213c.427-.105.631-.324.655-.758.114-2.01.196-4.021.007-6.03-.037-.39-.164-.786-.326-1.145-.515-1.138-1.674-1.613-3.011-1.271-.635.162-1.208.453-1.75.82-.256.174-.378.404-.378.695 0 2.005.007 4.01.013 6.014l.011.773c.012.539.241.823.776.939.344.078.692.131 1.082.203z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#4F382B" fill-rule="evenodd"
                                            d="M71.001 105.285c.155.754.152 1.432-.402 1.946-.55.511-1.246.339-1.925.225.063.358.133.662.167.97.247 2.289-.738 3.988-2.861 4.959-.802.366-1.653.502-2.522.572-.432.034-.81.364-.851.719-.042.36.184.73.636.838.533.127 1.089.163 1.636.226 1.174.134 2.361.195 3.521.405 1.754.316 2.733 1.847 2.424 3.609-.275 1.568-1.183 2.709-2.449 3.584-2.133 1.478-4.473 1.91-6.965 1.156-1.425-.432-2.43-1.369-2.777-2.885-.174-.759.011-1.446.582-1.961.679-.61 1.418-1.154 2.129-1.73l.23-.231-.264-.185c-.725-.344-1.305-.815-1.53-1.633-.077-.277.003-.459.238-.601.4-.241.798-.486 1.193-.735.186-.116.37-.236.543-.37.236-.18.215-.314-.067-.418-.656-.242-1.239-.593-1.691-1.133-.755-.901-.969-1.974-.907-3.107.097-1.77 1.058-2.936 2.62-3.686 1.857-.891 3.72-.947 5.613-.135.7.3 1.438.364 2.189.312.561-.04 1.051-.252 1.49-.711zm-6.843 12.681c-1.394-.012-1.831.16-2.649.993-.916.934-.911 2.229.003 3.167.694.711 1.56 1.044 2.523 1.144 1.125.116 2.233.069 3.255-.494 1.09-.603 1.632-1.723 1.387-2.851-.203-.931-.889-1.357-1.724-1.602-.95-.278-1.932-.331-2.795-.357zm-2.738-8.908c.051.387.072.779.158 1.158.223.982.65 1.845 1.627 2.282 1.147.515 2.612.294 3.114-1.316.344-1.103.302-2.198-.113-3.274-.185-.48-.483-.886-.91-1.184-.996-.695-2.793-.787-3.525.749-.238.499-.331 1.03-.351 1.585z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#4F372B" fill-rule="evenodd"
                                            d="M47.35 105.038c.037.171.111.365.113.56.003.371-.037.742-.058 1.113v.322l.314-.24c.86-.708 1.784-1.311 2.86-1.636 1.942-.585 3.882.478 4.515 2.456.24.752.335 1.525.344 2.311.02 1.746.032 3.492.05 5.238.006.627.078.739.671.92.336.103.683.175 1.03.229.191.03.273.105.263.292l.002.172c-.007.723-.057.756-.758.754-1.678-.003-3.355.007-5.033.021-.5.004-.501.019-.551-.475l-.01-.284c.031-.426.041-.422.46-.484.282-.042.562-.107.837-.179.283-.073.419-.282.457-.562.019-.142.044-.284.043-.426-.024-1.908.007-3.818-.097-5.723-.084-1.541-1.26-2.459-2.807-2.354-.759.053-1.445.306-2.071.743-.413.289-.496.706-.494 1.155.008 1.784.025 3.568.044 5.353.004.391.015.782.052 1.17.039.424.188.595.604.687.398.088.804.139 1.229.21l.036.328c.014.765-.066.822-.809.819-1.735-.007-3.47.004-5.204.023-.273.004-.389-.082-.382-.348l-.004-.114c-.045-.689-.025-.715.627-.827l.308-.062c.706-.159.887-.347.897-1.064.033-2.271.045-4.541.068-6.812.003-.326-.12-.579-.424-.714-.426-.188-.856-.367-1.287-.544-.238-.098-.51-.16-.519-.489-.006-.232.242-.437.581-.506.681-.138 1.368-.253 2.041-.422.67-.167 1.328-.391 2.062-.611z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#4F382B" fill-rule="evenodd"
                                            d="M84.865 110.97c-.032 2.121-.583 3.836-2.083 5.123-1.9 1.633-4.864 2.188-7.287.967-1.034-.521-1.794-1.32-2.289-2.357-.759-1.595-.949-3.272-.553-4.99.392-1.699 1.421-2.93 2.961-3.727 1.584-.819 3.252-1.139 5.011-.709 2.225.543 3.824 2.357 4.142 4.667.057.405.079.815.098 1.026zm-2.577 1.149l-.086-.01c0-.2.011-.4-.002-.6-.073-1.246-.353-2.433-1.075-3.476-.685-.988-1.618-1.571-2.832-1.656-1.359-.096-2.501.664-2.902 2.052-.602 2.084-.398 4.115.66 6.024.461.832 1.144 1.446 2.059 1.769 1.793.631 3.383-.186 3.85-2.022.172-.678.222-1.387.328-2.081z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#4F372B" fill-rule="evenodd"
                                            d="M40.819 111.134c-.037 1.522-.396 2.929-1.336 4.152-1.007 1.31-2.391 2.01-3.965 2.305-1.861.348-3.609.032-5.104-1.217-.71-.594-1.195-1.355-1.515-2.221-.525-1.42-.656-2.875-.333-4.358.345-1.587 1.241-2.8 2.63-3.614 1.606-.939 3.339-1.358 5.19-.936 2.38.544 3.754 2.095 4.262 4.443.102.474.116.964.171 1.446zm-2.606 1.004l-.069-.01v-.286c-.039-1.396-.312-2.726-1.145-3.886-.617-.861-1.443-1.401-2.502-1.552-1.726-.246-2.854.778-3.228 2.169-.488 1.817-.335 3.612.42 5.335.471 1.074 1.215 1.911 2.358 2.317 1.782.633 3.396-.205 3.847-2.034.166-.669.216-1.367.319-2.053z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#439934" fill-rule="evenodd"
                                            d="M82.362 33.544c1.227 3.547 2.109 7.168 2.4 10.92.36 4.656.196 9.28-.786 13.859l-.126.366c-.308.001-.622-.038-.923.009-2.543.4-5.083.814-7.624 1.226-2.627.426-5.256.835-7.878 1.289-.929.16-2.079-.031-2.454 1.253l-.18.061.127-7.678-.129-18.526 1.224-.21c2.001-.327 4.002-.66 6.006-.979 2.39-.379 4.782-.749 7.174-1.119 1.056-.162 2.113-.313 3.169-.471z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#45A538" fill-rule="evenodd"
                                            d="M62.265 84.911c-1.291-1.11-2.627-2.171-3.864-3.339-6.658-6.28-11.529-13.673-13.928-22.586-.661-2.452-1.101-4.945-1.243-7.479-.1-1.774-.243-3.563-.117-5.328.333-4.693 1.012-9.341 2.388-13.862l.076-.105c.134.178.326.336.394.537 1.344 3.956 2.677 7.916 4.004 11.879 4.169 12.451 8.333 24.905 12.509 37.354.082.243.293.442.445.661l-.664 2.268z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#46A037" fill-rule="evenodd"
                                            d="M82.362 33.544c-1.057.157-2.114.309-3.169.471-2.392.37-4.784.74-7.174 1.119-2.003.318-4.004.651-6.006.979l-1.224.21-.01-.798c-.041-.656-.109-1.312-.118-1.968l-.137-12.554c-.032-2.619-.08-5.238-.133-7.856-.033-1.627-.068-3.255-.141-4.88-.04-.873-.181-1.742-.237-2.615-.033-.502.011-1.008.022-1.512.624 1.209 1.235 2.427 1.876 3.627 1.013 1.897 2.628 3.295 4.083 4.82 5.746 6.031 9.825 13.039 12.368 20.957z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#409433" fill-rule="evenodd"
                                            d="M64.792 62.527l.18-.061c.375-1.284 1.525-1.093 2.454-1.253 2.622-.454 5.251-.863 7.878-1.289 2.541-.411 5.081-.825 7.624-1.226.301-.047.615-.008.923-.009-.475 1.696-.849 3.429-1.452 5.078-.685 1.87-1.513 3.696-2.392 5.486-1.314 2.675-2.951 5.171-4.853 7.458-1.466 1.762-3.1 3.393-4.737 5.002-.906.889-1.972 1.614-2.966 2.414l-.258-.176-.927-.792-.959-2.104c-.661-2.462-1.007-4.968-1.065-7.516l.018-.428.131-1.854c.043-.633.101-1.265.128-1.898.096-2.276.182-4.554.273-6.832z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#4FAA41" fill-rule="evenodd"
                                            d="M64.792 62.527c-.09 2.278-.176 4.557-.273 6.835-.027.634-.084 1.266-.128 1.898l-.584.221c-1.298-3.821-2.597-7.602-3.867-11.392-2.101-6.271-4.176-12.551-6.274-18.824-1.693-5.062-3.401-10.121-5.118-15.176-.081-.236-.311-.422-.471-.631l3.74-6.877c.129.223.298.432.379.672 1.73 5.12 3.457 10.241 5.169 15.367 2.228 6.67 4.441 13.343 6.667 20.014.089.266.235.512.375.811l.512-.596c-.043 2.56-.085 5.118-.127 7.678z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#4AA73C" fill-rule="evenodd"
                                            d="M48.076 25.458c.161.209.391.395.471.631 1.717 5.055 3.425 10.113 5.118 15.176 2.098 6.273 4.173 12.553 6.274 18.824 1.27 3.79 2.569 7.57 3.867 11.392l.584-.221-.131 1.854-.119.427c-.203 2.029-.374 4.062-.622 6.087-.124 1.015-.389 2.011-.59 3.015-.151-.219-.363-.418-.445-.661-4.177-12.449-8.34-24.903-12.509-37.354-1.327-3.963-2.661-7.923-4.004-11.879-.068-.201-.26-.359-.394-.537l2.5-6.754z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#57AE47" fill-rule="evenodd"
                                            d="M64.918 54.849l-.512.596c-.14-.299-.286-.545-.375-.811-2.226-6.671-4.439-13.344-6.667-20.014-1.712-5.126-3.439-10.247-5.169-15.367-.081-.24-.25-.449-.379-.672l4.625-6.084c.146.194.354.367.429.586 1.284 3.76 2.556 7.523 3.822 11.289 1.182 3.518 2.346 7.04 3.542 10.552.08.235.359.401.545.601l.01.798.129 18.526z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#60B24F" fill-rule="evenodd"
                                            d="M64.779 35.525c-.187-.199-.465-.365-.545-.601-1.195-3.512-2.36-7.034-3.542-10.552-1.266-3.766-2.538-7.529-3.822-11.289-.075-.219-.283-.392-.429-.586 1.504-1.473 2.961-2.999 4.526-4.404 1.391-1.248 2.509-2.586 2.561-4.559l.11-.393.396.998c-.01.504-.055 1.01-.022 1.512.057.873.198 1.742.237 2.615.073 1.625.108 3.253.141 4.88.053 2.618.101 5.237.133 7.856l.137 12.554c.01.657.079 1.313.119 1.969z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#A9AA88" fill-rule="evenodd"
                                            d="M62.929 82.642c.201-1.004.466-2 .59-3.015.248-2.024.419-4.058.622-6.087l.051-.008.05.009c.058 2.548.404 5.054 1.065 7.516-.135.178-.324.335-.396.535-.555 1.566-1.079 3.145-1.637 4.71-.076.214-.29.381-.439.568l-.571-1.96.665-2.268z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#B6B598" fill-rule="evenodd"
                                            d="M62.835 86.871c.149-.188.363-.354.439-.568.558-1.565 1.082-3.144 1.637-4.71.071-.2.261-.357.396-.535l.959 2.104c-.189.268-.451.511-.556.81l-1.836 5.392c-.076.217-.333.369-.507.552l-.532-3.045z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#C2C1A7" fill-rule="evenodd"
                                            d="M63.367 89.915c.173-.183.431-.335.507-.552l1.836-5.392c.104-.299.367-.542.556-.81l.928.791c-.448.443-.697.955-.547 1.602l-.282.923c-.128.158-.314.296-.377.477-.641 1.836-1.252 3.682-1.898 5.517-.082.232-.309.415-.468.621l-.255-3.177z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#CECDB7" fill-rule="evenodd"
                                            d="M63.621 93.091c.16-.206.387-.389.468-.621.646-1.835 1.258-3.681 1.898-5.517.063-.181.249-.318.377-.477l-.389 4.236c-.104.12-.254.225-.304.364l-1.294 3.708c-.091.253-.265.479-.401.716-.121-.158-.337-.311-.347-.475-.038-.642-.011-1.289-.008-1.934z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#DBDAC7" fill-rule="evenodd"
                                            d="M63.977 95.501c.136-.237.31-.463.401-.716l1.294-3.708c.05-.14.201-.244.304-.364l.01 2.78-.931 2.387-1.078-.379z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#EBE9DC" fill-rule="evenodd"
                                            d="M65.055 95.88l.931-2.387.192 2.824-1.123-.437z" clip-rule="evenodd">
                                        </path>
                                        <path fill="#CECDB7" fill-rule="evenodd"
                                            d="M66.646 85.554c-.149-.646.099-1.158.547-1.602l.258.176-.805 1.426z"
                                            clip-rule="evenodd"></path>
                                        <path fill="#4FAA41" fill-rule="evenodd"
                                            d="M64.242 73.542l-.05-.009-.051.008.119-.427-.018.428z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                                <h3><span class="counter">Mongo DB</span></h3>
                                <!-- <p>24/7 support</p> -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fas fa-cloud-download-alt" data-fa-transform="left-1"></i> -->
                                    <img class="cassandraimg" src="img/cassandra-icon.svg" />
                                </span>
                                <h3><span class="counter">Cassandra</span></h3>
                                <!-- <p>Resources</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="aos-animation" data-animation="fadeInUp">
                    <div class="narrow text-center">
                        <div class="col-12">
                            <p class="lead">
                                Want to learn more about our design and development skills?
                            </p>
                            <a href="#contact" class="btn btn-orange btn-sm">contact us</a>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="narrow">
                <div class="col-12 aos-animation" data-animation="fadeInUp">
                    <!-- <h3 class="heading">Our Expertise Technologies</h3> -->
                    <!-- <div class="heading-underline"></div> -->
                    <p class="about" style="text-align: center;">Internet of Things</p>
                    <div class="heading-underline"></div>

                </div>
                <div class="tech aos-animation" data-animation="fadeInUp">
                    <div class="row text-center">
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fas fa-clock"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" id="aws"><path d="M14.29 19.84a7.1 7.1 0 0 1-.3-.67 3.08 3.08 0 0 1-.1-.83v-3A3.09 3.09 0 0 0 13.1 13a3.41 3.41 0 0 0-2.44-.76 5.65 5.65 0 0 0-1.45.18 5.22 5.22 0 0 0-1.21.45.73.73 0 0 0-.26.2.62.62 0 0 0-.06.32v.46c0 .19.06.29.19.29h.15l.36-.14a8.32 8.32 0 0 1 1-.32 4.49 4.49 0 0 1 1-.12 2.14 2.14 0 0 1 1.52.43 2.06 2.06 0 0 1 .43 1.49v.68c-.37-.09-.72-.16-1.07-.21a8.52 8.52 0 0 0-1-.07A3.34 3.34 0 0 0 8 16.6a2.37 2.37 0 0 0-.85 1.91 2.37 2.37 0 0 0 .69 1.79 2.53 2.53 0 0 0 1.87.7 3.46 3.46 0 0 0 2.74-1.28 5.51 5.51 0 0 0 .29.55 2.6 2.6 0 0 0 .33.43.4.4 0 0 0 .28.13.38.38 0 0 0 .24-.08l.59-.39a.32.32 0 0 0 .11-.49Zm-1.93-2.26a3.12 3.12 0 0 1-.09.81A1.52 1.52 0 0 1 12 19a2.17 2.17 0 0 1-.88.6 3.06 3.06 0 0 1-1 .16 1.38 1.38 0 0 1-.87-2.4 2.18 2.18 0 0 1 1.38-.36c.29 0 .58 0 .88.05s.58.1.85.16ZM17 20.3a.78.78 0 0 0 .19.37.58.58 0 0 0 .36.09h.8a.59.59 0 0 0 .37-.09.74.74 0 0 0 .18-.38l1.43-6 1.45 6a.61.61 0 0 0 .17.37.56.56 0 0 0 .38.1h.8a.56.56 0 0 0 .35-.1.72.72 0 0 0 .2-.36L26 13.11a.65.65 0 0 0 .06-.23.89.89 0 0 0 0-.15.2.2 0 0 0-.23-.23h-.87a.68.68 0 0 0-.36.09.84.84 0 0 0-.18.36l-1.62 6.24L21.31 13a.64.64 0 0 0-.17-.36.62.62 0 0 0-.38-.09H20a.47.47 0 0 0-.55.45L18 19.12 16.45 13a.8.8 0 0 0-.18-.36.57.57 0 0 0-.37-.09H15c-.15 0-.22.08-.22.23a1.28 1.28 0 0 0 .08.37Zm10 .17a4.07 4.07 0 0 0 1.07.37 6.28 6.28 0 0 0 1.43.17 4.48 4.48 0 0 0 1.34-.2 2.86 2.86 0 0 0 1-.52 2.45 2.45 0 0 0 .68-.82 2.35 2.35 0 0 0 .24-1.08 2.09 2.09 0 0 0-.43-1.3A2.81 2.81 0 0 0 31 16.2l-1.32-.42a2.76 2.76 0 0 1-1-.52.89.89 0 0 1-.28-.66.91.91 0 0 1 .44-.83 2.49 2.49 0 0 1 1.16-.26 4.15 4.15 0 0 1 1.79.37 1.08 1.08 0 0 0 .35.11c.14 0 .22-.1.22-.3v-.44a.45.45 0 0 0-.09-.3.76.76 0 0 0-.28-.24 2.6 2.6 0 0 0-.39-.17c-.17 0-.34-.1-.53-.14l-.6-.11h-.63a4.08 4.08 0 0 0-1.17.15 3.05 3.05 0 0 0-1 .49 2.33 2.33 0 0 0-.67.76 2.05 2.05 0 0 0-.25 1 2.27 2.27 0 0 0 .46 1.35 2.88 2.88 0 0 0 1.49.95l1.35.42a2.12 2.12 0 0 1 .94.48.91.91 0 0 1 .26.65 1 1 0 0 1-.49.89 2.56 2.56 0 0 1-1.36.3 5.29 5.29 0 0 1-1.11-.11 4.85 4.85 0 0 1-1-.32l-.23-.1h-.17c-.14 0-.22.1-.22.29V20a.62.62 0 0 0 .06.26.69.69 0 0 0 .32.21Zm3.82 4.36A27.71 27.71 0 0 1 20.3 27a28 28 0 0 1-13.86-3.69c-.34-.2-.6.15-.32.41A20.52 20.52 0 0 0 20 29a20.08 20.08 0 0 0 11.34-3.46c.48-.38.04-.94-.47-.71Zm3-1.75c-.33-.41-3.21-.77-5 .46-.27.2-.22.46.07.42 1-.12 3.2-.38 3.59.12s-.44 2.57-.81 3.5c-.11.27.13.39.38.17 1.75-1.38 2.18-4.25 1.84-4.67Z"></path></svg>
                                </span>
                                <h3><span class="counter">AWS Iot</span></h3>
                                <!-- <p>Class Minutes</p> -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fab fa-codepen"></i> -->
                                    <img class="azureimg" src="img/azure iot hub.svg"/>
                                </span>
                                <h3><span class="counter">Azure Iot</span></h3>
                                <!-- <p>Web Dev Files</p> -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fas fa-users" data-fa-transform="left-2"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2490" height="2500" preserveAspectRatio="xMidYMid" viewBox="0 0 256 257" id="windows"><path fill="#00ADEF" d="M0 36.357L104.62 22.11l.045 100.914-104.57.595L0 36.358zm104.57 98.293l.08 101.002L.081 221.275l-.006-87.302 104.494.677zm12.682-114.405L255.968 0v121.74l-138.716 1.1V20.246zM256 135.6l-.033 121.191-138.716-19.578-.194-101.84L256 135.6z"></path></svg>
                                </span>
                                <h3><span class="counter">Windows Iot</span></h3>
                                <!-- <p>24/7 support</p> -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fas fa-cloud-download-alt" data-fa-transform="left-1"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="bluetooth"><path fill="#2196F3" d="M15.216 8.02 13.191 6l.014 4.031z"></path><path fill="#2196F3" d="M12.323 24C17.63 24 21 21.797 21 12.159 21 2.527 17.523 0 12.216 0S3 2.521 3 12.159 7.016 24 12.323 24zM6.703 7.805l1.266-1.261 3.459 3.459V1.711l5.864 6.295-3.722 4.153 3.933 4.158-5.972 5.977-.108-7.969-3.459 3.459-1.261-1.261 4.345-4.359-4.345-4.359z"></path><path fill="#2196F3" d="m13.2 14.292-.009 4.031 2.02-2.02z"></path></svg>
                                </span>
                                <h3><span class="counter">BLE</span></h3>
                                <!-- <p>Resources</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="aos-animation" data-animation="fadeInUp">
                    <div class="narrow text-center">
                        <div class="col-12">
                            <p class="lead">
                                Want to learn more about our design and development skills?
                            </p>
                            <a href="#contact" class="btn btn-orange btn-sm">contact us</a>
                        </div>
                    </div>
                </div> -->
            </div>

            <div class="narrow">
                <div class="col-12 aos-animation" data-animation="fadeInUp">
                    <!-- <h3 class="heading">Our Expertise Technologies</h3> -->
                    <!-- <div class="heading-underline"></div> -->
                    <p class="about" style="text-align: center;">Client Side Scripting</p>
                    <div class="heading-underline"></div>

                </div>
                <div class="tech aos-animation" data-animation="fadeInUp">
                    <div class="row text-center">
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fas fa-clock"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" id="html"><polygon fill="#E44D26" points="3.345 21.601 1.419 0 22.581 0 20.653 21.598 11.987 24 3.345 21.601"></polygon><polygon fill="#F16529" points="12 22.164 19.002 20.222 20.65 1.766 12 1.766"></polygon><path fill="#EBEBEB" d="M12,9.778H8.495L8.252,7.065H12v-2.65H5.357l0.063,0.711l0.651,7.3H12V9.778L12,9.778z M12,16.658l-0.012,0.003l-2.95-0.797l-0.189-2.113H6.19l0.371,4.16l5.427,1.507L12,19.414V16.658L12,16.658z"></path><path fill="#FFF" d="M11.991,9.778v2.649h3.263l-0.308,3.436l-2.955,0.797v2.756l5.431-1.505l0.04-0.448l0.623-6.974l0.064-0.712h-0.714H11.991L11.991,9.778z M11.991,4.415v2.65h6.399l0.053-0.596l0.121-1.343l0.063-0.711H11.991L11.991,4.415z"></path><polygon fill="#DEDEDE" points="12 23.996 11.987 24 12 24 12 23.996"></polygon><path fill="#C64321" d="M12,7.065L12,7.065H8.252l0.242,2.713h3.496H12V7.065L12,7.065z M12,0H1.419l1.926,21.601L11.987,24L12,23.996v-4.582v0l-0.012,0.004l-5.427-1.507l-0.371-4.16h2.659l0.189,2.113l2.95,0.797l0.003-0.001v0L12,16.658v-4.231H6.071l-0.651-7.3L5.357,4.415h6.634H12V0L12,0z"></path><path fill="#CDCDCD" d="M8.849,13.751H6.19l0.371,4.16l5.427,1.507L12,19.414v0l-0.009,0.002v-2.756l-0.003,0.001l-2.95-0.797L8.849,13.751L8.849,13.751z M11.991,4.415H5.357l0.063,0.711l0.651,7.3H12h-0.009V9.778H8.495L8.252,7.065H12h-0.009V4.415L11.991,4.415z"></path><path fill="#DEDEDE" d="M12,16.658l-0.009,0.002v0v2.756L12,19.414V16.658L12,16.658z M12,9.778h-0.009v2.649H12V9.778L12,9.778z M12,4.415h-0.009v2.65H12V4.415L12,4.415z"></path></svg>
                                </span>
                                <h3><span class="counter">HTML</span></h3>
                                <!-- <p>Class Minutes</p> -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fab fa-codepen"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="css"><path fill="#2196F3" d="m1 0 1.275 14.4L8 16l5.723-1.599L15 0z"></path><path fill="#FAFAFA" d="m12.274 4.709-.161 1.809-.486 5.423L8 12.944l-.003.001-3.625-1.004-.253-2.836h1.776l.132 1.471 1.971.532.001-.001 1.974-.532.269-2.451-6.208.017-.176-1.676 6.533-.077.132-1.794-6.84.019-.115-1.669h8.864z"></path></svg>
                                </span>
                                <h3><span class="counter">CSS</span></h3>
                                <!-- <p>Web Dev Files</p> -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fas fa-users" data-fa-transform="left-2"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" id="jquery"><path fill="#0868AC" d="M9.625 32.181c-11.029 15.851-9.656 36.476-1.231 53.32.2.404.41.801.617 1.198l.394.759.246.437.439.786c.262.461.53.92.804 1.379l.459.756c.304.491.615.976.933 1.46l.398.614c.439.655.888 1.309 1.352 1.951l.039.05.228.308c.401.553.814 1.099 1.232 1.639l.464.59c.373.469.752.935 1.138 1.399l.435.52c.518.61 1.047 1.217 1.586 1.812l.033.033.061.068c.527.575 1.066 1.137 1.612 1.699l.517.521c.423.426.853.845 1.287 1.262l.527.5c.58.547 1.166 1.083 1.764 1.607l.028.022.307.262c.527.456 1.063.909 1.603 1.353l.664.529c.441.354.887.702 1.336 1.044l.714.543c.496.365.995.724 1.499 1.075l.546.387.15.107c.478.329.967.646 1.456.963l.63.42c.75.474 1.51.943 2.279 1.396l.63.355c.565.326 1.134.646 1.71.959.312.168.632.327.946.488.407.213.811.429 1.225.636l.283.137.501.242c.641.306 1.287.607 1.94.897l.41.184c.748.327 1.502.641 2.263.941l.551.217c.704.271 1.418.539 2.135.791l.268.093c.787.275 1.581.53 2.381.779l.575.172c.814.245 1.619.538 2.458.693 53.339 9.727 68.833-32.053 68.833-32.053-13.013 16.953-36.111 21.425-57.996 16.446-.829-.187-1.633-.446-2.442-.685l-.609-.185c-.79-.242-1.573-.497-2.352-.765l-.323-.117c-.698-.245-1.387-.504-2.074-.769l-.582-.229c-.752-.297-1.5-.607-2.239-.931l-.447-.198c-.635-.288-1.263-.578-1.889-.879l-.546-.262c-.491-.239-.977-.493-1.461-.743-.324-.171-.654-.332-.975-.51-.592-.317-1.172-.646-1.751-.982l-.591-.33c-.769-.452-1.528-.921-2.28-1.397l-.615-.41c-.545-.351-1.088-.709-1.623-1.079l-.522-.367c-.516-.365-1.027-.734-1.534-1.109l-.679-.514c-.465-.355-.927-.713-1.384-1.082l-.617-.495c-.582-.479-1.156-.959-1.724-1.453l-.189-.159c-.614-.539-1.216-1.092-1.812-1.647l-.511-.491c-.441-.42-.875-.843-1.302-1.277l-.51-.509c-.543-.556-1.076-1.119-1.598-1.69l-.079-.084c-.552-.604-1.092-1.221-1.621-1.844l-.424-.504c-.394-.475-.785-.956-1.167-1.442l-.427-.532c-.459-.596-.908-1.189-1.347-1.794-12.15-16.574-16.516-39.432-6.805-58.204M43.862 18.825c-7.977 11.478-7.543 26.844-1.321 38.983 1.043 2.035 2.216 4.01 3.528 5.889 1.195 1.713 2.52 3.751 4.106 5.127.575.633 1.176 1.251 1.79 1.858l.472.465c.596.578 1.201 1.146 1.828 1.698l.074.064.018.018c.693.608 1.408 1.191 2.135 1.767l.485.378c.729.559 1.472 1.107 2.233 1.631l.065.049c.336.232.678.448 1.019.672l.483.319c.544.349 1.095.689 1.655 1.015l.235.136c.483.278.972.552 1.463.818l.521.271c.339.177.678.358 1.023.53l.155.07c.703.346 1.412.68 2.136.995l.472.194c.579.246 1.164.486 1.75.71l.75.275c.533.198 1.068.378 1.607.559l.727.233c.767.238 1.525.539 2.324.672 41.183 6.823 50.691-24.886 50.691-24.886-8.57 12.343-25.168 18.233-42.879 13.635-.787-.207-1.562-.431-2.333-.674l-.701-.227c-.548-.177-1.092-.365-1.631-.562l-.736-.274c-.592-.228-1.176-.462-1.756-.708l-.473-.2c-.727-.316-1.443-.65-2.148-.999-.363-.177-.72-.364-1.078-.548l-.622-.32c-.458-.248-.914-.506-1.363-.77l-.326-.185c-.558-.325-1.107-.661-1.651-1.008l-.498-.332c-.359-.232-.717-.469-1.069-.707-.759-.524-1.498-1.072-2.226-1.628l-.501-.395c-7.752-6.12-13.898-14.486-16.819-23.971-3.062-9.836-2.402-20.878 2.903-29.84M72.657 8.847c-4.702 6.92-5.164 15.514-1.901 23.156 3.441 8.113 10.491 14.476 18.72 17.495.339.125.679.237 1.022.354l.451.143c.485.152.966.329 1.467.424 22.74 4.394 28.908-11.669 30.549-14.034-5.402 7.779-14.482 9.646-25.623 6.942-.88-.213-1.847-.531-2.695-.832-1.088-.388-2.16-.83-3.201-1.329-1.978-.951-3.864-2.104-5.612-3.424-9.969-7.565-16.162-21.994-9.657-33.745"></path></svg>
                                </span>
                                <h3><span class="counter">Jquery</span></h3>
                                <!-- <p>24/7 support</p> -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="skill">
                                <span class="fa-layers fa-4x">
                                    <!-- <i class="fas fa-cloud-download-alt" data-fa-transform="left-1"></i> -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" preserveAspectRatio="xMinYMin meet" viewBox="0 0 256 256" id="bootstrap"><path fill="#563D7C" d="M0 222.991C0 241.223 14.779 256 33.009 256H222.99C241.223 256 256 241.221 256 222.991V33.01C256 14.777 241.221 0 222.991 0H33.01C14.777 0 0 14.779 0 33.009V222.99z"></path><path fill="#FFF" d="M106.158 113.238V76.985h31.911c3.04 0 5.97.253 8.792.76 2.822.506 5.319 1.41 7.49 2.713 2.17 1.303 3.907 3.112 5.21 5.427 1.302 2.316 1.954 5.283 1.954 8.9 0 6.513-1.954 11.217-5.862 14.111-3.907 2.895-8.9 4.342-14.979 4.342h-34.516zM72.075 50.5v155h75.112c6.947 0 13.713-.868 20.298-2.605 6.585-1.737 12.446-4.414 17.584-8.032 5.137-3.618 9.226-8.286 12.265-14.002 3.04-5.717 4.559-12.483 4.559-20.298 0-9.697-2.352-17.982-7.055-24.856-4.704-6.875-11.832-11.687-21.384-14.437 6.947-3.328 12.194-7.598 15.74-12.808 3.545-5.21 5.318-11.722 5.318-19.538 0-7.236-1.194-13.314-3.582-18.235-2.388-4.92-5.753-8.864-10.095-11.831-4.341-2.967-9.551-5.102-15.63-6.404-6.078-1.303-12.808-1.954-20.189-1.954H72.075zm34.083 128.515v-42.549h37.121c7.381 0 13.315 1.7 17.802 5.102 4.486 3.401 6.73 9.081 6.73 17.041 0 4.053-.688 7.381-2.063 9.986-1.375 2.605-3.22 4.668-5.536 6.187-2.315 1.52-4.993 2.605-8.032 3.257-3.04.65-6.223.976-9.552.976h-36.47z"></path></svg>
                                </span>
                                <h3><span class="counter">Bootstrap</span></h3>
                                <!-- <p>Resources</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tech aos-animation" data-animation="fadeInUp">
                    <div class="narrow text-center">
                        <div class="col-12">
                            <p class="lead">
                                Want to learn more about our design and development skills?
                            </p>
                            <a href="contact.php" class="btn btn-orange btn-sm">contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Clients Section -->
    <div id="clients" class="offset">
        <div class="container-fluid">
            <div class="row padding">
                <div class="col-12 aos-animation" data-animation="fadeInUp">
                    <h3 class="about heading">Our Clients</h3>
                    <div class="heading-underline">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="aos-animation" data-animation="fadeInUp">
                        <div id="clients-slider" class="owl-carousel owl-theme">
                            <div class="row clients">
                                <div class="client-box">
                                    <img
                                        src="img/Capgemini-Logo.jpg" class="client-image">
                                </div>
                                <!-- <div class="col-md-8">
                                    <blockquote>
                                        <ul>
                                            <li>
                                                I see this theme support as more of a partner to my company than a
                                                resource.
                                                I can pick up the phone and talk to anyone at any time and the way that
                                                they interact with us
                                                as a business makes it really simple.
                                            </li>
                                        </ul>
                                        <hr class="clients-hr">
                                        <cite>&#8212; Eric, Small Business Owner</cite>
                                    </blockquote>
                                </div> -->
                            </div>
                            <div class="row clients">
                                <div class="client-box">
                                    <img
                                    src="img/Lexicon-Group.png" class="client-image">
                                </div>
                            </div>
                            <div class="row clients">
                                <div class="client-box">
                                    <img
                                    src="img/clover-infotech.jpg" class="client-image">
                                </div>
                            </div>
                            <div class="row clients">
                                <div class="client-box">
                                    <img
                                    src="img/clover-reality.png" class="client-image">
                                </div>
                            </div>
                            <div class="row clients">
                                <div class="client-box">
                                    <img
                                    src="img/clover-solar.jpg" class="client-image">
                                </div>
                            </div>
                            <div class="row clients">
                                <div class="client-box">
                                    <img
                                    src="img/total.jpg" class="client-image">
                                </div>
                            </div>
                            <div class="row clients">
                                <div class="client-box">
                                    <img
                                    src="img/data.jpg" class="client-image">
                                </div>
                            </div>
                            <div class="row clients">
                                <div class="client-box">
                                    <img
                                    src="img/shubham.png" class="client-image">
                                </div>
                            </div>
                            <div class="row clients">
                                <div class="client-box">
                                    <img
                                    src="img/mapro.jpg" class="client-image">
                                </div>
                            </div>
                            <div class="row clients">
                                <div class="client-box">
                                    <img
                                    src="img/oup.avif" class="client-image">
                                </div>
                            </div>
                            <div class="row clients">
                                <div class="client-box">
                                    <img
                                    src="img/tata-steel.webp" class="client-image">
                                </div>
                            </div>
                            <div class="row clients">
                                <div class="client-box">
                                    <img
                                    src="img/pure.png" class="client-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Contact Section -->
    <!-- <div id="contact" class="offset">
        <footer>
            <div class="row">
                <div class="col-md-5">
                    <p>
                        At our core is a collection of design and development
                        solutions that represent everything your business needs
                        to compete in the modern marketplace.
                    </p>
                    <strong>Our Location</strong>
                    <p>1897 Juan de Salazar and San Francisco<br>
                        Asunción, Paraguay.</p>
                    <strong>Contact Info</strong>
                    <p>(+595972) 254004<br>
                        eiruweb@gmail.com</p>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-reddit-square"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
                <div class="col-md-7">
                    <h3>Contact Us</h3>
                    <form id="contact-form" action="contact.php" method="post">
                        <div class="messages">

                        </div>
                        <div class="controls">
                            <div class="form-group">
                                <input type="text" id="form_name" name="name" class="form-control"
                                    placeholder="Enter your name." required="required">
                            </div>
                            <div class="form-group">
                                <input type="email" id="form_email" name="email" class="form-control"
                                    placeholder="Enter your email." required="required">
                            </div>
                            <div class="form-group">
                                <textarea id="form_message" name="message" class="form-control"
                                    placeholder="Add your message." rows="4" required="required"></textarea>
                            </div>
                            <input type="submit" class="btn btn-outline-light btn-sm" value="Send Message">
                        </div>
                    </form>
                </div>
                <hr class="socket">
                &copy; Portfolio Cecilia Benitez Casaccia - 2019.
            </div>
        </footer>
    </div> -->
    <section class="sec-padding bg-contact">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8" data-animation="zoomIn" data-animation-delay="300ms">
                        <h1 class="header-font">Let's Discuss Your
                             Needs
                        </h1>
                        <p class="init_text text-font clr-black">Ready to take your online presence to the next level? Get in touch with us
                            today to discuss
                            your
                             project. We're eager to learn more about your business and help
                            you
                            achieve your online goals.
                        </p>
                        <p class="init_text text-font clr-black">Contact us to schedule a consultation, request a quote, or learn more about
                            our
                             services. Your success is our priority, and we're here to make it
                            happen.
                        </p>
                        <button type="button" class="btn contact-btn text-font"
                            onclick="window.location.href='contact.php'">Let's Connect</button>
                    </div>
                    <div class="col-md-4">
                        <img data-animation="slideInRight" class="contact-img" src="images/contact-us.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
    <!-- Top Scroll -->
    <a href="#home" class="top-scroll">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Script Source Files -->
</body>

<?php include 'footer.php';?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize ScrollReveal
        const sr = ScrollReveal();

        // Function to check if the screen is in mobile view
        function isMobileView() {
            return window.innerWidth <= 767; // Adjust the breakpoint as needed
        }

        // Add the ScrollReveal configuration
        sr.reveal('.title', {
            duration: 2000, // Animation duration in milliseconds
            // delay:1000,
            origin: 'top', // Animation starting point at the center
            distance: '100px', // Distance to reveal the element
            scale: 1, // Scale of the element (adjust as needed)
            reset: true
        });
        sr.reveal('.title1', {
            duration: 2000, // Animation duration in milliseconds
            delay:500,
            origin: 'top', // Animation starting point at the center
            distance: '100px', // Distance to reveal the element
            scale: 1, // Scale of the element (adjust as needed)
            reset: true
        });
        sr.reveal('.title2', {
            duration: 2000, // Animation duration in milliseconds
            delay:1000,
            origin: 'top', // Animation starting point at the center
            distance: '100px', // Distance to reveal the element
            scale: 1, // Scale of the element (adjust as needed)
            reset: true
        });
        sr.reveal('.about', {
            duration: 1000, // Animation duration in milliseconds
            origin: 'bottom', // Animation starting point
            distance: '20px', // Distance to reveal the element
            scale: 1, // Scale of the element
            reset: true // Reset the animation after it's been revealed
        });
        sr.reveal('.lead2', {
            duration: 1000, // Animation duration in milliseconds
            delay:500,
            origin: 'bottom', // Animation starting point
            distance: '20px', // Distance to reveal the element
            scale: 1, // Scale of the element
            reset: true // Reset the animation after it's been revealed
        });
        sr.reveal('.btn1', {
            duration: 1000, // Animation duration in milliseconds
            delay:1000,
            origin: 'right', // Animation starting point
            distance: '20px', // Distance to reveal the element
            scale: 1, // Scale of the element
            reset: true // Reset the animation after it's been revealed
        });
        sr.reveal('.btn2', {
            duration: 1000, // Animation duration in milliseconds
            delay:1000,
            origin: 'left', // Animation starting point
            distance: '20px', // Distance to reveal the element
            scale: 1, // Scale of the element
            reset: true // Reset the animation after it's been revealed
        });
        sr.reveal('.circless', {
            duration: 1000, // Animation duration in milliseconds
            delay:1000,
            origin: 'bottom', // Animation starting point
            distance: '20px', // Distance to reveal the element
            scale: 1, // Scale of the element
            reset: true // Reset the animation after it's been revealed
        });
        sr.reveal('.circless2', {
            duration: 1000, // Animation duration in milliseconds
            delay:500,
            origin: 'bottom', // Animation starting point
            distance: '20px', // Distance to reveal the element
            scale: 1, // Scale of the element
            reset: true // Reset the animation after it's been revealed
        });
        sr.reveal('.bottom', {
            duration: 1000, // Animation duration in milliseconds
            delay:700,
            origin: 'bottom', // Animation starting point
            distance: '20px', // Distance to reveal the element
            scale: 1, // Scale of the element
            reset: true // Reset the animation after it's been revealed
        });
        sr.reveal('.tech', {
            duration: 1000, // Animation duration in milliseconds
            delay:700,
            origin: 'bottom', // Animation starting point
            distance: '20px', // Distance to reveal the element
            scale: 1, // Scale of the element
            reset: true // Reset the animation after it's been revealed
        });
    });
</script>

<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize ScrollReveal
        const sr = ScrollReveal();

        // Function to check if the screen is in mobile view
        function isMobileView() {
            return window.innerWidth <= 767; // Adjust the breakpoint as needed
        }
        // Add the ScrollReveal configuration
        sr.reveal('.circless', {
            // duration: isMobileView() ? 1000 : 2000,
            scale:isMobileView() ? 1.2 : 1,
            origin:isMobileView() ? center : bottom,
            // Adjust other properties based on your preferences
            // ...
        });
    });
</script> -->
