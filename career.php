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

    <title>Career at SoftFlame</title>
    <meta name="description"
        content="Softflame Solutions is leading Website Development Company in Pune, Delhi, Bangalore. We are specializes in Web Development Company in Pune, Delhi, Bangalore,Web Developers in Pune, Delhi, Bangalore.Web Design Company in Pune, Web Development in Pune, Delhi, Bangalore with the cost-effective solutions for your website." />
    <meta name="keywords" content="Career at SoftFlame" />
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
    <!-- <link rel="stylesheet" href="css/web-development-design.css" type="text/css" /> -->
    <link rel="stylesheet" href="css/career.css" type="text/css" />
    <link rel="stylesheet" href="css/text-animation.css" type="text/css" />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

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
        $(document).ready(function () {
            $(this).addClass('active');
            toggleVisibility('Menu1');

            $(selector).on('click', function () {
                $(selector).removeClass('active');
                $(this).addClass('active');
            });
        });
        var divs = ["Menu1", "Menu2", "Menu3", "Menu4", "Menu5", "Menu6", "Menu7"];
        var selector = '.jobs-card';
        var visibleDivId = null;

        function toggleVisibility(divId) {
            if (visibleDivId === divId) {
                // visibleDivId = null;
            } else {
                visibleDivId = divId;
            }
            hideNonVisibleDivs();
        }
        function hideNonVisibleDivs() {
            var i, divId, div;
            for (i = 0; i < divs.length; i++) {
                divId = divs[i];
                div = document.getElementById(divId);
                if (visibleDivId === divId) {
                    div.style.display = "block";
                } else {
                    div.style.display = "none";
                }
            }
        }
    </script>

</head>

<?php include 'header.php'; ?>
<!--end menu-->
<div class="clearfix"></div>

<section>
    <div class="header-inner two">
        <div class="inner text-center col-md-6 padding-top">
            <h1 data-animation="zoomReverseIn" class="font-family text-white sub-nav-head uppercase">Career</h1>
            <h2 data-animation="zoomIn" data-animation-delay="500ms" class="text-white font-family">Join Our Passionate
                Team</h2>
        </div>
        <div class="overlay bg-opacity-7"></div>
        <img src="images/career-banner.jpg" alt="Website Development Company in Pune, Bangalore, Delhi"
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
                    <div class="pagenation_links text-font font-16"><a href="index.php">Home</a><i> / </i>Career</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end section-->
<div class="clearfix"></div>

<section class="sec-padding">
    <div class="row">
        <div class="col-md-6" data-animation="slideInRight">
            <h1 class="header-font font-family">Looking for a Job?</h1>
            <h3 class="text-font font-family">Explore Exciting Opportunities at SoftFlame Solutions</h3>
            <p class="init_text text-font font-family">
                At SoftFlame Solutions, we believe in pushing the boundaries of innovation and fostering a collaborative
                environment where creativity thrives. As a leading software development company, we are always on the
                lookout for passionate and skilled individuals to join our dynamic team. If you are ready to embark on a
                rewarding career journey in the world of technology, explore our current job openings.
            </p>
        </div>
        <div class="col-md-6" data-animation="slideInLeft">
            <img src="images/job-illus.jpg" class="job-illus" height=" 400">
        </div>
    </div>

</section>
<div class="benefitscontainer">
    <h1 class="header-font font-family" data-animation="slideInUp" data-animation-delay="100ms">Why SoftFlame Solutions ?</h1>
    <ul>
        <li data-animation="zoomReverseIn" data-animation-delay="100ms">
            <img src="images/career/innovation.png" alt="competitive insurance">
            <h3 class="font-family font-23">Innovation at the Core</h3>
            <p>Join a team that thrives on pushing the boundaries of technology. At SoftFlame Solutions, innovation
                is not just a goal; it's our culture.
            </p>
        </li>
        <li data-animation="zoomReverseIn" data-animation-delay="300ms">
            <img src="images/career/organization.png" alt="paid time off">
            <h3 class="font-family font-23">Collaborative Environment</h3>
            <p>We believe in the power of collaboration. Working at SoftFlame Solutions means being part of a
                supportive and diverse community that values teamwork.</p>
        </li>
        <li data-animation="zoomReverseIn" data-animation-delay="500ms">
            <img src="images/career/grow.png" alt="retirement options">
            <h3 class="font-family font-23">Professional Growth</h3>
            <p>We invest in our team members' professional development. Take advantage of continuous learning
                opportunities and career advancement programs.</p>
        </li>
        <li data-animation="zoomReverseIn" data-animation-delay="700ms">
            <img src="images/career/subscription.png" alt="casual attire">
            <h3 class="font-family font-23"> Impactful Projects</h3>
            <p>Be part of projects that make a difference. At SoftFlame Solutions, we tackle challenges that have a
                meaningful impact on industries and communities.</p>
        </li>
    </ul>
