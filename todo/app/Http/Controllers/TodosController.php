<?php

namespace App\Http\Controllers;

use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
    public function index(){

      $todos = Todo::all();

      return view('todos')->with('todos', $todos);

    }

    public function store(Request $request){

      // dd($request->all());

      $todo = new Todo;

      $todo->todo = $request->todo;

      $todo->save();

      return redirect()->back();

    }

    public function delete($id){
      $todo = Todo::find($id);

      $todo->delete();

      return redirect()->back();
    }

    public function update($id){
      // find todo
      $todo = Todo::find($id);
      // return view to update
      return(view('update')->with('todo', $todo));
    }

    public function save(Request $request, $id){
       // find todo
      $todo = Todo::find($id);
      // update todo
      $todo->todo = $request->todo;
      // Save Todo
      $todo->save();

      return redirect()->route('todos');

    }

    public function completed($id){

      $todo = Todo::find($id);

      $todo->completed = 1;

      $todo->save();

      return redirect()->back();

    }


}
