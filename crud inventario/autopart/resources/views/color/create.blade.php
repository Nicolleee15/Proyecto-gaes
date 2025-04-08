@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <a href="{{route('color.index')}}" class="btn btn-secondary mb-2">Volver</a>
        </div>
        <div class="col md-3">
            <form action="{{ route('color.store') }}" method="POST">
            @csrf  
            <label for="nomColor" class="form-control-label">Color</label>
                <input type="text" class="form-control" name="nomColor" id="nomColor" value="">
                @error('nomColor')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Guardar</button>
            </form>
        </div>
    </div>
</div>

@endsection