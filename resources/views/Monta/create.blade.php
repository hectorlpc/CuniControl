@extends('layouts.Principal')
@section('content')
<div class="container">"
          <form action="{{url('/monta')}}" method="POST">
            {{ csrf_field() }}
            <h2>Registrar Monta</h2>
            
          <div class="form-group">
            <label for="">Fecha de Monta</label>
            <input type="date" class="form-control" name="Fecha_Monta" id="" placeholder="Introduce la monta">

          </div>
          <div class="form-group">
            <label for="">Tatuaje Macho</label>
            <select class="" name="Id_Conejo_Macho">
              @foreach($conejos as $conejo)
                @if($conejo->Genero == 'Macho') 
                  <option value="{{$conejo->Id_Conejo}}">{{$conejo->Id_Conejo}}</option>
                @endif
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="">Tatuaje Hembra</label>
            <select class="" name="Id_Conejo_Hembra">
              @foreach($conejos as $conejo)
                @if($conejo->Genero == 'Hembra')
                  <option value="{{$conejo->Id_Conejo}}">{{$conejo->Id_Conejo}}</option>
                @endif
              @endforeach
            </select>
          </div>
          <button type="submit" class="btn btn-out-line-primary">Enviar Registro</button>
        </form>
</div>
@endsection