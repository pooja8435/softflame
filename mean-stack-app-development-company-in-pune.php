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

    <title>Mean Stack App Development Company in Pune | Bangalore | Delhi | MEAN Stack Development Company in Pune |
        Bangalore | Delhi</title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="keywords"
        content="Mean Stack App Development Company in Pune, Bangalore, Delhi, website company in Pune, Bangalore, Delhi,web development company in pune,website design in Pune, Bangalore, Delhi,web design company,web design pune,web development company, website design company, ecommerce website design,ecommerce websites development,SEO services pune,seo company in Pune, Bangalore, Delhi" />
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="description"
        content="Mean Stack App Development Company in Pune, Bangalore, Delhi - SoftFlame Solutions offers Mean Stack App Development Services using  MongoDB, Express.js, AngularJS & Node.js technologies. Contact now for more info." />

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
    <script>
        new WOW({
            offset: 200
        }).init();

        var animateCss = [
            "bounce", "flash", "pulse", "rubberBand", "shake", "swing", "tada", "wobble", "jello",
            "bounceIn", "bounceInDown", "bounceInLeft", "bounceInRight", "bounceInUp",
            "fadeIn", "fadeInDown", "fadeInDownBig", "fadeInLeft", "fadeInLeftBig", "fadeInRight", "fadeInRightBig", "fadeInUp", "fadeInUpBig", "flip", "flipInX", "flipInY",
            "lightSpeedIn", "rotateIn", "rotateInDownLeft", "rotateInDownRight", "rotateInUpLeft", "rotateInUpRight",
            "slideInUp", "slideInDown", "slideInLeft", "slideInRight",
            "zoomIn", "zoomInDown", "zoomInLeft", "zoomInRight", "zoomInUp",
            "rollIn"
        ];

        var placeholder = $(".placeholder");
        var colorCounter = 0;

        for (i = 0; i < animateCss.length; i++) {
            var word = "<div class=\"word\"></div>";
            $(word).appendTo(placeholder);

            for (j = 0; j < animateCss[i].length; j++) {
                var letterDiv = "<div data-wow-delay=\"" + (j * 0.1).toFixed(2) + "s\"  class=\"letter wow " + animateCss[i] + " color" + colorCounter % 7 + "\">" + animateCss[i][j] + "</div>";
                $(letterDiv).appendTo($(".word").last());
                colorCounter++;
            }

        }
    </script>
    <style>
        .first-img {
            height: 270px !important;
        }

        .mean-container {
            padding: 120px 80px;
            display: flex;
            flex-direction: row;
            transform-style: preserve-3d;
        }

        .mean-cards {
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

        .mean-cards:hover {

            margin-right: 48px;
            transform: translate(0, -40px);
        }

        .mean-cards-img {
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
            <h1 data-animation="zoomReverseIn" class="font-family text-white sub-nav-head uppercase">MEAN Stack
                Development Company </h1>
            <h3 data-animation="zoomIn" data-animation-delay="500ms" class="text-white font-family"> Pune, Bangalore,
                Delhi</h3>
            <button data-animation="slideInUp" data-animation-delay="800ms" type="button"
                class="btn text-font book-appointment"> <a target="blank"
                    href='https://calendly.com/projects-vikasn/30min?back=1&month=2023-12'>Book a call with our
                    CEO</a></button>
        </div>
        <div class="overlay bg-opacity-7"></div>
        <img src="images/services/sub-nav/mean-stack.jpg" alt="Website Development Company in Pune, Bangalore, Delhi"
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
                            href="services.php">Services</a><i> / </i>Mean Stack Development</div>
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
                <h1 class="header-font">Mean Stack</h1>
                <p class="init_text text-font">MEAN is a collection of JavaScript-based technologies — MongoDB,
                    Express.js, AngularJS, and Node.js — used to develop web applications. From the client and server
                    sides to databases, MEAN is a full-stack development toolkit. Play through the following five
                    courses to become a MEAN stack developer and earn a new badge!</p>
                <p class="init_text text-font">MEAN stack is basically a collection of JavaScript-based web development
                    technologies that includes MongoDB, ExpressJS, AngularJS and NodeJS. These technologies work
                    together to develop a web application. AngularJS being client makes AJAX calls to ExpressJS
                    returning response in JSON format.
                </p>
                <p class="init_text text-font">ExpressJS that is running on NodeJS Server further communicate with
                    MongoDB as persistent medium
                </p>
            </div>
            <div class="col-md-6 img-center">
                <img class="first-img margin-top" data-animation="zoomIn" data-animation-delay="300ms"
                    src="images/services/info/meanstack.png">
            </div>
        </div>
    </div>

    <div class="container mean-container">

        <div class="card mean-cards" data-animation="slideInUp">
            <div class="card-body">
                <h3 class="text-font">MongoDB</h3>
                <img class="mean-cards-img" src="images/services/info/mongo.png">
                <p class="text-font">Harness the flexibility and scalability of MongoDB to store and manage your
                    data. We design efficient database architectures that ensure high performance and data
                    security.</p>
            </div>
        </div>
        <div class="card mean-cards" data-animation="slideInUp" data-animation-delay="200ms">
            <div class="card-body">
                <h3 class="text-font">Express.js</h3>
                <img class="mean-cards-img" src="images/services/info/express.png">
                <p class="text-font">We use Express.js to build a solid foundation for your web applications,
                    enabling rapid development of APIs and backend services while maintaining code
                    maintainability.</p>
            </div>
        </div>
        <div class="card mean-cards" data-animation="slideInUp" data-animation-delay="400ms">
            <div class="card-body">
                <h3 class="text-font">Angular</h3>
                <img class="mean-cards-img" src="images/services/info/angular.png">
                <p class="text-font">Craft engaging and user-friendly web interfaces with Angular. Our frontend
                    developers create responsive and dynamic web applications that captivate your users.</p>
            </div>
        </div>
        <div class="card mean-cards" data-animation="slideInUp" data-animation-delay="600ms">
            <div class="card-body">
                <h3 class="text-font">Node.js</h3>
                <img class="mean-cards-img" src="images/services/info/node.png">
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
                <h1 class="header-font">Why Mean Stack?</h1>
                <p class="init_text text-font">The acronym “MEAN” stands for “MongoDB Express.js AngularJS Node.js” and
                    represents a group of technologies which are known to synergize well together. The major benefit of
                    the MEAN stack is that it’s extremely quick to prototype with. Node.js allows you to use Javascript
                    on the backend as well as the frontend which can save you from having to learn a separate language.
                </p>
                <p class="init_text text-font">In addition, the NoSQL nature of MongoDB allows you to quickly change and
                    alter the data layer without having to worry about migrations, which is a very valuable attribute
                    when you’re trying to build a product without clear specifications.
                </p>
                <p class="init_text text-font">Finally, these technologies have a lot of community support behind them
                    so finding answers to questions or hiring help is going to be much easier using these technologies.
                </p>
            </div>

        </div>
    </div>

</section>

<?php $pageTitle = "Mean Stack Development"; // Replace "Page Name" with the actual name of your page
include('contact-us-div.php'); ?>
<?php include 'footer.php'; ?>