<?php include 'header.php';?>
        <!--end menu-->
        <div class="clearfix"></div>

        <section>
            <div class="header-inner two">
                <div class="inner text-center">
                    <h4 class="title text-white uppercase">Blogs</h4>
                    <h5 class="text-white uppercase">Blogs on various topics</h5>
                </div>
                <div class="overlay bg-opacity-5"></div>
                <img src="images/blog/blog.jpg" width="100%" alt="" class="img-responsive" /> </div>
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
                            <div class="pagenation_links"><a href="index.php">Home</a><i> / </i> <a href="blog.php">Blog</a> </div>
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
                    <div class="col-md-12 bmargin">
                        <div class="blog-holder-12">
                            <div class="image-holder">
                                <div class="overlay bg-opacity-1">
                                    <!-- <a href="#">
                                        <div class="icon"><i class="fa fa-search"></i></div>
                                    </a> -->
                                    <div class="post-date-box"> 15 <span>Feb, 2018</span> </div>
                                    <div class="post-date-box two"> 15 <span>Feb, 2018</span> </div>
                                </div>
                                <center><img class="img-responsive" alt="" src="images/blog/angular.gif"></center>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br/>
                        <a href="#">
                            <h3 class="less-mar1">CREATE DYNAMIC WEB APPLICATION USING ANGULARJS FRAMEWORK</h3>
                        </a>
                        <div class="blog-post-info"> <span><i class="fa fa-user"></i> By SFS</span> <span><i class="fa fa-comments-o"></i></span> </div>
                        <br/>
                        <p>AngularJS is a JavaScript Framework which benefits us to develop modern age web applications. Today web applications are not restricted to the desktop. They are widely used on the mobile devices. AngularJS is especially useful
                            while building Single Page Applications, Data Driven and CRUD AngularJS is a JavaScript Framework which benefits us to develop modern age web applications. Today web applications are not restricted to the desktop. They are
                            widely used on the mobile devices. AngularJS is especially useful while building Single Page Applications, Data Driven and CRUD</p>
                        <br/>

                        <!--end item-->

                        <div class="clearfix"></div>
                        <div class="col-divider-margin-4"></div>


                        <div class="col-md-12 bmargin">
                            <div class="blog-holder-12">
                                <div class="image-holder">
                                    <div class="overlay bg-opacity-1">

                                        <div class="post-date-box"> 25 <span>Jan, 2018</span> </div>
                                        <div class="post-date-box two"> 25 <span>Jan, 2018</span> </div>
                                    </div>
                                    <img class="img-responsive" alt="" src="images/blog/nodeblog.png"> </div>
                            </div>
                            <div class="clearfix"></div>
                            <br/>
                            <a href="#">
                                <h3 class="less-mar1">Node.js Port Scanner</h3>
                            </a>
                            <div class="blog-post-info"> <span><i class="fa fa-user"></i> By SFS</span> <span><i class="fa fa-comments-o"></i></span> </div>
                            <br/>
                            <p>Node.js has become an incredible tool for creating services or utilities that act like a service. Usually it’s npm start, wait a moment, and you’ll see the utility provide an address and port; a good example being localhost:8000.
                                One thing that bugs me about this pattern is if you have many service-based utilities that you work on, you wind up running into “port in use” errors, after which you need to look through all of your utilities to see which
                                one to turn off.There’s an easy solution to this problem: Node Port Scanner. This utility provides methods for finding in use or available ports on a given host! Using Port Scanner The most common use case to solve port
                                collisions would be findAPortNotInUse: var portscanner = require(‘portscanner’); // 127.0.0.1 is the default hostname; not required to provide portscanner.findAPortNotInUse([3000, 3010], ‘127.0.0.1’).then(port => { console.log(`Port
                                ${port} is available!`); // Now start your service on this port… }); Providing a series of ports and then starting on the first available port is made simple — no more collisions. You can also check for a given port’s status,
                                or check for ports in use: // Get port status portscanner.checkPortStatus(3000, ‘127.0.0.1’).then(status => { // Status is ‘open’ if currently in use or ‘closed’ if available console.log(status); }); // Find port in use
                                portscanner.findAPortInUse([3000, 3005, 3006], ‘127.0.0.1’).then(port => { console.log(‘PORT IN USE AT: ‘ + port); }); Using this port scanner utility is incredibly simple and the easiest way to get your service to run
                                on any available port. Hardcoded port usage, when unnecessary, only leads to frustration!</p>
                            <br/>

                            <!--end item-->

                            <div class="clearfix"></div>
                            <br/>
                            <div class=" divider-line solid light margin opacity-7"></div>
                            
                        </div>
                    </div>
        </section>
        <!--end item -->
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