<?php

namespace App\Http\Controllers;

use App\Http\Resources\AutorResource;
use App\Models\Autor;
use Illuminate\Http\Request;
use Illuminate\View\View;
use function Laravel\Prompts\table;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autor::paginate(10);
        return \view('vistaAutor', ['autores' => $autores]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Autor $autor)
    {
        return \view('nuevoAutor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Autor::create([
            'nombre' => $request->nombre,
            'nacionalidad' => $request->nacionalidad,
            'fecha_nacimiento' => $request->fecha_nacimiento,
            'biografia' => $request->biografia,
            'codigoDewey' => str_pad(rand(0, 999), 3, '0', STR_PAD_LEFT), // Generar código Dewey aleatorio
        ]);

        return redirect()->route('autores.index')->with('mensaje', 'Autor creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        $autor->delete();
        return redirect()->route('autores.index');
    }

    /*
     * Obtenemos todos los autores de forma paginada.
     * Devolvemos la colección de autores llamando al Resource.
     */
    public function api_index(){
        $autores = Autor::paginate(3);

        return AutorResource::collection($autores);
    }
    /*
     * Obtenemos un autor por su id.
     * Devolvemos el autor llamando al Resource.
     */
    public function api_show($id){
        $autor = Autor::find($id);

        return AutorResource::make($autor);
    }
}
