Creación Empleados

<form action="{{ url('/empleado')  }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"><br>

    <label for="apellido_paterno">Apellido Paterno</label>
    <input type="text" name="apellido_paterno" id="apellido_paterno"><br>

    <label for="apellido_materno">Apellido Materno</label>
    <input type="text" name="apellido_materno" id="apellido_materno"><br>

    <label for="correo">Correo</label>
    <input type="text" name="correo" id="correo"><br>

    <label for="foto">Foto</label>
    <input type="file" name="foto" id="foto"><br>

    <input type="submit" value="Guardar">
</form>
