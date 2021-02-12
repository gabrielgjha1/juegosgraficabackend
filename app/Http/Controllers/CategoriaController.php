<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Juego;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    function index(){

        $categorias = Categoria::all();

        return response()->json(["data" =>$categorias]);


    }

    function BuscarCategoria (Categoria $categoria){

        //con modelo y relacion con eloquent
        //$juegos = $categoria->juegos;

        //con modelo y where
         $juegos = Juego::where('categoria_id',$categoria->id)->with('categoria')->get();

        return response()->json($juegos);

    }




}
