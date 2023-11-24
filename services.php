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
    <!-- <script>
        
        function () {
            var s = document.querySelectorAll(".");

            for (var i = 0; i < s.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = s[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    s[i].classList.add("active");
                } else {
                    s[i].classList.remove("active");
                }
            }
        }
        window.addEventListener("scroll", );


    </script> -->

</head>

<?php include 'header.php'; ?>

<section>
    <div class="header-inner two">
    <div class="inner text-center col-md-6 padding-top">
            <h1 data-animation="zoomReverseIn" class="font-family text-white sub-nav-head uppercase">Services</h1>
            <h3 data-animation="zoomIn" data-animation-delay="500ms" class="text-white font-family">We offer wide range of software services in pune for your business
                enhancement</h3>
        </div>
        <div class="overlay bg-opacity-7"></div>
        <img src="images/services-banner.jpg" alt="Website Development Company in Pune, Bangalore, Delhi"
            class="img-responsive sub-nav-img" />
    </div>
    </div>
</section>

<section>
    <div class="pagenation-holder">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="pagenation_links text-font font-16"><a href="index.php">Home</a><i> / </i> Services</div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="box-wrapper box-div">
        <figure class="shape-box shape-box_half" data-animation="slideInUp">
            <img src="images/services/web-development.jpg" alt="web">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                   <img class="icon-img" src="images/services/icons/coding.png">
                    <h4 class="card-main-title header-font">Website Development</h4>
                </div>
                <p class="card-content">We offer a professional Web Development & Design Services Company in Pune, India
                </p>
                <a href="website-development-company-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" data-animation-delay="200ms">
            <img src="images/services/meanstack.jpg">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/layers.png">
                    <h4 class="card-main-title header-font">mean stack app</h4>
                </div>
                <p class="card-content">MEAN is a collection of JavaScript-based technologies used to develop web
                    applications</p>
                <a href="mean-stack-app-development-company-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" data-animation-delay="400ms">
            <img src="images/services/3.jpg">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/nodejs.png">
                    <h4 class="card-main-title header-font">node js</h4>
                </div>
                <p class="card-content">SoftFlame Solutions is emerging Node.js applications development company in Pune
                </p>
                <a href="node-js-development-company-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" data-animation-delay="600ms">
            <img src="images/services/angular.png">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/angularjs.png">
                    <h4 class="card-main-title header-font">angular js</h4>
                </div>
                <p class="card-content">We are offering reliable AngularJS consulting and development services for our
                    esteemed clients</p>
                <a href="angularjs-development-company-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" >
            <img src="images/services/ux.jpg" alt="">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/ui.png">
                    <h4 class="card-main-title header-font">ux design</h4>
                </div>
                <p class="card-content">We provide website design solutions to meet your requirements
                </p>
                <a href="ui-ux-design-company-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" data-animation-delay="200ms">
            <img src="images/services/ecom.png">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/shopping-online.png">
                    <h4 class="card-main-title header-font">ecommerce</h4>
                </div>
                <p class="card-content">At SFS, we create quality websites for companies from a wide range of industries
                </p>
                <a href="ecommerce-development-company-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" data-animation-delay="400ms">
            <img src="images/services/iphone.png">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/apple.png">
                    <h4 class="card-main-title header-font">iphone/ipad app</h4>
                </div>
                <p class="card-content">Making an iPhone app is always the right way to begin your app business
                </p>
                <a href="ios-app-development-company-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" data-animation-delay="600ms">
            <img src="images/services/android.jpg">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/android.png">
                    <h4 class="card-main-title header-font">android app</h4>
                </div>
                <p class="card-content">Hire SoftFlame Solutions for your Android app development service</p>
                <a href="android-app-development-company-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp">
            <img src="images/services/cordova.png" alt="">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/shopping-online.png">
                    <h4 class="card-main-title header-font">Cordova/ phonegap</h4>
                </div>
                <p class="card-content">We build cross-platform applications faster and with fewer efforts
                </p>
                <a href="cordova-phonegap-app-development-company-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" data-animation-delay="200ms">
            <img src="images/services/ionic.png">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/shopping-online.png">
                    <h4 class="card-main-title header-font">Ionic framework app</h4>
                </div>
                <p class="card-content">Ionic framework app development to build hybrid mobile apps</p>
                <a href="ionic-app-development-company-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" data-animation-delay="400ms">
            <img src="images/services/cross-app.jpg">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/cross-platform.png">
                    <h4 class="card-main-title header-font">Cross platform app</h4>
                </div>
                <p class="card-content">At SoftFlame Solutions our Cross platform developers mainly uses Phonegap
                    framework
                </p>
                <a href="cross-platform-app-development-company-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" data-animation-delay="600ms">
            <img src="images/services/meteor.png">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/comet.png">
                    <h4 class="card-main-title header-font">meteor js</h4>
                </div>
                <p class="card-content">As Meteor uses single language, it speeds development time & is great for rapid
                    prototyping</p>
                <a href="meteorjs-app-development-company-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" >
            <img src="images/services/cloud-consulting.jpg" alt="">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/consulting.png">
                    <h4 class="card-main-title header-font">aws cloud consulting</h4>
                </div>
                <p class="card-content">AWS cloud offers cloud solutions to move faster , lower IT cost, and scale
                    applications.
                </p>
                <a href="aws-cloud-consulting-services-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" data-animation-delay="200ms">
            <img src="images/services/aws.png">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/migration.png">
                    <h4 class="card-main-title header-font">aws cloud migration</h4>
                </div>
                <p class="card-content">We help you to migrate and deploy various applications</p>
                <a href="aws-cloud-migration-services-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" data-animation-delay="400ms">
            <img src="images/services/cloudManagement.png">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/cloud-computing.png">
                    <h4 class="card-main-title header-font">aws managed services</h4>
                </div>
                <p class="card-content">Consulting to empower and achieve business objectives more faster with Managed
                    AWS cloud Consulting Services
                </p>
                <a href="managed-aws-services-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
        <figure class="shape-box shape-box_half " data-animation="slideInUp" data-animation-delay="600ms">
            <img src="images/services/react.png">
            <div class="brk-abs-overlay z-index-0 bg-black opacity-60"></div>
            <figcaption>
                <div class="show-cont">
                <img class="icon-img" src="images/services/icons/atom.png">
                    <h4 class="card-main-title header-font">Mern Stack</h4>
                </div>
                <p class="card-content">MERN is a collection of JavaScript-based technologies used to develop web
                    applications</p>
                <a href="mern-stack-app-development-company-in-pune.php" class="read-more-btn">Read More</a>
            </figcaption>
            <span class="after"></span>
        </figure>
    </div>
</section>



<!-- end section -->
<div class="clearfix"></div>

<?php include 'footer.php'; ?>