{{ $Modo=='crear'? 'Registro' : 'Modificar Jefe de Departamento'}}
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="Identificacion" class="control-label">{{'Identificación'}}</label>
            <input type="number" class="form-control" name="Id" id="Id" value="">
        </div>
    </div>  

    <div class="col-lg-4">
        <div class="form-group">
            <label for="PrimerNombre" class="control-label">{{'Primer Nombre'}}</label>
            <input type="text" class="form-control" name="PrimerNombre" id="PrimerNombre" value="">
        </div>
    </div>  

    <div class="col-lg-4">
        <div class="form-group">
            <label for="SegundoNombre" class="control-label">{{'Segundo Nombre'}}</label>
            <input type="text" class="form-control" name="SegundoNombre" id="SegundoNombre" value="">
        </div>
    </div>  
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="PrimerApellido" class="control-label">{{'Primer Apellido'}}</label>
            <input type="text" class="form-control" name="PrimerApellido" id="PrimerApellido" value="">
        </div>
    </div> 
    <div class="col-lg-4">
        <div class="form-group">
            <label for="SegundoApellido" class="control-label">{{'Segundo Apellido'}}</label>
            <input type="text" class="form-control" name="SegundoApellido" id="SegundoApellido" value="">
        </div>
    </div> 
    <div class="col-lg-4">
        <div class="form-group">
            <label for="Foto" class="control-label">{{'Foto'}}</label>
            <input type="file" class="form-control" name="Foto" id="Foto" value="">
        </div>
    </div> 
</div>


<input type="submit" class="btn btn-success" value="Agregar">
<br>
<br>
<a class="btn btn-secondary" href="{{ url('jefedepartamento') }}">Consultar Listado</a>