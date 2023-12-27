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
    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);


    </script>

    <title>About SoftFlame | Web Design & Development Company </title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="description"
        content="We offer Web Design,Web Development,E-Commerce Website Development,Android App Development,SEO,Social Media Services. Know more about us. Contact us now." />
    <meta name="keywords"
        content=" company, ecommerce website design,ecommerce websites development,SEO services pune,seo company in pune" />
    <meta name="author" content="">
    <meta name="robots" content="" />

    <link rel="canonical" href=" https://www.softflame.in/" />

    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/theme.css" rel="stylesheet">


    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="shortcut icon" href="images/fav NEW LOGO 2 ic (1).png" type="image/x-icon">

    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet'
        type='text/css'>

    <!-- stylesheets -->
    <link rel="stylesheet" media="screen" href="js/bootstrap/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="js/mainmenu/menu.css" type="text/css" />
    <link rel="stylesheet" href="css/default.css" type="text/css" />
    <link rel="stylesheet" href="css/about.css" type="text/css" />
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
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/text-animation.css" type="text/css" />
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
        .text-center-mobile {
            color: #181d38;
            font-family: 'Nunito', sans-serif !important;
        }

        @media screen and (max-width: 970px) {
            ::-webkit-scrollbar {
                width: 0px !important;
                height: 0px !important;
            }

            ::-webkit-scrollbar-thumb {
                background: none !important;
            }
        }
    </style>



</head>

<?php
$menuactive = "about";
include 'header.php'; ?>
<!--end menu-->
<div class="clearfix"></div>

<section>
    <div class="header-inner two">
        <div class="inner text-center col-md-6 padding-top">
            <h1 data-animation="zoomReverseIn" class="font-family text-white sub-nav-head uppercase">About Us</h1>
            <h3 data-animation="zoomIn" data-animation-delay="500ms" class="text-white font-family">We are passionate
                about creating innovative software solutions
            </h3>
            <button data-animation="slideInUp" data-animation-delay="800ms" type="button"
                class="btn text-font book-appointment"> <a target="blank"
                    href='contact.php'>Contact Us</a></button>
        </div>
        <div class="overlay bg-opacity-7"></div>
        <img src="images/about-us-banner.jpg" alt="Website Development Company in Pune, Bangalore, Delhi"
            class="img-responsive sub-nav-img" />
    </div>
    </div>
</section>
<!-- end header inner -->
<div class="clearfix"></div>

<section>
    <div class="pagenation-holder">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="pagenation_links text-font font-16"><a href="index.php">Home</a><i> / </i> About</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end section-->
<div class="clearfix"></div>

