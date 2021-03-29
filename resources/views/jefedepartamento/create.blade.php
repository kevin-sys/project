@extends('layouts.app')
@section('content')
<div class="container">
@if (Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<form action="{{ url('/jefedepartamento')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
@include('jefedepartamento.formjefe', ['Modo'=>'crear'])
</form>
</div>
@endsection