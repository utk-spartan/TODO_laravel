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



Route::patch('/tasks/id', function(\Illuminate\Http\Request $request) {
    //for updating task file
    //$input = $request->all();
    $id   = $name = $request->input('id');
    $task = $name = $request->input('task');
    DB::table('tasks')
      ->where('id', $id)
      ->update(['task' => $task]);

    return response()->json([
                                'id'    => $id,
                                'task'  => $task,
                                'state' => 'updated'
                            ]);
    //return view('welcome');
});

Route::delete('task/{id}', 'GetController@delete')->where('id', '[0-9]+');

Route::get('/task/{id?}', 'GetController@get')->where('id', '[0-9]+');

Route::get('/tasks', 'GetController@getall');

Route::post('/tasks', 'PostsController@index');
