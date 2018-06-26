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

Route::get('/', function () {
    return view('welcome');
});

Route::patch('/tasks/{id}/{task}/',function ($id,$task){
    //for updating task file
    //$input = $request->all();

    DB::table('tasks')
        ->where('id', $id)
        ->update(['task' => $task]);
    return response()->json([
        'id' => $id,
        'task'=>$task,
        'state' => 'updated'
    ]);
    //return view('welcome');
});
