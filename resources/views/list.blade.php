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

        <!--============================================= -->
        <link rel="stylesheet" href="/css/all.css">
        <link rel="stylesheet" href="/css/regular.css">
        <link rel="stylesheet" href="/css/fontawesome.css">
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
    <body>
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


        <!-- start banner Area -->
        <section class="relative" id="home">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12">

                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <td>Сөз</td>
                                <td>Әрекет</td>
                            </tr>
                            @foreach ($words as $word)
                                <tr>
                                    <td><p>{{ $word->title_kz }}</p></td>
                                    <td><a href="/edit/{{ $word->id }}" class="btn btn-info">Түзету</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $words->links() }}
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

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
