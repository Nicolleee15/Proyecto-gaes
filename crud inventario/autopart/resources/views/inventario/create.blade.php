@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <a href="{{route('inventario.index')}}" class="btn btn-secondary mb-2">Volver</a>
        </div>
        <div class="col md-3">
            <form action="{{ route('inventario.store') }}" method="POST">
            @csrf  
                <label for="estado" class="form-control-label">Estado</label>
                <input type="text" class="form-control" name="estado" id="estado" value="">
                @error('estado')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="ubi_paso" class="form-control-label">Ubicación pasillo</label>
                <input type="text" class="form-control" name="ubi_pasillo" id="ubi_pasillo" value="">
                @error('ubi_pasillo')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="ubi_estanteria" class="form-control-label">Ubicación estanteria</label>
                <input type="text" class="form-control" name="ubi_estanteria" id="ubi_estanteria" value="">
                @error('ubi_estanteria')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="precio_unitario" class="form-control-label">Precio unitario</label>
                <input type="number" class="form-control" name="precio_unitario" id="precio_unitario" value="">
                @error('precio_unitario')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="fecha_ingreso" class="form-control-label">Fecha ingreso</label>
                <input type="text" class="form-control" name="fecha_ingreso" id="fecha_ingreso" value="">
                @error('fecha_ingreso')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="cantidad_ingresada" class="form-control-label">Cantidad ingresada</label>
                <input type="text" class="form-control" name="cantidad_ingresada" id="cantidad_ingresada" value="">
                @error('cantidad_ingresada')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="estado_activacion" class="form-control-label">Estado de activacion</label>
                <input type="text" class="form-control" name="estado_activacion" id="estado_activacion" value="">
                @error('estado_activacion')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="idMarca" class="form-control-label">Marca</label>
                <select name="idMarca_fk" id="idMarca" class="form-control">
                    @foreach($marcas as $marca)
                        <option value="{{ $marca->idMarca}}">{{$marca->nomMarca}}</option>
                    @endforeach
                </select>

                <label for="id" class="form-control-label">Tipo de Repuesto</label>
                <select name="idTipo_fk" id="id" class="form-control">
                    @foreach($tiporepuestos as $tiporepuesto)
                      <option value="{{ $tiporepuesto->id }}">{{ $tiporepuesto->tipo }}</option>
                    @endforeach
                </select>


                <label for="idColor" class="form-control-label">Color</label>
                <select name="idColor_fk" id="idColor" class="form-control">
                    @foreach($colors as $color)
                        <option value="{{ $color->idColor}}">{{$color->nomColor}}</option>
                    @endforeach
                </select>

                <label for="idProveedor" class="form-control-label">Proveedor</label>
                <select name="idProveedor_fk" id="idProveedor" class="form-control">
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->idProveedor}}">{{$proveedor->nomProveedor}}</option>
                    @endforeach
                </select>

                <label for="idReference" class="form-control-label">Referencia</label>
                <select name="idReference_fk" id="idReference" class="form-control">
                    @foreach($references as $reference)
                        <option value="{{ $reference->idReference}}">{{$reference->nomReference}}</option>
                    @endforeach
                </select>

                <label for="idModelo" class="form-control-label">Modelo</label>
                <select name="idModelo_fk" id="idModelo" class="form-control">
                    @foreach($modelos as $modelo)
                        <option value="{{ $modelo->idModelo}}">{{$modelo->nomModelo}}</option>
                    @endforeach
                </select>

                <button type="submit" class="btn btn-primary mt-2">Guardar</button>
            </form>
        </div>
    </div>
</div>

@endsection
