@extends('layouts.Principal')
@section('content')
<div class="container">"
          <form action="{{url('/monta')}}" method="POST">
            {{ csrf_field() }}
            <h2>Registrar Monta</h2>
            
          <div class="form-group">
            <label for="">Fecha de Monta</label>
            <input type="date" class="form-control" name="Fecha_Monta" placeholder="Introduce la monta">

          </div>
          <div class="form-group">
            <label for="">Tatuaje Cemental:</label>
            <select class="form-control" name="Id_Conejo_Macho">
              @foreach($cementales as $cemental)
                  <option value="{{$cemental->Id_Conejo_Macho}}">{{$cemental->Id_Conejo_Macho}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="">Tatuaje Hembra Productora:</label>
            <select class="form-control" name="Id_Conejo_Hembra">
              @foreach($productoras as $productora)
                  <option value="{{$productora->Id_Conejo_Hembra}}">{{$productora->Id_Conejo_Hembra}}</option>
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-out-line-primary">Enviar Registro</button>
        </form>
  <a href="{{url('/monta/')}}">Regresar</a>        
</div>
@endsection