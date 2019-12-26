<div class="card">
  <!-- <img class="card-img-top" src="..." alt="Card image cap" height="60px" width="80px"> -->
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('slider.update',$data->id)}}" method="post" enctype="multipart/form-data">
		       @csrf
		       <label for="name">Name</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="name" name="name" value="{{$data->name}}" class="form-control">
		            </div>
		        </div>
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
		            	@if($data->image)
                            <img src="{{URL::to('images/slider-image/'.$data->image)}}" height="50px" width="70px" alt="{{$data->name}}">
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