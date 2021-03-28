Seccion para editar empleados
<form action="{{ url('/jefedepartamento/' . $jefedepartamento->Id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
   {{ method_field('PATCH') }}

<label for="PrimerNombre">{{'PrimerNombre'}}</label>
<input type="text" name="PrimerNombre" id="PrimerNombre" value="{{ $jefedepartamento->PrimerNombre }}">
<br>

<label for="SegundoNombre">{{'SegundoNombre'}}</label>
<input type="text" name="SegundoNombre" id="SegundoNombre" value="{{ $jefedepartamento->SegundoNombre }}">
<br>
<label for="PrimerApellido">{{'PrimerApellido'}}</label>
<input type="text" name="PrimerApellido" id="PrimerApellido" value="{{ $jefedepartamento->PrimerApellido }}">
<br>
<label for="SegundoApellido">{{'SegundoApellido'}}</label>
<input type="text" name="SegundoApellido" id="SegundoApellido" value="{{ $jefedepartamento->SegundoApellido }}">
<br>
<label for="Foto">{{'Foto'}}</label>
<br>
<img src="{{ asset('storage').'/'.$jefedepartamento->Foto}}" alt="" width="200">
<br>
<input type="file" name="Foto" id="Foto" value="">
<br>
<br>
<input type="submit" value="Modificar">
<br>
<a href="{{ url('jefedepartamento') }}"><b>Volver a consultar jefes</b></a>
</form>