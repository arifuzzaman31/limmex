<div class="card">
  <img class="card-img-top" src="{{URL::to('images/portfolio-image/'.$data->image)}}" height="40px" width="50px" alt="Card image cap">
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
		                <input type="file" id="icon" name="image" class="form-control">
		            </div>
		        </div>
		        <input type="checkbox" id="remember_me" name="status" value="1" class="filled-in">
		        <label for="remember_me">Status</label>
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