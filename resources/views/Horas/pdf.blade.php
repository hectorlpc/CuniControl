<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Reporte de horas prácticas</title>
    <link rel="stylesheet" href="css/pdfHoras.css" media="all" />
  </head>
   <body>
      <div id="logo">
      <img src="images/cea.jpg">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       &nbsp;&nbsp;
       <img src="images/cuni.jpg">
       
      </div>
      <h1 class="page-header">Control de Horas Modulo de Cunicultura</h1>
      <div id="company" class="clearfix">
      <img src="images/foto.png" width="100" height="120" >
      <br>
      <br>
      </div>
      <div id="project">
        <div><span>Nombre del alumno:</span>{{$usuario->Nombre_Usuario . " " . $usuario->Apellido_Paterno . " " . $usuario->Apellido_Materno}}</div>
        <div><span>Asignatura:</span> {{$solicitud[0]->materia->Nombre_Materia}}</div>
        <div><span>Grupo:</span> {{$solicitud[count($solicitud)-1]->grupo->Clave_Grupo}}</div>
        <div><span>Profesor:</span> {{$solicitud[count($solicitud)-1]->profesor->usuario->Nombre_Usuario . " " . $solicitud[count($solicitud)-1]->profesor->usuario->Apellido_Paterno . " " . $solicitud[count($solicitud)-1]->profesor->usuario->Apellido_Materno}}</div>
        <div><span>No. Seguro facultativo:</span> {{$alumno[0]->Seguro_Facultativo}}</div>
        <div><span>No. Seguro AXXA:</span> {{$alumno[0]->Seguro_Axxa}} </div>
        <div><span>Telefonos de contacto:</span> {{"Fijo: " . $usuario->Telefono . " Celular: " . $usuario->Celular}}</div>
        <br>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    <main>
      @if($conteohoras->count()>0)
        <div>
          <label for="">Total de horas validas: </label>
                  <input readonly type="text" name="Cantidad_Horas" value="{{$conteohoras[count($conteohoras)-1]->total/10000}}">  
        </div>
        @endif
        <div>
          <table class="table table-hover table-striped">
          <thead>
            <tr>     
                <th>Fecha:</th>
                <th>Hora de entrada:</th>
                <th>Hora de salida:</th>
                <th>Actividades realizadas:</th>
                <th>Status:</th>
            </tr>                            
          </thead>
          <tbody>
            @foreach($horas as $hora)
            <tr>
              <td>{{$hora->Fecha}}</td>
              <td>{{$hora->Hora_Entrada}}</td>
              <td>{{$hora->Hora_Salida}}</td>
              <td>{{$hora->actividad->Nombre_Actividad}}</td>
              <td>{{$hora->Status}}</td>
            </tr>
            @endforeach 
          </tbody>
        </table>  
        </div>
        
    <hr>