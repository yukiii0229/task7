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
    public function create(Request $request)
    {
        $this->validate($request, Author::$rules);
        $form = $request->all();
        todo::create($form);
        return redirect('/');
    }
}
