<?php

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
//namespace App\Http\Kernel;

Route::post('/tasks', 'PostsController@index');
Route::delete('task/{id}', 'DeleteController@delete')->where('id', '[0-9]+');
Route::get('/task/{id}', 'GetController@get')->where('id', '[0-9]+');
Route::get('/tasks', 'GetController@getall');
Route::patch('/task/{id}', 'UpdateController@update')->where('id', '[0-9]+');