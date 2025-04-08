@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <h2 class="text-success">Referencias</h2>
            <a href="{{route('reference.create')}}" class="btn btn-primary mb-2">Agregar</a>
        </div>
        
        <div class="col md-8">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Referencias</th>
                        <th style="width: 30%">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($references as $reference)
                        <tr>
                            <td class="text-center">{{ $reference->idReference}}</td>
                            <td class="text-center">{{ $reference->nomReference}}</td>
                            <td class="text-center">
                                <a href="{{route('reference.edit', ['reference' => $reference->idReference])}}" class="btn btn-success">Editar</a>
                                <form action="{{route('reference.destroy', $reference)}}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Está seguro de eliminar la Referencia???')">Eliminar</button>
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