<section class="sec-padding">
    <div class="container ">
        <div class="row ">
            <div class="col-xs-12 text-center"></div>
            <div class="clearfix"></div>
            <div class="col-md-6">
                <h2 class="text-center-mobile"><b>SoftFlame</b>
                </h2>
                <p class="init_text text-font">At SoftFlame Solutions, we are passionate about creating innovative
                    software
                    solutions that empower
                    businesses to thrive in the digital age. With a deep commitment to excellence and a team of
                    dedicated professionals.<br><br>
                    We work with some dynamic clients who are based either locally in Pune or across the Globe, from
                    start-ups to international brands.Our projects not only look great, they use the right tools that
                    work for you and with your success comes ours. "Your Business We Care!"</p>

                <button type="button" class="btn connect-btn header-font"
                    onclick="window.location.href='contact.php'">Let's Connect</button>
            </div>
            <div class="col-md-6">
                <img class="office-img display-none" src="images/team.png">
            </div>
        </div>
        <br><br>
        <div class="row text-justify reveal">
            <div class="col-md-6">
                <img class="vision-img" src="images/vision.jpg">
            </div>
            <div class="col-md-6">
                <h2 class="text-center-mobile"><b>Our Vision</b>
                </h2>
                <p class="init_text text-font"> At Softflame Solutions, we envision a future where technology becomes a
                    force for
                    sustainability, social good, and global progress. We aspire to be at the forefront of this
                    transformation, leading the charge in creating software solutions that not only drive business
                    success but also have a positive impact on the world.<br><br>
                    We envision a society where cutting-edge technology is accessible to all, leveling the playing field
                    and bridging the digital divide. By pushing the boundaries of what is possible in software
                    development, we aim to contribute to a more inclusive, sustainable, and interconnected world.
                </p>
            </div>
        </div>
        <br><br>
        <div class="row text-center reveal">
            <h2 class="text-center-mobile"><b>Our Values
                    <b></h2>
            <div class="col-md-3">
                <div class="card our-values-card">
                    <img class="our-values-img" style="" src="images/high-quality.png">
                    <h3 class="header-font">Quality</h3>
                    <div class="card-body text-font">We are committed to delivering high-quality software that meets and
                        exceeds
                        our clients' expectations.</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card our-values-card">
                    <img class="our-values-img" src="images/creative.png">
                    <h3 class="header-font">Innovation</h3>
                    <div class="card-body text-font">Innovation is at the heart of what we do. We continuously explore
                        new
                        technologies and methodologies to stay ahead in the ever-evolving tech landscape.</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card our-values-card">
                    <img class="our-values-img" src="images/client.png">
                    <h3 class="header-font">Client-Centric</h3>
                    <div class="card-body text-font">Our clients' success is our success. We prioritize their needs and
                        work
                        collaboratively to achieve their goals.</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card our-values-card">
                    <img class="our-values-img" src="images/collaboration.png">
                    <h3 class="header-font">Integrity</h3>
                    <div class="card-body text-font">We uphold the highest ethical standards in all our interactions,
                        fostering
                        trust and long-term partnerships.</div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row reveal strategy-div">
            <div class="col-md-6">
                <h2 class="text-center-mobile"><b>Working Strategy<b></h2>
                <p class="text-font init_text text-justify">At Softflame Solutions, our working strategy is built on a
                    well-defined process
                    that ensures the successful delivery of software solutions. We follow a systematic approach that can
                    be summarized in the following key phases:</p>

                <div class="strategy-steps">
                    <ol>
                        <li>
                            <p class="text-font font-16"><b>Planning: </b>Our team collaborates closely with you to
                                define the project scope,
                                objectives, and a detailed roadmap. </p>
                        </li>
                        <li>
                            <p class="text-font font-16"><b>Design: </b>We focus on creating intuitive and visually
                                appealing designs that not only
                                meet your
                                requirements but also exceed your expectations. </p>
                        </li>
                        <li>
                            <p class="text-font font-16"><b>Development:</b> Our development process is driven by the
                                latest technologies and
                                industry
                                best practices, ensuring that your software solution is not just functional but also
                                scalable, secure, and efficient.</p>
                        </li>
                        <li>
                            <p class="text-font font-16"><b>Testing: </b> We conduct
                                comprehensive testing to identify and rectify any issues, ensuring that your software
                                solution is robust and free from defects. </p>
                        </li>
                        <li>
                            <p class="text-font font-16"><b>Release:</b> After rigorous testing and refinement, we are
                                ready to release your software
                                solution. We provide ongoing support and maintenance to address any
                                post-launch needs and to ensure your solution remains up-to-date and high-performing.
                            </p>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img class="plan-img display-none" src="images/pl.jpg">
            </div>
        </div>
        <div class="row text-center reveal margin-top">
            <div class="col-md-12">
                <h2 class="text-center-mobile"><b>Work Culture</b></h2>
                <p class="text-font init_text" style="text-align: center !important;">At Softflame Solutions, our work
                    culture is the foundation of our success.</p>
            </div>
        </div>

    </div>

    <div class="row margin-top reveal mt-20">
        <div class="col-md-6">
            <div class="card card-new">
                <div class="row">
                    <div class="col-md-6">
                        <img class="new-img" src="images/collab.png" alt="A leafy plant">
                    </div>
                    <div class="col-md-6">
                        <h3 class="new-text header-font">Collaboration</h3>
                        <p class="text-font text-justify">We believe that the best solutions are born out of
                            collaboration. Our
                            team
                            works
                            closely
                            with each other and with our clients to bring ideas to life.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-20">
            <div class="card card-new">
                <div class="row">
                    <div class="col-md-6">
                        <img class="new-img" src="images/work-life-balance.png" alt="Some pointy plants">
                    </div>
                    <div class="col-md-6">
                        <h3 class="new-text header-font">Work-Life Balance</h3>
                        <p class="text-font text-justify">We understand the importance of work-life balance and offer
                            flexible
                            working
                            arrangements
                            that promote well-being.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row margin-top reveal mt-20">
        <div class="col-md-6">
            <div class="card card-new">
                <div class="row">
                    <div class="col-md-6">
                        <img class="new-img" src="images/professionals.png" alt="A leafy plant">
                    </div>
                    <div class="col-md-6">
                        <h3 class="new-text header-font">Professional Development</h3>
                        <p class="text-font text-justify">We invest in our team's growth by providing training and
                            opportunities
                            for
                            skill
                            enhancement. We believe in the continuous development of our employees.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-20">
            <div class="card card-new">
                <div class="row">
                    <div class="col-md-6">
                        <img class="new-img" src="images/giving-back.png" alt="Some pointy plants">
                    </div>
                    <div class="col-md-6">
                        <h3 class="new-text header-font">Giving Back</h3>
                        <p class="text-font text-justify">At Softflame Solutions, we're not just focused on profits. We
                            believe in giving
                            back
                            to
                            our community and the tech industry. We're involved in various charitable
                            initiatives
                            and
                            knowledge-sharing programs to make a positive impact beyond our projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>

<?php include 'footer.php'; ?>