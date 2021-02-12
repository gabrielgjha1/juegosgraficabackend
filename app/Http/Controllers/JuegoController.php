<?php

namespace App\Http\Controllers;

use App\Juego;
use App\Categoria;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class JuegoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Juego::all();

        return response()->json(["data"=>$data,"Mensaje"=>"Todos los datos"]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('before',auth()->user());

        $data = $request->validate([


            'nombre'=>'required',
            'direccion'=>'required',
            'descripcion'=>'required',
            'precio'=>'required',
            'img'=>'image',
            'categoria_id'=>'required',

        ]);



        //guardar con cloudinary


        if ($request->has('img')){

            // $file = $request->file('img');
            // $filename = $file->getClientOriginalName();

            // $filename = pathinfo($filename,PATHINFO_FILENAME);
            // $name_File = str_replace(" ","_",$filename);

            // $extension = $file->getClientOriginalExtension();

            // $picture = date('His') . '-' .$name_File . '.' . $extension;
            // $file->move(public_path('Files/'), $picture );
            // $data['img']  = $picture;

            $uploadedFileUrl = Cloudinary::upload($request->file('img')->getRealPath(),[
                'folder' => 'Trabajos',
                'transformation' => [
                          'width' =>800 ,
                          'height' => 800,
                          'crop' => 'limit'
                 ]
                ])->getSecurePath();


            $data['img']  = $uploadedFileUrl;

        }

        $juego = Juego::create($data);

        return response()->json(["data"=>$data,"mensjae"=>'Los Datos fueron guardado con exito',"usuario"=>auth()->user()]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juego $juego)
    {


        $this->authorize('before',auth()->user());
        $data = $request->validate([


            'nombre'=>'required',
            'direccion'=>'required',
            'descripcion'=>'required',
            'precio'=>'required',
            'categoria_id'=>'required',

        ]);

        if ($request->has('img')){

            $uploadedFileUrl = Cloudinary::upload($request->file('img')->getRealPath(),[
                'folder' => 'Trabajos',
                'transformation' => [
                          'width' =>800 ,
                          'height' => 800,
                          'crop' => 'limit'
                 ]
                ])->getSecurePath();


            $data['img']  = $uploadedFileUrl;

        }
        $juego->nombre = $data['nombre'];
        $juego->direccion = $data['direccion'];
        $juego->descripcion = $data['descripcion'];
        $juego->precio = $data['precio'];
        $juego->categoria_id = $data['categoria_id'];
        $juego->save();

        return response()->json(["data"=>$juego]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Juego  $juego
     * @return \Illuminate\Http\Response
     */
    public function destroy(Juego $juego)
    {

       $this->authorize('before',auth()->user());
       $juegosEliminado = $juego->delete();

       return response()->json(["data"=>$juego,"mensaje"=>"Borrado"]);

    }
    function MasVotados(){

        $juegosVotados = Juego::withCount('voto')->orderBy('voto_count','desc')->with('categoria')->get();

        return response()->json(["data"=>$juegosVotados,"mensaje"=>"Datos Traido Con exito"]);

    }

    function TopMasVotado(){

        $top3 = Juego::withCount('voto')->orderBy('voto_count','desc')->take(3)->with('categoria')->get();

        return response()->json(["data"=>$top3,"mensaje"=>"Datos Traido Con exito"]);
    }

    function VotosJuego(Juego $juego){

        $votos = $juego->voto()->count();
        return response()->json( [  "data" =>   $votos    ] );
    }

    function TraerJuego(Juego $juego){



        $juegos = Juego::where('id',$juego->id)->with('categoria')->get();

        return response()->json(["data"=>$juegos]);


    }

}
