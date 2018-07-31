@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-body">
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
            <td>
              <a href="{{ route('category.edit', ['id' => $category->id] )}}" class="btn btn-xs btn-info fas fa-edit">
                  Edit
              </a>
            </td>
            <td>
              <a href="{{ route('category.delete', ['id' => $category->id] )}}" class="btn btn-xs btn-danger">
                Delete
              </a>
            </td>
          </tr>

        @endforeach
      </tbody>
    </table>
  </div>
</div>  


@stop