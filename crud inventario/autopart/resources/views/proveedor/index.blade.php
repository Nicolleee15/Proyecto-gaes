@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <h2 class="text-success">Proveedores</h2>
            <a href="{{route('proveedor.create')}}" class="btn btn-primary mb-2">Agregar</a>
        </div>
        
        <div class="col md-8">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Proveedor</th>
                        <th style="width: 30%">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proveedores as $proveedor)
                        <tr>
                            <td class="text-center">{{ $proveedor->idProveedor}}</td>
                            <td class="text-center">{{ $proveedor->nomProveedor}}</td>
                            <td class="text-center">
                                <a href="{{route('proveedor.edit', ['proveedor' => $proveedor->idProveedor])}}" class="btn btn-success">Editar</a>
                                <form action="{{route('proveedor.destroy', $proveedor)}}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Está seguro de eliminar el proveedor???')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection