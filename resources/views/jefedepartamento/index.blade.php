@extends('layouts.app')
@section('content')
<div class="container">
<h2><b>Jefes de departamento</b></h2>

@if (Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<br>

<a href="{{ url('jefedepartamento/create') }}"class="btn btn-success"><b>Agregar Jefe de departamento</b></a>
<br>
<br>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>Número</th>
            <th>Foto</th>
            <th>Identificación</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jefedepartamento as $jefe)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
               <img src="{{ asset('storage').'/'.$jefe->Foto}}" class="img-thumbnail img-fluid" alt="" width="50" height="50">
            </td>
            <td>{{$jefe->Id}}</td>
            <td>{{$jefe->PrimerNombre}}</td>
            <td>{{$jefe->SegundoNombre}}</td>
            <td>{{$jefe->PrimerApellido}}</td>
            <td>{{$jefe->SegundoApellido}}</td>
            <td>
                <a class="btn btn-warning" href="{{ url('/jefedepartamento/'.$jefe->Id.'/edit') }}">
                    <b>Editar</b>
                </a>
                <form method="POST" action="{{ url('/jefedepartamento/'.$jefe->Id) }}" style="display:inline">
                {{ csrf_field() }}
                {{ method_field('DELETE') }} 
              <button type="submit" class="btn btn-danger" onclick="return confirm('¿Borrar?');"><b>Eliminar</b></button>
              </form>
            </td>
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>
@endsection
