@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-body">
    <table class="table table-hover">
      <thead>
      <tr>
          <th> Image </th>
          <th> Title</th>
          <th> Edit</th>
          <th> Delete</th>
        </tr>
      </thead>

      <tbody>

        @foreach($posts as $post)

          <tr>
            <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" width="100"></td>
            <td>{{ $post->title }}</td>
            <td>edit</td>
            <td>
              <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="text-danger"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>

        @endforeach

      </tbody>
    </table>
  </div>
</div>  


@stop