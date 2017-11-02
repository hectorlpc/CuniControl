@extends('layouts.Principal')
@section('content')
    <h1 class="page-header">Listado de productos</h1>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Fecha Nacimiento:</th>      
                <th>Tatuaje Derecho:</th>
                <th>Tatuaje Izquierdo:</th>
                <th>Raza:</th>
                <th>Genero:</th>
                  <th>Status:</th>
            </tr>                            
        </thead>
        <tbody>
            @foreach($conejos as $conejo)
            @if($conejo->Status == 'Muerto')
            <tr>
                <td> {{$conejo->Fecha_Nacimiento}} </td>    
                <td> {{$conejo->Tatuaje_Derecho}} </td>
                <td> {{$conejo->Tatuaje_Izquierdo}} </td>
                <td> {{$conejo->raza->Nombre_Raza}} </td>
                <td> {{$conejo->Genero}} </td>
                <td> {{$conejo->Status}} </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
    <hr>
@endsection