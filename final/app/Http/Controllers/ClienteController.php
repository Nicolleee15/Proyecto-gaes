<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $clientes = Cliente::all(); // o lo que uses para obtener los clientes
        return view('cliente.index', compact('clientes'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pk_cod_cliente' => 'required|string|min:6|max:10|unique:clientes,pk_cod_cliente',
            'Pnombre_cliente' => 'required|min:3|max:50',
            'Snombre_cliente' => 'nullable|min:3|max:50',
            'Papellido_cliente' => 'required|min:3|max:50',
            'Sapellido_cliente' => 'nullable|min:3|max:50',
            'telefono_cliente' => 'required|min:10|max:15',
            'correo_cliente' => 'required|email|max:100|unique:clientes,correo_cliente',
            'direccion_cliente' => 'required|string|max:100',
        ]);

        Cliente::create($request->all());

        return redirect()->route('cliente.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('cliente.edit', ['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'pk_cod_cliente' => 'required|string|min:6|max:10|unique:clientes,pk_cod_cliente',
            'Pnombre_cliente' => 'required|min:3|max:50',
            'Snombre_cliente' => 'nullable|min:3|max:50',
            'Papellido_cliente' => 'required|min:3|max:50',
            'Sapellido_cliente' => 'nullable|min:3|max:50',
            'telefono_cliente' => 'required|min:10|max:15',
            'correo_cliente' => 'required|email|max:100|unique:clientes,correo_cliente',
            'direccion_cliente' => 'required|string|max:100',
        ]);

        $cliente->update($request->all());
        return redirect()->route('cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index')->with('success', 'Cliente eliminado correctamente');
    }
}
