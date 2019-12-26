<div class="card">
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('portfolio.update',$data->id)}}" method="post" enctype="multipart/form-data">
		       @csrf
		        <label for="link">Link</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="link" name="link" class="form-control" value="{{$data->link}}">
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
                            <img src="{{URL::to('images/portfolio-image/'.$data->image)}}" height="50px" width="70px" alt="portfolio-image">
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