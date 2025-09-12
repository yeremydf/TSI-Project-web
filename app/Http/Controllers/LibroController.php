<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Libro::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'isbn' => 'required|string|max:50|unique:libros,isbn',
            'titulo' => 'required|string|max:150',
            'autor' => 'required|string|max:100',
            'genero' => 'nullable|string|max:50',
            'fecha_publicacion' => 'nullable|date',
            'stock_total' => 'required|integer|min:0',
            'stock_disponible' => 'required|integer|min:0',
        ]);

        $validated['stock_disponible'] = $validated['stock_total'];

        return Libro::create($validated);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Libro::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $libro = Libro::findOrFail($id);

        $validated = $request->validate([
            'isbn' => 'required|string|max:50|unique:libros,isbn,' . $libro->id,
            'titulo' => 'required|string|max:150',
            'autor' => 'required|string|max:100',
            'genero' => 'nullable|string|max:50',
            'fecha_publicacion' => 'nullable|date',
            'stock_total' => 'required|integer|min:0',
            'stock_disponible' => 'required|integer|min:0',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return response()->json(['message' => 'Libro eliminado correctamente']);
    }
}
