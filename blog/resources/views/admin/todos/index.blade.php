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


        <h1>Hello</h1>
        <div class="form-group row add">
    			<div class="col-md-8">
    				<input type="text" class="form-control" id="name" name="name"
    					placeholder="Enter some name" required>
    				<p class="error text-center alert alert-danger hidden"></p>
    			</div>
    			<div class="col-md-4">
    				<button class="btn btn-primary" type="submit" id="add">
    					<span class="glyphicon glyphicon-plus"></span> ADD
    				</button>
    			</div>
    		</div>
        
      </tbody>
    </table>

  </div>
</div>  


@stop