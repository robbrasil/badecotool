@extends ('layout')


@section ('content')

 <h3>All entries</h3>
	
	
	 <div class="panel-body" id="dataTables-example-div">
<table class="table table-striped table-bordered table-hover" id="tableMain">
    <thead>
    <tr>
        <td name="delHead" id="delHead">Del&nbsp;/&nbsp;Info</td>
        <td>Job Number</td>
        <td>Community</td>
        <td>Lot Number</td>
        <td>Job Size</td>
        <td>Original Installer</td>
        <td>Date</td>
        <td>Created by</td>
 
    </tr>
    </thead>
    <tbody>
    	@foreach ($entries as $entry)
    	<tr>
        	<td>
        		<div  class="entryId"> 
        			<a href="/entries/{{$entry -> id}}/edit">Edit Entry</a> 
        		</div>
        			<a href="/entries/{{$entry->id}}/delete"><button class="btn btn-danger btn-sm xBtn" title="Click to delete row"><i class="fa fa-trash" aria-hidden="true"></i>
            		</button></a>
        			@if (strlen($entry -> notes) > 0)
        			<button class="btn btn-info btn-md pull-right iBtn commentBtn blueBtn" data-toggle="popover" title="Comments" data-trigger="focus" data-content="{{ $entry -> notes}} &nbsp;&nbsp;&nbsp; <a href='/notes/{{$entry->id}}/edit'><button class='btn btn-info btn-xs pull-right' type='button'>Edit</button>">  <i class="fa fa-info" aria-hidden="true"></i></button></a>
        			@else
        			<a href="/entries/{{$entry -> id}}/edit"><button class="btn btn-warning btn-sm pull-right iBtn commentBtn">  <i class="fa fa-plus" aria-hidden="true"></i></button></a>
        			@endif
            		           		                         		
        	</td>
        	<td>{{ $entry -> jobNumber }}</td>
        	<td>{{ $entry -> community }}</td>
        	<td>{{ $entry -> lotNumber }}</td>
        	<td>{{ $entry -> jobSize }} ft&sup2;</td>
        	<td>{{ $entry -> installer }}</td>
        	<td>{{ $entry -> date }}</td>
        	<td>{{ $entry -> user -> name }} on {{ $entry->created_at->toFormattedDateString() }} <br>

                @if ($entry->edit_id)
                <?php $editorId = DB::table('users')->where('id', '=', $entry->edit_id)->get() ?>

                Updated by {{ $editorId[0]->name }} on {{ $entry->updated_at->toFormattedDateString() }} 
                @endif

            </td>
        
   		</tr>
    	@endforeach
    </tbody>
</table>
</div>
</div>
<!-- /.col-lg-6 (nested) -->
</div>
<!-- /.row (nested) -->
</div>
                   

@endsection