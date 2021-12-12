Listado Empleados

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id  }}</td>
            <td>
                <img src="{{ asset('storage').'/'.$empleado->foto }}" alt="Foto" width="100">
            </td>
            <td>{{ $empleado->nombre  }}</td>
            <td>{{ $empleado->apellido_paterno  }}</td>
            <td>{{ $empleado->apellido_materno  }}</td>
            <td>{{ $empleado->correo  }}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit/') }}">Editar</a>

                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Borrar" onclick="return confirm('¿Está seguro?')">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
