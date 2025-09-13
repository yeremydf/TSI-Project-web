<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;
use App\Models\Ubicacion;
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
        $autores = Autor::all();
        $ubicaciones = Ubicacion::all();
        return view('libros.create', compact('autores', 'ubicaciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'isbn_libro' => 'required|numeric|unique:libros,isbn_libro',
            'nom_libro' => 'required|string|max:255',
            'fecha_publicacion' => 'required|date',
            'editorial' => 'required|string|max:255',
            'genero_literario' => 'required|string|max:255',
            'cantidad_disponible' => 'required|integer|min:1',
            'id_ubicacion' => 'required|exists:ubicaciones,id_ubicacion',
            'id_detalle_autores' => 'required|exists:autores,id_autor',
            'imagen' => 'nullable|image|max:2048',
        ]);
        $libro = new Libro();
        $libro->isbn_libro = $request->isbn_libro;
        $libro->nom_libro = $request->nom_libro;
        $libro->fecha_publicacion = $request->fecha_publicacion;
        $libro->editorial = $request->editorial;
        $libro->genero_literario = $request->genero_literario;
        $libro->cantidad_disponible = $request->cantidad_disponible;
        $libro->id_ubicacion = $request->id_ubicacion;
        $libro->id_detalle_autores = $request->id_detalle_autores;

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $path = $file->store('libros', 'public');
            $libro->imagen = $path;
        }

        $libro->save();

        return redirect()->route('libros.create')->with('success', 'Libro agregado correctamente');
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
