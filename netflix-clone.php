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
                    <h1 data-animation="zoomReverseIn" class="font-family text-white sub-nav-head uppercase">Netflix
                        Clone</h1>
                </div>
            </div>
            <!-- <h3 class="text-font" data-animation="zoomIn" data-animation-delay="500ms" class="text-white font-family">We offer wide range
                of software services in pune for your business
                enhancement</h3> -->
        </div>
        <div class="overlay bg-opacity-5"></div>
        <img src="images/products/banner/netflix-banner.jpg" alt="Website Development Company in Pune, Bangalore, Delhi"
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
            <h1 class="header-font">Multiplayer Netflix Clone App Development</h1>
            <p class="init_text text-font clr-black">At Netflix Clone App Development, we specialize in creating
                cutting-edge multiplayer streaming platforms inspired by Netflix. Our team of experts leverages the
                latest technologies and best practices to deliver seamless, high-quality streaming experiences to users
                around the world.</p>
            <p class="init_text text-font clr-black">With a focus on user engagement and interaction, our multiplayer
                Netflix clone apps offer a unique blend of entertainment and social interaction. Whether it's watching
                movies, TV shows, or exclusive content with friends and family in real time, we've got you covered.
            </p>
            <p class="init_text text-font clr-black">Join us in revolutionizing the way people consume media, and let's
                build the next generation of entertainment together.
            </p>
            <div class="contact-btn-div"><button type="button" class="btn contact-btn-blue text-font"
                    onclick="window.location.href='contact.php'">Contact Us</button>
            </div>
        </div>
        <div class="col-md-6">
            <img data-animation="zoomIn" data-animation-delay="300ms" class="display-none flt-right"
                src="images/products/info/netflix-img-1.png">
        </div>
    </div>

    <div class="row margin-top-70 mobile-margin-30">
        <div class="col-md-4">
            <div data-animation="slideInRight" data-animation-delay="600ms">
                <img class="netflix-laptop" src="images/products/info/netflix-laptop.png" alt="">

            </div>
        </div>
        <div class="col-md-8" data-animation="slideInLeft">
            <h1 class="header-font">Why Choose Our App Over Netflix Clone?</h1>
            <p class="init_text text-font clr-black">Experience entertainment like never before with our revolutionary
                Multiplayer Streaming App. Engage with friends and family while watching your favorite movies and TV
                shows together in real time. Our app seamlessly combines the best of Netflix's content with social
                interaction, creating an immersive and connected viewing experience.</p>
            <p class="init_text text-font clr-black">Say goodbye to passive watching. With our app, you can interact,
                react, and discuss the content you love, making every moment memorable and shared.
            </p>
            <p class="init_text text-font clr-black">Join us in shaping the future of entertainment. Elevate your
                streaming experience with our beautifully designed, feature-rich app today.
            </p>
        </div>

    </div>
    <div class="row margin-top-70 mobile-margin-30">
        <div class="col-md-4" data-animation="zoomIn">
            <div class="speech-bubble round float">
                <h3 class="text-font">Real-time Interaction</h3>
                <p class="text-font">Engage with friends while watching content together in real time.</p>
            </div>
        </div>
        <div class="col-md-4 mobile-margin-30" data-animation="zoomIn" >
            <div class="speech-bubble round float">
                <h3 class="text-font">Shared Experiences</h3>
                <p class="text-font">Discuss and react to scenes with built-in chat and reaction features.</p>
            </div>
        </div>
        <div class="col-md-4 mobile-margin-30" data-animation="zoomIn">
            <div class="speech-bubble round float" >
                <h3 class="text-font">Content + Social</h3>
                <p class="text-font">Combine the best of Netflix's library with social interaction.</p>
            </div>
        </div>
    </div>
    <div class="row margin-top-70 mobile-margin-30">
        <div class="col-md-6" data-animation="slideInRight">
            <h3 class="text-font">What differentiates us from other Netflix Clone App development firms?</h3>
            <ul class="list">
                <li>Customizations that are extensive</li>
                <li>Prompt deployment</li>
                <li>Installation security</li>
                <li>Multi-platform operations</li>
                <li>Appropriate support and maintenance</li>
                <li>Cost-effective solutions</li>
                <li>Performance scalability with a powerful admin dashboard</li>
                <li>Integration of cloud computing technology</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img data-animation="zoomIn" class="netflix-screen display-none" src="images/products/info/netflix-screen.jpg">
        </div>
    </div>

</section>


<!-- end section -->
<div class="clearfix"></div>
<?php $pageTitle = "Product"; // Replace "Page Name" with the actual name of your page
include('contact-us-div.php'); ?>

<?php include 'footer.php'; ?>