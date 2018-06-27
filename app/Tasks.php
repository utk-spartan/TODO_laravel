<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Tasks extends Model
{
    protected $table = 'tasks';

    public function deleteTask($id)
    {
        return self::where('id', $id) -> delete();
    }

}
