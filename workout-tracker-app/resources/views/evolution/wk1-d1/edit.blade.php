@extends('layouts.app')

@section('content')


<form action="{{ route('wk1-d1.update', ['id' => $evolution_1_1->id]) }}" method="post" enctype="multipart/form-data">
<input name="_method" type="hidden" value="PATCH">
  {{ csrf_field() }}
  <div class="card">
  
  <div class="card-header">
    Barbell Bench Press
  </div><!--./ card-header -->
  
  <div class="card-body">
    <div class="exercise_wrapper">

        <div class="row reps_row" id="1_reps_row">
            <div class="col reps_input_col"><input class="form-control" type="number" placeholder="R" name="bb_press_r_1" value="{{ $evolution_1_1->bb_press_r_1 }}"></div>
            <div class="col reps_input_col"><input class="form-control" type="number" placeholder="R" name="bb_press_r_2" value="{{ $evolution_1_1->bb_press_r_2 }}"></div>
            <div class="col reps_input_col"><input class="form-control" type="number" placeholder="R" name="bb_press_r_3" value="{{ $evolution_1_1->bb_press_r_3 }}"></div>
            <div class="col reps_input_col"><input class="form-control" type="number" placeholder="R" name="bb_press_r_4" value="{{ $evolution_1_1->bb_press_r_4 }}"></div>
            <div class="col reps_input_col"><input class="form-control" type="number" placeholder="R" name="bb_press_r_5" value="{{ $evolution_1_1->bb_press_r_5 }}"></div>
            <div class="col reps_input_col"><input class="form-control" type="number" placeholder="R" name="bb_press_r_6" value="{{ $evolution_1_1->bb_press_r_6 }}"></div>
            <div class="col reps_input_col"><input class="form-control" type="number" placeholder="R" name="bb_press_r_7" value="{{ $evolution_1_1->bb_press_r_7 }}"></div>
        </div>

        <div class="row weight_row mt-4" id="1_weight_row">
            <div class="col weight_input_col"><input class="form-control weight_input" type="number" placeholder="W" name="bb_press_w_1" value="{{ $evolution_1_1->bb_press_w_1 }}"></div>
            <div class="col weight_input_col"><input class="form-control weight_input" type="number" placeholder="W" name="bb_press_w_2" value="{{ $evolution_1_1->bb_press_w_2 }}"></div>
            <div class="col weight_input_col"><input class="form-control weight_input" type="number" placeholder="W" name="bb_press_w_3" value="{{ $evolution_1_1->bb_press_w_3 }}"></div>
            <div class="col weight_input_col"><input class="form-control weight_input" type="number" placeholder="W" name="bb_press_w_4" value="{{ $evolution_1_1->bb_press_w_4 }}"></div>
            <div class="col weight_input_col"><input class="form-control weight_input" type="number" placeholder="W" name="bb_press_w_5" value="{{ $evolution_1_1->bb_press_w_5 }}"></div>
            <div class="col weight_input_col"><input class="form-control weight_input" type="number" placeholder="W" name="bb_press_w_6" value="{{ $evolution_1_1->bb_press_w_6 }}"></div>
            <div class="col weight_input_col"><input class="form-control weight_input" type="number" placeholder="W" name="bb_press_w_7" value="{{ $evolution_1_1->bb_press_w_7 }}"></div>
        </div>

    </div> <!--./ exercise_wrapper -->

  </div><!--./ card-body -->

  
  <button class="btn btn-success ml-auto" type="submit">Update Workout</button> 
</div><!--./ card -->

      

</form>





@endsection