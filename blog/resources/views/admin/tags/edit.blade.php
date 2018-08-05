@extends('layouts.app')

@section('content')

  @include('admin.includes.error')

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">
        Update Tag: {{ $tag->tag }}
      </h3>
    </div>
    
    <div class="card-body">
      <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="tag">Tag Name</label>
          <input type="text" name="tag" value="{{ $tag->tag }}" class="form-control">
        </div>
        <div class="form-group">
          <button class="btn btn-success" type="submit">Update Tag</button>
        </div>
      </form>
    </div>
  
  </div>

@stop