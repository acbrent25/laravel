@extends('layout')

@section('content')



  <div class="row">
    <div class="col-lg mx-auto pt-5">

      <form action="/create/todo" method="post">
        {{ csrf_field() }}
        <input type="text" placeholder="New Todo" name="todo" class="form-control input-lg">
        
      </form>
      
    </div>
  </div>

    <hr>

  @foreach($todos as $todo)
    {{ $todo->todo}} <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="button btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
    <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="button btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
    
    
    @if(!$todo->completed)
        <a href="{{ route('todo.completed', ['id' => $todo->id]) }}" class="button btn btn-success btn-sm"><i class="fas fa-check"></i></i></a>
    
    @else
    <a href="{{ route('todo.not_complete', ['id' => $todo->id]) }}" class="button btn btn-success btn-sm"><i class="fab fa-angellist"></i></a>

    

    @endif
    
    <hr>
  @endforeach

@stop