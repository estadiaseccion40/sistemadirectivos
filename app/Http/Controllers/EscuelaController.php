<?php

namespace App\Http\Controllers;

use App\Models\Escuela;
use Illuminate\Http\Request;

class EscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $escuelas = Escuela::all(); // Obtiene todas las escuelas

        return view('escuelas.index', ['escuelas' => $escuelas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('escuelas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'cct' => 'required|max:255|unique:escuelas',
            'direccion' => 'required|max:255',
            'turno' => 'required|max:255',
        ]);

        $cct = $validatedData['cct'];
        auth()->user()->escuelas()->create([
            'nombre' => $validatedData['nombre'],
            'cct' => $cct,
            'direccion' => $validatedData['direccion'],
            'turno' => $validatedData['turno'],
        ]);

        session()->flash('status', 'Escuela con CCT: '.$cct.' ha sido creada');

        return view('escuelas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Escuela $escuela)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Escuela $escuela)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Escuela $escuela)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Escuela $escuela)
    {
        //
    }
}
