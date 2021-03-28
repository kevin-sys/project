<h2><b>Listado de jefes de departamento</b></h2>

@if (Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<br>

<a href="{{ url('jefedepartamento/create') }}"><b>Agregar Jefe de departamento</b></a>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/litera/bootstrap.min.css" integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Número</th>
            <th>Foto</th>
            <th>Id</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellidoz</th>
            <th>Segundo Apellido</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jefedepartamento as $jefe)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
               <img src="{{ asset('storage').'/'.$jefe->Foto}}" alt="" width="200">
            </td>
            <td>{{$jefe->Id}}</td>
            <td>{{$jefe->PrimerNombre}}</td>
            <td>{{$jefe->SegundoNombre}}</td>
            <td>{{$jefe->PrimerApellido}}</td>
            <td>{{$jefe->SegundoApellido}}</td>
            <td>
                <a href="{{ url('/jefedepartamento/'.$jefe->Id.'/edit') }}">
                    Editar
                </a>
                <form method="POST" action="{{ url('/jefedepartamento/'.$jefe->Id)}}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }} 
              <button type="submit" class="btn btn-danger btn-block" onclick="return confirm('¿Borrar?');">Eliminar</button>
              </form>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>

