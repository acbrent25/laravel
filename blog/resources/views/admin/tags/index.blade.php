@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-header">
      <h3 class="card-title">
        All Tags
      </h3>
  </div>
  <div class="card-body">
    <table class="table table-hover">
      <thead>
      <tr>
          <th> Tag Name </th>
          <th> Edit Tag</th>
          <th> Delete Tag</th>
        </tr>
      </thead>

      <tbody>
      @if($tags->count() > 0)
        @foreach($tags as $tag)

          <tr>
            <td>
              {{ $tag->tag }}
            </td>
            <td>
              <a href="{{ route('tag.edit', ['id' => $tag->id] )}}" class="text-info">
                  <i class="fas fa-edit"></i>
              </a>
            </td>
            <td>
              <a href="{{ route('tag.delete', ['id' => $tag->id] )}}" class="text-danger">
              <i class="fas fa-trash-alt"></i>
              </a>
            </td>
          </tr>
        @endforeach

        @else
          <tr>
            <th colspan="5" class="text-center text-danger">
              Please Add a Tag
            </th>
          </tr>
        @endif
      </tbody>
    </table>

  </div>
</div>  


@stop