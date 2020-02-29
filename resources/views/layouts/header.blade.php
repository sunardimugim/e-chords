<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
	================================================== -->
    <meta charset="utf-8">
    <title>Global Raya Infratama</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
	================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons
	================================================== -->
    <link rel="icon" href="{{asset('public/assets/img/favicon/favicon-32x32.png')}}" type="{{asset('public/assets/image/x-icon')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('public/assets/img/favicon/favicon-144x144.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('public/assets/img/favicon/favicon-72x72.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('public/assets/img/favicon/favicon-54x54.png')}}">

    <!-- CSS
	================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="{{asset('public/assets/css/responsive.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('public/assets/css/font-awesome.min.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('public/assets/css/animate.css')}}">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="{{asset('public/assets/css/prettyPhoto.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('public/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/owl.theme.css')}}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{asset('public/assets/css/flexslider.css')}}">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{asset('public/assets/css/cd-hero.css')}}">
    <!-- Style Swicther -->
    <link id="style-switch" href="{{asset('public/assets/css/presets/preset1.css')}}" media="screen" rel="stylesheet" type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Style switcher start -->
    <div class="style-switch-wrapper">
        <div class="style-switch-button">
            <i class="fa fa-sliders"></i>
        </div>
        <h3>Style Options</h3>
        <button id="preset1" class="btn btn-sm btn-primary"></button>
        <button id="preset2" class="btn btn-sm btn-primary"></button>
        <button id="preset3" class="btn btn-sm btn-primary"></button>
        <button id="preset4" class="btn btn-sm btn-primary"></button>
        <button id="preset5" class="btn btn-sm btn-primary"></button>
        <button id="preset6" class="btn btn-sm btn-primary"></button>
        <br /><br />
        <a class="btn btn-sm btn-primary close-styler pull-right">Close X</a>
    </div>
    <!-- Style switcher end -->

    <div class="body-inner">

        <!-- Header start -->
        <header id="header" class="navbar-fixed-top header" role="banner">
            <div class="container">
                <div class="row">
                    <!-- Logo start -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand navbar-bg">
                            <a href="index.html">
                                <img class="img-responsive" src="{{asset('public/assets/images/logo copy.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <!--/ Logo end -->
                    <nav class="collapse navbar-collapse clearfix" role="navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="{{url('/about')}}">About Us</a></li>
                                        <li><a href="{{url('/services')}}">Services</a></li>
                                        <li><a href="{{url('/career')}}">Career</a></li>
                                        <li><a href="{{url('/testimonials')}}">Testimonials</a></li>
                                        <li><a href="{{url('/faq')}}">Faq</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="{{url('/portfolio-classic')}}">Portfolio Classic</a></li>
                                        <li><a href="{{url('/portfolio-static')}}">Portfolio Static</a></li>
                                        <li><a href="{{url('/portfolio-item')}}">Portfolio Single</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="about2.html">About Us - 2</a></li>
                                        <li><a href="service2.html">Services - 2</a></li>
                                        <li><a href="service-single.html">Services Single</a></li>
                                        <li><a href="pricing.html">Pricing Table</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="blog-rightside.html">Blog with Sidebar</a></li>
                                        <li><a href="blog-item.html">Blog Single</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="elements.html">Elements</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <!--/ Navigation end -->
                </div>
                <!--/ Row end -->
            </div>
            <!--/ Container end -->
        </header>
        <!--/ Header end -->

        <!-- Slider start -->
        <section id="home" class="no-padding">
            <div id="main-slide" class="cd-hero">
                <ul class="cd-hero-slider">
                    <li class="selected">
                        <div class="overlay2">
                            <img class="" src="{{asset('public/assets/images/slider/bg1.jpg')}}" alt="slider">
                        </div>
                        <div class="cd-full-width">
                            <h2>Need To Invent The Future!</h2>
                            <h3>We Making Difference To Great Things Possible</h3>
                            <a href="#0" class="btn btn-primary white cd-btn">Start Now</a>
                            <a href="#0" class="btn btn-primary solid cd-btn">Learn More</a>
                        </div> <!-- .cd-full-width -->
                    </li>
                    <li>
                        <div class="overlay2">
                            <img class="" src="{{asset('public/assets/images/slider/bg2.jpg')}}" alt="slider">
                        </div>
                        <div class="cd-half-width">
                            <h2>How Big Can You Dream?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                            <a href="#0" class="cd-btn btn btn-primary solid">Take a Tour</a>
                        </div> <!-- .cd-half-width -->

                        <div class="cd-half-width cd-img-container">
                            <img src="{{asset('public/assets/images/slider/bg-thumb1.png')}}" alt="">
                        </div> <!-- .cd-half-width.cd-img-container -->
                    </li>
                    <li>
                        <div class="overlay2">
                            <img class="" src="{{asset('public/assets/images/slider/bg3.jpg')}}" alt="slider">
                        </div>
                        <div class="cd-half-width cd-img-container img-right">
                            <img src="{{asset('public/assets/images/slider/bg-thumb2.png')}}" alt="">
                        </div> <!-- .cd-half-width.cd-img-container -->
                        <div class="cd-half-width">
                            <h2>Your Challenge is Our Progress</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur cumque natus!</p>
                            <a href="#0" class="cd-btn btn btn-primary white">Start</a>
                            <a href="#0" class="cd-btn btn secondary btn-primary solid">Learn More</a>
                        </div> <!-- .cd-half-width -->
                    </li>
                    <li class="cd-bg-video">
                        <div class="cd-full-width">
                            <h2>WE ARE HERE TO MAKE IT HAPPEN</h2>
                            <h3>We Making Difference To Great Things Possible</h3>

                            <a href="#0" class="cd-btn btn btn-primary solid">Learn more</a>
                        </div> <!-- .cd-full-width -->

                        <div class="cd-bg-video-wrapper" data-video="{{asset('public/assets/videos/video')}}">
                            <!-- video element will be loaded using jQuery -->
                        </div> <!-- .cd-bg-video-wrapper -->
                    </li>
                </ul>
                <!--/ cd-hero-slider -->

                <div class="cd-slider-nav">
                    <nav>
                        <span class="cd-marker item-1"></span>
                        <ul>
                            <li class="selected"><a href="#0"><i class="fa fa-bicycle"></i> Invent</a></li>
                            <li><a href="#0"><i class="fa fa-hotel"></i> Dream</a></li>
                            <li><a href="#0"><i class="fa fa-android"></i> Tech</a></li>
                            <li class="video"><a href="#0"><i class="fa fa-video-camera"></i> Video</a></li>
                        </ul>
                    </nav>
                </div> <!-- .cd-slider-nav -->

            </div>
            <!--/ Main slider end -->
        </section>
        <!--/ Slider end -->

















        <!-- Footer start -->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">

                    <!--/ End Recent Posts-->


                    <div class="col-md-4 col-sm-12 footer-widget">

                    </div>
                    <!--/ end flickr -->


                    <!--/ end about us -->

                </div><!-- Row end -->
            </div><!-- Container end -->
        </footer><!-- Footer end -->



        <!-- Javascript Files
	================================================== -->

        <!-- initialize jQuery Library -->
        <script type="text/javascript" src="{{asset('public/assets/js/jquery.js')}}"></script>
        <!-- Bootstrap jQuery -->
        <script type="text/javascript" src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
        <!-- Style Switcher -->
        <script type="text/javascript" src="{{asset('public/assets/js/style-switcher.js')}}"></script>
        <!-- Owl Carousel -->
        <script type="text/javascript" src="{{asset('public/assets/js/owl.carousel.js')}}"></script>
        <!-- PrettyPhoto -->
        <script type="text/javascript" src="{{asset('public/assets/js/jquery.prettyPhoto.js')}}"></script>
        <!-- Bxslider -->
        <script type="text/javascript" src="{{asset('public/assets/js/jquery.flexslider.js')}}"></script>
        <!-- CD Hero slider -->
        <script type="text/javascript" src="{{asset('public/assets/js/cd-hero.js')}}"></script>
        <!-- Isotope -->
        <script type="text/javascript" src="{{asset('public/assets/js/isotope.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/assets/js/ini.isotope.js')}}"></script>
        <!-- Wow Animation -->
        <script type="text/javascript" src="{{asset('public/assets/js/wow.min.js')}}"></script>
        <!-- SmoothScroll -->
        <script type="text/javascript" src="{{asset('public/assets/js/smoothscroll.js')}}"></script>
        <!-- Eeasing -->
        <script type="text/javascript" src="{{asset('public/assets/js/jquery.easing.1.3.js')}}"></script>
        <!-- Counter -->
        <script type="text/javascript" src="{{asset('public/assets/js/jquery.counterup.min.js')}}"></script>
        <!-- Waypoints -->
        <script type="text/javascript" src="{{asset('public/assets/js/waypoints.min.js')}}"></script>
        <!-- Template custom -->
        <script type="text/javascript" src="{{asset('public/assets/js/custom.js')}}"></script>
    </div><!-- Body inner end -->
</body>

</html>