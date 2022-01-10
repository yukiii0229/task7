<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class todoController extends Controller
{
    public function todo()
    {
        $items = todo::all();
        return view('todo', ['items' => $items]);
    }
}
