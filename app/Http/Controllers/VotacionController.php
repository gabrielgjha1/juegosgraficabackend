<?php

namespace App\Http\Controllers;

use App\Juego;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VotacionController extends Controller
{

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juego $juego)
    {
        $votacion = auth()->user()->voto()->toggle($juego);
        return response()->json( ["data" => [$juego->id,$juego->nombre],"mensaje"=>"Su votacion fue hecha","Votacion"=>$votacion]);

    }

    public function ComprobarVoto(Juego $juego){

        $IdUsuario = auth()->user()->id;
        $votacion = auth()->user()->voto()->where('juego_id',$juego->id)->where('user_id',$IdUsuario)->get();

        $resultado =  $votacion->count() > 0 ? true : false;


        // $consulta = DB::table('votacions')->where('juego_id',$juego->id)->get();

       return response()->json(["data"=>$resultado]);


    }

}
