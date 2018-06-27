<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetModel extends Model
{
    const TASK = 'task';

    protected $table = 'tasks';

    public $timestamps = false;

    public function getAllTasks()
    {
        return $this->all();
    }

    public function getTask($id)
    {
        $task  = $this->findOrFail($id);
        return $task->getAttribute(self::TASK);
    }
}
