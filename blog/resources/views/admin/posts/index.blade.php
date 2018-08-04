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
            <td>delete</td>
          </tr>

        @endforeach

      </tbody>
    </table>
  </div>
</div>  


@stop