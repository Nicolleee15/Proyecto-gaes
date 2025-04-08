@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <a href="{{route('reference.index')}}" class="btn btn-secondary mb-2">Volver</a>
        </div>
        <div class="col md-3">
            <form action="{{ route('reference.update', $reference) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="nomReference" class="form-control-label">Nueva marca</label>
                <input type="text" class="form-control" name="nomReference" id="nomReference" 
                value="{{$reference->nomReference}}">
                @error('nomReference')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror
                <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection