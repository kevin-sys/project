@if (Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<form action="{{ url('/jefedepartamento')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
@include('jefedepartamento.formjefe', ['Modo'=>'crear'])
</form>