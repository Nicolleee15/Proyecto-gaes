<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $references = Reference::all();
        return view('reference.index', ['references' => $references]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reference.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomReference' => 'required|min:3|max:20|unique:reference',
        ]);

        Reference::create($request->all());

        return redirect()->route('reference.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reference $reference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reference $reference)
    {
        return view('reference.edit', compact('reference'), ['nomReference' => $reference]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reference $reference)
    {
        $request->validate([
            'nomReference' => 'required|min:3|max:20|unique:reference'
        ]);

        $reference->update($request->all());

        return redirect()->route('reference.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reference $reference)
    {
        $reference->delete();

        return redirect()->route('reference.index');
    }
}
