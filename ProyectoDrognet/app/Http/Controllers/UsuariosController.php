<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class Usuarioscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios = User::all();
        return view('admin/Usuarios/listar',['usuarios'=>$usuarios]);

      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //en esta linea busca el usuario
        $usuarios=User::findOrFail($id);
        return view('/admin/Usuarios/Editar', compact('usuarios'));
     }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $usuarios=User::findOrFail($id);
       $usuarios->update([
        'rol_id'=>$request['rol'],
       'name'=>$request['name'],
       'email'=>$request['email'],
       'password'=>$request['password']
       ]);
       return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $usuarios=User::findOrFail($id);
        $usuarios->delete();
           return redirect()->route('usuarios.index');
    }
}