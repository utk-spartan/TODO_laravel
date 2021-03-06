<?php

namespace App\Http\Controllers;

use App\Tasks;
use Validator;
use DB;

class PostsController extends Controller
{

    public function index(\Illuminate\Http\Request $request)
    {

        $task = $request['task'];
        $validator=Validator::make($request->all(),['task'=>'required|max:255']);
        if($validator->fails())
        {
            return response()->json("task not valid");
        }
        $post = new Tasks;
        $post->setTask($task);
        $post->save();
        $id = DB::getPdo()->lastInsertID();
        return response()->json($id);
    }
}
