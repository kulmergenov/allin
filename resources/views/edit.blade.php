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

    <!-- Fonts ->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!-- <link rel="shortcut icon" href="img/favicon.png"> -->

    <!--============================================= -->
    <!--link rel="stylesheet" href="/assets/css/linearicons.css"-->
    <link rel="stylesheet" href="/css/all.css">
    <link rel="stylesheet" href="/css/regular.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/solid.css" integrity="sha384-rdyFrfAIC05c5ph7BKz3l5NG5yEottvO/DQ0dCrwD8gzeQDjYBHNr1ucUpQuljos" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/regular.css" integrity="sha384-z3ccjLyn+akM2DtvRQCXJwvT5bGZsspS4uptQKNXNg778nyzvdMqiGcqHVGiAUyY" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/fontawesome.css" integrity="sha384-u5J7JghGz0qUrmEsWzBQkfvc8nK3fUT7DCaQzNQ+q4oEXhGSx+P2OqjWsfIRB8QT" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/main.css">

</head>
<body id="welcome">
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/add') }}">Home</a>
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
                    <a href="#home"><!--img src="img/logo.png" alt=""--></a>
                </div>
                <div class="main-menubar d-flex align-items-center">
                    <nav class="hide">
                        <a href="#home">Басты бет</a>
                        <a href="/list">Тізім</a>
                        @auth
                            <a href="{{ url('/add') }}">Қосу</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endauth
                    </nav>
                    <div class="menu-bar"><i class="fas fa-bars text-dark"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Area -->

