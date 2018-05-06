<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <title>MichWi</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="{{asset('materialize/css/materialize.css')}}"  media="screen,projection"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    </head>
    <body style="background-color: blue;">
        
        <div class="row" style="height: 100%; margin-bottom: 0;">
            <div class="col s6 red darken-3" style="height: 100%;">
                <div>
                    <h2 class="center" style="margin-top:40%; color: white;">Michwi</h2>
                </div>
            </div>
            
            <div class="col s6" style="background-color:white; height: 100%; margin-bottom: 0;">
                <div class="formulario center">
                    <h2 class="center">Login</h2>
                    <div class="row">
                        <div class="container">
                            <form method="POST" action="{{ route('login') }}" class="center">
                                @csrf
                                <div class="form-group row">
                                    <div class="col s1">
                                        <i class="material-icons">account_circle</i>
                                    </div>
                                    <div class="input-field col s11">
                                        <label for="username">Email</label>
                                        <input placeholder="Email" id="email" type="email" name="email" class="validate{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>

                                         @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col s1">
                                        <i class="material-icons" style="margin-top: 30px;">lock</i>
                                    </div>
                                    <div class="input-field col s11">
                                        <input placeholder="Password" id="pass" name="password" type="password" class="validate{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                        <label for="pass">Password</label>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <button class="btn waves-effect waves-light red darken-3" type="submit">Submit
                                  <i class="material-icons right">send</i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>         
           
        <script type="text/javascript" src="{{asset('materialize/js/materialize.js')}}"></script>
    </body>
</html>
