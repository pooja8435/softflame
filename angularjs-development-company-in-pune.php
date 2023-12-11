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

    <title>AngularJs Development Company in Pune | Bangalore | Delhi | SoftFlame Solutions</title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="keywords"
        content="AngularJs Development Company in Pune, Bangalore, Delhi, Website Company in Pune, Bangalore, Delhi,Web Design Company,Web Design Pune,Web Development Company, Website Design Company, Ecommerce Website Design,Ecommerce Websites Development,SEO services pune,seo company in Pune, Bangalore, Delhi" />
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="description"
        content="AngularJs Development Company in Pune, Bangalore, Delhi - SoftFlame Solutions is one of the best AngularJS development company in Pune, Bangalore, Delhi. We offer reliable AngularJS development services for our esteemed clients." />

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
    <style>
        .first-img {
            height: 355px !important;
            margin-left: 130px;
        }

        .angular-card {
            position: relative;
            width: 100%;
            height: 250px;
            border-radius: 14px;
            z-index: 1111;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 20px 20px 60px #bebebe, -20px -20px 60px #ffffff;
        }

        @media screen and (max-width:767px) {
            .angular-card {
                z-index: 0;
            }

        }

        .bg {
            position: absolute;
            top: 5px;
            left: 5px;
            width: 98%;
            height: 240px;
            z-index: 2;
            background: rgba(255, 255, 255, .95);
            backdrop-filter: blur(24px);
            border-radius: 10px;
            overflow: hidden;
            outline: 2px solid white;
        }

        .blob {
            position: absolute;
            z-index: 1;
            top: 50%;
            left: 50%;
            width: 70%;
            height: 150px;
            border-radius: 50%;
            background-color: #ff7878;
            opacity: 1;
            filter: blur(12px);
            animation: blob-bounce 5s infinite ease;
        }

        .features-height {
            height: 400px;
            margin-top: -40px;
            margin-left: 100px;
        }

        @keyframes blob-bounce {
            0% {
                transform: translate(-100%, -100%) translate3d(0, 0, 0);
            }

            25% {
                transform: translate(-100%, -100%) translate3d(100%, 0, 0);
            }

            50% {
                transform: translate(-100%, -100%) translate3d(100%, 100%, 0);
            }

            75% {
                transform: translate(-100%, -100%) translate3d(0, 100%, 0);
            }

            100% {
                transform: translate(-100%, -100%) translate3d(0, 0, 0);
            }
        }
    </style>



</head>


<?php include 'header.php'; ?>
<!--end menu-->

<section>
    <div class="header-inner two">
        <div class="inner text-center col-md-6 col-sm-12 padding-top">
            <h1 data-animation="zoomReverseIn" class="font-family text-white sub-nav-head uppercase">AngularJs
                Development
                Company </h1>
            <h2 data-animation="zoomIn" data-animation-delay="500ms" class="text-white font-family">Pune, Bangalore,
                Delhi</h2>
            <button data-animation="slideInUp" data-animation-delay="800ms" type="button"
                class="btn text-font book-appointment"> <a target="blank"
                    href='https://calendly.com/projects-vikasn/30min?back=1&month=2023-12'>Book a call with our
                    CEO</a></button>
        </div>
        <div class="overlay bg-opacity-7"></div>
        <img src="images/services/sub-nav/angularjs.jpg" alt="Website Development Company in Pune, Bangalore, Delhi"
            class="img-responsive sub-nav-img" />
    </div>
    </div>
</section>
<!-- end header inner -->

<section>
    <div class="pagenation-holder">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="pagenation_links text-font font-16"><a href="index.php">Home</a><i> / </i><a
                            href="services.php">Services</a><i> / </i>AngularJs App Development</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end section-->


