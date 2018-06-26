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
    return [
        'message' => 'hello'
    ];
});

/*
Route::delete('/tasks', function () {
    return view('welcome');
});*/



Route::delete('/tasks', function(){
    //delete task by taskid


    //Log::info("deleted application - $id");

    return response()->json([
        'taskid' =>1 ,
        'task' => 'something'
    ]);

})->where('id', '[0-9]+');