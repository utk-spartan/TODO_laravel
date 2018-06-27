<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Validator;
use App\Update;
use Illuminate\Http\Request;


class UpdateController extends Controller
{

    public function update(Request $request)
    {
        //for updating task file
        $id =  $request->input('id');
        $task =  $request->input('task');
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'task' => 'required|max:255',
        ]);
        if($validator->fails()===true)
        {
            return response()->json("update operation failed ");
        }
        $tasks = new Update;

        if(($tasks->updateTask($id,$task))===0)
        {
            echo "task id not present";
        }
        else
        {
            echo "update success";
        }

    }
}