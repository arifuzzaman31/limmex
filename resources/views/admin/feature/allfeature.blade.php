@extends('admin.main')
@section('adminContent')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <button class="btn btn-primary" onclick="getModal('get-feature','Add Feature')" >Add More Feature</button>
            </div>
            <div class="body">
                
                <div class="table-responsive">
                    <table id="table-data" class="table table-bordered table-striped table-hover dataTable">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
            	@if(count($features) > 0)
            	<?php $i = 1; ?>
            	@foreach($features as $feature)
	                <tr>
	                    <td style="width: 5%">{{$i}}</td>
	                    <td style="width: 20%">{{$feature->title}}</td>
	                    <td style="width: 50%">{{$feature->description}}</td>
	                    <td style="width: 10%">{{$feature->created_at->toFormattedDateString()}}</td>
                        <td style="width: 15%">
	                    	<a onclick="getModal('edit.feature/{{$feature->id}}','Edit Feature')" title="Edit" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                            
                            <a onclick="getModal('show-feature/{{$feature->id}}','Show Feature')" title="View" type="button" class="btn btn-primary btn-xs">
                            <i class="fa fa-book"></i>
                          </a>

	                    	<a type="button" title="Status" href=" {{route('change-feature-status',$feature->id)}}" class="btn @if($feature->status > 0) btn-success @else btn-warning @endif btn-xs">@if($feature->status > 0)<i class="fa fa-check-circle"></i> @else <i class="fa fa-ban"></i> @endif</a>

		                  <a type="button" title="Delete" href="{{route('feature-delete',$feature->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

	                    </td>
	                    
	                </tr>
	                <?php $i++; ?>
                @endforeach
              @endif
            </tbody>
        </table>
    </div>
</div>

@endsection