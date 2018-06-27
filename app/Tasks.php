<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Tasks extends Model
{
    protected $table = 'tasks';

    public function deleteTask($id)
    {
        $message = "";
        $task = $this->Find($id);

        if ($task === NULL)
        {
           $message = "id not found";
        }
        else
        {
            $status = $task->delete();
            if ($status === 0)
            {
                $message = "delete failed";
            }
            else
            {
                $message = "delete successful";
            }
        }

        return $message;

    }

}