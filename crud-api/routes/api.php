<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('identitas','IdentitasController@index'); //index
Route::get('identitas/{id}','IdentitasController@show');//add
Route::post('identitas','IdentitasController@store');//store
Route::put('identitas', 'IdentitasController@store'); //update
Route::delete('identitas/{id}','IdentitasController@destroy'); //delete
