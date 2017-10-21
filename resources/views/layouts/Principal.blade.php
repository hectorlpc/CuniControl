<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CuniControl | Principal</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu vertical</title>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formato2.css') }}">

  </head>
  <body>

    <header class="menuHorizontal">

      <div class="botonMenu"></div>
      <figure>
        <img src="{{asset('images/cuni.jpg')}}" alt="">
      </figure>

    </header>

    <section class="contenedorPrincipal">
      @yield('content')

    </section>

    <nav class="menuNavegacion">

      <div class="contenedor-menu">
          <a href="#" class="btn-menu">Menu<i class="icono fa fa-bars" aria-hidden="true"></i></a>
          <ul class="menu">
              <li><a href="{{url('/home')}}"><i class="icono izquierda fa fa-home" aria-hidden="true"></i>Inicio</a></li>
              <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Perfil<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul>
                    <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Salir
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </li>
                  </ul>
              </li>
              <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Alumno<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul>
                    <li> <a href="{{url('/horas/create')}}">Solicitar horas practicas </a> </li>                    
                    <li> <a href="{{url('/monta/create')}}">Supervisión de la monta</a> </li>                    
                    <li> <a href="{{url('/gestacion/create')}}">Realiza diagnostico de gestación</a> </li>
                    <li> <a href="">Supervisión de la gestación</a> </li>
                    <li> <a href="{{url('/parto/create')}}">Supervisión del parto</a> </li>                    
                    <li> <a href="{{url('/destete/create')}}">Registro de destete de gazapos</a> </li>
                    <li> <a href="{{url('/tatuaje/create')}}">Registra tatuado de conejos </a> </li>                                        
                    <li> <a href="{{url('/donacion/create')}}">Registro de donación de conejos</a> </li>
                    <li> <a href="{{url('enfermo/create')}}">Registro de conejo enfermo</a> </li>                    
                    <li> <a href="equipo_agr.php">Registrar baja de conejos por transferencia</a> </li>
<!--                     <li> <a   href="">Registrar practica</a> </li>
                    <li> <a href="">Inscripción a cursos </a> </li>                    
 -->                  </ul>
                </li>
                    <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Administrador<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul>
                          <li> <a href="equipo_agr.php">Gestionar roles</a> </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Encargado Modulo<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul>
                          <li> <a href="">Validar practica</a> </li>
                          <li> <a href="">Abrir cursos</a> </li>
                          <li> <a href="">Calendarizar Actividades</a> </li>
                          <li> <a href="">Realizar solicitud de transferencia al taller de carnes</a> </li>
                          <li> <a href="">Realizar solicitud de incineracion</a> </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Profesor Encargado<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                        <ul>
                          <li> <a href="">Programa montas</a> </li>
                          <li> <a href="">Censo de engorda</a> </li>
                          <li> <a href="">Censo de muerte</a> </li>
                          <li> <a href="">Autorizar horas practicas</a> </li>
                          <li> <a href="">Gestionar roles</a> </li>
                        </ul>
                    </li>

                  </ul>
      </div>


    </body>
    </nav>

    <footer class="pieDePagina">
      <p>Copyleft @ 2017 UNAM</p>
      <p>Desarrollado por BitBox Systems</p>

    </footer>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
