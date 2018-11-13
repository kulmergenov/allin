<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="{{ app()->getLocale() }}" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <!-- <link rel="shortcut icon" href="img/favicon.png"> -->

        ============================================= -->
        <link rel="stylesheet" href="/assets/css/linearicons.css">=
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="/assets/css/nice-select.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/assets/css/bootstrap.css">
        <link rel="stylesheet" href="/assets/css/main.css">

    </head>
    <body id="welcome">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>


        <!-- Start Header Area -->
        <header class="default-header">
            <div class="container">
                <div class="header-wrap">
                    <div class="header-top d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="#home"><img src="img/logo.png" alt=""></a>
                        </div>
                        <div class="main-menubar d-flex align-items-center">
                            <nav class="hide">
                                <a href="#home">Басты бет</a>
                                <a href="#service">Қызметтер</a>
                                <a href="#appoinment">Көмек</a>
                                <a href="#consultant">Байланыс</a>
                            </nav>
                            <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Area -->

        <!-- start banner Area -->
        <section class="banner-area relative" id="home">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-feature d-flex flex-row pb-30">
                            <div class="desc">
                                <textarea></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-feature d-flex flex-row pb-30">
                            <div class="desc">
                                <h4 class="text-uppercase">24/7 fdgfdgfdgfdgfdgfd</h4>
                                <p>
                                    inappropriate behavior is often laughed off as “boys will be boys,” <br> women face higher conduct women face higher conduct.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- Start feature Area -->
        <section class="feature-area section-gap" id="service">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-feature d-flex flex-row pb-30">
                            <div class="icon">
                                <span class="text-success lnr lnr-checkmark-circle"></span>
                            </div>
                            <div class="desc">
                                <h4 class="text-uppercase">Этимологиясы</h4>
                                <p>
                                    Мәтін...
                                </p>
                            </div>
                        </div>
                        <div class="single-feature d-flex flex-row pb-30">
                            <div class="icon">
                                <span class="text-danger lnr lnr-cross-circle"></span>
                            </div>
                            <div class="desc">
                                <h4 class="text-uppercase">Терминдік мағынасы</h4>
                                <p>
                                    Мәтін...
                                </p>
                            </div>
                        </div>
                        <div class="single-feature d-flex flex-row">
                            <div class="icon">
                                <span class="text-danger lnr lnr-cross-circle"></span>
                            </div>
                            <div class="desc">
                                <h4 class="text-uppercase">Орфографиясы</h4>
                                <p>
                                    Мәтін....
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-feature d-flex flex-row pb-30">
                            <div class="icon">
                                <span class="text-success lnr lnr-checkmark-circle"></span>
                            </div>
                            <div class="desc">
                                <h4 class="text-uppercase">Антонимі</h4>
                                <p>
                                жұмсақ
                                </p>
                            </div>
                        </div>
                        <div class="single-feature d-flex flex-row pb-30">
                            <div class="icon">
                                <span class="text-success lnr lnr-checkmark-circle"></span>
                            </div>
                            <div class="desc">
                                <h4 class="text-uppercase">Синонимі</h4>
                                <p>
                                    берік
                                </p>
                            </div>
                        </div>
                        <div class="single-feature d-flex flex-row">
                            <div class="icon">
                                <span class="text-success lnr lnr-checkmark-circle"></span>
                            </div>
                            <div class="desc">
                                <h4 class="text-uppercase">Омонимі</h4>
                                <p>
                                    кепті, қатайды
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h4>
                        <a href="#">Орысша аудармасы</a>
                    </h4><br>
                    <p><i>твердый</i>
                    </p>
                </div>
            </div>
        </section>
        <!-- End feature Area -->

        <!-- start footer Area -->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2  col-md-6">
                        <div class="single-footer-widget">
                            <h6>Top Products</h6>
                            <ul class="footer-nav">
                                <li><a href="#">Managed Website</a></li>
                                <li><a href="#">Manage Reputation</a></li>
                                <li><a href="#">Power Tools</a></li>
                                <li><a href="#">Marketing Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4  col-md-6">
                        <div class="single-footer-widget mail-chimp">
                            <h6 class="mb-20">Contact Us</h6>
                            <p>
                                56/8, bir uttam qazi nuruzzaman road, west panthapath, kalabagan, Dhanmondi, Dhaka - 1205
                            </p>
                            <h3>012-6532-568-9746</h3>
                            <h3>012-6532-568-97468</h3>
                        </div>
                    </div>
                    <div class="col-lg-6  col-md-12">
                        <div class="single-footer-widget newsletter">
                            <h6>Newsletter</h6>
                            <p>You can trust us. we only send promo offers, not a single spam.</p>
                            <div id="mc_embed_signup">
                                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                    <div class="form-group row" style="width: 100%">
                                        <div class="col-lg-8 col-md-12">
                                            <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-12">
                                            <button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
                                        </div>
                                    </div>
                                    <div class="info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row footer-bottom d-flex justify-content-between">
                    <p class="col-lg-8 col-sm-12 footer-text m-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer Area -->

        <script src="/assets/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="/assets/js/vendor/bootstrap.min.js"></script>
        <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="/assets/js/jquery.nice-select.min.js"></script>
        <script src="/assets/js/jquery.sticky.js"></script>
        <script src="/assets/js/parallax.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/assets/js/waypoints.min.js"></script>
        <script src="/assets/js/jquery.counterup.min.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>
