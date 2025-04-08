@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <h2 class="text-success">Marcas</h2>
            <a href="{{route('marca.create')}}" class="btn btn-primary mb-2">Agregar</a>
        </div>
        
        <div class="col md-8">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Marcas</th>
                        <th style="width: 30%">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($marcas as $marca)
                        <tr>
                            <td class="text-center">{{ $marca->idMarca}}</td>
                            <td class="text-center">{{ $marca->nomMarca}}</td>
                            <td class="text-center">
                                <a href="{{route('marca.edit', ['marca' => $marca->idMarca])}}" class="btn btn-success">Editar</a>
                                <form action="{{route('marca.destroy', $marca)}}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Está seguro de eliminar la Marca???')">Eliminar</button>
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