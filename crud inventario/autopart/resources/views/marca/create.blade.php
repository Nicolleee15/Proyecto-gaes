@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <a href="{{route('marca.index')}}" class="btn btn-secondary mb-2">Volver</a>
        </div>
        <div class="col md-3">
            <form action="{{ route('marca.store') }}" method="POST">
            @csrf  
            <label for="nomMarca" class="form-control-label">Nueva marca</label>
                <input type="text" class="form-control" name="nomMarca" id="noMarca" value="">
                @error('nomMarca')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Guardar</button>
            </form>
        </div>
    </div>
</div>

@endsection