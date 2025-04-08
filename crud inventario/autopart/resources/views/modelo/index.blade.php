@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <h2 class="text-success">Modelos</h2>
            <a href="{{route('modelo.create')}}" class="btn btn-primary mb-2">Agregar</a>
        </div>
        
        <div class="col md-8">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Modelos</th>
                        <th style="width: 30%">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($modelos as $modelo)
                        <tr>
                            <td class="text-center">{{ $modelo->idModelo}}</td>
                            <td class="text-center">{{ $modelo->nomModelo}}</td>
                            <td class="text-center">
                                <a href="{{route('modelo.edit', ['modelo' => $modelo->idModelo])}}" class="btn btn-success">Editar</a>
                                <form action="{{route('modelo.destroy', $modelo)}}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Está seguro de eliminar el Modelo???')">Eliminar</button>
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