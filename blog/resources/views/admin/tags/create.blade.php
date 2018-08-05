@extends('layouts.app')

@section('content')

  @include('admin.includes.error')
  

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">
        Create a New Tag
      </h3>
    </div>
    
    <div class="card-body">
      <form action="{{ route('tag.store') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">Tag Name</label>
          <input type="text" name="tag" class="form-control">
        </div>
        <div class="form-group">
          <button class="btn btn-success" type="submit">Save Tag</button>
        </div>
      </form>
    </div>
  
  </div>

@stop