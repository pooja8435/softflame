<style>
    .navbar-collapse.pull-right {
        margin: 0px 0px 0px 0px;
    }

    .container {
        max-width: 1372px;
    }

    .sticky-icon {
        z-index: 9999;
        position: fixed;
        top: 30%;
        right: 0%;
        width: 220px;
        display: flex;
        flex-direction: column;
    }

    .sticky-icon a {
        transform: translate(160px, 0px);
        border-radius: 50px 0px 0px 50px;
        text-align: left;
        margin: 2px;
        text-decoration: none;
        text-transform: uppercase;
        padding: 10px;
        font-size: 22px;
        font-family: 'Oswald', sans-serif;
        transition: all 0.8s;
    }

    .sticky-icon a:hover {
        color: #FFF;
        transform: translate(0px, 0px);
    }

    .sticky-icon a:hover i {
        transform: rotate(360deg);
    }

    /*.search_icon a:hover i  {
    transform:rotate(360deg);}*/
    .Facebook {
        background-color: #2C80D3;
        color: #FFF;
    }

    .Youtube {
        background-color: #fa0910;
        color: #FFF;
    }

    .Twitter {
        background-color: #53c5ff;
        color: #FFF;
    }

    .Instagram {
        background-color: #FD1D1D;
        color: #FFF;
    }

    .Google {
        background-color: #d34836;
        color: #FFF;
    }

    .sticky-icon a i {
        background-color: #FFF;
        height: 40px;
        width: 40px;
        color: #000;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        margin-right: 20px;
        transition: all 0.5s;
    }

    .sticky-icon a i.fa-facebook-f {
        background-color: #FFF;
        color: #2C80D3;
    }

    .sticky-icon a i.fa-google-plus-g {
        background-color: #FFF;
        color: #d34836;
    }

    .sticky-icon a i.fa-instagram {
        background-color: #FFF;
        color: #FD1D1D;
    }

    .sticky-icon a i.fa-youtube {
        background-color: #FFF;
        color: #fa0910;
    }

    .sticky-icon a i.fa-twitter {
        background-color: #FFF;
        color: #53c5ff;
    }

    .fas fa-shopping-cart {
        background-color: #FFF;
    }

    #myBtn {
        height: 50px;
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        text-align: center;
        padding: 10px;
        text-align: center;
        line-height: 40px;
        border: none;
        outline: none;
        background-color: #1e88e5;
        color: white;
        cursor: pointer;
        border-radius: 50%;
    }

    .fa-arrow-circle-up {
        font-size: 30px;
    }

    #myBtn:hover {
        background-color: #555;
    }

    /* Header Styles */
    #header {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        background-color: rgb(255, 255, 255);
        /* Orange background color */
        transition: background-color 0.5s ease-in-out;

    }

    #header.scrolled {
        background-color: rgb(255, 255, 255);
        /* Blue background color when scrolled */
    }

    #header .container {
        width: 100%;
    }

    .navbar-nav>li>a {
        font-family: 'Noto Sans', sans-serif;
        text-transform: none;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1.5rem;
    }

    .navbar-default .navbar-nav>li>a,
    .navbar-default .navbar-text {
        color: black;
    }

    .navbar-brand img {
        max-width: 100%;
        height: auto;
        /* padding-top:10px;
    margin-left:-50px; */
    }

    .box .box-title h4 {
        font-family: 'Poppins', sans-serif;
        font-size: 15px;
        line-height: 3rem;

    }
</style>

