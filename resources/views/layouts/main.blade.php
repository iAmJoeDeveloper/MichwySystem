<!DOCTYPE html>
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
     		<a href="#" class="brand-logo">Michwy</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><a href="{{ url('/') }}">Inicio</a></li>
	        <li><a href="badges.html">Components</a></li>
	        <li><a href="#">{{ Auth::user()->name }}</a></li>

	        <li><a href="#" class="dropdown-trigger" data-target='dropdown1'>
	        	<i class="material-icons">arrow_drop_down</i></a>
	        </li>
	        <ul id="dropdown1" class="dropdown-content">
	        	<li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>
							 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
	        </ul>

        </ul>
  	  </div>
   </nav>
	</header>
	<h1>Este es el main!!</h1>


	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

  $('.dropdown-trigger').dropdown();
	</script>
</body>