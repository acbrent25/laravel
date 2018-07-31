@extends('layouts.app')

@section('content')

  @include('admin.includes.error')

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">
        Update Category: {{ $category->name }}
      </h3>
    </div>
    
    <div class="card-body">
      <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" name="name" value="{{ $category->name }}" class="form-control">
        </div>
        <div class="form-group">
          <button class="btn btn-success" type="submit">Update Category</button>
        </div>
      </form>
    </div>
  
  </div>

@stop