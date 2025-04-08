<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modelos = Modelo::all();
        return view('modelo.index', ['modelos' => $modelos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modelo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomModelo' => 'required|min:3|max:20|unique:modelo',
        ]);

        Modelo::create($request->all());

        return redirect()->route('modelo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Modelo $modelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modelo $modelo)
    {
        return view('modelo.edit', compact('modelo'), ['nomModelo' => $modelo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Modelo $modelo)
    {
        $request->validate([
            'nomModelo' => 'required|min:3|max:20|unique:modelo']);

        $modelo->update($request->all());

        return redirect()->route('modelo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modelo $modelo)
    {
        $modelo->delete();

        return redirect()->route('modelo.index');
    }
}
