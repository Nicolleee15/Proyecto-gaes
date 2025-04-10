@extends('layouts.app')
@section('content')
    <div class="container mt-5">
      <div clas="row">

        <div class="col-md-12">
            <a href="{{route('clientes.index')}}" class="btn btn-secondary"> volver</a>

        </div>
        <div class="col-md-12">
            <h1 class="text-center">Crear Cliente</h1>
            <form action="{{route('clientes.store')}}" method="POST">
                @csrf
                <LAbel for="cedula"class="form-control-label"> datos</LAbel>
                <input type="text" class="form-control mt-3" id="cedula" name="pk_numero_documento"   value="" placeholder="cedula" required>
                @error('pk_numero_documento')
               <small class="text-danger">{{$message}}</small>
                @enderror
                <input type="text" class="form-control mt-3" id="pnombre" name="Pnombre_cliente"   value="" placeholder="primer nombre" required>
                @error('Pnombre_cliente')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <input type="text" class="form-control mt-3" id="snombre" name="Snombre_cliente"   value="" placeholder="segundo nombre" >  
                @error('Snombre_cliente')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <input type="text" class="form-control mt-3" id="papellido" name="Papellido_cliente"   value="" placeholder="primer apellido" required>
                @error('Papellido_cliente')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <input type="text" class="form-control mt-3" id="sapellido" name="Sapellido_cliente"   value="" placeholder="segundo apellido" >
                
                <input type="text" class="form-control mt-3" id="telefono" name="telefono_cliente"   value="" placeholder="telefono" required>
                @error('telefono_cliente')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <input type="text" class="form-control mt-3" id="correo" name="correo_cliente"   value="" placeholder="correo" required>
                @error('correo_cliente')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <input type="text" class="form-control mt-3" id="direccion" name="direccion_cliente"   value="" placeholder="direccion" required>
                @error('direccion_cliente')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <button tipe="submit" class="btn btn-primary mt-2"> Guardar</button>
            </form>
           <br>
        </div>
        </div>
@endsection