<section class="sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12" data-animation="slideInRight">
                <h1 class="header-font"> AngularJs Development Services</h1>
                <p class="init_text text-font">Welcome to SoftFlame Solutions, where we harness the power of Angular.js
                    to create dynamic and feature-rich web applications. Our skilled team of Angular.js developers is
                    dedicated to delivering solutions that redefine user experiences and elevate your digital presence.
                </p>
                <p class="init_text text-font">AngularJS is a popular JavaScript framework for building dynamic web
                    applications. In the service section of your website, you can leverage AngularJS services to handle
                    data and business logic
                </p>
            </div>
            <div class="col-md-6 col-sm-12">
                <img data-animation="zoomIn" data-animation-delay="300ms" class="first-img"
                    src="images/services/info/angular.png">
            </div>
        </div>
    </div>

    <section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="section-header text-center" data-animation="zoomIn" data-animation-delay="300ms">
                    <h1 class="header-font margin-top center-line">
                        Our Angular.js Development Services
                    </h1>
                </div>
            </div>
            <div class="row text-center margin-top mobile-margin-30">
                <div class="col-md-4">
                    <div class="angular-card" data-animation="flipInY">
                        <div class="bg">
                        </div>
                        <div class="blob">
                        </div>
                        <h3 class="text-font "> Single Page Application (SPA) Development</h3>
                        <p>
                            Craft intuitive and responsive SPAs for seamless user interactions and enhanced user
                            satisfaction.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mobile-margin-30">
                    <div class="angular-card" data-animation="flipInY">
                        <div class="bg">
                        </div>
                        <div class="blob">
                        </div>
                        <h3 class="text-font "> Angular UI/UX Design</h3>
                        <p>
                            Elevate your application's visual appeal with our expertise in Angular UI/UX design,
                            creating interfaces that captivate and engage users.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mobile-margin-30">
                    <div class="angular-card" data-animation="flipInY">
                        <div class="bg">
                        </div>
                        <div class="blob">
                        </div>
                        <h3 class="text-font "> Custom Widget Development</h3>
                        <p>
                            Tailored widget development to enhance the functionality and aesthetics of your Angular.js
                            applications.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row text-center margin-top mobile-margin-30">
                <div class="col-md-4">
                    <div class="angular-card" data-animation="flipInY">
                        <div class="bg">
                        </div>
                        <div class="blob">
                        </div>
                        <h3 class="text-font "> Angular Migration Services</h3>
                        <p>
                            Seamlessly upgrade your existing applications to the latest Angular version for enhanced
                            performance and security.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mobile-margin-30">
                    <div class="angular-card" data-animation="flipInY">
                        <div class="bg">
                        </div>
                        <div class="blob">
                        </div>
                        <h3 class="text-font "> Real-time Data Binding</h3>
                        <p>
                            Leverage the power of two-way data binding in Angular.js for real-time updates and a
                            smoother user experience.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mobile-margin-30">
                    <div class="angular-card" data-animation="flipInY">
                        <div class="bg">
                        </div>
                        <div class="blob">
                        </div>
                        <h3 class="text-font "> Angular Consulting</h3>
                        <p>
                            Strategic guidance and consultation on Angular.js implementation, best practices, and
                            optimization for your specific business needs.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="section-header text-center" data-animation="zoomIn" data-animation-delay="300ms">
                    <h1 class="header-font margin-top center-line">
                        Rely on us for full stack MEAN Application Development
                    </h1>
                </div>
                <div class="row margin-top mobile-margin-30">
                    <div class="col-md-6 col-sm-12">
                        <img data-animation="zoomReverseIn" data-animation-delay="300ms"
                            class="features-height display-none" src="images/services/info/angularJs-features.png">
                    </div>
                    <div class="col-md-6 col-sm-12" data-animation="slideInLeft" data-animation-delay="300ms">
                        <p class="init_text text-font">SoftFlame Solutions is an emerging AngularJS Development
                            Company
                            in Pune, Bangalore, Delhi for Mobile Applications and Web Applications Development in
                            Pune,
                            Bangalore, Delhi with security at its core. We develop Business Applications which are
                            robust, easy to maintain with compatibility to extend with additional features in future
                            scope. With strive to simplify development and testing of applications with the use of
                            Model
                            View Controller (MVC) architecture based framework, we provide end-to-end services to
                            our
                            esteemed clients.
                        </p>
                        <p class="init_text text-font">AAt SoftFlame Solutions, we have experienced team of
                            developers
                            to developed simple and scalable applications with compatible features to cater complex
                            business needs for diverse industries. Our dedicated team of AngularJS developers are
                            well
                            experienced with cutting-edge tools and technologies.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
</section>
<?php $pageTitle = "AngularJs App Development"; // Replace "Page Name" with the actual name of your page
include('contact-us-div.php'); ?>
<?php include 'footer.php'; ?>