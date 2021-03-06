@extends('layouts.app')

@section('content')

  @include('admin.includes.error')
  

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">
        Create a New Category
      </h3>
    </div>
    
    <div class="card-body">
      <form action="{{ route('category.store') }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <button class="btn btn-success" type="submit">Save Category</button>
        </div>
      </form>
    </div>
  
  </div>

@stop