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
        $data = [
            'item'=>$todo,
        ];
        return view('todo', $data);
    }
    public function create(Request $request)
    {
        $this->validate($request, todo::$rules);
        $form = $request->all();
        todo::create($form);
        return redirect('/');
    }
}
