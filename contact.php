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


    <title>Contact | SoftFlame Solutions </title>
    <meta charset="utf-8">
    <!-- Meta -->
    <meta name="keywords"
        content="website company in pune,web development company in pune,website design in pune,web design company,web design pune,web development company, website design company, ecommerce website design,ecommerce websites development,SEO services pune,seo company in pune" />
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="description"
        content="Connect with us. Reach us regarding any inquiry about Web Design & Development, Mobile App Development, SEO, Social Media Marketing or any other queries." />

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
    <link rel="stylesheet" href="css/contact-us-page.css" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;300;400;500&family=Nunito+Sans:opsz,wght@6..12,200&family=Open+Sans:wght@300;400;700&family=Poppins:wght@200;400;600&display=swap"
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
        @media screen and (max-width:767px){
        .advertisers-service-sec .service-card{
            z-index:0 !important;
        }
    }
    @media (min-width:767px) and (max-width: 1250px) {
  .container{
    padding-right:70px;
  }
}
    </style>


</head>
<?php include 'header.php'; ?>
<!--end menu-->
<!--end menu-->
<div class="clearfix"></div>

<section>
    <div class="header-inner two">
        <div class="inner text-center col-md-6 padding-top">
            <h1 data-animation="zoomReverseIn" class="font-family text-white sub-nav-head uppercase">Contact Us</h1>
            <h2 data-animation="zoomIn" data-animation-delay="500ms" class="text-white font-family">Get Your Work Done
            </h2>
        </div>
        <div class="overlay bg-opacity-7"></div>
        <img src="images/services/sub-nav/contact-us-banner.jpg"
            alt="Website Development Company in Pune, Bangalore, Delhi" class="img-responsive sub-nav-img" />
    </div>
</section>
<!-- end header inner -->
<div class="clearfix"></div>
<section>
    <div class="pagenation-holder">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="pagenation_links text-font font-16"><a href="index.php">Home</a><i> / </i>Contact-Us
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--end section-->
<div class="clearfix"></div>



<section class="sec-padding">
    <div class="container">
        <!-- <div class="card form-card"> -->
        <h1 class="header-font text-center"  data-animation="slideInUp">Contact <span class="text-orange-2">Us</span></h1>
        <h3 class="font-family text-center"  data-animation="slideInUp">Let's talk about your project. Fill out the form below or contact us
            directly.</h3>
        <div class="row margin-top mobile-margin-30"  data-animation="zoomIn" data-animation-delay="500ms">
            <div class="col-md-6 col-12 mobile-margin-30">
                <img class="contact-form-img" src="images/contact-us-illus.png">
            </div>
            <div class="col-md-6 col-12 form-div mobile-margin-30">
                <div class="smart-forms bmargin">
                    <form name="quick_enquiry_frm" id="quick_enquiry_frm" method="post" action="email.php">
                        <div class="fluid form_textfield">
                            <input name="name" type="text" id="name" placeholder="Enter your Name" required />
                        </div>
                        <div class="fluid form_textfield">
                            <input name="email" type="text" id="email_id" placeholder="Enter your email id" required />
                        </div>
                        <div class="fluid form_textfield">
                            <input name="mobile" type="text" id="contact_no" placeholder="Enter your mobile no."
                                maxlength="10" required />
                        </div>
                        <div class="clr"></div>
                        <div id="form_textarea1" class="fluid">
                            <textarea name="enquiry" rows="4" id="message" placeholder="Write us your requirement"
                                required></textarea>
                        </div>

                        <div class="clr"></div>

                        <button class="btn btn-form" type="submit" name="submit">Submit </button>
                    </form>
                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>

    <div class="container margin-top-145 mobile-margin-30">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 class="header-font text-center" data-animation="zoomReverseIn">Find Us on <span class="text-orange-2">Google Map<span></h1>
                <div class="title-line-4 align-center"></div>
                <div class="address-map" data-animation="slideInUp">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2674.9803151522938!2d73.82816952588456!3d18.529198547176293!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f4d36203950565a!2sSoftFlame%20Solutions%20Pvt.%20Ltd%20%7C%20Website%20%26%20Mobile%20App%20Development%20Company%20Pune%20%7C%20Digital%20Marketing!5e0!3m2!1sen!2sin!4v1569567451625!5m2!1sen!2sin"
                        width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


    <div class="container margin-top mobile-margin-30">
        <div class="row">
            <h4 class="text-font text-center" data-animation="slideInUp">Get In Touch</h4>
            <h1 class="header-font text-center" data-animation="slideInUp">We Are <span class="text-orange-2">Located At</span></h1>
            <div class="title-line-4 align-center"></div>
        </div>
        <div class="row">
            <section id="advertisers" class="advertisers-service-sec pt-5 pb-5">
                <div class="container">
                    <div class="row text-center margin-top mobile-margin-30">
                        <div class="col-md-4 col-12">
                            <div class="service-card" data-animation="flipInY">
                                <div class="icon-wrapper">
                                    <img class="icons-height" src="images/pune.png">
                                </div>
                                <div class="font-family">
                                    <h3 class="text-font ">Pune Office (Headquarters)</h3>
                                    <p>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <strong>Address:</strong>
                                        <a href="https://goo.gl/maps/5rMNMck8SoDzzbG1A" target="_blank"> 9-New
                                            Ajay,S.B.Road,Pune-16</a><br><br>
                                        <i class="fa fa-phone"></i>
                                        <strong>Phone:</strong>
                                        <a href="tel:+919021649159">+919021649159</a><br><br>
                                        <i class="fa fa-envelope"></i>
                                        <a
                                            href="mailto:info@softflame.in?subject=Enquiry%20Message%20to%20the%20softslame%20slolutions">
                                            info@softflame.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mobile-margin-30">
                            <div class="service-card" data-animation="flipInY">
                                <div class="icon-wrapper">
                                    <img class="icons-height" src="images/bangalore.png">
                                </div>
                                <div class="font-family">
                                    <h3 class="text-font ">Banglore Office</h3>
                                    <p><i class="fa fa-map-marker"
                                            aria-hidden="true"></i><strong>Address:</strong><a>145/146,
                                            Saikutira, NewMico Layout,
                                            Hongasandra,Bangalore-560068</a><br><br>
                                        <i class="fa fa-phone"></i> Phone: <a href="tel:+91 9021649159"> +91-9899706569
                                            / 8446425690</a><br><br>

                                        <i class="fa fa-envelope"></i><a
                                            href="mailto:info@softflame.in?subject=Enquiry%20Message%20to%20the%20softslame%20slolutions">
                                            info@softflame.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 mobile-margin-30">
                            <div class="service-card" data-animation="flipInY">
                                <div class="icon-wrapper">
                                    <img class="icons-height" src="images/red-fort.png">
                                </div>
                                <div class="font-family">
                                    <h3 class="text-font ">Delhi Office</h3>
                                    <p><i class="fa fa-map-marker" aria-hidden="true"></i><strong>Address:</strong><a>
                                            North India
                                            Delhi Office, Shop No G5 Plot No 10, Express
                                            Arcade
                                            Tower,Netaji Subhash Place,
                                            Pitampura,
                                            Delhi-110034</a><br><br>
                                        <i class="fa fa-phone"></i> Phone: <a href="tel:+919899706569"> +91-9899706569
                                        </a><br><br>
                                        <i class="fa fa-envelope"></i><a
                                            href="mailto:info@softflame.in?subject=Enquiry%20Message%20to%20the%20softslame%20slolutions">
                                            info@softflame.in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>



