<div class="card">
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('member.update',$data->id)}}" method="post" enctype="multipart/form-data">
		       @csrf
		        <label for="title">Name</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="name" name="name" class="form-control" value="{{$data->name}}" required="">
		            </div>
		        </div>
		        <label for="tinymce">Designation</label>
		        <div class="form-group">
		            <div class="form-line">
		            	<textarea id="tinymce" name="description" required="">{{$data->designation}}</textarea>
		            </div>
		        </div>
		        <label for="title">Facebook Link</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="fb_link" name="fb_link" class="form-control" value="{{$data->fb_link}}">
		            </div>
		        </div>
		        <label for="description">Twiter Link</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="tw_link" name="tw_link" class="form-control" value="{{$data->tw_link}}">
		            </div>
		        </div>
		        <label for="description">Linked-In</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="in_link" name="in_link" class="form-control" value="{{$data->in_link}}">
		            </div>
		        </div>
		         <div class="form-group">
		            <div class="form-line">
		            	@if($data->image)
                            <img src="{{URL::to('images/team-member-image/'.$data->image)}}" height="50px" width="70px">
                        @endif
		                <input type="file" id="icon" name="image" class="form-control">
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