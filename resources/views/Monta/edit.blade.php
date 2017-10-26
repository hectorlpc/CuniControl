@extends('layouts.Principal')
@section('content')
<div class="container">"
<form action="{{url('/monta/' . $monta->Id_Monta)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
            <h2>Actualizar Monta</h2>
          <div class="form-group">
            <label for="">Fecha de Monta</label>
            <input readonly value="{{$monta->Fecha_Monta}}" class="form-control" type="date" name="Fecha_Monta" min="2000-01-01" max="2050-01-01" step="1">
          </div>
          <div class="form-group">
            <label for="">Tatuaje Macho</label>
            <input readonly class="form-control" type="text" name="Id_Conejo_Macho" value="{{$monta->Id_Conejo_Macho}}">
          </div>
          <div class="form-group">
            <label for="">Tatuaje Hembra</label>
            <input readonly class="form-control" type="text" name="Id_Conejo_Hembra" value="{{$monta->Id_Conejo_Hembra}}">
          </div>
          <div class="form-group">
            <label for="">Fecha de Diagnostico: </label>
            <input value="{{$monta->Fecha_Diagnostico}}" class="form-control" type="date" name="Fecha_Diagnostico" min="2000-01-01" max="2050-01-01" step="1">          
          </div>
          <div class="form-group">
            <label for="">Resultado Diagnostico: </label>
              <div class="input-group radio">
                <input type="radio" name="Resultado_Diagnostico" value="Positivo">
                <label> Positivo </label>
                <input type="radio" name="Resultado_Diagnostico" value="Negativo">
                <label> Negativo </label>
            </div>
          <div class="form-group">
            <label for="">Fecha de Parto Aprox: </label>
            <input value="{{$monta->Fecha_Parto}}" class="form-control" type="date" name="Fecha_Parto">
          </div>            
          </div>
          <button type="submit" class="btn btn-out-line-primary">Enviar Registro</button>
        </form>
  <a href="{{url('/monta/')}}">Regresar</a>        
</div>
@endsection