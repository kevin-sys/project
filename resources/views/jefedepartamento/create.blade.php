@if (Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
<form action="{{ url('/jefedepartamento')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<br>
<label for="Identificacion">{{'Identificacion'}}</label>
<input type="number" name="Id" id="Id" value="">
<br>
<label for="PrimerNombre">{{'PrimerNombre'}}</label>
<input type="text" name="PrimerNombre" id="PrimerNombre" value="">
<br>
<label for="SegundoNombre">{{'SegundoNombre'}}</label>
<input type="text" name="SegundoNombre" id="SegundoNombre" value="">
<br>
<label for="PrimerApellido">{{'PrimerApellido'}}</label>
<input type="text" name="PrimerApellido" id="PrimerApellido" value="">
<br>
<label for="SegundoApellido">{{'SegundoApellido'}}</label>
<input type="text" name="SegundoApellido" id="SegundoApellido" value="">
<br>
<label for="Foto">{{'Foto'}}</label>
<input type="file" name="Foto" id="Foto" value="">
<br>
<input type="submit" value="Agregar">
<br>
<a href="{{ url('jefedepartamento') }}"><b>Volver a consultar jefes</b></a>

</form>