<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{

    protected $fillable = [

        'nombre',
        'direccion',
        'descripcion',
        'precio',
        'categoria_id',
        'img'

    ];

    function categoria(){

        return $this->belongsTo(Categoria::class);

    }

    function voto(){

        return $this->belongsToMany(User::class,'votacions','juego_id','user_id');

    }

}
