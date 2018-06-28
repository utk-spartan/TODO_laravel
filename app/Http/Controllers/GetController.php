<?php

namespace App\Http\Controllers;

use App\Tasks;

class GetController extends Controller
{

    public function getall()
    {
        $tasks = new Tasks;

        return response()->json($tasks->getAllTasks());
    }

    public function get($id = null)
    {
        if ($id === null)
        {
            abort(404);
        }
        $tasks = new Tasks;

        return response()->json($tasks->getTask($id));
    }
}