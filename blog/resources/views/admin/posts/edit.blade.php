@extends('layouts.app')

@section('content')

  @include('admin.includes.error')

  <h2 class="text-center">Create New Post</h2>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">
        Edit Post: {{ $post->title }}
      </h3>
    </div>
    
    <div class="card-body">
      <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>
        <div class="form-group">
          <label for="featured">Featured Image</label>
          <input type="file" name="featured" class="form-control">
        </div>
        <div class="formgroup">
          <label for="category">Select a Category</label>
          <select name="category_id" id="category" class="form-control">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          
          </select>
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea id="content" cols="5" rows="5" name="content" class="form-control">{{ $post->content }}</textarea>
        </div>

        <div class="form-group">
          <button class="btn btn-success" type="submit">Update Post</button>
        </div>
      </form>
    </div>
  
  </div>

@stop