<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" type="text/css" href="css/aos.css">

    <link rel="stylesheet" type="text/css" href="css/style.css">
   
    <title>English Premier League</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
    </head>
<body>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=667086603702394&autoLogAppEvents=1"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=667086603702394&autoLogAppEvents=1"></script>

<div class="site-wrap">

<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-logo">
      <a href="/home""><img src="images/logo.png" alt="Image"></a>
    </div>
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar absolute transparent" role="banner">
  <div class="py-3">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-6 col-md-9 text-right">
        </div>
      </div>
    </div>
  </div>
  <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
    <div class="container position-relative">
      <div class="site-logo">
        <a href="/home"><img src="images/logo.png" alt=""></a>
      </div>

      <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

      <ul class="site-menu js-clone-nav d-none d-md-block">
        <li class="has-children active"><li><a href="/welcome">Home</a></li>
        <li>
                    <a href="/games">Fixtures</a>
                </li>
                <li>
                    <a href="/teams">Teams</a>
                </li>
                <li>
                    <a href="/table">Table</a>
                </li>
                <li>
                    <a href="/login">Admin</a>
                </li>
    
      </ul>
    </div>
  </nav>
</header>

    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
