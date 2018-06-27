<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

use App\Tasks;



class Todo extends Controller
{

    public function delete($id)
    {

        $deletedRows = Tasks::where('id', $id)->delete();
        return ['no of deleted rows'=> $deletedRows];
    }
    public function update($id=null,$task=null)
    {
            //for updating task file
            //$input = $request->all();
            //$id = $name = $request->input('id');
            //$task = $name = $request->input('task');
        if($id===null)
        {
            echo "enter task id to update a task";
        }
        else if($task==null)
        {
            echo "enter task to update";
        }
        else {
            Tasks::where('id', $id)
                ->update(['task' => $task]);
            return response()->json([
                'id' => $id,
                'task' => $task,
                //'state' => 'updated'
            ]);
        }
            //return view('welcome');
    }
}