<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagenesPropiedades extends Model
{
    //Una imagen tiene una propiedad
    public function propiedades()
    {
        return $this->hasOne(Propiedades::class, 'id', 'id_propiedad');
    }
}
