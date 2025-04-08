@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <a href="{{route('proveedor.index')}}" class="btn btn-secondary mb-2">Volver</a>
        </div>
        <div class="col md-3">
            <form action="{{ route('proveedor.update', $proveedor) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="nomProveedor" class="form-control-label">Proveedor</label>
                <input type="text" class="form-control" name="nomProveedor" id="nomProveedor" 
                value="{{$proveedor->nomProveedor}}">
                @error('nomProveedor')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection