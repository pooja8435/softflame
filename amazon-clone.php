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

    <title>Website Developers in Pune | Web Design Services Company Pune | SoftFlame Solutions</title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="description"
        content="Website Developers & Web Design Services Company Pune - SoftFlame Solutions offer E-Commerce Development, Mean Stack App Development, Node js Development, Angularjs Development Services. Know More." />
    <meta name="keywords"
        content="Website Developers in Pune, Web Design Services Company Pune,website company in pune,web development company , website design in pune,web design company,web design pune,web development company, website design company" />
    <meta name="author" content="">
    <meta name="robots" content="" />

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
    <link rel="stylesheet" href="css/services.css" type="text/css" />
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
    <link rel="stylesheet" href="css/text-animation.css" type="text/css" />
    <link rel="stylesheet" href="css/products-info.css" type="text/css" />
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
</head>

<?php include 'header.php'; ?>

<section>
    <div class="header-inner two">
        <div class="inner text-center col-md-6 padding-top">
            <div class="row">
                <div class="col-md-8">
                    <h1 data-animation="zoomReverseIn" class="font-family text-white sub-nav-head uppercase">Amazon /
                        Flipkart Clone</h1>
                </div>
            </div>
            <!-- <h3 data-animation="zoomIn" data-animation-delay="500ms" class="text-white font-family">We offer wide range
                of software services in pune for your business
                enhancement</h3> -->
        </div>
        <div class="overlay bg-opacity-5"></div>
        <img src="images/products/banner/amazon-banner.jpg" alt="Website Development Company in Pune, Bangalore, Delhi"
            class="img-responsive sub-nav-img" />
    </div>
    </div>
</section>

