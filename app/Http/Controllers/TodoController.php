<?php

namespace App\Http\Controllers;

use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return view('partial.todo')->with([
            'todo' => Todo::all()
        ]);
    }
}