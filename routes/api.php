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

Route::post('/gudang/tambah', 'ApiController@create');

//Get All
Route::get('/gudang', 'ApiController@show');

//Get by ID
Route::get('/gudang/{id}', 'ApiController@showbyid');

//Edit by ID
Route::put('/gudang/edit/{id}', 'ApiController@updatebyid');

//Delete By ID
Route::delete('/gudang/delete/{id}', 'ApiController@deletebyid');
