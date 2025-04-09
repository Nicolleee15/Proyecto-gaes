@extends('layouts.app')

@section('content')
<link href="{{URL::asset('css/index.css')}}" rel="stylesheet">
@if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible fade show mt-4 mx-auto w-75" role="alert">
        {{ Session::get('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<div class="contenedor-superior">
    <h3 class="fw-bold text-primary titulo-empleados">Lista de empleados</h3>
</div>



<div class=fondo>
<div class="container mt-5">
    
<div class="fondo_blanco">
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center align-middle shadow-sm">
            <thead class="table-primary text-white">
                <tr>
                    <th>#</th>
                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Correo electrónico</th>
                    <th>Contraseña</th>
                    <th>Rol</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->id }}</td>
                    <td>{{ $empleado->p_nombre_usuario }}</td>
                    <td>{{ $empleado->s_nombre_usuario }}</td>
                    <td>{{ $empleado->p_apellido_usuario }}</td>
                    <td>{{ $empleado->s_apellido_usuario }}</td>
                    <td>{{ $empleado->email_usuarios }}</td>
                    <td>••••••••</td> <!-- Nunca mostrar la contraseña directamente -->
                    <td>{{ $empleado->tipo_usuario }}</td>
                    <td>{{ $empleado->telefono }}</td>
                    <td>
                        <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning btn-sm mb-1 shadow">Editar</a>

                        <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="POST" onsubmit="return confirm('¿Quieres borrar este empleado?')">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn btn-danger btn-sm shadow" type="submit" value="Borrar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {!! $empleados->links() !!}
    </div>
    </div>
    <div class="text-end mt-4">
    <a href="{{ url('empleado/create') }}" class="btn btn-success shadow boton-registrar">Registrar nuevo empleado</a>
</div>
</div>
</div>

@endsection
