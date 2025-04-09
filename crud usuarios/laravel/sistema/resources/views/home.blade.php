@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            @if(Auth::user()->tipo_usuario=="Administrador" && session('status'))
    <div class="toast-container position-fixed bottom-0 end-0 p-3">
        <div class="toast show bg-success text-white" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-success text-white">
                <strong class="me-auto">Bienvenido</strong>
                <small>Ahora</small>
                <button type="button" class="btn-close btn-close-white ms-2 mb-1" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ session('status') }}
            </div>
        </div>
    </div>
@endif


                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
