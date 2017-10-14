@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>


                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('CURP') ? ' has-error' : '' }}">
                            <label for="CURP" class="col-md-4 control-label">CURP</label>

                            <div class="col-md-6">
                                <input id="CURP" type="text" class="form-control" name="CURP" value="{{ old('CURP') }}" required autofocus>

                                @if ($errors->has('CURP'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('CURP') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Nombre_Usuario') ? ' has-error' : '' }}">
                            <label for="Nombre_Usuario" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="Nombre_Usuario" type="text" class="form-control" name="Nombre_Usuario" value="{{ old('Nombre_Usuario') }}" required autofocus>

                                @if ($errors->has('Nombre_Usuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Nombre_Usuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Apellido_Paterno') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Apellido paterno</label>

                             <div class="col-md-6">
                                <input type="text" class="form-control" name="Apellido_Paterno" value="{{ old('Apellido_Paterno') }}">

                                @if ($errors->has('Apellido_Paterno'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('Apellido_Paterno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Apellido_Materno') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Apellido materno</label>

                             <div class="col-md-6">
                                <input type="text" class="form-control" name="Apellido_Materno" value="{{ old('Apellido_Materno') }}">

                                @if ($errors->has('Apellido_Materno'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('Apellido_Materno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Correo') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo electrónico</label>

                            <div class="col-md-6">
                                <input id="Correo" type="email" class="form-control" name="Correo" value="{{ old('Correo') }}" required>

                                @if ($errors->has('Correo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Correo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Genero') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Género</label>

                             <div class="col-md-6">
                                <input type="text" class="form-control" name="Genero" value="{{ old('Genero') }}">

                                @if ($errors->has('Genero'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('Genero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Fecha_Nacimiento') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label"> Fecha de nacimiento</label>

                             <div class="col-md-6">
                                <input type="text" class="form-control" name="Fecha_Nacimiento" value="{{ old('Fecha_Nacimiento') }}">

                                @if ($errors->has('Fecha_Nacimiento'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('Fecha_Nacimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Telefono') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Teléfono</label>

                             <div class="col-md-6">
                                <input type="text" class="form-control" name="Telefono" value="{{ old('Telefono') }}">

                                @if ($errors->has('Telefono'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('Telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Celular') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Celular</label>

                             <div class="col-md-6">
                                <input type="text" class="form-control" name="Celular" value="{{ old('Celular') }}">

                                @if ($errors->has('Celular'))
                                   <span class="help-block">
                                        <strong>{{ $errors->first('Celular') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('Contrasena') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="Contrasena" type="password" class="form-control" name="Contrasena" required>

                                @if ($errors->has('Contrasena'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Contrasena') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="confirm-password" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="confirm-password" type="password" class="form-control" name="confirm-password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarme
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
