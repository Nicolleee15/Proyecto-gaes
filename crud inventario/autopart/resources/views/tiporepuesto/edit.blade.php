@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <a href="{{route('tiporepuesto.index')}}" class="btn btn-secondary mb-2">Volver</a>
        </div>
        <div class="col md-3">
            <form action="{{ route('tiporepuesto.update', $tiporepuesto) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="tipo" class="form-control-label">Tipo</label>
                <input type="text" class="form-control" name="tipo" id="tipo" 
                value="{{$tiporepuesto->tipo}}">
                @error('tipo')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror
                <label for="stock" class="form-control-label">Tipo</label>
                <input type="text" class="form-control" name="stock" id="stock" 
                value="{{$tiporepuesto->stock}}">
                @error('stock')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection