<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create(){
        return view("todos.createTask.index");
    }

    public function createNewTask(){
        return redirect(route("homePage"));
    }
}
