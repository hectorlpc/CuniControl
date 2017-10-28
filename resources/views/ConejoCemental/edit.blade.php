@extends('layouts.Principal')
@section('content')
    <section class="contenedorPrincipal">
      <div class="container">
        <center><h2>Actualizar cemental:</h2></center>
    </br>
<form action="{{url('/cemental/' . $cemental->Id_Cemental)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
          <div class="form-group" >
            <label>Número de tatuaje del cemental:</label>
            <input readonly class="form-control" type="text" name="Id_Conejo_Macho" value="{{$cemental->Id_Conejo_Macho}}">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>
</form>
      </div>

    </section>

@endsection
