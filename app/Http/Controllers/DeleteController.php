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
        $noOfDeletedRows = $tasks->deleteTask($id);
        $result = "";
        if( $noOfDeletedRows === 0)
        {
            $result = "deletion failed";
        }
        else
        {
            $result = "deletion succeded";
        }
        return ['result' => $result];
    }
}