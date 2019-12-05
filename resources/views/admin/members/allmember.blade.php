@extends('admin.main')
@section('adminContent')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <button class="btn btn-primary" onclick="getModal('get-member','Add Members')" >Add More Member</button>
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
                    <th>Designation</th>
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Picture</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
            	@if(count($members) > 0)
            	<?php $i = 1; ?>
            	@foreach($members as $member)
	                <tr>
	                    <td style="width: 5%">{{$i}}</td>
	                    <td style="width: 20%">{{$member->name}}</td>
	                    <td>{{$member->designation}}</td>
                        <td>
                        @if($member->image)
                            <img src="{{URL::to('images/team-member-image/'.$member->image)}}" height="40px" width="50px">
                        @endif
                        </td>
	                    <td>
	                    	<a onclick="getModal('edit.member/{{$member->id}}','Edit member')" title="Edit" type="button" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
                            
                            <a onclick="getModal('show-member/{{$member->id}}','Show Member')" title="View" type="button" class="btn btn-primary btn-xs">
                            <i class="fa fa-book"></i>
                          </a>

	                    	<a type="button" title="Status" href=" {{route('change-member-status',$member->id)}}" class="btn @if($member->status > 0) btn-success @else btn-warning @endif btn-xs">@if($member->status > 0)<i class="fa fa-check-circle"></i> @else <i class="fa fa-ban"></i> @endif</a>

		                  <a type="button" title="Delete" href="{{route('member-delete',$member->id)}}" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

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