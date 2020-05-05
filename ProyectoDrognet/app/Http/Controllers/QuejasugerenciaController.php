<?php

namespace App\Http\Controllers;

use App\quejasugerencias;
use Illuminate\Http\Request;

class QuejasugerenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quejas = quejasugerencias::paginate(2);
        return view('/admin/Contacto/Listar',['quejas'=>$quejas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.Contacto.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         quejasugerencias::create([
            'Tema'=>request('Tema'),
             'Descripcion'=>request('Descripcion'),
             'Fecha'=>request('Fecha')
       ]);

         return redirect()->route('quejas.create')
         ->with('message', 'Su mensaje se han enviado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\quejasugerencias  $quejasugerencia
     * @return \Illuminate\Http\Response
     */
    public function show(quejasugerencias $quejasugerencias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\quejasugerencia  $quejasugerencia
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        //
        $quejas = quejasugerencias::findOrFail($Id);
        return view('Contacto/Edit',['quejas'=>$quejas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\quejasugerencia  $quejasugerencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id)
    {
        //
        $quejas = quejasugerencias::findOrFail($Id);
        $quejas->update([
            'Tema'=>request('Tema'),
            'Descripcion'=>request('Descripcion'),
            'Fecha'=>request('Fecha')
        ]);
        return redirect()->route('quejas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\quejasugerencia  $quejasugerencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        //
        $quejas = quejasugerencias::findOrFail($Id);
        $quejas->delete();
        return redirect()->route('quejas.index');
    }
}