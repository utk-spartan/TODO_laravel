<?php

namespace App\Http\Controllers;
use Validator;
use App\Tasks;
use Illuminate\Http\Request;


class UpdateController extends Controller
{

    public function update(Request $request,$id)
    {
        //for updating task file
        $task =  $request->input('task');
        $validator = Validator::make($request->all(), [
            'task' => 'required|max:255',
        ]);
        if($validator->fails()===true) {
            return response()->json(['state' => 'update operation failed']);
        }
        $tasks = new Tasks;

        if(($tasks->updateTask($id,$task))===0)
        {
            return response()->json(['state'=>'task id not present']);
        }
        else
        {
            return response()->json(['state'=>'update successful']);
        }

    }
}