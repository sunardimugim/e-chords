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

        @include('layouts._header')
        @include('layouts._slider')
        @include('layouts._servicebox')
        @include('layouts._portofolio')
        @include('layouts._counter')
        @include('layouts._featurebox')
        @include('layouts._imageblock')
        @include('layouts._team')
        @include('layouts._parallax')
        @include('layouts._pricing')
        @include('layouts._testimonial')
        @include('layouts._clients')
        @include('layouts._footer')

        @include('layouts._copyright')


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