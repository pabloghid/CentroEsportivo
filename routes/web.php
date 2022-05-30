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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('modalidade', [\App\Http\Controllers\ModalidadesController::class, 'index']);

Route::get('jogos', [\App\Http\Controllers\JogosController::class, 'index']);
Route::get('jogos/create', [\App\Http\Controllers\JogosController::class, 'create']);

Route::group(['prefix'=>'admin/modalidades'], function() {
    Route::get('',              ['as'=>'modalidades',    'uses'=>'\App\Http\Controllers\ModalidadesController@index']);
    Route::get('create',       ['as'=>'modalidades.create',    'uses'=>'\App\Http\Controllers\ModalidadesController@create']);
    Route::post('store',       ['as'=>'modalidades.store',    'uses'=>'\App\Http\Controllers\ModalidadesController@store']);
    Route::get('{id}/destroy',  ['as'=>'modalidades.destroy',    'uses'=>'\App\Http\Controllers\ModalidadesController@destroy']);
    Route::get('{id}/edit',     ['as'=>'modalidades.edit',    'uses'=>'\App\Http\Controllers\ModalidadesController@edit']);
    Route::put('{id}/update',   ['as'=>'modalidades.update',    'uses'=>'\App\Http\Controllers\ModalidadesController@update']);
});