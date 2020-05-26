<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="zxx">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="APPTON HTML5 Template is a simple Smooth Personal App Landing Template" />
    <meta name="keywords" content="App, Landing, Business, Onepage, Html, Business" />

    <!--====== TITLE TAG ======-->
    <title>GRAPSA</title>

    <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{asset('assest/img/favicon.png')}}" />

    <!--====== STYLESHEETS ======-->
    <link href="{{asset('assest/css/plugins.css')}}" rel="stylesheet">
    <link href="{{asset('assest/css/theme.css')}}" rel="stylesheet">
    <link href="{{asset('assest/css/icons.css')}}" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{asset('style.css')}}" rel="stylesheet">
    <link href="{{asset('assest/css/responsive.css')}}" rel="stylesheet">

    <script src="{{asset('assest/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <style>
        .yield{
            padding:150px 0
        }
        .mainmenu-area {
    background: #292929;

        }
    </style>

</head>

<body data-spy="scroll" data-target=".mainmenu-area" data-offset="90">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
 <!--    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>
 -->
    <!--SCROLL TO TOP-->
    <a href="#scroolup" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="header-top-area" id="scroolup">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="{{url('/')}}" class="navbar-brand"><img src="assest/img/logo.png" width="70%" alt="logo"></a>
                        </div>
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav pull-right">
                                <li class="active"><a href="#home">Inicio</a></li>
                                <li><a href="#features">Productos</a></li>
                                <li><a href="#courses">Noticias</a></li>
                                <li><a href="#contact">Contáctenos</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!--END MAINMENU AREA END-->
        </div>

        <!--WELCOME SLIDER AREA-->
        @yield('content')
        <!--WELCOME SLIDER AREA END-->
    </header>
    <!--END TOP AREA-->


    <!--ABOUT TOP CONTENT AREA-->
   <!--  <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                    <div class="text-center wow fadeIn">
                        <h2 class="xs-font20">Educrown is trusted by 50,000+ student.</h2>
                        <p>Microsoft has spent a lot of time trying to make Windows self-repairing, partly because it generally gets the blame when other programs or users try to improve” it. Given that tens of thousands of expert programmers have worked on the code over the past 30 years.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--ABOUT TOP CONTENT AREA END-->
     <!--ABOUT AREA-->


    
    


    
    <!--FOOER AREA-->
    <footer class="footer-area sky-gray-bg relative">
        <div class="footer-top-area padding-80-80 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <div class="single-footer footer-about sm-mb50 xs-mb50 sm-center xs-center">
                            <div class="footer-logo mb30">
                                <a href="#"><img src="assest/img/logo.png" alt=""></a>
                            </div>
                            <p>Empresa editora y de publicidad con más de 30 años de experiencia en el mercado y nos dedicamos a la publicidad gráfica y editorial.</p>
                            <p>Dirección: Av. Argentina 144 Cercado de Lima. Centro Comercial Unicentro - Stand: C-59.2do Piso. Tf: 940 284 553</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
                        <div class="single-footer footer-list white xs-center xs-mb50">
                            <ul>
                                <li><a href="#">Inicio</a></li>
                                <li><a href="#">Nosotros</a></li>
                                <li><a href="#">Noticias</a></li>
                                <li><a href="#">Contáctenos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-sm-8 col-xs-12">
                        <div class="single-footer footer-subscribe white xs-center">
                            <h3 class="mb30 xs-font18">Subscribete a nuestro Newsletter</h3>
                            <p>Suscribete a nuestro newsletter y obten actualizaciones sobre nuestros productos y noticias de nuestra empresa</p>
                            <div class="subscriber-form-area mt50 wow fadeIn">
                                <!--<form action="#" class="subscriber-form mb100">
                                    <input type="email" name="email" id="email" placeholder="Email Address">
                                    <button type="submit">Subscribe</button>
                                </form>-->
                                <form id="mc-form" class="subscriber-form">
                                    <label class="mt10" for="mc-email"></label>
                                    <input type="email" id="mc-email" placeholder="email@example.com">
                                    <button type="submit" class="plus-btn"><i class="fa fa-paper-plane-o"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-copyright text-center wow fadeIn">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Trabajo desarrollado <i class=aria-hidden="true"></i> por <a href="https://jofret.com" target="_blank">Jofret.com</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="{{asset('assest/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assest/js/vendor/bootstrap.min.js')}}"></script>

    <!--====== PLUGINS JS ======-->
    <script src="{{asset('assest/js/vendor/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assest/js/vendor/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{asset('assest/js/vendor/jquery.appear.js')}}"></script>
    <script src="{{asset('assest/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assest/js/stellar.js')}}"></script>
    <script src="{{asset('assest/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assest/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assest/js/wow.min.js')}}"></script>
    <script src="{{asset('assest/js/jquery-modal-video.min.js')}}"></script>
    <script src="{{asset('assest/js/stellarnav.min.js')}}"></script>
    <script src="{{asset('assest/js/placeholdem.min.js')}}"></script>
    <script src="{{asset('assest/js/contact-form.js')}}"></script>
    <script src="{{asset('assest/js/jquery.ajaxchimp.js')}}"></script>
    <script src="{{asset('assest/js/jquery.sticky.js')}}"></script>

    <!--===== ACTIVE JS=====-->
    <script src="{{asset('assest/js/main.js')}}"></script>

    <!--===== MAPS JS=====-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTS_KEDfHXYBslFTI_qPJIybDP3eceE-A&sensor=false"></script>
    <script src="{{asset('assest/js/maps.active.js')}}"></script>

    @yield('descargas')
</body>

</html>
