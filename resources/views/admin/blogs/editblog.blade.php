<div class="card">
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('blog.update',$data->id)}}" method="post" enctype="multipart/form-data">
		       @csrf
		        <label for="title">Title</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
		            </div>
		        </div>
		        <label for="description">Description</label>
		        <div class="form-group">
		            <div class="form-line">
		                <textarea id="tinymce" name="description">{{$data->description}}</textarea>
		            </div>
		        </div>
		         <div class="form-group">
		            <div class="form-line">
		            	@if($data->blog_image)
                            <img src="{{URL::to('images/blog-image/'.$data->blog_image)}}" height="50px" width="70px">
                        @endif
		                <input type="file" id="icon" name="image" class="form-control">
		            </div>
		        </div>
		        <div class="demo-switch-title">Status</div>
		            <div class="switch">
		                <label><input type="checkbox" @if($data->status === 1)checked @endif name="status" value="1"><span class="lever switch-col-green"></span></label>
		            </div>
		        <br>
		        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
		    </form>
		</div>
	   
	</div>
</div>
<script type="text/javascript">
        tinymce.init({
            selector: "#tinymce"

        });
</script>