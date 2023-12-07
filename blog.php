<!doctype html>

<html lang="en">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-135022729-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-135022729-1');
    </script>

    <title>Blog | SoftFlame Solutions </title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="keywords"
        content="website company in pune,web development company in pune,website design in pune,web design company,web design pune,web development company, website design company, ecommerce website design,ecommerce websites development,SEO services pune,seo company in pune" />
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="description"
        content="Welcome to our blog. Get information on trending technology topics like Web Development, angularJS, node js, mean stack app development, branding & more." />
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/theme.css" rel="stylesheet">
    <link rel="canonical" href=" https://www.softflame.in/" />
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
    <link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" /> -->
    <link href="js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;300;400;500&family=Nunito+Sans:opsz,wght@6..12,200&family=Open+Sans:wght@300;400;700&family=Poppins:wght@200;400;600&display=swap"
    rel="stylesheet">
    <script>
    $(".navbar-nav").on('click', 'li', function() {
        $(".navbar-nav li.active").removeClass("active");
        // adding classname 'active' to current click li 
        $(this).addClass("active");
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript">
    </script>
    <script src="https://unpkg.com/scrollreveal"></script>

    <script>
    /*========== SMOOTH SCROLLING TO LINKS ==========*/
    $(document).ready(function() { //document is loaded
        // Add smooth scrolling to all links
        $("a").on('click', function(event) { //click on any link;anchor tag;

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") { //for e.g. website.com#home - #home
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;
                //console.log('hash:',hash)

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({ //animate whole html and body elements
                    scrollTop: $(hash).offset().top //scroll to the element with that hash
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash; //website.com - website.com#home
                    //Optional remove "window.location.hash = hash;" to prevent transparent navbar on load
                });
            } // End if
        });
    });

    /*========== BOUNCING DOWN ARROW ==========*/
    //down arrow at top
    $(document).ready(function() {
        $(window).scroll(function() { //browser scroll
            $(".arrow").css("opacity", 1 - $(window).scrollTop() /
                250); //set opacity css from 1 to -(negative) infinity of element with class 'arrow'
            //250 is fade pixels
        });
    });
    </script>

    <style>
    /*============ LANDING PAGE IMAGE ============*/
    .home-inner {
        background-image: url('img/small-business-banner.jpg');
    }

    .caption {
        width: 100%;
        max-width: 100%;
        position: absolute;
        top: 38%;
        z-index: 1;
    }

    .caption h1 {
        color: #FFF;
        font-size: 4.5rem;
        text-transform: uppercase;
        font-weight: 700;
        letter-spacing: 0.3rem;
        text-shadow: 0.1rem 0.1rem 0.8rem #000;
        padding-bottom: 1rem;
        font-family: 'Nunito', sans-serif !important;
    }

    .caption h3 {
        color: #FFF;
        font-size: 2.5rem;
        text-transform: uppercase;
        font-weight: 400;
        text-shadow: 0.1rem 0.1rem 0.5rem #000;
        padding-bottom: 2rem;
        font-family: 'Nunito', sans-serif !important;
    }

    .btn-lg {
        border-width: medium;
        border-radius: 0;
        padding: 0.8rem 1.5rem;
        font-size: 1.5rem;
        font-weight: 400;
        text-transform: uppercase;
        display: inline-block !important;
        font-family: 'Nunito', sans-serif !important;
        border: 2px solid wheat;
        color: orange;
    }

    .btn-lg:hover {
        background: #f07e2c;
        color: white;
        border: none;
    }

    /*--- Bootstrap Mobile Gutter Fix --*/
    .row,
    .container-fluid {
        margin-left: 0px !important;
        margin-right: 0px !important;
    }

    /*--- Fix for Fixed Navbar jumping on scroll --*/
    .fixed-top {
        -webkit-backface-visibility: hidden;
    }

    /*--- Fixed Landing Page Section --*/
    .landing {
        position: relative;
        width: 100%;
        height: 100vh;
        /* Change height of landing page image. */
        display: table;
        z-index: -1;
    }

    .home-wrap {
        clip: rect(0, auto, auto, 0);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .home-inner {
        position: fixed;
        /* Change to relative to remove fixed style. */
        display: table;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        will-change: transform;
    }

    /*--- iOS Fixed Background Image --*/
    .fixed-background {
        position: relative;
        width: 100%;
    }

    .fixed-wrap {
        clip: rect(0, auto, auto, 0);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -999 !important;
    }

    /*--- Features Dark Background Image --*/
    #fixed {
        position: fixed;
        display: block;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        will-change: transform;
    }

    /*--- Team Light Background Image --*/
    #fixed-2 {
        position: fixed;
        display: block;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        will-change: transform;
    }

    /*--- Prevent WayPoints from Browser Window Scrolling On Mobile --*/
    /* Devices under 768px (md) */
    @media (max-width: 767px) {
        .row {
            overflow-x: hidden;
            overflow-y: hidden;
        }
    }


    /*============ ARROW STYLES ============*/

    .bounce {
        /*arrow bouncing duration*/
        -moz-animation: bounce 2s infinite;
        -webkit-animation: bounce 2s infinite;
        animation: bounce 2s infinite;
    }

    .arrow {
        position: absolute;
        bottom: 0;
        left: 50%;
        /* margin-left: 10px; */
        width: 100px;
        height: 100px;
        /*change with size of arrow to make it sit on bottom of page*/
    }

    .arrow svg {
        fill: orange;
    }

    a.down-arrow {
        display: block;
        color: #fff;
        /*arrow color*/
    }

    .down-arrow svg.svg-inline--fa {
        opacity: .3;
        /*arrow opacity*/
        font-size: 2rem;
        /*arrow size*/
    }

    .down-arrow svg.svg-inline--fa:hover {
        opacity: .5;
        /*arrow hover opacity*/
    }

    @-moz-keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            -moz-transform: translateY(0);
            transform: translateY(0);
        }

        40% {
            -moz-transform: translateY(-30px);
            transform: translateY(-30px);
        }

        60% {
            -moz-transform: translateY(-15px);
            transform: translateY(-15px);
        }
    }

    @-webkit-keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        40% {
            -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
        }

        60% {
            -webkit-transform: translateY(-15px);
            transform: translateY(-15px);
        }
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        40% {
            -moz-transform: translateY(-30px);
            -ms-transform: translateY(-30px);
            -webkit-transform: translateY(-30px);
            transform: translateY(-30px);
        }

        60% {
            -moz-transform: translateY(-15px);
            -ms-transform: translateY(-15px);
            -webkit-transform: translateY(-15px);
            transform: translateY(-15px);
        }
    }

    @media (max-width: 767px) {
    .caption h1 {
        font-size: 1.7rem;
        letter-spacing: 0.15rem;
        padding-bottom: 0.5rem;
    }

    .caption h3 {
        font-size: 1.2rem;
        padding-bottom: 1.2rem;
    }

    .btn-lg {
        padding: 0.6rem 1.1rem;
        font-size: 1rem;
    }
    .arrow{
                height:20px;
            }
    .landing{
                height:50vh;
            }
            .caption{
                top:32%;
            }
}


    body {
        background: #eee;
        font-family: 'Nunito', sans-serif !important;
    }

    .date__box {
        position: absolute;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #ccc;
        border: 4px solid;
        font-weight: bold;
        padding: 5px 10px;
        font-family: 'Nunito', sans-serif !important;
    }

    .date__box .date__day {
        font-size: 22px;
        font-family: 'Nunito', sans-serif !important;
    }

    .blog-card {
        padding: 30px;
        position: relative;
    }

    .blog-card .date__box {
        opacity: 0;
        transform: scale(0.5);
        transition: 300ms ease-in-out;
    }

    .blog-card .blog-card__background,
    .blog-card .card__background--layer {
        z-index: -1;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .blog-card .blog-card__background {
        padding: 15px;
        background: white;
    }

    .blog-card .card__background--wrapper {
        height: 100%;
        clip-path: polygon(0 0, 100% 0, 100% 80%, 0 60%);
        position: relative;
        overflow: hidden;
    }

    .blog-card .card__background--main {
        height: 100%;
        position: relative;
        transition: 300ms ease-in-out;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .blog-card .card__background--layer {
        z-index: 0;
        opacity: 0;
        background: rgba(51, 51, 51, 0.9);
        transition: 300ms ease-in-out;
    }

    .blog-card .blog-card__head {
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .blog-card .blog-card__info {
        z-index: 10;
        background: white;
        padding: 20px 15px;
    }

    .blog-card .blog-card__info h5 {
        transition: 300ms ease-in-out;
        font-family: 'Nunito', sans-serif !important;
        font-weight: 700;

    }

    .blog-card:hover .date__box {
        opacity: 1;
        transform: scale(1);
    }

    .blog-card:hover .card__background--main {
        transform: scale(1.2) rotate(5deg);
    }

    .blog-card:hover .card__background--layer {
        opacity: 1;
    }

    .blog-card:hover .blog-card__info h5 {
        color: #ffb535;
    }

    a.icon-link {
        color: #363738;
        transition: 200ms ease-in-out;
    }

    a.icon-link i {
        color: #ffb535;
    }

    a.icon-link:hover {
        color: #ffb535;
        text-decoration: none;
    }

    #btn {
        background: white;
        color: #363738;
        font-weight: bold;
        outline: none;
        box-shadow: 1px 1px 3px 0 rgba(0, 0, 0, 0.2);
        overflow: hidden;
        border-radius: 0;
        height: 50px;
        line-height: 50px;
        display: inline-block;
        padding: 0;
        border: none;
        font-family: 'Nunito', sans-serif;
    }

    #btn:focus {
        box-shadow: none;
    }

    #btn:hover {
        background: #ffb535;
        color: #fff;
    }

    #btn.btn--with-icon {
        padding-right: 20px;
    }

    #btn.btn--with-icon i {
        padding: 0px 30px 0px 15px;
        margin-right: 10px;
        height: 50px;
        line-height: 50px;
        vertical-align: bottom;
        color: white;
        background: #ffb535;
        clip-path: polygon(0 0, 70% 0, 100% 100%, 0% 100%);
    }

    #btn.btn--only-icon {
        width: 50px;
    }

    body {
        background: #eee;
    }

    .blog-card {
        padding: 30px;
        position: relative;
        margin-bottom:20px;
    }

    .blog-card .date__box {
        opacity: 0;
        transform: scale(0.5);
        transition: 300ms ease-in-out;
    }

    .blog-card .blog-card__background,
    .blog-card .card__background--layer {
        z-index: -1;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .blog-card .blog-card__background {
        padding: 15px;
        background: white;
    }

    .blog-card .card__background--wrapper {
        height: 100%;
        clip-path: polygon(0 0, 100% 0, 100% 80%, 0 60%);
        position: relative;
        overflow: hidden;
    }

    .blog-card .card__background--main {
        height: 100%;
        position: relative;
        transition: 300ms ease-in-out;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .blog-card .card__background--layer {
        z-index: 0;
        opacity: 0;
        background: rgba(51, 51, 51, 0.9);
        transition: 300ms ease-in-out;
    }

    .blog-card .blog-card__head {
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .blog-card .blog-card__info {
        z-index: 10;
        background: white;
        padding: 20px 15px;
    }

    .blog-card .blog-card__info h5 {
        transition: 300ms ease-in-out;
    }

    .blog-card:hover .date__box {
        opacity: 1;
        transform: scale(1);
    }

    .blog-card:hover .card__background--main {
        transform: scale(1.2) rotate(5deg);
    }

    .blog-card:hover .card__background--layer {
        opacity: 1;
    }

    .blog-card:hover .blog-card__info h5 {
        color: #ffb535;
    }

    @media screen and (max-width: 767px) {

        /* Styles for mobile devices */
        .blog-card,
        .col-md-4 {
            width: 100%;
            margin-right: 0;
        }
    }

    .pagenation-holder{
            padding: 15px 0px 15px !important;
            background:white;
            font-family:'Nunito',sans-serif;
        }
    </style>



</head>
<?php include 'header.php';?>
<!--end menu-->

<body data-spy="scroll" data-target="#navbarResponsive">

    <!-- <section>
    <div class="header-inner two">
        <div class="inner text-center">
            <h4 class="title text-white uppercase">Blogs</h4>
        </div>
        <div class="overlay bg-opacity-5"></div>
        <img src="images/blog/blog.jpg" width="100%" alt="" class="img-responsive" /> </div>
</section> -->
    <div id="home">
        <!-- Start Navigation -->

        <!-- Start of the Landing Page Image -->
        <section id="welcome-section">
            <div class="landing">
                <div class="home-wrap">
                    <div class="home-inner">
                    </div>
                </div>
            </div>
            <div class="caption center-block text-center">
                <div class="title">
                    <h1>Welcome to our Blogs</h1>
                </div>
                <div class="title1" data-animation="bounceInUp" data-delay="0.8s">
                    <h3>Explore Our Latest Blogs</h3>
                </div>
                <div class="title2" data-animation="bounceInUp" data-delay="1s">
                    <a class="btn btn-outline-light btn-lg" href="#features">Get Started</a>
                </div>
            </div>
    </div>
    <!-- Bouncing Down Arrow -->
    <a class="down-arrow" href="#features">
        <div class="arrow bounce d-none d-md-block">
            <!-- <i class="fa-solid fa-angle-down" aria-hidden="true"></i> -->
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                <path
                    d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
            </svg>
        </div>
    </a>
    </section>
    <!-- end header inner -->


    <section>
        <div class="pagenation-holder">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-12 text-center">
                        <div class="pagenation_links"><a href="index.php">Home</a><i> / </i> <a href="blog.php">Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end section-->

    <section id="features" class="sec-padding">
        <div id="con" class="container pb-5">


            <div class="row">
                <div class="col-12 col-md-8">
                    <article class="blog1 blog-card">
                        <div class="blog-card__background">
                            <div class="card__background--wrapper">
                                <div class="card__background--main"
                                    style="background-image: url('img/importance.png');">
                                    <div class="card__background--layer"></div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-card__head">
                            <span class="date__box">
                                <span class="date__day">23</span>
                                <span class="date__month">MARCH 2020</span>
                            </span>
                        </div>
                        <div class="blog-card__info">
                            <h5>WHY A WEBSITE IS IMPORTANT FOR YOUR BUSINESS?</h5>
                            <p>
                                <a href="#" class="icon-link mr-3"><i class="fa fa-pencil-square-o"></i> Tony
                                    Jahson</a>
                                <a href="#" class="icon-link"><i class="fa fa-comments-o"></i> 150</a>
                            </p>
                            <p>For any organization, a website is like an existence in cyber world. For a business, it
                                is considered as a basic digital presence, a must to have. Let us see why a website
                                development is so important for your business.</p>
                            <a href="blog1.php" id="btn" class="btn btn--with-icon"><i
                                    class="btn-icon fa fa-long-arrow-right"></i>READ MORE</a>
                        </div>
                    </article>

                    <article class="blog2 blog-card">
                        <div class="blog-card__background">
                            <div class="card__background--wrapper">
                                <div class="card__background--main"
                                    style="background-image: url('img/software.jpg');">
                                    <div class="card__background--layer"></div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-card__head">
                            <span class="date__box">
                                <span class="date__day">26</span>
                                <span class="date__month">MARCH 2020</span>
                            </span>
                        </div>
                        <div class="blog-card__info">
                            <h5>10 CHECKS FOR SHORTLISTING THE RIGHT SOFTWARE DEVELOPER FOR YOUR BUSINESS</h5>
                            <p>
                                <a href="#" class="icon-link mr-3"><i class="fa fa-pencil-square-o"></i> Tony
                                    Jahson</a>
                                <a href="#" class="icon-link"><i class="fa fa-comments-o"></i> 150</a>
                            </p>
                            <p>More and more businesses are opting for custom made software solutions for an issue peculiar to their businesses. Choosing a right software developer can be very confusing and ending up with a bad selection can be very costly. When you see software developing companies of all shapes and sizes every 100 meters, the choice becomes really difficult.</p>
                            <a href="blog2.php" id="btn" class="btn btn--with-icon"><i
                                    class="btn-icon fa fa-long-arrow-right"></i>READ MORE</a>
                        </div>
                    </article>
                </div>
                <div class="facebook col-12 col-md-4 mt-4 mt-md-0">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSoftflameSolutionsPvt.Ltd%2F&tabs=timeline&width=340&height=700&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId"
                        width="400" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                        allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>


            <!-- <section class="detail-page">
           <div class="container mt-5">
    
            </div>
             </section> -->
            <!--end item-->
            <!-- <div class="col-12 col-md-4 mt-4 mt-md-0">
                <iframe
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSoftflameSolutionsPvt.Ltd%2F&tabs=timeline&width=340&height=700&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId"
                    width="400" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                    allowTransparency="true" allow="encrypted-media"></iframe>
            </div> -->


        </div>
    </section>
    <!--end item -->



    <!-- Modal Send us your requirement -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Send us your requirement</h4>
                </div>
                <form name="registrationForm" method="post" action="email.php" required>
                    <div class="container">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Full Name"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email Address" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone No.</label>
                                <input type="text" class="form-control" name="mobile" id="phone" placeholder="Phone No."
                                    required>
                            </div>


                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="enquiry" id="message"
                                    placeholder="Enter your message" required></textarea>
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn1 btn-default" data-dismiss="modal">Close</button>
                        <button class="btn1 btn-primary" type="submit" name="submit"> <i
                                class="fa fa-paper-plane-o"></i> Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- / Modal Send us your requirement Ends -->

    <!--end section-->
</body>


<script type="text/javascript" src="//use.typekit.net/wtt0gtr.js"></script>
<script type="text/javascript">
try {
    Typekit.load();
} catch (e) {}
</script>
<?php include 'footer.php';?>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Initialize ScrollReveal
        const sr = ScrollReveal();

        // Function to check if the screen is in mobile view
        function isMobileView() {
            return window.innerWidth <= 767; // Adjust the breakpoint as needed
        }

        // Add the ScrollReveal configuration
        sr.reveal('.title', {
            duration: 2000, // Animation duration in milliseconds
            // delay:1000,
            origin: 'top', // Animation starting point at the center
            distance: '100px', // Distance to reveal the element
            scale: 1, // Scale of the element (adjust as needed)
            reset: true
        });
        sr.reveal('.title1', {
            duration: 2000, // Animation duration in milliseconds
            delay:500,
            origin: 'top', // Animation starting point at the center
            distance: '100px', // Distance to reveal the element
            scale: 1, // Scale of the element (adjust as needed)
            reset: true
        });
        sr.reveal('.title2', {
            duration: 2000, // Animation duration in milliseconds
            delay:1000,
            origin: 'top', // Animation starting point at the center
            distance: '100px', // Distance to reveal the element
            scale: 1, // Scale of the element (adjust as needed)
            reset: true
        });
        sr.reveal('.blog1', {
            duration: 1000, // Animation duration in milliseconds
            origin: 'bottom', // Animation starting point
            distance: '50px', // Distance to reveal the element
            scale: 1, // Scale of the element
            reset: true // Reset the animation after it's been revealed
        });
        sr.reveal('.blog2', {
            duration: 1000, // Animation duration in milliseconds
            delay:500,
            origin: 'bottom', // Animation starting point
            distance: '50px', // Distance to reveal the element
            scale: 1, // Scale of the element
            reset: true // Reset the animation after it's been revealed
        });
        sr.reveal('.facebook', {
            duration: 1000, // Animation duration in milliseconds
            delay:1000,
            origin: 'right', // Animation starting point
            distance: '20px', // Distance to reveal the element
            scale: 1, // Scale of the element
            reset: true // Reset the animation after it's been revealed
        });
        
    });
</script>