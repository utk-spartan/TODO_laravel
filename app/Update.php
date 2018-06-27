<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    protected $table = 'tasks';
    public function updateTask($id,$task)
    {
        return self::where('id', $id)
            ->update(['task' => $task]);
    }
}
