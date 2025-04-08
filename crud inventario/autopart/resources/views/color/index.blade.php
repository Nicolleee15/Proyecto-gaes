@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <h2 class="text-success">Colores</h2>
            <a href="{{route('color.create')}}" class="btn btn-primary mb-2">Agregar</a>
        </div>
        
        <div class="col md-8">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Colores</th>
                        <th style="width: 30%">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($colors as $color)
                        <tr>
                            <td class="text-center">{{ $color->idColor}}</td>
                            <td class="text-center">{{ $color->nomColor}}</td>
                            <td class="text-center">
                                <a href="{{route('color.edit', ['color' => $color->idColor])}}" class="btn btn-success">Editar</a>
                                <form action="{{route('color.destroy', $color)}}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Está seguro de eliminar el color???')">Eliminar</button>
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