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

Route::get('/', function () {
    return view('welcome');
});
Route::patch('/tasks/',function (){
    //for updating task file
    return response()->json([
        'id' => '2',
        'state' => 'task'
    ]);
    //return view('welcome');
});