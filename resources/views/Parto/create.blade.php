@extends('layouts.Principal')
@section('content')
<label for="destete">SUPERVISION DE PARTO</label>

<div class="container">

<form action="{{url('/parto')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
            <label for="exampleInputPassword2">Numero de tatuaje de la madre:</label>
          <select class="" name="Id_Monta">
            @foreach($montas as $monta)              
                <option value="{{$monta->Id_Monta}}">{{$monta->Id_Conejo_Hembra}}</option>
            @endforeach
            </select>
    </div>
    <div>
        <label for="fecha">Fecha de parto:</label>
        <input class="form-control" name="Fecha_Parto" type="date" value="{{$monta->Fecha_Parto}}" >
    </div>

    <div>
        <label for="cant_vivos">Cantidad de gazapos vivos:</label>
            <select class="form-control" name="Numero_Vivos">
              <option value="01">0</option>
              <option value="01">1</option>
              <option value="02">2</option>
              <option value="03">3</option>
              <option value="04">4</option>
              <option value="05">5</option>
              <option value="06">6</option>
              <option value="07">7</option>
              <option value="08">8</option>
              <option value="09">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
    </div>

    <div>
        <label for="cant_muertos">Cantidad de gazapos muertos:</label>
            <select class="form-control" name="Numero_Muertos">
              <option value="00">0</option>
              <option value="01">1</option>
              <option value="02">2</option>
              <option value="03">3</option>
              <option value="04">4</option>
              <option value="05">5</option>
              <option value="06">6</option>
              <option value="07">7</option>
              <option value="08">8</option>
              <option value="09">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
            </select>
    </div>

    <div>
        <label for="peso">Peso promedio al nacer:</label>
        <select class="form-control" name="Peso_Nacer">        
           <option value="0.010">0.010</option>
           <option value="0.020">0.020</option>
           <option value="0.030">0.030</option>
           <option value="0.040">0.040</option>
           <option value="0.050">0.050</option>
           <option value="0.060">0.060</option>
           <option value="0.070">0.070</option>
           <option value="0.080">0.080</option>
           <option value="0.090">0.090</option>
           <option value="0.100">0.100</option>       
        </select>
    </div>
    <br>
    <button type="submit" class="btn btn-outline-primary">Agregar</button>
    <button type="submit" class="btn btn-outline-secondary">Regresar</button>

</form>
</div>
@endsection
