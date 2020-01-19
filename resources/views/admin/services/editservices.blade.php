<div class="card">
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('service.update',$data->id)}}" method="post" enctype="multipart/form-data">
		       @csrf
		       <label for="title">Title</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="title" value="{{$data->title}}" name="title" class="form-control" required="">
		            </div>
		        </div>
		        <label for="Sort-Description">Sort Description</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="Sort-Description" name="sort_description" value="{{$data->sort_description}}" class="form-control" required="">
		            </div>
		        </div>
		        <label for="tinymce">Description</label>
		        <div class="form-group">
		            <div class="form-line">
		                <textarea id="tinymce" name="description" required="">{{$data->description}}</textarea>
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
		                <img class="card-img-top" src="{{URL::to('images/service-image/'.$data->image)}}" alt="Card image cap" height="60px" width="80px">
		                <input type="file" id="icon" name="image" class="form-control">
		            </div>
		        </div>
		        <label for="service_link">External link (Optional)</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input class="form-control" id="service_link" name="service_link" value="{{$data->service_link}}" required="">
		            </div>
		        </div>
		        <div class="demo-switch-title">Status</div>
		            <div class="switch">
		                <label><input type="checkbox" name="status" value="1" @if($data->status == 1) checked @endif><span class="lever switch-col-green"></span></label>
		            </div>
		        <br>
		        <div class="modal-footer">
		            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		            <button type="submit" class="btn btn-primary">Update</button>
		        </div>
		    </form>
		</div>
	   
	</div>
</div>
<script type="text/javascript">
        tinymce.init({
            selector: "#tinymce"

        });
</script>