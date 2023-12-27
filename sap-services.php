<!doctype html>

<html lang="en">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135022729-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-135022729-1');
    </script>

    <title>SAP Services in Pune | SAP Services in Pune | Bangalore | Delhi</title>
    <meta name="description"
        content="Softflame Solutions is leading SAP Services Company in Pune, Delhi, Bangalore. We are specializes in SAP Services in Pune, Delhi, Bangalore,Web Developers in Pune, Delhi, Bangalore.Web Design Company in Pune, Web Development in Pune, Delhi, Bangalore with the cost-effective solutions for your website." />
    <meta name="keywords"
        content="SAP Services Company in Pune, Bangalore, Delhi, SAP Services in Pune, Bangalore, Delhi" />
    <meta name="robots" content="index, follow">
    <meta name="copyright" content="softflame.in">
    <meta name="language" content="EN">

    <meta charset="utf-8">

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/theme.css" rel="stylesheet">


    <link rel="canonical" href="https://www.softflame.in/" />
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
    <link rel="stylesheet" href="js/ytplayer/ytplayer.css" />
    <link rel="stylesheet" href="js/style-swicher/style-swicher.css" type="text/css" />
    <link rel="stylesheet" href="js/custom-scrollbar/jquery.mCustomScrollbar.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;300;400;500&family=Nunito+Sans:opsz,wght@6..12,200&family=Open+Sans:wght@300;400;700&family=Poppins:wght@200;400;600&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/web-development-design.css" type="text/css" />
    <link rel="stylesheet" href="css/text-animation.css" type="text/css" />

    <script>
        var Animation = function ({ offset } = { offset: 10 }) {
            var _elements;

            // Define a dobra superior, inferior e laterais da tela
            var windowTop = offset * window.innerHeight / 100;
            var windowBottom = window.innerHeight - windowTop;
            var windowLeft = 0;
            var windowRight = window.innerWidth;

            function start(element) {
                // Seta os atributos customizados
                element.style.animationDelay = element.dataset.animationDelay;
                element.style.animationDuration = element.dataset.animationDuration;
                // Inicia a animacao setando a classe da animacao
                element.classList.add(element.dataset.animation);
                // Seta o elemento como animado
                element.dataset.animated = "true";
            }

            function isElementOnScreen(element) {
                // Obtem o boundingbox do elemento
                var elementRect = element.getBoundingClientRect();
                var elementTop =
                    elementRect.top + parseInt(element.dataset.animationOffset) ||
                    elementRect.top;
                var elementBottom =
                    elementRect.bottom - parseInt(element.dataset.animationOffset) ||
                    elementRect.bottom;
                var elementLeft = elementRect.left;
                var elementRight = elementRect.right;

                // Verifica se o elemento esta na tela
                return (
                    elementTop <= windowBottom &&
                    elementBottom >= windowTop &&
                    elementLeft <= windowRight &&
                    elementRight >= windowLeft
                );
            }

            // Percorre o array de elementos, verifica se o elemento está na tela e inicia animação
            function checkElementsOnScreen(els = _elements) {
                for (var i = 0, len = els.length; i < len; i++) {
                    // Passa para o proximo laço se o elemento ja estiver animado
                    if (els[i].dataset.animated) continue;

                    isElementOnScreen(els[i]) && start(els[i]);
                }
            }

            // Atualiza a lista de elementos a serem animados
            function update() {
                _elements = document.querySelectorAll(
                    "[data-animation]:not([data-animated])"
                );
                checkElementsOnScreen(_elements);
            }

            // Inicia os eventos
            window.addEventListener("load", update, false);
            window.addEventListener("scroll", () => checkElementsOnScreen(_elements), { passive: true });
            window.addEventListener("resize", () => checkElementsOnScreen(_elements), false);

            // Retorna funcoes publicas
            return {
                start,
                isElementOnScreen,
                update
            };
        };

        // Initialize
        var options = {
            offset: 20 //percentage of window
        };
        var animation = new Animation(options);
    </script>

    <script>
        // Pen JS Starts Here
