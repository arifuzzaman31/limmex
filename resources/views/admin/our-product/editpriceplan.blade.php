<div class="card">
	  <div class="card-body">
	    <div class="body">
		    <form action="{{route('priceplan.update',$data->id)}}" method="post" enctype="multipart/form-data">
		       @csrf
		       <label for="title">Title</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control" required="">
		            </div>
		        </div>
		      
		        <label for="tinymce">Description</label>
		        <div class="form-group">
		            <div class="form-line">
		            	<textarea id="description" name="description" rows="6" class="form-control ckeditor" placeholder="Write your message..">{!! $data->description !!}</textarea>
		            </div>
		        </div>
		        <label for="price">Price</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="price" name="price" value="{{$data->price}}" class="form-control" required="">
		            </div>
		        </div>
		        <label for="product_link">Product Link</label>
		        <div class="form-group">
		            <div class="form-line">
		                <input type="text" id="product_link" name="product_link" class="form-control" value="{{$data->product_link}}">
		            </div>
		        </div>
		         <div class="form-group">
		            <div class="form-line">
		            	@if($data->image)
                            <img src="{{URL::to('images/product-image/'.$data->image)}}" height="50px" width="70px">
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