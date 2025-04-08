@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col md-12">
            <a href="{{route('inventario.index')}}" class="btn btn-secondary mb-2">Volver</a>
        </div>
        <div class="col md-3">
            <form action="{{ route('inventario.update', $inventario) }}" method="POST">
            @csrf
            @method('PUT')
            
            <label for="estado" class="form-control-label">Estado</label>
                <input type="text" class="form-control" name="estado" id="estado" value="{{$inventario->estado}}">
                @error('estado')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="ubi_paso" class="form-control-label">Ubicación pasillo</label>
                <input type="text" class="form-control" name="ubi_pasillo" id="ubi_pasillo" value="{{$inventario->ubi_pasillo}}">
                @error('ubi_pasillo')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="ubi_estanteria" class="form-control-label">Ubicación estanteria</label>
                <input type="text" class="form-control" name="ubi_estanteria" id="ubi_estanteria" value="{{$inventario->ubi_estanteria}}">
                @error('ubi_estanteria')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="precio_unitario" class="form-control-label">Precio unitario</label>
                <input type="number" class="form-control" name="precio_unitario" id="precio_unitario" value="{{$inventario->precio_unitario}}">
                @error('precio_unitario')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="fecha_ingreso" class="form-control-label">Fecha ingreso</label>
                <input type="text" class="form-control" name="fecha_ingreso" id="fecha_ingreso" value="{{$inventario->fecha_ingreso}}">
                @error('fecha_ingreso')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="cantidad_ingresada" class="form-control-label">Cantidad ingresada</label>
                <input type="text" class="form-control" name="cantidad_ingresada" id="cantidad_ingresada" value="{{$inventario->cantidad_ingresada}}">
                @error('cantidad_ingresada')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="estado_activacion" class="form-control-label">Estado de activacion</label>
                <input type="text" class="form-control" name="estado_activacion" id="estado_activacion" value="{{$inventario->estado_activacion}}">
                @error('estado_activacion')
                    <small class="text-danger">{{ $message }}</small><br>
                @enderror

                <label for="idMarca" class="form-control-label">Marca</label>
                <select name="idMarca_fk" id="idMarca" class="form-control" value="{{$inventario->idMarca_fk}}">
                    @foreach($marcas as $marca)
                        <option value="{{ $marca->idMarca}}" {{$inventario->idMarca_fk==$marca->idMarca?'selected':''}}>{{$marca->nomMarca}}</option>
                    @endforeach
                </select>

                <label for="id" class="form-control-label">Tipo de Repuesto</label>
                <select name="idTipo_fk" id="id" class="form-control" value="{{$inventario->idTipo_fk}}">
                    @foreach($tiporepuestos as $tiporepuesto)
                      <option value="{{ $tiporepuesto->id }}" {{$inventario->idTipo_fk==$tiporepuesto->id?'selected':''}}>{{ $tiporepuesto->tipo }}</option>
                    @endforeach
                </select>

                <label for="idColor" class="form-control-label">Color</label>
                <select name="idColor_fk" id="idColor" class="form-control" value="{{$inventario->idColor_fk}}">
                    @foreach($colors as $color)
                        <option value="{{ $color->idColor}}" {{$inventario->idColor_fk==$color->idColor?'selected':''}}>{{$color->nomColor}}</option>
                    @endforeach
                </select>

                <label for="idProveedor" class="form-control-label">Proveedor</label>
                <select name="idProveedor_fk" id="idProveedor" class="form-control" value="{{$inventario->idProveedor_fk}}">
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->idProveedor}}" {{$inventario->idProveedor_fk==$proveedor->idProveedor?'selected':''}}>{{$proveedor->nomProveedor}}</option>
                    @endforeach
                </select>

                <label for="idReference" class="form-control-label">Referencia</label>
                <select name="idReference_fk" id="idReference" class="form-control" value="{{$inventario->idReference_fk}}">
                    @foreach($references as $reference)
                        <option value="{{ $reference->idReference}}" {{$inventario->idReference_fk==$reference->idReference?'selected':''}}>{{$reference->nomReference}}</option>
                    @endforeach
                </select>

                <label for="idModelo" class="form-control-label">Modelo</label>
                <select name="idModelo_fk" id="idModelo" class="form-control" value="{{$inventario->idModelo_fk}}">
                    @foreach($modelos as $modelo)
                        <option value="{{ $modelo->idModelo}}" {{$inventario->idModelo_fk==$modelo->idModelo?'selected':''}}>{{$modelo->nomModelo}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary mt-2">Actualizar</button>
            </form>
        </div>
    </div>
</div>

@endsection