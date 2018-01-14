@extends ('layout')

@section ('content')


{{ Form::open(['url'=>'notes/'.$entry->id.'/update', 'method' => 'PATCH']) }}

<div class="form-group">
  <label class="col-md-2 control-label" for="notes">Notes</label>
  <div class="col-md-5">                     
    {{ Form::textarea('notes', $entry->notes, ['class'=>'form-control input-sm']) }}
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-5">
    <button id="submit" name="submit" class="btn btn-success btn-md pull-right">submit</button>
  </div>
</div>

{{ Form::close() }}

@endsection