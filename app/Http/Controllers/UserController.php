<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('before',auth()->user());
        $usuarios = User::all();

        return response()->json(["Data"=>$usuarios,"mensaje"=>"Datos con exito"]);

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        $this->authorize('before',auth()->user());
        if ( $user->role==="admin_role" ){

            $user->role = "user_role";
        }else{

            $user->role = "admin_role";

        }

        $user->save();


        return response()->json(["data"=>$user,"mensaje"=>"datos actualizado con exito"]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        $this->authorize('before',auth()->user());

        $user->delete();

        return response()->json(["data"=>$user,"mensaje"=>"datos Eliminados con exito"]);

    }
}
