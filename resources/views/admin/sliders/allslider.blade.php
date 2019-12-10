@extends('admin.main')
@section('adminContent')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <button class="btn btn-primary" onclick="getModal('add-slider','Add Slider')" >Add More Slider</button>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="table-data" class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Slider</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Slider</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
            	@if(count($sliders) > 0)
            	<?php $i = 1; ?>
            	@foreach($sliders as $slider)
	                <tr>
	                    <td style="width: 5%">{{$i}}</td>
	                    <td style="width: 15%">{{$slider->name}}</td>
                        <td style="width: 15%">{{$slider->title}}</td>
	                    <td style="width: 30%">{!!substr($slider->description,0,50) !!}...</td>
	                    <td style="width: 15%">
                        @if($slider->image)
                            <img src="{{URL::to('images/slider-image/'.$slider->image)}}" height="40px" width="50px">
                        @endif
                    </td>
                        <td style="width: 15%">
	                    	<a onclick="getModal('edit-slider/{{$slider->id}}','Edit Feature')" title="Edit" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

	                    	<a type="button" title="Status" href=" {{route('change-slider-status',$slider->id)}}" class="btn @if($slider->status > 0) btn-success @else btn-warning @endif btn-xs">@if($slider->status > 0)<i class="fa fa-check-circle"></i> @else <i class="fa fa-ban"></i> @endif</a>

		                  <a type="button" title="Delete" href="{{route('slider-delete',$slider->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

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