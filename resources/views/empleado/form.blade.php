<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre" value="{{ isset($empleado->nombre) ? $empleado->nombre : '' }}"><br>

<label for="apellido_paterno">Apellido Paterno</label>
<input type="text" name="apellido_paterno" id="apellido_paterno" value="{{ isset($empleado->apellido_paterno) ? $empleado->apellido_paterno : '' }}"><br>

<label for="apellido_materno">Apellido Materno</label>
<input type="text" name="apellido_materno" id="apellido_materno" value="{{ isset($empleado->apellido_materno) ? $empleado->apellido_materno : '' }}"><br>

<label for="correo">Correo</label>
<input type="text" name="correo" id="correo" value="{{ isset($empleado->correo) ? $empleado->correo : '' }}"><br>

<label for="foto">Foto</label>
@if(isset($empleado->foto))
<img src="{{ asset('storage').'/'.$empleado->foto }}" alt="Foto" width="100">
@endif
<input type="file" name="foto" id="foto"><br>

<input type="submit" value="Guardar"><br>
<a href="{{ url('empleado/') }}">Regresar</a>
