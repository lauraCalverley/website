<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
            <!-- Edit The description of your site in the next meta -->
        <meta name="description" content="Laura Phippen Portfolio" />
        <meta name="keywords" content="Bay Area, San Francisco, c++, php, java, angular, sql, linux, git, developer" />
        <meta name="author" content="Laura Phippen" />

        <title>Laura Phippen</title>
        <link rel="icon" type="image/ico" href="http://placehold.it/60/000000" /> <!-- Edit Icon Here replace (http://placehold.it/60/000000) with your link -->  <!-- for example href="assets/img/imageName.png" -->

        <!-- ========== [1.1] CSS Links ================== -->
            <!-- BootStrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
            <!-- Font Awesome -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
            <!-- Animate -->
        <link href="assets/css/animate.css" rel="stylesheet" />
            <!-- Magnefic Pop Up -->
        <link href="assets/css/magnific-popup.css" rel="stylesheet" />
            <!-- for Internet Explorer 10 Bug -->
        <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet" />
            <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet" />
            <!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
        <script src="assets/js/ie-emulation-modes-warning.js"></script>
            <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/jsrespond.min.js"></script>
        <![endif]-->

        <!-- ========== [1.2] CSS Style ================== -->
        <link href="assets/css/style.css" rel="stylesheet" /> <!-- Main Css Style -->
    </head>
    <body>
        <!-- ========== [2.1] Loading animation ========== -->
            <div class="loading">
                <div class="table-cell">
                    <div class="spinner"></div> <!-- loading Animation -->
                </div>
            </div>
        <!-- ========== End Loading Animation ============ -->


        <!-- ========== [2.2] Nav Bar ==================== -->
            <div id="nav" class="navbar custom-navbar navbar-fixed-top" role="navigation">
                 <div class="container">

                      <!-- NAVBAR HEADER -->
                      <div class="navbar-header">
                           <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon icon-bar"></span>
                                <span class="icon icon-bar"></span>
                                <span class="icon icon-bar"></span>
                           </button>
                           <!-- lOGO TEXT HERE -->
                           <a href="index.html" class="navbar-brand"><span class="special">Laura</span>Phippen.</a> <!-- Edit Logo Text -->
                      </div>

                      <!-- NAVIGATION LINKS -->
                      <div class="collapse navbar-collapse">
                           <ul class="nav navbar-nav navbar-right">
                                <li><a href="#home" class="smoothScroll">Home</a></li> <!-- Home Button -->
                                <li><a href="#about" class="smoothScroll">About</a></li> <!-- About Button -->
                                <li><a href="#services" class="smoothScroll">Skills</a></li> <!-- Features Button -->
                                <li><a href="#portfolio" class="smoothScroll">Portfolio</a></li> <!-- Portfolio Button -->
                                <li><a href="#contact" class="smoothScroll">Contact</a></li> <!-- Contact Button -->
                           </ul>
                      </div>
                 </div>
            </div>
        <!-- ========== End Nav Bar ====================== -->


        <!-- ========== [2.3] Header ===================== -->
            <div id="home" class="demo-1">
                <div class="content">
                    <div id="large-header" class="large-header" style="background-image: url('http://placehold.it/4000/000000?text=++');">
                        <canvas id="demo-canvas"></canvas>
                        <div class="display-table">
                            <div class="table-cell">
                                <h2 class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                    Let's Work <span>Together!</span>
                                </h2>
                                <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                    Hello, I'm Laura. <br> I am seeking a position as a <br> <span>Front End Software Engineer</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- ========== End Header ======================= -->


        <!-- ========== [2.4] About ====================== -->
            <section id="about">
                  <div class="container">
                      <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="200">
                          <div class="col-md-3 text-center">
                                <img alt="Profile-image" src="assets/img/Photo.png" />
                                <h2>Laura Phippen</h2>
                                <a href="https://github.com/lauraPhippen" target="_blank">
                                    <i class="fa fa-github"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/laura-phippen-b87a6a103" target="_blank">
                                    <i class="fa fa-linkedin"></i> <!-- Linked in Icon -->
                                </a>
                          </div>
                          <div class="col-md-9">
                                <h3>About me</h3>
                                <p class="main">
                                    I recently received my Bachelor of Science in Computer Science and Engineering from the University of California, Davis. I have over 3 years of professional work experience building web and hybrid mobile applications using AngularJS, Ionic, PHP, Laravel, and PostgreSql. In addition to my work experience, I am currently expanding my knowledge with side projects in order to gain even more experience in using the MEAN stack and design patterns.
                                    While I love to dabble in all areas of computer science, my passion is front end engineering.
                                </p>
                          </div>
                      </div>
                      <div class="row text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="200">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info">
                                    <i class="fa fa-map-marker fa-2x"></i>
                                    <h4>Location</h4>
                                    <p>
                                        Bay Area, California
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info">
                                    <i class="fa fa-birthday-cake fa-2x"></i>
                                    <h4>Birth Date</h4>
                                    <p>
                                        October 24, 1990
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="info">
                                        <i class="fa fa-phone fa-2x"></i>
                                        <h4>Phone</h4>
                                        <p>
                                            <a href="tel:925-628-5666">925-628-5666</a>
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="info">
                                    <i class="fa fa-envelope fa-2x"></i>
                                    <h4>Mail</h4>
                                    <p>
                                        <a href="mailto:laura@lauraphippen.com">laura@lauraphipppen.com</a>
                                    </p>
                                </div>
                            </div>
                      </div>
                  </div>
            </section>
        <!-- ========== End About ======================== -->


        <!-- ========== [2.5] Services =================== -->
            <section id="services">
                    <div class="container">

                            <h2>Technical Skills</h2>

                            <div class="row text-center">

                                <div class="col-sm-6 col-md-2-4 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="0.6s"> <!-- Animation -->
                                    <div class="service">
                                        <img alt="C++" src="assets/img/cpp.png" class="skill-img"/>
                                        <h3>C++</h3>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-2-4 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="0.6s"> <!-- Animation -->
                                    <div class="service">
                                        <img alt="C++" src="assets/img/php.png" class="skill-img"/>
                                        <h3>PHP</h3>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-2-4 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="0.6s"> <!-- Animation -->
                                    <div class="service">
                                        <img alt="C++" src="assets/img/angular.png" class="skill-img"/>
                                        <h3>AngularJS</h3>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-2-4 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="0.6s"> <!-- Animation -->
                                    <div class="service">
                                        <img alt="C++" src="assets/img/html.png" class="skill-img"/>
                                        <h3>HTML5</h3>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-2-4 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="0.6s"> <!-- Animation -->
                                    <div class="service">
                                        <img alt="C++" src="assets/img/css.png" class="skill-img"/>
                                        <h3>CSS3</h3>
                                    </div>
                                </div>

                                <div class="col-md-2-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="0.6s"> <!-- Animation -->
                                    <div class="service">
                                        <img alt="C++" src="assets/img/sql.png" class="skill-img"/>
                                        <h3>SQL</h3>
                                    </div>
                                </div>

                                <div class="col-md-2-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="0.6s"> <!-- Animation -->
                                    <div class="service">
                                        <img alt="C++" src="assets/img/java.png" class="skill-img"/>
                                        <h3>Java</h3>
                                    </div>
                                </div>

                                <div class="col-md-2-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="0.6s"> <!-- Animation -->
                                    <div class="service">
                                        <img alt="C++" src="assets/img/androidStudio.png" class="skill-img"/>
                                        <h2><small>Android Studio</small></h2>
                                    </div>
                                </div>

                                <div class="col-md-2-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="0.6s"> <!-- Animation -->
                                    <div class="service">
                                        <img alt="C++" src="assets/img/linux.png" class="skill-img"/>
                                        <h3>Linux</h3>
                                    </div>
                                </div>

                                <div class="col-md-2-4 col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-offset="200" data-wow-delay="0.6s"> <!-- Animation -->
                                    <div class="service">
                                        <img alt="C++" src="assets/img/git.png" class="skill-img"/>
                                        <h3>Git</h3>
                                    </div>
                                </div>

                            </div>

                    </div>
            </section>
        <!-- ========== End Features ===================== -->


        <!-- ========== [2.6] Portfolio ================== -->
            <section id="portfolio">
                <div class="container">
                    <h2>Portfolio</h2>
                    <p class="secondry">
                        Some of My Previous and Current Work in Web and Mobile Application Development
                    </p>

                    <div class="row text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="200">

                        <div class="col-md-4 col-sm-6 text-center">
                            <figure class="icons">
                                <img class="img-responsive" src="assets/img/portfolio1.jpg" alt="portfolio-image"/>
                                <figcaption>
                                    <h2>Skeletor <span>Alarm System</span></h2>
                                    <p>
                                        <a href="assets/img/portfolio1.jpg" class="image-popup-vertical-fit text-center" title="Alarm System Page for Skeletor CRM"> <!-- Edit Image and Title -->
                                            <i class="fa fa-fw fa-eye"></i>
                                        </a>
                                        <a href="http://skeletor.thealarmguys.com" target="_blank">
                                            <i class="fa fa-fw fa-link"></i>
                                        </a>
                                        <a href="#contact" class="smoothScroll">
                                            <i class="fa fa-fw fa-envelope-o"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <figure class="icons">
                                <img class="img-responsive" src="assets/img/portfolio2.jpg" alt="portfolio-image"/>
                                <figcaption>
                                    <h2>Skeletor <span>User</span></h2>
                                    <p>
                                        <a href="assets/img/portfolio2.jpg" class="image-popup-vertical-fit text-center" title="User Page for Skeletor CRM"> <!-- Edit Image and Title -->
                                            <i class="fa fa-fw fa-eye"></i>
                                        </a>
                                        <a href="http://skeletor.thealarmguys.com" target="_blank">
                                            <i class="fa fa-fw fa-link"></i>
                                        </a>
                                        <a href="#contact" class="smoothScroll">
                                            <i class="fa fa-fw fa-envelope-o"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <figure class="icons">
                                <img class="img-responsive" src="assets/img/portfolio3.jpg" alt="portfolio-image"/>
                                <figcaption>
                                    <h2>Skeletor <span>Site Options</span></h2>
                                    <p>
                                        <a href="assets/img/portfolio3.jpg" class="image-popup-vertical-fit text-center" title="Site Options Page For Skeletor CRM"> <!-- Edit Image and Title -->
                                            <i class="fa fa-fw fa-eye"></i>
                                        </a>
                                        <a href="http://skeletor.thealarmguys.com" target="_blank">
                                            <i class="fa fa-fw fa-link"></i>
                                        </a>
                                        <a href="#contact" class="smoothScroll">
                                            <i class="fa fa-fw fa-envelope-o"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <figure class="icons">
                                <img class="img-responsive" src="assets/img/portfolio4.jpg" alt="portfolio-image"/>
                                <figcaption>
                                    <h2>Skeletor <span>Calendar</span></h2>
                                    <p>
                                        <a href="assets/img/portfolio3.jpg" class="image-popup-vertical-fit text-center" title="Calendar Page for Skeletor CRM"> <!-- Edit Image and Title -->
                                            <i class="fa fa-fw fa-eye"></i>
                                        </a>
                                        <a href="http://skeletor.thealarmguys.com" target="_blank">
                                            <i class="fa fa-fw fa-link"></i>
                                        </a>
                                        <a href="#contact" class="smoothScroll">
                                            <i class="fa fa-fw fa-envelope-o"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <figure class="icons">
                                <img class="img-responsive" src="assets/img/portfolio5.jpg" alt="portfolio-image"/>
                                <figcaption>
                                    <h2>Skeletor <span>Mobile App</span></h2>
                                    <p>
                                        <a href="assets/img/portfolio5.jpg" class="image-popup-vertical-fit text-center" title="Mobile Application for Skeletor CRM"> <!-- Edit Image and Title -->
                                            <i class="fa fa-fw fa-eye"></i>
                                        </a>
                                        <a href="#contact" class="smoothScroll">
                                            <i class="fa fa-fw fa-envelope-o"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-6 text-center">
                            <figure class="icons">
                                <img class="img-responsive" src="assets/img/portfolio6.jpg" alt="portfolio-image"/>
                                <figcaption>
                                    <h2>Port to <span>Android</span></h2>
                                    <p>
                                        <a href="assets/img/portfolio6.jpg" class="image-popup-vertical-fit text-center" title="Android App ported from Linux Warcraft II Game"> <!-- Edit Image and Title -->
                                            <i class="fa fa-fw fa-eye"></i>
                                        </a>
                                        <a href="#contact" class="smoothScroll">
                                            <i class="fa fa-fw fa-envelope-o"></i>
                                        </a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
        <!-- ========== End Portfolio ==================== -->


        <!-- ========== [2.7] Contact ==================== -->
            <div id="contact" class="contact text-center" style="background:url('assets/img/contactbackground.png') no-repeat center center fixed;background-size:cover"> <!-- Edit your contact section background put link insteed (http://placehold.it/4000) replace it with your own link --> <!-- For Example   background:url('assets/img/imageName.jpg') -->
                <div class="contact-us">
                    <div class="container">
                        <h2>Keep In Touch</h2>
                        <p class="secondry">
                            Feel Free to Contact Me
                        </p>
                            <div class="row">
                                <div class="col-md-9 col-sm-12">

                                    <?php if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] == 'http://lauraphippen.com/') {

                                    if(isset($_GET['failed'])){ ?>

                                    <input type="text" value="Your message was unable to be sent" readonly />

                                    <?php } else { ?>

                                    <input type="text" value="Your message has been sent!" readonly />


                                    <?php } } else { ?>

                                    <form action="contact.php" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="action" value="submit" />
                                        <input name="name" type="text" placeholder="Name" required />
                                        <input name="email" type="email" placeholder="Email" required />
                                        <input name="phone" type="text" placeholder="Phone" />
                                        <textarea name="message" placeholder="Your Message" required ></textarea>
                                        <input type="submit" value="Send email" />
                                    </form>

                                    <?php } ?>

                                </div>
                                <div class="contact-info col-md-3 col-sm-12 text-left">
                                    <h3>Contact Info</h3>
                                    <p class="phone">
                                        <span> Phone:</span><a href="tel: 925-628-5666">925-628-5666</a>
                                    </p>
                                    <p class="email">
                                        <span> Mail:</span><a href="mailto: laura@lauraphippen.com"> laura@lauraphippen.com</a>
                                    </p>
                                    <p class="address">
                                        <span> Location:</span> Bay Area, California
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        <!-- ========== End Contact ====================== -->


        <!-- ========== [2.8] Footer ===================== -->
            <section id="footer">
                <h5>
                    Designed By <a href="https://themeforest.net/user/yahyaessam?ref=yahyaessam"><span class="name">Laura Phippen</span></a>
                </h5>
                <div class="social-media">
                    <a href="https://github.com/lauraPhippen" target="_blank">
                        <i class="fa fa-github fa-2x" aria-hidden="true"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/laura-phippen-b87a6a103" target="_blank">
                        <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                    </a>
                </div>
            </section>
        <!-- ========== End Footer ======================= -->


        <!-- ==========[2.9] JavaScript ================== -->
               <!-- JQuery -->
            <script src="assets/js/jquery-3.1.1.min.js"></script>
                <!-- BootStrap -->
            <script src="assets/js/bootstrap.min.js"></script>
                 <!-- wow -->
            <script src="assets/js/wow.min.js"></script>
                <!-- Particles -->
            <script src="assets/js/TweenLite.min.js"></script>
            <script src="assets/js/EasePack.min.js"></script>
            <script src="assets/js/rAF.js"></script>
            <script src="assets/js/header.js"></script>
                    <!-- main JS -->
            <script src="assets/js/main.js"></script>
                    <!-- SmoothScroll -->
            <script src="assets/js/smoothscroll.js"></script>
                    <!-- Magnefic PopUp -->
            <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- ========== End JavaScript =================== -->

    </body>
</html>
