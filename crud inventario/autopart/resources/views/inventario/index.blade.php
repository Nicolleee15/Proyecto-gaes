@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <h2 class="text-success">Inventario</h2>
            <a href="{{route('inventario.create')}}" class="btn btn-primary mb-2">Agregar</a>
        </div>
    
        <div class="col">
            <table class="table table-bordered" style="width: 1100px">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Estado</th>
                        <th>Ubicacion pasillo</th>
                        <th>Ubicacion estanteria</th>
                        <th>Precio Unitario</th>
                        <th>Fecha ingreso</th>
                        <th>Cantidad</th>
                        <th>Estado de activacion</th>
                        <th>Marca</th>
                        <th>Tipo de repuesto</th>
                        <th>Color</th>
                        <th>Proveedor</th>
                        <th>Referencia</th>
                        <th>Modelo</th>
                        <th style="width: 10%">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($inventarios as $inventario)
                        <tr>
                            <td class="text-center">{{ $inventario->idCodBarras}}</td>
                            <td class="text-center">{{ $inventario->estado}}</td>
                            <td class="text-center">{{ $inventario->ubi_pasillo}}</td>
                            <td class="text-center">{{ $inventario->ubi_estanteria}}</td>
                            <td class="text-center">{{ $inventario->precio_unitario}}</td>
                            <td class="text-center">{{ $inventario->fecha_ingreso}}</td>
                            <td class="text-center">{{ $inventario->cantidad_ingresada}}</td>
                            <td class="text-center">{{ $inventario->estado_activacion}}</td>
                            <td class="text-center">{{ $inventario->marca->nomMarca}}</td>
                            <td class="text-center">{{ $inventario->tiporepuesto->tipo}}</td>
                            <td class="text-center">{{ $inventario->color->nomColor}}</td>
                            <td class="text-center">{{ $inventario->proveedor->nomProveedor}}</td>
                            <td class="text-center">{{ $inventario->reference->nomReference}}</td>
                            <td class="text-center">{{ $inventario->modelo->nomModelo}}</td>
                            <td class="text-center">
                                <a href="{{route('inventario.edit', ['inventario' => $inventario->idCodBarras])}}" class="btn btn-success">Editar</a>
                                <form action="{{route('inventario.destroy', $inventario)}}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Está seguro de eliminar el producto del inventario???')">Eliminar</button>
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
