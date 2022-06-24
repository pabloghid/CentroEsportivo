<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('ajax', function () {
    return view('message');
});

Route::post('/getmsg', '\App\Http\Controllers\AjaxController@index');

///rotas para o ajax
Route::post('/getHorarios', '\App\Http\Controllers\JogosController@getHorarios');
Route::post('/getArenas', '\App\Http\Controllers\JogosController@getArenas');

Route::get('jogos', [\App\Http\Controllers\JogosController::class, 'index']);
Route::get('jogos/create', [\App\Http\Controllers\JogosController::class, 'create']);

Route::group(['prefix' => 'admin/modalidades'], function () {
    Route::get('',              ['as' => 'modalidades',    'uses' => '\App\Http\Controllers\ModalidadesController@index']);
    Route::get('create',       ['as' => 'modalidades.create',    'uses' => '\App\Http\Controllers\ModalidadesController@create']);
    Route::post('store',       ['as' => 'modalidades.store',    'uses' => '\App\Http\Controllers\ModalidadesController@store']);
    Route::get('{id}/destroy',  ['as' => 'modalidades.destroy',    'uses' => '\App\Http\Controllers\ModalidadesController@destroy']);
    Route::get('{id}/edit',     ['as' => 'modalidades.edit',    'uses' => '\App\Http\Controllers\ModalidadesController@edit']);
    Route::put('{id}/update',   ['as' => 'modalidades.update',    'uses' => '\App\Http\Controllers\ModalidadesController@update']);
});

Route::group(['prefix' => 'admin/arenas'], function () {
    Route::get('',              ['as' => 'arenas',    'uses' => '\App\Http\Controllers\ArenasController@index']);
    Route::get('create',       ['as' => 'arenas.create',    'uses' => '\App\Http\Controllers\ArenasController@create']);
    Route::post('store',       ['as' => 'arenas.store',    'uses' => '\App\Http\Controllers\ArenasController@store']);
    Route::get('{id}/destroy',  ['as' => 'arenas.destroy',    'uses' => '\App\Http\Controllers\ArenasController@destroy']);
    Route::get('{id}/edit',     ['as' => 'arenas.edit',    'uses' => '\App\Http\Controllers\ArenasController@edit']);
    Route::put('{id}/update',   ['as' => 'arenas.update',    'uses' => '\App\Http\Controllers\ArenasController@update']);
});

Route::group(['prefix' => 'admin/arenaModalidades'], function () {
    Route::get('',              ['as' => 'arenaModalidades',    'uses' => '\App\Http\Controllers\ArenaModalidadesController@index']);
    Route::get('create',       ['as' => 'arenaModalidades.create',    'uses' => '\App\Http\Controllers\ArenaModalidadesController@create']);
    Route::post('store',       ['as' => 'arenaModalidades.store',    'uses' => '\App\Http\Controllers\ArenaModalidadesController@store']);
    Route::get('{id}/destroy',  ['as' => 'arenaModalidades.destroy',    'uses' => '\App\Http\Controllers\ArenaModalidadesController@destroy']);
    Route::get('{id}/edit',     ['as' => 'arenaModalidades.edit',    'uses' => '\App\Http\Controllers\ArenaModalidadesController@edit']);
    Route::put('{id}/update',   ['as' => 'arenaModalidades.update',    'uses' => '\App\Http\Controllers\ArenaModalidadesController@update']);
});

Route::group(['prefix' => 'admin/horarios'], function () {
    Route::get('',              ['as' => 'horarios',    'uses' => '\App\Http\Controllers\HorariosController@index']);
    Route::get('create',       ['as' => 'horarios.create',    'uses' => '\App\Http\Controllers\HorariosController@create']);
    Route::post('store',       ['as' => 'horarios.store',    'uses' => '\App\Http\Controllers\HorariosController@store']);
    Route::get('{id}/destroy',  ['as' => 'horarios.destroy',    'uses' => '\App\Http\Controllers\HorariosController@destroy']);
    Route::get('{id}/edit',     ['as' => 'horarios.edit',    'uses' => '\App\Http\Controllers\HorariosController@edit']);
    Route::put('{id}/update',   ['as' => 'horarios.update',    'uses' => '\App\Http\Controllers\HorariosController@update']);
});

Route::group(['prefix' => 'admin/administradores'], function () {
    Route::get('',              ['as' => 'administradores',    'uses' => '\App\Http\Controllers\AdminController@index']);
    Route::get('create',       ['as' => 'administradores.create',    'uses' => '\App\Http\Controllers\AdminController@create']);
    Route::post('store',       ['as' => 'administradores.store',    'uses' => '\App\Http\Controllers\AdminController@store']);
    Route::get('{id}/destroy',  ['as' => 'administradores.destroy',    'uses' => '\App\Http\Controllers\AdminController@destroy']);
    Route::get('{id}/edit',     ['as' => 'administradores.edit',    'uses' => '\App\Http\Controllers\AdminController@edit']);
    Route::put('{id}/update',   ['as' => 'administradores.update',    'uses' => '\App\Http\Controllers\AdminController@update']);
});

Route::group(['prefix' => 'admin/pessoas'], function () {
    Route::get('',              ['as' => 'pessoas',    'uses' => '\App\Http\Controllers\PessoaController@index']);
    Route::get('{id}/destroy',  ['as' => 'pessoas.destroy',    'uses' => '\App\Http\Controllers\PessoaController@destroy']);
    Route::get('{id}/edit',     ['as' => 'pessoas.edit',    'uses' => '\App\Http\Controllers\PessoaController@edit']);
    Route::put('{id}/update',   ['as' => 'pessoas.update',    'uses' => '\App\Http\Controllers\PessoaController@update']);
});

Route::group(['prefix' => 'jogos'], function () {
    Route::get('',              ['as' => 'jogos',    'uses' => '\App\Http\Controllers\JogosController@index']);
    Route::get('create',       ['as' => 'jogos.create',    'uses' => '\App\Http\Controllers\JogosController@create']);
    Route::post('store',       ['as' => 'jogos.store',    'uses' => '\App\Http\Controllers\JogosController@store']);
    Route::get('{id}/destroy',  ['as' => 'jogos.destroy',    'uses' => '\App\Http\Controllers\JogosController@destroy']);
    Route::get('{id}/edit',     ['as' => 'jogos.edit',    'uses' => '\App\Http\Controllers\JogosController@edit']);
    Route::put('{id}/update',   ['as' => 'jogos.update',    'uses' => '\App\Http\Controllers\JogosController@update']);
});

Route::group(['prefix' => 'login'], function () {
    Route::get('',             ['as' => 'login',    'uses' => '\App\Http\Controllers\LoginController@index']);
    Route::post('verificar',    ['as' => 'login.verificar',    'uses' => '\App\Http\Controllers\LoginController@verificar']);
    Route::get('sucesso',    ['as' => 'login.sucesso',    'uses' => '\App\Http\Controllers\LoginController@loginSucesso']);
    Route::get('loginErro',    ['as' => 'login.loginErrro',    'uses' => '\App\Http\Controllers\LoginController@index']);
});

Route::group(['prefix' => 'registro'], function () {
    Route::get('',             ['as' => 'registro',    'uses' => 'App\Http\Controllers\RegistroController@index']);
    Route::post('store',    ['as' => 'registro.store',    'uses' => '\App\Http\Controllers\RegistroController@store']);
});


Route::get('/', function () {
    return view('index');
});

Route::get('/horarios', function () {
    return view('selecHorario');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('',             ['as' => 'admin',    'uses' => 'App\Http\Controllers\AdministradorController@index']);
});
Route::get('/previsao{data?}', '\App\Http\Controllers\JogosController@previsao')->name('previsao');

Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::get('sobre', [\App\Http\Controllers\SobreController::class, 'sobre'])->name('sobre');;
