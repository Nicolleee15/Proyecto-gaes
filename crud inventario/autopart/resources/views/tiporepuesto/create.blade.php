@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <a href="{{route('tiporepuesto.index')}}" class="btn btn-secondary mb-2">Volver</a>
        </div>
        <div class="col md-3">
            <form action="{{ route('tiporepuesto.store') }}" method="POST">
            @csrf  
            <label for="tipo" class="form-control-label">Tipo</label>
                <input type="text" class="form-control" name="tipo" id="tipo" value="">
                @error('tipo')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror
                <label for="stock" class="form-control-label">Stock</label>
                <input type="text" class="form-control" name="stock" id="stock" value="">
                @error('stock')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Guardar</button>
            </form>
        </div>
    </div>
</div>

@endsection