jQuery(document).ready(function(){

// SVG 
var snapC = Snap("#svgC"); 

// SVG C - "Squiggly" Path
var myPathC = snapC.path("M62.9 14.9c-25-7.74-56.6 4.8-60.4 24.3-3.73 19.6 21.6 35 39.6 37.6 42.8 6.2 72.9-53.4 116-58.9 65-18.2 191 101 215 28.8 5-16.7-7-49.1-34-44-34 11.5-31 46.5-14 69.3 9.38 12.6 24.2 20.6 39.8 22.9 91.4 9.05 102-98.9 176-86.7 18.8 3.81 33 17.3 36.7 34.6 2.01 10.2.124 21.1-5.18 30.1").attr({
  id: "squiggle",
  fill: "none",
  strokeWidth: "1",
  stroke: "rgba(0,0,0,0.1)",
  strokeMiterLimit: "10",
  strokeDasharray: "5 10",
  strokeDashOffset: "180"
});

// SVG C - Triangle (As Polyline)
var Triangle = snapC.polyline("0, 30, 15, 0, 30, 30");
Triangle.attr({
  id: "plane",
  fill: "rgba(0,0,0,0.050)"
}); 

initTriangle();

// Initialize Triangle on Path
function initTriangle(){
  var triangleGroup = snapC.g( Triangle ); // Group polyline 
  movePoint = myPathC.getPointAtLength(length);
  triangleGroup.transform( 't' + parseInt(movePoint.x - 15) + ',' + parseInt( movePoint.y - 15) + 'r' + (movePoint.alpha - 90));
}

// SVG C - Draw Path
var lenC = myPathC.getTotalLength();

// SVG C - Animate Path
function animateSVG() {
  
  myPathC.attr({
    stroke: 'rgba(0,0,0,0.1)',
    strokeWidth: 1,
    fill: 'none',
    // Draw Path
    "stroke-dasharray": "5 10",
    "stroke-dashoffset": "180"
  }).animate({"stroke-dashoffset": 10}, 2500,mina.easeinout);
  
  var triangleGroup = snapC.g( Triangle ); // Group polyline

  setTimeout( function() {
    Snap.animate(0, lenC, function( value ) {
 
      movePoint = myPathC.getPointAtLength( value );
    
      triangleGroup.transform( 't' + parseInt(movePoint.x - 15) + ',' + parseInt( movePoint.y - 15) + 'r' + (movePoint.alpha - 90));
  
    }, 2500,mina.easeinout, function(){
    });
  });
  
} 


// Animate Button
function kapow(){
  $(window).on('scroll', function (){       
    // Run SVG
    animateSVG();      
  });
}

kapow();

});
    </script>

    <style>

ul.ex2 {
            list-style-type: none;
        }

        ul.ex2 li {
            background: url("images/services/info/blue-check.png") no-repeat left center;
            padding-left: 2.5em;
            line-height: 3.5;
            background-size: 30px;
            text-align: justify;
            font-family: 'Nunito', sans-serif !important;
            text-transform: capitalize;
        }
        ul.ex3 {
            list-style-type: none;
            margin-left: 20px;
        }

        ul.ex3 li {
        list-style-type: "🔰";
        padding-left: 0.5em;
        line-height: 3.5;
        background-size: 30px;
        text-align: justify;
        font-family: 'Nunito', sans-serif !important;
        text-transform: capitalize;
        }

        ul.ex4 {
            list-style-type: none;
            margin-left: 20px;
        }

        ul.ex4 li {
        list-style-type: "⏩";
        padding-left: 0.5em;
        line-height: 2;
        background-size: 30px;
        text-align: justify;
        font-family: 'Nunito', sans-serif !important;
        text-transform: capitalize;
        }

        
 
.section-title{margin-bottom:50px; position: relative;}
.section-title p{font-size: 16px;}
.title-effect {width: 50px; height: 50px; top: 0; position: absolute; left: 0; opacity: 0.5; animation: rotation 12.8s steps(1) 0s infinite;}
.text-center .title-effect{left: 50%; margin-left: -25px;}
.text-center .section-title h6{padding: 15px 0;}

.title-effect .bar {background: #2575fc;}
.title-effect .bar-top {width: 100%; height: 7px; position: absolute; top: 0; left: 0; transform-origin: left top; transform: scale(0, 1); animation: bar-top 3.2s linear 0s infinite;}
.title-effect .bar-right {width: 7px; height: 100%; position: absolute; top: 0; right: 0; transform-origin: left top; transform: scale(1, 0); animation: bar-right 3.2s linear 0s infinite;}
.title-effect .bar-bottom {width: 100%; height: 7px; position: absolute; right: 0; bottom: 0; transform-origin: right top; transform: scale(0, 1); animation: bar-bottom 3.2s linear 0s infinite;}
.title-effect .bar-left {width: 7px; height: 100%; position: absolute; left: 0; bottom: 0; transform-origin: left bottom; transform: scale(1, 0); animation: bar-left 3.2s linear 0s infinite;}

.title {position: relative; color: #1c1d3e; margin-bottom: 0;}
.section-title h2{margin-bottom: 15px;}

/* ------------------------
    How It Work
------------------------*/
.work-process{position: relative;}
.step-num {background: #fff; border-radius: 50%; box-shadow: 0 12px 20px 0 rgba(117, 178, 240, 0.4); color: #005bea; display: inline-block; font-size: 18px; font-weight: 600; height: 50px; right: 0; line-height: 55px; position: absolute; text-align: center; top: 0; width: 50px;}
.theme-bg .work-process h4, .theme-bg .work-process p{color: #ffffff;}
.step-icon {background: aliceblue; width:140px; height:140px; position: relative; border: 3px solid #fafaff; border-radius: 50%; line-height: 140px; font-size: 40px; text-align: center; color: #1c1d3e;}
.step-icon span {position: relative;}
.step-icon span::after, .step-icon span::before {border-radius: 50%; content: ""; height: 40px; position: absolute; width: 40px; z-index: -1;}
.step-icon span::after {background: #cdf3f6; height: 25px; left: -10px; top: 5px; width: 25px;}
.step-icon span::before {background: #d4f8e6; bottom: 0; right: -10px;}
.dark-bg .step-icon{color: rgba(255,255,255,0.9); background: none;}
.dark-bg .step-icon{border-color: rgba(255,255,255,0.1);}
.dark-bg .step-desc p{color: rgba(255,255,255,0.7);}
.step-num-box{position: relative; display: inline-block; margin-bottom: 20px;}
.work-process .box-loader{position: absolute; top: 30%; right: -15%; left: inherit;}
.work-process.style-2 {padding: 0; display: flex; align-items: center;}
.work-process.style-2:before{display: none;}
.work-process.style-2 .step-num-box {margin-bottom: 0; margin-right: 30px;}
.work-process.style-3 {padding: 70px 30px 0;}
.work-process.style-3 .step-num {background: none; box-shadow: none; color: rgba(255, 255, 255, 0.1); font-size: 120px; height: auto; left: 50%; line-height: 120px; margin-bottom: 0; position: absolute; top: 0; transform: translateX(-50%); width: auto;}
#svg-container {position: absolute; width: 100%; z-index: -1; transform: translateX(-50%)}
#svgC {margin: 0 auto; width: 100%;}


/* ------------------------
    box-loader
------------------------*/
.box-loader {border-radius: 100%; margin: 0 auto; position: absolute; top: 15px; left: 15px;}
.box-loader span{display: inline-block; width: 10px; height: 10px; border-radius: 100%; background: #2575fc; margin: 0 5px; opacity: 0;}
.box-loader span:nth-child(1){animation: opacitychange 1s ease-in-out infinite;}
.box-loader span:nth-child(2){animation: opacitychange 1s ease-in-out 0.33s infinite;}
.box-loader span:nth-child(3){animation: opacitychange 1s ease-in-out 0.66s infinite;}


/*--rotation--*/

@keyframes rotation {
  0% {
    transform: rotate(0deg);
  }
  25% {
    transform: rotate(90deg);
  }
  50% {
    transform: rotate(180deg);
  }
  75% {
    transform: rotate(270deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes bar-top {
  0% {
    transform: scale(0, 1);
  }
  12.5% {
    transform: scale(1, 1);
  }
  87.5% {
    transform: scale(1, 1);
  }
  100% {
    transform: scale(0, 1);
  }
}
@keyframes bar-right {
  0% {
    transform: scale(1, 0);
  }
  12.5% {
    transform: scale(1, 0);
  }
  25% {
    transform: scale(1, 1);
  }
  75% {
    transform: scale(1, 1);
  }
  87.5% {
    transform: scale(1, 0);
  }
  100% {
    transform: scale(1, 0);
  }
}
@keyframes bar-bottom {
  0% {
    transform: scale(0, 1);
  }
  25% {
    transform: scale(0, 1);
  }
  37.5% {
    transform: scale(1, 1);
  }
  62.5% {
    transform: scale(1, 1);
  }
  75% {
    transform: scale(0, 1);
  }
  100% {
    transform: scale(0, 1);
  }
}
@keyframes bar-left {
  0% {
    transform: scale(1, 0);
  }
  37.5% {
    transform: scale(1, 0);
  }
  50% {
    transform: scale(1, 1);
  }
  62.5% {
    transform: scale(1, 0);
  }
  100% {
    transform: scale(1, 0);
  }
}

/*--opacitychange--*/

@keyframes opacitychange{
  0%, 100%{
    opacity: 0;
  }

  60%{
    opacity: 1;
  }
}

/* responsive */
@media (max-width: 1200px){
    #svg-container { width: 85%; }
}
@media (max-width: 992px){
    .md-mt-5 { margin-top: 50px !important; }
    /*Step*/
    .work-process .box-loader{display: none;}
    .step-desc p {max-width: 300px;  margin: 0 auto;}
    #svg-container {width: 100%; transform: rotate(90deg); left: 0; top: 50%;}
}
    </style>


</head>

<?php include 'header.php'; ?>
<!--end menu-->
<div class="clearfix"></div>

<section>
    <div class="header-inner two">
        <div class="inner text-center col-md-6 padding-top">
            <h1 data-animation="zoomReverseIn" class="font-family text-white sub-nav-head uppercase">SAP Services
                Company </h1>
            <h2 data-animation="zoomIn" data-animation-delay="500ms" class="text-white font-family">Pune, Bangalore,
                Delhi</h2>
            <button data-animation="slideInUp" data-animation-delay="800ms" type="button"
                class="btn text-font book-appointment"> <a target="blank"
                    href='https://calendly.com/chaitanyagarud/30min'>Book a call with our
                    SAP Expert</a></button>
        </div>
        <div class="overlay bg-opacity-7"></div>
        <img src="images/services/sub-nav/sap-banner.jpg" alt="SAP Services Company in Pune, Bangalore, Delhi"
            class="img-responsive sub-nav-img" />
    </div>
</section>
<!-- end header inner -->
<div class="clearfix"></div>

<section>
    <div class="pagenation-holder">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="pagenation_links text-font font-16"><a href="index.php">Home</a><i> / </i><a
                            href="services.php">Services</a><i> / </i>SAP Services</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end section-->
<div class="clearfix"></div>

<section class="sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-animation="slideInRight">
                <h1 class="header-font">SAP Basis Service Offerings</h1>
                <p class="init_text text-font clr-black">We work collaboratively with You to understand your SAP
                    support needs, we ensure providing managed services as well as Support and backfill for internal IT.
                </p>
                <p class="init_text text-font clr-black">On-site and off-shore model can be a setup as per client’s
                    benefit. We can work with you to support with various support window and time zones.
                </p>
                <p class="init_text text-font clr-black">From system installation/upgrade to Go-Live support to a “run &
                    build” support as a managed service we offer the full bandwidth of SAP basis services.
                </p>
            </div>
            <div class="col-md-6 text-center img-center">
                <img data-animation="zoomIn" data-animation-delay="300ms" class="sap-img1"
                    src="images/services/info/sap-img1.png">
            </div>
        </div>
    </div>

  <div class="container  margin-top mobile-margin-30">
    <div class="row">
      <div class="col-lg-12 col-md-12 ml-auto mr-auto">
        <div class="section-title" data-animation="slideInUp">
          <h2 class="font-family text-center">Steps for SAP Basis implementation</h2>
        </div>
      </div>
    </div>
    <div class="row margin-top mobile-margin-30">
      <div id="svg-container" data-animation="zoomIn">
        <svg id="svgC" width="100%" height="100%" viewBox="0 0 620 120" preserveAspectRatio="xMidYMid meet"><desc>Created with Snap</desc><defs></defs><path d="M62.9 14.9c-25-7.74-56.6 4.8-60.4 24.3-3.73 19.6 21.6 35 39.6 37.6 42.8 6.2 72.9-53.4 116-58.9 65-18.2 191 101 215 28.8 5-16.7-7-49.1-34-44-34 11.5-31 46.5-14 69.3 9.38 12.6 24.2 20.6 39.8 22.9 91.4 9.05 102-98.9 176-86.7 18.8 3.81 33 17.3 36.7 34.6 2.01 10.2.124 21.1-5.18 30.1" id="squiggle" fill="none" stroke="rgba(0,0,0,0.1)" strokeMiterLimit="10" strokeDashOffset="180" style="stroke-width: 1; stroke-dasharray: 5, 10; stroke-dashoffset: 10;"></path><g transform="matrix(0.2956,-0.9553,0.9553,0.2956,43.2367,24.8965)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,557,57)"></g><g transform="matrix(-0.8615,-0.5077,0.5077,-0.8615,577.307,92.5386)"><polyline points="0, 30, 15, 0, 30, 30" id="plane" fill="rgba(0,0,0,0.05)" style=""></polyline></g></svg>
      </div>
      <div class="col-lg-4 col-md-12 text-center">
        <div class="work-process">
          <div class="box-loader"> <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="step-num-box"  data-animation="slideInUp">
            <div class="step-icon"><span><i class="fa fa-lightbulb-o"></i></span>
            </div>
            <div class="step-num">01</div>
          </div>
          <div class="step-desc" data-animation="zoomIn">
            <h4 class="font-family">Installation & Configuration</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 md-mt-5 text-center">
        <div class="work-process">
          <div class="box-loader"> <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="step-num-box"  data-animation="slideInUp">
            <div class="step-icon"><span><i class="fa fa-rocket"></i></span>
            </div>
            <div class="step-num">02</div>
          </div>
          <div class="step-desc" data-animation="zoomIn">
            <h4 class="font-family">Monitoring & Maintainance</h4>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 md-mt-5 text-center">
        <div class="work-process">
          <div class="step-num-box"  data-animation="slideInUp">
            <div class="step-icon"><span><i class="fa fa-check-square"></i></span>
            </div>
            <div class="step-num">03</div>
          </div>
          <div class="step-desc" data-animation="zoomIn">
            <h4 class="font-family">Upgrades & Migration</h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-150">
    <div class="row">
        <div class="col-lg-12 text-center" data-animation="slideInUp">
            <h2 class="font-family">We cater following SAP Basis services:</h2>
        </div>
    </div>
    <div class="row text-center" data-animation="zoomIn" data-animation-delay="200ms">
        <div class="col-lg-4">
        <ul class="ex2">
                    <li>SAP System upgrades and patching</li>
                    <li>SAP Unicode conversion</li>
                    <li>SAP OS/DB Migration</li>
                    <li>SAP S/4 HANA conversion</li>
                    <li>Lift and shift model for On-premise to Cloud</li>
                    <li>SAP Solution Manager 
                    </li>
        </ul>
        </div>
        <div class="col-lg-4" data-animation="zoomIn" data-animation-delay="400ms">
        <ul class="ex2">
                    <li>System Operations</li>
                    <li>Architecture Design</li>
                    <li>Database Installation and Configuration</li>
                    <li>High Availability and Cluster Setup</li>
                    <li>Full-time Monitoring and Response</li>
                    <li>User and Security Administration 
                    </li>
        </ul>
        </div>
        <div class="col-lg-4" data-animation="zoomIn" data-animation-delay="600ms">
        <ul class="ex2">
                    <li>Root-cause Analysis and Corrective Actions</li>
                    <li>Backups and Disaster Recovery</li>
                    <li>Refresh and Migration 
                    <li>Capacity Planning</li>
                    <li>Proactive Health Checks</li>
                    <li>Performance Tuning 
                    </li>
        </ul>
        </div>
    </div>
  </div>

  
  <div class="container margin-top mobile-margin-30">
    <div class="row">
        <div class="col-lg-6" data-animation="slideInRight" data-animation-delay="200ms">
        <img class="sap-img3" src="images/services/info/sap-img3.png">
        </div>
        <div class="col-lg-6" data-animation="slideInLeft" data-animation-delay="400ms">
        <h2 class="font-family">System Operations</h2>
        <ul class="ex4">
                    <li>system administration and maintenance</li>
                    <li>Print and output management</li>
                    <li>Background job scheduling </li>
                    <li>Transport management (TMS)</li>
                    <li>Proactive system monitoring covering system health, database backup, performance and more</li>
                    <li>Analysis of SAP Early Watch Report and reported alerts to provide resolutions 
                    </li>
                    <li>Weekly/monthly system review and recommendation</li>
                    <li>Security and user management</li>
                    <li>Network, Hardware Provisioning, OS & Backup Solution</li>
                    <li>Load-balancing</li>
                    <li>ABAP dump analysis and resolution 
                    </li>
                    <li>System- and client copies</li>
        </ul>
        </div>
    </div>
  </div>

  <div class="container margin-top mobile-margin-30">
    <div class="row">
        <div class="col-lg-8" data-animation="zoomIn">
        <h2 class="font-family">SAP System upgrades and patching</h2>
        <ul class="ex3">
                    <li>Version Upgrades, Patches, and Support Packages</li>
                    <li>Security Updates and Component Patch</li>
                    <li>Kernel Updates </li>
                    <li>SAP Notes</li>
        </ul>
        </div>
        <div class="col-lg-4" data-animation="zoomIn">
            <img class="sap-img2" src="images/services/info/sap-updates.png">
        </div>
    </div>
  </div>
</section>
<?php $pageTitle = "SAP Services"; // Replace "Page Name" with the actual name of your page
include('contact-us-div.php'); ?>
<?php include 'footer.php'; ?>