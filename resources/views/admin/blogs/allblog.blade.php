@extends('admin.main')
@section('adminContent')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <button class="btn btn-primary" onclick="getModal('get-blog','Add Blog')" >Add More blog</button>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="table-data" class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            	@if(count($blogs) > 0)
            	<?php $i = 1; ?>
            	@foreach($blogs as $blog)
	                <tr>
	                    <td style="width: 5%">{{$i}}</td>
	                    <td style="width: 20%">{{$blog->title}}</td>
	                    <td style="width: 50%">{!! substr($blog->description,0,80) !!}...</td>
	                    <td style="width: 10%">{{$blog->created_at->toFormattedDateString()}}</td>
                        <td style="width: 15%">
	                    	<a onclick="getModal('edit.blog/{{$blog->id}}','Edit Blog')" title="Edit" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                            
                            <a onclick="getModal('show-blog/{{$blog->id}}','Show blog')" title="View" type="button" class="btn btn-primary btn-xs">
                            <i class="fa fa-book"></i>
                          </a>

	                    	<a type="button" title="Status" href=" {{route('change-blog-status',$blog->id)}}" class="btn @if($blog->status > 0) btn-success @else btn-warning @endif btn-xs">@if($blog->status > 0)<i class="fa fa-check-circle"></i> @else <i class="fa fa-ban"></i> @endif</a>

		                  <a type="button" title="Delete" href="{{route('blog-delete',$blog->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

	                    </td>
	                    
	                </tr>
	                <?php $i++; ?>
                @endforeach
              @endif
            </tbody>
        </table>
    </div>
</div>
<script>
    @if($errors->any())
    $(window).load(function() {
            getModal('get-blog','Add Blog');
        });
    @endif 
</script>
@endsection
