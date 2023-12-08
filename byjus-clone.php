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
                <div class="col-md-6">
                    <h1 data-animation="zoomReverseIn" class="font-family text-white sub-nav-head uppercase">Byjus Clone
                    </h1>
                </div>
            </div>
            <!-- <h3 data-animation="zoomIn" data-animation-delay="500ms" class="text-white font-family">We offer wide range
                of software services in pune for your business
                enhancement</h3> -->
        </div>
        <div class="overlay bg-opacity-5"></div>
        <img src="images/products/banner/byjus-banner.jpg" alt="Website Development Company in Pune, Bangalore, Delhi"
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
            <h1 class="header-font">Welcome to BYJU's Learning App</h1>
            <p class="init_text text-font clr-black">Explore a world of interactive and engaging learning with BYJU's
                App. Our comprehensive study materials, interactive videos, and personalized learning approach make
                education an exciting journey. Whether you're a student, parent, or educator, our app offers a unique
                and effective way to master subjects and concepts.</p>
            <p class="init_text text-font clr-black">Join millions of learners who have discovered the power of learning
                with BYJU's. Elevate your knowledge and unlock your potential with our user-friendly and innovative
                learning platform.
            </p>
        </div>
        <div class="col-md-6">
            <img data-animation="zoomIn" data-animation-delay="300ms" class="byjus-img-1 flt-right"
                src="images/products/info/byjus-img-1.png">
        </div>
    </div>
    <div class="row margin-top-70 mobile-margin-30">
        <div class="col-md-12" data-animation="zoomReverseIn">
            <h1 class="header-font text-center center-line">Solution Offered</h1>
        </div>
    </div>
    <div class="row margin-top-70 mobile-margin-30">
        <div class="col-md-4">
            <div class="card height-240 choose-card" data-animation="flipInY">
                <div class="flex flex-center">
                    <div class="text-center">
                        <img class="img-60" src="images/products/info/deep-learning.png">
                        <h3 class="text-font">Interactive Learning</h3>
                        <p class="text-font">Engage with interactive lessons and videos that bring learning to life.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4 mobile-margin-30">
            <div class="card height-240 choose-card" data-animation="flipInY">
                <div class="flex">
                    <div class="text-center">
                        <img class="img-60" src="images/products/info/set-up.png">
                        <h3 class="text-font">Personalized Approach</h3>
                        <p class="text-font">Receive customized content and assessments tailored to your learning style.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mobile-margin-30">
            <div class="card height-240 choose-card" data-animation="flipInY">
                <div class="flex">
                    <div class="text-center">
                        <img class="img-60" src="images/products/info/up-arrow.png">
                        <h3 class="text-font">Track Progress</h3>
                        <p class="text-font">Monitor your progress and identify areas for improvement with detailed
                            insights.</p>
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
                        <img class="img-60" src="images/products/info/achievement.png">
                        <h3 class="text-font">Achievement Recognition</h3>
                        <p class="text-font">Earn rewards and certificates as you achieve milestones in your learning
                            journey.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mobile-margin-30">
            <div class="card height-240 choose-card" data-animation="flipInY">
                <div class="flex">
                    <div class="text-center">
                        <img class="img-60" src="images/products/info/team.png">
                        <h3 class="text-font">Collaborative Learning</h3>
                        <p class="text-font">Connect with peers to collaborate, discuss, and share insights for better
                            understanding.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mobile-margin-30">
            <div class="card height-240 choose-card" data-animation="flipInY">
                <div class="flex">
                    <div class="text-center">
                        <img class="img-60" src="images/products/info/flexibility.png">
                        <h3 class="text-font">Flexible Learning</h3>
                        <p class="text-font">Learn at your own pace, anytime, anywhere, to suit your schedule and
                            preferences.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row margin-top-70 mobile-margin-30">
        <h1 class="header-font text-center center-line">Features Include</h1>
    </div>
    <div class="row margin-top-70 mobile-margin-30">
        <div class="col-md-4">
            <h3 class="text-font pink"> Wallet App For Merchants</h3>
            <p class="text-font text-justify">Our integrated Merchant Mobile Wallet Apps ensure a superior checkout
                experience for
                your customers. With
                advanced features like cost-splitting, ACH (Automated Clearing House), and invoice generation, you can
                forge long-term relationships with your clients.</p>
        </div>
        <div class="col-md-4 text-center ">
            <img style=" height: 250px;" src="images/products/info/wallete.gif">
        </div>
        <div class="col-md-4">
            <h3 class="text-font purple"> Wallet App For Users</h3>
            <p class="text-font text-justify">To expedite transactions, customers can create profiles containing their
                personal
                information and bank account details. Payment methods like credit cards and PayPal accounts can be
                securely saved for swift future purchases.</p>
        </div>
    </div>
    <div class="row margin-top-70 mobile-margin-30">
        <div class="col-md-4">
            <h3 class="text-font green"> Cryptocurrency wallet</h3>
            <p class="text-font text-justify">Looking for a fun and secure Cryptocurrency wallet app? Contact us now!
                Our bitcoin
                wallet application development services simplify trading, purchasing, and selling bitcoins. Share your
                requirements, and we'll strive to fulfill your needs.</p>
        </div>
        <div class="col-md-4 text-center"> 
            <img style=" height: 200px;" src="images/products/info/bluetooth-logo.gif">
        </div>
        <div class="col-md-4">
            <h3 class="text-font red"> Bluetooth and iBeacon</h3>
            <p class="text-font text-justify">The iBeacon system is a bluetooth-based payment system that allows you to
                send money
                without having to use your credit card.</p>
        </div>
    </div>
    <div class="row margin-top-70 mobile-margin-30">
        <div class="col-md-4">
            <h3 class="text-font blue"> NFC(Near field Communication)</h3>
            <p class="text-font text-justify">Apple Pay, Google Pay, and Samsung Pay are just a few of the mobile
                payment systems
                that employ it. Set up wifi connections and create access tokens and keycards.</p>
        </div>
        <div class="col-md-4 text-center">
             <img style=" height: 200px;" src="images/products/info/learning.gif">
    </div>
        <div class="col-md-4">
            <h3 class="text-font brown"> E-learning apps</h3>
            <p class="text-font text-justify">We'll work together to create highly customised E-learning software that
                meets the
                needs of your clients.</p>
        </div>
    </div>

</section>


<!-- end section -->
<div class="clearfix"></div>
<?php $pageTitle = "Product"; // Replace "Page Name" with the actual name of your page
include('contact-us-div.php'); ?>

<?php include 'footer.php'; ?>