@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <a href="{{route('modelo.index')}}" class="btn btn-secondary mb-2">Volver</a>
        </div>
        <div class="col md-3">
            <form action="{{ route('modelo.update', $modelo) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="nomModelo" class="form-control-label">Modelo</label>
                <input type="text" class="form-control" name="nomModelo" id="nomModelo" 
                value="{{$modelo->nomModelo}}">
                @error('nomModelo')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection
