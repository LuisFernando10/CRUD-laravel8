Creación Empleados

<form action="{{ url('/empleado')  }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleado.form', ['modo' => 'Crear']);
</form>
