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
    $task     = $request->input('task');
    $inserted = DB::insert('insert into tasks (id, task) values (?, ?)', [null, $task]);

    return response()->json($inserted);

});

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

Route::delete('tasks/{id}', 'Todo@delete')->where('id', '[0-9]+');

Route::get('/tasks/get/{id?}', 'Todo@get')->where('id', '[0-9]+');


