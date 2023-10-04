<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoCreateRequest;

class TodoController extends Controller
{
    //
    public function todos(){

        $todos = auth()->user()->todos()->get();
            // $todos = Todo::all();
        return view('todos.index')->with(['todos' => $todos]);
    }

    public function create(){
        return view('todos.create');

    }

    public function store(TodoCreateRequest $request){

         $todos =  auth()->user()->todos()->create($request->all());
        return redirect(route('todo.index'))->with('message', 'Created!!');

    }
    public function edit(Todo $todo){

        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo){
        //
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('message', 'Updated!!');
    }

    public function delete(Todo $todo){
        $todo->delete();
        return redirect(route('todo.index'))->with('message', 'deleted!!');

    }
}
