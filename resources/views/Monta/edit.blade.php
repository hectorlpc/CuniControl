@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
<div class="container">
<form action="{{url('/monta/' . $monta->Id_Monta)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
            <h2>Actualizar Monta</h2>
          <div class="form-group">
            <label for="">Fecha de Monta:</label>
            <input readonly value="{{$monta->Fecha_Monta}}" class="form-control" type="date" name="Fecha_Monta">
          </div>
          <div class="form-group">
            <label for="">Tatuaje Del Macho:</label>
            <input readonly class="form-control" type="text" name="Id_Conejo_Macho" value="{{$monta->Id_Conejo_Macho}}">
          </div>
          <div class="form-group">
            <label for="">Tatuaje De La Hembra:</label>
            <input readonly class="form-control" type="text" name="Id_Conejo_Hembra" value="{{$monta->Id_Conejo_Hembra}}">
          </div>
          <div class="form-group">
            <label for="">Fecha de Diagnóstico: </label>
            <input value="{{$monta->Fecha_Diagnostico}}" class="form-control" type="date" name="Fecha_Diagnostico">
          </div>
          <div class="form-group">
            <label for="">Resultado Diagnóstico: </label>
              <div class="input-group radio">
                <input type="radio" name="Resultado_Diagnostico" value="Positivo" {{$monta->Resultado_Diagnostico == 'Positivo' ? 'checked' : ''}}>
                <label> Positivo </label>
                <input type="radio" name="Resultado_Diagnostico" value="Negativo" {{$monta->Resultado_Diagnostico == 'Negativo' ? 'checked' : ''}} >
                <label> Negativo </label>
            </div>
          <div class="form-group">
            <label for="">Fecha de Parto Aproximado: </label>
            <input value="{{$monta->Fecha_Parto}}" class="form-control" type="date" name="Fecha_Parto">
          </div>
          </div>
          <div align="right">
          <a class="btn btn-outline-secondary" href="{{url('/monta/')}}">Regresar</a>
          <button type="submit" class="btn btn-out-line-primary">Enviar Registro</button>
         
          </div>
        </form>
</div>
@endsection
