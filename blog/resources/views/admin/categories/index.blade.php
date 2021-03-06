@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-header">
      <h3 class="card-title">
        All Categories
      </h3>
  </div>
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
      @if($categories->count() > 0)
        @foreach($categories as $category)

          <tr>
            <td>
              {{ $category->name }}
            </td>
            <td>
              <a href="{{ route('category.edit', ['id' => $category->id] )}}" class="text-info">
                  <i class="fas fa-edit"></i>
              </a>
            </td>
            <td>
              <a href="{{ route('category.delete', ['id' => $category->id] )}}" class="text-danger">
              <i class="fas fa-trash-alt"></i>
              </a>
            </td>
          </tr>
        @endforeach

        @else
          <tr>
            <th colspan="5" class="text-center text-danger">
              Please Add a Category
            </th>
          </tr>
        @endif
      </tbody>
    </table>

  </div>
</div>  


@stop