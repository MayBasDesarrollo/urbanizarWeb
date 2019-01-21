<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoCaracteristicas extends Model
{
    //
    public function caracteristicasPropiedades()
    {
        return $this->hasOne(CaracteristicasPropiedades::class, 'tcarac_id');
    }
}
