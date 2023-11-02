<?php 
$menuactive = "about";
include 'header.php';?>
        <!--end menu-->
        <div class="clearfix"></div>

        <section>
            <div class="header-inner two">
                <div class="inner text-center">
                    <h4 class="title text-white uppercase">About Us</h4>
                    <h5 class="text-white uppercase">Web development company in pune</h5>
                </div>
                <div class="overlay bg-opacity-5"></div>
                <img src="images/bg_8.jpg" alt="" class="img-responsive img_hight" /> </div>
        </section>
        <!-- end header inner -->
        <div class="clearfix"></div>

        <section>
            <div class="pagenation-holder">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6 text-right">
                            <div class="pagenation_links"><a href="index.php">Home</a><i> / </i> About</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end section-->
        <div class="clearfix"></div>

        <section class="sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">

                    </div>
                    <div class="clearfix"></div>

                    <div class="col-md-6"> <img src="images/angular.jpg" alt="" class="img-responsive" /> <br/>
                        <h3 class="text-orange-2">Softflame solutions</h3>
                        <h5 class="text-orange-2">Web Development Company In Pune - Why Work With Us</h5>
                        <p>We work with some dynamic clients who are based either locally in Pune or across the Globe, from start-ups to international brands.Our projects not only look great, they use the right tools that work for you and with your success
                            comes ours. “Your Business We Care”. </p>
                        <br/>

                    </div>
                    <!--end item-->

                    <div class="col-md-6">
                        <h5>– Who we are</h5>
                        <p>Softflame solutions is an pioneer in IT outsourcing and the offshore software development business. We work with a wide range of clients in our endeavor to provide them cost effective and profitable solutions.we have a dedicated
                            and experienced team of computer professionals.Our niche lies in the fact that we thoroughly understand today’s technologies to help you accomplish your business goals. </p>
                        <br/>
                        <h5>– Vision</h5>
                        <p>Our vision is based on building Softflame solutions on three key statements:
                            <ul>
                                <li>1. Speed at which we work</li>
                                <li>2. Quality of the work we deliver</li>
                                <li>3. Trust we build during a business relationship.</li>
                            </ul>
                            We want to be a global leader delivering enterprise business management products and solutions. </p>
                        <br/>
                        <h5>– Our Working Strategy</h5>
                        <ul>
                            <li>Planning</li>
                            <li>Design</li>
                            <li> Development</li>
                            <li>Testing</li>
                            <li>Release</li>
                        </ul>

                        <br/>
                    </div>
                    <!--end item-->

                </div>
            </div>
        </section>
        <!--end section-->
        <div class="clearfix"></div>

        <!-- Modal Send us your requirement -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Send us your requirement</h4>
                    </div>
                    <form name="registrationForm" method="post" action="email.php" required>
                        <div class="container">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone No.</label>
                                    <input type="text" class="form-control" name="mobile" id="phone" placeholder="Phone No." required>
                                </div>


                                <div class="form-group">
                                    <textarea class="form-control" rows="5" name="enquiry" id="message" placeholder="Enter your message" required></textarea>
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn1 btn-default" data-dismiss="modal">Close</button>
                            <button class="btn1 btn-primary" type="submit" name="submit"> <i class="fa fa-paper-plane-o"></i> Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- / Modal Send us your requirement Ends -->

        <!--end section-->
        <div class="clearfix"></div>

        <?php include 'footer.php';?>