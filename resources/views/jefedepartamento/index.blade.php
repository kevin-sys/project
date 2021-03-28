Inicio (Despligue de datos)
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
            <td>{{$jefe->Foto}}</td>
            <td>{{$jefe->Id}}</td>
            <td>{{$jefe->PrimerNombre}}</td>
            <td>{{$jefe->SegundoNombre}}</td>
            <td>{{$jefe->PrimerApellido}}</td>
            <td>{{$jefe->SegundoApellido}}</td>
            <td>
                <a href="{{ url('/jefedepartamento/'.$jefe->Id.'/edit') }}">
                    Editar
                </a>

                <form action="{{ url('/jefedepartamento', ['jefe' => $jefe->Id]) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }} 
              <button type="submit" onclick="return confirm('¿Borrar?');">Eliminar</button>
              </form>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>

