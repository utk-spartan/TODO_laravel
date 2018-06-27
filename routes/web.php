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
    Route::get('/tasks/get', function () {
        $tasks = DB::table('tasks')->select('id','task')->get();
        return response()->json($tasks);
    });
    Route::get('/tasks/get/{id}', function ($id) {
        $task = DB::table('tasks')->select('id','task')->where('id',$id)->get();
        return response()->json($task);
    });

    Route::patch('/task/update','UpdateController@update');
