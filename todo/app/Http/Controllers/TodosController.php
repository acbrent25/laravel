<?php

namespace App\Http\Controllers;

use Session;

use App\Todo;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    // Return all todos
    public function index(){

      $todos = Todo::all();

      return view('todos')->with('todos', $todos);

    }

    // Create a New Todo
    public function store(Request $request){

      // dd($request->all());

      $todo = new Todo;

      $todo->todo = $request->todo;

      $todo->save();

      Session::flash('success', 'Your Todo Was Created.');

      return redirect()->back();

    }

    // Delete a Todo
    public function delete($id){
      $todo = Todo::find($id);

      $todo->delete();
      Session::flash('success', 'Your Todo Was Deleted.');
      return redirect()->back();
    }

    // Update a Todo
    public function update($id){
      // find todo
      $todo = Todo::find($id);
      // return view to update
      return(view('update')->with('todo', $todo));
    }

    // Second part of update todo
    public function save(Request $request, $id){
       // find todo
      $todo = Todo::find($id);
      // update todo
      $todo->todo = $request->todo;
      // Save Todo
      $todo->save();
      Session::flash('success', 'Your Todo Was Upated.');
      return redirect()->route('todos');

    }

    // Todo Completed
    public function completed($id){

      $todo = Todo::find($id);

      $todo->completed = 1;

      $todo->save();
      Session::flash('success', 'Your Todo Was Marked as completed.');
      return redirect()->back();

    }

    // Todo not completed
    public function not_complete($id){

      $todo = Todo::find($id);

      $todo->completed = 0;

      $todo->save();
      Session::flash('success', 'Your Todo Was Marked Incomplete');
      return redirect()->back();

    }


}
