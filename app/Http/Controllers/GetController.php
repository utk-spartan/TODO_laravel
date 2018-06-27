<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\GetModel;

class GetController extends Controller
{

    public function getall()
    {
        $tasks = new GetModel;

        return response()->json($tasks->all());
    }

    public function get($id = null)
    {
        if ($id === null)
        {
            abort(404);
        }

        $tasks = new GetModel;
        $task  = $tasks->findOrFail($id);
        //TODO : ask
        return response()->json($task->task);
    }
}