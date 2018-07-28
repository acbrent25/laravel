@extends('layout')

@section('content')


  <div class="container">
  
  <div class="row">
    <div class="col-12 mx-auto pt-5">

      <form action="{{ route('todo.save', ['id' => $todo->id ]) }}" method="post">
        {{ csrf_field() }}
        <input type="text" placeholder="New Todo" value="{{ $todo->todo }}" name="todo" class="form-control input-lg">
        
      </form>
      
    </div>
  </div>

  </div>

@stop