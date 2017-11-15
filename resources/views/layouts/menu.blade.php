@section('menu')
<div class="contenedor-menu">
    <a href="#" class="btn-menu">Menu<i class="icono fa fa-bars" aria-hidden="true"></i></a>
    <ul class="menu">
        <li><a href="{{url('/home')}}"><i class="icono izquierda fa fa-home" aria-hidden="true"></i>Inicio</a></li>
@if(Auth::user()->tieneRol('ROLADM'))

              <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Administrador<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul>
                    <li> <a href="{{url('/cuentas/')}}">Gestionar roles</a> </li>
                  </ul>
              </li>
@endif        
@if(Auth::user()->tieneRol('ROLALU'))
        <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>
          Alumno<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
            <ul>
              <li> <a href="{{url('/solicitudHoras')}}">Solicitar horas practicas </a> </li>
              <li> <a href="{{url('/horas')}}">Registro de horas cumplidas </a> </li>
              <li> <a href="{{url('/alumno/create')}}">Completa tus datos personales</a> </li>
              <li> <a href="{{url('/alumno/edit')}}">Actualiza tus datos personales</a> </li>
          </ul>
          </li>
@endif
@if(Auth::user()->tieneRol('ROLPRO'))

           <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Producción<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
            <ul>
              <li> <a href="{{url('/monta/')}}">Supervisión de la monta</a> </li>
              <li> <a href="{{url('/parto/')}}">Supervisión del parto</a> </li>
              <li> <a href="{{url('/destete/')}}">Registro de destete de gazapos</a> </li>
              <li> <a href="{{url('/tatuaje/')}}">Registra tatuado de conejos </a> </li>
              <li> <a href="{{url('/donacion/')}}">Registro de donación de conejos</a> </li>
              <li> <a href="{{url('/enfermo/')}}">Registro de conejo enfermo</a> </li>
              <li> <a href="{{url('/transferencia/')}}">Registrar baja de conejos por transferencia</a> </li>
           </ul>
          </li>
@endif
@if(Auth::user()->tieneRol('ROLEMO'))
              <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Encargado Modulo<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul>
                    <li> <a href="{{url('/cemental/')}}">Registro de conejos sementales</a> </li>

                    <li> <a href="{{url('/productora/')}}">Registro de conejas productoras</a> </li>
                    <li> <a href="{{url('/jaula/')}}">Registro de Jaulas</a> </li>
                    <li> <a href="{{url('/area/')}}">Registro Areas De Destino</a> </li>
                    <li> <a href="{{url('/carrera/')}}">Registro de Carreras</a> </li>
                    <li> <a href="{{url('/adquisicion/')}}">Registro de Tipo de Adquisicion</a> </li>
                    <li> <a href="{{url('/raza/')}}">Registro de Raza</a> </li>
                    <li> <a href="{{url('/adquirido/')}}">Registro de Conejo Adquirido</a> </li>
                    <li> <a href="{{url('/enfermedad/')}}">Registro de Enfermedad</a> </li>
                    <li> <a href="{{url('/medicamento/')}}">Registro de Medicamentos</a>
                   </li>
                  </ul>
              </li>
@endif
@if(Auth::user()->tieneRol('ROLPEN'))
              <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Profesor Encargado<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul>
                    <li> <a href="">Validar practica</a> </li>
                    <li> <a href="">Realizar solicitud de incineracion</a> </li>
                    <li> <a href="{{url('/engorda/')}}">Censo de engorda</a> </li>
                    <li> <a href="{{url('/baja/')}}">Censo de muerte</a> </li>
                    <li> <a href="{{url('/desecho/')}}">Censo de desecho</a> </li>
                    <li> <a href="">Autorizar horas practicas</a> </li>
                  </ul>
              </li>
@endif

@if(Auth::user()->tieneRol('ROLPRF'))
              <li><a href="#"><i class="icono izquierda fa fa-clone" aria-hidden="true"></i>Profesor<i class="icono derecha fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul>
                    <li> <a href="{{url('/grupo/')}}">Registro de Grupos</a> </li>
                    <li> <a href="{{url('/materia/')}}">Registro de Materias</a> </li>
                  </ul>
              </li>
@endif
              <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><i class="icono izquierda fa fa-lock" aria-hidden="true"></i>
                    Cerrar Sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
              </li>
              <li><a href="{{url('/acercaDe')}}"><i class="icono izquierda fa fa-address-card-o" aria-hidden="true"></i>Acerca de</a></li>
            </ul>

</div>
@endsection
