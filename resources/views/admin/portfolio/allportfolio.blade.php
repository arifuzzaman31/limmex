@extends('admin.main')
@section('adminContent')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <button class="btn btn-primary" onclick="getModal('get-portfolio','Add Portfolio')" >Add Portfolio</button>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="table-data" class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Link</th>
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            	@if(count($portfolios) > 0)
            	<?php $i = 1; ?>
            	@foreach($portfolios as $portfolio)
	                <tr>
	                    <td style="width: 5%">{{$i}}</td>
	                    <td style="width: 30%">{{$portfolio->link}}</td>
                        <td>
                        @if($portfolio->image)
                            <img src="{{URL::to('images/portfolio-image/'.$portfolio->image)}}" height="40px" width="50px">
                        @endif
                        </td>
	                    <td>
	                    	<a onclick="getModal('edit.portfolio/{{$portfolio->id}}','Edit Portfolio')" title="Edit" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

	                    	<a type="button" title="Status" href=" {{route('change-portfolio-status',$portfolio->id)}}" class="btn @if($portfolio->status > 0) btn-success @else btn-warning @endif btn-xs">@if($portfolio->status > 0)<i class="fa fa-check-circle"></i> @else <i class="fa fa-ban"></i> @endif</a>

		                  <a type="button" title="Delete" href="{{route('portfolio-delete',$portfolio->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

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