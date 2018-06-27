<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

use App\Update;
use Illuminate\Http\Request;


class UpdateController extends Controller
{

    public function update(Request $request)
    {
        //for updating task file
        $id =  $request->input('id');
        $task =  $request->input('task');
        $tasks = new Update();
        if($id===null)
        {
            echo "enter task id to update a task";
        }
        else if($task==null)
        {
            echo "enter task to update";
        }
        else
        {
            if(($tasks->updateTask($id,$task))===0)
            {
                echo "update failed";
            }
            else
            {
                echo "update success";
            }
        }
    }
}