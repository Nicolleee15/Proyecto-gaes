@extends('layouts.app')

@section('content')
<link href="{{URL::asset('css/estilos.css')}}" rel="stylesheet">
<div class="fondo d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="login-box">
        <h2 class="text-center mb-4">Inicio de sesión</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="centrado">
            <div class="mb-3">
                <label for="email_usuarios" class="form-label">👤 Usuario</label>
                <input id="email_usuarios" type="email" class="form-control @error('email_usuarios') is-invalid @enderror" name="email_usuarios" value="{{ old('email_usuarios') }}" required autofocus>
                @error('email_usuarios')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">🔑 Contraseña</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required minlength="8" pattern="^[A-Za-z0-9]{4,8}$"
                title="Máximo 8 caracteres, solo letras y números">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tipo_usuario" class="form-label">🎯 Rol</label>
                <select id="tipo_usuario" class="form-select @error('tipo_usuario') is-invalid @enderror" name="tipo_usuario" required>
                    <option value="">Seleccione un rol</option>
                    <option value="administrador">Administrador</option>
                    <option value="vendedor">Vendedor</option>
                    <option value="auxiliar">Auxiliar</option>
                </select>
                @error('tipo_usuario')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success w-100">Ingresa</button>
                <a class="d-block mt-2 text-primary" href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
            </div>
            </div>
        </form>
    </div>
</div>
@endsection
