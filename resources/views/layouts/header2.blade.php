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