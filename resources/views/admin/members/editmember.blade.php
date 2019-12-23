<div class="card">
  <img class="card-img-top" src="{{URL::to('images/team-member-image/'.$data->image)}}" height="40px" width="50px" alt="Card image cap">
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('member.update',$data->id)}}" method="post" enctype="multipart/form-data">
		       @csrf
		        <label for="title">Name</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="name" name="name" class="form-control" value="{{$data->name}}">
		            </div>
		        </div>
		        <label for="description">Designation</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="designation" name="designation" class="form-control" value="{{$data->designation}}">
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
