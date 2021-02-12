<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signUp');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');

        //votaciones
        Route::put('/votacion/{juego}','VotacionController@update');
        Route::get('/cvotacion/{juego}','VotacionController@ComprobarVoto');

        //juegos
        Route::post('/juegos','JuegoController@store')->name('juegos.store');
        Route::put('/juegos/{juego}','JuegoController@update')->name('juegos.update');
        Route::delete('/juegos/{juego}','JuegoController@destroy')->name('juegos.store');

        //usuarios
        Route::get('/usuarios','UserController@index')->name('user.index');
        Route::put('/usuarios/{user}','UserController@update')->name('user.update');
        Route::delete('/usuarios/{user}','UserController@destroy')->name('user.destroy');

    });
});

// juegos
Route::get('/juegos','JuegoController@index')->name('juegos.index');
Route::get('/juegosmasvotados','JuegoController@MasVotados')->name('juegos.MasVotados');

Route::get('/juegostop','JuegoController@TopMasVotado')->name('juegos.MasVotados');
Route::get('/cuentovotos/{juego}','JuegoController@VotosJuego')->name('juegos.MasVotados');

Route::get('/traerjuego/{juego}','JuegoController@TraerJuego')->name('juegos.TraerJuego');


//categorias
Route::get('/categoria','CategoriaController@index')->name('categoria.index');
Route::get('/categoria/{categoria}','CategoriaController@BuscarCategoria');

//votacion
