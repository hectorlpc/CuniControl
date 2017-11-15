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

                    @if (session('status'))
                        <div style="color:green">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->has('email'))
                        <span style="color:red">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <form  method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                            <p for="email">Correo</p>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            <input type="submit" name="" value="Enviar Correo ">
                    </form>
                    <center><a href="{{url('/login')}}">Regresar</a>
            </div>
          </body>
        </html>
