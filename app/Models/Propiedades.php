<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    //

    public function imagenesPropiedades()
    {
        return $this->hasMany(ImagenesPropiedades::class, 'propiedad_id');
    }
    
    //Una propiedad tiene un tipo de propiedad
    // public function tipoPropiedades()
    // {
    //     return $this->belongsTo(TipoPropiedades::class);
    // }
}
