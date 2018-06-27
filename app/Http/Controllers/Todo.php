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

        return ['no of deleted rows' => $deletedRows];
    }

    public function get($id = null)
    {
        if ($id === null)
        {
            $task = Tasks::select('id', 'task')->get();

        }
        else
        {
            $task = Tasks::select('id', 'task')->where('id', $id)->get();
        }

        return response()->json($task);
    }
}