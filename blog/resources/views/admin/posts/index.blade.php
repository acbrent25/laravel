@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header">
      <h3 class="card-title">
        Published Posts
      </h3>
  </div>
  <div class="card-body">
    <table class="table table-hover">
      <thead>
      <tr>
          <th> Image </th>
          <th> Title</th>
          <th> Edit</th>
          <th> Trash</th>
        </tr>
      </thead>

      <tbody>

      @if($posts->count() > 0)

        @foreach($posts as $post)
          <tr>
            <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="100"></td>
            <td>{{ $post->title }}</td>
            <td>
              <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="text-info"><i class="fas fa-edit"></i></a>

            </td>
            <td>
              <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="text-danger"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
        @endforeach

      @else
        <tr>
          <th colspan="5" class="text-center text-danger">
            No Posts
          </th>
        </tr>
      @endif



      </tbody>
    </table>
  </div>
</div>  


@stop