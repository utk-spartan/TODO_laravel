<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetModel extends Model
{
    const TASK = 'task';
    protected $table = 'tasks';
    public $timestamps = false;
    public function setTask(string $task)
    {
        $this->setAttribute(self::TASK, $task);
    }
    public function getTask()
    {
        $this->getAttribute(self::TASK);
    }
}
