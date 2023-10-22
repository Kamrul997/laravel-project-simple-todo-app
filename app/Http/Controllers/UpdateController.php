<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class UpdateController extends Controller
{
    public function edit($id){
        $task = TodoList::find($id);
        $data = compact('task');
        return view("todos.updateTask.index")->with($data);
    }

    public function update(){
        return redirect(Route("homePage"));
    }
}
