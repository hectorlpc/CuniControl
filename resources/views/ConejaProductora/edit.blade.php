@extends('layouts.Principal')
@section('content')
    <section class="contenedorPrincipal">


      <div class="container">
        <center><h2>Actualizar Registro De Coneja Productora:</h2></center>
    </br>
          <form>
          <div class="form-group">
            <label for="Coneja_Productora">Número de tatuaje de la coneja:</label>
           <select class="form-control" name="Id_Conejo">
            <option>172615</option>
            <option>816252</option>
            <option>827361</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Coneja_Productora">Código de conejo:</label>
            <select class="form-control" name="Numero_Conejo">
            <option>09754</option>
            <option>91725</option>
            <option>81652</option>
            </select>
          </div>
        <br>
          <div align="right"><button type="submit" class="btn btn-outline-primary">Actualizar</button>


        </form>
      </div>

    </section>
@endsection