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

    <title>MERN Stack App Development Company in Pune | Bangalore | Delhi | MERN Stack Development Company in Pune |
        Bangalore | Delhi</title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="keywords"
        content="MERN Stack App Development Company in Pune, Bangalore, Delhi, website company in Pune, Bangalore, Delhi,web development company in pune,website design in Pune, Bangalore, Delhi,web design company,web design pune,web development company, website design company, ecommerce website design,ecommerce websites development,SEO services pune,seo company in Pune, Bangalore, Delhi" />
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="description"
        content="MERN Stack App Development Company in Pune, Bangalore, Delhi - SoftFlame Solutions offers MERN Stack App Development Services using  MongoDB, Express.js, ReactJS & Node.js technologies. Contact now for more info." />

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
    <script>
        $(".navbar-nav").on('click', 'li', function () {
            $(".navbar-nav li.active").removeClass("active");
            // adding classname 'active' to current click li 
            $(this).addClass("active");
        });
    </script>
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
            height: 335px !important;
            margin-top: 25px;
        }

        .MERN-container {
            padding: 120px 80px;
            display: flex;
            flex-direction: row;
            transform-style: preserve-3d;
        }

        .MERN-cards {
            min-width: 240px;

            padding: 16px 24px 32px;
            margin-left: -32px;
            will-change: transform;
            transition: all 1s ease;
            background: white;
            cursor: pointer;
            border-radius: 16px;
            box-shadow: -1rem 0 8rem #cfcdcd;
        }

        .MERN-cards:hover {

            margin-right: 48px;
            transform: translate(0, -40px);
        }

        .MERN-cards-img {
            height: 140px;
        }

        .second-img {
            height: 370px !important;
        }
    </style>


</head>
<?php include 'header.php'; ?>
<!--end menu-->


<section>
    <div class="header-inner two">
        <div class="inner text-center col-md-6 padding-top">
            <h1 data-animation="zoomReverseIn" class="font-family text-white sub-nav-head uppercase">MERN Stack
                Development Company </h1>
            <h3 data-animation="zoomIn" data-animation-delay="500ms" class="text-white font-family"> Pune, Bangalore,
                Delhi</h3>
            <button data-animation="slideInUp" data-animation-delay="200ms" data-animation-delay="800ms" type="button"
                class="btn text-font book-appointment"> <a target="blank"
                    href='https://calendly.com/projects-vikasn/30min?back=1&month=2023-12'>Book a call with our
                    CEO</a></button>
        </div>
        <div class="overlay bg-opacity-7"></div>
        <img src="images/services/sub-nav/mern-banner.jpg" alt="Website Development Company in Pune, Bangalore, Delhi"
            class="img-responsive sub-nav-img" />
    </div>
</section>
<!-- end header inner -->


<section>
    <div class="pagenation-holder">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="pagenation_links text-font font-16"><a href="index.php">Home</a><i> / </i><a
                            href="services.php">Services</a><i> / </i>Mern Stack Development</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end section-->


<section class="sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-animation="slideInRight">
                <h1 class="header-font">Mern Stack</h1>
                <p class="init_text text-font">MERN is a collection of JavaScript-based technologies — MongoDB,
                    Express.js, ReactJS, and Node.js — used to develop web applications. From the client and server
                    sides to databases, MERN is a full-stack development toolkit. Play through the following five
                    courses to become a MERN stack developer and earn a new badge!</p>
                <p class="init_text text-font">MERN stack is basically a collection of JavaScript-based web development
                    technologies that includes MongoDB, ExpressJS, ReactJS and NodeJS. These technologies work
                    together to develop a web application. ReactJS being client makes AJAX calls to ExpressJS
                    returning response in JSON format.
                </p>
                <p class="init_text text-font">ExpressJS that is running on NodeJS Server further communicate with
                    MongoDB as persistent medium
                </p>
            </div>
            <div class="col-md-6 img-center">
                <img class="first-img " data-animation="zoomIn" data-animation-delay="300ms"
                    src="images/services/info/mern-stack.png">
            </div>
        </div>
    </div>

    <div class="container MERN-container">

        <div class="card MERN-cards" data-animation="slideInUp" >
            <div class="card-body">
                <h3 class="text-font">MongoDB</h3>
                <img class="MERN-cards-img" src="images/services/info/mongo.png">
                <p class="text-font">Harness the flexibility and scalability of MongoDB to store and manage your
                    data. We design efficient database architectures that ensure high performance and data
                    security.</p>
            </div>
        </div>
        <div class="card MERN-cards" data-animation="slideInUp" data-animation-delay="200ms">
            <div class="card-body">
                <h3 class="text-font">Express.js</h3>
                <img class="MERN-cards-img" src="images/services/info/express.png">
                <p class="text-font">We use Express.js to build a solid foundation for your web applications,
                    enabling rapid development of APIs and backend services while maintaining code
                    maintainability.</p>
            </div>
        </div>
        <div class="card MERN-cards" data-animation="slideInUp" data-animation-delay="400ms">
            <div class="card-body">
                <h3 class="text-font">React</h3>
                <img class="MERN-cards-img" src="images/services/info/react-logo.png">
                <p class="text-font">React, a powerful frontend library, is an integral part of the MERN Stack. React's
                    component-based architecture enhances code organization and
                    reusability.</p>
            </div>
        </div>
        <div class="card MERN-cards" data-animation="slideInUp" data-animation-delay="600ms">
            <div class="card-body">
                <h3 class="text-font">Node.js</h3>
                <img class="MERN-cards-img" src="images/services/info/node.png">
                <p class="text-font">Leverage the speed and efficiency of Node.js to power your real-time and
                    server-side applications. Our experts build robust and performant server-side code.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img data-animation="flipInY" class="second-img display-none" src="images/services/info/mean-img1.png">
            </div>
            <div class="col-md-6" data-animation="zoomIn" data-animation-delay="300ms">
                <h1 class="header-font">Why Mern Stack?</h1>
                <p class="init_text text-font">The MERN Stack, encompassing MongoDB, Express.js, React, and Node.js, has
                    gained widespread popularity in web development for its cohesive and efficient approach. A notable
                    advantage lies in the use of JavaScript throughout the entire stack, allowing developers to
                    seamlessly transition between frontend and backend tasks, fostering code reusability and a unified
                    development workflow.
                </p>
                <p class="init_text text-font"> React, a key component, empowers developers to build dynamic and
                    engaging user interfaces through its component-based architecture. On the backend, Node.js provides
                    scalability and performance, making it adept at handling concurrent requests and facilitating
                    real-time application development.
                </p>
                <p class="init_text text-font">MongoDB, as the NoSQL database, offers flexibility in data storage with
                    its document-oriented model, accommodating diverse and evolving data structures.
                </p>
            </div>

        </div>
    </div>

</section>

<?php $pageTitle = "Mern Stack Development"; // Replace "Page Name" with the actual name of your page
include('contact-us-div.php'); ?>
<?php include 'footer.php'; ?>