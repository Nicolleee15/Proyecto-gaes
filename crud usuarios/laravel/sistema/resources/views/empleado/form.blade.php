


@if(count($errors)>0)

<div class="alert alert-danger" role="alert">  
 <ul>

        @foreach($errors->all() as $error)
       <li> {{$error}}</li>
        @endforeach
        
</ul>
</div>

@endif

<link href="{{URL::asset('css/form.css')}}" rel="stylesheet">
<div class="container mt-5">
  <div class="card shadow p-4" style="max-width: 900px; margin: auto;">
    <h3 class="text-center mb-4">{{ $modo }} Empleado</h3>

    <form action="{{ url('empleado') }}" method="POST">
      @csrf

      <div class="row g-3">
        <div class="col-md-6">
          <label for="p_nombre_usuario" class="form-label">Primer nombre</label>
          <input type="text" class="form-control @error('p_nombre_usuario') is-invalid @enderror" name="p_nombre_usuario"
                 value="{{ old('p_nombre_usuario', $empleado->p_nombre_usuario ?? '') }}"
                 maxlength="10" required pattern="[A-Za-z]+" title="Maximo 10 letras">
          @error('p_nombre_usuario')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="s_nombre_usuario" class="form-label">Segundo nombre</label>
          <input type="text" class="form-control @error('s_nombre_usuario') is-invalid @enderror" name="s_nombre_usuario"
                 value="{{ old('s_nombre_usuario', $empleado->s_nombre_usuario ?? '') }}"
                 maxlength="10" required pattern="[A-Za-z]+" title="Maximo 10 letras">
          @error('s_nombre_usuario')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="p_apellido_usuario" class="form-label">Primer apellido</label>
          <input type="text" class="form-control @error('p_apellido_usuario') is-invalid @enderror" name="p_apellido_usuario"
                 value="{{ old('p_apellido_usuario', $empleado->p_apellido_usuario ?? '') }}"
                 maxlength="10" required pattern="[A-Za-z]+" title="Maximo 10 letras">
          @error('p_apellido_usuario')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="s_apellido_usuario" class="form-label">Segundo apellido</label>
          <input type="text" class="form-control @error('s_apellido_usuario') is-invalid @enderror" name="s_apellido_usuario"
                 value="{{ old('s_apellido_usuario', $empleado->s_apellido_usuario ?? '') }}"
                 maxlength="10" required pattern="[A-Za-z]+" title="Maximo 10 letras">
          @error('s_apellido_usuario')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="email_usuarios" class="form-label">Correo electronico</label>
          <input type="email" class="form-control @error('email_usuarios') is-invalid @enderror" name="email_usuarios"
                 value="{{ old('email_usuarios', $empleado->email_usuarios ?? '') }}"
                 required>
          @error('email_usuarios')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="password_usuarios" class="form-label">Contrasena</label>
          <input type="password" class="form-control @error('password_usuarios') is-invalid @enderror" name="password_usuarios"
                 value="{{ old('password_usuarios', $empleado->password_usuarios ?? '') }}"
                 required minlength="8" title="Minimo 8 caracteres">
          @error('password_usuarios')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="tipo_usuario" class="form-label">Rol</label>
          <select class="form-select @error('tipo_usuario') is-invalid @enderror" name="tipo_usuario" id="tipo_usuario" required>
            <option value="">Seleccione un rol</option>
            <option value="auxiliar" {{ (old('tipo_usuario', $empleado->tipo_usuario ?? '') == 'auxiliar') ? 'selected' : '' }}>Auxiliar</option>
            <option value="vendedor" {{ (old('tipo_usuario', $empleado->tipo_usuario ?? '') == 'vendedor') ? 'selected' : '' }}>Vendedor</option>
          </select>
          @error('tipo_usuario')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-md-6">
          <label for="telefono" class="form-label">Telefono</label>
          <input type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                 value="{{ old('telefono', $empleado->telefono ?? '') }}"
                 required maxlength="10" pattern="[0-9]{7,10}" title="Solo numeros, entre 7 y 10 digitos">
          @error('telefono')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
      </div>

      <div class="text-end mt-4">
        <input type="submit" class="btn btn-success me-2" value="{{ $modo }} datos">
        <a href="{{ url('empleado/') }}" class="btn btn-secondary">Regresar</a>
      </div>
    </form>

  </div>
</div>


