@extends('layouts.Principal')
@section('content')
<label for="destete">SUPERVISION DE PARTO</label>

<div class="container">

<form action="/my-handling-form-page" method="post">
    <div class="form-group">
            <label for="exampleInputPassword2">Numero de tatuaje de la madre:</label>
          <select class="form-control" name="Tatuaje_Hembra">
            @foreach($conejos as $conejo)
              @if($conejo->Genero == 'Hembra')              
                <option value="{{$conejo->Id_Conejo}}">{{$conejo->Id_Conejo}}</option>
              @endif
            @endforeach
            </select>
    </div>
    <div>
        <label for="parto">Numero de parto:</label>
        <input class="form-control" name="parto" type="text" >
    </div>
    
    <div>
        <label for="fecha">Fecha de parto:</label>
        <input class="form-control" name="Fecha_Parto" type="date" >
</div>
    <div>
        <label for="fecha">Fecha de monta:</label>
        <input class="form-control" name="Fecha_Monta" type="date" >
</div>

    <div>
        <label for="cant_vivos">Cantidad de gazapos vivos:</label>
        <input class="form-control" name="Vivos" type="text" >
    </div>

    <div>
        <label for="cant_muertos">Cantidad de gazapos muertos:</label>
        <input class="form-control" name="Muertos" type="text" >
    </div>

    <div>
        <label for="peso">Peso promedio al nacer:</label>
        <input class="form-control" name="Peso_Nacer" type="text" >
</div>
    <br>
    <button type="submit" class="btn btn-outline-primary">Agregar</button>
    <button type="submit" class="btn btn-outline-secondary">Regresar</button>

</form>
</div>
@endsection
