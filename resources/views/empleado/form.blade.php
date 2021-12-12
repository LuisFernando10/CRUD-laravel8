<label for="nombre">Nombre</label>
<input type="text" name="nombre" id="nombre" value="{{ $empleado->nombre }}"><br>

<label for="apellido_paterno">Apellido Paterno</label>
<input type="text" name="apellido_paterno" id="apellido_paterno" value="{{ $empleado->apellido_paterno }}"><br>

<label for="apellido_materno">Apellido Materno</label>
<input type="text" name="apellido_materno" id="apellido_materno" value="{{ $empleado->apellido_materno }}"><br>

<label for="correo">Correo</label>
<input type="text" name="correo" id="correo" value="{{ $empleado->correo }}"><br>

<label for="foto">Foto</label>
<img src="{{ asset('storage').'/'.$empleado->foto }}" alt="Foto">
<input type="file" name="foto" id="foto"><br>

<input type="submit" value="Guardar">
