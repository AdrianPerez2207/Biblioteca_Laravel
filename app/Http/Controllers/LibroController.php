<?php

namespace App\Http\Controllers;

use App\Http\Resources\LibroISBNResource;
use App\Http\Resources\LibroResource;
use App\Models\Autor;
use App\Models\Libro;
use App\Models\Ubicacion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Termwind\Components\Li;
use function PHPUnit\Framework\isNull;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::paginate(12);
        return \view('vistaLibro', ['libros' => $libros]);
    }

    /**
     * Recuperamos los autores, ubicaiones, libros y estados para mostrarlos en la vista.
     */
    public function reporte()
    {
        $autores = Autor::all();
        $ubicaciones = Ubicacion::all();
        $libros = Libro::paginate(12);
        $estados = Libro::select('estado')->distinct()->get();
        return \view('reporteBiblioteca', ['libros' => $libros], compact('autores', 'ubicaciones', 'estados'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autores = Autor::all();
        $ubicaciones = Ubicacion::all();
        return \view('nuevoLibro', compact('autores', 'ubicaciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Libro::create([
            'titulo' => $request->titulo,
            'isbn' => str_pad(rand(0, 9999999999999),13, 0, STR_PAD_LEFT),
            'portada' => $request->portada,
            'anio_publicacion' => $request->anio_publicacion,
            'estado' => 'disponible',
            'autor_id' => $request->autor,
            'ubicacion_id' => $request->ubicacion
        ]);
        return redirect()->route('libros.index')->with('mensaje', 'Libro creado correctamente');
    }

    /**
     * Le pasamos a través del formulario los campos que queremos buscar.
     * @param Request $request
     * @return el objeto o los objetos que concuerde con la búsqueda
     */
    public function search(Request $request)
    {
        $libros = Libro::where('titulo', 'like', '%'.$request->titulo.'%')
            ->where('isbn', 'like', '%'.$request->isbn.'%')
            ->where('autor_id', 'like', '%'.$request->autor_id.'%')->paginate(10);

        return view('vistaLibro', ['libros' => $libros]);
    }

    /**
     * Filtros de búsqueda de reporte,tenemos que guardar en una variable la comprobación de si autor, ubicacion o estado
     * vienen vacíos o con algún valor, si vienen vacíos, le asignamos '%%' para que busque todos los valores.
     */
    public function reportSearch(Request $request)
    {
        $autores = Autor::all();
        $ubicaciones = Ubicacion::all();

        $autor = is_null($request->autor_id) ? '%%' : $request->autor_id;
        $ubicacion = is_null($request->ubicacion_id) ? '%%' : $request->ubicacion_id;
        $estado = is_null($request->estado) ? '%%' : $request->estado;

        $libros = Libro::where('titulo', 'like', '%'.$request->titulo.'%')
            ->where('autor_id', 'like', $autor)
            ->where('ubicacion_id', 'like', $ubicacion)
            ->where('estado', 'like', $estado)
            ->paginate(12);

        $estados = Libro::select('estado')->distinct()->get();

        return view('reporteBiblioteca', ['libros' => $libros], compact('autores', 'ubicaciones', 'estados'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        $autores = Autor::all();
        $ubicaciones = Ubicacion::all();
        return view('editarLibro', compact('autores', 'ubicaciones', 'libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        $libro->update($request->all());
        $libro->save();
        return redirect()->route('libros.index')->with('mensaje', 'Libro actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return back();
//        return redirect()->route('libros.index');
    }
    public function prestar(Request $request, Libro $libro)
    {
        if ($libro->estado == 'disponible'){
            $libro->estado = 'prestado';
            $libro->save();
        } elseif ($libro->estado == 'prestado'){
            $libro->estado = 'extraviado';
            $libro->save();
        } else{
            $libro->estado = 'disponible';
            $libro->save();
        }

        return back();
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
