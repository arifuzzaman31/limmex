@extends('admin.main')
@section('adminContent')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <button class="btn btn-primary" onclick="getModal('add-priceplan','Add Product')" >Add More Product</button>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table id="table-data" class="table table-bordered table-striped table-hover js-basic-example dataTable">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Product Link</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            	@if(count($priceplans) > 0)
            	<?php $i = 1; ?>
            	@foreach($priceplans as $priceplan)
	                <tr>
	                    <td style="width: 5%">{{$i}}</td>
                        <td style="width: 15%">{{$priceplan->title}}</td>
	                    <td style="width: 30%">{!!substr($priceplan->description,0,50) !!}...</td>
	                    <td style="width: 7%">{{$priceplan->price}}</td>
                        <td style="width: 15%">@if($priceplan->product_link) {{$priceplan->product_link}} @endif</td>
	                    <td style="width: 15%">
                        @if($priceplan->image)
                            <img src="{{URL::to('images/product-image/'.$priceplan->image)}}" height="40px" width="50px">
                        @endif
                    </td>
                        <td style="width: 15%">
	                    	<a onclick="getModal('edit-priceplan/{{$priceplan->id}}','Edit Feature')" title="Edit" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>

	                    	<a type="button" title="Status" href=" {{route('change-priceplan-status',$priceplan->id)}}" class="btn @if($priceplan->status > 0) btn-success @else btn-warning @endif btn-xs">@if($priceplan->status > 0)<i class="fa fa-check-circle"></i> @else <i class="fa fa-ban"></i> @endif</a>

		                  <a type="button" title="Delete" href="{{route('priceplan-delete',$priceplan->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

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
           getModal('add-priceplan','Add Product');
        });
    @endif 
</script>
@endsection