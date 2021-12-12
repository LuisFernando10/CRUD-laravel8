<h2>{{ $modo }} Empleado</h2>

<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="{{ isset($empleado->nombre) ? $empleado->nombre : '' }}">
</div>

<div class="form-group">
    <label for="apellido_paterno">Apellido Paterno</label>
    <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" value="{{ isset($empleado->apellido_paterno) ? $empleado->apellido_paterno : '' }}">
</div>

<div class="form-group">
    <label for="apellido_materno">Apellido Materno</label>
    <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" value="{{ isset($empleado->apellido_materno) ? $empleado->apellido_materno : '' }}">
</div>

<div class="form-group">
    <label for="correo">Correo</label>
    <input type="text" class="form-control" name="correo" id="correo" value="{{ isset($empleado->correo) ? $empleado->correo : '' }}">
</div>

<div class="form-group">
    <label for="foto"></label>
    @if(isset($empleado->foto))
    <img src="{{ asset('storage').'/'.$empleado->foto }}" alt="Foto" width="100" class="img-thumbnail img-fluid">
    @endif
    <input type="file" name="foto" class="form-control" id="foto">
</div><br>
<input type="submit" class="btn btn-success" value="Guardar">
<a href="{{ url('empleado/') }}" class="btn btn-primary">Regresar</a>
