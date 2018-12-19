<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    //
    public function users()
    {
        return $this->hasMany(User::class);//un modelo con mcuhos otros modelos
                                           //regresan una coleccion
    }
}
