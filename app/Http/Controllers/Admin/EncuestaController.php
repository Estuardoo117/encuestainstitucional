<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Encuesta;/*se agrega esta linea */
use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    /**
     * Muestra el panel de administracion con las encuestas
     */
    public function index()
    {
        //
        $encuestas= Encuesta::ordeeBy('anio','desc')->get();
        return view('admin.encuesta.index', compact('encuestas'));
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
    public function store(Request $request, Encuesta $encuesta)
    {
        //
        $request->validate([
            'anio'=>[
                'required',
                'integer',
                'min:2020',
                'max:2100',
                'unique:encuestas,anio',
            ],
        ],[
            'anio.required'=>'El año es obligatorio.',
            'anio.integer'=>'El año debe ser un numero.',
            'anio.min'=>'El año no es valido.',
            'anio.max'=>'El año no es valido.',
            'anio.unique'=>'Ya existe una encuesta para ese año.',
        ]);

       $encuesta->update([
        'anio'=>$request->anio,
       ]);

        return redirect()
        ->route('admin.encuestas.index')
        ->with('success','La encuesta fue creada correctamente');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Encuesta $encuesta)
    {
        //
        $encuesta->delete();

        return redirect()
        ->route('admin.encuesta.index')
        ->with('success', 'la encuesta fue eliminada correctamente.');

    }
}
