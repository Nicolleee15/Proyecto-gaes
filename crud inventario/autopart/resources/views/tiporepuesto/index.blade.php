@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <h2 class="text-success">Tipos de repuesto</h2>
            <a href="{{route('tiporepuesto.create')}}" class="btn btn-primary mb-2">Agregar</a>
        </div>
        
        <div class="col md-8">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Tipo</th>
                        <th>Stock</th>
                        <th style="width: 30%">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tiporepuestos as $tiporepuesto)
                        <tr>
                            <td class="text-center">{{ $tiporepuesto->id}}</td>
                            <td class="text-center">{{ $tiporepuesto->tipo}}</td>
                            <td class="text-center">{{ $tiporepuesto->stock}}</td>
                            <td class="text-center">
                                <a href="{{route('tiporepuesto.edit', ['tiporepuesto' => $tiporepuesto->id])}}" class="btn btn-success">Editar</a>
                                <form action="{{route('tiporepuesto.destroy', $tiporepuesto)}}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Está seguro de eliminar el tipo de repuesto???')">Eliminar</button>
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