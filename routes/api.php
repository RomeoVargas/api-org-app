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

Route::get('/todo/index', 'Api\TodoController@index');
Route::post('/todo/add', 'Api\TodoController@addEntry');
Route::put('/todo/update/{id}', 'Api\TodoController@updateEntry');
Route::delete('/todo/delete/{id}', 'Api\TodoController@removeEntry');
