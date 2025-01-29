<?php

namespace App\Http\Controllers;

use App\Http\Resources\AutorResource;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
        //
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
