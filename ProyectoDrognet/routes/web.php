<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::bind('productos', function($Lote){
        return App\productos::where('Lote', $Lote)->first();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Nosotros', function () {
    return view('Nosotros');
});


Auth::routes();

Route::get('/Productos/home', 'HomeController@index')->name('home');

//Rutas para la tabla quejaSugerencia
Route::get('/admin/Contacto/Listar','QuejasugerenciaController@index')->name('quejas.index');
Route::get('/admin/Contacto/Create','QuejasugerenciaController@create')->name('quejas.create');
Route::post('/admin/Contacto/Agregar','QuejasugerenciaController@store')->name('quejas.store');
route::get('/admin/Contacto/editar/{Id}','QuejasugerenciaController@edit')->name('quejas.edit');
route::get('/admin/Contacto/update/{Id}','QuejasugerenciaController@update')->name('quejas.update');
route::get('/admin/Contacto/eliminar/{Id}','QuejasugerenciaController@destroy')->name('quejas.destroy');

//Rutas para la tabla Usuarios
 Route::get('/admin/Usuarios/Listar','UsuariosController@index')->name('usuarios.index');
 route::get('/admin/Usuarios/Editar/{id}','UsuariosController@edit')->name('usuarios.editar');
route::get('/admin/Usuarios/update/{id}','UsuariosController@update')->name('usuarios.update');
route::get('/admin/Usuarios/eliminar/{id}','UsuariosController@destroy')->name('usuarios.eliminar');

//Rutas para la tabla TipoMecicamentos

route::get('/admin/Tipomedicamento/Listar','TipomedicamentoController@index')->name('medicamentos.index');
Route::get('/admin/Tipomedicamento/Create','TipoMedicamentoController@create')->name('medicamentos.create');
Route::post('/admin/Tipomedicamento/Agregar','TipoMedicamentoController@store')->name('medicamentos.store');
route::get('/admin/Tipomedicamento/Editar/{Id}','TipoMedicamentoController@edit')->name('medicamentos.edit');
route::get('/admin/Tipomedicamento/update/{Id}','TipoMedicamentoController@update')->name('medicamentos.update');
route::get('/admin/Tipomedicamento/eliminar/{Id}','TipoMedicamentoController@destroy')->name('medicamentos.destroy');

//Rutas para la tabla Productos

route::get('/admin/Productos/home','ProductosController@index')->name('productos.index');
route::get('/admin/Productos/index','ProductosController@indexadmin')->name('productos.indexadmin');
Route::get('/admin/Productos/Create','ProductosController@create')->name('productos.create');
Route::post('/admin/Productos/Agregar','ProductosController@store')->name('productos.store');
route::get('/admin/Productos/Editar/{Id}','ProductosController@edit')->name('productos.editar');
route::get('/admin/Productos/update/{Id}','ProductosController@update')->name('productos.update');
route::get('/admin/Productos/eliminar/{Id}','ProductosController@destroy')->name('productos.eliminar');
route::get('/admin/Productos/Details{Id}','ProductosController@show')->name('productos.detalles');

//Rutas para el carrito
Route::get('/Carrito/carrito', 'CarritoController@show')->name('carrito.carrito');
Route::get('/Carrito/create/{productos}', 'CarritoController@create')->name('carrito.create');
Route::get('/Carrito/delete/{productos}', 'CarritoController@delete')->name('carrito.delete');
Route::get('/Carrito/eliminar', 'CarritoController@trash')->name('carrito.eliminar');
Route::get('/Carrito/update/{productos}/{cantidad?}', 'CarritoController@update')->name('carrito.update');
Route::get('/Factura/factura','CarritoController@factura')->name('factura.factura')->middleware('auth');

//Rutas para realizar el pago con paypal
Route::get('/payment', array('PaypalController@postPayment'))->name('payment.payment');
Route::get('payment/status', array('PaypalController@getPayment'))->name('payment.status');




