<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;

class Carritocontroller extends Controller
{
    //

    public function __construct()
    {
        if(!\Session::has('carrito')) \Session::put('carrito', array());
    }

    public function show()
    {
        $carrito = \Session::get('carrito');
        $total = $this->total();
        return view('Carrito.carrito', compact('carrito','total'));
    }

    public function create(productos $productos)
    {
        $carrito = \Session::get('carrito');
        $productos->cantidad = 1;
        $carrito[$productos->Lote] = $productos;
        \Session::put('carrito', $carrito);
        return redirect()->route('carrito.carrito');
    }

    public function delete(productos $productos)
    {
        $carrito = \Session::get('carrito');
        unset($carrito[$productos->Lote]);
        \Session::put('carrito', $carrito);
        return redirect()->route('carrito.carrito');

    }

    public function trash()
    {
        \Session::forget('carrito');
        return redirect()->route('carrito.carrito');

    }

    public function update(productos $productos, $cantidad)
    {
        $carrito = \Session::get('carrito');
        $carrito[$productos->Lote]->cantidad = $cantidad;
        \Session::put('carrito', $carrito);
        return redirect()->route('carrito.carrito');

    }

    private function total(){

        $carrito = \Session::get('carrito');
        $total = 0;
        foreach ($carrito as $item) {
            $total += $item->Precio * $item->cantidad;
        }
        return $total;
    }

    public function factura(){

        if(count(\Session::get('carrito')) <= 0)   return redirect()->route('productos.index');
        $carrito = \Session::get('carrito');
        $total = $this->total();

            return view ('Factura.factura', compact('carrito', 'total'));

    }



}
