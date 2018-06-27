<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Validator;
use App\Update;
use Illuminate\Http\Request;


class UpdateController extends Controller
{

    public function update(Request $request,$id)
    {
        //for updating task file
        //$id =  $request->input('id');
        $task =  $request->input('task');
        $validator = Validator::make($request->all(), [
            'task' => 'required|max:255',
        ]);
        if($validator->fails()===true) {
            return response()->json(['state' => 'update operation failed']);
        }
        $tasks = new Update;

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