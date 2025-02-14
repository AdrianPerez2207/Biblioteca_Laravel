<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\Ubicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ubicaciones = Ubicacion::all();
        return \view('vistaUbicaciones', ['ubicaciones' => $ubicaciones]);
    }
    public function newLocation()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return \view('nuevaUbicacion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ubicacion::create([
            'biblioteca' => $request->biblioteca,
            'direccion' => $request->direccion,
            'numero_estanteria' => $request->numero_estanteria
        ]);
        return redirect()->route('ubicaciones.index')->with('mensaje', 'Ubicación creada correctamente');
    }
    /**
     * Le pasamos a través del formulario el id de la ubicación.
     * @param Request $request
     * devulve todos los libros que tenemos en la ubicación seleccionada.
     */
    public function search(Ubicacion $ubicacion)
    {
        $libros = Libro::where('ubicacion_id', $ubicacion->id)
            ->paginate(10);

        return view('vistaLibro', ['libros' => $libros]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ubicacion $ubicacion)
    {
        $ubicacion->delete();
        return back();
//        return redirect()->route('ubicaciones.index');
    }
}
