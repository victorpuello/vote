<!DOCTYPE html>
<html>
<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Ingrid Pestana Concejo de Cereté</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Sistema de información campaña Ingrid Pestana">
    <meta name="author" content="Victor Puello">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendor/magnific-popup/magnific-popup.min.css')}}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('front/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/theme-elements.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/theme-blog.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/theme-shop.css')}}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{asset('front/vendor/rs-plugin/css/settings.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendor/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" href="{{asset('front/vendor/rs-plugin/css/navigation.css')}}">

    <!-- Demo CSS -->


    <!-- Skin CSS -->
    <link rel="stylesheet" href="{{asset('front/css/skins/skin-corporate-10.css')}}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('front/css/custom.css')}}">

    <!-- Head Libs -->
    <script src="{{asset('front/vendor/modernizr/modernizr.min.js')}}"></script>

</head>
<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<div class="body">
    <header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
        <div class="header-body border-top-0 bg-dark box-shadow-none">
            <div class="header-container container container-xl">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-logo">
                                <a href="{{url('/')}}">
                                    <img alt="Porto" width="82" height="40" src="{{asset('img/logo.png')}}">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                                <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                    <nav class="collapse">
                                        <ul class="nav nav-pills" id="mainNav">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle active" href="{{route('login')}}">
                                                    Acceso
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main">
        {!! Alert::render() !!}
        @yield('content')

    </div>

    <footer id="footer" class="bg-color-light border-0 pt-5 mt-0">
        <div class="footer-copyright curved-border curved-border-top d-flex align-items-center">
            <div class="container py-2">
                <div class="row py-4">
                    <div class="col text-center">
                        <p class="text-3">2018 © <strong class="font-weight-normal text-color-light opacity-7">Porto Template</strong> - Copyright. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- Vendor -->
<script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('front/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
<script src="{{asset('front/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('front/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
<script src="{{asset('front/vendor/popper/umd/popper.min.js')}}"></script>
<script src="{{asset('front/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/vendor/common/common.min.js')}}"></script>
<script src="{{asset('front/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('front/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('front/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
<script src="{{asset('front/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
<script src="{{asset('front/vendor/isotope/jquery.isotope.min.js')}}"></script>
<script src="{{asset('front/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('front/vendor/vide/jquery.vide.min.js')}}"></script>
<script src="{{asset('front/vendor/vivus/vivus.min.js')}}"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{asset('front/js/theme.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('front/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('front/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- Current Page Vendor and Views -->
<script src="{{asset('front/js/views/view.contact.js')}}"></script>

<!-- Theme Custom -->
<script src="{{asset('front/js/custom.js')}}"></script>

<!-- Theme Initialization Files -->
<script src="{{asset('front/js/theme.init.js')}}"></script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-12345678-1', 'auto');
    ga('send', 'pageview');
</script>
 -->

</body>
</html>
