@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header">
      <h3 class="card-title">
        Users
      </h3>
  </div>
  <div class="card-body">
    <table class="table table-hover">
      <thead>
      <tr>
          <th> Image </th>
          <th> Name</th>
          <th> Permessions</th>
          <th> Delete</th>
        </tr>
      </thead>

      <tbody>

      @if($users->count() > 0)

        @foreach($users as $user)
          <tr>
            <td>
              <img src="{{ asset($user->avatar) }}" alt="" width="60" height="60" style="border-radius: 50%;">
            </td>
            <td>
              {{ $user->name }}
            </td>
            <td>
              Permission
            </td>
            <td>
              Delete
            </td>
          </tr>
        @endforeach

        @else
          <tr>
            <th colspan="5" class="text-center text-danger">
              No Users
            </th>
          </tr>
      @endif



      </tbody>
    </table>
  </div>
</div>  


@stop