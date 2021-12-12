@extends('layouts.app')
@section('content')
    <div class="container">
        @if(Session::has('mensaje') != null)
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ Session::get('mensaje') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        @endif

        <a href="{{ url('empleado/create') }}" class="btn btn-success">Crear Empleado</a><br><br>
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
                        <img src="{{ asset('storage').'/'.$empleado->foto }}" alt="Foto" width="100" class="img-thumbnail img-fluid">
                    </td>
                    <td>{{ $empleado->nombre  }}</td>
                    <td>{{ $empleado->apellido_paterno  }}</td>
                    <td>{{ $empleado->apellido_materno  }}</td>
                    <td>{{ $empleado->correo  }}</td>
                    <td>
                        <a href="{{ url('/empleado/'.$empleado->id.'/edit/') }}" class="btn btn-warning">Editar</a>

                        <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" class="d-inline">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="Borrar" onclick="return confirm('¿Está seguro?')">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {!! $empleados->links() !!}
    </div>
@endsection
