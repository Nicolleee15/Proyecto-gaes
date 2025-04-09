@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro de Empleados') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                 <div class="row mb-3">
                        <label for="p_nombre_usuario" class="col-md-4 col-form-label text-md-end">Primer Nombre</label>
                        <div class="col-md-6">
                            <input id="p_nombre_usuario" type="text" class="form-control @error('p_nombre_usuario') is-invalid @enderror"
                                name="p_nombre_usuario" value="{{ old('p_nombre_usuario') }}" required autofocus maxlength="10">

                            @error('p_nombre_usuario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="s_nombre_usuario" class="col-md-4 col-form-label text-md-end">Segundo Nombre</label>
                        <div class="col-md-6">
                            <input id="s_nombre_usuario" type="text" class="form-control @error('s_nombre_usuario') is-invalid @enderror"
                                name="s_nombre_usuario" value="{{ old('s_nombre_usuario') }}" required maxlength="10">

                            @error('s_nombre_usuario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="p_apellido_usuario" class="col-md-4 col-form-label text-md-end">Primer Apellido</label>
                        <div class="col-md-6">
                            <input id="p_apellido_usuario" type="text" class="form-control @error('p_apellido_usuario') is-invalid @enderror"
                                name="p_apellido_usuario" value="{{ old('p_apellido_usuario') }}" required maxlength="10">

                            @error('p_apellido_usuario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="s_apellido_usuario" class="col-md-4 col-form-label text-md-end">Segundo Apellido</label>
                        <div class="col-md-6">
                            <input id="s_apellido_usuario" type="text" class="form-control @error('s_apellido_usuario') is-invalid @enderror"
                                name="s_apellido_usuario" value="{{ old('s_apellido_usuario') }}" required maxlength="10">

                            @error('s_apellido_usuario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email_usuarios" type="email" class="form-control @error('email_usuarios') is-invalid @enderror" name="email_usuarios" value="{{ old('email_usuarios') }}" required autocomplete="email_usuarios">

                                @error('email_usuarios')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password_usuarios" type="password" class="form-control @error('password_usuarios') is-invalid @enderror" name="password_usuarios" required autocomplete="new-password_usuarios">

                                @error('password_usuarios')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password_usuarios-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password_usuarios-confirm" type="password" class="form-control" name="password_usuarios_confirmation" required autocomplete="new-password_usuarios">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar Empleado') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
