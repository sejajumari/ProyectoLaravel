<?php

namespace App\Http\Controllers;

use App\productos;
use App\tipomedicamentos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = \DB::table('productos')
        ->join('tipomedicamentos','tipomedicamentos.IdTipoMedicamento','productos.IdTipoMedicamento')
        ->select('productos.Lote','productos.IdProducto','productos.Nombre','productos.Imagen','productos.Precio','productos.Laboratorio','tipomedicamentos.Nombre as tip')->paginate(3);
        return view('admin/Productos/home',['productos'=>$productos]);
    }

    public function indexadmin()
    {
        //
        $productos = \DB::table('productos')
        ->join('tipomedicamentos','tipomedicamentos.IdTipoMedicamento','productos.IdTipoMedicamento')
        ->select('productos.Lote','productos.IdProducto','productos.Nombre','productos.Imagen','productos.Precio','productos.FechaVencimiento','productos.Laboratorio','tipomedicamentos.Nombre as tip')->paginate(4);
        return view('admin/Productos/index',['productos'=>$productos]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tipomedicamento = tipomedicamentos::orderBy('Nombre','asc')->get();
        return view('admin.Productos.Create',['tipomedicamento'=>$tipomedicamento]);
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
        productos::create([
            'Nombre'=>request('Nombre'),
            'IdTipoMedicamento'=>request('tipomedicamento'),
            'Imagen'=>request()->file('Imagen')->store('public'),
            'Laboratorio'=>request('Laboratorio'),
            'Precio'=>request('Precio'),
            'Lote'=>request('Lote'),
            'FechaVencimiento'=>request('FechaVencimiento')
        ]);
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show($Id)
    {
        //
        
        $productos = \DB::table('productos') 
        ->join('tipomedicamentos','tipomedicamentos.IdTipoMedicamento','productos.IdTipoMedicamento')
        ->select('productos.FechaVencimiento','productos.IdProducto','productos.Nombre as Nombre','productos.Imagen'
        ,'productos.Precio','productos.Laboratorio','tipomedicamentos.Nombre as tip','productos.Lote')
        ->where('productos.IdProducto','=',$Id)->get();
        return view('/admin/Productos/Details',['productos'=>$productos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($Id)
    {
        //
         //en esta linea busca el producto
         $productos=productos::findOrFail($Id);
         //trae todos los departamentos
         $medicamentos=tipomedicamentos::orderBy('Nombre','ASC')->get();
         //busca el id del nombre del departamento que tiene asignada la ciudad se muestra de primero en la vista
         return view('admin.Productos.Editar')->with('productos',$productos)->with('medicamentos',$medicamentos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id)
    {
        
        $productos = productos::findOrFail($Id);
        $productos->update([
           'Nombre'=>request('Nombre'),
        'IdTipoMedicamento'=>request('medicamento'),
             'Imagen'=>request()->file('Imagen')->store('public'),
             'Laboratorio'=>request('Laboratorio'),
             'Precio'=>request('Precio'),
            'Lote'=>request('Lote'),
            'FechaVencimiento'=>request('FechaVencimiento')

         ]);
     return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id)
    {
        //
        $productos=productos::findOrFail($Id);
        $productos->delete();
           return redirect()->route('productos.index');
    }
}