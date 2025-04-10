@extends('layouts.app')
@section('content')
    <div class="container mt-5">
      <div clas="row">

        <div class="col-md-12">
            <h1 class="text-center">Clientes</h1>
            
           <br>
        </div>
        <div class="col-md-12">
                <table class="table table-bordered">
            <thead class="table-primary">
                <tr class="table-primary">
                    <th scope="col">cedula</th>
                    <th scope="col">primer Nombre</th>
                    <th scope="col">segundo nombre</th>
                    <th scope="col">primer apellido</th>
                    <th scope="col">segundo apellido</th>
                    <th scope="col">telefono</th>
                    <th scope="col">correo</th>
                    <th scope="col">direccion</th>
                    <th scope="col">opcciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                <tr>
                    <th>{{ $cliente-> pk_numero_documento}}</th>
                    <td>{{ $cliente-> Pnombre_cliente}}</td>
                    <td>{{ $cliente-> Snombre_cliente}}</td>
                    <td>{{ $cliente-> Papellido_cliente}}</td>
                    <td>{{ $cliente-> Sapellido_cliente}}</td>
                    <td>{{ $cliente-> telefono_cliente}}</td>
                    <td>{{ $cliente-> correo_cliente}}</td>
                    <td>{{ $cliente-> direccion_cliente}}</td>
                    
                    
                    <td>
                    <a href="{{route('clientes.edit', $cliente )}}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="d-inline-block "style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                            onclick="retun confirm('esta seguro de eliminar el registro');">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <a href="{{route('clientes.create')}}" class="btn btn-primary">Agregar</a>
                @endforeach
            </tbody>
            </table>
        </div> 
     
      </div>
    </div>
        @endsection