<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    //
    protected $table = "productos";

    protected $fillable = [
        'IdProducto',
        'IdTipoMedicamento',
        'Nombre',
        'Imagen',
        'Laboratorio',
        'Precio',
        'Lote',
        'FechaVencimiento'

    ];

    protected $primaryKey = 'IdProducto';
}
