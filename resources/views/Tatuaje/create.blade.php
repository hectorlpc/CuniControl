
@extends('layouts.Principal')
@section('content')

      <div class="container">
        <h2>TATUADO DE CONEJOS:</h2>
          <form method="POST" action="{{url('/tatuaje')}}">
            {{csrf_field()}}
          <div class="form-group">

            <label for="exampleInputPassword2">Numero de tatuaje de la madre:</label>
            <select class="form-control" name="Id_Conejo_Hembra">
            @foreach($partos as $parto)              
              <option value="{{$parto->monta->Id_Conejo_Hembra}}">{{$parto->monta->Id_Conejo_Hembra}}</option>
            @endforeach              
            </select>
          <input hidden type="text" name="Numero_Conejo" value="{{$parto->monta->conejo->productora->Numero_Conejo}}">
          <input hidden value="{{$parto->monta->conejo->Id_Raza}}" name="Id_Raza">
          </div>
          <div>
            <label for="exampleInputPassword2">Fecha de Parto:</label>
            <input value="{{$parto->Fecha_Parto}}" class="form-control" type="date" name="Fecha_Nacimiento">
          </div>
          <br>          
          <div class="form-group">
            <label for="exampleInputPassword2">Genero:</label>
            <input type="radio" name="Genero" value="Macho" /> Macho
            <input type="radio" name="Genero" value="Hembra" /> Hembra
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Status:</label>
            <input type="radio" name="Status" value="Vivo" /> Vivo
            <input type="radio" name="Status" value="Muerto" /> Muerto
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Consecutivo de conejo:</label>
          <select class="form-control" name="Consecutivo">
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
        </br>
          <button type="submit" class="btn btn-outline-primary">Registrar</button>

      </form>
      </div>
@endsection