<script>
    // Add this script to your HTML file, preferably just before the </body> tag
    document.addEventListener('DOMContentLoaded', function () {
        window.addEventListener('scroll', function () {
            var header = document.getElementById('header');
            if (window.scrollY > 0) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    });
</script>


<body>
    <!-- startr Modal pop up -->

    <!-- end model pop up -->
    <!-- <div class="stickyEnrollWidget">
        <div class="col-sm-6 col-xs-12 text-center text-white purchase-button">
            <a href="#" type="button" data-toggle="modal" data-target="#myModal" class="stickyEnquiryWidget" id="enquiry_button"></a>
        </div> -->
    <!-- <div class="col-sm-6 col-xs-12 text-center text-white purchase-button"> <a type="button" class="template-button launch-modal" href="#" data-toggle="modal" data-target="#myModal"><i class="" aria-hidden="true"></i> Enquiry Now</a> </div> -->

    <!-- </div> -->
    <div class="sticky-icon">
        <a href="https://www.linkedin.com/company/26552568/admin/" target="_blank" class="Youtube"><i
                class="fa fa-linkedin"></i> Linkedin </a>
        <a href="https://twitter.com/SoftflameL" target="_blank" class="Twitter"><i class="fa fa-twitter"></i> </i>
            Twitter </a>
        <a href="https://www.instagram.com/softflame_solutions/" target="_blank" class="Instagram"><i
                class="fa fa-instagram"></i> Instagram </a>
        <a href="https://www.facebook.com/Softflame-Solutions-Pvt-Ltd-2173947799583603/" target="_blank"
            class="Facebook"><i class="fa fa-facebook"></i> Facebook </a>

    </div>

    <!--Sidebar Social Icons-->

    <div class="site_wrapper">
        <!-- <div class="topbar orange2 topbar-padding">
            <div class="container">
                <div class="topbar-left-items">
                    <ul class="toplist toppadding pull-left paddtop1">
                        <li class="rightl"><i class="fa fa-phone"></i></li>
                        <li><a href="tel:+919145278333">+91 9021649159</a>, <a href="tel:+918446425690">+91-8446425690</a>, <a href="tel:+918408898845">+91-8408898845</a></li>
                    </ul>
                </div>
                

                <div class="topbar-right-items pull-right">
                    <ul class="toplist toppadding">

                    <li><a href="https://www.facebook.com/Softflame-Solutions-Pvt-Ltd-2173947799583603/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href=" https://twitter.com/SoftflameL" target="_blank"><i class="fa fa-twitter" ></i></a></li>
                            <li><a href="https://www.instagram.com/softflame_solutions/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            <li class="last"><a href="https://www.linkedin.com/company/26552568/admin/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div> -->
        <div class="clearfix"></div>

        <div id="header">
            <div class="container">
                <div class="navbar navbar-default yamm">

                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid"
                            class="navbar-toggle two three"><span class="icon-bar"></span><span
                                class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="index.php" class="navbar-brand"><img src="images/logo web.png" class="mobileSizeLogo"
                                alt="Website Development Company Pune, Bangalore, Delhi" /></a>
                    </div>

                    <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
                        <ul class="nav navbar-nav" id="navlist">
                            <li class="dropdown"> <a href="index.php" class="active">Home</a>

                            </li>
                            <li class="dropdown yamm-fw"><a href="about.php" class="dropdown-toggle">About Us</a>

                            </li>
                            <li class="dropdown yamm-fw"> <a href="services.php" class="dropdown-toggle">Services</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <!-- Content container to add padding -->
                                        <div class="yamm-content">
                                            <div class="row">
                                                <ul class="col-sm-8 col-md-3 list-unstyled ">
                                                    <li>
                                                        <p class="adjust_menu">Web Development</p>
                                                    </li>
                                                    <li><a href="website-development-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; Website
                                                            Development</a></li>
                                                    <li><a href="mean-stack-app-development-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; Mean Stack App
                                                            Development</a></li>
                                                            <li><a href="mern-stack-app-development-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; Mern Stack App
                                                            Development</a></li>
                                                    <li><a href="node-js-development-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; Node Js
                                                            Development</a></li>
                                                    <li><a href="angularjs-development-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; Angular Js
                                                            Development</a></li>
                                                    <li><a href="ui-ux-design-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; UX Design
                                                            Services</a></li>
                                                    <li><a href="ecommerce-development-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; Ecommerce
                                                            Development</a></li>
                                                </ul>
                                                <ul class="col-sm-8 col-md-3 list-unstyled ">
                                                    <li>
                                                        <p class="adjust_menu">Mobile App Development</p>
                                                    </li>
                                                    <li><a href="ios-app-development-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; iPhone/iPad App
                                                            Development</a></li>
                                                    <li><a href="android-app-development-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; Android App
                                                            Development</a></li>
                                                    <li><a href="cordova-phonegap-app-development-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; Cordova/ PhonGap
                                                            Development</a></li>
                                                    <li><a href="ionic-app-development-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; Ionic Framework
                                                            App Development</a></li>
                                                    <li><a href="cross-platform-app-development-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; Cross Platform App
                                                            Development</a></li>
                                                    <li><a href="meteorjs-app-development-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; Meteor Js
                                                            Development</a></li>
                                                </ul>
                                                <ul class="col-sm-8 col-md-3 list-unstyled ">
                                                    <li>
                                                        <p class="adjust_menu"> AWS Cloud </p>
                                                    </li>
                                                    <li><a href="aws-cloud-consulting-services-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; AWS Cloud
                                                            Consulting</a></li>
                                                    <li><a href="aws-cloud-migration-services-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; AWS Cloud
                                                            Migration</a></li>
                                                    <li><a href="managed-aws-services-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; AWS Managed
                                                            Services</a></li>
                                                    <!-- <li><a href="seo-company-in-pune.php"><i class="fa fa-angle-right"></i> &nbsp; SEO Services</a></li> -->
                                                </ul>
                                                <ul class="col-sm-8 col-md-3 list-unstyled ">
                                                    <li>
                                                        <p class="adjust_menu"> Digital Marketing </p>
                                                    </li>
                                                    <li><a href="seo-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; SEO Services</a>
                                                    </li>
                                                    <li><a href="seo-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; Content
                                                            Marketing</a></li>
                                                    <li><a href="seo-company-in-pune.php"><i
                                                                class="fa fa-angle-right"></i> &nbsp; Pay-Per-Click
                                                            (PPC) Advertising</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle">Hire
                                    Resources</a>
                                <ul class="dropdown-menu three" role="menu">
                                    <li><a href="hire-angularjs-developer-pune.php"><i class="fa fa-angle-right"></i>
                                            Hire Angular JS Developer </a></li>
                                    <li><a href="hire-ios-app-developer-pune.php"><i class="fa fa-angle-right"></i> Hire
                                            iOS Developer</a></li>
                                    <li><a href="hire-react-native-app-developer-pune.php"><i
                                                class="fa fa-angle-right"></i> Hire React Native Developer</a></li>
                                    <li><a href="hire-mean-stack-app-developer-pune.php"><i
                                                class="fa fa-angle-right"></i> Hire MEAN Stack Developer</a></li>
                                    <li><a href="hire-flutter-native-app-developer-pune.php"><i
                                                class="fa fa-angle-right"></i> Hire Flutter Developer</a></li>
                                    <li><a href="hire-ionic-app-developer-pune.php"><i class="fa fa-angle-right"></i>
                                            Hire Ionic App Developer</a></li>
                                    <li><a href="hire-nodejs-developer-pune.php"><i class="fa fa-angle-right"></i> Hire
                                            Node Js Developer</a></li>
                                    <li><a href="hire-php-developer-pune.php"><i class="fa fa-angle-right"></i> Hire PHP
                                            Developer</a></li>
                                </ul>
                            </li>
                            <li class="dropdown yamm-fw"> <a href="career.php" class="dropdown-toggle">Career</a>

                            </li>
                            <li class="dropdown"> <a href="blog.php" class="dropdown-toggle">Products</a>
                            </li>
                            <li class="dropdown"> <a href="blog.php" class="dropdown-toggle">Portfolio</a>
                            </li>
                            <li class="dropdown"> <a href="blog.php" class="dropdown-toggle">Blog</a>
                            </li>
                            <li class="dropdown"> <a href="contact.php" class="dropdown-toggle align-1">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>