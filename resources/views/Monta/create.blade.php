@extends('layouts.Principal')
@section('content')
<div class="container">
          <form>
            <h2>Registro Montas</h2>
          <div class="form-group">
            <label for="">Fecha de Monta</label>
            <input type="date" class="form-control" id="" placeholder="Introduce la monta">

          </div>
          <div class="form-group">
            <label for="">Tatuaje Macho</label>
            <select class="" name="TatuajeM">
              @foreach($conejos as $conejo)
              <option value="{{$conejo->Id_Conejo}}">{{$conejo->Id_Conejo}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="">Tatuaje Hembra</label>
            <select class="" name="TatuajeH">
              @foreach($conejos as $conejo)
              <option value="{{$conejo->Id_Conejo}}">{{$conejo->Id_Conejo}}</option>
              @endforeach
            </select>
          </div>

          <button type="submit" class="btn btn-out-line-primary">Enviar Registro</button>
        </form>
</div>
@endsection
