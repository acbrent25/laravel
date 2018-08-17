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
              <img src="{{ asset($user->profile->avatar) }}" alt="" width="60" height="60" style="border-radius: 50%;">
            </td>
            <td>

              {{ $user->name }}
            </td>
            <td>
            @if($user->admin)
                  <a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-xs btn-danger">Remove permissions</a>
            @else
                  <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-xs btn-success">Make admin</a>
            @endif
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