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

Route::post('/tasks', function (\Illuminate\Http\Request $request) {
    $task = $request->input('task');
    $inserted=DB::insert('insert into tasks (id, task) values (?, ?)', [NULL, $task]);

        return response()->json($inserted);

});

Route::patch('/task/update','UpdateController@update');


Route::delete('tasks/{id}', 'update@delete')->where('id', '[0-9]+');


Route::get('/tasks/get', function () {
    $tasks = DB::table('tasks')->select('id','task')->get();
    return response()->json($tasks);
});


Route::get('/tasks/get/{id}', function ($id) {
    $task = DB::table('tasks')->select('id','task')->where('id',$id)->get();
    return response()->json($task);

});


