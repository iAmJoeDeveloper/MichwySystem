<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Registro</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}"  media="screen,projection"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    </head>
    <body style="background-color: blue;">
        
        <div class="row" style="height: 100%; margin-bottom: 0;">
            <div class="col s6 pink darken-1" style="height: 100%;">
                <div>
                    <h2 class="center" style="margin-top:40%; color: white;">Michwi</h2>
                </div>
            </div>
            
            <div class="col s6" style="background-color:white; height: 100%; margin-bottom: 0;">
                <div class="formulario center">
                    <h2 class="center">Login</h2>
                    <div class="row">
                        <div class="container">
                            <form method="POST" action="{{ route('register') }}" class="center">
                                @csrf
                                <div class="form-group row">
                                    <div class="col s1">
                                        <i class="material-icons" style="margin-top: 30px;">face</i>
                                    </div>
                                    <div class="input-fiel col s11">
                                        <input placeholder="Name" type="text" name="name">        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col s1">
                                        <i class="material-icons" style="margin-top: 30px;">local_post_office</i>
                                    </div>
                                    <div class="input-field col s11">
                                        <input placeholder="Email" id="email" type="email" name="email" class="validate{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>

                                         @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                </div>


                               <div class="form-group row">
                                    <div class="col s1 ">
                                        <i class="material-icons" style="margin-top: 30px;">lock</i>
                                    </div>
                                    <div class="input-field col s11">
                                         <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                         @if ($errors->has('password'))
                                          <span class="invalid-feedback">
                                           <strong>{{ $errors->first('password') }}</strong>
                                         </span>
                                         @endif
                                    </div>
                               </div>

                               <div class="form-group row">
                                  <div class="col s1">
                                        <i class="material-icons" style="margin-top: 30px;">lock</i>
                                  </div>

                                  <div class="input-field col s11">
                                       <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                                  </div>
                               </div>

                                <button class="btn waves-effect waves-light pink darken-1" type="submit">Submit
                                  <i class="material-icons right">send</i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>         
           
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
