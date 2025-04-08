@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <a href="{{route('reference.index')}}" class="btn btn-secondary mb-2">Volver</a>
        </div>
        <div class="col md-3">
            <form action="{{ route('reference.store') }}" method="POST">
            @csrf  
            <label for="nomReference" class="form-control-label">Referencia</label>
                <input type="text" class="form-control" name="nomReference" id="nomReference" value="">
                @error('nomReference')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Guardar</button>
            </form>
        </div>
    </div>
</div>

@endsection