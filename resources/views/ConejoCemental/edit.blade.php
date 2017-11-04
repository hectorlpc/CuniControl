@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')
      <div class="container">
        <center><h2>Actualizar Semental:</h2></center>
    </br>
<form action="{{url('/cemental/' . $cemental->Id_Cemental)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
          <div class="form-group" >
            <label>Tatuaje del Semental:</label>
            <input readonly class="form-control" type="text" name="Id_Conejo_Macho" value="{{$cemental->Id_Conejo_Macho}}">
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Registrar</button>
</form>
      </div>
@endsection
