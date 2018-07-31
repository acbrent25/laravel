@extends('layouts.app')

@section('content')


  <table class="table table-hover">
    <thead>
    <tr>
        <th> Category Name </th>
        <th> Edit Category</th>
        <th> Delete Category</th>
      </tr>
    </thead>

    <tbody>
      @foreach($categories as $category)

        <tr>
          <td>
            {{ $category->name }}
          </td>
        </tr>

      @endforeach
    </tbody>


  </table>

@stop