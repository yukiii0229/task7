<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class todoController extends Controller
{
    public function todo()
    {
        $item = [
            'content' => '',
        ];
        return view('todo', $item);
    }
    public function post(Request $request)
    {
        $content = $request->content;
        $item = [
            'content' => $content 
        ];
        return view('todo', $item);
    }
    public function create(Request $request)
    {
        $this->validate($request, todo::$rules);
        $form = $request->all();
        todo::create($form);
        return redirect('/');
    }
}

