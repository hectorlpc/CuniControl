@extends('layouts.Principal')
@section('content')
    <section class="contenedorPrincipal">
      <div class="container">
        <center><h2>Registro De Coneja Productora:</h2></center>
    </br>
<form action="{{url('/productora/' . $productora->Id_Productora)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
          <div class="form-group" >
            <label>Número de tatuaje de la coneja:</label>
            <input readonly class="form-control" type="text" name="Id_Conejo_Hembra" value="{{$productora->Id_Conejo_Hembra}}">
          </div>
          <div class="form-group">
            <label for="Coneja_Productora">Código de conejo:</label>
            <input class="form-control" name="Numero_Conejo" value="{{$productora->Numero_Conejo}}">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>
</form>
      </div>

    </section>

@endsection
