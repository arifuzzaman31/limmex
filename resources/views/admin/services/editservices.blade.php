<div class="card">
  <img class="card-img-top" src="{{URL::to('images/service-image/'.$data->image)}}" alt="Card image cap" height="60px" width="80px">
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('service.update',$data->id)}}" method="post" enctype="multipart/form-data">
		       @csrf
		        <label for="title">Sort Description</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="Sort-Description" name="sort_description" value="{{$data->sort_description}}" class="form-control">
		            </div>
		        </div>
		        <label for="description">Description</label>
		        <div class="form-group">
		            <div class="form-line">
		                <textarea class="form-control" rows="6" cols="16" name="description">{{$data->description}}</textarea>
		            </div>
		        </div>
		        <label for="type">Type :</label>
		        <div class="row clearfix">
		            <div class="col-sm-12">
		                <select class="form-control show-tick" id="type" name="type">
		                    <option>-- Please select --</option>
		                    <option @if($data->type === 'Ready Software') selected @endif  value="Ready Software">Ready Software</option>
		                    <option @if($data->type === 'Ready WS') selected @endif value="Ready WS">Ready WS</option>
		                    <option @if($data->type === 'Own Service') selected @endif value="Own Service">Own Service</option>
		                    <option @if($data->type === 'On demand service') selected @endif value="On demand service">On demand service</option>
		                </select>
		            </div>
		        </div></br>
		        <label for="icon">Service Icon :</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="file" id="icon" name="image" class="form-control">
		            </div>
		        </div>
		        <label for="service_link">Service FB link (Optional)</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input class="form-control" id="service_link" name="service_link" value="{{$data->service_link}}">
		            </div>
		        </div>
		        <div class="demo-switch-title">Status</div>
		            <div class="switch">
		                <label><input type="checkbox" name="status" value="1"><span class="lever switch-col-green"></span></label>
		            </div>
		        <br>
		        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
		    </form>
		</div>
	   
	</div>
</div>