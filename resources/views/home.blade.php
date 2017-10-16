<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Principal</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif

                    Bienvenido a Cunicontrol
                </div>
            </div>          
        </div>
    </div>
</div>
@endsection
 -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CuniControl | Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu vertical</title>
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/estilos.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/fomato2.css">
  </head>
  <body>

    <header class="menuHorizontal">

      <div class="botonMenu"></div>
      <figure>
        <img src="{{asset('images/cuni.jpg')}}" alt="">
      </figure>

    </header>

    <section class="contenedorPrincipal">


    </section>

    <nav class="menuNavegacion">

      <div class="contenedor-menu">
          <a href="#" class="btn-menu">Menu<i class="icono fa fa-bars" aria-hidden="true"></i></a>
          <ul class="menu">
              <li><a href="#"><i class="icono izquierda fa fa-home" aria-hidden="true"></i>Inicio</a></li>
              <li><a href="#"><i class="icono izquierda fa fa-male" aria-hidden="true"></i>Roles<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul class="scroll">
                  <li><a href='#'>Administrador</a></li>
                  <li><a href='#'>Alumno</a></li>
                  <li><a href='#'>Profesor</a></li>
                  <li><a href='#'>Profesor Encargado</a></li>
                  <li><a href='#'>Encargado de Modulo</a></li>
                  <li><a href='#'>Jefe CEA</a></li>
                  <li><a href='#'>Encargado Taller de Carnes</a></li>
                  <li><a href='#'>Encargado Incinerador</a></li>
                  <li><a href='#'>Proveedor de Medicamento</a></li>
                  <li><a href='#'>Proveedor de Paja</a></li>
                  </ul>
              </li>
              <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Actividades<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul class="scroll">
                    <li> <a href="equipo_agr.php">Registrar baja de conejos por transferencia</a> </li>
                    <li> <a href="equipo_agr.php">Gestionar roles</a> </li>

                    <li> <a href="facultad_agr.php">Solicitar horas practicas </a> </li>
                    <li> <a href="facultad_elim.php">Registrar practica</a> </li>
                    <li> <a href="facultad_mod.php">Inscripción a cursos </a> </li>
                    <li> <a href="facultad_mod.php">Registra tatuado de conejos </a> </li>
                    <li> <a href="facultad_mod.php">Supervisión de la monta</a> </li>
                    <li> <a href="facultad_mod.php">Realiza diagnostico de gestación</a> </li>
                    <li> <a href="facultad_mod.php">Supervisión de la gestación</a> </li>
                    <li> <a href="facultad_mod.php">Supervisión del parto</a> </li>
                    <li> <a href="facultad_mod.php">Registro de destete de gazapos</a> </li>
                    <li> <a href="facultad_mod.php">Registro de donación de conejos</a> </li>
                    <li> <a href="facultad_mod.php">Registro de conejo enfermo</a> </li>

                    <li> <a href="equipo_agr.php">Verificar horas de alumno</a> </li>

                    <li> <a href="solicitud_agr.php">Validar practica</a> </li>
                    <li> <a href="solicitud_agr.php">Censo de engorda</a> </li>
                    <li> <a href="solicitud_agr.php">Censo de muerte</a> </li>
                    <li> <a href="solicitud_agr.php">Programa montas</a> </li>

                    <li> <a href="investigador_agr.php">Autorizar horas practicas</a> </li>
                    <li> <a href="investigador_elim.php">Abrir cursos</a> </li>
                    <li> <a href="investigador_mod.php">Calendarizar Actividades</a> </li>
                    <li> <a href="investigador_mod.php">Realizar solicitud de compra de insumos</a> </li>
                    <li> <a href="investigador_mod.php">Realizar solicitud de transferencia al taller de carnes</a> </li>
                    <li> <a href="investigador_mod.php">Realizar solicitud de incineracion</a> </li>
                    <li> <a href="investigador_mod.php">Realizar censo de produccion</a> </li>

                    <li> <a href="solicitud_agr.php">Autoriza solicitud de horas</a> </li>
                    <li> <a href="solicitud_agr.php">Realiza requerimiento de compra</a> </li>

                    <li> <a href="Consulta1.php">Revisar numero de conejos transferidos</a> </li>

                    <li> <a href="Consulta1.php">Revisar numero de conejos transferidos</a> </li>

                    <li> <a href="Consulta1.php">Revisar numero medicamento solicitado</a> </li>

                    <li> <a href="Consulta1.php">Revisar numero de paja solicitada </a> </li>
                  </ul>
                    <li><a href="#"><i class="icono izquierda fa fa-address-card-o" aria-hidden="true"></i>Perfil</a></li>
                    
                    <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                      <i class="icono izquierda fa fa-address-card-o" aria-hidden="true"></i>Cerrar sesión</a>
                    </li>

                  </ul>
              </li>
          </ul>

      </div>


    </body>
    </nav>

    <footer class="pieDePagina">

    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices)
     -->     
     <script src="file:///var/www/html/SistemaUniversidad/index3.html"></script>
    <script src="js/jquery.js"></script>
  </body>
</html>
