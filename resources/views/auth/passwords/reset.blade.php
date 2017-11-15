<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CuniControl | Inicio</title>
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/login.css">
    </head>
    <body>
        <div class="loginBox">
            <img src="{{asset('images/LOGO CUNICONTROL.png')}}" class="user">
            <h2>BIENVENIDO A CUNICONTROL</h2>
                    <form  method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                            <p>E-Mail Address</p>
                              <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <br>
                            <p>Contraseña</p>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          <br>


                            <p>Confirmar Contraseña</p>

                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif

                                <input type="submit" name="" value="Restablecer Contraseña ">
                        </form>
                        <center><a href="{{url('/login')}}">Regresar</a>
                </div>
