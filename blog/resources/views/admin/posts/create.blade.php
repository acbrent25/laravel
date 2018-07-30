@extends('layouts.app')

@section('content')

  @if(count($errors) > 0)

    <ul class="list-group">
      @foreach($errors->all() as $error)
        <li class="list-group-item text-danger">
          {{ $error }}
        </li>
      @endforeach
    </ul>

  @endif

  <h2 class="text-center">Create New Post</h2>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">
        Create a New Post
      </h3>
    </div>
    
    <div class="card-body">
      <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <label for="featured">Featured Image</label>
          <input type="file" name="featured" class="form-control">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea id="content" cols="5" rows="5" name="content" class="form-control"></textarea>
        </div>

        <div class="form-group">
          <button class="btn btn-success" type="submit">Save Post</button>
        </div>
      </form>
    </div>
  
  </div>

@stop