</div>
<section class="sec-padding">
    <div class="jobs-list">
        <div class="row">
            <h1 class="header-font text-center" data-animation="slideInUp" data-animation-delay="100ms">Current Openings</h1>
            <div class="col-md-6">
                <div class="card jobs-card" data-animation="zoomReverseIn" onclick="toggleVisibility('Menu1');">
                    <div class="div">
                        <p class="font-family init_text">Angular js</p>
                    </div>
                    <div class="div"><img height="50" src="images/services/info/angular.png"></div>
                </div>
                <div class="card jobs-card" data-animation="zoomReverseIn" onclick="toggleVisibility('Menu2');">
                    <div class="div">
                        <p class="font-family init_text">React js</p>
                    </div>
                    <div class="div"><img height="50" src="images/services/info/react-logo.png"></div>
                </div>
                <div class="card jobs-card" data-animation="zoomReverseIn" onclick="toggleVisibility('Menu3');">
                    <div class="div">
                        <p class="font-family init_text">Node js</p>
                    </div>
                    <div class="div"><img height="50" src="images/services/info/node-logo.png"></div>
                </div>
                <div class="card jobs-card" data-animation="zoomReverseIn" onclick="toggleVisibility('Menu4');">
                    <div class="div">
                        <p class="font-family init_text">Web / Graphic Designer</p>
                    </div>
                    <div class="div"><img height="50" src="images/services/info/graphic-designer.png">

                    </div>
                </div>
                <div class="card jobs-card" data-animation="zoomReverseIn" onclick="toggleVisibility('Menu5');">
                    <div class="div">
                        <p class="font-family init_text">IOS Developer</p>
                    </div>
                    <div class="div"><img height="50" src="images/services/info/apple.png">
                    </div>
                </div>
                <div class="card jobs-card" data-animation="zoomReverseIn" onclick="toggleVisibility('Menu6');">
                    <div class="div">
                        <p class="font-family init_text">Php Developer</p>
                    </div>
                    <div class="div"><img height="50" src="images/services/info/php.png">
                    </div>
                </div>
                <div class="card jobs-card" data-animation="zoomReverseIn" onclick="toggleVisibility('Menu7');">
                    <div class="div">
                        <p class="font-family init_text">Ionic Developer</p>
                    </div>
                    <div class="div"><img height="50" src="images/services/info/ionic-logo.png">
                    </div>
                </div>
            </div>


            <div class="col-md-6" data-animation="slideInLeft"  data-animation-delay="300ms">
                <div class="card description-card" id="Menu1">
                    <img class="des-img1" src="images/services/sub-nav/angularjs.jpg">
                    <p class="text-font text-justify" style="margin-top: 20px">
                        <span class="bold-font">Requirements: </span><br>1. Proven experience as an AngularJS
                        Developer.<br>
                        2. Strong proficiency with JavaScript, HTML, and CSS.<br>
                        3. Write well-designed, efficient, and testable code.<br>
                        4. Familiarity with RESTful APIs and web services.<br>
                        5. Experience with unit testing frameworks.
                    </p>
                    <p class="text-font text-justify">
                        <span class="bold-font">Qualifications: </span><br>1. Solid understanding of front-end
                        technologies.<br>
                        2. Previous experience with version control systems (e.g., Git).<br>
                        3. Knowledge of agile development methodologies.<br>
                        4. Ability to work independently and as part of a collaborative team.
                    </p>
                    <p class="text-font text-justify"><span class="bold-font">Experience: </span>2 yr to 5yr</p>
                    <div class="contact-btn-div "><button type="button" class="btn contact-btn-blue text-font"><a
                                href="#open-modal">Apply Now</a></button>
                    </div>
                </div>

                <div class="card description-card" id="Menu2">
                    <img class="des-img2" src="images/services/sub-nav/react-banner.png">
                    <p class="text-font text-justify" style="margin-top: 20px">
                        <span class="bold-font">Requirements: </span><br>1. Proven experience as a ReactJS
                        Developer.<br>
                        2. In-depth knowledge of JavaScript, CSS, and HTML.<br>
                        3. Experience with state management libraries (e.g., Redux).<br>
                        4. Familiarity with RESTful APIs and modern front-end build pipelines.<br>
                        5. Strong problem-solving and communication skills.
                    </p>
                    <p class="text-font text-justify">
                        <span class="bold-font">Qualifications: </span><br>1. Previous experience with responsive design
                        principles.<br>
                        2. Understanding of code versioning tools, such as Git.<br>
                        3. Knowledge of continuous integration and deployment.<br>
                        4. Ability to work in a collaborative team environment.
                    </p>
                    <p class="text-font text-justify"><span class="bold-font">Experience: </span>2 yr to 5yr</p>
                    <div class="contact-btn-div "><button type="button" class="btn contact-btn-blue text-font"><a
                                href="#open-modal">Apply Now</a></button></button>
                    </div>
                </div>

                <div class="card description-card" id="Menu3">
                    <img class="des-img3" src="images/services/sub-nav/nodejs.jpg">
                    <p class="text-font text-justify" style="margin-top: 20px">
                        <span class="bold-font">Requirements: </span><br>1. Design and implement scalable and robust
                        backend solutions using Node.js.<br>
                        2. Strong proficiency in JavaScript and server-side technologies.<br>
                        3. Experience with RESTful API development and integration.<br>
                        4. Knowledge of database technologies, such as MongoDB or MySQL.<br>
                        5. Familiarity with code versioning tools, such as Git.
                    </p>
                    <p class="text-font text-justify">
                        <span class="bold-font">Qualifications: </span><br>1. Previous experience with microservices
                        architecture.<br>
                        2. Familiarity with containerization (e.g., Docker).<br>
                        3. Understanding of cloud computing platforms (e.g., AWS, Azure).<br>
                        4. Excellent problem-solving and communication skills.
                    </p>
                    <p class="text-font text-justify"><span class="bold-font">Experience: </span>2 yr to 5yr</p>
                    <div class="contact-btn-div "><button type="button" class="btn contact-btn-blue text-font"><a
                                href="#open-modal">Apply Now</a></button></button>
                    </div>
                </div>

                <div class="card description-card" id="Menu4">
                    <img class="des-img4" src="images/services/sub-nav/ui-ux-banner.jpg">
                    <p class="text-font text-justify" style="margin-top: 20px">
                        <span class="bold-font">Requirements: </span><br>1. Proficiency in graphic design software
                        (e.g., Adobe Creative Suite).<br>
                        2. Strong understanding of color theory, typography, and layout design.<br>
                        3. Excellent communication and presentation skills.<br>
                        4. Ability to translate ideas into visually appealing designs.<br>
                        5. Collaborate with cross-functional teams to understand design requirements.
                    </p>
                    <p class="text-font text-justify">
                        <span class="bold-font">Qualifications: </span><br>1. Portfolio showcasing a variety of design
                        projects.<br>
                        2. Experience with both print and digital design.<br>
                        3. Knowledge of design for social media and online marketing.<br>
                        4. Attention to detail and a commitment to delivering high-quality designs.
                    </p>
                    <p class="text-font text-justify"><span class="bold-font">Experience: </span>2 yr to 5yr</p>
                    <div class="contact-btn-div "><button type="button" class="btn contact-btn-blue text-font"><a
                                href="#open-modal">Apply Now</a></button></button>
                    </div>
                </div>


                <div class="card description-card" id="Menu5">
                    <img class="des-img5" src="images/services/sub-nav/iphone-banner.jpg">
                    <p class="text-font text-justify" style="margin-top: 20px">
                        <span class="bold-font">Requirements: </span><br>1. Strong knowledge of Swift and Objective-C
                        programming languages.<br>
                        2. Familiarity with iOS frameworks such as UIKit and Core Data.<br>
                        3. Experience with offline storage, threading, and performance tuning.<br>
                        4. Understanding of Apple’s design principles and interface guidelines.<br>
                        5. Identify and correct bottlenecks and fix bugs.
                    </p>
                    <p class="text-font text-justify">
                        <span class="bold-font">Qualifications: </span><br>1. Familiarity with RESTful APIs to connect
                        iOS applications to back-end services.<br>
                        2. Experience with third-party libraries and APIs.<br>
                        3. Solid understanding of the full mobile development life cycle.<br>
                        4. Strong problem-solving skills.
                    </p>
                    <p class="text-font text-justify"><span class="bold-font">Experience: </span>2 yr to 5yr</p>
                    <div class="contact-btn-div "><button type="button" class="btn contact-btn-blue text-font"><a
                                href="#open-modal">Apply Now</a></button></button>
                    </div>
                </div>


                <div class="card description-card" id="Menu6">
                    <img class="des-img6" src="images/services/sub-nav/php-banner.jpg">
                    <p class="text-font text-justify" style="margin-top: 20px">
                        <span class="bold-font">Requirements: </span><br>1. Strong proficiency in PHP and MySQL.<br>
                        2. Knowledge of MVC frameworks (e.g., Laravel, CodeIgniter).<br>
                        3. Experience with front-end technologies (HTML, CSS, JavaScript).<br>
                        4. Familiarity with RESTful APIs.<br>
                        5. Troubleshoot, test, and maintain the core product software and databases.
                    </p>
                    <p class="text-font text-justify">
                        <span class="bold-font">Qualifications: </span><br>1. Understanding of web security
                        practices.<br>
                        2. Familiarity with agile development methodologies.<br>
                        3. Strong problem-solving and communication skills.<br>
                        4. Ability to work both independently and collaboratively.
                    </p>
                    <p class="text-font text-justify"><span class="bold-font">Experience: </span>2 yr to 5yr</p>
                    <div class="contact-btn-div "><button type="button" class="btn contact-btn-blue text-font"><a
                                href="#open-modal">Apply Now</a></button></button>
                    </div>
                </div>


                <div class="card description-card" id="Menu7">
                    <img class="des-img7" src="images/services/sub-nav/ionic-banner.png">
                    <p class="text-font text-justify" style="margin-top: 20px">
                        <span class="bold-font">Requirements: </span><br>1. Develop cross-platform mobile applications
                        using Ionic framework.<br>
                        2. Strong proficiency in HTML, CSS, and JavaScript.<br>
                        3. Experience with Angular and TypeScript.<br>
                        4. Familiarity with RESTful APIs and mobile application architecture..<br>
                        5. Problem-solving and debugging skills.
                    </p>
                    <p class="text-font text-justify">
                        <span class="bold-font">Qualifications: </span><br>1. Published apps using Ionic on both iOS and
                        Android platforms.<br>
                        2. Understanding of mobile development best practices.<br>
                        3. Strong communication and collaboration skills.<br>
                        4. Ability to work in a fast-paced environment.
                    </p>
                    <p class="text-font text-justify"><span class="bold-font">Experience: </span>2 yr to 5yr</p>
                    <div class="contact-btn-div "><button type="button" class="btn contact-btn-blue text-font"><a
                                href="#open-modal">Apply Now</a></button></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="open-modal" class="modal-window">
        <div>
            <a href="" title="Close" class="modal-close"><i class="fa fa-times" aria-hidden="true"></i></a>
            <h2 class="font-family text-center">Apply Now!</h2>
            <form action="careerAttachment.php" method="POST" enctype='multipart/form-data'>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="exampleInputName">Full Name</label>
                            <input placeholder="Enter your full name" type="text" class="form-control " id="name "
                                name="name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="exampleInputEmail">Date Of Birth</label>
                            <input type="date" class="form-control" name="birthdate" id="birthdate" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="exampleMaidenName">Phone Number</label>
                            <input placeholder="Enter your mobile number" type="tel" class="form-control " id="mobile "
                                name="mobile" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="exampleInputEmail">Email ID</label>
                            <input placeholder="Enter your email" type="email" class="form-control " name="email"
                                id="email" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="exampleInputBirthday ">Permanent Address</label>
                            <input placeholder="Enter your permanent address" type="text" class="form-control"
                                id="address " name="address" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="exampleInputBirthday ">Residential Address</label>
                            <input placeholder="Enter your residential address" type="text" class="form-control"
                                id="address " name="message" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group ">
                            <label for="exampleInputName">Describe your skills</label>
                            <textarea placeholder="Describe..." type="text" class="form-control" id="skills"
                                name="skills" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" class="form-control" id="attachment" name="attachment">

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center ">
                            <button type="submit" class="btn apply-btn ">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>


</section>

<?php $pageTitle = "Career"; // Replace "Page Name" with the actual name of your page
include('contact-us-div.php'); ?>
<?php include 'footer.php'; ?>