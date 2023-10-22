<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function edit(){
        return view("todos.updateTask.index");
    }

    public function update(){
        return redirect(Route("homePage"));
    }
}
