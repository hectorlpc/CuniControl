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
            @if (session('warning'))
              <div style="color:red">
                {{ session('warning') }}
              </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <p>CURP</p>
                <input type="text" name="CURP" placeholder="Ingresa CURP">
                <p>Contraseña</p>
                <input type="Password" name="password" placeholder="••••••">
                <input type="submit" name="" value="Iniciar">
                <a href="{{url('/register')}}">¿Aún no tienes cuenta? Registrate aquí</a>
                <center><a href="{{url('/password/reset')}}">¿Olvidaste tu contraseña?</a>

            </form>
        </div>
    </body>
</html>
