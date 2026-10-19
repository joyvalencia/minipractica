<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artistes = Artista::all();
        return view('artistes.index', compact('artistes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artistes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'pais' => 'required|string|max:100',
            'bio' => 'nullable|string',
            'imatge_url' => 'nullable|url',
            'actiu' => 'sometimes|boolean',
        ]);

        Artista::create($validated);

        return redirect()->route('artistes.index')
            ->with('success', 'Artista creat correctament!');
    }

    /**
     * Display the specified resource.
     */

    public function show(Artista $artista)
    {
        return view('artistes.show', compact('artista'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artista $artista)
    {
        return view('artistes.edit', compact('artista'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artista $artista)
    {
        $validated = $request->validate([
           'nom' => 'required|string|max:255',
           'pais' => 'required|string|max:100',
           'bio' => 'nullable|string',
           'imatge_url' => 'nullable|url',
           'actiu' => 'sometimes|boolean',
        ]);

        $artista->update($validated);
        return redirect()->route('artistes.index')
            ->with('success', 'Artista actualitzat correctament!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artista $artista)
    {
        $artista->delete();

        return redirect()->route('artistes.index')
            ->with('success', 'Artista eliminat correctament.');
    }
}
