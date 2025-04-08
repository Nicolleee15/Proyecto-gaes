<?php

namespace App\Http\Controllers;

use App\Models\Tiporepuesto;
use Illuminate\Http\Request;

class TiporepuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tiporepuestos = Tiporepuesto::all();
        return view('tiporepuesto.index', ['tiporepuestos' => $tiporepuestos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tiporepuesto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|min:3|max:30|unique:tipo_repuesto',
            'stock' => 'required|integer|min:0',
        ]);

        Tiporepuesto::create($request->all());

        return redirect()->route('tiporepuesto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tiporepuesto $tiporepuesto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tiporepuesto $tiporepuesto)
    {
        return view('tiporepuesto.edit', compact('tiporepuesto'), ['tipo' => $tiporepuesto]);
        //return view ('marca.edit', ['nomMarca'=>$marca]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tiporepuesto $tiporepuesto)
    {
        $request->validate([
            'tipo' => 'required|min:3|max:30|unique:tipo_repuesto',
            'stock' => 'required|integer|min:0',
        ]);

        $tiporepuesto->update($request->all());

        return redirect()->route('tiporepuesto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tiporepuesto $tiporepuesto)
    {
        $tiporepuesto->delete();

        return redirect()->route('tiporepuesto.index');
    }
}
