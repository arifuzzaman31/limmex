<div class="card">
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('slider.update',$data->id)}}" method="post" enctype="multipart/form-data">
		       @csrf
		       <label for="name">Name</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="name" name="name" value="{{$data->name}}" class="form-control" required="">
		            </div>
		        </div>
		        <label for="title">Title</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control" required="">
		            </div>
		        </div>
		        <label for="description">Description</label>
		        <div class="form-group">
		            <div class="form-line">
		                <textarea id="description" name="description" rows="6" class="form-control ckeditor" placeholder="Write your message..">{!! $data->description !!}</textarea>
		            </div>
		        </div>
		         <div class="form-group">
		            <div class="form-line">
		            	@if($data->image)
                            <img src="{{URL::to('images/slider-image/'.$data->image)}}" height="50px" width="70px" alt="{{$data->name}}">
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
    CKEDITOR.replace( 'description',
         {
          customConfig : 'config.js',
          toolbar : 'simple'
          })
</script>