{!! Form::open((['url' => 'HomeController/savelib','method' => 'post'])) !!}
<!-- start banner Area -->
<section class="relative" id="home">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                Сөз
                <div class="single-feature d-flex flex-row pb-30">
                    <div class="desc w-100">
                        <textarea class="fullwidth w-100" rows="5" name="title_kz" id="title_kz">{{ @$newPrepare->title_kz }}</textarea>
                    </div>
                </div>
                Түсініктемесі
                <div class="single-feature d-flex flex-row pb-30">
                    <div class="desc w-100">
                        <textarea class="fullwidth w-100" rows="5" name="description" id="description">{{ @$newPrepare->description }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-feature d-flex flex-row pb-30">
                    <div class="desc">
                        <h4 class="text-uppercase">Әрекет</h4>
                        <div class="row mt-4">
                            <div class="icon ml-3 pl-5">
                                <button type="submit" name="search" value="OK" class="btn btn-default"><i class="fas fa-search fa-2x text-dark"></i></button>
                            </div>
                            <div class="icon">
                                <button type="submit" name="save" value="OK" class="btn btn-default"><i class="fas fa-save fa-2x text-dark"></i></button>
                            </div>
                            <div class="icon">
                                <i class="fas fa-broom fa-2x text-dark"></i>
                            </div>
                            <div class="icon">
                                <i class="fas fa-volume-down fa-2x text-dark"></i>
                            </div>
                            <div class="icon">
                                <i class="fas fa-copy fa-2x text-dark"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start feature Area -->
<section class="feature-area py-4" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="single-feature d-flex flex-row pb-30">
                    <div class="icon">
                        <i class="far fa-check-circle fa-2x text-success"></i>
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">Этимологиясы</h4>
                        <input class="form-control" name="etimology" id="etimology" value="{{ @$newPrepare->etimology }}">
                        <input class="form-control" name="wordid" id="wordid" type="hidden" value="{{ @$newPrepare->id }}">
                        <p></p>
                    </div>
                </div>
                <div class="single-feature d-flex flex-row pb-30">
                    <div class="icon">
                        <i class="far fa-check-circle fa-2x text-success"></i>
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">Терминдік мағынасы</h4>
                        <input class="form-control" name="termin" id="termin" value="{{ @$newPrepare->termin }}">
                    </div>
                </div>
                <div class="single-feature d-flex flex-row">
                    <div class="icon">
                        <i class="far fa-check-circle fa-2x text-success"></i>
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">Орфографиясы</h4>
                        <input class="form-control" name="orphography" id="orphography" value="{{ @$newPrepare->orphography }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-feature d-flex flex-row pb-30">
                    <div class="icon">
                        <i class="far fa-check-circle fa-2x text-success"></i>
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">Антонимі</h4>
                        <ul>
                        @foreach ($antonym as $k => $v)
                                <li>{{ $v->title_kz }}</li>
                        @endforeach
                        </ul>
                        <input class="form-control" name="antonym" id="antonym" type="text">
                        <input class="form-control" name="antonymId" id="antonymId" type="hidden">
                    </div>
                </div>
                <div class="single-feature d-flex flex-row pb-30">
                    <div class="icon">
                        <i class="far fa-check-circle fa-2x text-success"></i>
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">Синонимі</h4>
                        <ul>
                            @foreach ($synonym as $k => $v)
                                <li>{{ $v->title_kz }}</li>
                            @endforeach
                        </ul>
                        <input class="form-control" name="synonym" id="synonym" type="text">
                        <input class="form-control" name="synonymId" id="synonymId" type="hidden">
                    </div>
                </div>
                <div class="single-feature d-flex flex-row">
                    <div class="icon">
                        <i class="far fa-check-circle fa-2x text-success"></i>
                    </div>
                    <div class="desc">
                        <h4 class="text-uppercase">Омонимі</h4>
                        <ul>
                            @foreach ($omonym as $k => $v)
                                <li>{{ $v->title_kz }}</li>
                            @endforeach
                        </ul>
                        <input class="form-control" name="omonym" id="omonym" type="text">
                        <input class="form-control" name="omonymId" id="omonymId" type="hidden">
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-3">
        <p><h4>
            Орыс тілінде
        </h4></p><br>
        <p><i class="text-dark">
                <input class="form-control" name="title_ru" id="title_ru" value="{{ @$newPrepare->title_ru }}"> </i>
        </p>
        </div>


        <div class="col-3">
        <p><h4>
            Ағылшын тілінде
        </h4></p><br>
        <p><i class="text-dark">
                <input class="form-control" name="title_en" id="title_en" value="{{ @$newPrepare->title_en }}"> </i>
        </p>
        </div>


        <div class="col-3">
        <p><h4>
            Қытай тілінде
        </h4></p><br>
        <p><i class="text-dark">
                <input class="form-control" name="title_cn" id="title_cn" value="{{ @$newPrepare->title_cn }}"> </i>
        </p>
        </div>


        <div class="col-3">
        <p><h4>
            Түрік тілінде
        </h4></p><br>
        <p><i class="text-dark">
                <input class="form-control" name="title_tr" id="title_tr" value="{{ @$newPrepare->title_tr }}"> </i>
        </p>
        </div>


        <div class="col-3">
        <p><h4>
            Неміс тілінде
        </h4></p><br>
        <p><i class="text-dark">
                <input class="form-control" name="title_de" id="title_de" value="{{ @$newPrepare->title_de }}"> </i>
        </p>
        </div>


        <div class="col-3">
        <p><h4>
            Қырғыз тілінде
        </h4></p><br>
        <p><i class="text-dark">
                <input class="form-control" name="title_kg" id="title_kg" value="{{ @$newPrepare->title_kg }}"> </i>
        </p>
        </div>


        <div class="col-3">
        <p><h4>
            Өзбек  тілінде
        </h4></p><br>
        <p><i class="text-dark">
                <input class="form-control" name="title_uz" id="title_uz" value="{{ @$newPrepare->title_uz }}"> </i>
        </p>
        </div>


        <div class="col-3">
        <p><h4>
            Әзірбайжан  тілінде
        </h4></p><br>
        <p><i class="text-dark">
                <input class="form-control" name="title_az" id="title_az" value="{{ @$newPrepare->title_az }}"> </i>
        </p>
        </div>



        <div class="col-3">
        <p><h4>
            Түркімен тілінде
        </h4></p><br>
        <p><i class="text-dark">
                <input class="form-control" name="title_tm" id="title_tm" value="{{ @$newPrepare->title_tm }}"> </i>
        </p>
        </div>


    </div>
    <div class="pull-right">
        <button type="submit" name="save" value="OK" class="btn btn-primary">Сақтау</button>
    </div>
    <br><br><hr>
</div>


<!-- End feature Area -->

{!! Form::close() !!}
{{--<!-- start footer Area -->
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
<!-- End footer Area -->--}}

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
<script>
    $('#antonym').autocomplete({
        source: '{!! URL::route('autocompleteAntonym') !!}',
        minLenght: 1,
        autoFocus: true,
        select: function (e,ui) {
            $('#antonymId').val(ui.item.id);
        }
    });
    $('#synonym').autocomplete({
        source: '{!! URL::route('autocompleteSynonym') !!}',
        minLenght: 1,
        autoFocus: true,
        select: function (e,ui) {
            $('#synonymId').val(ui.item.id);
        }
    });
    $('#omonym').autocomplete({
        source: '{!! URL::route('autocompleteOmonym') !!}',
        minLenght: 1,
        autoFocus: true,
        select: function (e,ui) {
            $('#omonymId').val(ui.item.id);
        }
    });
</script>

</body>
</html>
