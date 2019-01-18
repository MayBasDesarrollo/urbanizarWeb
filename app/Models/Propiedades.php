<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    //Una propiedad tiene muchas imagenes
    public function imagenesPropiedades()
    {
        return $this->hasMany(ImagenesPropiedades::class, 'propiedad_id');
    }

    //Una propiedad tiene muchas caracteristicas
    public function caracteristicasPropiedades()
    {
        return $this->hasMany(CaracteristicasPropiedades::class, 'propiedad_id');
    }

}
