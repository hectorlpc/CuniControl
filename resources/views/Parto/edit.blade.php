@extends('layouts.Principal')
@extends('layouts.menu')
@section('content')

<div class="container">
  <center><h2>Supervision de Parto</h2></center>
<form action="{{url('/parto/' . $parto->Id_Parto)}}" method="POST" role="form">
      {{method_field('patch')}}
      {{ csrf_field() }}
    <div class="form-group">
            <label for="exampleInputPassword2">Numero de tatuaje de la madre:</label>
                <input readonly class="form-control" type="text" name="Id_Parto" value="{{$parto->Id_Monta}}">
    </div>
    <div>
        <label for="fecha">Fecha de monta:</label>
            <input readonly value="{{$parto->Fecha_Monta}}" class="form-control" type="date" name="Fecha_Monta">
    </div>
    <div>
        <label for="fecha">Fecha de parto:</label>
            <input readonly value="{{$parto->Fecha_Parto}}" class="form-control" type="date" name="Fecha_Parto" min="2000-01-01" max="2050-01-01" step="1">
    </div>
    <div>
        <label for="cant_vivos">Cantidad de gazapos vivos:</label>
            <input value="{{$parto->Numero_Vivos}}" class="form-control" type="text" name="Numero_Vivos">
    </div>
    <div>
        <label for="cant_muertos">Cantidad de gazapos muertos:</label>
            <input value="{{$parto->Numero_Muertos}}" class="form-control" type="text" name="Numero_Muertos">
    </div>

    <div>
        <label for="peso">Peso promedio al nacer:</label>
            <input value="{{$parto->Peso_Nacer}}" class="form-control" type="text" name="Peso_Nacer">
</div>
    <br>
    <div align="right">
    <button type="submit" class="btn btn-outline-primary">Actualizar</button>
    <button type="submit" class="btn btn-outline-secondary">Regresar</button>
    </div>
</form>
</div>
@endsection
