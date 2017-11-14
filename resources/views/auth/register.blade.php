

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/register.css">
    <title>CuniControl | PRrincipal</title>
</head>

<body>
    <div class="contenedor-formulario">
        <div align="center"><img src="{{asset('images/LOGO CUNICONTROL.png')}}" class="user"></div>
        <div class="wrap">
            <form class="formulario" name="formulario_registro" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div align="center"><h2>REGISTRATE A CUNICONTROL</h2></div></br>

                <div class="input-group">
                    <input type="text" style=”text-transform:uppercase;” onkeyup="javascript:this.value=this.value.toUpperCase();" id="curp" name="CURP" value="{{old('CURP')}}">
                    <label class="label" for="curp">CURP:</label>
                    @if ($errors->has('CURP'))
                                    <span style="color:#990000">
                                        <strong>{{ $errors->first('CURP') }}</strong>
                                    </span>
                    @endif
                </div>


                <div class="input-group">
                    <input type="text" id="nombre" name="Nombre_Usuario" onkeypress="return soloLetras(event);" value="{{old('Nombre_Usuario')}}">
                    <label class="label" for="nombre">Nombre:</label>
                    @if ($errors->has('Nombre_Usuario'))
                       <span style="color:#990000">
                           <strong>{{ $errors->first('Nombre_Usuario') }}</strong>
                       </span>
                   @endif
                </div>

                <div class="input-group">
                    <input type="text" id="apellido_paterno" onkeypress="return soloLetras(event);" name="Apellido_Paterno" value="{{old('Apellido_Paterno')}}">
                    <label class="label" for="apellido_paterno">Apellido Paterno:</label>
                    @if ($errors->has('Apellido_Paterno'))
                      <span style="color:#990000">
                           <strong>{{ $errors->first('Apellido_Paterno') }}</strong>
                       </span>
                   @endif
                </div>

                <div class="input-group">
                    <input type="text" id="apellido_materno" onkeypress="return soloLetras(event);" name="Apellido_Materno" value="{{old('Apellido_Materno')}}">
                    <label class="label" for="apellido_materno">Apellido materno:</label>
                    @if ($errors->has('Apellido_Materno'))
                      <span style="color:#990000">
                           <strong>{{ $errors->first('Apellido_Materno') }}</strong>
                       </span>
                   @endif
                </div>



                <div class="input-group">
                    <input type="email" id="correo" name="Correo" value="{{old('Correo')}}">
                    <label class="label" for="correo">Correo Electrónico:</label>
                    @if ($errors->has('Correo'))
                       <span style="color:#990000">
                           <strong>{{ $errors->first('Correo') }}</strong>
                       </span>
                   @endif
                </div>



                <div class="input-group">
                    <br><br><input type="date" id="fecha_nacimiento" name="Fecha_Nacimiento" value="{{old('Fecha_Nacimiento')}}"></br></br>
                    <label class="label" for="fecha_nacimiento">Fecha de nacimiento:</label>
                    @if ($errors->has('Fecha_Nacimiento'))
                      <span style="color:#990000">
                           <strong>{{ $errors->first('Fecha_Nacimiento') }}</strong>
                       </span>
                   @endif
                </div>

                <div class="input-group">
                    <input type="text" id="numero_tel" onkeypress="return solonumeros(event)" name="Telefono" value="{{old('Telefono')}}">
                    <label class="label" for="numero_cel">Número de teléfono:</label>

                     @if ($errors->has('Telefono'))
                        <span style="color:#990000">
                             <strong>{{ $errors->first('Telefono') }}</strong>
                         </span>
                     @endif
                </div>


                <div class="input-group">
                    <input type="text" id="numero_cel" onkeypress="return solonumeros(event)" name="Celular" value="{{old('Celular')}}">
                    <label class="label" for="numero_cel">Número de celular:</label>
                    @if ($errors->has('Celular'))
                         <span style="color:#990000">
                              <strong>{{ $errors->first('Celular') }}</strong>
                         </span>
                    @endif
                </div>



                <div class="input-group">
                    <input type="password" id="pass" name="password">
                    <label class="label" for="tel">Contraseña:</label>
                    @if ($errors->has('password'))
                       <span style="color:#990000">
                           <strong>{{ $errors->first('password') }}</strong>
                       </span>
                   @endif
                </div>



                <div class="input-group">
                    <input type="password" id="pass2" name="password_confirmation">
                    <label class="label" for="pass2">Repetir Contraseña:</label>
                    @if ($errors->has('password_confirmation'))

                            <strong style="color:#990000">{{ $errors->first('password_confirmation') }}</strong>
                   @endif
                </div>



                <div class="input-group radio">
                    <input type="radio" name="Genero" id="hombre" value="H">
                    <label for="hombre">Hombre</label>
                    <input type="radio" name="Genero" id="mujer" value="M">
                    <label for="mujer">Mujer</label>
                    <br>
                    @if ($errors->has('Genero'))
                                   <span style="color:#990000">
                                        <strong>{{ $errors->first('Genero') }}</strong>
                                    </span>
                                @endif
                </div>

                <input type="submit" id="btn-submit" value="Registrarme">
                <a href="{{url('/login')}}">Regresar a inicio</a>

            </form>
        </div>
    </div>
    <script src="js/SoloNumeros.js"></script>
    <script src="js/SoloLetras.js"></script>
    <script src="js/formulario.js"></script>
</body>
</html>
