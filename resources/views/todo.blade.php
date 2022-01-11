<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class todoController extends Controller
{
    public function todo()
    {
        return view('todo');
    }
    public function create(Request $request)
    {
        $this->validate($request, todo::$rules);
        $form = $request->all();
        todo::create($form);
        return redirect('/');
    }
}

