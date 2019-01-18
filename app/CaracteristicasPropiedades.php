<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracteristicasPropiedades extends Model
{
    //
    public function tipoCaracteristicas()
    {
        return $this->hasMany(TipoCaracteristicas::class, 'id', 'tcarac_id');
    }

    //Una caracteristica tiene una propiedad
    public function propiedades()
    {
        return $this->hasOne(Propiedades::class, 'id', 'propiedad_id');
    }
}
