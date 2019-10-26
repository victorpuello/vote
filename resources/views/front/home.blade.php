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
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle active" href="{{route('login')}}">
                                                    Testigos
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

        <div class="slider-container rev_slider_wrapper curved-border" style="height: 100vh;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 700, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true, 'style': 'arrows-style-1 arrows-primary' }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                <ul>
                    <li class="slide-overlay slide-overlay-level-8" data-transition="fade">
                        <img src="{{asset('img/slides/slide-corporate-10-1.jpg')}}"
                             alt=""
                             data-bgposition="center center"
                             data-bgfit="cover"
                             data-bgrepeat="no-repeat"
                             class="rev-slidebg">

                        <div class="tp-caption"
                             data-x="center" data-hoffset="['-145','-145','-145','-320']"
                             data-y="center" data-voffset="['-80','-80','-80','-130']"
                             data-start="1000"
                             data-transform_in="x:[-300%];opacity:0;s:500;"
                             data-transform_idle="opacity:0.2;s:500;"><img src="{{asset('front/img/slides/slide-title-border.png')}}" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                             data-x="center"
                             data-y="center" data-voffset="['-80','-80','-80','-130']"
                             data-start="700"
                             data-fontsize="['16','16','16','40']"
                             data-lineheight="['25','25','25','45']"
                             data-transform_in="y:[-50%];opacity:0;s:500;">Este 27 de Octubre marca:</div>

                        <div class="tp-caption"
                             data-x="center" data-hoffset="['145','145','145','320']"
                             data-y="center" data-voffset="['-80','-80','-80','-130']"
                             data-start="1000"
                             data-transform_in="x:[300%];opacity:0;s:500;"
                             data-transform_idle="opacity:0.2;s:500;"><img src="{{asset('front/img/slides/slide-title-border.png')}}" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center" data-hoffset="['-40','-40','-40','-130']"
                             data-y="center"
                             data-fontsize="['145','145','145','250']"
                             data-lineheight="['150','150','150','260']">0</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                             data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-x="center" data-hoffset="['60','60','60','60']"
                             data-y="center"
                             data-fontsize="['145','145','145','250']"
                             data-lineheight="['150','150','150','260']">6</div>


                        <div class="tp-caption font-weight-light text-color-light"
                             data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                             data-x="center"
                             data-y="center" data-voffset="['85','85','85','140']"
                             data-fontsize="['18','18','18','40']"
                             data-lineheight="['26','26','26','45']">Partido alianza verde  -  Concejo de Cereté</div>
                    </li>
                </ul>
            </div>
        </div>
        <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
            <div class="container container-xl py-3">
                {!! Alert::render() !!}
                <div class="row">
                    <div class="col text-center">
                        <h2 class="font-weight-normal mb-5">Sr. Testigo ingrese su  <strong class="font-weight-extra-bold"> cédula</strong></h2>
                    </div>
                </div>
                {!! Form::open(['route' => 'validar.testigo', 'method' => 'GET','class' => 'form-horizontal form-bordered']) !!}
                <div class="row mb-5 align-items-center">
                    <div class="col-lg-4 offset-4">
                        <div class="form-group row text-center">
                            <div class="col-lg-12">
                                {!! Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Cédula']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-0">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary font-weight-semibold text-3 px-5 btn-py-2">Validar</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </section>
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
