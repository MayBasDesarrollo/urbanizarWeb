<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    //

    public function imagenesPropiedades()
    {
        return $this->hasMany(ImagenesPropiedades::class);
    }
}
