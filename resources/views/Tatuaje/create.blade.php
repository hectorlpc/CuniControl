
@extends('layouts.Principal')
@section('content')

      <div class="container">
        <h2>TATUADO DE CONEJOS:</h2>
          <form>
          <div class="form-group">
            <label for="exampleInputPassword2">Numero de tatuaje de la madre:</label>
          <select class="form-control" name="Tatuajes">
            <option>123436</option>
            <option>9823</option>
            <option>98373</option>
            </select>
          </div>
          <div class="form-group">
          <label for="exampleInputPassword2">Numero de tatuaje del padre:</label>
          <select class="form-control" name="Tatuajes">
            <option>123436</option>
            <option>9823</option>
            <option>98373</option>
            </select>
          </div>
          <div class="form-group">
          <label for="exampleInputPassword2">Raza:</label>
          <select class="form-control" name="Tatuajes">
            <option>Chinchilla</option>
            <option>California</option>
            <option>FESC</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Genero:</label>
            <input type="radio" name="genero" value="macho" /> Macho
            <input type="radio" name="genero" value="hembra" /> Hembra
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> Fecha de nacimiento:</label>
            <input class="form-control" type="date" name="fecha" min="2000-01-01" max="2050-01-01" step="2">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> Peso al nacer (kg.):</label>
             <input type="number" name="peso" list="listapesos" min="0.000" max="10.000" step="0.100">
          </div>
          <div class="form-group">
        <label class="col-lg-2 control-label">Tatuaje derecho:</label>
        <div class="col-lg-10">
         <p class="form-control-static">1982635</p>
        </div>
        <label class="col-lg-2 control-label">Tatuaje izquierdo:</label>
        <div class="col-lg-10">
         <p class="form-control-static">987251</p>
        </div>
      </div>
         
        </br>

          <button type="submit" class="btn btn-outline-primary">Registrar</button>
        </form>
      </div>
@endsection