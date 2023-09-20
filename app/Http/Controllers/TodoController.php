<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index() {
        $data = Todo::latest()->paginate(5);

        return view('todos.index',[
            'todos'=> $data
        ]);
    }
    public function create() {
       $validator = validator(request()->all(),[
        'name' => 'required',
        'content' => 'required',
       ]);

       if($validator->fails()) {
        return back()->withErrors($validator);
       }

       $todo = new Todo;
       $todo->name = request()->name;
       $todo->content = request()->content;
       $todo->save();

       return redirect('/todo');

    }

    public function add() {
        return view('todos.add');
    }
    public function edit($id) {
        $data = Todo::find($id);
        return view('todos.edit',[
            'data' => $data,
        ]);
    }

    public function update($id) {
        $validator = validator(request()->all(),[
            'name' => 'required',
            'content' => 'required',
        ]);
        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $todo = Todo::find(request()->id);
        $todo->name = request()->name;
        $todo->content = request()->content;
        $todo->save();

        return redirect('/todo');
    }

    public function delete($id) {
        $data = Todo::find($id);

        $data->delete();

        return redirect('/todo');
    }
}