<section>
    <div class="pagenation-holder">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="pagenation_links text-font font-16"><a href="index.php">Home</a><i> / </i> Products
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="sec-padding">
    <div class="row">
        <div class="col-md-6" data-animation="slideInRight">
            <h1 class="header-font">Welcome to the Future of Shopping</h1>
            <p class="init_text text-font clr-black">Experience the synergy of Amazon and Flipkart in our innovative
                app. Discover a world of choices, seamless shopping, and incredible convenience. Embrace the evolution
                of e-commerce with us!</p>
            <div class="card list-card">
                <div class="card-body list-card-body">
                    <div><img class="img-40" src="images/products/info/fast-delivery.png"></div>
                    <div>
                        <h4 class="mb-0 text-font">Fast Delivery</h4>
                        <p class="text-font">Get your orders delivered quickly and efficiently, ensuring you receive
                            your products in no
                            time.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card list-card">
                <div class="card-body list-card-body">
                    <div><img class="img-40" src="images/products/info/customer-service.png"></div>
                    <div>
                        <h4 class="mb-0 text-font">24/7 Customer Support</h4>
                        <p class="text-font">We're here to assist you around the clock. Our support team is always ready
                            to help, anytime you need it.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card list-card">
                <div class="card-body list-card-body">
                    <div><img class="img-40" src="images/products/info/money.png"></div>
                    <div>
                        <h4 class="mb-0 text-font">Secure Payments</h4>
                        <p class="text-font">Shop with confidence knowing that your payments are securely processed,
                            protecting your financial information.
                        </p>
                    </div>
                </div>
            </div>
            <div class="contact-btn-div "><button type="button" class="btn contact-btn-blue text-font"
                    onclick="window.location.href='contact.php'">Contact Us</button>
            </div>
        </div>
        <div class="col-md-6">
            <img data-animation="zoomIn" data-animation-delay="300ms" class="amazon-img-1" src="images/products/info/amazon-img-1.png">
        </div>
    </div>

    <div class="row margin-top-70 mobile-margin-30">
        <div class="col-md-4">
            <div class="car" data-animation="slideInLeft" data-animation-delay="600ms">
                <img class="shopping-cart display-none" src="images/products/info/shopping-cart.png" alt="">

            </div>
        </div>
        <div class="col-md-8" data-animation="slideInRight">
            <h1 class="header-font">Why Choose Our Amazon/Flipkart Clone Script</h1>
            <p class="init_text text-font clr-black">We're SoftFlame Solutions, a leading mobile app development
                company.
                Our Amazon/Flipkart Clone Script offers a great way to create your online store and connect with
                customers worldwide. This script easily becomes a part of your eCommerce website, making it perfect for
                entrepreneurs starting online product sales.</p>
            <p class="init_text text-font clr-black">Our Amazon/Flipkart clone platform comes with essential features
                ready to use, ensuring a quick launch of your online store. By choosing us, you get a pre-built
                foundation that saves you time and effort. We also offer high flexibility and customization, tailoring
                the platform to your unique needs.
            </p>
            <p class="init_text text-font clr-black">The internet's impact has led businesses to use online tools, such
                as websites, social media, and ready-made
                eCommerce apps. These tools help companies attract millions of potential customers globally. Using these
                platforms, businesses can reach people everywhere, regardless of location. This global reach lets you
                tap
                into various markets, stimulate growth, and expand your customer base significantly.</p>
        </div>

    </div>

    <div class="row margin-top-70 mobile-margin-30">
        <div class="col-md-12" data-animation="zoomReverseIn">
            <h1 class="header-font text-center">Our Ecommerce Package Includes</h1>
        </div>
    </div>
    <div class="row margin-top-70 mobile-margin-30">
        <div class="col-md-4">
            <div class="card height-240 choose-card" data-animation="flipInY">
                <div class="flex flex-center">
                    <div class="text-center">
                        <img class="img-60" src="images/products/info/iphone.png">
                        <h3 class="text-font">Android And IOS Apps</h3>
                        <p class="text-font">We provide awesome customizable mobile apps for both android and ios
                            platforms.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4 mobile-margin-30">
            <div class="card height-240 choose-card" data-animation="flipInY">
                <div class="flex">
                    <div class="text-center">
                        <img class="img-60" src="images/products/info/dashboard.png">
                        <h3 class="text-font">Admin Dashboards</h3>
                        <p class="text-font">User-friendly Administrator dashboard with Features and Characteristics for
                            better Site Management.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mobile-margin-30">
            <div class="card height-240 choose-card" data-animation="flipInY">
                <div class="flex">
                    <div class="text-center">
                        <img class="img-60" src="images/products/info/monitor.png">
                        <h3 class="text-font">Vendor Dashboard</h3>
                        <p class="text-font">Powerful multi-vendor e-commerce script for diverse products, enabling
                            multiple vendors on a single platform.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row margin-top-70 mobile-margin-30">
        <div class="col-md-4">
            <div class="card height-240 choose-card" data-animation="flipInY">
                <div class="flex">
                    <div class="text-center">
                        <img class="img-60" src="images/products/info/tag.png">
                        <h3 class="text-font">White Labeling</h3>
                        <p class="text-font">Create custom-branded iOS & Android apps for customers and vendors. Comes
                            with ready-to-use source code for smooth operation.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mobile-margin-30">
            <div class="card height-240 choose-card" data-animation="flipInY">
                <div class="flex">
                    <div class="text-center">
                        <img class="img-60" src="images/products/info/source-code.png">
                        <h3 class="text-font">100% Source Code Ownership</h3>
                        <p class="text-font">Comprehensive encrypted code for Server, Admin Dashboard, iOS & Android
                            apps, with detailed documentation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mobile-margin-30">
            <div class="card height-240 choose-card" data-animation="flipInY">
                <div class="flex">
                    <div class="text-center">
                        <img class="img-60" src="images/products/info/cashless-payment.png">
                        <h3 class="text-font">Payment</h3>
                        <p class="text-font">Various payment gateways, including credit/debit cards and popular mobile
                            wallets like PayPal, Paytm, are supported.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- end section -->
<div class="clearfix"></div>
<?php $pageTitle = "Product"; // Replace "Page Name" with the actual name of your page
include('contact-us-div.php'); ?>

<?php include 'footer.php'; ?>