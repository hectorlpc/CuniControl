    <h1 class="page-header">Listado de Engorda </h1>
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
            @if($conejo->Engorda == 'Si')
            @if($conejo->Status == 'Vivo')
              <td> {{$conejo->Fecha_Nacimiento}} </td>    
              <td> {{$conejo->Tatuaje_Derecho}} </td>
              <td> {{$conejo->Tatuaje_Izquierdo}} </td>
              <td> {{$conejo->raza->Nombre_Raza}} </td>
              <td> {{$conejo->Genero}} </td>
              <td> {{$conejo->Status}} </td>
              </div>
            </td>
            </tr>
            @endif
            @endif
            @endforeach
        </tbody>
    </table>
    <hr>