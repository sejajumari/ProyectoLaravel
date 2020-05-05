<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quejasugerencias extends Model
{
    //
    protected $table = 'quejasugerencias';

    protected $fillable=[
    'IdQuejaSugerencia',
    'Tema',
    'Descripcion',
    'Fecha'

];

    protected $primaryKey ='IdQuejaSugerencia';

}
