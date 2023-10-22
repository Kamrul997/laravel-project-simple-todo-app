<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class CreateController extends Controller
{
    public function create(){
        return view("todos.createTask.index");
    }

    public function createNewTask(Request $request){
        $request->validate(
            [
                'taskTitle' => 'required',
                'taskDescription' => 'required',
                'taskStartDate' => 'required',
                'taskDeadline' => 'required'
            ]
            );
        $todoList = new TodoList;
        $todoList->title=$request['taskTitle'];
        $todoList->description=$request['taskDescription'];
        $todoList->start_date=$request['taskStartDate'];
        $todoList->deadline=$request['taskDeadline'];
        $todoList->save();
        return redirect(route("homePage"));
    }
    
}
