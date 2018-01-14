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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::namespace('Api')->group(function() {
    Route::get('users', 'UserController@all');
    Route::get('user/{id}/show', 'UserController@show')->where('id', '[0-9]+');
    Route::get('user/{id}/edit', 'UserController@edit')->where('id', '[0-9]+');

    Route::post('user/create', 'UserController@create');
    Route::post('user/{id}/update', 'UserController@update')->where('id', '[0-9]+');
});