<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipomedicamentos extends Model
{
    //
    protected $table = 'tipomedicamentos';

    protected $fillable=['IdTipoMedicamento','Nombre'];

    protected $primaryKey ='IdTipoMedicamento';
}
