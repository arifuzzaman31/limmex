<div class="card">
  <!-- <img class="card-img-top" src="..." alt="Card image cap" height="60px" width="80px"> -->
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('feature.update',$data->id)}}" method="post" enctype="multipart/form-data">
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
		                <textarea class="form-control" rows="6" cols="16" name="description">{{$data->description}}</textarea>
		            </div>
		        </div>
		         <div class="form-group">
		            <div class="form-line">
		                <input type="file" id="icon" name="image" class="form-control">
		            </div>
		        </div>
		        <input type="checkbox" id="remember_me" name="status" value="1" class="filled-in">
		        <label for="remember_me">Remember Me</label>
		        <br>
		        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
		    </form>
		</div>
	   
	</div>
</div>