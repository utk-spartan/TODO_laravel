<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Tasks extends Model
{
    const TASK = 'task';
    protected $table = 'tasks';
    public $timestamps = false;
    public function deleteTask($id)
    {
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

    public function getAllTasks()
    {
        return $this->all();
    }

    public function getTask($id)
    {
        $task  = $this->findOrFail($id);
        return $task->getAttribute(self::TASK);
    }

    public function setTask(string $task)
    {
        $this->setAttribute(self::TASK, $task);
    }

    public function updateTask($id,$task)
    {
        return self::where('id', $id)
                   ->update(['task' => $task]);
    }

}