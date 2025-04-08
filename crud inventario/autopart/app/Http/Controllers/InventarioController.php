<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Marca;
use App\Models\Color;
use App\Models\Proveedor;
use App\Models\Reference;
use App\Models\Modelo;
use App\Models\Tiporepuesto;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventarios = Inventario::all();
        return view('inventario.index', ['inventarios' => $inventarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marcas = Marca::all();
        $tiporepuestos = Tiporepuesto::all();
        $colors = Color::all();
        $proveedores = Proveedor::all();
        $references = Reference::all();
        $modelos = Modelo::all();
    
        // Pasar todas las variables a la vista en un solo return
        return view('inventario.create', [
            'marcas' => $marcas,
            'tiporepuestos' => $tiporepuestos,
            'colors' => $colors,
            'proveedores' => $proveedores,
            'references' => $references,
            'modelos' => $modelos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'estado' => 'required|string|max:15',
            'ubi_pasillo' => 'required|string|max:15',
            'ubi_estanteria' => 'required|string|max:15',
            'precio_unitario' => 'required|integer',
            'fecha_ingreso' => 'required|date',
            'cantidad_ingresada' => 'required|integer',
            'estado_activacion' => 'required|string|max:15',
            'idMarca_fk' => 'required',
            'idTipo_fk' => 'required',
            'idColor_fk' => 'required',
            'idProveedor_fk' => 'required',
            'idReference_fk' => 'required',
            'idModelo_fk' => 'required'
        ]);

        Inventario::create($request->all());

        return redirect()->route('inventario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inventario $inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventario $inventario)
    {
        $marcas = Marca::all();
        $tiporepuestos = Tiporepuesto::all();
        $colors = Color::all();
        $proveedores = Proveedor::all();
        $references = Reference::all();
        $modelos = Modelo::all();

    // Pasar la variable $inventario junto con otras variables necesarias a la vista
        return view('inventario.edit', [
            'inventario' => $inventario,
            'marcas' => $marcas,
            'tiporepuestos' => $tiporepuestos,
            'colors' => $colors,
            'proveedores' => $proveedores,
            'references' => $references,
            'modelos' => $modelos
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inventario $inventario)
    {
        $request->validate([
            'estado' => 'required|string|max:15',
            'ubi_pasillo' => 'required|string|max:15',
            'ubi_estanteria' => 'required|string|max:15',
            'precio_unitario' => 'required|integer',
            'fecha_ingreso' => 'required|date',
            'cantidad_ingresada' => 'required|integer',
            'estado_activacion' => 'required|string|max:15',
            'idMarca_fk' => 'required',
            'idTipo_fk' => 'required',
            'idColor_fk' => 'required',
            'idProveedor_fk' => 'required',
            'idReference_fk' => 'required',
            'idModelo_fk' => 'required'
        ]);

        $inventario->update($request->all());

        return redirect()->route('inventario.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventario $inventario)
    {
        $inventario->delete();
        return redirect()->route('inventario.index');
    }
}
