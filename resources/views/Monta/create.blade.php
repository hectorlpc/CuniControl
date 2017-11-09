@extends('layouts.Principal')
@extends('layouts.menu')
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
            <label for="">Tatuaje Hembra Productora:</label>
            <select class="form-control" name="Id_Conejo_Hembra" id="coneja">
              <option> -- Seleccione los tatuajes del conejo -- </option>
              @foreach($productoras as $productora)
                  <option value="{{$productora->Id_Conejo_Hembra}}">{{$productora->Id_Conejo_Hembra}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="">Tatuaje Semental:</label>
            <select class="form-control" name="Id_Conejo_Macho" id="sementales">
            </select>
          </div>
          <div align="right">
            <button type="submit" class="btn btn-outline-primary">Enviar Registro</button>
            <a class="btn btn-outline-secondary" href="{{url('/monta/')}}">Regresar</a>
          </div>
        </form>
</div>
@endsection
