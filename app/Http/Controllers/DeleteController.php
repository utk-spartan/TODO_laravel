<?php

namespace App\Http\Controllers;

use App\Tasks;



class DeleteController extends Controller
{

    public function delete($id)
    {
        $tasks = new Tasks();
        $message = $tasks->deleteTask($id);
        return ['message' => $message];
    }
}