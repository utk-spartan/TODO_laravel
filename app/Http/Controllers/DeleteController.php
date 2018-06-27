<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

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