<!--end section-->
<!-- 
<section class="sec-padding">
    <div class="container">
        <div class="col-xs-12 text-center">
            <h6 class="nopadding lspace-1">Get In Touch</h6>
            <h1 class="paddtop1 dosis font-weight-5 lspace-sm">We Are <span class="text-orange-2">Located At</span></h1>
            <div class="title-line-4 align-center"></div>
        </div>
        <div class="row">
            <div class="col-md-4 colmargin tex-left clearfix">
                <h4 class="">Pune Office (Headquarters)</h4>
                <div class="footer-title-bottomstrip"></div>
                <ul class="address-info no-border">
                    <i class="fa fa-map-marker" aria-hidden="true"></i><strong>Address:</strong><a
                            href="https://goo.gl/maps/5rMNMck8SoDzzbG1A" target="_blank"> 9-New Ajay,S.B.Road,<br><span
                                class="adjust_mar1">Pune-16</span></a></li>
                    <li><i class="fa fa-phone"></i> Phone: <a href="tel:+919021649159">+91 9021649159</a></li>

                    <li class="last"><i class="fa fa-envelope"></i><a
                            href="mailto:info@softflame.in?subject=Enquiry%20Message%20to%20the%20softslame%20slolutions">
                            info@softflame.in</a>

                    </li>
                </ul>
            </div>
            <div class="col-md-4 colmargin tex-left clearfix">
                <h4 class="">Bangalore Office</h4>
                <div class="footer-title-bottomstrip"></div>
                <ul class="address-info no-border">
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><strong>Address:</strong><a>145/146,
                            Saikutira, NewMico Layout,
                            <br><span class="adjust_mar1">Hongasandra,Bangalore-560068</span></a></li>
                    <li><i class="fa fa-phone"></i> Phone: <a href="tel:+91 9021649159"> +91-9899706569 / 8446425690</a>
                    </li>

                    <li class="last"><i class="fa fa-envelope"></i><a
                            href="mailto:info@softflame.in?subject=Enquiry%20Message%20to%20the%20softslame%20slolutions">
                            info@softflame.in</a>

                    </li>
                </ul>
            </div>
            <div class="col-md-4 colmargin tex-left clearfix">
                <h4 class="">Delhi Office</h4>
                <div class="footer-title-bottomstrip"></div>
                <ul class="address-info no-border">
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><strong>Address:</strong><a> North India
                            Delhi Office, Shop No G5,<br><span class="adjust_mar1"> Plot No 10, Express Arcade
                                Tower,</span><br><span class="adjust_mar1"> Netaji Subhash Place, Pitampura,
                                Delhi-110034</span></a></li>
                    <li><i class="fa fa-phone"></i> Phone: <a href="tel:+919899706569"> +91-9899706569 </a></li>

                    <li class="last"><i class="fa fa-envelope"></i><a
                            href="mailto:info@softflame.in?subject=Enquiry%20Message%20to%20the%20softslame%20slolutions">
                            info@softflame.in</a>

                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</section> -->

<!--end section-->


<script>
    $('.stickyEnrollWidget').css('display', 'none');
</script>

<?php include 'footer.php'; ?>