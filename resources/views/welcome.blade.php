<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
</head>
<body>
  <header>
    <nav class="pink darken-1">
      <div class="nav-wrapper">
        @if (Route::has('login'))
        <a href="#" class="brand-logo">Michwy</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          @auth
          <li><a href="{{ url('/main') }}">Main</a></li>
          @else
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Registro</a></li>
          @endauth
        </ul>
        @endif
      </div>
   </nav>
  </header>

   <div class="carousel carousel-slider center">
    <div class="carousel-fixed-item center">
      <a class="btn waves-effect white grey-text darken-text-2">button</a>
    </div>
    <div class="carousel-item pink lighten-2 black-text" href="#one!">
      <h2>Bienvenido a Michwy</h2>
      <p class="white-text">This is your..</p>
    </div>
  </div>
  
  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  <script>

  // Or with jQuery

  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
  </script>
</body>
</html>
