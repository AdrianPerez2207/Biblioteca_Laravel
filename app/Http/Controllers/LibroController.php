<?php

namespace App\Http\Controllers;

use App\Http\Resources\LibroISBNResource;
use App\Http\Resources\LibroResource;
use App\Models\Libro;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class LibroController extends Controller
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
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        //
    }
    /*
     * Obtenemos todos los libros de forma paginada.
     * Devolvemos la coleecion de libros llamando al Resource.
     */
    public function api_index(){
        $libros = Libro::paginate(10);

        return LibroResource::collection($libros);
    }

    /*
     * Obtenemos un libro por su ISBN.
     * Si existe, devolvemos el libro llamando al Resource, si no, devolvemos un mensaje de error.
     */
    public function api_show($isbn){
        $libro = Libro::where('isbn', $isbn)->first();

        if (!$libro){
            return response()->json([
                'message' => 'Libro no encontrado'
            ], 404);
        }
        return LibroISBNResource::make($libro);
    }

    /*
     * Eliminamos un libro por su ISBN.
     */
    public function api_destroy($isbn){
        $libro = Libro::where('isbn', $isbn)->first();
        $libro->delete();

        return response()->json([
            'message' => 'Libro eliminado correctamente'
        ]);
    }
    /*
     * Insertamos un libro, le pasamos todos los parámetros por el body.
     * Si se inserta correctamente, devolvemos un mensaje de éxito, si no, devolvemos un mensaje de error.
     */
    public function api_insert(Request $request){
        $libro = new Libro();

        $libro->titulo = $request->titulo;
        $libro->isbn = $request->isbn;
        $libro->portada = $request->portada;
        $libro->anio_publicacion = $request->anio_publicacion;
        $libro->estado = $request->estado;
        $libro->autor_id = $request->autor_id;
        $libro->ubicacion_id = $request->ubicacion_id;

        if ($libro->save()){
            return response()->json([
                'message' => 'Libro insertado correctamente'
            ]);
        } else{
            return response()->json([
                'message' => 'Error al insertar el libro'
            ], 500);
        }
    }
}
