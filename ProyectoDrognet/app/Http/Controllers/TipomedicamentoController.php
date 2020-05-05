<?php

namespace App\Http\Controllers;

use App\tipomedicamentos;
use Illuminate\Http\Request;

class TipomedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicamentos = tipomedicamentos::all(); 
        return view ('/admin/TipoMedicamentos/Listar',['medicamentos'=>$medicamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.TipoMedicamentos.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        tipomedicamentos::create([
            'Nombre'=>request('nombre'),
           
       ]);

         return redirect()->route('medicamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipomedicamentos  $tipomedicamentos
     * @return \Illuminate\Http\Response
     */
    public function show(tipomedicamentos $tipomedicamentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tipomedicamentos  $tipomedicamentos
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        //
        $medicamentos = tipomedicamentos::findOrFail($Id);
        return view('/admin/TipoMedicamentos/Editar',['medicamentos'=>$medicamentos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipomedicamentos  $tipomedicamentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id)
    {
        //
        $medicamentos = tipomedicamentos::findOrFail($Id);
        $medicamentos->update([
            'Nombre'=>request('nombre'),
          
        ]);
        return redirect()->route('medicamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipomedicamentos  $tipomedicamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        //
        $medicamentos = tipomedicamentos::findOrFail($Id);
        $medicamentos->delete();
        return redirect()->route('medicamentos.index');
    }
}