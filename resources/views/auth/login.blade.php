@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio de sesion</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('CUP') ? ' has-error' : '' }}">
                            <label for="CURP" class="col-md-4 control-label">CURP</label>

                            <div class="col-md-6">
                                <input id="CURP" type="name" class="form-control" name="CURP" value="{{ old('CURP') }}" required autofocus>

                                @if ($errors->has('CURP'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('CURP') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Contrasena') ? ' has-error' : '' }}">
                            <label for="Contrasena" class="col-md-4 control-label">Contraseña</label>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuérdame
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Iniciar sesión   
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
