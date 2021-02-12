<?php

namespace App;

use categorias;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    function juegos(){

        return $this->hasMany(Juego::class);

    }

}
